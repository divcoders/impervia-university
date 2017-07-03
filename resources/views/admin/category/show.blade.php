@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{$category->name}}'s Detailed View</div>

                <div class="panel-body">
                  <div class="btn-group btn-group-xs">

                  <a href="{{route('courses.create')}}" class="btn btn-success">New Course</a>
                </div><Br/><Br/>
				<table class="table table-bordered table-striped">
		<tbody>
		<tr>
			<th>Name</th>
			<th>Price</th>
      <th>Description</th>
      <th>Details</th>
      <th>Control</th>
		</tr>

		@foreach($category->courses as $c)
		<tr>
			<td>{{$c->name}}</td>
			<td>${{$c->price}}</td>
			<td class="col-md-3"><small>{{$c->description}}</small></td>
      <td><small>{{$c->sections->count()}} Sections<br/>{{$c->users->count()}} Users</small></td>
      <td>
        <div class="btn-group btn-group-xs">
          <a href="{{route('courses.show', $c->slug)}}" class="btn btn-success">Detailed View</a>
          <a href="{{route('courses.edit', $c->id)}}" class="btn btn-primary">Edit</a>
          <a href="{{route('courses.destroy', $c->id)}}" class="btn btn-danger">Delete</a>
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
