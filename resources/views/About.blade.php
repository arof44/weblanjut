@extends('Layouts.Master')
@section('title', 'About')

@section('content')
<section class="about" style="margin-bottom: 14%">
	<div class="jumbotron jumbotron-fluid mt-5">
		<div class="container b-5">
			<img src="https://i.pinimg.com/originals/6e/af/c9/6eafc98c32c9fd43404e7912d7a0e919.jpg" class="float-right">
			<h1 class="display-4 mb">ABOUT ME</h1>
			<h1 class="display-4 mb">BIO</h1>
			<p class="lead">Muhammad Nur Arafah</p>
			<p class="lead">Bontang, 04 Maret 2001</p>
			<p class="lead">1931710161</p>
			<p class="lead">Bontang, Kalimantan Timur</p>
			<p><a href="https://www.instagram.com/arof.asrofi.rauf/" class="lead" style="color: black">IG : arof.asrofi.rauf</a></p>
			<p><a href="https://twitter.com/ArofGungdwi" target="_blank" class="lead" style="color: black">Twitter : @ArofGungDwi</a></p>
		</div>

		<div class="card my-4">
			<h5 class="card-header">Leave a Comment:</h5>
			<div class="card-body">
				<form>
					<div class="form-group">
						<label for="title">Name</label>
						<input type="text" class="form-control" required="required" name="title"></br>
					</div>
					<div>
						<label for="title">Comment</label>
						<textarea class="form-control" rows="3"></textarea>
					</div>
					<button type="submit" name="add" class="btn btn-primary float-right">Tambah Data</button>
				</form>
			</div>
		</div>
	</div>
	@foreach ($comment as $comm)
	<div class="media mb-4">
		<img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
		<div class="media-body">
			<h5 class="mt-0">{{ $comm->name }}</h5>
			{{$comm->content}}
		</div>
	</div>
	@endforeach
</div>
</section>
@endsection