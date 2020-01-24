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
      <div class = "container">
        <h2>Internship</h2>
        <form>
            <div class="form-group">
                <label for="sel1">Internship Domain:</label>
                <select class="form-control" id="sel1">
                  <option>Software</option>
                  <option>Hardware</option>
                </select>
              </div>
            <div class = "form-group">
                <label for = "location">Internship Address</label>
                <textarea class="form-control" rows="2" id="location"></textarea>
            </div>
            <div class = "form-group">
                <label for = "require">Requirement Document</label>
                <textarea class="form-control" rows="4" id="location"></textarea>
            </div>
            <div class="form-group">
              <label for="item-price" class="control-label" >Date</label>
              <input type="date" class="form-control" id="date" name="date">
            </div>
           <button type = "submit" class = "btn btn-primary">Create Internship </button>
        </form>
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
            <a class="btn btn-primary" href="{{ url('/admin/login') }}">Logout</a>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection