<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request){
        $username = $request->username;
        $password = $request->password;

        return "we are in login page".$username.$password."<a href='/user/child' />click here to login again</a>";
    }    
}
