<div class="twelve columns" id="left-content">
<div class="mainwrapper">
	<h3>নোটিশ</h3>
		
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
	{!! $notices->render() !!}

</div>
</div>
<div class="four columns right-side-bar" id="right-content">
    @include('templates/partials/right_sidebar')

</div>