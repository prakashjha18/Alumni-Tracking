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
      @include('alumni.maps')
    <div class="container bootstrap snippet">

        <div class="row">
            <div class="col-sm-3"><!--left col-->              
               
            </div><!--/col-3-->
            
            <div class="col-sm-7">
            <br><br>
            <p> Your location will only be shared to college authorities and nearby user for connectivity under no circumstances it will be shared to 3rd party application</p>
            <br><br>
            <form class="form" action="{{Route('alumni.editlocation')}}" method="post" id="registrationForm" enctype="multipart/form-data">
                          @csrf
                          <div class="form-group" style="margin:0">
                                <div class="col-xs-6">
                                <label for="first_name"><h6>Latitude</h6></label>
                                    <input type="text" class="form-control" name="lat" id="lat" style="margin-top:-2%"  placeholder="{{$location->lat}}"  readonly>
                                </div>
                        </div>
                         <div class="form-group" style="margin:0">
                                <div class="col-xs-6">
                                <label for="first_name"><h6>Longitude</h6></label>
                                    <input type="text" class="form-control" name="lng" id="lng" style="margin-top:-2%"  placeholder="{{$location->lng}}" readonly>
                                </div>
                        </div>
                        <div class="form-group" style="margin-top:2%">
                            <div class="col-xs-12">
                            </div>
                        </div>
                        <div class="form-group" style="margin-top:2%">
                            <div class="col-xs-12">
                                <button class="btn btn-lg btn-success" type="submit"><i class="fa fa-check"></i> update location</button>
                            </div>
                        </div>
                      </form>
            </div><!--/tab-content-->
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
  <script>
      /**
 * Adds a  draggable marker to the map..
 *
 * @param {H.Map} map                      A HERE Map instance within the
 *                                         application
 * @param {H.mapevents.Behavior} behavior  Behavior implements
 *                                         default interactions for pan/zoom

 */
 var lat = {{$location->lat}};
 var lng = {{$location->lng}}
function addDraggableMarker(map, behavior){

  var marker = new H.map.Marker({lat:lat, lng:lng});
  // Ensure that the marker can receive drag events
  marker.draggable = true;
  map.addObject(marker);

  // disable the default draggability of the underlying map
  // when starting to drag a marker object:
  map.addEventListener('dragstart', function(ev) {
    var target = ev.target;
    if (target instanceof H.map.Marker) {
      behavior.disable();
    }
  }, false);


  // re-enable the default draggability of the underlying map
  // when dragging has completed
  map.addEventListener('dragend', function(ev) {
    var target = ev.target;
    if (target instanceof mapsjs.map.Marker) {
      behavior.enable();
    }
    //console.log(marker.getPosition())
    var laat = marker.getPosition().lat;
    var long = marker.getPosition().lng;
    console.log(laat)
    console.log(long)
    
    document.getElementById("lat").value=laat;
    document.getElementById("lng").value=long;

  }, false);
  // var laat = marker.getPosition().lat;
  // var long = marker.getPosition().lng;
  // console.log(laat)
  // console.log(long)

  // Listen to the drag event and move the position of the marker
  // as necessary
   map.addEventListener('drag', function(ev) {
    var target = ev.target,
        pointer = ev.currentPointer;
    if (target instanceof mapsjs.map.Marker) {
      target.setPosition(map.screenToGeo(pointer.viewportX, pointer.viewportY));
    }
  }, false);
}

/**
 * Boilerplate map initialization code starts below:
 */

//Step 1: initialize communication with the platform
var platform = new H.service.Platform({
  app_id: 'nuKYhHFJdh6NMK9M4duO',
  app_code: '5Wmq-x701tp2YWL76Zqnog',
  useCIT: true,
  useHTTPS: true
});
var defaultLayers = platform.createDefaultLayers();

//Step 2: initialize a map - this map is centered over Boston
var map = new H.Map(document.getElementById('map'),
  defaultLayers.normal.map,{
  center: {lat:lat, lng:lng},
  zoom: 12
});

//Step 3: make the map interactive
// MapEvents enables the event system
// Behavior implements default interactions for pan/zoom (also on mobile touch environments)
var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));

// Step 4: Create the default UI:
var ui = H.ui.UI.createDefault(map, defaultLayers, 'en-US');

// Add the click event listener.
addDraggableMarker(map, behavior);
    </script>
@endsection