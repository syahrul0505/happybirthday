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
    <div class="breadcrumb-area-bg" style="background-image: url({{ asset('assets/images/reservation/index.jpeg') }});"></div>
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

<section class="portfolio-details-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="portfolio-details_content">
                    <div class="portfolio-details_image-box clearfix">
                        <div class="portfolio-main-image-box">
                            <ul class="bxslider">
                                <li>
                                    <div class="single-box clearfix">
                                        <img style="border-radius: 20px;" src="{{ asset('assets/images/reservation/table.jpg') }}" alt="Awesome Image">
                                    </div>
                                </li>
                            </ul>  
                        </div>
                        <div class="slider-pager">
                            <ul class="thumb-box">
                                <li>
                                    <a class="active" data-slide-index="0" href="#">
                                        <img style="width: 370px; height: 150px; border-radius: 20px;" src="{{ asset('assets/images/reservation/reservation2.jpeg') }}" alt="Awesome Thumb Image">    
                                    </a>
                                </li>
                                <li>
                                    <a data-slide-index="1" href="#">
                                        <img style="width: 370px; height: 150px; border-radius: 20px;" src="{{ asset('assets/images/reservation/reservation3.jpeg') }}" alt="Awesome Thumb Image">   
                                    </a>
                                </li>
                                <li>
                                    <a data-slide-index="2" href="#">
                                        <img style="width: 370px; height: 150px; border-radius: 20px;" src="{{ asset('assets/images/reservation/reservation4.jpeg') }}" alt="Awesome Thumb Image">    
                                    </a>
                                </li>
                                
                            </ul>
                        </div>    
                    </div>
                    

                    <div class="portfolio-details-text-box">
                        <div class="top-title">
                            <h5>lorem</h5>
                            <h2>Lorem  Ipsum</h2>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="portfolio-details-text one">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="portfolio-details-text two">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="xoven-video-gallery-2 portfolio-details-video-gallery" style="border-radius:20px; background-image: url({{ asset('assets/images/reservation/reservation.jpeg') }});">
                        <div class="shape"><img src="assets/images/shape/thm-shape-6.png" alt=""></div>
                        <div class="inner-box">
                            <h2><span>Hy!</span> Welcome to our<br> Corporate Business Area.</h2>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</section>
<!--End Portfolio Details Area-->

<section class="portfolio-details-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="contact-style1_inner-box">

                    <div class="contact-style1_form">
                        <div class="top-title">
                            <h3>Leave A Comments</h3>
                            <p>Morbi et sagittis dui, sed fermentum ante. Pellentesque molestie sit amet dolor<br> vel euismod.</p>
                        </div>
                        <div class="contact-form">
                            <form id="contact-form" name="contact_form" class="default-form2" action="assets/inc/sendmail.php" method="post">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="input-box"> 
                                            <label>Full Name</label>
                                            <input required type="text" name="form_name" value="" placeholder="Full Name :" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="input-box form-group"> 
                                            <label>Tanggal</label>
                                            <input class="form-control form-control-lg" required type="date" name="date" value="" placeholder="Date :">
                                        </div>    
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="input-box">
                                            <label>Jumlah Pax</label>
                                            <input required type="text" name="jumlah_pax" value="" placeholder="Jumlah Pax :">
                                        </div>   
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="input-box">
                                            <label>Area</label>
                                            <select class="form-control form-control-lg" name="area" id="">
                                                <option selected value="Indoor">Indoor</option>
                                                <option value="Outdoor">Outdoor</option>
                                            </select>
                                        </div>   
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="input-box">
                                            <label>Menu Pesanan</label>    
                                            <textarea required name="menu" placeholder="Enter your message..." required=""></textarea>
                                        </div>
                                        <div class="button-box">
                                            <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                            <button type="submit" class="btn-one">Submit</button>
                                        </div>   
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                    <div class="contact-info-sidebar">
                        
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("contact-form").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent the form from submitting if validation fails
            // Cek apakah semua input sudah diisi
            var formIsValid = true;
            document.querySelectorAll('input, select, textarea').forEach(function(input) {
                if (!input.checkValidity()) {
                    formIsValid = false;
                    input.reportValidity();
                }
            });
    
            // Jika semua input sudah diisi, proses formulir
            if (formIsValid) {
                var fullName = document.querySelector('input[name="form_name"]').value;
                var tanggal = document.querySelector('input[name="date"]').value;
                var jumlahPax = document.querySelector('input[name="jumlah_pax"]').value;
                var area = document.querySelector('select[name="area"]').value;
                var menuPesanan = document.querySelector('textarea[name="menu"]').value;
                
                // Proses data ini untuk digunakan dalam pengiriman pesan WhatsApp atau langkah selanjutnya
                var whatsappLink = "https://api.whatsapp.com/send?phone=6285711000138&text=";
                var message = "Nama : " + fullName + "%0A" +
                    "Tanggal : " + tanggal + "%0A" +
                    "Jumlah Pax : " + jumlahPax + "%0A" +
                    "Area indoor/outdoor : " + area + "%0A%0A" +
                    "Menu pesanan : " + menuPesanan.replace(/\n/g, "%0A") + "%0A%0A" +
                    "No telpon : 087886882112%0A" +
                    "Sudah Dp : %0A" +
                    "rek a/n : %0A%0A" +
                    "Transfer rek bca%0ADwi safitri%0A801 538 0663%0A%0A" +
                    "Note : jika sudah dp dan ada pembatalan uang tidak dapat kembali dan jika belum dp maka belum bisa di data untuk reservasi ( minimal dp 200k )%0A%0A" +
                    "Terimakasih , selamat berpuasa ✨";
                
                // Mengarahkan pengguna ke link WhatsApp dengan pesan yang telah disiapkan
                window.location.href = whatsappLink + message;
            }
        });
    });
</script>