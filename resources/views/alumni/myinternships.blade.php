@extends('alumni.app')

@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">
            <a href="/myinternships">Internships</a>
        </li>
     </ol>
      <div class="row">
        <div class="col-12">
          <div class="card-header">
            <i class="fa fa-table">Your Internships</i>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Created At</th>
                    <th>View</th>
                  </tr>
                </thead>
                <tfoot>
                 <tr>
                  <th>Title</th>
                  <th>Date</th>
                  <th>Created At</th>
                  <th>View</th>
                  </tr>
                </tfoot>
                <tbody>
                  @foreach($internships as $internship)
                  <tr>
                  <td>{{$internship->title}}</td>
                  <td>{{$internship->date}}</td>
                  <td>{{$internship->created_at}}</td>
                  <td class="text-center"> <a class="btn btn-primary"  href="/myinternships/{{$internship->id}}">View</a> </td>
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