@extends('layouts.backend.backend')

@section('title', 'Posts')

@section('content')
<div class="page-title">
	<div>
		<h1>Adminstrations</h1>
		<p>Browse all adminstrative figure</p>
	</div>
	<div>
		<a class="btn btn-primary btn-flat" href="{{ route('backend.adminstrations.create') }}"><i class="fa fa-lg fa-plus"></i> Create One</a>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<h3 class="card-title">All Adminstrative Person</h3>
			<div class="card-body">
				<table class="table table-hover table-bordered">
					<thead>
						<tr>
							<th>Picture</th>
							<th>Name</th>
							<th>Position</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($adminstrations as $admin)
							<tr>
								<td>
									<img src="/upload/adminstrations/{{$admin->image}}" width="100">
								</td>
								<td>{{ $admin->name }}</td>
								<td>{{ $admin->position }}</td>								
								<td>{{ $admin->status }}</td>
								<td>
									<a href="{{ route('backend.adminstrations.edit', $admin->id) }}" class="btn btn-primary btn-sm">
										<i class="fa fa-edit"></i>
									</a>
									<a href="{{ route('backend.adminstrations.delete', $admin->id) }}" class="btn btn-danger btn-sm">
										<i class="fa fa-trash"></i>
									</a>														
								</td>

							</tr>
						@endforeach
					</tbody>
				</table>
				{!! $adminstrations->render() !!}				
			</div>
		</div>
	</div>
</div>

@endsection
