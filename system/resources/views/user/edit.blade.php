@extends ('template.base')

@section('konten')

<div class="container">
    <div class="row">
		<div class="col-md-12 mt-5 ">
			<div class="card">
			  <div class="card-header">
				Edit data User
			</div>
			<div class="card-body">
				<form action="{{url ('user', $user->id)}}" method="post">
					@csrf
					@method("PUT")
				<div class="form-group">
					<label class="control-label">
						Username
					</label>
					<input type="text" class="form-control" name="username" value="{{$user->username}}"></input>
				</div>

				<div class="form-group">
					<label class="control-label">
						Nama
					</label>
					<input type="text" class="form-control" name="nama" value="{{$user->nama}}"></input>
				</div>
				<div class="form-group">
					<label class="control-label">
						Email
					</label>
					<input type="text" class="form-control" name="email" value="{{$user->email}}"></input>
				</div>
				<div class="form-group">
					<label class="control-label">
						Alamat
					</label>
					<input type="text" class="form-control" name="alamat" value="{{$user->alamat}}"></input>
				</div>

				<div class="form-group">
					<label class="control-label">
						Password
					</label>
					<input type="password" class="form-control" name="password" ></input>
				</div>
		<button type="submit" class="btn btn-success float-right"><i class="fa fa-save"></i>  Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
@endsection
