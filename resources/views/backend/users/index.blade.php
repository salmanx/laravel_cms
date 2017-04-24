@extends('layouts.backend.backend')

@section('title', 'Users')

@section('content')
<div class="page-title">
	<div>
		<h1>Users</h1>
		<p>Manage all Users</p>
	</div>
	<div>
		<a class="btn btn-primary btn-flat" href="{{ route('backend.users.create') }}"><i class="fa fa-lg fa-plus"></i> Create User</a>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<h3 class="card-title">All Users</h3>
			<div class="card-body">
				<table class="table table-hover table-bordered">
					<thead>
						<tr>
							<th>Name</th>
							<th>Email</th>
							<th>Acction</th>
						</tr>
					</thead>
					<tbody>
						@foreach($users as $user)
							<tr>
								<td><a href="{{ route('backend.users.edit', $user->id) }}">{{ $user-> name }}</a></td>
								<td>{{ $user->email }}</td>
								<td>
									<a href="{{ route('backend.users.edit', $user->id) }}" class="btn btn-primary btn-sm">
										<i class="fa fa-edit"></i>
									</a>
									<a href="{{ route('backend.users.delete', $user->id) }}" class="btn btn-danger btn-sm">
										<i class="fa fa-trash"></i>
									</a>						
								</td>

							</tr>
						@endforeach
					</tbody>
				</table>
				{!! $users->render() !!}
			</div>
		</div>
	</div>
</div>


@endsection
