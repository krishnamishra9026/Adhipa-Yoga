<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;
use Session;

class PayPalController extends Controller
{
    public function __construct(){
        $this->provider = new ExpressCheckout();
    }

    public function payment(Request $request) {

        $packageUserData = Session::get('packageUserData');
        $data = [];
        $data['items'] = [
            [
                'name' => $packageUserData->name,
                'price' => $packageUserData->price,
                'desc' => 'Description for devnote tutorial!',
                'qty' => 1
            ]
        ];

        #print_r($data['items']); exit;

        $data['invoice_id'] = 1;
        $data['invoice_description'] = "Your order #{$data['invoice_id']} Invoice";
        $data['return_url'] = route('payment.success');
        $data['cancel_url'] = route('payment.cancel');
        $data['total'] = $packageUserData->price;

        $provider = $this->provider;
        $response = $provider->setExpressCheckout($data);
        //$response = $provider->setExpressCheckout($data, true);
        echo "<pre>";print_r($response);exit;
        return redirect($response['paypal_link']);
    }
    public function success(Request $request) {
        $provider = $this->provider;
        $response = $provider->getExpressCheckoutDetails($request->token);
        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            return view('pay_success');
        }
         return view('pay_success');
    }
    public function cancel() {
         return view('pay_cancel');
    }
}