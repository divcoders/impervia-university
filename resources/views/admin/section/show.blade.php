@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{$section->name}}'s Detailed View</div>
                <div class="panel-body">

                  <div class="btn-group btn-group-xs">

                  <a href="{{route('lessons.create')}}/{{$section->slug}}" class="btn btn-success">New Lesson</a>
                  </div><Br/><Br/>
                  @foreach($lessons as $l)
                  <div style="margin:0 5px 5px 0;">
                    {!!$l->video_code!!}
                    <p>{{$l->name}}</p>
                    <p>{{$l->description}}</p>

                    <div class="btn-group btn-group-xs">
                      <a href="{{route('lessons.edit', $l->slug)}}" class="btn btn-success">Edit</a>
                      <a href="{{route('lessons.destroy', $l->id)}}" class="btn btn-danger">Delete</a>
                    </div>

                  </div>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
