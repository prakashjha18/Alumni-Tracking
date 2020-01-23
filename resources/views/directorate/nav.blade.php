<style>::-webkit-scrollbar {
    width: 10px;
  }
  
  ...
  
  /* Track */
  ::-webkit-scrollbar-track {
    background: #f1f1f1; 
  }
   
  /* Handle */
  ::-webkit-scrollbar-thumb {
    background: #888; 
  }
  
  /* Handle on hover */
  ::-webkit-scrollbar-thumb:hover {
    background: #555; 
  }</style>
  <!-- Navigation-->
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      
      <a class="navbar-brand" href="{{ url('/admin') }}">Alumni Tracker</a>
      <div id="google_translate_element"></div>
  
  <script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
  }
  </script>
  
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
      
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive" >
          <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
              <!-- style="overflow-y: scroll;" -->
              <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                  <a class="nav-link" href="{{ url('/directoratedashboard') }}">
                      <i class="fa fa-fw fa-dashboard"></i>
  
                      <span class="nav-link-text">Dashboard</span>
  
                  </a>
              </li>
  
              <li class="nav-item" data-toggle="tooltip" data-placement="right" title="My Applications">
                  <a class="nav-link " href="/startupkit" >
                      <i class="fa fa-fw fa-wrench"></i>
                      <span class="nav-link-text">Activity Log</span>
                  </a>
                  
              </li>
              <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Acceptance">
                  <a class="nav-link" href="{{ url('/list_mentors') }}">
                      <i class="fa fa-fw fa-map-marker"></i>
  
                      <span class="nav-link-text">Maps</span>
                  </a>   
              </li> 
              <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Acceptance">       
                      <!--<span class="nav-link-text">List mentors</span>-->
                      <a class="nav-link" href="{{ url('/mouform') }}">
                      <i class="fa fa-pencil-square-o"></i>
  
                      <span class="nav-link-text">&nbsp;Publish Notice</span>
                      </a>
              </li> 
              
              <li class="nav-item" data-toggle="tooltip" data-placement="right" title="My Network">
                  <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
                      <i class="fa fa-fw fa-file"></i>
                      <span class="nav-link-text">My Network</span>
                  </a>
                  <ul class="sidenav-second-level collapse" id="collapseExamplePages">
                      <li>
                          <a href="{{ url('http://localhost:8009/chats') }}">Chats</a>
                      </li>
                      <li>
                          <a href="{{ url('http://localhost/video.php') }}">Emails</a>
                      </li>
                      <li>
                          <a href="{{ url('http://localhost/StartupIgnitor_forum/public/') }}">Forums</a>
                      </li>
                      <li>
                        <a href="{{ url('http://localhost/StartupIgnitor_forum/public/') }}">SMS</a>
                    </li>
                      <li>
                          <a href="{{ url('http://blogs.startupigniter.test/blogs') }}">Blogs</a>
                      </li>
                  </ul>
              </li>
              
              
              <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                  <a class="nav-link" href="{{ url('/ongoingconnection') }}">
                      <i class="fa fa-fw fa-table"></i>
                      <span class="nav-link-text">Ongoing Connection</span>
                  </a>
              </li>
              
          </ul>
          <ul class="navbar-nav sidenav-toggler">
              <li class="nav-item">
                  <a class="nav-link text-center" id="sidenavToggler">
                      <i class="fa fa-fw fa-angle-left"></i>
                  </a>
              </li>
          </ul>
          <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-fw fa-envelope"></i>
                      <span class="d-lg-none">Messages
                <span class="badge badge-pill badge-primary">12 New</span>
              </span>
                      <span class="indicator text-primary d-none d-lg-block">
                <i class="fa fa-fw fa-circle"></i>
              </span>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="messagesDropdown">
                      <h6 class="dropdown-header">New Messages:</h6>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">
                          <strong>David Miller</strong>
                          <span class="small float-right text-muted">11:21 AM</span>
                          <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
                      </a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">
                          <strong>Jane Smith</strong>
                          <span class="small float-right text-muted">11:21 AM</span>
                          <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
                      </a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">
                          <strong>John Doe</strong>
                          <span class="small float-right text-muted">11:21 AM</span>
                          <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
                      </a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item small" href="#">View all messages</a>
                  </div>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-fw fa-bell"></i>
                      <span class="d-lg-none">Alerts
                <span class="badge badge-pill badge-warning">6 New</span>
              </span>
                      <span class="indicator text-warning d-none d-lg-block">
                <i class="fa fa-fw fa-circle"></i>
              </span>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                      <h6 class="dropdown-header">New Alerts:</h6>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">
                <span class="text-success">
                  <strong>
                    <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
                </span>
                          <span class="small float-right text-muted">11:21 AM</span>
                          <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                      </a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">
                <span class="text-danger">
                  <strong>
                    <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
                </span>
                          <span class="small float-right text-muted">11:21 AM</span>
                          <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                      </a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">
                <span class="text-success">
                  <strong>
                    <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
                </span>
                          <span class="small float-right text-muted">11:21 AM</span>
                          <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                      </a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item small" href="#">View all alerts</a>
                  </div>
              </li>
              <li class="nav-item">
                  <form class="form-inline my-2 my-lg-0 mr-lg-2">
                      <div class="input-group">
                          <input class="form-control" type="text" placeholder="Search for..."style="margin-top: 0px;">
                          <span class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fa fa-search"></i>
                  </button>
                </span>
                      </div>
                  </form>
              </li>
              <li class="nav-item">
                  <a class="nav-link" data-toggle="modal" href="{{ route('logout') }}"  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
     {{ __('Logout') }}
                      <i class="fa fa-fw fa-sign-out"></i></a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
              </li>
          </ul>
      </div>
  </nav>
  