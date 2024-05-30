<!--Start Header--> 
    <div class="header">
        <div class="container">
            <div class="outer-box">
                <div class="header-left">
                    <div class="logo">
                        <a href="index.html"><img src="{{ asset('assets/images/home/vmond.png') }}" style="height: 70px; width: 140px;" alt="Awesome Logo" title=""></a>
                    </div>
                </div>

                <div class="header-right">
                    <div class="nav-outer style1 clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <div class="inner">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </div>
                        </div>
                        <!-- Main Menu -->
                        <nav class="main-menu style1 navbar-expand-md navbar-light">
                            
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="current"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="dropdown"><a href="#">Company Profile</a>
                                        <ul>
                                            <li><a href="{{ route('about-us') }}">About Us</a></li>
                                            <li><a href="services-details.html">Investor</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Service</a>
                                        <ul>
                                            <li><a href="{{ route('service.coffee-shop') }}">Coffee Shop</a></li>
                                            <li><a href="{{ route('service.catering') }}">Catering / Jasa Boga</a></li>
                                            <li><a href="{{ route('service.cleaning') }}">Cleaning Service</a></li>
                                            <li><a href="{{ route('service.parking') }}">Parking Service</a></li>
                                            <li><a href="{{ route('service.security') }}">Security Service</a></li>
                                            <li><a href="{{ route('service.property') }}">Property & Construction</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('reservation') }}">Reservasion</a></li>
                                    {{-- <li><a href="contact.html">Connectiong & Colaborate</a></li> --}}
                                    <li><a href="{{ route('gallery') }}">Gallery</a></li>
                                    <li><a href="{{ route('blog') }}">Blog</a></li>
                                    <li><a href="https://api.whatsapp.com/send?phone=6281818181847" target="_blank">Contact Us</a></li>
                                </ul>
                            </div>
                        </nav>                        
                        <!-- Main Menu End-->
                    </div> 

                    <div class="header-right_buttom">
                        <div class="btns-box">
                            <a class="btn-one" href="https://api.whatsapp.com/send?phone=6281818181847">
                                <div class="border_line"><img src="assets/images/shape/button-border.png" alt=""></div>
                                <span class="txt">Contact Us<i class="flaticon-plus-1 plusicon"></i></span>
                            </a>
                        </div>
                    </div> 

                </div> 
            </div>
        </div>    
    </div> 
    <!--End header-->

    {{-- Mobilee --}}
    <!--Sticky Header-->
    <div class="sticky-header">
      <div class="container">
          <div class="clearfix">
              <!--Logo-->
              <div class="logo float-left">
                  <a href="index.html" class="img-responsive"><img src="{{ asset('assets/images/home/vmond.png') }}" style="height: 70px; width: 140px;" alt="" title=""></a>
              </div>
              <!--Right Col-->
              <div class="right-col float-right">
                  <!-- Main Menu -->
                  <nav class="main-menu clearfix">
                  <!--Keep This Empty / Menu will come through Javascript-->
                  </nav>   
              </div>
          </div>
      </div>
  </div>
  <!--End Sticky Header-->
  
  <!-- Mobile Menu  -->
  <div class="mobile-menu">
      <div class="menu-backdrop"></div>
      <div class="close-btn"><span class="icon fa fa-times-circle"></span></div>
      <nav class="menu-box">
          <div class="nav-logo"><a href="index.html"><img src="{{ asset('assets/images/home/vmond.png') }}" style="height: 70px; width: 140px;" alt="" title=""></a></div>
          <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
          <!--Social Links-->
          <div class="social-links">
              <ul class="clearfix">
                  <li><a href="#"><span class="fab fa fa-facebook-square"></span></a></li>
                  <li><a href="#"><span class="fab fa fa-twitter-square"></span></a></li>
                  <li><a href="#"><span class="fab fa fa-pinterest-square"></span></a></li>
                  <li><a href="#"><span class="fab fa fa-google-plus-square"></span></a></li>
                  <li><a href="#"><span class="fab fa fa-youtube-square"></span></a></li>
              </ul>
          </div>
      </nav>
  </div>
  <!-- End Mobile Menu --> 