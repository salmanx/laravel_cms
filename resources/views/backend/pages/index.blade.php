@extends('layouts.backend')

@section('title', 'Pages')

@section('content')
<a href="{{ route('backend.pages.create') }}" class="btn btn-primary">Create new Page</a>

<div class="row">
	<table class="table table-hover">
		<thead>
			<tr>
				<td>Title</td>
				<td>Name</td>
				<td>Uri</td>
				<td>Template</td>
				<td>Edit</td>
				<td>Delete</td>
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
					<td><a href="{{ route('backend.pages.edit', $page->id) }}">{{ $page->title }}</a></td>
					<td>{{ $page->name or 'None' }}</td>
					<td><a href="{{ url($page->uri) }}">{{ $page->preetyUri() }}</a></td>
					<td>{{ $page->template or  'None' }}</td>
					<td>
						<a href="{{ route('backend.pages.edit', $page->id) }}">
							<span class="glyphicon glyphicon-edit"></span>
						</a>
					</td>
					<td>
						<a href="{{ route('backend.pages.delete', $page->id) }}">
							<span class="glyphicon glyphicon-remove"></span>
						</a>						
					</td>

				</tr>
			@endforeach
		@endif
		</tbody>
	</table>
</div>

@endsection
