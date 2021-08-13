@extends ('template.base')

@section('konten')

<div class="container">
    <div class="row">
		<div class="col-md-12 mt-5 ">
			<div class="card">
			  <div class="card-header bg-secondary">
				Detail User
			</div>
			<div class="card-body">
				<h3>{{$user->nama}}</h3>
			<p>
				Username :{{"@".$user->username}} | Email : {{$user->email}} | Alamat : {{$user->alamat}} 
			</p>
			
			<a class="btn btn-dark float-right" href="{{url ('admin/user')}}">kembali</a>
			</div>

		</div>
	</div>
</div>
</div>

@endsection
