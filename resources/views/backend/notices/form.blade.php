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
    $(function () {
        $('#datetimepicker').datetimepicker({
			allowInputToggle: true,
			format: 'YYYY-MM-DD HH:mm:ss',
			showClear: true,
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