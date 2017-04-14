<div class="row">
	<div class="col-md-12">
	<h3>খবর</h3>
		
	<table>
	<tbody>
		@foreach($notices as $index=>$notice)
		<tr>
			<td{{ $index }}</td>
			<td><a href="{{ route('notice.details', ['id' => $notice->id, 'slug' => $notice->slug]) }}">{{ $notice->title }}</a></td>
			<td width='100'>{{ $notice->created_at->diffForHumans() }}</td>
		</tr>
		@endforeach

	</tbody>
	</table>

	</div>	
</div>