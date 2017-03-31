@extends('layouts.backend')

@section('title', $user->exists ? 'Editing ' . $user->name : 'Create new user')

@section('content')

	@if($errors->any())
		<div class="alert alert-danger">
		<strong>Please review the error</strong>
			<ul>
				@foreach($errors->all() as $error)
					<li>
						{{ $error }}
					</li>
				@endforeach
			</ul>	
		</div>
	@endif

	{!! Form::model($user, [
		'method' => $user->exists ? 'put' : 'post',
		'route'  => $user->exists ? ['backend.users.update', $user->id] : ['backend.users.store']
	]) !!}

	<div class="form-group">
		{!! Form::label('name') !!}
		{!! Form::text('name', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('email') !!}
		{!! Form::text('email', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('password') !!}
		{!! Form::password('password', ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('password_confirmation') !!}
		{!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
	</div>	

	{!! Form::submit($user->exists ? 'Save User' : 'Create new user', ['class' => 'btn btn-primary']) !!}		

	{!! Form::close() !!}

@endsection