@extends('layouts.backend')

@section('title', 'categories')

@section('content')
<a href="{{ route('backend.categories.create') }}" class="btn btn-primary">Create new Category</a>

<div class="row">
	<table class="table table-hover">
		<thead>
			<tr>
				<td>Title</td>
				<td>Slug</td>
				<td>Edit</td>
				<td>Delete</td>
			</tr>
		</thead>
		<tbody>
		@if($categories->isEmpty())
			<tr>
				<td colspan="5" align="center">There is no categories to show</td>
			</tr>

		@else
			@foreach($categories as $category)
				<tr>
					<td>{{ $category->title }}</td>
					<td>{{ $category->slug }}</td>
					<td>
						<a href="{{ route('backend.categories.edit', $category->id) }}">
							<span class="glyphicon glyphicon-edit"></span>
						</a>
					</td>
					<td>
						<a href="{{ route('backend.categories.delete', $category->id) }}">
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
