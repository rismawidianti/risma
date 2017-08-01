@extends('layouts.app')
@section('content')
<div class="row">
	<center><h1>Data Anak</h1></center>
     <div class="panel panel-primary">
		<div class="panel-heading">Data Anak
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">Kembali</a></div>
</div>
</div>

<div class="panel-body">
	<form action="{{route('anak.show',$anak->id)}}" method="post">
		{{csrf_field()}};
		
		<div class="form-group">
		   <label class="control-lable">Nama</label>
		   <input type="text" name="a" value="{{$anak->nama}}" class="form-control" readonly="">
		</div>

		<div class="form-group">
		   <label class="control-lable">Nama OrangTua</label>
		   <input type="text" name="b" class="form-control" readonly="" value="{{$anak->orangtua->nama_ayah}} dan {{$anak->orangtua->nama_ibu}} ">
		</div>

		<div class="form-group">
		   <label class="control-lable">Umur</label>
		   <input type="number" name="c" value="{{$anak->umur}}" class="form-control" readonly="">
		</div>

		<div class="form-group">
		   <label class="control-lable">Alamat</label>
		   <textarea class="form-control" rows="10" name="d" readonly="">{{$anak->alamat}}</textarea>
		</div>

		<div class="form-group">
		   <button type="submit" class="btn btn-succes">Simpan</button> 
		   <button type="reset" class="btn btn-danger">Reset</button>
		</div>
	</form>
</div>
@endsection