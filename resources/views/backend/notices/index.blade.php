@extends('layouts.backend.backend')

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
		<a class="btn btn-primary btn-flat" href="{{ route('backend.notices.create') }}"><i class="fa fa-lg fa-plus"></i> Create Notice</a>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<h3 class="card-title">All Notices</h3>
			<div class="card-body">
				<table class="table table-hover table-bordered">
					<thead>
						<tr>
							<td>Ttile</td>
							<td>Slug</td>
							<td>Body</td>
							<td>Acction</td>
						</tr>
					</thead>
					<tbody>
						@foreach($notices as $notice)
							<tr>
								<td><a href="{{ route('backend.notices.edit', $notice->id) }}">{{ $notice->title }}</a></td>
								<td>{{ $notice->slug }}</td>
								<td>{{ $notice->body }}</td>
								<td>
									<a href="{{ route('backend.notices.edit', $notice->id) }}" class="btn btn-primary btn-sm">
										<i class="fa fa-edit"></i>
									</a>
									<a href="{{ route('backend.notices.delete', $notice->id) }}" class="btn btn-danger btn-sm">
										<i class="fa fa-trash"></i>
									</a>						
								</td>

							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection
