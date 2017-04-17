@extends('layouts.backend.backend')

@section('content')
<div class="page-title">
	<div>
		<h1>News</h1>
		<p>Browse all news</p>
	</div>
	<div>
		<a class="btn btn-primary btn-flat" href="{{ route('backend.news.create') }}"><i class="fa fa-lg fa-plus"></i> Create News</a>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<h3 class="card-title">All News</h3>
			<div class="card-body">
				<table class="table table-hover table-bordered">
					<thead>
						<tr>
							<th>Ttile</th>
							<th>Slug</th>
							<th>Published</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($news as $n)
							<tr class="{{ $n->published_highlight }}">
								<td><a href="{{ route('backend.news.edit', $n->id) }}">{{ str_limit($n->title, 30) }}</a></td>
								<td>{{ str_limit($n->slug, 30)}}</td>
								<td>{{ $n->publishedDate() }}</td>
								<td>
									<a href="{{ route('backend.news.edit', $n->id) }}" class="btn btn-primary btn-sm">
										<i class="fa fa-edit"></i>
									</a>
									<a href="{{ route('backend.news.delete', $n->id) }}" class="btn btn-danger btn-sm">
										<i class="fa fa-trash"></i>
									</a>														
								</td>

							</tr>
						@endforeach
					</tbody>
				</table>
				{!! $news->render() !!}				
			</div>
		</div>
	</div>
</div>

@endsection
