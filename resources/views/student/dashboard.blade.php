@extends('layouts.app2')
<style>
    #team {
    background: #eee !important;
}

.btn-primary:hover,
.btn-primary:focus {
    background-color: #108d6f;
    border-color: #108d6f;
    box-shadow: none;
    outline: none;
}

.btn-primary {
    color: #fff;
    background-color: #D7A818;
    border-color: #D7A818;
}

section {
    padding: 60px 0;
}

section .section-title {
    text-align: center;
    color: #D7A818;
    margin-bottom: 50px;
    /* text-transform: uppercase; */
}

#team .card {
    border: none;
    background: #ffffff;
}

.image-flip:hover .backside,
.image-flip.hover .backside {
    -webkit-transform: rotateY(0deg);
    -moz-transform: rotateY(0deg);
    -o-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    transform: rotateY(0deg);
    border-radius: .25rem;
}

.image-flip:hover .frontside,
.image-flip.hover .frontside {
    -webkit-transform: rotateY(180deg);
    -moz-transform: rotateY(180deg);
    -o-transform: rotateY(180deg);
    transform: rotateY(180deg);
}

.mainflip {
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -ms-transition: 1s;
    -moz-transition: 1s;
    -moz-transform: perspective(1000px);
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
    position: relative;
}

.frontside {
    position: relative;
    -webkit-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    z-index: 2;
    margin-bottom: 30px;
}

.backside {
    position: absolute;
    top: 0;
    left: 0;
    background: white;
    -webkit-transform: rotateY(-180deg);
    -moz-transform: rotateY(-180deg);
    -o-transform: rotateY(-180deg);
    -ms-transform: rotateY(-180deg);
    transform: rotateY(-180deg);
    -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
}

.frontside,
.backside {
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -moz-transition: 1s;
    -moz-transform-style: preserve-3d;
    -o-transition: 1s;
    -o-transform-style: preserve-3d;
    -ms-transition: 1s;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
}

.frontside .card,
.backside .card {
    min-height: 312px;
}

.backside .card a {
    font-size: 18px;
    color: #D7A818 !important;
}

.frontside .card .card-title,
.backside .card .card-title {
    color: #D7A818 !important;
}

