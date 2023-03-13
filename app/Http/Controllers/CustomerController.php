<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customer()
    {
        return view('user.customers.customer');
    }

    public function add_customer()
    {
        return view('user.customers.addCustomer');
    }
    public function edit_customer()
    {
        return view('user.customers.editCustomer');
    }
}
