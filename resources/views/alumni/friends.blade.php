@extends('alumni.app')

@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">
            <a href="/friends">Friend Requests</a>
        </li>
     </ol>
      <div class="row">
        <div class="col-12">
          <div class="card-header">
            <i class="fa fa-table">Your Friend Requests</i>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>College</th>
                    <th>Date/ Time</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tfoot>
                 <tr>
                    <th>Name</th>
                    <th>College</th>
                    <th>Date/ Time</th>
                    <th>Actions</th>
                  </tr>
                </tfoot>
                <tbody>
                  @foreach($friends as $friend)
                  <?php
                        if (Auth::user()->id != $friend->user_id) {
                            $name = Auth::user()::select('name')->where('id',$friend->user_id)->first();
                            $collegename = Auth::user()::select('clgname')->where('id',$friend->user_id)->first();
                        } else {
                            $name = Auth::user()::select('name')->where('id',$friend->friend_id)->first();
                            $collegename = Auth::user()::select('clgname')->where('id',$friend->friend_id)->first();
                        }
                  ?>
                  <tr>
                    @if (Auth::user()->id != $friend->user_id)
                        <td><a href = "{{url('/viewprofile/'. $friend->user_id)}}">{{$name->name}}</a></td>
                    @else
                        <td><a href = "{{url('/viewprofile/'. $friend->friend_id)}}">{{$name->name}}</a></td>
                    @endif
                  <td>{{$collegename->clgname}}</td>
                  <td>{{$friend->created_at}}</td>
                  <td>
                    @if(Auth::user()->id != $friend->user_id)
                        <a href="{{url('/rejectfriendrequest/'. $friend->user_id)}}"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                    @else 
                        <a href="{{url('/rejectfriendrequest/'. $friend->friend_id)}}"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                    @endif
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
</div>

@endsection