@extends('layouts.app')
@section('content')
<div class="container"></div>
<div class="row">
	<center><h1>Data Book</h1></center>
     <div class="panel panel-primary">
		<div class="panel-heading">Data Book
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">Kembali</a></div>
</div>
</div>

<div class="panel-body">
	<form action="{{route('book.store')}}" method="post" enctype="multipart/form-data" >
	{{csrf_field()}}
		<div class="form-group">
		   <label class="control-lable">Title </label>
		   <input type="text" name="title" class="form-control" required="">
		</div>

		<div class="form-group">
		   <label class="control-lable">Author </label>
		   <select class="form-control" name="author_id">
		    @foreach($author as $data)
		   <option value="{{$data->id}}">{{$data->nama}}
		   @endforeach
		   </select>
		</div>

		<div class="form-group">
		   <label class="control-lable">Amount </label>
		   <input type="text" name="amount" class="form-control" required="">
		   </div>

		   <div class="form-group">
		   <label class="control-lable">Cover </label>
		   <input type="file" name="cover" class="form-control" required="">
		   </div>
		
		<div class="form-group">
		   <button type="submit" class="btn btn-succes">Simpan</button> 
		   <button type="reset" class="btn btn-danger">Reset</button>
		</div>
	</form>
</div>
@endsection