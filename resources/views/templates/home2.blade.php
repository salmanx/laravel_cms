<div class="row">
	<div class="jombotorn">
		<h1>Hello</h1>
	</div>
</div>

<div class="row">
	@foreach($posts as $post)
		<div class="col-md-4">
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