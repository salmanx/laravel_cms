@extends('layouts.backend')

@section('title', $page->exists ? 'Editing ' . $page->name : 'Create new page')

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

	{!! Form::model($page, [
		'method' => $page->exists ? 'put' : 'post',
		'route'  => $page->exists ? ['backend.pages.update', $page->id] : ['backend.pages.store']
	]) !!}

	<div class="form-group">
		{!! Form::label('title') !!}
		{!! Form::text('title', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('name') !!}
		{!! Form::text('name', null, ['class' => 'form-control']) !!}
		<p class="help-block">This name is used to generate page link</p>
	</div>

	<div class="form-group">
		{!! Form::label('uri') !!}
		{!! Form::text('uri', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('content') !!}
		{!! Form::textarea('content', null, ['class' => 'form-control']) !!}
	</div>	

	{!! Form::submit($page->exists ? 'Save page' : 'Create new page', ['class' => 'btn btn-primary']) !!}		

	{!! Form::close() !!}

	<script type="text/javascript">
		new SimpleMDE().render();
	</script>

@endsection