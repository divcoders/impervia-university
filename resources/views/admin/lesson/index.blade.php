@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">All Lessons</div>

                <div class="panel-body">
				
				<table class="table table-bordered">
		<tbody>
		<tr>
			<th>Section</th>
			<th>Name</th>
			<th>Description</th>
			<th>Edit</th>
		</tr>

		@foreach($lessons as $l)
		<?php
		// var_dump($c); 
		// exit;
		?>
		<tr>
			<td>{{$l->section}}</td>}}
			<td>{{$c->name}}</td>
			<td>{{$c->description}}</td>
			<td><a href="/admin/lessons/edit/{{$l->id}}">Edit</a></td>
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
