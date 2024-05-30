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
                       <h2>Blog</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->
<section class="blog-page-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="blog-page-one_content">
                    <!--Start Single blog Style1-->
                    <div class="single-blog-style1 wow fadeInUp" data-wow-duration="1500ms">
                        <img style="width: 670px; height: 370px; border-radius:10px;" src="{{ asset('assets/images/blog/blog.jpeg') }}" alt="">
                        <div class="text-holder">
                            <h3 class="blog-title">
                                <a href="blog-single.html">Fusce convallis enim non magna pharetra facilisis.<br> Duis lacus nulla dignissim.</a>
                            </h3>
                            <div class="text">
                                <p>Nam mollis turpis sed magna vestibulum, pretium maximus mauris imperdiet. Mauris vehicula pellentesque tortor.</p>
                            </div>
                        </div> 
                    </div>
                    <!--End Single blog Style1-->

                    <!--Start Single blog Style1-->
                    <div class="single-blog-style1 wow fadeInUp" data-wow-duration="1500ms">
                        <img style="width: 670px; height: 370px; border-radius:10px;" src="{{ asset('assets/images/blog/blog2.jpeg') }}" alt="">
                        <div class="text-holder">
                            <h3 class="blog-title">
                                <a href="blog-single.html">Fusce convallis enim non magna pharetra facilisis. Duis lacus<br> Practil nulla dignissim.</a>
                            </h3>
                            <div class="text">
                                <p>Nam mollis turpis sed magna vestibulum, pretium maximus mauris imperdiet. Mauris vehicula pellentesque tortor.</p>
                            </div>
                        </div> 
                    </div>
                    <!--End Single blog Style1-->

                    <!--Start Single blog Style1-->
                    <div class="single-blog-style1 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="audio-gallery">
                            <img style="width: 670px; height: 370px; border-radius:10px;" src="{{ asset('assets/images/blog/blog3.jpeg') }}" alt="">
                        </div>
                        <div class="text-holder">
                            <h3 class="blog-title">
                                <a href="blog-single.html">Fusce convallis enim non magna pharetra facilisis.<br> Duis lacus nulla dignissim.</a>
                            </h3>
                            <div class="text">
                                <p>Nam mollis turpis sed magna vestibulum, pretium maximus mauris imperdiet. Mauris vehicula pellentesque tortor.</p>
                            </div>
                            <div class="bottom-box">
                                <div class="btns-box">
                                    <a class="btn-one" href="blog-single.html">
                                        <div class="border_line"><img src="assets/images/shape/button-border.png" alt=""></div>
                                        <div class="left_round"></div>
                                        <div class="right_round"></div>
                                        <span class="txt">Read More<i class="flaticon-plus-1 plusicon"></i></span>
                                    </a>
                                </div>
                                <div class="meta-box">
                                    <ul class="meta-info">
                                        <li><i class="fa fa-comments-o" aria-hidden="true"></i><a href="#">No Comments</a></li>
                                        <li><a href="#">Adrian Eli</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <!--End Single blog Style1-->

                    <!--Start Single blog Style1-->
                    <div class="single-blog-style1 wow fadeInUp" data-wow-duration="1500ms">
                        <img style="width: 670px; height: 370px; border-radius:10px;" src="{{ asset('assets/images/blog/blog4.jpeg') }}" alt="">
                        <div class="text-holder">
                            <h3 class="blog-title">
                                <a href="blog-single.html">Fusce convallis enim non magna pharetra facilisis.<br> Duis lacus nulla dignissim.</a>
                            </h3>
                            <div class="text">
                                <p>Nam mollis turpis sed magna vestibulum, pretium maximus mauris imperdiet. Mauris vehicula pellentesque tortor.</p>
                            </div>
                            <div class="bottom-box">
                                <div class="btns-box">
                                    <a class="btn-one" href="blog-single.html">
                                        <div class="border_line"><img src="assets/images/shape/button-border.png" alt=""></div>
                                        <div class="left_round"></div>
                                        <div class="right_round"></div>
                                        <span class="txt">Read More<i class="flaticon-plus-1 plusicon"></i></span>
                                    </a>
                                </div>
                                <div class="meta-box">
                                    <ul class="meta-info">
                                        <li><i class="fa fa-comments-o" aria-hidden="true"></i><a href="#">No Comments</a></li>
                                        <li><a href="#">Adrian Eli</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <!--End Single blog Style1-->
                </div>

            </div>

            <div class="col-xl-4 col-lg-5">
                <div class="sidebar-content-box">
                    <!--Start Single Sidebar Box-->
                    <div class="single-sidebar-box">
                        <div class="title">
                            <h3>Search</h3>
                        </div>
                        <div class="single-sidebar_search_box">
                            <div class="sidebar-search-box">
                                <form class="search-form" action="#">
                                    <input placeholder="Search Your Keywords..." type="text">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--End Single Sidebar Box-->
                    <!--Start Single Sidebar Box-->
                    <div class="single-sidebar-box">
                        <div class="sidebar-recent-news">
                            <div class="title">
                                <h3>Recent News</h3>
                            </div>
                            <ul class="recent-news">
                                <li>
                                    <div class="inner">   
                                        <div class="img-box">
                                            <img src="assets/images/sidebar/recent-news-1.jpg" alt="Awesome Image">
                                            <div class="overlay-content">
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>    
                                        </div>
                                        <div class="title-box">
                                            <h4><a href="#">Making Inroads in the coworking<br> Industry.</a></h4>
                                            <p>03 August 2021</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner">   
                                        <div class="img-box">
                                            <img src="assets/images/sidebar/recent-news-2.jpg" alt="Awesome Image">
                                            <div class="overlay-content">
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>    
                                        </div>
                                        <div class="title-box">
                                            <h4><a href="#">Making Inroads in the coworking<br> Industry.</a></h4>
                                            <p>03 August 2021</p>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="inner">   
                                        <div class="img-box">
                                            <img src="assets/images/sidebar/recent-news-3.jpg" alt="Awesome Image">
                                            <div class="overlay-content">
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>    
                                        </div>
                                        <div class="title-box">
                                            <h4><a href="#">Making Inroads in the coworking<br> Industry.</a></h4>
                                            <p>03 August 2021</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner">   
                                        <div class="img-box">
                                            <img src="assets/images/sidebar/recent-news-4.jpg" alt="Awesome Image">
                                            <div class="overlay-content">
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>    
                                        </div>
                                        <div class="title-box">
                                            <h4><a href="#">Making Inroads in the coworking<br> Industry.</a></h4>
                                            <p>03 August 2021</p>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!--End Single Sidebar Box-->
                </div>
            </div>
        </div>
    </div>
</section>

@endsection