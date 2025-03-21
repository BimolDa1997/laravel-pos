<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function newLogin(Request $req){
        echo $req->username;
    }
}
