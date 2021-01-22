@extends('alumni.app')


@section('content')
<script src="http://maps.google.com/maps/api/js?sensor=false" 
          type="text/javascript"></script>
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
          <li class="breadcrumb-item active">Internship</li>
        <li class="breadcrumb-item">
          <a href="/alumnidashboard">Dashboard</a>
        </li>
      </ol>
    <div class="container bootstrap snippet">

        <div class="row">
            <div class="col-sm-1"><!--left col-->              
               
            </div><!--/col-3-->
            
            <div class="col-sm-7">
            <br><br>

        <div id="map" style="width: 1100px; height: 400px; background: grey"></div>
        
        <script type="text/javascript">
        var all_users = @json($new_user);
            var locations = @json($user_locs);
            console.log(locations[0].lat);
            var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 10,
            center: new google.maps.LatLng(locations[0].lat, locations[0].lng),
            mapTypeId: google.maps.MapTypeId.ROADMAP
            });

            var infowindow = new google.maps.InfoWindow();

            var marker, i;

            for (i = 0; i < locations.length; i++) {  
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i].lat, locations[i].lng),
                map: map
            });

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                  var x = locations[i].user_id;
                        var name = "";
                        for(i in all_users){
                            //console.log(all_users[i]);
                            if(all_users[i].id == x){
                                //console.log(all_users[i].id);
                                name = all_users[i].name;
                                console.log(name);
                            }
                        }
                  infowindow.setContent(name);
                  infowindow.open(map, marker);
                }
            })(marker, i));
            }
        </script>
        </div><!--/col-9-->
    </div><!--/row-->
    </div>
</div>
<br>
<br>
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

