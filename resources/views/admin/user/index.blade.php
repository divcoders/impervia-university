@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">All Users</div>

                <div class="panel-body">
                  <div class="btn-group btn-group-xs">

                  <a href="{{route('users.create')}}" class="btn btn-success">New User</a>
                </div><Br/><Br/>

				<table class="table table-bordered">
		<tbody>
		<tr>
      <th>Name</th>
      <th>Email</th>
      <th>Role</th>
      <th>Control</th>
		</tr>

		@foreach($users as $u)
		<tr>
			<td>{{$u->name}}</td>
      <td>{{$u->email}}</td>
      <td>{{$u->role}}</td>
      <td>
        <div class="btn-group btn-group-xs">
          <a href="{{route('users.edit', $u->email)}}" class="btn btn-primary">Edit</a>
          <a href="{{route('users.destroy', $u->id)}}" class="btn btn-danger">Delete</a>
        </div>
      </td>
		</tr>
		@endforeach
		</tbody>
	</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
