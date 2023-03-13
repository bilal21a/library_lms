<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user_management()
    {
        return view('user.User_management');
    }
}
