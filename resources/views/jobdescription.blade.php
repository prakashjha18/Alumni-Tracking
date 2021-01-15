@extends('layouts.app1')
@include('includes.bot')
@section('content')
<div class="main-area" style="padding: 25px 0px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="list-info-area">
                    <h3 style="margin: 0;"><a href="#" style="color: black "> {{ $internship->title }}</a></h3>
                    <h4 class="sub-title" style="margin-top: 0;
                    font-size: 16px;
                    line-height: 24px;"><a href="company-profile.html" style="color: #999999;">@ {{$internship->company_name}}</a></h4>
                    <p class="list-info" style="overflow: hidden">
                        <span style = "margin-right: 15px; color: #3b60c9;"><i class="fa fa-map-marker" aria-hidden="true"></i> {{$internship->address}}</span>
                        <span style = "margin-right: 15px; color: #3b60c9;"><i class="fa fa-calendar"  aria-hidden="true"></i> {{$internship->date}} </span>
                        <span style = "margin-right: 15px; color: #3b60c9;"><i class="fa fa-briefcase" aria-hidden="true"></i> Full-Time</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="single-job-info" style="margin-bottom: 30px;">
                    <div class="single">
                        <h3 class="h4">Job Description</h3>
                        <p>
                            {{$internship->job_desc}}
                    </p></div>
                    <div class="single">
                        <h3 class="h4">Job Requirements</h3>
                        <ul class="list-unstyled" style="padding-left: 0;list-style: none;">
                            @foreach (explode(',', $internship->skills_req) as $skills)
                            <li>
                                <i class="fa fa-check-circle" style = "color: #3b60c9;float: left;margin-right: 20px; "aria-hidden="true"></i>
                                <p>{{trim($skills)}}</p>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    {{-- <div class="single">
                        <h3 class="h4">Salary Offer</h3>
                        <p>
                            $20.000 ~ $50.000
                        </p>
                    </div> --}}
                    <div class="single">
                        <h3 class="h4">Academic Degree</h3>
                        <p>
                            Bachelor's Degree
                        </p>
                    </div>
                    <h3 class="h4">Application Form</h3>
                    {{-- <a class="btn btn-job" style="margin-top:25px; padding-right: 15px ;width: 122px;height: 45px;" href="#">Apply Now</a> --}}
                    <form class = "form" method="POST" action="{{url('/applicants/'.$internship->id)}}" id="applicationform" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" value="" required>
                          </div>
                          <div class="form-group">
                            <label for="fileinput">Upload Your Resume</label>
                            <input type="file" class="form-control-file" name="resume" value = "" required>
                        </div>
                        <div class = "form-group">
                          <label for = "email">Email</label>
                          <input type="email" class="form-control" id="email" name="email" value = "" required>
                      </div>
                      <div class="form-group">
                        <label for="clgname">College name</label>
                            <div class="col-sm-8" style="right: 15px">
                            <select class="form-control" id="clgname" name="clgname">
                                <option>Tcet</option>
                                <option>Acoe</option>
                                <option>Apsit</option>
                                <option>sfit</option>
                                <option>Tsec</option>
                                <option>mgmsit</option>
                            </select>
                            </div>
                       </div>
                    </div>
                    <br>
                       <div class="form-group">
                       <button class = "btn btn-primary" style="margin-top:15px;font-size:1.8rem;padding-right: 15px;width: 164.5px;height: 51px;padding-left: 15px;padding-top: 10px;padding-bottom: 10px;border-bottom-width: 15px;">Apply Now </button>
                       </div>
                    </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="job-company-info" style="
                margin: 20px 0px;
                display: block;
                overflow: hidden;">
                    <div class="job-company-thumb-profile" style="display: block;overflow: hidden;">
                        <a class="company-thumb" href="#" style="display: block;
                        overflow: hidden;
                        float: left;
                        margin-right: 20px;">
                            <img src="{{ asset($internship->image)}}" style="max-width: 150px;
                            border: 1px solid #dddddd;" alt="company logo" title="resume">
                        </a>
                        <div class="resume-top-info" style="float: left;">
                            <br><br>
                        <h3 class="title"><a href="#">{{$internship->company_name}}</a></h3>
                            <p class="info"><i class="fa fa-map-marker" aria-hidden="true"></i> {{$internship->company_headquater}}</p>
                        </div>
                    </div>

                </div>
                <div class="job-company-content">
                    <p>
                        Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Mauris blandit aliquet
                        elit, amet nisl tempus convallis quis ac lectus. Mauris eget tincidunt pulvinar a. Praesent
                        sapien massa, convallis a pellentesque nec, egestas convallis quis ac lectus. Mauris blandit
                        aliquet elit, posuere blandit. Nulla porttitor accumsan tincidunt.Donec rutrum congue leo
                        eget .
                    </p>
                </div>
                <ul class="list-unstyled" style="
                padding: auto;
                margin-top: 20px;
                font-family: 'Cabin', sans-serif;
                font-size: 16px;
                margin-bottom: 10px;
                line-height: 24px;
                color: #2703f3;
                display: block !important;
                overflow: hidden;
                list-style: none;
                margin-block-start: 1em;
                margin-block-end: 1em;
                margin-inline-start: 0px;
                margin-inline-end: 0px;
                padding-inline-start: 40px;
            ">
                    <li style="display: list-item;text-align: -webkit-match-parent;float: left;margin-right: 10px;"><a href="#"><i class="fa fa-twitter" style = "color: ##3b60c9;float: left;margin-right: 20px; "aria-hidden="true"></i></a></li>
                    <li style="display: list-item;text-align: -webkit-match-parent;float: left;margin-right: 10px;"><a href="#"><i class="fa fa-facebook-f" style = "color: ##3b60c9;float: left;margin-right: 20px; " aria-hidden="true"></i></a></li>
                    <li style="display: list-item;text-align: -webkit-match-parent;float: left;margin-right: 10px;"><a href="#"><i class="fa fa-google-plus" style = "color: ##3b60c9;float: left;margin-right: 20px; " aria-hidden="true"></i></a></li>
                    <li style="display: list-item;text-align: -webkit-match-parent;float: left;margin-right: 10px;"><a href="#"><i class="fa fa-linkedin" style = "color: ##3b60c9;float: left;margin-right: 20px; " aria-hidden="true"></i></a></li>
                    <li style="display: list-item;text-align: -webkit-match-parent;float: left;margin-right: 10px;"><a href="#"><i class="fa fa-pinterest-p" style = "color: #3b60c9;float: left;margin-right: 20px; " aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection