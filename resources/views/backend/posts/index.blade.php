@extends('layouts.backend.backend')

@section('title', 'Posts')

@section('content')
<div class="page-title">
	<div>
		<h1>Posts</h1>
		<p>Browse all posts</p>
	</div>
	<div>
		<a class="btn btn-primary btn-flat" href="{{ route('backend.posts.create') }}"><i class="fa fa-lg fa-plus"></i> Create Post</a>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<h3 class="card-title">All Posts</h3>
			<div class="card-body">
				<table class="table table-hover table-bordered">
					<thead>
						<tr>
							<th>Ttile</th>
							<th>Slug</th>
							<th>Published</th>
							<th>Acion </th>					
						</tr>
					</thead>
					<tbody>
						@foreach($posts as $post)
							<tr class="{{ $post->published_highlight }}">
								<td><a href="{{ route('backend.posts.edit', $post->id) }}">{{ str_limit($post->title, 30) }}</a></td>
								<td>{{ str_limit($post->slug, 30) }}</td>
								<td>{{ $post->publishedDate() }}</td>
								<td>
									<a href="{{ route('backend.posts.edit', $post->id) }}" class="btn btn-primary btn-sm">
										<i class="fa fa-edit"></i>
									</a>
									<a href="{{ route('backend.posts.delete', $post->id) }}" class="btn btn-danger btn-sm">
										<i class="fa fa-trash"></i>
									</a>						
								</td>

							</tr>
						@endforeach
					</tbody>
				</table>
				{!! $posts->render() !!}				
			</div>
		</div>
	</div>
</div>

@endsection
