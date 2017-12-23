<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstaController extends Controller
{
    public function index(){


    	 
    	return view('instaform');
    }
    public function create(Request $request){
    	$ch = curl_init();

    	curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
    	curl_setopt($ch, CURLOPT_HEADER, FALSE);
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    	curl_setopt($ch, CURLOPT_HTTPHEADER,
    	            array("X-Api-Key:test_a284148ec06d14eb286880e6d05",
    	                  "X-Auth-Token:test_41ca24cf64412f9933973a07a0e")); 

    	// array("X-Api-Key:d13ed3a0d44a192e680566a3bf61a67e",
    	//                   "X-Auth-Token:6772f34662b26d0ab83007b458aae0c4"));
    	$payload = Array(
    	    'purpose' => $request->purpose,
    	    'amount' => $request->amount,
    	    'phone' => $request->phone,
    	    'buyer_name' => $request->name,
    	    'redirect_url' => 'http://127.0.0.1:8000/redirect/',
    	    'send_email' => true,
    	    'webhook' => 'http://innovusine.com/webhook/',
    	    'send_sms' => true,
    	    'email' => $request->email,
    	    'allow_repeated_payments' => false
    	);
    	curl_setopt($ch, CURLOPT_POST, true);
    	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
    	$response = curl_exec($ch);
    	curl_close($ch); 
    	


    	// echo $response;
    	$data = json_decode($response,true);


    	return redirect($data['payment_request']['longurl']);




    }
     public function redirect(Request $request){



    	return $request->all();




    }
}
