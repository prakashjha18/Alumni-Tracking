@extends('alumni.app')


@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">
            <a href="/userslist">All Nearby Users</a>
        </li>
     </ol>
     <!-- Section: Group of personal cards -->
    
    <section class="my-5">

        <!-- Grid row -->
        <div class="row">
    
        <!-- Grid column -->
            @foreach($new_user as $user) 
                <div class="col-sm-3">
                    <!-- Card group-->
                    <div class="card-group">
                    
                            <!-- Card -->
                        <div class="card card-personal mb-md-0 mb-4">
                            
                            <!-- Card image-->
                            <div class="view overlay">
                                <img class="card-img-top" src="{{asset($user->image)}}" alt="Card image cap">
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