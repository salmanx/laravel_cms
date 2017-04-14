@extends('layouts.backend.backend')


@section('content')
<div class="page-title">
	<div>
		<h1>Notices</h1>
		<p>Delete notice</p>
	</div>
	<div>
		<a class="btn btn-primary btn-flat" href="{{ route('backend.notices.create') }}"><i class="fa fa-lg fa-plus"></i> Create Notice</a>
	</div>
</div>
<div class="card">
	<h3 class="card-title">Delete Notice</h3>
	<div class="card-body">
		 {!! Form::open(['method' => 'delete', 'route' => ['backend.notices.destroy', $notice->id]]) !!}

		 	<div class="alert alert-danger">
		 		<strong>You are about to delete a notice</strong>
		 	</div>

		 	{!! Form::submit('Yes, delete this', ['class' => 'btn btn-danger']) !!}

		 	<a href="{{ route('backend.notices.index') }}" class="btn btn-success">No. get me back</a>


		 {!! Form::close() !!}		
	</div>
</div>

@endsection