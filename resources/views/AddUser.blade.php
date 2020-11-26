@extends('Layouts.Master')
@section('title', 'ADD')

@section('content')

<div class="col-md-8">
	<h1 class="my-4" style="margin-bottom: 5%">Kumpuan Artikel</h1>
</div>

<form action="/manageuser/create" method="post">
	@csrf
	<div class="form-group">
		<label for="title">Nama</label>
		<input type="text" class="form-control" required="required" name="name"></br>
	</div>
	<div class="form-group">
		<label for="content">Email</label>
		<input type="text" class="form-control" required="required" name="email"></br>
	</div>
	<div class="form-group">
		<label for="password">Password</label>
		<input type="password" class="form-control" required="required" name="password"></br>
	</div>
	<button type="submit" name="add" class="btn btn-primary float-right">Tambah Data</button>
</form>