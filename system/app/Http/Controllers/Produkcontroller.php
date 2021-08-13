<?php 

namespace App\Http\Controllers;
use App\Models\Produk;


class Produkcontroller extends Controller{

	function index() {

		$data['list_produk'] = Produk::all();
		return view ('produk.index', $data);
	
	}
	// untuk menampilikan seluruh data

	function create() {

		return view('produk.create');


	}
	// untuk menampilkan from data baru


	function store (){

		$produk = new Produk;
		$produk->nama = request ('nama');
		$produk->harga = request ('harga');
		$produk->berat = request ('berat');
		$produk->stok = request ('stok');
		$produk->deskripsi = request ('deskripsi');
		$produk->save();

		return redirect('produk')->with('success', 'Data Berhasil Ditambahkan');


	}
	// menyimpan data input baru
 
 	function show(Produk $produk) {
 		$data['produk'] = $produk;
 		return view('produk.show', $data);




 	}
 	// melihat salah satu data


 	function edit(Produk $produk) {
 		$data['produk'] = $produk;
 		return view('produk.edit', $data);

 	}
 	// untuk mengedit data 
 	function update(Produk $produk) {
 	
		$produk->nama = request ('nama');
		$produk->harga = request ('harga');
		$produk->berat = request ('berat');
		$produk->stok = request ('stok');
		$produk->deskripsi = request ('deskripsi');
		$produk->save();

		return redirect('produk')->with('warning', 'Data Berhasil Diubah');


 	}
 	// untuk mengupdate data/ merubaha data

 	function destroy(Produk $produk){
 		$produk->delete();
 		return redirect('produk')->with('danger', 'Data Berhasil Dihapus');


 	}
 	// untuk menghapus data

 	}
