@extends('alumni.app')
<style>
.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}
</style>
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
          <li class="breadcrumb-item active">Newsletter</li>
        <li class="breadcrumb-item">
          <a href="/alumnidashboard">Dashboard</a>
        </li>  
      </ol>
       <!-- Example DataTables Card-->
        <div class="row">
            <div class="col-sm-3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="flip-card-front">
                        <img src="/assets/img/quasar.jfif" alt="Avatar" style="width:300px;height:300px;">
                      </div>
                      <div class="flip-card-back">
                        <h1>Quasar 2017</h1> 
                        <p>Effective implementation of ISO 9001: 2008 based Quality Management System (QMS)</p> 
                        <p>Training on “Advance Machine Learning Algorithms” is initiated by Mr. AnadKhandare, AP CMPN department where 13 students have registered.</p>
                      </div>
                    </div>
                </div>
                <div style="text-align:center">
                    <button type="button" class="btn btn-danger">Subscription</button>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="flip-card-front">
                        <img src="/assets/img/ezine.jfif" alt="Avatar" style="width:300px;height:300px;">
                      </div>
                      <div class="flip-card-back">
                        <h1>IT-Ezine</h1> 
                        <p>Effective implementation of ISO 9001: 2008 based Quality Management System (QMS)</p> 
                        <p>Training on “Advance Machine Learning Algorithms” is initiated by Mr. AnadKhandare, AP CMPNdepartment where 13 students have registered.</p>
                      </div>
                    </div>
                </div>
                <div style="text-align:center">
                    <button type="button" class="btn btn-danger">Subscription</button>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="flip-card-front">
                        <img src="/assets/img/byte.jfif" alt="Avatar" style="width:300px;height:300px;">
                      </div>
                      <div class="flip-card-back">
                        <h1>The Byte</h1> 
                        <p>Effective implementation of ISO 9001: 2008 based Quality Management System (QMS)</p> 
                        <p>Training on “Advance Machine Learning Algorithms” is initiated by Mr. AnadKhandare, AP CMPNdepartment where 13 students have registered.</p>
                      </div>
                    </div>
                </div>
                <div style="text-align:center">
                    <button type="button" class="btn btn-danger">Subscription</button>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="flip-card-front">
                        <img src="/assets/img/nimbus.jfif" alt="Avatar" style="width:300px;height:300px;">
                      </div>
                      <div class="flip-card-back">
                        <h1>Nimbus</h1> 
                        <p>Effective implementation of ISO 9001: 2008 based Quality Management System (QMS)</p> 
                        <p>Training on “Advance Machine Learning Algorithms” is initiated by Mr. AnadKhandare, AP CMPN department where 13 students have registered.</p>
                      </div>
                    </div>
                </div>
                <div style="text-align:center">
                    <button type="button" class="btn btn-danger">Subscription</button>
                </div>
            </div>
        </div>
    </div>
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
            <a class="btn btn-primary" href="{{ url('/admin/login') }}">Logout</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection