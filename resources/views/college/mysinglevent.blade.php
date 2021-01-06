@extends('college.app')


@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">
            <a href="/myevents">Event</a>
        </li>
     </ol>
     <div class="container"> 
        <form method="post" action="{{Route('college.storevent')}}" id="eventform" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="Title">Title</label>
            <input type="Text" class="form-control" id="title" name="title" value="{{$events->title}}" placeholder="Enter Title" required disabled>
        </div>
        <div class="form-group"> <!-- Date input -->
            <label class="control-label" for="date">Date</label>
            <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" value="{{$events->date}}" type="" disabled/>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description"  rows="5" required disabled> {{$events->description}} </textarea>
        </div>
        <div class="form-group">
            <img src = "{{asset($events->image)}}" class="rounded img-thumbnail mx-auto d-block col-md-6" disabld>
        </div>
        <div class="form-group">
            <label for="mode"> Mode </label> 
            <input class="form-control" name="mode" value="{{$events->mode}}" id="modes" disabled>
        </div>

        <a class="btn btn-primary" href="/editevent/{{$events->id}}">Update</a>
        <a class="btn btn-danger" class = "float-right" href="/deletevent/{{$events->id}}">Delete</a>
        </form>
     </div>
    </div>     
</div>

@endsection