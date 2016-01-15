<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Libraries\sms;
use App\Customer;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class CustomerController extends Controller
{
	function index(){
		return view('sms_form');
	}

    function sendSMS(Request $request){
    	$customers = Customer::all();
    	// return $customers;

    	// return $request->input('phone_number');

		$user_name = $request->input('customer');
		$phone_number = $request->input('phone_number');
		DB::table('customers')->insert(
		    ['name' => $user_name, 'phone_number' => $phone_number]
		);


    	$sms = new sms();
    	$username = 0812916723;
		$password = 098663;
		$msisdn = $phone_number;
		$message = 'Test sms with laravel framework';
		$sender = 'THAIBULKSMS';
		// $ScheduledDelivery = date('ymdHi');

		// return $ScheduledDelivery ;

		$result = $sms->send_sms('0812916723','098663','0836554738',$message,$sender);

    	return $result;

    }
}
