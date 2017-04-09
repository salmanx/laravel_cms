@extends('layouts.backend.backend')

@section('content')
<div class="page-title">
  <div>
    <h1>Category</h1>
    <p>Delete a  category and browse all categories</p>
  </div>
</div>
<div class="row">
	<div class="col-md-4">
		<div class="card">
		  <h3 class="card-title">Delete Category</h3>  
			{!! Form::open(['method' => 'delete', 'route' => ['backend.categories.destroy', $category->id]]) !!}

			<div class="card-body">
				Are you sure want to delete this? <br>
		  	</div>
		  	<div class="card-footer">
		 	{!! Form::submit('Yes, delete this', ['class' => 'btn btn-danger']) !!}
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
						<td>{{ $category->title }}</td>
						<td>{{ $category->slug }}</td>
						<td>
							<a href="{{ route('backend.categories.edit', $category->id) }}" class="btn btn-primary btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="{{ route('backend.categories.delete', $category->id) }}" class="btn btn-danger btn-sm">
								<i class="fa fa-trash"></i>
							</a>			
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






