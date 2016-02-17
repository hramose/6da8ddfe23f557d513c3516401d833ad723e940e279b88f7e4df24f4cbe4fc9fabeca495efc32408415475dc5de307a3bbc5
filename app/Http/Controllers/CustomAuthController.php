<?php

namespace App\Http\Controllers;

/*use Illuminate\Http\Request;

use App\Http\Requests;*/
use App\Http\Controllers\Controller;

use Auth;
use Request;

class CustomAuthController extends Controller
{
    public function getLogin() {  
        return view('login'); //or just use the default login page  
    }  
  
    public function postLogin() {  
        $username = Request::input('username');  
        $password = Request::input('password');  
              
        if (Auth::attempt(['usr_username' => $username, 'password' => $password]))  
        {  
            //echo "success";  
            return redirect('/');  
        }  
        else {  
            return "fail";  
        }  
    }  
}
