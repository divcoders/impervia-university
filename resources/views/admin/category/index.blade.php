@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">All Categories</div>

                <div class="panel-body">
        

				<table class="table table-bordered">
		<tbody>
		<tr>
      <th>Name</th>
      <th>Details</th>
      <th>Control</th>
		</tr>

		@foreach($categories as $c)
		<tr>
			<td>{{$c->name}}</td>
      <td>{{$c->courses->count()}} Courses</td>
      <td>
        <div class="btn-group btn-group-xs">
          <a href="{{route('categories.show', $c->slug)}}" class="btn btn-success">Detailed View</a>
          <a href="{{route('categories.edit', $c->slug)}}" class="btn btn-primary">Edit</a>
          <a href="{{route('categories.destroy', $c->id)}}" class="btn btn-danger">Delete</a>
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
