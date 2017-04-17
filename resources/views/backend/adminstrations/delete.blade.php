@extends('layouts.backend.backend')


@section('content')
<div class="page-title">
	<div>
		<h1>Adminstrations</h1>
		<p>Delete adminstration</p>
	</div>
	<div>
		<a class="btn btn-primary btn-flat" href="{{ route('backend.adminstrations.create') }}"><i class="fa fa-lg fa-plus"></i> Create adminstration</a>
	</div>
</div>
<div class="card">
	<h3 class="card-title">Delete Adminstration</h3>
	<div class="card-body">
		 {!! Form::open(['method' => 'delete', 'route' => ['backend.adminstrations.destroy', $adminstration->id]]) !!}

		 	<div class="alert alert-danger">
		 		<strong>You are about to delete a adminstration</strong>
		 	</div>

		 	{!! Form::submit('Yes, delete this', ['class' => 'btn btn-danger']) !!}

		 	<a href="{{ route('backend.adminstrations.index') }}" class="btn btn-success">No. get me back</a>


		 {!! Form::close() !!}		
	</div>
</div>

@endsection

