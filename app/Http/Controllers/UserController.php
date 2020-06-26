<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Controllers\API\BaseController as BaseController;
use App\User;

class UserController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
 
     */
// public function form(){
//     return view('form');
// }
// public function wupdate(){
//     return view('update');
// }

public function form(){
    $user= User::all();
     return view('user.index', compact('user'));
}

public function index()
    {
        //
        $user = User::all();
        //return view('user.index', compact('user'));
        return response()->json($user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
public function create()
    {
        //
        $input = $request->all();
        $validator = Validatior::make($input,[
            'name'=>'required',
            'password'=>'requied'
        ]);
        if($validator->fails()){
            return $this->sendError('Validatior Error.', $validator->errors());
        }
        $user = User::create($input);
        return $this->sendResponse($user->toArray(),
        'User create successfully' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
public function store(Request $request)
    {
        //
        $input = $request->all();
        // $validator = Validatior::make($input,[
        //     'name'=>'required',
        //     'password'=>'requied'
        // ]);
        // if($validator->fails()){
        //     return $this->sendError('Validatior Error.', $validator->errors());
        // }
        $user = User::create($input);
        return $this->sendResponse( $user->toArray(),
        'User store successfully') ;
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 public function show($id)
    {
        $user = User::find($id);


        if (is_null($user)) {
            return $this->sendError('ID not found.');
        }


        return response()->json($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function edit($id)
    {
        //
        $input = $request->only(['email', 'password']);
        $input = $request->except('username');
        $input->save();
        return view('edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function update(Request $request, $id)
    {
        dd(111);
        echo "aaa";
        $edit =User::all($id);
        //$input =$request->all();
        $validator =Validator::make($input,[
            'name'=>'required',
            'password'=>'requied'
        ]);
        if ($validator->fails()){
            return $this->sendError('Validation Error.',$validator->errors());
        }
        $edit->name=$request->get('name');
        $edit->password=$request->get('password');
        $edit->mail=$request->get('email');
        // $input->name=$input['name'];
        // $input->password=$input['password'];
        $edt->save();
        return $this->sendRespones($id->toArray(),'Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function destroy(id $id)
    {
        //
        // $user= User::findOrFail($id);
        $id->destroy();
        // $user->save();
        return $this->sendResponse($product->toArray(), 'User deleted successfully.');
    }
}
