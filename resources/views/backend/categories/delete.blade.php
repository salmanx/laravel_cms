@extends('layouts.backend')

@section('title', 'Delete' . $category->title )

@section('content')

 {!! Form::open(['method' => 'delete', 'route' => ['backend.categories.destroy', $category->id]]) !!}

 	<div class="alert alert-danger">
 		<strong>You are about to delete a category</strong>
 	</div>

 	{!! Form::submit('Yes, delete this', ['class' => 'btn btn-danger']) !!}

 	<a href="{{ route('backend.categories.index') }}" class="btn btn-success">No. get me back</a>


 {!! Form::close() !!}

@endsection
