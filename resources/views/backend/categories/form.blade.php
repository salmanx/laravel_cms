@extends('layouts.backend')

@section('title', $category->exists ? 'Editing ' . $category->name : 'Create new category')

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

	{!! Form::model($category, [
		'method' => $category->exists ? 'put' : 'post',
		'route'  => $category->exists ? ['backend.categories.update', $category->id] : ['backend.categories.store']
	]) !!}

	<div class="form-group">
		{!! Form::label('title') !!}
		{!! Form::text('title', null, ['class' => 'form-control']) !!}
	</div>

	{!! Form::submit($category->exists ? 'Save category' : 'Create new category', ['class' => 'btn btn-primary']) !!}		

	{!! Form::close() !!}


@endsection