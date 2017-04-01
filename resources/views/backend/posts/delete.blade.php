@extends('layouts.backend')

@section('title', 'Delete' . $post->name )

@section('content')

 {!! Form::open(['method' => 'delete', 'route' => ['backend.posts.destroy', $post->id]]) !!}

 	<div class="alert alert-danger">
 		<strong>You are about to delete a post</strong>
 	</div>

 	{!! Form::submit('Yes, delete this', ['class' => 'btn btn-danger']) !!}

 	<a href="{{ route('backend.posts.index') }}" class="btn btn-success">No. get me back</a>


 {!! Form::close() !!}

@endsection
