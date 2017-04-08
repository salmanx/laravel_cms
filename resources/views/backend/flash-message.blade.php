@if($errors->any())
	<div class="alert alert-danger">
	<strong>Please review the error</strong>
		<ul>
			@foreach($errors->all() as $error)
				<li>
					{{ $error }}
				</li>
			@endforeach
		</ul>	
	</div>
@endif