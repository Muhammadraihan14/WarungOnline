<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Homecontroller extends Controller {
	
	function showBeranda() {
		return view('beranda');
	}

	function showProduk() {
		return view('produk');
	}


	function showKatagori() {
		return view('katagori');
	}

	function showPromo() {
		return view('promo');
	}

	
}




