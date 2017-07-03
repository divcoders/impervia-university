@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">All Courses</div>

                <div class="panel-body">

				<table class="table table-bordered">
		<tbody>
		<tr>
			<th>Name</th>
			<th>Price</th>
      <th>Description</th>
      <th>Details</th>
      <th>Control</th>
		</tr>

		@foreach($courses as $c)
		<tr>
			<td>{{$c->name}}</td>
			<td>${{$c->price}}</td>
      <td>{{$c->description}}</td>
      <td>{{$c->sections->count()}} Sections</td>
      <td>
        <div class="btn-group btn-group-xs">
          <a href="/admin/courses/{{$c->slug}}" class="btn btn-primary">Detailed View</a>
          <a href="/admin/courses/edit/{{$c->slug}}" class="btn btn-primary">Edit</a>
          <button type="button" class="btn btn-primary">Delete</button>
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
