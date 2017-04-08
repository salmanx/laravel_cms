@extends('layouts.backend.backend')


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
		<a class="btn btn-primary btn-flat" href="{{ route('backend.news.create') }}"><i class="fa fa-lg fa-plus"></i> Create News</a>
	</div>
</div>
<div class="card">
	<h3 class="card-title">Delete News</h3>
	<div class="card-body">
		 {!! Form::open(['method' => 'delete', 'route' => ['backend.news.destroy', $news->id]]) !!}

		 	<div class="alert alert-danger">
		 		<strong>You are about to delete a news</strong>
		 	</div>

		 	{!! Form::submit('Yes, delete this', ['class' => 'btn btn-danger']) !!}

		 	<a href="{{ route('backend.news.index') }}" class="btn btn-success">No. get me back</a>


		 {!! Form::close() !!}		
	</div>
</div>

@endsection

