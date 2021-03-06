@extends('Layouts.Master')
@section('title', 'Edit')

@section('content')

<div class="col-md-8">
	<h1 class="my-4" style="margin-bottom: 5%">Kumpuan Artikel</h1>
</div>

<form action="/managearticle/update/{{$article->id}}" method="post" enctype="multipart/form-data">
	{{csrf_field()}}
	<input type="hidden" name="id" value="{{$article->id}}"></br>
	<div class="form-group">
		<label for="title">Judul</label>
		<input type="text" class="form-control" required="required" name="title" value="{{$article->title}}"></br>
	</div>
	<div class="form-group">
		<label for="content">Content</label>
		<input type="text" class="form-control" required="required" name="content" value="{{$article->content}}"></br>
	</div>
	<div class="form-group">
		<label for="image">Feature Image</label>
		<input type="file" class="form-control" required="required" name="image" value="{{$article->imageurl}}"></br>
		<img width="150px" src="{{asset('storage/'.$article->imageurl)}}">
	</div>
	<button type="submit" name="edit" class="btn btn-primary float-right">Ubah Data</button>
</form>