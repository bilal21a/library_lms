<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function product()
    {
        return view('user.products.product');
    }
    public function add_product()
    {
        return view('user.products.addProduct');
    }
    public function edit_product()
    {
        return view('user.products.editProduct');
    }
}
