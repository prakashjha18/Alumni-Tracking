
@extends('alumni.app')
<style>
.container {
  display: flex;
}
.container .card {
  flex: 1;
  margin: 10px;
  text-align: center;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
  border-radius: 20px;
  overflow: hidden;
}
.container .card .title {
  text-transform: uppercase;
  font-size: 15px;
  font-weight: bold;
  padding: 15px;
  padding-bottom: 60px;
  color: #ffffff;
}
.container .card .circle {
  box-sizing: border-box;
  font-size: 35px;
  font-weight: bold;
  background-color: #000000;
  width: 100px;
  height: 100px;
  border-radius: 50%;
  color: #ffffff;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: -60px auto 0px auto;
  z-index: 2;
  position: relative;
  box-shadow: inset 0px -10px 8px -8px rgba(0, 0, 0, 0.5);
}
.container .card .content {
  padding: 15px;
  padding-top: 45px;
  margin-top: -45px;
  background-color: #ffffff;
  box-shadow: 0px -4px 5px rgba(0, 0, 0, 0.15);
}
.container .card .icon {
  font-size: 50px;
}
.container .card:nth-child(1) .title, .container .card:nth-child(1) .circle {
  background-color: #e34f26;
}
.container .card:nth-child(1) .icon {
  color: #e34f26;
}
.container .card:nth-child(2) .title, .container .card:nth-child(2) .circle {
  background-color: #1b73ba;
}
.container .card:nth-child(2) .icon {
  color: #1b73ba;
}
.container .card:nth-child(3) .title, .container .card:nth-child(3) .circle {
  background-color: #f8d23c;
}
.container .card:nth-child(3) .icon {
  color: #f8d23c;
}
.container .card:nth-child(4) .title, .container .card:nth-child(4) .circle {
  background-color: #7478ae;
}
.container .card:nth-child(4) .icon {
  color: #7478ae;
}
.container .card:nth-child(5) .title, .container .card:nth-child(5) .circle {
  background-color: #de8a00;
}
.container .card:nth-child(5) .icon {
  color: #de8a00;
}
@media (max-width: 767px) {
  .container {
    flex-wrap: wrap;
  }
  .container .card {
    flex: 0 0 100%;
  }
}
.map-container-3{
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;
}
.map-container-3 iframe{
left:0;
top:0;
height:85%;
width:100%;
position:absolute;
}
    </style>


