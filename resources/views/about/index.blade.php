@extends('layouts.app')


<style>
    .serving2{
        width: 270px !important;
        height: 270px;
    }
</style>

@section('content')

<!--Start Partner Area-->
<section class="breadcrumb-area">
    <div class="breadcrumb-area-bg" style="background-image: url({{ asset('assets/images/about/about.jpg') }});"></div>
    <div class="breadcrumb-social-link">
        <ul class="clearfix">
            <li class="wow slideInUp" data-wow-delay="500ms" data-wow-duration="1000ms">
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> 
            </li>
            <li class="wow slideInUp" data-wow-delay="700ms" data-wow-duration="2000ms">
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> 
            </li>
            <li class="wow slideInUp" data-wow-delay="900ms" data-wow-duration="1000ms">
                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </li>
            <li class="wow slideInUp" data-wow-delay="1100ms" data-wow-duration="2100ms">
                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> 
            </li>
        </ul>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content text-center">
                    <div class="title">
                       <h2>About Us</h2>
                    </div>
                    <div class="breadcrumb-menu">
                        <ul>
                            <li><a href="index.html">Back To Home<span class="flaticon-plus"></span></a></li>
                        </ul>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!--Start About Style1 Area-->
<section class="about-style1-area">
    <div class="container">
        <div class="sec-title text-center">
            <div class="sub-title">
                <h3>About us</h3>
            </div>
            <h2>We build future ready digital web<br> studio and platforms.</h2>
        </div>
        <div class="row">

            <div class="col-xl-6">
                <div class="about-style1_image-box clearfix">
                    <div class="shape">
                        <img class="zoom-fade" src="assets/images/shape/thm-shape-1.png" alt="">
                    </div>
                    <div class="inner-caption"><h3>25 Years History</h3></div>
                    <div class="image-box left">
                        <div class="single-box image-box1">
                            <div class="inner">
                                <img style="width: 170px; height: 436px;" src="{{ asset('assets/images/about/coffee.jpeg') }}" alt="">
                            </div>
                        </div> 
                        <a class="video-popup xoven-video-galler-1" title="Xoven Video Gallery" href="https://www.youtube.com/watch?v=p25gICT63ek">
                            <span class="flaticon-play-button-2 playicon"></span>
                        </a>
                    </div>
                    <div class="image-box right">
                        <div class="single-box image-box2">
                            <div class="inner">
                                <img style="width: 270px; height: 270px;" src="{{ asset('assets/images/about/vmond.jpeg') }}" alt="">
                            </div>
                        </div>
                        <div class="single-box image-box3">
                            <div class="inner">
                                <img style="width: 270px; height: 270px;" src="{{ asset('assets/images/about/vmond-night.jpeg') }}" alt="">
                            </div>
                        </div>       
                    </div>   
                </div>
            </div>

            <div class="col-xl-6">
                <div class="about-style1_content-box">
                    <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> emporibus molestias.</h2>
                    <h3>“Duis condimentum nulla nibh, non mattis enim vulputa Cras rhoncus molestie arcu, ut nulla.”</h3>
                    <div class="text">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga voluptate ratione debitis facere, odio et corrupti, animi neque vitae, quo repudiandae delectus eius in! Laborum laboriosam distinctio laudantium asperiores autem!</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--End About Style1 Area-->

