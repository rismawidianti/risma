@extends('layouts.app')
@section('content')
<div class="row">
	<center><h1>Data Author</h1></center>
     <div class="panel panel-primary">
		<div class="panel-heading">Data Author
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">Kembali</a></div>
</div>
</div>

<div class="panel-body">
	<form action="{{route('author.show',$author->id)}}" method="post">
		{{csrf_field()}};
		
		<div class="form-group">
		   <label class="control-lable">Nama</label>
		   <input type="text" name="nama" value="{{$author->nama}}" class="form-control" readonly="">
		</div>

		<div class="form-group">
		   <button type="submit" class="btn btn-succes">Simpan</button> 
		   <button type="reset" class="btn btn-danger">Reset</button>
		</div>
	</form>
</div>
@endsection