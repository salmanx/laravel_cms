@extends('layouts.backend.backend')


@section('content')
<div class="page-title">
	<div>
		<h1>User</h1>
		<p>Delete User</p>
	</div>
	<div>
		<a class="btn btn-primary btn-flat" href="{{ route('backend.users.create') }}"><i class="fa fa-lg fa-plus"></i> Create User</a>
	</div>
</div>
<div class="card">
	<h3 class="card-title">Delete User</h3>
	<div class="card-body">
	 {!! Form::open(['method' => 'delete', 'route' => ['backend.users.destroy', $user->id]]) !!}

	 	<div class="alert alert-danger">
	 		<strong>You are about to delete a user</strong>
	 	</div>

	 	{!! Form::submit('Yes, delete this', ['class' => 'btn btn-danger']) !!}

	 	<a href="{{ route('backend.users.index') }}" class="btn btn-success">No. get me back</a>


	 {!! Form::close() !!}		
	</div>
</div>

@endsection
