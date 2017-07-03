@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
                <h2 class="page-header"><?php if(isset($category)){echo $category->name;}else{echo 'All Courses';} ?></h2>

                  @foreach($courses as $c)
                  <div class="col-md-4">


                  <img src="holder.js/302x200">


                  <div class="course-info" style="padding:5px;">

                  <h4 class="page-header">{{$c->name}}</h4>
                  {{$c->description}}
                  <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-success">${{$c->price}}</button>

                    <a href="{{route('course', $c->slug)}}" class="btn btn-primary">Enroll Now</a>
                  </div>
                  </div>
                  </div>
                  @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
