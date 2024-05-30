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
                       <h2>Gallery</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<section class="portfolio-page-two">
    <div class="container">
        <div class="row">
            <!--Start Single Portfolio Style2-->
            <div class="col-xl-4 col-lg-4">
                <div class="single-portfolio-style1 single-portfolio-style2">
                    <img style="width: 570px; height: 580px;" src="{{ asset('assets/images/gallery/gallery1.jpeg') }}" alt="">
                    <div class="title-holder">
                        <h3><a href="portfolio-details.html">Digital Art Gellary</a></h3>
                    </div>   
                </div> 
            </div>
            <!--End Single Portfolio Style2--> 
            <!--Start Single Portfolio Style2-->
            <div class="col-xl-4 col-lg-4">
                <div class="single-portfolio-style1 single-portfolio-style2">
                        <img style="width: 570px; height: 580px;" src="{{ asset('assets/images/gallery/gallery2.jpeg') }}" alt="">
                    <div class="title-holder">
                        <h3><a href="portfolio-details.html">Market Agency Images</a></h3>
                    </div>   
                </div> 
            </div>
            <!--End Single Portfolio Style2-->
            
            <!--Start Single Portfolio Style2-->
            <div class="col-xl-4 col-lg-4">
                <div class="single-portfolio-style1 single-portfolio-style2">
                        <img style="width: 570px; height: 580px;" src="{{ asset('assets/images/gallery/gallery3.jpeg') }}" alt="">
                    <div class="title-holder">
                        <h3><a href="portfolio-details.html">Combine Analytics</a></h3>
                    </div>   
                </div> 
            </div>
            <!--End Single Portfolio Style2-->
            <!--Start Single Portfolio Style2-->
            <div class="col-xl-4 col-lg-4">
                <div class="single-portfolio-style1 single-portfolio-style2">
                        <img style="width: 570px; height: 580px;" src="{{ asset('assets/images/gallery/gallery4.jpeg') }}" alt="">
                    <div class="title-holder">
                        <h3><a href="portfolio-details.html">Meeshow Frame-clear-glasses</a></h3>
                    </div>   
                </div> 
            </div>
            <!--End Single Portfolio Style2--> 
            
            <!--Start Single Portfolio Style2-->
            <div class="col-xl-4 col-lg-4">
                <div class="single-portfolio-style1 single-portfolio-style2">
                        <img style="width: 570px; height: 580px;" src="{{ asset('assets/images/gallery/gallery1.jpeg') }}" alt="">
                    <div class="title-holder">
                        <h3><a href="portfolio-details.html">Future Look Like</a></h3>
                    </div>   
                </div> 
            </div>
            <!--End Single Portfolio Style2--> 
            <!--Start Single Portfolio Style2-->
            <div class="col-xl-4 col-lg-4">
                <div class="single-portfolio-style1 single-portfolio-style2">
                        <img style="width: 570px; height: 580px;" src="{{ asset('assets/images/gallery/gallery2.jpeg') }}" alt="">
                    <div class="title-holder">
                        <h3><a href="portfolio-details.html">Design Agency go From Here</a></h3>
                    </div>   
                </div> 
            </div>
            <!--End Single Portfolio Style2--> 

        </div>

        <div class="btns-box loadmore-portfolio-button text-center">
            <a class="btn-one" href="portfolio-1.html">
                <div class="border_line"><img src="assets/images/shape/button-border.png" alt=""></div>
                <div class="left_round"></div>
                <div class="right_round"></div>
                <span class="txt">View Load More<i class="flaticon-plus-1 plusicon"></i></span>
            </a>
        </div>

    </div>
</section>

@endsection