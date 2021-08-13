<?php 

namespace App\Http\Controllers;
use App\Models\User;


class Usercontroller extends Controller{

	function index() {

		$data['list_user'] = User::all();
		return view ('user.index', $data);
	
	}
	// untuk menampilikan seluruh data

	function create() {

		return view('user.create');


	}
	// untuk menampilkan from data baru


	function store (){

		$user = new User;
		$user->username = request ('username');
		$user->nama = request ('nama');
		$user->email = request ('email');
		$user->alamat = request ('alamat');
		$user->password = bcrypt(request ('password'));
	
		$user->save();

		return redirect('user')->with('success', 'Data Berhasil Ditambahkan');


	}
	// menyimpan data input baru
 
 	function show(User $user) {
 		$data['user'] = $user;
 		return view('user.show', $data);




 	}
 	// melihat salah satu data


 	function edit(User $user) {
 		$data['user'] = $user;
 		return view('user.edit', $data);

 	}
 	// untuk mengedit data 

 	function update(User $user) {
 	
		
	
		$user->username = request ('username');
		$user->nama = request ('nama');
		$user->email = request ('email');
		$user->alamat = request ('alamat');
		if(request('password')) $user->password = bcrypt(request ('password'));
		$user->save();


		return redirect('user')->with('warning', 'Data Berhasil Diubah');


 	}



 	// untuk mengupdate data/ merubaha data

 	function destroy(User $user){
 		$user->delete();
 		return redirect('user')->with('danger', 'Data Berhasil Dihapus');


 	}
 	// untuk menghapus data

 	}
