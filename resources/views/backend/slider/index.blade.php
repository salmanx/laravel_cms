@extends('layouts.backend.backend')

@section('title', 'Posts')

@section('content')
<div class="page-title">
	<div>
		<h1>Sliders</h1>
		<p>Browse all sliders</p>
	</div>
	<div>
		<a class="btn btn-primary btn-flat" href="{{ route('backend.slider.create') }}"><i class="fa fa-lg fa-plus"></i> Create slider</a>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<h3 class="card-title">All Sliders</h3>
			@include('backend.partials.flash-message')

			<div class="card-body row">
			@foreach($sliders as $slider)
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-body">
							<img alt="" height="60" src="/sliders/{{ $slider->name }}" width="100%">
						</div>
						<div class="panel-footer">
							 {!! Form::open(['method' => 'delete', 'route' => ['backend.slider.destroy', $slider->id]]) !!}

							 	{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}

							 {!! Form::close() !!}							
						</div>
					</div>				
				</div>
			@endforeach
			</div>
		</div>
	</div>
</div>

@endsection
