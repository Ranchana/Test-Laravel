<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Customer;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    function showCustomer(){
    	$customers = App\Customer::all();
    	return $customers;
    }
}
