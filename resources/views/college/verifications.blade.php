@extends('college.app')


@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">{{$userm->clgname}}</li>
      <li class="breadcrumb-item">
        <a href="/mentor_dashboard">Dashboard</a>
      </li>
      
      
    </ol>
      <div class="row">
        <div class="col-12">
          <h1>verify alumni</h1>
          {{-- @foreach($unverified as $user)
            name :{{$user->name}}
            email : {{$user->email}}
            year of passing : {{$user->yearpass}}
            current status : {{$user->currentstatus}}
            orgname: {{$user->orgname}}
            type : {{$user->type}}
            registred at :{{$user->created_at}}<br><br><br>
          @endforeach --}}
          <p>List of all alumnis which have registered from your college which but not verified</p>
          <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> alumi information</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>email</th>
                  <th>year of passing</th>
                  <th>current status</th>
                  <th>orgname</th>
                  <th>type</th>
                  <th>registred at</th>
                  <th>verify</th>
                </tr>
              </thead>
              <tfoot>
               <tr>
                  <th>name</th>
                  <th>email</th>
                  <th>year of passing</th>
                  <th>current status</th>
                  <th>orgname</th>
                  <th>type</th>
                  <th>registred at</th>
                  <th>verify </th>
                </tr>
              </tfoot>
              <tbody>
                @foreach($unverified as $user)
                <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->yearpass}}</td>
                <td>{{$user->currentstatus}}</td>
                <td> {{$user->orgname}}</td>
                <td> {{$user->type}}</td>
                <td>{{$user->created_at}}</td>
                <td>{{$user->id}}</td>
                <td><a href="{{ route('alumni.verify', ['id'=> $user->id]) }}" class="btn btn-primary">verify</a></td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Alumni 2020</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection