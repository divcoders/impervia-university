@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <br/>
                <!--<h3 class="page-header" style="margin:10px;">Welcome {{Auth::user()->name}}</h3>-->

				<ul>
					<li><a href="{{route('user.courses')}}">My Courses</a></li>
					<li><a href="{{route('user.profile')}}">My Profile</a></li>
					<li><a href="{{route('user.wishlist')}}">My Wishlist</a></li>
					<li><a href="{{route('user.messages')}}">My Messages</a></li>
					<li><a href="{{route('user.help')}}">Help</a></li>
					<li><a href="{{route('user.settings')}}">Account Settings</a></li>
					<li><a href="{{route('user.history')}}">Purchase History</a></li>
					<li>
          <a href="{{ route('logout') }}"
              onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
              Logout
          </a>
</li>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
				</ul>

            </div>
        </div>
    </div>
</div>
@endsection