<!--Start Service Style3 Area-->
<section class="service-style3-area pdtop0">
    <div class="container">
        <div class="sec-title text-center">
            <div class="sub-title">
                <h3>Our Services</h3>
            </div>
            <h2>We build future ready digital web<br> studio and platforms.</h2>
        </div>
        <div class="row">
            <!--Start Single Service Style3-->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="single-service-style3 text-center">
                    <div class="icon">
                        <img src="assets/images/icon/services/service-v2-1.png" alt="">
                    </div>
                    <div class="title">
                        <h3><a href="services-details.html">Identify the xoven<br> Reqirement</a></h3>
                        <div class="border-box"></div>
                        <div class="inner-text">
                            <p>Fusce vel vestibulum libero. Quisque non massa blandit, accumsan tortor.</p>
                        </div>
                    </div>
                </div>
            </div> 
            <!--End Single Service Style3--> 
            <!--Start Single Service Style3-->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="single-service-style3 text-center">
                    <div class="icon">
                        <img src="assets/images/icon/services/service-v2-2.png" alt="">
                    </div>
                    <div class="title">
                        <h3><a href="services-details.html">Infrastructure<br>Capacity Planning</a></h3>
                        <div class="border-box"></div>
                        <div class="inner-text">
                            <p>Fusce vel vestibulum libero. Quisque non massa blandit, accumsan tortor.</p>
                        </div>
                    </div>
                </div>
            </div> 
            <!--End Single Service Style3--> 
            <!--Start Single Service Style3-->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="single-service-style3 text-center">
                    <div class="icon">
                        <img src="assets/images/icon/services/service-v2-3.png" alt="">
                    </div>
                    <div class="title">
                        <h3><a href="services-details.html">Creative Cloud<br>Solutions</a></h3>
                        <div class="border-box"></div>
                        <div class="inner-text">
                            <p>Fusce vel vestibulum libero. Quisque non massa blandit, accumsan tortor.</p>
                        </div>
                    </div>
                </div>
            </div> 
            <!--End Single Service Style3--> 
            <!--Start Single Service Style3-->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="single-service-style3 text-center">
                    <div class="icon">
                        <img src="assets/images/icon/services/service-v2-4.png" alt="">
                    </div>
                    <div class="title">
                        <h3><a href="services-details.html">Identify the xoven<br>Reqirement</a></h3>
                        <div class="border-box"></div>
                        <div class="inner-text">
                            <p>Fusce vel vestibulum libero. Quisque non massa blandit, accumsan tortor.</p>
                        </div>
                    </div>
                </div>
            </div> 
            <!--End Single Service Style3--> 

        </div>
    </div>
</section>
<!--End Service Style3 Area-->

<!--Start Team Style1 Area-->
<section class="team-style1-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-lg-6">
                <div class="team-style1_title">
                    <div class="sec-title">
                        <div class="sub-title">
                            <h3>Our Team Member</h3>
                        </div>
                        <h2>We build future ready<br> digital web studio and<br> platforms.</h2>
                    </div>
                    <div class="btns-box">
                        <a class="btn-one" href="team.html">
                            <div class="border_line"><img  src="{{ asset('assets/images/about/team.jpeg') }}" alt=""></div>
                            <div class="left_round"></div>
                            <div class="right_round"></div>
                            <span class="txt">View All Team<i class="flaticon-plus-1 plusicon"></i></span>
                        </a>
                    </div>
                </div>
            </div>
            <!--Start Single Team Style1-->
            <div class="col-xl-4 col-lg-6 col-lg-6">
                <div class="single-team-style1 wow fadeInRight animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="img-holder">
                        <div class="inner">
                            <img style="width: 370px; height: 360px;" src="{{ asset('assets/images/about/team.jpeg') }}" alt=""/>
                            <div class="overlay-box">
                                <div class="shape"></div>
                            </div>
                        </div>
                    </div>
                    <div class="title-holder">
                        <div class="title">
                            <h3><a href="#">Alex sundrop lipson</a></h3>
                            <p>CEO & Founder</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Team Style1-->
            <!--Start Single Team Style1-->
            <div class="col-xl-4 col-lg-6 col-lg-6">
                <div class="single-team-style1 wow fadeInRight animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="img-holder">
                        <div class="inner">
                            <img style="width: 370px; height: 360px;" src="{{ asset('assets/images/about/team.jpeg') }}" alt=""/>
                            <div class="overlay-box">
                                <div class="shape"></div>
                            </div>
                        </div>
                    </div>
                    <div class="title-holder">
                        <div class="title">
                            <h3><a href="#">Mignon du Preez</a></h3>
                            <p>Web Designer</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Team Style1-->

            <!--Start Single Team Style1-->
            <div class="col-xl-4 col-lg-6 col-lg-6">
                <div class="single-team-style1 wow fadeInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="img-holder">
                        <div class="inner">
                            <img style="width: 370px; height: 360px;" src="{{ asset('assets/images/about/team.jpeg') }}" alt=""/>
                            <div class="overlay-box">
                                <div class="shape"></div>
                            </div>
                        </div>
                    </div>
                    <div class="title-holder">
                        <div class="title">
                            <h3><a href="#">Alex sundrop lipson</a></h3>
                            <p>CEO & Founder</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Team Style1-->
            <!--Start Single Team Style1-->
            <div class="col-xl-4 col-lg-6 col-lg-6">
                <div class="single-team-style1 wow fadeInLeft animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="img-holder">
                        <div class="inner">
                            <img style="width: 370px; height: 360px;" src="{{ asset('assets/images/about/team.jpeg') }}" alt=""/>
                            <div class="overlay-box">
                                <div class="shape"></div>
                            </div>
                        </div>
                    </div>
                    <div class="title-holder">
                        <div class="title">
                            <h3><a href="#">Mignon du Preez</a></h3>
                            <p>Web Designer</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Team Style1-->
            <!--Start Single Team Style1-->
            <div class="col-xl-4 col-lg-6 col-lg-6">
                <div class="single-team-style1 wow fadeInLeft animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="img-holder">
                        <div class="inner">
                            <img style="width: 370px; height: 360px;" src="{{ asset('assets/images/about/team.jpeg') }}" alt=""/>
                            <div class="overlay-box">
                                <div class="shape"></div>
                            </div>
                        </div>
                    </div>
                    <div class="title-holder">
                        <div class="title">
                            <h3><a href="#">Nondumiso Shangase</a></h3>
                            <p>Web Developer</p>
                        </div>
                    </div>  
                </div>
            </div>
            <!--End Single Team Style1-->
        </div>

    </div>
