@extends('directorate.app')


@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">
            <a href="/directoratevent">Events</a>
        </li>
     </ol>
      <div class="row">
        <div class="col-12">
          <div class="card-header">
            <i class="fa fa-table">Your Events</i>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Mode</th>
                    <th>Created At</th>
                    <th>View</th>
                  </tr>
                </thead>
                <tfoot>
                 <tr>
                  <th>Title</th>
                  <th>Date</th>
                  <th>Mode</th>
                  <th>Created At</th>
                  <th>View</th>
                  </tr>
                </tfoot>
                <tbody>
                  @foreach($events as $event)
                  <tr>
                  <td>{{$event->title}}</td>
                  <td>{{$event->date}}</td>
                  <td>{{$event->mode}}</td>
                  <td>{{$event->created_at}}</td>
                  <td class="text-center"> <a class="btn btn-primary"  href="/directoratevent/{{$event->id}}">View</a> </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection