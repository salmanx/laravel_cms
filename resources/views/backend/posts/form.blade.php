@extends('layouts.backend.backend')

@section('title', $post->exists ? 'Editing ' . $post->title : 'Create new post')

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
		<a class="btn btn-primary btn-flat" href="{{ route('backend.posts.index') }}"></i>All Posts</a>
	</div>
</div> 
<div class="row">
	<div class="col-md-12">
		<div class="card">
				<h3 class="card-tilte">Create a Post</h3>
				@include('backend.partials.flash-message')

				{!! Form::model($post, [
					'method' => $post->exists ? 'put' : 'post',
					'route'  => $post->exists ? ['backend.posts.update', $post->id] : ['backend.posts.store']
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
						{!! Form::label('published_at') !!}
						{!! Form::text('published_at', null, ['class' => 'form-control']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('category', 'Select category') !!}
						@foreach($categories as $cat)
							<input type="checkbox" name="category[]" value="{{ $cat->id }}" > {{ $cat->title }} <br />
						@endforeach			
					</div>


					<div class="form-group excerpt">
						{!! Form::label('excerpt') !!}
						{!! Form::textarea('excerpt', null, ['class' => 'form-control']) !!}
					</div>		


					<div class="form-group">
						{!! Form::label('body') !!}
						{!! Form::textarea('body', null, ['class' => 'form-control']) !!}
					</div>			

				</div>

				<div class="card-footer">
					{!! Form::submit($post->exists ? 'Save post' : 'Create new post', ['class' => 'btn btn-primary']) !!}		
				</div>

			{!! Form::close() !!}
		</div>
		
	</div>
</div>

	<script type="text/javascript">

		// $('input[name=published_at]').datetimepicker({
		// 	allowInputToggle: true,
		// 	format: 'YYYY-MM-DD HH:mm:ss',
		// 	showClear: true,
		// 	defaultDate: '{{ old('published_at', $post->published_at) }}'
		// });

		// $('input[name=title]').on('blur', function(){
		// 	var slugElm = $('input[name=slug]');

		// 	if (slugElm.val()) {
		// 		return;
		// 	}

		// 	slugElm.val(this.value.toLowerCase().replace(/[^a-z0-9-]+/g, '-').replace(/^-+|-+$/g, ''));
		// })

	</script>

@endsection