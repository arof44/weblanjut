@extends('Layouts.Master')

@section('title',' USER ')

    
@section('content')
    

<!-- Page Content -->
<div class="container">
  
    <div class="row">
      <!-- Blog Entries Column -->
      <div class="col-md-8">
  
        <h1 class="my-4" style="margin-bottom: 5%">Kumpuan User</h1>
        <div class="card-footer text-muted"> by
                <a href="#">BOOTSRAP</a>
            </div>
  
        <!-- Blog Post -->
        @foreach ($user as $u)
        <div class="card mb-4">
            <img class="card-img-top" src="{{asset('storage/'.$u->imageurl)}}" alt="Card image cap">
            <div class="card-body">
                <h2 class="card-title">{{ $u->name }}</h2>
            <p class="card-text">{{ Str::limit($u->email, 100, '...') }}</p>
            </div>
            <div class="card-footer text-muted">
                Posted on 04 October, 2020 by Muhammad Nur Arafah
                <a href="#"></a>
            </div>
        </div>
        @endforeach

     <!-- Pagination -->
     <ul class="pagination justify-content-center mb-4">
      <li class="page-item">
        <a class="page-link" href="#">&larr; Older</a>
      </li>
      <li class="page-item disabled">
        <a class="page-link" href="#">Newer &rarr;</a>
      </li>
    </ul>

  </div>

  <!-- Sidebar Widgets Column -->
  <div class="col-md-4">

    <!-- Search Widget
    <div class="card my-4">
      <h5 class="card-header">Search</h5>
      <div class="card-body">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for...">
          <span class="input-group-append">
            <button class="btn btn-secondary" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>

    Categories Widget 
    <div class="card my-4">
      <h5 class="card-header">Categories</h5>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-6">
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#">Web Design</a>
              </li>
              <li>
                <a href="#">HTML</a>
              </li>
              <li>
                <a href="#">Freebies</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#">JavaScript</a>
              </li>
              <li>
                <a href="#">CSS</a>
              </li>
              <li>
                <a href="#">Tutorials</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div> -->

    <!-- Side Widget -->
    <div class="card my-4">
      <h5 class="card-header">Kumpulan Artikel yang Mungkin Membantu</h5>
      <div class="card-body">
        Web yang sangat jauh dari kata sempurna tetapi akan memberi manfaat baik sadar maupun tidak
      </div>
    </div>

  </div>

</div>
<!-- /.row -->

</div>