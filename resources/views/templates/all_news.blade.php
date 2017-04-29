<div class="twelve columns" id="left-content">
<div class="mainwrapper">
	<h3>খবর</h3>
		
	<table>
	<tbody>
		@foreach($news as $index=>$n)
		<tr>
			<td{{ $index }}</td>
			<td><a href="{{ route('news.details', ['id' => $n->id, 'slug' => $n->slug]) }}">{{ $n->title }}</a></td>
			<td width='100'>{{ $n->created_at->diffForHumans() }}</td>
		</tr>
		@endforeach

	</tbody>
	</table>

	{!! $news->render() !!}

</div>
</div>
<div class="four columns right-side-bar" id="right-content">
    @include('templates/partials/right_sidebar')

</div>