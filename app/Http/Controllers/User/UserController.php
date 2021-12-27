<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Addbook;

class UserController extends Controller
{
    function create(Request $request){
    	$request->validate([
    		'name'=>'required',
    		'email'=>'required|email|unique:users,email',
    		'password'=>'required|min:5|max:12',
    		'cpassword'=>'required|min:5|max:12|same:password'
    	]);

    	$user = new User();
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->password = \Hash::make($request->password);
    	$save = $user->save();

    	if($save)
    	{
    		return back()->with('success','You are now registered successfully');
    	}
    	else
    	{
    		return back()->with('fail','Something went wrong, try again later');	
    	}
    }

    function check(Request $request)
   {
   	$request->validate([
   		'email'=>'required|email|exists:users,email',
   		'password'=>'required|min:5|max:12'
   	]);

		$creds = $request->only('email','password');

		   	if(Auth::guard('web')->attempt($creds)){
		   		return redirect()->route('user.home');
		   	}
		   	else
		   	{
		   		return redirect()->route('user.login')->with('fail','Incorrect credentials');
		   	}
	}

	public function show(Request $request)
    {
        return view('/user/home')->with('result',Addbook::all());
    }


	function logout(){
		Auth::guard('web')->logout();
		return redirect('/');
	}
}
