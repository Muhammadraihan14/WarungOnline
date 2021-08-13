<form action="{{$url}}" method="post" onsubmit="return confirm('apakah yakin akan menghapus data ini?')">
@csrf
@method ("delete")
<button type="submit" class="btn btn-danger" >
<i class="fa fa-trash"></i>
</button>
</form>


