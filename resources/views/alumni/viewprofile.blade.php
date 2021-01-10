@extends('alumni.app')


@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">
            <a href="/userslist">All Users</a>
        </li>
     </ol>
     <!-- Section: Group of personal cards -->
    
    <section class="my-5">

        <!-- Grid row -->
        <div class="row">
            @foreach($user as $user) 
         <!-- Grid column --> 
                <div class="col-sm-4" style="float: none;
                                            margin-right: auto;
                                            margin-left: auto;">
            
                    <!-- Card group-->
                    <div class="card-group">
                    
                            <!-- Card -->
                        <div class="card card-personal mb-md-0 mb-4">
                            
                            <!-- Card image-->
                            <div class="view overlay">
                                <img class="card-img-top" src="{{asset($user->image)}}"  alt="Card image cap">
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
                                <p class="card-text">E mail : {{$user->email}}</p>
                                <p class="card-text">Current status : {{$user->currentstatus}}</p>
                                <p class="card-text">College name : {{$user->clgname}}</p>
                                <p class="card-text">Organization name : {{$user->orgname}}</p>
                                <hr>
                                @if($friendRequest=="Add Friend") 
                                    <a class="card-meta" href="{{url('/addfriend/'. $user->id)}}"><span><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;{{$friendRequest}}</span></a>
                                @elseif($friendRequest=="UnFriend") 
                                    <a class="card-meta" href="{{url('/unfriend/'. $user->id)}}"><span><i class="fa fa-minus-circle" aria-hidden="true"></i>&nbsp;{{$friendRequest}}</span></a>
                                @elseif($friendRequest=="Confirm Friend Request") 
                                    <a class="card-meta" href="{{url('/confirmfriendrequest/'. $user->id)}}"><span><i class="fa fa-user" aria-hidden="true"></i>&nbsp;{{$friendRequest}}</span></a>
                                @else 
                                <a class="card-meta" style="color: #007bff"><span><i class="fa fa-user" aria-hidden="true"></i>&nbsp;{{$friendRequest}}</span></a>
                                @endif
                                <p class="card-meta float-right">Joined in 2020</p>
                    
                            </div>
                                        <!-- Card content -->
                        
                        </div>
                            
                    </div>
                            <!-- Card group-->
                    @endforeach
                </div>
                <!-- Grid row -->
    
    </section>
    <!-- Section: Group of personal cards -->
    </div>
</div>

@endsection