@extends('alumni.app')

@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">
            <a href="/applications">Applications</a>
        </li>
     </ol>
      <div class="row">
        <div class="col-12">
          <div class="card-header">
            <i class="fa fa-table">&nbsp; Internship Applications</i>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created At</th>
                    <th>Resume</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tfoot>
                 <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Created At</th>
                  <th>Resume</th>
                  <th>Delete</th>
                  </tr>
                </tfoot>
                <tbody>
                  @foreach($applications as $application)
                  <tr>
                  <td>{{$application->name}}</td>
                  <td>{{$application->email}}</td>
                  <td>{{$application->created_at}}</td>
                  <td class="text-center"> <a class="btn btn-primary"  href="/downloadresume/{{$application->id}}">Download</a> </td>
                  <td class="text-center"> <a class="btn btn-danger"  href="/deleteapplication/{{$application->id}}">Delete</a> </td>
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