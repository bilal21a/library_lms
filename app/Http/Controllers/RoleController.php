<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function role_view()
    {
        return  view('user.roles');
    }

    public function role_details()
    {
        return view('user.rolesDetail');
    }
}
