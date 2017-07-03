@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                  <ul>
                <li>  <a href="{{route('courses.create')}}">New course</a></li>
                <li>    <a href="{{route('categories.create')}}">New Category</a></li>
                <li>    <a href="{{route('users.index')}}">All Users</a></li>
                <li>    <a href="{{route('categories.index')}}">All Categories</a></li>
                <li>    <a href="{{route('courses.index')}}">All Courses</a></li>
              </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
