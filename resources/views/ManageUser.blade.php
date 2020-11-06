@extends('Layouts.Master')
@section('title', 'Kelola')

@section('content')

<div class="col-md-8">
	<h1 class="my-4" style="margin-bottom: 5%">Kumpuan User</h1>
</div>
<a href="manageuser/add" class="btn btn-secondary btn-lg btn-block">Tambah User</a>
<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
		</tr>
	</thead>
	<tbody>
		@foreach($user as $u)
		<tr>
			<td>{{$u->id}}</td>
			<td>{{$u->name}}</td>
			<td>{{$u->email}}</td>
			<td><a href="manageuser/edit/{{ $u->id }}" class="badge badge-warning">Edit</a></td>
			<td><a href="manageuser/delete/{{ $u->id }}" class="badge badge-danger">Hapus</a></td>
		</tr>
		@endforeach
	</tbody>
</table>