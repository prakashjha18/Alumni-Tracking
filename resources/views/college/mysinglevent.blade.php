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
            <input type="Text" class="form-control" id="title" name="title" value="{{$events->title}}" placeholder="Enter Title" required>
        </div>
        <div class="form-group"> <!-- Date input -->
            <label class="control-label" for="date">Date</label>
            <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" value="{{$events->date}}" type=""/>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description"  rows="5" required> {{$events->description}} </textarea>
        </div>
        <div class="form-group">
                <img src = "{{asset($events->image)}}">
        </div>
        <div class="form-group">
            <label for="modes">Mode</label>
            <input class="form-control" name="mode" value="{{$events->mode}}" id="modes"  disabled>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        </form>
     </div>
    </div>     
</div>

@endsection