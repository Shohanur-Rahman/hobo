<?php

namespace App\Http\Controllers\admin;

use App\Models\PaymentRefund;
use App\Http\Controllers\Controller;
use App\Models\User\Order;
use Illuminate\Http\Request;
use PayPal\Api\Amount;
use PayPal\Api\Refund;
use PayPal\Api\RefundRequest;
use PayPal\Api\Sale;

class PaypalRefundController extends Controller
{

    public function index()
    {
        $refunds = PaymentRefund::orderBy('id', 'desc')->get();


        return view('admin.modules.refund.index', compact('refunds'));
    }

    public function create()
    {
        return view('admin.modules.refund.create');
    }

    public function store(Request $request)
    {
        $invoiceNumber = $request->invoice_number;
        $invoiceAmount = $request->invoice_amount;
        $order = Order::where('invoice_number', $invoiceNumber)->firstOrFail();
        $saleId = $order->transaction_id;

        $orderId = $order->id;
        $amt = new Amount();
        $amt->setCurrency('USD')
            ->setTotal($invoiceAmount);

        // ### Refund object
        $refundRequest = new RefundRequest();
        $refundRequest->setAmount($amt);

        // ###Sale
        // A sale transaction.
        // Create a Sale object with the
        // given sale transaction id.
        $sale = new Sale();
        $sale->setId($saleId);
        try {
            // Create a new apiContext object so we send a new
            // PayPal-Request-Id (idempotency) header for this resource
            $apiContext = new \PayPal\Rest\ApiContext(
                new \PayPal\Auth\OAuthTokenCredential(
                    'Ad56MPQaJvtIRSxjYGkFFxrFNtdCAtpRk31ranufYkZymwCT2Wxk77KolPrfBAuq2siFp3GRNCVL0uxc',
                    'EO7f6_6FI7EfkSNwb6QYpJxxl7I92YMlObECKwbp51ARq1VfzqZorsSZnBw-hEJA3g64F-jB6iKtb_sE'
                )
            );

            // Refund the sale
            // (See bootstrap.php for more on `ApiContext`)
            $refundedSale = $sale->refundSale($refundRequest, $apiContext);
        } catch (\Exception $ex) {
            dd($ex);
            exit(1);
        }

        // NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
        //ResultPrinter::printResult("Refund Sale", "Sale", $refundedSale->getId(), $refundRequest, $refundedSale);

        $pRefund = new PaymentRefund();
        $pRefund->refund_id = $refundedSale->id;
        $pRefund->transaction_id = $refundedSale->sale_id;
        $pRefund->parent_payment = $refundedSale->parent_payment;
        $pRefund->invoice_number = $invoiceNumber;
        $pRefund->order_id = $orderId;
        $pRefund->state = $refundedSale->state;
        $pRefund->refund_from_transaction_fee = $refundedSale->refund_from_transaction_fee->value;
        $pRefund->amount = $refundedSale->amount->total;
        $pRefund->refund_from_received_amount = $refundedSale->refund_from_received_amount->value;
        $pRefund->total_refunded_amount = $refundedSale->total_refunded_amount->value;
        $pRefund->save();

        return redirect(route('refunds.index'))->with('success','Your refund request has been approved.');
    }
}
