<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use shurjopayv2\ShurjopayLaravelPackage8\Http\Controllers\ShurjopayController;

class sp extends Controller
{
    function index()
    {
    $info = array( 'currency' => "BDT",
    'amount' => 65,
    'order_id' => "sp2323234", 
    'discsount_amount' => 5, 
    'disc_percent' => 5, 
    'client_ip' => "102.1.1.1", 
    'customer_name' => "Swapnil", 
    'customer_phone' => "01876898977", 
    'email' => "swapnil@yahoo.com", 
    'customer_address' => "ctg", 
    'customer_city' => "ctg", 
    'customer_state' => "ctg", 
    'customer_postcode' => "1212", 
    'customer_country' => "Bangladesh", );

    $shurjopay_service = new ShurjopayController();
    return $shurjopay_service->checkout($info);
    
}

}
