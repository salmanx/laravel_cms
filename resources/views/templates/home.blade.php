<div class="row">
	<div class="jombotorn">
		<h1>Hello</h1>
	</div>
</div>

<div class="row">
	@foreach($posts as $post)
		<div class="col-md-4">
			<h2><a href="#">{{ $post->title }}</a></h2>
			<p>
				Posted By {{ $post->author->name }} on {{ $post->published_at}}
			</p>
			<p>
				{{ $post->body }}
			</p>
		</div>
	@endforeach
</div>