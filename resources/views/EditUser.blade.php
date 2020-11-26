@extends('Layouts.Master')
@section('title', 'Edit')

@section('content')

<div class="col-md-8">
	<h1 class="my-4" style="margin-bottom: 5%">Kumpuan Artikel</h1>
</div>

<form action="/manageuser/update/{{$user->id}}" method="post" enctype="multipart/form-data">
	{{csrf_field()}}
	<input type="hidden" name="id" value="{{$user->id}}"></br>
	<div class="form-group">
		<label for="title">Nama</label>
		<input type="text" class="form-control" required="required" name="name" value="{{$user->name}}"></br>
	</div>
	<div class="form-group">
		<label for="content">Email</label>
		<input type="text" class="form-control" required="required" name="email" value="{{$user->content}}"></br>
	</div>
	<div class="form-group">
		<label for="image">Level</label>
		<select name="roles" class="form-control" id="exampleFormControlSelect1">
			<option value="Administrator" >Admin</option>
			<option value="User" >User</option>
		</select>
	</div>
	<div class="form-group">
		<label for="image">Image</label>
		<input type="file" class="form-control" required="required" name="image" value="{{$user->imageurl}}"></br>
		<img width="150px" src="{{asset('storage/'.$user->imageurl)}}">
	</div>
	<button type="submit" name="edit" class="btn btn-primary float-right">Ubah Data</button>
</form>