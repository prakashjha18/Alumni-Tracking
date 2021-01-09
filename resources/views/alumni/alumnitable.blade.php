@extends('alumni.app')


@section('content')
<div class="content-wrapper">
   <div class="container-fluid"> 
        <form method="post" action="{{Route('alumni.viewalumni')}}" id="eventform">
        @csrf
        <div class="form-group">
            <label for="modes">View By</label>
            <select class="form-control" name="viewby" value="" id="viewby">
                <option>College Name</option>
                <option>Passing Year</option>
                <option>Current Status</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
     </div>
    <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Alumni Name</th>
                    <th>College</th>
                    <th>Year</th>
                    <th>Current Status</th>
                    <th>View Profile</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($users as $user )
                  <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->clgname}}</td>
                    <td>{{$user->yearpass}}</td>
                    <td>{{$user->currentstatus}}</td>
                  <td><a href="{{ route('alumni.viewprofile', ['id'=> $user->id]) }}" class="btn btn-primary">View</a></td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
        </div>
      </div>
</div><br><br>
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
            <a class="btn btn-primary" href="{{ url('/admin/login') }}">Logout</a>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection



