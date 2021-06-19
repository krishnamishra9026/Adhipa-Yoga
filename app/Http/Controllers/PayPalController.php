<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;

class PayPalController extends Controller
{
    public function __construct(){
        $this->provider = new ExpressCheckout();
    }

    public function payment() {
        $data = [];
        $data['items'] = [
            [
                'name' => 'devnote tutorial create',
                'price' => 1,
                'desc' => 'Description for devnote tutorial!',
                'qty' => 1
            ]
        ];

        $data['invoice_id'] = 1;
        $data['invoice_description'] = "Your order #{$data['invoice_id']} Invoice";
        $data['return_url'] = route('payment.success');
        $data['cancel_url'] = route('payment.cancel');
        $data['total'] = 1;

        $provider = $this->provider;
        $response = $provider->setExpressCheckout($data);
        // $response = $provider->setExpressCheckout($data, true);
        // echo "<pre>";print_r($response);exit;
        return redirect($response['paypal_link']);
    }
    public function success(Request $request) {
        $provider = $this->provider;
        $response = $provider->getExpressCheckoutDetails($request->token);
        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            return view('success');
        }
        dd('Something is wrong.');
    }
    public function cancel() {
        return view('cancel');
    }
}