.frontside .card .card-body img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
}
</style>
@section('content')
    <!--== Slider Area Start ==-->
    <section id="slider-area">
        <div class="slider-active-wrap owl-carousel text-center text-md-left">
            <!-- Single Slide Item Start -->
            <div class="single-slide-wrap slide-bg-1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                         
                            <div class="slider-content">
                                <br><br><br>
                                <h2 style ="font-size:4vw;">Thakur College of Engineering and Technology<h2>
                                <h5>Our Students make us proud!</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slide Item End -->
    
            <!-- Single Slide Item Start -->
            <div class="single-slide-wrap slide-bg-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="slider-content">
                                <h2>We Are Not Proud</h2>
                                <h3>Students of <span>Oxfornt University</span></h3>
                                <p>Alumni Needs enables you to harness the power of your alumni network. Whatever may be the need (academic, relocation, career, projects, mentorship, etc. you can ask the community and get responses in three.</p>
                                <div class="slider-btn">
                                    <a href="#" class="btn btn-brand">our mission</a>
                                    <a href="#" class="btn btn-brand-rev">our story</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slide Item End -->
    
            <!-- Single Slide Item Start -->
            <div class="single-slide-wrap slide-bg-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="slider-content">
                                <h2>Why Proud for u</h2>
                                <h3>Students of <span>Oxfornt University</span></h3>
                                <p>Alumni Needs enables you to harness the power of your alumni network. Whatever may be the need (academic, relocation, career, projects, mentorship, etc. you can ask the community and get responses in three.</p>
                                <div class="slider-btn">
                                    <a href="#" class="btn btn-brand">our mission</a>
                                    <a href="#" class="btn btn-brand-rev">our story</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slide Item End -->
        </div>
    
     
    </section>
    <!--== Slider Area End ==-->
    
        <!--== Upcoming Event Area Start ==-->
    <section id="upcoming-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="upcoming-event-wrap" style="background-color: #D7A818;">
                        <div class="up-event-titile">
                            <h3>Upcoming event</h3>
                        </div>
                        <div class="upcoming-event-content owl-carousel" >
                            <!-- No 1 Event -->
                            <div class="single-upcoming-event">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="up-event-thumb">
                                            <img src="assets\img\event\event-img-1.jpg" class="img-fluid" alt="Upcoming Event">
                                            <h4 class="up-event-date2">It’s 27 February 2020</h4>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-7">
                                        <div class="display-table">
                                            <div class="display-table-cell">
                                                <div class="up-event-text">
                                                    <div class="event-countdown">
                                                        <div class="event-countdown-counter" data-date="2020/2/27"></div>
                                                        <p>Remaining</p>
                                                    </div>
                                                    <h3><a href="single-event.html">You all are invited to <span>Entrepreneur's Day</span></a></h3>
                                                    <p>Hello everybody Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim and minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquipv ex ea.</p>
                                                    <a href="single-event.html" class="btn btn-brand btn-brand-dark">join with us</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- partial -->
    
    
                            <!-- No 2 Event -->
                            <div class="single-upcoming-event">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="up-event-thumb">
                                            <img src="assets\img\event\event-img-2.jpg" class="img-fluid" alt="Upcoming Event">
                                            <h4 class="up-event-date2">It’s 27 February 2019</h4>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-7">
                                        <div class="display-table">
                                            <div class="display-table-cell">
                                                <div class="up-event-text">
                                                    <div class="event-countdown">
                                                        <div class="event-countdown-counter" data-date="2018/9/10"></div>
                                                        <p>Remaining</p>
                                                    </div>
                                                    <h3><a href="single-event.html">We are going to arrange a get together!</a></h3>
                                                    <p>Hello everybody Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim and minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquipv ex ea.</p>
                                                    <a href="single-event.html" class="btn btn-brand btn-brand-dark">join with us</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- partial -->
    
    
                            <!-- No 3 Event -->
                            <div class="single-upcoming-event">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="up-event-thumb">
                                            <img src="assets\img\event\event-img-3.jpg" class="img-fluid" alt="Upcoming Event">
                                            <h4 class="up-event-date">It’s 27 February 2019</h4>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-7">
                                        <div class="display-table">
                                            <div class="display-table-cell">
                                                <div class="up-event-text">
                                                    <div class="event-countdown">
                                                        <div class="event-countdown-counter" data-date="2018/9/10"></div>
                                                        <p>Remaining</p>
                                                    </div>
                                                    <h3><a href="single-event.html">We are going to arrange a get together!</a></h3>
                                                    <p>Hello everybody Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim and minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquipv ex ea.</p>
                                                    <a href="single-event.html" class="btn btn-brand btn-brand-dark">join with us</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- partial -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Upcoming Event Area End ==-->
    
       
    <section id="team" class="pb-5">
    <div class="container">
    <div class="section-title " style="text-align: center;">
                                <h2>Our Achievers</h2>
                            </div>
        <div class="row">
            <!-- Team member1 -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_01.png" alt="card image"></p>
                                    <h4 class="card-title">Nandini Yadav</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                    <a href="#" </a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member1 -->
            <!-- Team member2 -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_02.png" alt="card image"></p>
                                    <h4 class="card-title">Prakash Jha</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                    <a href="#" </a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_03.png" alt="card image"></p>
                                    <h4 class="card-title">Tanya Gupta</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                    <a href="#" </a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_04.jpg" alt="card image"></p>
                                    <h4 class="card-title">Abhishek Gupta</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                    <a href="#" </a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_05.png" alt="card image"></p>
                                    <h4 class="card-title">Shubham Maheshwari</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                    <a href="#" </a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="assets\img\achievers\1.jfif" alt="card image"></p>
                                    <h4 class="card-title">Sanya Gandhi</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                    <a href="#" </a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->

        </div>
    </div>
</section>
<!-- Team -->

        <!--== Mission Area Start ==-->
    <section id="about-area" class="section-padding">
        <div class="about-area-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 ml-auto">
                        <div class="about-content-wrap">
                            <div class="section-title text-center text-lg-left">
                                <h2>Our Misssion</h2>
                            </div>
    
                            <div class="about-thumb">
                                <img src="assets\img\aicte.jpeg" alt="" class="img-fluid">
                            </div>
    
                            <p>"To provide state-of-the-art infrastructure and right academic ambience for developing professional skills as well as an environment for growth of leadership and managerial skills to students which will make them competent engineers to deliver quality results in industry" </p>
                            <a href="about.html" class="btn btn-brand about-btn">know more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== About Area End ==-->
    
     
    
        <!--== FunFact Area Start ==-->
    <section id="funfact-area"  style="background-color: black;">
        <div class="container-fluid" >
            <div class="row text-center">
                <!--== Single FunFact Start ==-->
                <div class="col-lg-3 col-sm-6">
                    <div class="single-funfact-wrap">
                        <div class="funfact-icon">
                            <img src="assets\img\fun-fact\user.svg" alt="Funfact">
                        </div>
                        <div class="funfact-info">
                            <h5 class="funfact-count">4025</h5>
                            <p>Members</p>
                        </div>
                    </div>
                </div>
                <!--== Single FunFact End ==-->
    
                <!--== Single FunFact Start ==-->
                <div class="col-lg-3 col-sm-6">
                    <div class="single-funfact-wrap">
                        <div class="funfact-icon">
                            <img src="assets\img\fun-fact\picture.svg" alt="Funfact">
                        </div>
                        <div class="funfact-info">
                            <h5 class="funfact-count">8725</h5>
                            <p>Photos</p>
                        </div>
                    </div>
                </div>
                <!--== Single FunFact End ==-->
    
                <!--== Single FunFact Start ==-->
                <div class="col-lg-3 col-sm-6">
                    <div class="single-funfact-wrap">
                        <div class="funfact-icon">
                            <img src="assets\img\fun-fact\event.svg" alt="Funfact">
                        </div>
                        <div class="funfact-info">
                            <h5><span class="funfact-count">231</span>+</h5>
                            <p>Events</p>
                        </div>
                    </div>
                </div>
                <!--== Single FunFact End ==-->
    
                <!--== Single FunFact Start ==-->
                <div class="col-lg-3 col-sm-6">
                    <div class="single-funfact-wrap">
                        <div class="funfact-icon">
                            <img src="assets\img\fun-fact\medal.svg" alt="Funfact">
                        </div>
                        <div class="funfact-info">
                            <h5><span class="funfact-count">32</span>+</h5>
                            <p>Awards</p>
                        </div>
                    </div>
                </div>
                <!--== Single FunFact End ==-->
            </div>
        </div>
    </section>
    <!--== FunFact Area End ==-->
    
        <!--== Job Opportunity Area Start ==-->
    <section id="job-opportunity" class="section-padding">
        <div class="container">
            <!--== Section Title Start ==-->
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Job Offerings</h2>
                    </div>
                </div>
            </div>
            <!--== Section Title End ==-->
    
            <!--== Job opportunity Wrapper ==-->
            <div class="job-opportunity-wrapper">
                <div class="row">
                    <!--== Single Job opportunity Start ==-->
                    <div class="col-lg-4 col-sm-6 text-center">
                        <div class="single-job-opportunity">
                            <div class="job-opportunity-text">
                                <div class="job-oppor-logo">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <img src="assets\img\job\compnay-logo-1.png" alt="Job">
                                        </div>
                                    </div>
                                </div>
                                <h3><a href="#">Java Developer</a></h3>
                                <p>Claritas est etiam procsus dymicus, qui sequitur mutationem Claritas est etiam procsus est etiam procsus dymicus.<a href="#">[...]</a></p>
                            </div>
                            <a href="#" class="btn btn-job">Apply now</a>
                        </div>
                    </div>
                    <!--== Single Job opportunity End ==-->
    
                    <!--== Single Job opportunity Start ==-->
                    <div class="col-lg-4 col-sm-6 text-center">
                        <div class="single-job-opportunity">
                            <div class="job-opportunity-text">
                                <div class="job-oppor-logo">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <img src="assets\img\job\compnay-logo-2.png" alt="Job">
                                        </div>
                                    </div>
                                </div>
                                <h3><a href="#">Software Engineer</a></h3>
                                <p>Claritas est etiam procsus dymicus, qui sequitur mutationem Claritas est etiam procsus est etiam procsus dymicus.<a href="#">[...]</a></p>
                            </div>
                            <a href="#" class="btn btn-job">Apply now</a>
                        </div>
                    </div>
                    <!--== Single Job opportunity End ==-->
    
                    <!--== Single Job opportunity Start ==-->
                    <div class="col-lg-4 col-sm-6 text-center">
                        <div class="single-job-opportunity">
                            <div class="job-opportunity-text">
                                <div class="job-oppor-logo">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <img src="assets\img\job\compnay-logo-1.png" alt="Job">
                                        </div>
                                    </div>
                                </div>
                                <h3><a href="#">Backend Developer (Java) (m/f) wanted for leading</a></h3>
                                <p>Claritas est etiam procsus dymicus, qui sequitur mutationem Claritas est etiam procsus est etiam procsus dymicus.<a href="#">[...]</a></p>
                            </div>
                            <a href="#" class="btn btn-job ">Apply Now</a>
                        </div>
                    </div>
                    <!--== Single Job opportunity End ==-->
    
                    <!--== Single Job opportunity Start ==-->
                    <div class="col-lg-4 col-sm-6 text-center">
                        <div class="single-job-opportunity">
                            <div class="job-opportunity-text">
                                <div class="job-oppor-logo">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <img src="assets\img\job\compnay-logo-2.png" alt="Job">
                                        </div>
                                    </div>
                                </div>
                                <h3><a href="#">DataBase Expert</a></h3>
                                <p>Claritas est etiam procsus dymicus, qui sequitur mutationem Claritas est etiam procsus est etiam procsus dymicus.<a href="#">[...]</a></p>
                            </div>
                            <a href="#" class="btn btn-job">Apply now</a>
                        </div>
                    </div>
                    <!--== Single Job opportunity End ==-->
    
                    <!--== Single Job opportunity Start ==-->
                    <div class="col-lg-4 col-sm-6 text-center">
                        <div class="single-job-opportunity">
                            <div class="job-opportunity-text">
                                <div class="job-oppor-logo">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <img src="assets\img\job\compnay-logo-3.png" alt="Job">
                                        </div>
                                    </div>
                                </div>
                                <h3><a href="#">Javascript Developer</a></h3>
                                <p>Claritas est etiam procsus dymicus, qui sequitur mutationem Claritas est etiam procsus est etiam procsus dymicus.<a href="#">[...]</a></p>
                            </div>
                            <a href="#" class="btn btn-job">Apply Now</a>
                        </div>
                    </div>
                    <!--== Single Job opportunity End ==-->
    
                    <!--== Single Job opportunity Start ==-->
                    <div class="col-lg-4 col-sm-6 text-center">
                        <div class="single-job-opportunity">
                            <div class="job-opportunity-text">
                                <div class="job-oppor-logo">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <img src="assets\img\job\compnay-logo-4.png" alt="Job">
                                        </div>
                                    </div>
                                </div>
                                <h3><a href="#">Python Developer</a></h3>
                                <p>Claritas est etiam procsus dymicus, qui sequitur mutationem Claritas est etiam procsus est etiam procsus dymicus.<a href="#">[...]</a></p>
                            </div>
                            <a href="#" class="btn btn-job">Apply now</a>
                        </div>
                    </div>
                    <!--== Single Job opportunity End ==-->
                </div>
    
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <a href="career.html" class="btn btn-brand btn-loadmore">All job list</a>
                    </div>
                </div>
            </div>
            <!--== Job opportunity Wrapper ==-->
        </div>
    </section>
    <!--== Job Opportunity Area End ==-->
    
    
        <!--== Scholership Promo Area Start ==-->
    <section id="scholership-promo">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="scholership-promo-text">
                        <h2>Demo University Provide <span>Scholarship</span> For Talented Student!</h2>
                        <p>Alumni Needs enables you to harness the power of your alumni network. Whatever may be the need academic, relocation, career, projects, mentorship, etc you can ask the community and get </p>
                        <a href="#" class="btn btn-brand">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Scholership Promo Area End ==-->
    
        <!--== Blog Area Start ==-->
    <section id="blog-area" class="section-padding">
        <div class="container">
            <!--== Section Title Start ==-->
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Recent News</h2>
                    </div>
                </div>
            </div>
            <!--== Section Title End ==-->
    
            <!--== Blog Content Wrapper ==-->
            <div class="row">
                <!--== Single Blog Post start ==-->
                <div class="col-lg-4 col-md-6">
                    <article class="single-blog-post">
                        <figure class="blog-thumb">
                            <div class="blog-thumbnail">
                                <img src="assets\img\news\microsoft.jfif" alt="Blog" class="img-fluid">
                            </div>
                           
                        </figure>
    
                        <div class="blog-content">
                            <h3><a href="single-blog.html">Microsoft hired 2 IT students from TCET</a></h3>
                            <p>This is a big project of our company, we are happy to completed this type projec which are
                                get world famous award</p>
                            <a href="single-blog.html" class="btn btn-brand">More</a>
                        </div>
                    </article>
                </div>
                <!--== Single Blog Post End ==-->
    
                <!--== Single Blog Post start ==-->
                <div class="col-lg-4 col-md-6">
                    <article class="single-blog-post">
                        <figure class="blog-thumb">
                            <div class="blog-thumbnail">
                                <img src="assets\img\news\higher.jfif" alt="Blog" class="img-fluid">
                            </div>
                           
                        </figure>
    
                        <div class="blog-content">
                            <h3><a href="single-blog.html">67 students cleared GATE exams in 2019</a></h3>
                            <p>This is a big project of our company, we are happy to completed this type projec which are
                                get world famous award</p>
                            <a href="single-blog.html" class="btn btn-brand">More</a>
                        </div>
                    </article>
                </div>
                <!--== Single Blog Post End ==-->
    
                <!--== Single Blog Post start ==-->
                <div class="col-lg-4 col-md-6">
                    <article class="single-blog-post">
                        <figure class="blog-thumb">
                            <div class="blog-thumbnail">
                                <img src="assets\img\news\placement.png" alt="Blog" class="img-fluid">
                            </div>
                         
                        </figure>
    
                        <div class="blog-content">
                            <h3><a href="single-blog.html">The percentage of placements has increased from 67% to 89% in 2019</a></h3>
                            <p>This is a big project of our company, we are happy to completed </p>
                            <a href="single-blog.html" class="btn btn-brand">More</a>
                        </div>
                    </article>
                </div>
                <!--== Single Blog Post End ==-->
            </div>
            <!--== Blog Content Wrapper ==-->
        </div>
    </section>
    <!--== Blog Area EndBlog ==-->
    
    
@endsection