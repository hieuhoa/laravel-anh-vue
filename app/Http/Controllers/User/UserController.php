<?php

namespace App\Http\Controllers\User;

//use App\Http\Controller\User;
//use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class UserController extends Controller
{

    public   function UserView(){
        return view('profile',['user'=>User::findOrFail($id)]);
        
    }
    
    public  function UserRegister(){
        return view('UserRegister');
    }

};
