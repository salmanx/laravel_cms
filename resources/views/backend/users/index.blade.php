@extends('layouts.backend')

@section('title', 'Users')

@section('content')
<a href="{{ route('backend.users.create') }}" class="btn btn-primary">Create new user</a>

<div class="row">
	<table class="table table-hover">
		<thead>
			<tr>
				<td>Name</td>
				<td>Email</td>
				<td>Edit</td>
				<td>Delete</td>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr>
					<td><a href="{{ route('backend.users.edit', $user->id) }}">{{ $user->name }}</a></td>
					<td>{{ $user->email }}</td>
					<td>
						<a href="{{ route('backend.users.edit', $user->id) }}">
							<span class="glyphicon glyphicon-edit"></span>
						</a>
					</td>
					<td>
						<a href="{{ route('backend.users.delete', $user->id) }}">
							<span class="glyphicon glyphicon-remove"></span>
						</a>						
					</td>

				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $users->render() !!}
</div>

@endsection
