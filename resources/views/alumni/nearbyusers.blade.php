@extends('alumni.app')


@section('content')
<script src="http://maps.google.com/maps/api/js?sensor=false" 
          type="text/javascript"></script>
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">
            <a href="/nearbyusers">All Nearby Users</a>
        </li>
     </ol>
     <!-- Section: Group of personal cards -->
    <section class="my-5">
        <div class="col-sm-3"><!--left col-->              
               
        </div><!--/col-3-->
        
        <div class="col-sm-7">
        <br><br>

    <div id="map" style="width: 1100px; height: 400px; background: grey"></div>
    
    <script type="text/javascript">
        var locations = @json($new_user_loc);
        console.log(locations);
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
            infowindow.setContent(locations[i][0]);
            infowindow.open(map, marker);
            }
        })(marker, i));
        }
    </script>
    </div><!--/col-9-->
    <br><br>
        <!-- Grid row -->
        <div class="row" style="margin-left:1px">
    
        <!-- Grid column -->
            @foreach($new_user as $user) 
                <div class="col-sm-3">
                    <!-- Card group-->
                    <div class="card-group">
                    
                            <!-- Card -->
                        <div class="card card-personal mb-md-0 mb-4">
                            
                            <!-- Card image-->
                            <div class="view overlay">
                                <img class="card-img-top" src="{{asset($user->image)}}" style="height: 175px" alt="Card image cap">
                                <a href="#!">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                                </div>
                                <!-- Card image-->
                    
                                <!-- Card content -->
                                <div class="card-body">
                    
                                <!-- Title-->
                                <a>
                                    <h4 class="card-title">{{$user->name}}</h4>
                                </a>
                                <!-- Text -->
                                <p class="card-text">{{$user->currentstatus}}</p>
                                <hr>
                                <a class="card-meta" href="{{url('/viewprofile/'. $user->id)}}"><span><i class="fa fa-user" aria-hidden="true"></i>View Profile</span></a>
                                {{-- <a class="card-meta" href="{{url('/addfriend/'. $user->name)}}"><span><i class="fa fa-user-plus" aria-hidden="true"></i>Add Friend</span></a> --}}
                                <p class="card-meta float-right">Joined in 2020</p>
                    
                            </div>
                                        <!-- Card content -->
                        
                        </div>
                            
                    </div>
                            <!-- Card group-->
                    
                </div>
                
        @endforeach
                <!-- Grid row -->
    
    </section>
    <!-- Section: Group of personal cards -->
    </div>
</div>

@endsection