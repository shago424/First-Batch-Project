<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

	public function view(){

		$users = User::get();

		return view('backend.user.user-view',compact('users'));

	}

	public function add(){

		return view('backend.user.user-add');

	}

	public function store(){

		    $this->validate($request,[
            'name'=>'required',
            'email'=>'required|unique:users,email',
            'mobile'=>'required',
            'address'=>'required',
            'password'=>'required',

    
            

        ]);



		

	}
    
}
