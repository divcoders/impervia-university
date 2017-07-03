@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">My Courses</div>

                <div class="panel-body">
                  @foreach(Auth::user()->courses()->get() as $c)
                  <div class="col-md-4">
                    
                  <img src="holder.js/302x200">


                  <div class="course-info" style="padding:5px;">

                  <h4 class="page-header">{{$c->name}}</h4>
                  {{$c->description}}
                  <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-primary">Start</button>
                  </div>
                  </div>
                  </div>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
