@extends('layouts.backend.backend')

@section('title', 'Delete' . $page->name )

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
		<a class="btn btn-primary btn-flat" href="{{ route('backend.pages.create') }}"><i class="fa fa-lg fa-plus"></i> Create Page</a>
	</div>
</div>
<div class="card">
	<h3 class="card-title">Delete page</h3>
	<div class="card-body">
		 {!! Form::open(['method' => 'delete', 'route' => ['backend.pages.destroy', $page->id]]) !!}

		 	<div class="alert alert-danger">
		 		<strong>You are about to delete a page</strong>
		 	</div>

		 	{!! Form::submit('Yes, delete this', ['class' => 'btn btn-danger']) !!}

		 	<a href="{{ route('backend.pages.index') }}" class="btn btn-success">No. get me back</a>


		 {!! Form::close() !!}		
	</div>
</div>

@endsection

