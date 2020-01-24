@extends('directorate.app')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Publish Notice</li>
        <li class="breadcrumb-item">
            <a href="/directoratedashboard">Dashboard</a>
        </li>
      </ol>
      <form method="POST" action="#">
        <div class = "form-group">
            <h2>Notice</h2>
            <textarea class="form-control" rows="15" id="post" placeholder="Notice of directors’ meeting The next College Authority’ meeting will be held:
Time:
Date:
Place:
Technology:	"></textarea>
            <button type = "submit" class = "btn btn-primary" style="margin-top:1%">Publish</button>
        </div>
      </form>
    </div>
</div>
<footer class="sticky-footer">
    <div class="container">
      <div class="text-center">
        <small>Copyright © Alumni Tracker 2020</small>
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
@endsection