<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Controllers\BaseController as BaseController;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;

class RegisterController extends BaseController
{
    //
    public function register(Request $request){
        $validator = Validator::make($request->all(),
        [
            'name'=>'required',
            'emali'=>'required',
            'password' => 'required',   
        ]);
        if ($validator->fails()){
            return $this->sendError('Validator Error .',$validator->errors());
        }
        $input =$request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        // $success['token'] =  $user->createToken('MyApp')->accessToken;
        $success['name'] =  $user->name;
        return $this->sendResponse($success, 'User Register ok');
    }

}
