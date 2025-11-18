<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function showRegister(){
        return view('authetication.register')
    }
    function showLogin(){
            return view('authetication.login')
    }
    function performLogin(){

    }
    function performRegister(){
        
    }
}
