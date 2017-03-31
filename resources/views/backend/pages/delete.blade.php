@extends('layouts.backend')

@section('title', 'Delete' . $page->name )

@section('content')

 {!! Form::open(['method' => 'delete', 'route' => ['backend.pages.destroy', $page->id]]) !!}

 	<div class="alert alert-danger">
 		<strong>You are about to delete a page</strong>
 	</div>

 	{!! Form::submit('Yes, delete this', ['class' => 'btn btn-danger']) !!}

 	<a href="{{ route('backend.pages.index') }}" class="btn btn-success">No. get me back</a>


 {!! Form::close() !!}

@endsection
