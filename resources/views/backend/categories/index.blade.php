@extends('layouts.backend.backend')

@section('content')
<div class="page-title">
  <div>
    <h1>Category</h1>
    <p>{{ $category->exists? 'Edit ' : 'Create ' }} category and browse all categories</p>
  </div>
</div>
<div class="row">
	<div class="col-md-4">
		<div class="card">
		  <h3 class="card-title">Create Category</h3>  
			{!! Form::model($category, [
				'method' => $category->exists ? 'put' : 'post',
				'route'  => $category->exists ? ['backend.categories.update', $category->id] : ['backend.categories.store']
			]) !!}
			<div class="card-body">
				@include('backend.partials.flash-message')

				<div class="form-group">
					{!! Form::label('title') !!}
					{!! Form::text('title', null, ['class' => 'form-control']) !!}
				</div>    
		  	</div>
		  	<div class="card-footer">
				{!! Form::submit($category->exists ? 'Save category' : 'Create new category', ['class' => 'btn btn-primary']) !!}
		  	</div>
			{!! Form::close() !!}              
		</div>                           
	</div>
  <div class="col-md-8">
    <div class="card">
      <h3 class="card-title">All Categories</h3>
	
      <div class="card-body">
        <table class="table table-hover table-bordered" id="sampleTable">
        <thead>
          <tr>
			<th>Title</th>
			<th>Slug</th>
			<th>Action</th>
			
          </tr>
          </thead>
          <tbody>
			@if($categories->isEmpty())
				<tr>
					<td colspan="5" align="center">There is no categories to show</td>
				</tr>

			@else
				@foreach($categories as $category)
					<tr>
						<td>{{ str_limit($category->title, 20) }}</td>
						<td>{{ str_limit($category->slug, 20) }}</td>
						<td>

				          <div>
							<a href="{{ route('backend.categories.edit', $category->id) }}" class="btn btn-primary btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="{{ route('backend.categories.delete', $category->id) }}" class="btn btn-danger btn-sm">
								<i class="fa fa-trash"></i>
							</a>
				          </div>									
											
						</td>
					</tr>
				@endforeach
			@endif
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection





