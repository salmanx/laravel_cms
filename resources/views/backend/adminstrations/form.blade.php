@extends('layouts.backend.backend')

@section('content')
<div class="page-title">
	<div>
		<h1>Adminstration</h1>
		<p>{{ $adminstration->exists ? 'Editing  ' : 'Create new' }} adminstration</p>
	</div>
	<div>
		<a class="btn btn-primary btn-flat" href="{{ route('backend.adminstrations.index') }}"></i>All adminstrations</a>
	</div>
</div> 
<div class="row">
	<div class="col-md-12">
	<div class="card">
		<h3 class="card-tilte">Create a adminstration</h3>
			@include('backend.partials.flash-message')

			{!! Form::model($adminstration, [
				'method' => $adminstration->exists ? 'put' : 'post',
				'route'  => $adminstration->exists ? ['backend.adminstrations.update', $adminstration->id] : ['backend.adminstrations.store'],
				'files' => true,
				'enctype' => 'multipart/form-data'				
			]) !!}
			
			<div class="card-body">

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							{!! Form::label('name') !!}
							{!! Form::text('name', null, ['class' => 'form-control']) !!}					
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							{!! Form::label('image', "Profiile Picture") !!}
							{!! Form::file('image', ['class' => 'form-control']) !!}					
						</div>
					</div>					
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							{!! Form::label('position') !!}
							{!! Form::text('position', null, ['class' => 'form-control']) !!}
						</div>
					</div>	
					<div class="col-md-6">
						<div class="form-group">
							{!! Form::label('slug') !!}
							{!! Form::text('slug', null, ['class' => 'form-control']) !!}
						</div>							
					</div>						
					
				</div>


				<div class="row">

					<div class="col-md-4">
						<div class="form-group">
							{!! Form::label('status') !!}
							{!! Form::text('status', null, ['class' => 'form-control']) !!}						
						</div>							
					</div>	

					<div class="col-md-4">
						{!! Form::label('order') !!}
						{!! Form::select('order', [
								   '' => '',
							'brfore'  => 'Before',
							'after'   => 'After'
						], null, ['class' => 'form-control']) !!}					

					</div>
					<div class="col-md-4">
							{!! Form::label('') !!}
							{!! Form::select('orderAdminstration', [
								'' => ''
							]+$orderAdminstrations->lists('position', 'id')->toArray(), null, ['class' => 'form-control']) !!}						
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							{!! Form::label('body') !!}
							{!! Form::textarea('body', null, ['class' => 'form-control ckeditor']) !!}
						</div>
					</div>
				</div>	
								

			</div>

			<div class="card-footer">
				{!! Form::submit($adminstration->exists ? 'Save adminstration' : 'Create  adminstration', ['class' => 'btn btn-primary']) !!}
			</div>

	{!! Form::close() !!}
	</div>
		
	</div>
</div>

<script type="text/javascript">
	$('input[name=position]').on('blur', function () {
		var slugElm = $('input[name=slug]');

		if (slugElm.val()) { return; }

		// slugElm.val(this.value.toLowerCase().replace(/[^a-z0-9-]+/g, '-').replace(/^-+|-+$/g, ''));

		slugElm.val(this.value.toLowerCase().replace(this.value, this.value).replace(/^-+|-+$/g, '')
			.replace(/\s/g, '-'));

	})	
</script>

@endsection