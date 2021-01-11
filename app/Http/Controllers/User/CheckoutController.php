<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Mail\OrderConfirmationMail;
use App\Models\User\CartItem;
use App\Models\User\Order;
use App\Models\User\OrderProduct;
use App\Models\User\ShippingAddress;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    public function index()
    {
        if (Session::has('user_id')) {
            return view('user.pages.checkouts.index');
        }

        return redirect('/');
    }

    public function create()
    {
        $user = User::where('id', auth()->id(0))->with('shippingAddresses', 'userProfile')->first();

        $cartItems = CartItem::where('user_id', Auth::id())->with('product')->get();

        if ($this->checkCart()->isNotEmpty()) {

            return view('user.pages.checkouts.create', compact('user', 'cartItems'));
        }


        return redirect()->route('cart.index')->with('error-message', 'Currently your cart is empty please purchase some product');
    }

    public function store(Request $request)
    {

        $checkoutData = session('checkoutData');
        $payment = session('payment');
        $paymentResult = session('paymentResult');


        $userProfileCheck = auth()->user()->userProfile;
        $userProfile = auth()->user()->userProfile();

        $data = [
            'phone' => $checkoutData['phone'],
            'line1' => $checkoutData['line1'],
            'line2' => $checkoutData['line2'],
            'city' => $checkoutData['city'],
            'postcode' => $checkoutData['postcode'],
            'state' => $checkoutData['state'],
        ];

        if($userProfileCheck){
            $userProfile->update($data);
        }else{
            $userProfile->create($data);
        }


        //$paymentState= $paymentResult->transactions[0]->related_resources[0]->sale->payment_state;

        if ($payment) {
            $cartItems = CartItem::where('user_id', Auth::id())->with('product')->get();

            /*  $totalPrice = 0;
              $shippingCharge = 0;*/

            $shippingCost = 0;
            $productCost = 0;


            foreach ($cartItems as $cartItem) {
                $shippingCost += ($cartItem->product->shipping_charge);
                $productCost += ($cartItem->product->new_price * $cartItem->quantity);
            }

            $totalCost = ($productCost + $shippingCost);
            $invoice = $paymentResult->transactions[0]->invoice_number;

            $order = Order::create([
                'customer_id' => auth()->id(),
                'shipping_id' => $checkoutData['shipping_id'],
                'transaction_id' => $paymentResult->transactions[0]->related_resources[0]->sale->id,
                'payer_id' => $payment->payer->payer_info->payer_id,
                'payment_method' => $payment->payer->payment_method,
                'payer_email' => $payment->payer->payer_info->email,
                'invoice_number' => $invoice,
                'payment_mode' => $paymentResult->transactions[0]->related_resources[0]->sale->payment_mode,
                'payment_state' => $paymentResult->transactions[0]->related_resources[0]->sale->state,
                'payment_id' => $paymentResult->id,
                'total_amount' => $totalCost,
                'paid_amount' => $paymentResult->transactions[0]->amount->total,
                'status' => 'New',
                'seller_id' => 0,
            ]);

            $mailCartList = $cartItems;


            $cartItems->each(function ($item) use ($order) {

                OrderProduct::create([
                    'order_id' => $order->id,
                    'product_id' => $item->product->id,
                    'quantity' => $item->quantity,
                ]);

                $item->delete();
            });


            //session(['checkoutData' => null, 'payment' => null, 'paymentResult' => null]);

            $shippingInfo = ShippingAddress::where('id', $checkoutData['shipping_id'])->first();


            $mailData = [
                'name' => $checkoutData['name'],
                'email' => $checkoutData['email'],
                'subject' => 'Order Complete',
                'orders' => $mailCartList,
                'shipping_cost' => $shippingCost,
                'total' => $totalCost,
                'invoice' => $invoice,
                'shipping' => $shippingInfo,
            ];

            $mailStatus = Mail::to($checkoutData['email'])->send(new OrderConfirmationMail($mailData));


            return redirect(Route('checkouts.index'))->with('user_id', auth()->id());

        } else
            return redirect(Route('cart.index'));


    }

    public function shippingAddressCreate()
    {

        $authUser = Auth::user();

        if ($this->checkCart()->isNotEmpty()) {
            return view('user.pages.checkouts.shipping-address', compact('authUser'));
        }

        return redirect(route('cart.index')->with('error-message', 'Currently your cart is empty please purchase some product'));
    }

    public function shippingAddressStore(Request $request)
    {

        $this->validate($request,[
            'line1' => ['required'],
            'postcode' => ['required'],
        ]);

        $shipping = new ShippingAddress();
        $shipping->title = $request->line1. ' (' . $request->postcode . ')';
        $shipping->name = Auth::user()->name;
        $shipping->email = Auth::user()->email;
        $shipping->phone = $request->phone;
        $shipping->line1 = $request->line1;
        $shipping->line2 = $request->line2;
        $shipping->postcode = $request->postcode;
        $shipping->state = $request->state;
        $shipping->city = $request->city;
        $shipping->country = $request->country;
        $shipping->describe_address = $request->describe_address;
        $shipping->user_id = Auth::id();
        $shipping->save();


        return redirect(route('checkouts.create'))->with('shipping_id', $shipping->id);
    }

    private function checkCart()
    {

        $cartItems = CartItem::where('user_id', Auth::id())->with('product')->get();
        return $cartItems;
    }
}
