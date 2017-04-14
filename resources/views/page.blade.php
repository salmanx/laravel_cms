@extends('layouts.frontend')

@section('content')
	@if($page->view)
		{!! $page->view->render() !!}
	@else
    	{!! $page->body !!}	
    @endif	
@endsection
