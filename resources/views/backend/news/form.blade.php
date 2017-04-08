@extends('layouts.backend.backend')

@section('content')
<div class="page-title">
	<div>
		<h1>Data Table</h1>
		<ul class="breadcrumb side">
		  <li><i class="fa fa-home fa-lg"></i></li>
		  <li>Tables</li>
		  <li class="active"><a href="#">Data Table</a></li>
		</ul>
	</div>
	<div>
		<a class="btn btn-primary btn-flat" href="{{ route('backend.news.index') }}"></i>All News</a>
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

				{!! Form::model($news, [
					'method' => $news->exists ? 'put' : 'news',
					'route'  => $news->exists ? ['backend.news.update', $news->id] : ['backend.news.store']
				]) !!}
				
				<div class="card-body">

				<div class="form-group">
					{!! Form::label('title') !!}
					{!! Form::text('title', null, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('slug') !!}
					{!! Form::text('slug', null, ['class' => 'form-control']) !!}
				</div>	

				<div class="form-group">
					{!! Form::label('body') !!}
					{!! Form::textarea('body', null, ['class' => 'form-control']) !!}
				</div>					

				</div>

				<div class="card-footer">			
					{!! Form::submit($news->exists ? 'Save news' : 'Create new news', ['class' => 'btn btn-primary']) !!}	
				</div>

			{!! Form::close() !!}
		</div>
		
	</div>
</div>

	<script type="text/javascript">

		// new SimpleMDE({
		// 	element: document.getElementsByName('body')[0]
		// }).render()

		// new SimpleMDE({
		// 	element: document.getElementsByName('excerpt')[0]
		// }).render()

	</script>

@endsection