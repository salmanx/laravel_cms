@extends('layouts.backend.backend')

@section('title', $page->exists ? 'Editing ' . $page->name : 'Create new page')

@section('content')
<div class="page-title">
	<div>
		<h1>Page</h1>
		<p>{{ $page->exists ? 'Editing \'' . $page->title . '\'': 'Create new' }} page</p>
	</div>
	<div>
		<a class="btn btn-primary btn-flat" href="{{ route('backend.pages.index') }}"></i>All Pages</a>
	</div>
</div> 
<div class="row">
	<div class="col-md-12">

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
	<div class="card">
		<h3 class="card-tilte">Create a Page</h3>
			{!! Form::model($page, [
				'method' => $page->exists ? 'put' : 'post',
				'route'  => $page->exists ? ['backend.pages.update', $page->id] : ['backend.pages.store']
			]) !!}
			
			<div class="card-body">

				<div class="form-group">
					{!! Form::label('title') !!}
					{!! Form::text('title', null, ['class' => 'form-control']) !!}
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							{!! Form::label('name') !!}
							{!! Form::text('name', null, ['class' => 'form-control']) !!}
							<p class="help-block">This name is used to generate page link</p>
						</div>
					</div>	
					<div class="col-md-6">

						<div class="form-group">
							{!! Form::label('uri') !!}
							{!! Form::text('uri', null, ['class' => 'form-control']) !!}
							<p class="help-block">Uri will be visible in browser url. e.g. /about (no space)</p>

						</div>							
					</div>						
					
				</div>


				<div class="row">
					<div class="col-md-4">

						<div class="form-group">
							{!! Form::label('template', 'Template') !!}
							{!! Form::select('template', $templates, null, ['class' => 'form-control']) !!}
						</div>						
					</div>
					<div class="col-md-4">
						{!! Form::label('order') !!}
							{!! Form::select('order', [
									   '' => '',
								'brfore'  => 'Before',
								'after'   => 'After',
								'childOf' => 'Child Of',
								'makeSibiling' => 'Sibiling of'
							], null, ['class' => 'form-control']) !!}						

					</div>
					<div class="col-md-4">
							{!! Form::label('&nbsp;') !!}
							{!! Form::select('orderPage', [
								'' => ''
							]+$orderPages->lists('paddedTitle', 'id')->toArray(), null, ['class' => 'form-control']) !!}						
					</div>
				</div>

				<div class="form-group">
					{!! Form::label('body') !!}
					{!! Form::textarea('body', null, ['class' => 'form-control ckeditor']) !!}
				</div>	

				<div class="form-group">
					<label>
						{!! Form::checkbox('hidden') !!}
						Hide page from navigation.
					</label>
				</div>									

			</div>

			<div class="card-footer">
				{!! Form::submit($page->exists ? 'Save page' : 'Create page', ['class' => 'btn btn-primary']) !!}
			</div>

	{!! Form::close() !!}
	</div>
		
	</div>
</div>

@endsection