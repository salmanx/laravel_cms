<div class="row">
	<div class="col-md-12">
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

	</div>	
</div>