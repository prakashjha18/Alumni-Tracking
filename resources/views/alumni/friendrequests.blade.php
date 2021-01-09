@extends('alumni.app')

@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">
            <a href="/myevents">Friend Requests</a>
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
                  @foreach($friendRequests as $friendRequest)
                  <?php
                        $name = Auth::user()::select('name')->where('id',$friendRequest->user_id)->first();
                        $collegename = Auth::user()::select('clgname')->where('id',$friendRequest->user_id)->first();
                  ?>
                  <tr>
                  <td><a href = "{{url('/viewprofile/'. $friendRequest->user_id)}}">{{$name->name}}</a></td>
                  <td>{{$collegename->clgname}}</td>
                  <td>{{$friendRequest->created_at}}</td>
                  <td>
                      <a href="{{url('/acceptfriendrequest/'. $friendRequest->user_id)}}"><i class="fa fa-check-circle" aria-hidden="true"></i></a>&nbsp;&nbsp;
                      <a href="{{url('/rejectfriendrequest/'. $friendRequest->user_id)}}"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
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