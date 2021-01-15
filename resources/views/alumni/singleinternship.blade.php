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
        <h2>My Internship</h2>
        <form class = "form">
            @csrf
            <div class="form-group">
                <label for="sel1">Internship Title:</label>
                <textarea class="form-control" rows="1" id="title" name="title" disabled>{{$internship->title}}</textarea>
              </div>
            <div class = "form-group">
                <label for = "address">Internship Address</label>
                <textarea class="form-control" rows="2" id="address" name="address" disabled>{{$internship->address}}</textarea>
            </div>
            <div class = "form-group">
                <label for = "skills_req">Skills Required</label>
                <textarea class="form-control" rows="4" id="skills_req" name="skills_req" disabled>{{$internship->skills_req}}</textarea>
            </div>
            <div class = "form-group">
              <label for = "Description">Job Description</label>
              <textarea class="form-control" rows="4" id="job_desc" name="job_desc" value="" disabled>{{$internship->job_desc}}</textarea>
          </div>
            <div class="form-group">
              <label for="item-price" class="control-label" >Date</label>
              <input type="date" class="form-control" id="date" name="date" value="{{$internship->date}}" required>
            </div>
            <a class="btn btn-primary" href="/editinternship/{{$internship->id}}">Update</a>
            <a class="btn btn-danger" class = "float-right" href="/deleteinternship/{{$internship->id}}">Delete</a>
        </form>
        <br><br><br><br>
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