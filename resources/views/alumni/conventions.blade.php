@extends('alumni.app')


@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
          <li class="breadcrumb-item active">Internship</li>
        <li class="breadcrumb-item">
          <a href="/alumnidashboard">Dashboard</a>
        </li>
      </ol>
      {{-- <img src="/assets/img/internship2.jpg" style="width:100%;height:200px;"> --}}
        <form>
            <div class = "form-group">
                <label for = "location">Post</label>
                <textarea class="form-control" rows="3" id="post"></textarea>
                <button type = "submit" class = "btn btn-primary" style="margin-top:1%">Share </button>
            </div>
            <div class = "form-group">
                <label for = "location">Events</label>
                <textarea class="form-control" rows="3" id="events"></textarea>
                <button type = "submit" class = "btn btn-primary" style="margin-top:1%">Share </button>
            </div>
            <div class = "form-group">
                <label for = "location">Seminars</label>
                <textarea class="form-control" rows="3" id="seminars"></textarea>
                <button type = "submit" class = "btn btn-primary" style="margin-top:1%">Share </button>
            </div>
        </form>
    </div>
</div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Startup Igniter 2019</small>
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