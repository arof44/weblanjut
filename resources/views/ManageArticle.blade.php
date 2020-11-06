@extends('Layouts.Master')
@section('title', 'Kelola')

@section('content')

<div class="col-md-8">
	<h1 class="my-4" style="margin-bottom: 5%">Kumpuan Artikel</h1>
</div>
<a href="managearticle/add" class="btn btn-secondary btn-lg btn-block">Tambah Data</a>
<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>No</th>
			<th>Judul</th>
			<th>Tanggal</th>
		</tr>
	</thead>
	<tbody>
		@foreach($article as $a)
		<tr>
			<td>{{$a->id}}</td>
			<td>{{$a->title}}</td>
			<td>{{$a->created_at}}</td>
			<td><a href="managearticle/edit/{{ $a->id }}" class="badge badge-warning">Edit</a></td>
			<td><a href="managearticle/delete/{{ $a->id }}" class="badge badge-danger">Hapus</a></td>
		</tr>
		@endforeach
	</tbody>
</table>