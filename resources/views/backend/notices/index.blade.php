@extends('layouts.backend.backend')

@section('content')
<div class="page-title">
	<div>
		<h1>Notices</h1>
		<p>Browse all notices</p>
	</div>
	<div>
		<a class="btn btn-primary btn-flat" href="{{ route('backend.notices.create') }}"><i class="fa fa-lg fa-plus"></i> Create News</a>
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
							<th>Ttile</th>
							<th>Slug</th>
							<th>Published</th>
							<th>Acction</th>
						</tr>
					</thead>
					<tbody>
						@foreach($notices as $notice)
							<tr class="{{ $notice->published_highlight }}">
								<td><a href="{{ route('backend.notices.edit', $notice->id) }}">{{ str_limit($notice->title, 30)  }}</a></td>
								<td>{{ str_limit($notice->slug, 30) }}</td>
								<td>{{ $notice->publishedDate() }}</td>
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
				{!! $notices->render() !!}
			</div>
		</div>
	</div>
</div>

@endsection
