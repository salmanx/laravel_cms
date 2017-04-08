@extends('layouts.backend.backend')

@section('title', 'Pages')

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
		<a class="btn btn-primary btn-flat" href="{{ route('backend.pages.create') }}"><i class="fa fa-lg fa-plus"></i> Create Page</a>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<h3 class="card-title">All Pages</h3>
			<div class="card-body">
				<table class="table table-hover table-bordered">
					<thead>
						<tr>
							<th>Title</th>
							<th>Name</th>
							<th>Uri</th>
							<th>Template</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					@if($pages->isEmpty())
						<tr>
							<td colspan="5" align="center">There is no pages to show</td>
						</tr>

					@else
						@foreach($pages as $page)
							<tr>
								<td>
									{!! $page->linkToPaddedtitle(route('backend.pages.edit', $page->id)) !!}
								</td>
								<td>{{ $page->name or 'None' }}</td>
								<td><a href="{{ url($page->uri) }}">{{ $page->preetyUri() }}</a></td>
								<td>{{ $page->template or  'None' }}</td>
								<td>
									<a href="{{ route('backend.pages.edit', $page->id) }}" class="btn btn-primary btn-sm">
										<i class="fa fa-edit"></i>
									</a>
									<a href="{{ route('backend.pages.delete', $page->id) }}" class="btn btn-danger btn-sm">
										<i class="fa fa-trash"></i>
									</a>						
								</td>

							</tr>
						@endforeach
					@endif
					</tbody>
				</table>				
			</div>
		</div>
	</div>
</div>

@endsection
