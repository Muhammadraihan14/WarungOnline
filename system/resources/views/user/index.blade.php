@extends ('template.base')

@section('konten')

<div class="container">
    <div class="row">
		<div class="col-md-12 mt-5 ">
			<div class="card">
			  <div class="card-header">
				Data User
				<a href="{{url ('admin/user/create')}}" class="btn btn-success float-right"><i class="fa fa-plus"></i>  Tambah data</a>
			</div>
			<div class="card-body">
				<table class="table"  >
					<thead class="bg-dark">
					<th>No</th>
					<th>Aksi</th>
					<th>Nama</th>
					<th>Email</th>
					


					</thead>
					

					<tbody>
						@foreach($list_user as $user)

				    <tr>
						<td>{{$loop->iteration}}</td>
						<td>
							<div class="btn btn-group">	
							<a href="{{url ('admin/user', $user->id)}}" class="btn bg-secondary"><i class="fa fa-info"></i></a>
							<a href="{{url ('admin/user', $user->id)}}/edit" class="btn bg-warning"><i class="fa fa-edit"></i></a>

							@include('template.utils.delete', ['url' => url ('admin/user', $user->id )])
							</div>
						</td>
						<td>{{$user->nama}}</td>
						<td>{{$user->email}}</td>
					</tr>

						@endforeach

					</tbody>
				 </table>
			</div>
		</div>
	</div>
</div>



</div>

@endsection
