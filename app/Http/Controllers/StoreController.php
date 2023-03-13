<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function stores_view()
    {
        return view('user.e-commerce_store');
    }
}
