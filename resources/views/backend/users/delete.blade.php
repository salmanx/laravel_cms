@extends('layouts.backend')

@section('title', 'Delete' . $user->name )

@section('content')

 {!! Form::open(['method' => 'delete', 'route' => ['backend.users.destroy', $user->id]]) !!}

 	<div class="alert alert-danger">
 		<strong>You are about to delete a user</strong>
 	</div>

 	{!! Form::submit('Yes, delete this', ['class' => 'btn btn-danger']) !!}

 	<a href="{{ route('backend.users.index') }}" class="btn btn-success">No. get me back</a>


 {!! Form::close() !!}

@endsection
