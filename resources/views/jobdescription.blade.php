@extends('layouts.app1')
@include('includes.bot')
@section('content')
<div class="main-area" style="padding: 25px 0px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="list-info-area">
                    <h3 style="margin: 0;"><a href="#" style="color: black "> abdhsfb</a></h3>
                    <h4 class="sub-title" style="margin-top: 0;
                    font-size: 16px;
                    line-height: 24px;"><a href="company-profile.html" style="color: #999999;">@ fbdmbsdfj</a></h4>
                    <p class="list-info" style="overflow: hidden">
                        <span style = "margin-right: 15px; color: #3b60c9;"><i class="fa fa-map-marker" aria-hidden="true"></i> dfsfvdjsd</span>
                        <span style = "margin-right: 15px; color: #3b60c9;"><i class="fa fa-calendar"  aria-hidden="true"></i> shjfdvfs </span>
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
                            sdbgkjsgb
                    </p></div>
                    <div class="single">
                        <h3 class="h4">Job Requirements</h3>
                        <ul class="list-unstyled" style="padding-left: 0;list-style: none;">
                            {{-- @foreach (explode(',', $internship->skills_req) as $skills) --}}
                            <li>
                                <i class="fa fa-check-circle" style = "color: #3b60c9;float: left;margin-right: 20px; "aria-hidden="true"></i>
                                <p>fdsbmnfdbsf</p>
                            </li>
                            {{-- @endforeach --}}
                        </ul>
                    </div>
                    <div class="single">
                        <h3 class="h4">Salary Offer</h3>
                        <p>
                            $20.000 ~ $50.000
                        </p>
                    </div>
                    <div class="single">
                        <h3 class="h4">Academic Degree</h3>
                        <p>
                            Bachelor's Degree
                        </p>
                    </div>
                    <a class="btn btn-job" style="padding-right: 15px ;width: 122px;height: 45px;" href="#">Apply Now</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="job-company-info" style="
                margin: 20px 0px;
                display: block;
                overflow: hidden;">
                    <div class="job-company-thumb-profile" style="display: block;overflow: hidden;">
                        <a class="company-thumb" href="company-profile.html" style="display: block;
                        overflow: hidden;
                        float: left;
                        margin-right: 20px;">
                            <img src="assets/img/job/compnay-logo-1.png" style="max-width: 120px;
                            border: 1px solid #dddddd;" alt="company logo" title="resume">
                        </a>
                        <div class="resume-top-info" style="float: left;">
                            <br><br>
                        <h3 class="title"><a href="company-profile.html">fjhvsfdjhd</a></h3>
                            <p class="info"><i class="fa fa-map-marker" aria-hidden="true"></i> </p>
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