@extends('Layouts.Master')
@section('title', 'ADD')

@section('content')

<div class="col-md-8">
	<h1 class="my-4" style="margin-bottom: 5%">Kumpuan Artikel</h1>
</div>

<form action="/managearticle/create" method="post">
	@csrf
	<div class="form-group">
		<label for="title">Judul</label>
		<input type="text" class="form-control" required="required" name="title"></br>
	</div>
	<div class="form-group">
		<label for="content">Content</label>
		<input type="text" class="form-control" required="required" name="content"></br>
	</div>
	<div class="form-group">
		<label for="image">Feature Image</label>
		<input type="text" class="form-control" required="required" name="image"></br>
	</div>
	<button type="submit" name="add" class="btn btn-primary float-right">Tambah Data</button>
</form>