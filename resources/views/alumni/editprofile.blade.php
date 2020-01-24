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
    <div class="container bootstrap snippet">
        {{-- <div class="row">
              <div class="col-sm-10"><h1>User name</h1></div>
            <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="http://www.gravatar.com/avatar/28fd20ccec6865e2d5f0e1f4446eb7bf?s=100"></a></div>
        </div> --}}
        <div class="row">
            <div class="col-sm-3"><!--left col-->
                <div class="text-center">
                    <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
                    <h6>Upload a different photo...</h6>
                    <input type="file" class="text-center center-block file-upload">
                </div>              
                <ul class="list-group" style="margin-top:1%">
                    <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Events</strong></span> 125</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Connection</strong></span> 150</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Guest Apperance</strong></span> 20</li>
                </ul>     
                <div class="panel panel-default">
                    <div class="panel-heading">Social Media</div>
                    <div class="panel-body">
                        <i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
                    </div>
                </div>
            </div><!--/col-3-->
            <div class="col-sm-7">
                <a data-toggle="tab" href="#home">Edit</a>
              <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <hr>
                      <form class="form" action="#" method="post" id="registrationForm" >
                            <div class="form-group" style="margin:0">
                                <div class="col-xs-6">
                                <label for="first_name"><h6>Name</h6></label>
                                    <input type="text" class="form-control" name="name" id="name" style="margin-top:-2%" value="{{$user->name}}" placeholder="Name" title="Enter your name if any." disabled>
                                </div>
                            </div>
                            <div class="form-group" style="margin:0">
                              <div class="col-xs-6">
                                  <label for="email"><h6>Email</h6></label>
                              <input type="email" class="form-control" name="email" style="margin-top:-2%" id="email" value="{{$user->email}}" title="Enter your Update email." disabled>
                              </div>
                          </div>
                            <div class="form-group" style="margin:0">
                                <div class="col-xs-6">
                                    <label for="last_name"><h6>College name</h6></label>
                                <input type="text" class="form-control" name="clgname"style="margin-top:-2%" id="username" title="Enter your user name if you want to change." value="{{$user->clgname}}">
                                </div>
                            </div>
                            <div class="form-group" style="margin:0">
                                <div class="col-xs-6">
                                    <label for="phone"><h6>Year of Passing</h6></label>
                                <input type="tel" class="form-control" name="phone" style="margin-top:-2%" id="phone" value="{{$user->yearpass}}" title="Enter your update phone number .">
                                </div>
                            </div>
                            {{-- <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="mobile"><h4>Mobile</h4></label>
                                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                                </div>
                            </div> --}}
                            
                            <div class="form-group" style="margin:0">
                                <div class="col-xs-6">
                                    <label for="email"><h6>Current Status</h6></label>
                                    <input type="email" class="form-control" style="margin-top:-2%" id="location" value="{{$user->currentstatus}}" title="Enter a location">
                                </div>
                            </div>
                            <div class="form-group" style="margin:0">      
                                <div class="col-xs-6">
                                    <label for="password"><h6>Organization Name</h6></label>
                                    <input type="text" class="form-control" style="margin-top:-2%" name="password" id="password" value="{{$user->orgname}}" title="enter your password.">
                                </div>
                            </div>
                            
                            <div class="form-group" style="margin-top:2%">
                                <div class="col-xs-12">
                                    <button class="btn btn-lg btn-success" type="submit"><i class="fa fa-check"></i> Update</button>
                                    <button class="btn btn-lg" type="reset" style="border:solid 1px"><i class="fa fa-repeat"></i> Reset</button>
                                </div>
                            </div>
                      </form>
                    <hr>
                </div><!--/tab-pane-->
              </div><!--/tab-pane-->
            </div><!--/tab-content-->
        </div><!--/col-9-->
    </div><!--/row-->
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
<script>
    $(document).ready(function() {

    
var readURL = function(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.avatar').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}


$(".file-upload").on('change', function(){
    readURL(this);
});
});
</script>
@endsection