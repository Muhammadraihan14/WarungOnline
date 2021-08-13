@extends ('template.base')

@section('konten')

<div class="container">
    <div class="row">
		<div class="col-md-12 mt-5 ">
			<div class="card">
			  <div class="card-header bg-secondary">
				Detail Produk
			</div>
			<div class="card-body">
				<h3>{{$produk->nama}}</h3>
			<p>
				Harga : RP. {{number_format($produk->harga)}} | Berat : {{$produk->berat}} | Stok : {{$produk->stok}}
			</p>
			<h5>Deskripsi</h5>
			<p>
				{!! nl2br($produk->deskripsi) !!}
			</p>
			<a class="btn btn-dark float-right" href="{{url ('admin/produk')}}">kembali</a>
			</div>

		</div>
	</div>
</div>
</div>

@endsection