@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
            <a href="alumnidashboard">Alumni</a>
            </li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">
        <div class="col-12">
            <div class="container-fluid">
                <div class="page-header" style="margin:0px">
                  <img src="/assets/img/header2.jpg" style="width: 100%;height:110px">    
                </div>
            </div>
            <div class="container-fluid" >
                <img src="/assets/img/tce.jpeg" style="width:100%;height:450px;">
            </div>
            <div class="container-fluid">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#C0C0C0" align="center" style="margin-bottom:2px;height:30px;margin-top:1%;">
                  <tbody><tr>
                  <td width="7%" style="background-color:#C0C0C0">
                    <font color="#004080"><strong>News Flash</strong></font>
                  </td>
                  <td width="60%" style="background-color:#C0C0C0; font-size:12px;">
                  <marquee onmouseover="this.stop()" onmouseout="this.start()" scrolldelay="0" scrollamount="5" behavior="scroll" direction="left" id="msg">
                  <style>
                      .blink_me {
                        color:red;
                        animation: blinker 1s linear infinite;
                      }
                      @keyframes blinker {
                        50% {
                          opacity: 0;
                        }
                      }
                  </style>   
                  <font color="#006600">Event on 28<sup>th</sup> January 2020</font> &nbsp;||	MULTICON W-2020 at TCET</font>
                    <a href="#" target="_blank"><font color="#006600">TELCON-2020</font> &nbsp;||</a>
                    <a href="#" target="_blank"><font color="#006600">ISTE-2020</font> &nbsp;||</a>
                    <a href="#" target="_blank"><font color="#006600">SOJOURN-2020</font> &nbsp;||</a>
                    <a href="#" target="_blank"><font color="#006600">TSPARK-2020</font> &nbsp;||</a>
                    {{-- <a href="#" target="_blank"><font color="#006600">End Semester Examination Time Table</font> &nbsp;||</a> --}}
                    <a href="#" target="_blank"><font color="#006600">INFOSYS TRAINING</font> &nbsp;||</a>
                    <a href="#" target="_blank"><font color="#006600">CC TRAINING</font> &nbsp;||</a>
                    <a href="TNP/Notice/Internship Registration on Portal--2021 and 2022.pdf" target="_blank"><font color="#006600">Registration on AICTE’s Internship Portal  All SE and TE students (Batch 2021 and 2022).</font> &nbsp;||
                  </marquee>
                  </td>
                    <td width="07%" align="center" style="background-color:#C0C0C0">
                      <a href="#">
                        <font color="#004080"><strong>Read more</strong> 
                        </font>
                      </a>
                    </td>
                  </tr>
                  </tbody></table>
                  </div>
                  <div class="container">
                    <marquee onmouseover="this.stop()" onmouseout="this.start()" scrolldelay="0" scrollamount="10" behavior="scroll" direction="left" id="msg">
                      <div class="row">
                        <div class="col-md-2">
                          <div class="card">
                            <div class="title">
                              TOP ALUMNI
                            </div>
                            <div class="circle">1</div>
                            <div class="content">
                              <h6>PRAKASH</h6>
                              <p style="font-size:12px">Full Stack devleoper</p>
                              <div class="icon">
                                <i class="fa fa-html5"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="card">
                            <div class="title">
                              TOP ALUMNI
                            </div>
                            <div class="circle">2</div>
                            <div class="content">
                              <h6>SANYA GANDHI</h6>
                              <p style="font-size:12px">Full Stack Developer</p>
                              <div class="icon">
                                <i class="fa fa-html5"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="card">
                            <div class="title">
                              TOP ALUMNI
                            </div>
                            <div class="circle">3</div>
                            <div class="content">
                              <h6>TANYA GUPTA</h6>
                              <p style="font-size:12px">Frontend Developer</p>
                              <div class="icon">
                                <i class="fa fa-html5"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="card">
                            <div class="title">
                              TOP ALUMNI
                            </div>
                            <div class="circle">4</div>
                            <div class="content">
                              <h6>Abhishek GUPTA</h6>
                              <p style="font-size:12px">Backend Developer</p>
                              <div class="icon">
                                <i class="fa fa-html5"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="card">
                            <div class="title">
                              TOP ALUMNI
                            </div>
                            <div class="circle">5</div>
                            <div class="content">
                              <h6>SHUBHAM MAHESHWARI</h6>
                              <p style="font-size:12px">Backend Developer</p>
                              <div class="icon">
                                <i class="fa fa-html5"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="card">
                            <div class="title">
                              TOP ALUMNI
                            </div>
                            <div class="circle">6</div>
                            <div class="content">
                              <h6>NANDANI</h6>
                              <p style="font-size:12px">Developer</p>
                              <div class="icon">
                                <i class="fa fa-html5"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </marquee>
                  </div>
                  <div class="row">
                    <div class="col-lg-8">
                      <!-- Example Bar Chart Card-->
                      {{-- <div class="card mb-3">
                        <div class="card-header">
                          <i class="fa fa-bar-chart"></i> Bar Chart Example</div>
                        <div class="card-body">
                          <div class="row">
                            <div class="col-sm-8 my-auto">
                              <canvas id="myBarChart" width="100" height="50"></canvas>
                            </div>
                            <div class="col-sm-4 text-center my-auto">
                              <div class="h4 mb-0 text-primary">$34,693</div>
                              <div class="small text-muted">YTD Revenue</div>
                              <hr>
                              <div class="h4 mb-0 text-warning">$18,474</div>
                              <div class="small text-muted">YTD Expenses</div>
                              <hr>
                              <div class="h4 mb-0 text-success">$16,219</div>
                              <div class="small text-muted">YTD Margin</div>
                            </div>
                          </div>
                        </div>
                        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                      </div> --}}
                      <!-- Card Columns Example Social Feed-->
                      <div class="mb-0 mt-4">
                        <i class="fa fa-newspaper-o"></i> News Feed</div>
                      <hr class="mt-2">
                      <div class="card-columns">
                        <!-- Example Social Card-->
                        <div class="card mb-3">
                          <a href="#">
                            <img class="card-img-top img-fluid w-100" src="https://unsplash.it/700/450?image=610" alt="">
                          </a>
                          <div class="card-body">
                            <h6 class="card-title mb-1"><a href="#">David Miller</a></h6>
                            <p class="card-text small">These waves are looking pretty good today!
                              <a href="#">#surfsup</a>
                            </p>
                          </div>
                          <hr class="my-0">
                          <div class="card-body py-2 small">
                            <a class="mr-3 d-inline-block" href="#">
                              <i class="fa fa-fw fa-thumbs-up"></i>Like</a>
                            <a class="mr-3 d-inline-block" href="#">
                              <i class="fa fa-fw fa-comment"></i>Comment</a>
                            <a class="d-inline-block" href="#">
                              <i class="fa fa-fw fa-share"></i>Share</a>
                          </div>
                          <hr class="my-0">
                          <div class="card-body small bg-faded">
                            <div class="media">
                              <img class="d-flex mr-3" src="http://placehold.it/45x45" alt="">
                              <div class="media-body">
                                <h6 class="mt-0 mb-1"><a href="#">John Smith</a></h6>Very nice! I wish I was there! That looks amazing!
                                <ul class="list-inline mb-0">
                                  <li class="list-inline-item">
                                    <a href="#">Like</a>
                                  </li>
                                  <li class="list-inline-item">·</li>
                                  <li class="list-inline-item">
                                    <a href="#">Reply</a>
                                  </li>
                                </ul>
                                <div class="media mt-3">
                                  <a class="d-flex pr-3" href="#">
                                    <img src="http://placehold.it/45x45" alt="">
                                  </a>
                                  <div class="media-body">
                                    <h6 class="mt-0 mb-1"><a href="#">David Miller</a></h6>Next time for sure!
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item">
                                        <a href="#">Like</a>
                                      </li>
                                      <li class="list-inline-item">·</li>
                                      <li class="list-inline-item">
                                        <a href="#">Reply</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="card-footer small text-muted">Posted 32 mins ago</div>
                        </div>
                        <!-- Example Social Card-->
                        <div class="card mb-3">
                          <a href="#">
                            <img class="card-img-top img-fluid w-100" src="https://unsplash.it/700/450?image=180" alt="">
                          </a>
                          <div class="card-body">
                            <h6 class="card-title mb-1"><a href="#">John Smith</a></h6>
                            <p class="card-text small">Another day at the office...
                              <a href="#">#workinghardorhardlyworking</a>
                            </p>
                          </div>
                          <hr class="my-0">
                          <div class="card-body py-2 small">
                            <a class="mr-3 d-inline-block" href="#">
                              <i class="fa fa-fw fa-thumbs-up"></i>Like</a>
                            <a class="mr-3 d-inline-block" href="#">
                              <i class="fa fa-fw fa-comment"></i>Comment</a>
                            <a class="d-inline-block" href="#">
                              <i class="fa fa-fw fa-share"></i>Share</a>
                          </div>
                          <hr class="my-0">
                          <div class="card-body small bg-faded">
                            <div class="media">
                              <img class="d-flex mr-3" src="http://placehold.it/45x45" alt="">
                              <div class="media-body">
                                <h6 class="mt-0 mb-1"><a href="#">Jessy Lucas</a></h6>Where did you get that camera?! I want one!
                                <ul class="list-inline mb-0">
                                  <li class="list-inline-item">
                                    <a href="#">Like</a>
                                  </li>
                                  <li class="list-inline-item">·</li>
                                  <li class="list-inline-item">
                                    <a href="#">Reply</a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="card-footer small text-muted">Posted 46 mins ago</div>
                        </div>
                        <!-- Example Social Card-->
                        <div class="card mb-3">
                          <a href="#">
                            <img class="card-img-top img-fluid w-100" src="https://unsplash.it/700/450?image=281" alt="">
                          </a>
                          <div class="card-body">
                            <h6 class="card-title mb-1"><a href="#">Jeffery Wellings</a></h6>
                            <p class="card-text small">Nice shot from the skate park!
                              <a href="#">#kickflip</a>
                              <a href="#">#holdmybeer</a>
                              <a href="#">#igotthis</a>
                            </p>
                          </div>
                          <hr class="my-0">
                          <div class="card-body py-2 small">
                            <a class="mr-3 d-inline-block" href="#">
                              <i class="fa fa-fw fa-thumbs-up"></i>Like</a>
                            <a class="mr-3 d-inline-block" href="#">
                              <i class="fa fa-fw fa-comment"></i>Comment</a>
                            <a class="d-inline-block" href="#">
                              <i class="fa fa-fw fa-share"></i>Share</a>
                          </div>
                          <div class="card-footer small text-muted">Posted 1 hr ago</div>
                        </div>
                        <!-- Example Social Card-->
                        <div class="card mb-3">
                          <a href="#">
                            <img class="card-img-top img-fluid w-100" src="https://unsplash.it/700/450?image=185" alt="">
                          </a>
                          <div class="card-body">
                            <h6 class="card-title mb-1"><a href="#">David Miller</a></h6>
                            <p class="card-text small">It's hot, and I might be lost...
                              <a href="#">#desert</a>
                              <a href="#">#water</a>
                              <a href="#">#anyonehavesomewater</a>
                              <a href="#">#noreally</a>
                              <a href="#">#thirsty</a>
                              <a href="#">#dehydration</a>
                            </p>
                          </div>
                          <hr class="my-0">
                          <div class="card-body py-2 small">
                            <a class="mr-3 d-inline-block" href="#">
                              <i class="fa fa-fw fa-thumbs-up"></i>Like</a>
                            <a class="mr-3 d-inline-block" href="#">
                              <i class="fa fa-fw fa-comment"></i>Comment</a>
                            <a class="d-inline-block" href="#">
                              <i class="fa fa-fw fa-share"></i>Share</a>
                          </div>
                          <hr class="my-0">
                          <div class="card-body small bg-faded">
                            <div class="media">
                              <img class="d-flex mr-3" src="http://placehold.it/45x45" alt="">
                              <div class="media-body">
                                <h6 class="mt-0 mb-1"><a href="#">John Smith</a></h6>The oasis is a mile that way, or is that just a mirage?
                                <ul class="list-inline mb-0">
                                  <li class="list-inline-item">
                                    <a href="#">Like</a>
                                  </li>
                                  <li class="list-inline-item">·</li>
                                  <li class="list-inline-item">
                                    <a href="#">Reply</a>
                                  </li>
                                </ul>
                                <div class="media mt-3">
                                  <a class="d-flex pr-3" href="#">
                                    <img src="http://placehold.it/45x45" alt="">
                                  </a>
                                  <div class="media-body">
                                    <h6 class="mt-0 mb-1"><a href="#">David Miller</a></h6>
                                    <img class="img-fluid w-100 mb-1" src="https://unsplash.it/700/450?image=789" alt="">I'm saved, I found a cactus. How do I open this thing?
                                    <ul class="list-inline mb-0">
                                      <li class="list-inline-item">
                                        <a href="#">Like</a>
                                      </li>
                                      <li class="list-inline-item">·</li>
                                      <li class="list-inline-item">
                                        <a href="#">Reply</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="card-footer small text-muted">Posted yesterday</div>
                        </div>
                      </div>
                      <!-- /Card Columns-->
                    </div>
                    <div class="col-lg-4">
                      <!-- Example Pie Chart Card-->
                      {{-- <div class="card mb-3">
                        <div class="card-header">
                          <i class="fa fa-pie-chart"></i> Pie Chart Example</div>
                        <div class="card-body">
                          <canvas id="myPieChart" width="100%" height="100"></canvas>
                        </div>
                        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                      </div> --}}
                      <!-- Example Notifications Card--><br>
                      <div class="card mb-3">
                        <div class="card-header">
                          <i class="fa fa-bell-o"></i> Feeds</div>
                        <div class="list-group list-group-flush small">
                          <a class="list-group-item list-group-item-action" href="#">
                            <div class="media">
                              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                              <div class="media-body">
                                <strong>David Miller</strong> posted a new article to
                                <strong>David Miller Website</strong>.
                                <div class="text-muted smaller">Today at 5:43 PM - 5m ago</div>
                              </div>
                            </div>
                          </a>
                          <a class="list-group-item list-group-item-action" href="#">
                            <div class="media">
                              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                              <div class="media-body">
                                <strong>Samantha King</strong> new event at TCET
                                <div class="text-muted smaller">Today at 4:37 PM - 1hr ago</div>
                              </div>
                            </div>
                          </a>
                          <a class="list-group-item list-group-item-action" href="#">
                            <div class="media">
                              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                              <div class="media-body">
                                <strong>Jeffery Wellings</strong> at SFIT
                                <strong>Training Python</strong>.
                                <div class="text-muted smaller">Today at 4:31 PM - 1hr ago</div>
                              </div>
                            </div>
                          </a>
                          <a class="list-group-item list-group-item-action" href="#">
                            <div class="media">
                              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                              <div class="media-body">
                                <i class="fa fa-code-fork"></i>
                                <strong>Monica Dennis</strong> providing
                                <strong>Internship to DJ Sanghavi</strong>.
                                <div class="text-muted smaller">Today at 3:54 PM - 2hrs ago</div>
                              </div>
                            </div>
                          </a>
                          <a class="list-group-item list-group-item-action" href="#">
                            <div class="media">
                              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                              <div class="media-body">
                                <strong>David Miller</strong> posted a new article to
                                <strong>David Miller Website</strong>.
                                <div class="text-muted smaller">Today at 5:43 PM - 5m ago</div>
                              </div>
                            </div>
                          </a>
                          <a class="list-group-item list-group-item-action" href="#">
                            <div class="media">
                              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                              <div class="media-body">
                                <strong>Samantha King</strong> new event at TCET
                                <div class="text-muted smaller">Today at 4:37 PM - 1hr ago</div>
                              </div>
                            </div>
                          </a>
                          <a class="list-group-item list-group-item-action" href="#">
                            <div class="media">
                              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                              <div class="media-body">
                                <strong>Jeffery Wellings</strong> at SFIT
                                <strong>Training Python</strong>.
                                <div class="text-muted smaller">Today at 4:31 PM - 1hr ago</div>
                              </div>
                            </div>
                          </a>
                          <a class="list-group-item list-group-item-action" href="#">
                            <div class="media">
                              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                              <div class="media-body">
                                <i class="fa fa-code-fork"></i>
                                <strong>Monica Dennis</strong> providing
                                <strong>Internship to DJ Sanghavi</strong>.
                                <div class="text-muted smaller">Today at 3:54 PM - 2hrs ago</div>
                              </div>
                            </div>
                          </a>
                          <a class="list-group-item list-group-item-action" href="#">View all activity...</a>
                        </div>
                        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                      </div>
                    </div>
                  </div>
                  <div id="map-container-google-3" class="z-depth-1-half map-container-3">
                    <iframe src="https://maps.google.com/maps?q=mumbai&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                      style="border:0" allowfullscreen></iframe>
                  </div>
                </div>
        </div>
    </div>
</div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Alumni Tracker 2020</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

@endsection