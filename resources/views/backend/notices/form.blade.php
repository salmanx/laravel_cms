@extends('layouts.backend.backend')

@section('content')
<div class="page-title">
	<div>
		<h1>Notices</h1>
		<p>{{ $notice->exists ? 'Edit' : 'Create ' }} notice</p>
	</div>
	<div>
		<a class="btn btn-primary btn-flat" href="{{ route('backend.notices.index') }}"></i>All Notices</a>
	</div>
</div> 
<div class="row">
	<div class="col-md-12">

		<div class="card">
			<h3 class="card-tilte">Create a Notice</h3>

			@include('backend.partials.flash-message')

			{!! Form::model($notice, [
				'method' => $notice->exists ? 'put' : 'notice',
				'route'  => $notice->exists ? ['backend.notices.update', $notice->id] : ['backend.notices.store']
			]) !!}
				
				<div class="card-body">

					<div class="row">
						<div class="col-md-8">

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
						</div>
					</div>						

				</div>

				<div class="card-footer">			
					{!! Form::submit($notice->exists ? 'Save notice' : 'Create  notice', ['class' => 'btn btn-primary']) !!}		
				</div>

			{!! Form::close() !!}
		</div>
		
	</div>
</div>

<script type="text/javascript">
	$('input[name=title]').on('blur', function () {
		var slugElm = $('input[name=slug]');

		if (slugElm.val()) { return; }

		// slugElm.val(this.value.toLowerCase().replace(/[^a-z0-9-]+/g, '-').replace(/^-+|-+$/g, ''));

		slugElm.val(this.value.toLowerCase().replace(this.value, this.value).replace(/^-+|-+$/g, '')
			.replace(/\s/g, '-'));

	})	
</script>

@endsection