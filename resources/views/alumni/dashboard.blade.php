<!DOCTYPE html>
<html lang="en">
<head>
  <title>Alumni Tracker</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .footer {
       position: fixed;
       left: 0;
       bottom: 0;
       width: 100%;
       background-color: grey;
       color: white;
       text-align: center;
    }
h1 {
  text-align: center;
}
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
    </style>
</head>
<body>
  <div class="container-fluid">
  <div class="page-header" style="margin:0px">
    <img src="/assets/img/header2.jpg" style="width: 100%;height:110px">    
  </div>
  <nav class="navbar navbar-inverse ">
    <div class="container-fluid">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> My Network</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-bell"></span> Notification</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Chats</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">ME<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#"><span class="glyphicon glyphicon-edit"></span> Edit Profile</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-calendar"></span> Conventions</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-briefcase"></span> Organise Internship</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> LogOut</a></li>
      </ul>
    </div>
  </nav>
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
                <h5>PRAKASH</h5>
                <p>Full Stack devleoper</p>
                <div class="icon">
                  <i class="fab fa-html5"></i>
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
                <h5>SANYA GANDHI</h5>
                <p>Full Stack Developer</p>
                <div class="icon">
                  <i class="fab fa-html5"></i>
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
                <h5>TANYA GUPTA</h3>
                <p>Frontend DEveloper</p>
                <div class="icon">
                  <i class="fab fa-html5"></i>
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
                <p>Backend Developer</p>
                <div class="icon">
                  <i class="fab fa-html5"></i>
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
                <p>Backend Developer</p>
                <div class="icon">
                  <i class="fab fa-html5"></i>
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
                <h5>NANDANI</h5>
                <p>Developer</p>
                <div class="icon">
                  <i class="fab fa-html5"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </marquee>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-7">
          <marquee onmouseover="this.stop()" onmouseout="this.start()" scrolldelay="0" scrollamount="10" behavior="scroll" direction="left" id="msg">
            <div class="card" style="width:100%;height:200px;border:solid black 1px;">
              <div class="title">
                TOP ALUMNI
              </div>
              <div class="circle">1</div>
              <div class="content">
                <h5>PRAKASH</h5>
                <p>Full Stack devleoper</p>
                <div class="icon">
                  <i class="fab fa-html5"></i>
                </div>
              </div>
            </div>
          </marquee>
        </div>
        <div class="col-md-3" style="float:right">
          <div class="card mb-3">
            <div class="card-header" style="font-style:italic">
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
              <a class="list-group-item list-group-item-action" href="#">View all activity...</a>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
        </div>
      </div>
    </div>
  <div class="footer">
    <p class="m-t-xs text-sm" >2020 &copy;<a href="#" style="color:white"> Alumni Tracker</a></p>
  </div>
</div>
</body>
</html>