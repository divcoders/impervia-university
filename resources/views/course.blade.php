@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">
          <div class="content">
              <h1 class="page-header">
                  {{$course->name}}
              </h1>
              <p>{{$course->description}}</p>
              <button class="btn btn-primary">Buy Now</button>
          </div>
        </div>
    </div>
</div>
@endsection
