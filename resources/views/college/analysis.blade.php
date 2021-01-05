@extends('college.app')


@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
    
    <!-- Page Content -->
  <div class="container">
    <h6>Positive Reviews: {{$pos}}</h6>
    <h6>Negative Reviews:{{$neg}}</h6>
    <div class="row">
      <div class="col-lg-8">
        <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Review</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($reviews as $review)
                  <tr>
                    <td>{{$review->review}}</td>
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

    </div>

@endsection