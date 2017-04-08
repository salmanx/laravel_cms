<div class="row">
	@foreach($posts as $post)
		<div class="col-md-12">
			<h2><a href="{{ route('blog.post', [$post->id, $post->slug]) }}">{{ $post->title }}</a></h2>
			<p>
				Posted  on {{ $post->published_at}}
			</p>
			<p>
				{{ $post->body }}
			</p>
		</div>
	@endforeach
</div>

{!! $posts->render() !!}