</section>
<!--End Team Style1 Area-->

<!--Start Partner Area-->
<section class="partner-area partner-style2-area">
    <div class="container">
        <div class="partner-title text-center">
            <h2>Trusted by <span>200+</span> Forward<br>Thinking Companies.</h2>
        </div>
        <ul class="partner-box partner-carousel owl-carousel owl-theme owl-dot-style1">
            <!--Start Single Partner Logo Box-->
            <li class="single-partner-logo-box">
                <a href="#"><img style="width: 170px; height: 100px;" src="{{ asset('assets/images/about/logo-Giffard.jpg') }}" alt="Awesome Image"></a>
            </li>
            <!--End Single Partner Logo Box-->
            <!--Start Single Partner Logo Box-->
            <li class="single-partner-logo-box">
                <a href="#"><img style="width: 170px; height: 100px;" src="{{ asset('assets/images/about/logo-Giffard.jpg') }}" alt="Awesome Image"></a>
            </li>
            <!--End Single Partner Logo Box-->
            <!--Start Single Partner Logo Box-->
            <li class="single-partner-logo-box">
                <a href="#"><img style="width: 170px; height: 100px;" src="{{ asset('assets/images/about/logo-Giffard.jpg') }}" alt="Awesome Image"></a>
            </li>
            <!--End Single Partner Logo Box-->
            <!--Start Single Partner Logo Box-->
            <li class="single-partner-logo-box">
                <a href="#"><img style="width: 170px; height: 100px;" src="{{ asset('assets/images/about/logo-Giffard.jpg') }}" alt="Awesome Image"></a>
            </li>
            <!--End Single Partner Logo Box-->
            <!--Start Single Partner Logo Box-->
            <li class="single-partner-logo-box">
                <a href="#"><img style="width: 170px; height: 100px;" src="{{ asset('assets/images/about/logo-Giffard.jpg') }}" alt="Awesome Image"></a>
            </li>
            <!--End Single Partner Logo Box-->
            <!--Start Single Partner Logo Box-->
            <li class="single-partner-logo-box">
                <a href="#"><img style="width: 170px; height: 100px;" src="{{ asset('assets/images/about/logo-Giffard.jpg') }}" alt="Awesome Image"></a>
            </li>
            <!--End Single Partner Logo Box-->
        </ul>
    </div>
</section> 
<!--End Partner Area--> 

@endsection