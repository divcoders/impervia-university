@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">
          <div class="content">
              <h1 class="page-header">
                  Impervia University
              </h1>

              <div class="links">
                <ul>
                <li style="display:inline-block;float:left;margin:5px;"><a href="/courses">All Courses</a></li>
      @foreach ($categories as $category)
      <li style="display:inline-block;float:left;margin:5px;"><a href="/browse/{{$category->slug}}">
        {{$category->name}}</a> - {{$category->childrens->count()}} </li>
      @endforeach
    </ul>
              </div>
          </div>
        </div>
    </div>
</div>
@endsection
