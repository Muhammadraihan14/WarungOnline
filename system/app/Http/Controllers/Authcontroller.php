<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;

class Authcontroller extends Controller{

	function showLogin() {
		return view('login');
	}

	function loginprocess(){
		
		if (Auth::attempt(['email' => request('email'), 'password' =>  request('password')])) {
			return redirect('beranda')->with('success', 'Login Berhasil');
		} else {
			return back()->with('danger', 'Login Gagal, Email atau Sandi Salah');
		}

	}

	function logout(){
		Auth::logout();
		return redirect('login');

	}

	function registration(){

	}

	function forgotPassword(){

	}


}

