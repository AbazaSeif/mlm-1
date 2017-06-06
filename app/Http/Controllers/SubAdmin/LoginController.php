<?php

namespace App\Http\Controllers\SubAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Auth;
use Session;
class LoginController extends Controller
{
public function login(){
    	return view('backend.login');
    }

    public function checkLogin(LoginRequest $request){
    	// $credential = ['email' => $request->email,'password' => $request->password];

    	if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
    		
    		 return redirect('subadmin');
    	}else{
    		Session::flash('flash_error', 'Your Given Credential Is Wrong.');
    		return redirect('adminlogin');
    	}    	
    }	

    public function logout(){
    	Auth::guard('admin')->logout();
    	Session::flash('flash_success', 'You Are Successfully Logout.');
    	return redirect('adminlogin');
    }
}