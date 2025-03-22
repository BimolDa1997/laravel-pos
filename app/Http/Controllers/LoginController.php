<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    function newLogin(Request $req){
        $req->validate([
            'username'=>'required',
            'password'=>'required'
        ],[
            'username.required'=>'User Name Can Not Be Empty!',
            'password.required'=>'Password Must Be Fillup!'
        ]);

      $users = User::all();
      return view('admin.superadmin');
    }
}
