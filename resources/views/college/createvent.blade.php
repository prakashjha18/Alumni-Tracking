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
            <input type="Text" class="form-control" id="title" name="title" value="" placeholder="Enter Title" required>
        </div>
        <div class="form-group"> <!-- Date input -->
            <label class="control-label" for="date">Date</label>
            <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" value="" type=""/>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" value="" rows="5" required></textarea>
        </div>
        <div class="form-group">
            <label for="fileinput">Image</label>
            <input type="file" class="form-control-file" name="imagef" required>
        </div>
        <div class="form-group">
            <label for="modes">Mode</label>
            <select class="form-control" name="mode" value="" id="modes">
                <option>Online</option>
                <option>Offline</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
     </div>
    </div>     
</div>

@endsection