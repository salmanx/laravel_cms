@extends('layouts.backend')

@section('title', 'Posts')

@section('content')
<a href="{{ route('backend.posts.create') }}" class="btn btn-primary">Create new post</a>

<div class="row">
	<table class="table table-hover">
		<thead>
			<tr>
				<td>Ttile</td>
				<td>Slug</td>
				<td>Author</td>
				<td>Published</td>
				<td>Edit</td>
				<td>Delete</td>
			</tr>
		</thead>
		<tbody>
			@foreach($posts as $post)
				<tr class="{{ $post->published_highlight }}">
					<td><a href="{{ route('backend.posts.edit', $post->id) }}">{{ $post->title }}</a></td>
					<td>{{ $post->slug }}</td>
					<td>{{ $post->author->name }}</td>
					<td>{{ $post->publishedDate() }}</td>
					<td>
						<a href="{{ route('backend.posts.edit', $post->id) }}">
							<span class="glyphicon glyphicon-edit"></span>
						</a>
					</td>
					<td>
						<a href="{{ route('backend.posts.delete', $post->id) }}">
							<span class="glyphicon glyphicon-remove"></span>
						</a>						
					</td>

				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $posts->render() !!}
</div>

@endsection
