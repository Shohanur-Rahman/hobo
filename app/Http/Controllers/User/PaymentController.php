<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User\CartItem;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Api\Refund;
use PayPal\Api\RefundRequest;
use PayPal\Api\Sale;

use PayPal\Api\PaymentExecution;
use PHPUnit\TextUI\ResultPrinter;


class PaymentController extends Controller
{

    public function index()
    {
        //
    }

    public function create(Request $formRequest)
    {


        session(['checkoutData' => request()->all()]);

        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                'Ad56MPQaJvtIRSxjYGkFFxrFNtdCAtpRk31ranufYkZymwCT2Wxk77KolPrfBAuq2siFp3GRNCVL0uxc',
                'EO7f6_6FI7EfkSNwb6QYpJxxl7I92YMlObECKwbp51ARq1VfzqZorsSZnBw-hEJA3g64F-jB6iKtb_sE'
            )
        );


        $payer = new Payer();
        $payer->setPaymentMethod("paypal");


        $myCartList = CartItem::with('product')->where('user_id', Auth::id())->get();

        $itemList = new ItemList();

        $shippingCost = 0;
        $productCost = 0;
        $totalCost = 0;

        foreach ($myCartList as $cartItem) {

            $item1 = new Item();
            $item1->setName($cartItem->product->title)
                ->setCurrency('USD')
                ->setQuantity($cartItem->quantity)
                ->setSku($cartItem->product->sku ? $cartItem->product->sku : '') // Similar to `item_number` in Classic API
                ->setPrice(($cartItem->product->new_price * $cartItem->quantity));
            $itemList->addItem($item1);

            $shippingCost += ($cartItem->product->shipping_charge);
            $productCost += ($cartItem->product->new_price * $cartItem->quantity);

        }


        $totalCost = ($productCost + $shippingCost);


        $details = new Details();
        $details->setShipping($shippingCost)
            // ->setTax(1.3)
            ->setSubtotal($productCost);


        $amount = new Amount();
        $amount->setCurrency("USD")
            ->setTotal($totalCost)
            ->setDetails($details);


        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription("Payment description")
            ->setInvoiceNumber(uniqid());


        $baseUrl = env('APP_URL');


        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl(route('payments.execute'))
            ->setCancelUrl("$baseUrl/cancel-payment");


        $payment = new Payment();
        $payment->setIntent("sale")
            ->setPayer($payer)
            ->setRedirectUrls($redirectUrls)
            ->setTransactions(array($transaction));

        $request = clone $payment;


        try {
            $payment->create($apiContext);
        } catch (Exception $ex) {
            ResultPrinter::printError("Created Payment Using PayPal. Please visit the URL to Approve.", "Payment", null, $request, $ex);
            exit(1);
        }


        $approvalUrl = $payment->getApprovalLink();

        return redirect($approvalUrl);


    }


    public function execute()
    {
        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                'Ad56MPQaJvtIRSxjYGkFFxrFNtdCAtpRk31ranufYkZymwCT2Wxk77KolPrfBAuq2siFp3GRNCVL0uxc',
                'EO7f6_6FI7EfkSNwb6QYpJxxl7I92YMlObECKwbp51ARq1VfzqZorsSZnBw-hEJA3g64F-jB6iKtb_sE'
            )
        );


        $paymentId = \request("paymentId");


        $payment = Payment::get($paymentId, $apiContext);


        $execution = new PaymentExecution();
        $execution->setPayerId(request("PayerID"));

        $transaction = new Transaction();
        $amount = new Amount();
        $details = new Details();

        $shippingCost = 0;
        $productCost = 0;
        $totalCost = 0;

        foreach ($payment->transactions as $tran) {
            $shippingCost = $tran->amount->details->shipping;
            $productCost = $tran->amount->details->subtotal;
            $totalCost = $tran->amount->total;
        }



        $details->setShipping($shippingCost)
            //->setTax(1.3)
            ->setSubtotal($productCost);


        $amount->setCurrency('USD');
        $amount->setTotal($totalCost);
        $amount->setDetails($details);
        $transaction->setAmount($amount);


        $execution->addTransaction($transaction);

        try {

            $result = $payment->execute($execution, $apiContext);

            session(['payment' => $payment, 'paymentResult' => $result]);


        } catch (Exception $ex) {
            ResultPrinter::printError("Executed Payment", "Payment", null, null, $ex);
            exit(1);
        }




        return redirect(Route('checkouts.store'));


        //return redirect("https://google.com");

    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {

    }

}
