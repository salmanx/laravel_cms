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
					'route'  => $post->exists ? ['backend.posts.update', $post->id] : ['backend.posts.store'],
					'files' => true, 'enctype' => 'multipart/form-data'  
				]) !!}
				
				<div class="card-body">
				<div class="row">
					<div class="col-md-8">
						<div class="form-group">
							{!! Form::label('title') !!}
							{!! Form::text('title', null, ['class' => 'form-control']) !!}
						</div>

						<div class="form-group">
							{!! Form::label('body') !!}
							{!! Form::textarea('body', null, ['class' => 'form-control ckeditor', 'rows' => '15']) !!}
						</div>

						<div class="form-group">
							{!! Form::label('excerpt') !!}
							{!! Form::textarea('excerpt', null, ['class' => 'form-control', 'rows' => '3']) !!}
						</div>

					</div>
					<div class="col-md-4">
			
			            <div class="form-group">
   							{!! Form::label('published_at') !!}
			                <div class='input-group date' id='datetimepicker'>
							{!! Form::text('published_at', null, ['class' => 'form-control']) !!}
				                <span class="input-group-addon">
				                    <span class="fa fa-calendar"> 
				                    </span>
				                </span>
			                </div>
			            </div>

						<div class="panel panel-default">
							<div class="panel-heading"><b>Status</b></div>
							<div class="panel-body">
									<p>
										{!! Form::radio('status', false) !!} Save as Draft
									</p>
									<p>
										{!! Form::radio('status', true, true) !!} Published
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

						<div>                   		

			            </div>

					</div>
				</div>				

				</div>

				<div class="card-footer">
					{!! Form::submit($post->exists ? 'Save post' : 'Create post', ['class' => 'btn btn-primary']) !!}		
				</div>

			{!! Form::close() !!}
		</div>
		
	</div>
</div>

<script type="text/javascript">
    $(function () {
        $('#datetimepicker').datetimepicker({
			allowInputToggle: true,
			format: 'YYYY-MM-DD HH:mm:ss',
			showClear: true,
			//defaultDate: '{{ old('published_at', $post->published_at) }}',
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down"
            }                	
        });
    });		

</script>
	

@endsection

