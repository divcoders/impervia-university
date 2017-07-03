@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$course->name}}'s Detailed View</div>

                <div class="panel-body">
                  <div class="btn-group btn-group-xs">

                  <a href="{{route('sections.create')}}" class="btn btn-success">New Section</a>
                </div><Br/><Br/>
				<table class="table table-bordered">
		<tbody>
		<tr>
			<th>Name</th>
      <th>Description</th>
      <th>Details</th>
      <th>Control</th>
		</tr>

		@foreach($course->sections->all() as $s)
		<tr>
			<td>{{$s->name}}</td>
			<td>{{$s->description}}</td>
      <td>{{$s->lessons->count()}} Lessons</td>
      <td>
        <div class="btn-group btn-group-xs">
          <a href="/admin/sections/{{$s->slug}}" class="btn btn-success">Detailed View</a>
          <a href="{{route('sections.edit', $s->slug)}}" class="btn btn-primary">Edit</a>
          <a href="/admin/lessons/create/{{$s->slug}}" class="btn btn-warning">New Lesson</a>
          <button type="button" class="btn btn-danger">Delete</button>
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
