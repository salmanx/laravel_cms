@extends('layouts.backend.backend')

@section('title', 'Posts')

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
							<td>Ttile</td>
							<td>Slug</td>
							<td>Body</td>
							<td>Action</td>
						</tr>
					</thead>
					<tbody>
						@foreach($news as $n)
							<tr>
								<td><a href="{{ route('backend.news.edit', $n->id) }}">{{ $n->title }}</a></td>
								<td>{{ $n->slug }}</td>
								<td>{{ $n->body }}</td>
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
			</div>
		</div>
	</div>
</div>

@endsection
