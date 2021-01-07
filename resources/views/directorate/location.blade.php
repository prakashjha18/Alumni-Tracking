@extends('directorate.app')
<style>
  </style>
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Alumni Location</li>
        <li class="breadcrumb-item">
            <a href="/directoratedashboard">Dashboard</a>
        </li>
      </ol>
      <h3>COLLEGE ALUMNI LOCATION</h3>
    <div class="container ">
        <div class="panel-group" id="faqAccordion" style="font-family:cursive">
            <div class="panel panel-default ">
                <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question0">
                     <h5 class="panel-title"><u>Colleges</u></h5>  
                </div>
                <div id="question0" class="panel-collapse collapse" style="height: 0px;">
                    <div class="panel-body">
                         <div id="map-container-google-3" class="z-depth-1-half map-container-3">
                          @foreach($colleges as $college)
                            <iframe src="https://maps.google.com/maps?q={{$college->orgname}}&t=k&z=13&ie=UTF8&iwloc=&output=embed" id="map" style="width:100%;height:50% "frameborder="0"
                              style="border:0" allowfullscreen></iframe> 
                              <br><br><br>
                          @endforeach
                          </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<br>

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