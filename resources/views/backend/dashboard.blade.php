@extends('layouts.backend.backend')

@section('content')
<div class="page-title">
  <div>
    <h1><i class="fa fa-archive"></i> Dashboard</h1>
    <p>Small widgets to interactively displaying summary of dashboard</p>
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    <div class="widget-small primary"><i class="icon fa fa-crosshairs fa-3x"></i>
      <div class="info">
        <h4>Categories</h4>
        <p> <b>{{ \Rocket\Models\Category::count() }}</b></p>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="widget-small info"><i class="icon fa fa-newspaper-o fa-3x"></i>
      <div class="info">
        <h4>News</h4>
        <p> <b>{{ \Rocket\Models\News::count() }}</b></p>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="widget-small warning"><i class="icon fa fa-bullhorn fa-3x"></i>
      <div class="info">
        <h4>Notices</h4>
        <p> <b>{{ \Rocket\Models\Notice::count() }}</b></p>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="widget-small danger"><i class="icon fa fa-laptop fa-3x"></i>
      <div class="info">
        <h4>Posts</h4>
        <p> <b>{{ \Rocket\Models\Post::count() }}</b></p>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
      <div class="info">
        <h4>Users</h4>
        <p> <b>{{ \Rocket\User::count() }}</b></p>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="widget-small info coloured-icon"><i class="icon fa fa-user-md fa-3x"></i>
      <div class="info">
        <h4>Admin</h4>
        <p> <b>{{ \Rocket\Models\Adminstration::count() }}</b></p>
      </div>
    </div>
  </div>


</div>
@endsection
