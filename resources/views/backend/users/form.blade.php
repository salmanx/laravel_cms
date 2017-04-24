@extends('layouts.backend.backend')

@section('content')
<div class="page-title">
	<div>
		<h1>User</h1>
		<p>{{ $user->exists ? 'Edit' : 'Create ' }} user</p>
	</div>
	<div>
		<a class="btn btn-primary btn-flat" href="{{ route('backend.users.index') }}"></i>All user</a>
	</div>
</div> 
<div class="row">
	<div class="col-md-12">

		<div class="card">
			<h3 class="card-tilte">Create user</h3>
				@include('backend.partials.flash-message')
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
		</div>
		
	</div>
</div>

@endsection