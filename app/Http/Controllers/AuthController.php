<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function tampilRegisterasi(){
        return view('registerasi');
    }
}
