@extends('layouts.backend.backend')

@section('content')
<div class="page-title">
	<div>
		<h1>Post</h1>
		<p>{{ $post->exists ? 'Edit'  : 'Create new' }} post</p>
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
				<div class="row">
					<div class="col-md-8">
					<div class="form-group">
						{!! Form::label('title') !!}
						{!! Form::text('title', null, ['class' => 'form-control']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('content') !!}
						{!! Form::textarea('content', null, ['class' => 'form-control ckeditor']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('excerpt') !!}
						{!! Form::textarea('excerpt', null, ['class' => 'form-control', 'rows' => '3']) !!}
					</div>

					</div>
					<div class="col-md-4">

						<div class="form-group">
							{!! Form::label('published_at') !!}
							{!! Form::text('published_at', null, ['class' => 'form-control']) !!}
						</div>

						<div class="panel panel-default">
							<div class="panel-heading"><b>Status</b></div>
							<div class="panel-body">
								<p>
									<input type="radio" name="status" value="0"> Save as Draft
								</p>
								<p>
									<input type="radio" name="status" value="1" checked> Published
								</p> 
							</div>
						</div>

						<div class="panel panel-default" style="max-height: 500px; overflow-x:hidden">
							<div class="panel-heading"><b>Select Category</b></div>
							<div class="panel-body">
								@foreach($categories as $cat)
								<p>
								<label for="category"></label>
									<input type="checkbox" name="category[]" value="{{ $cat->id }}" id="category"> {{ $cat->title }}
								</p> 
								@endforeach									
							</div>
						</div>
						
					</div>
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

            // $(function () {
                // $('#datetimepicker1').datetimepicker();
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