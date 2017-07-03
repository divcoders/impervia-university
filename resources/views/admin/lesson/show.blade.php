@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$category->name}}</div>

                <div class="panel-body">

				<table class="table table-bordered">
		<tbody>
		<tr>
			<th>Name</th>
			<th>Price</th>
			<th>Description</th>
			<th>Sections</th>
      <th>Users</th>
      <th>edit | delete</th>
		</tr>

		@foreach($courses as $c)
		<tr>
			<td>{{$c->name}}</td>
			<td>{{$c->price}}</td>
			<td>{{$c->description}}</td>
      <td><a href="/admin/courses/sections/{{$c->id}}">{{$c->sections->count}}</a></td>
      <td>{{$c->users->count}}</td>
      <td>edit | delete</td>
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
