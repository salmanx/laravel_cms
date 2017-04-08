@extends('layouts.backend.backend')

@section('title', 'Delete' . $post->name )

@section('content')
<div class="page-title">
	<div>
		<h1>Data Table</h1>
		<ul class="breadcrumb side">
		  <li><i class="fa fa-home fa-lg"></i></li>
		  <li>Tables</li>
		  <li class="active"><a href="#">Data Table</a></li>
		</ul>
	</div>
	<div>
		<a class="btn btn-primary btn-flat" href="{{ route('backend.posts.create') }}"><i class="fa fa-lg fa-plus"></i> Create Post</a>
	</div>
</div>
<div class="card">
	<h3 class="card-title">Delete page</h3>
	<div class="card-body">
 {!! Form::open(['method' => 'delete', 'route' => ['backend.posts.destroy', $post->id]]) !!}

 	<div class="alert alert-danger">
 		<strong>You are about to delete a post</strong>
 	</div>

 	{!! Form::submit('Yes, delete this', ['class' => 'btn btn-danger']) !!}

 	<a href="{{ route('backend.posts.index') }}" class="btn btn-success">No. get me back</a>


 {!! Form::close() !!}
	</div>
</div>
@endsection
