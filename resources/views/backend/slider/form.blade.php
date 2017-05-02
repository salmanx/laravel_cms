@extends('layouts.backend.backend')

@section('content')
<div class="page-title">
	<div>
		<h1>Notices</h1>
	</div>
	<div>
		<a class="btn btn-primary btn-flat" href="{{ route('backend.slider.index') }}"> All sliders</a>
	</div>
</div> 
<div class="row">
	<div class="col-md-12">
			@include('backend.partials.flash-message')

		<div class="card">
			<h3 class="card-tilte">Create a slider</h3>

	            {!! Form::open([ 'route' => [ 'backend.slider.store' ], 'files' => true, 'enctype' => 'multipart/form-data', 'class' => 'dropzone', 'id' => 'image-upload' ]) !!}
	            <div>
	                <h3>Upload Multiple Image By Click On Box</h3>
	            </div>
	            {!! Form::close() !!}

		</div>
		
	</div>
</div>
<script type="text/javascript">
        Dropzone.options.imageUpload = {
            maxFilesize         :       1,
            acceptedFiles: ".jpeg,.jpg,.png,.gif"
        };
</script>

@endsection