@extends('layouts.frontLayout.frontend_design')
@section('content')

<div class="smart_container">
        <div class="banner">
                <div class="slide">
                    <ul>
                        <li class="" style="background-image:url(images/frontend_images/images/1.jpg)">
                            <span class="overlay"></span>
                            <div class="banner_inn">
                                    <div class="container">
                                    <div class="row">
                                      <div class="col-xl-6">
                                        <div class="banner_text">
                                            <h6>WE GIVE YOU THE BEST! </h6>
                                            <h1>FAST <span>REPAIR</span> YOUR SMART PHONES </h1>
                                            <p>Need professional help? Our support staff will answer your  questions. Visit us Now or Make an Appointment! </p>
                                            <p><a class="repair_btn" href="#">Repair My Device</a></p>
                                        </div>
                                      </div>
                                      
                                    </div>
                                </div>
                        </div>
                        </li>
                        <li class="" style="background-image:url(images/frontend_images/images/2.jpg)">
                            <span class="overlay"></span>
                            <div class="banner_inn">
                                    <div class="container">
                                    <div class="row">
                                      <div class="col-xl-6">
                                        <div class="banner_text">
                                            <h6>WE GIVE YOU THE BEST! </h6>
                                            <h1>FAST REPAIR YOUR SMART PHONES </h1>
                                            <p>Need professional help? Our support staff will answer your  questions. Visit us Now or Make an Appointment! </p>
                                            <p><a class="repair_btn" href="#">Repair My Device</a></p>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                        </div>
                        </li>
                    </ul>
                </div>
        </div>
        <div class="freedelivery_strip">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-md-3">
                        <div class="icon_box">
                            <span><img src="{{URL::asset('images/frontend_images/images/free-delivery.svg') }}"></span>
                            <h5>FREE PICKUP AND  DELIVERY</h5>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="icon_box">
                            <span><img src="{{URL::asset('images/frontend_images/images/best-price.svg') }}"></span>
                            <h5>BEST PRICE</h5>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="icon_box">
                            <span><img src="{{URL::asset('images/frontend_images/images/clock.svg') }}"></span>
                            <h5>QUICK SERVICES</h5>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="icon_box">
                            <span><img src="{{URL::asset('images/frontend_images/images/lace.svg') }}"></span>
                            <h5>WARRANTY ON ALL REPAIRS</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    


    <div class="what_need">
        <div class="container">
            <h1>What help do you need ?</h1>
            <div class="row">
                <div class="col-6 col-md-3">
                    <div class="sericon_box">
                        <span><img src="{{URL::asset('images/frontend_images/images/mac_repair.svg') }}"></span>
                        <h5>MAC BOOK REPAIR / AIR / IMAC</h5>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="sericon_box">
                        <span><img src="{{URL::asset('images/frontend_images/images/laptop_repair.svg') }}"></span>
                        <h5>LAPTOP REPAIR SERVICES</h5>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="sericon_box">
                        <span><img src="{{URL::asset('images/frontend_images/images/computer_repair.svg') }}"></span>
                        <h5>COMPUTER REPAIR SERVICES</h5>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="sericon_box">
                        <span><img src="{{URL::asset('images/frontend_images/images/motherboard.svg') }}"></span>
                        <h5>MOTHERBOARD / LOGIC BOARD</h5>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="sericon_box">
                        <span><img src="{{URL::asset('images/frontend_images/images/window_help.svg') }}"></span>
                        <h5>WINDOWS HELP</h5>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="sericon_box">
                        <span><img src="{{URL::asset('images/frontend_images/images/data_recovery.svg') }}"></span>
                        <h5>DATA RECOVERY SOLUTION</h5>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="sericon_box">
                        <span><img src="{{URL::asset('images/frontend_images/images/tablet_repair.svg') }}"></span>
                        <h5>TABLET REPAIR SERVICES</h5>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="sericon_box">
                        <span><img src="{{URL::asset('images/frontend_images/images/onsite.svg') }}"></span>
                        <h5>ONSITE SUPPORT</h5>
                    </div>
                </div>
                
            </div>
        </div>
    </div>


<div class="how_it">
    <div class="container">
        <h1 class="text-center">How It Works</h1>
        <p class="text-center">Simply log a request, state your IT inquiry and one of <br>
                our certified Geeks will be in touch!</p>
            <div class="howit_slide">
                <div class="owl-carousel loop">
                    <div class="item">
                        <div class="stepbox">
                            <span><img src="{{URL::asset('images/frontend_images/images/step1.svg') }}"></span>
                            <h5>Get In Touch</h5>
                            <p>Whatever your IT crisis
                                    is, call Geeks!</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="stepbox">
                            <span><img src="{{URL::asset('images/frontend_images/images/step2.svg') }}"></span>
                            <h5>Get In Touch</h5>
                            <p>Whatever your IT crisis
                                    is, call Geeks!</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="stepbox">
                            <span><img src="{{URL::asset('images/frontend_images/images/step3.svg') }}"></span>
                            <h5>Get In Touch</h5>
                            <p>Whatever your IT crisis
                                    is, call Geeks!</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="stepbox">
                            <span><img src="{{URL::asset('images/frontend_images/images/step1.svg') }}"></span>
                            <h5>Get In Touch</h5>
                            <p>Whatever your IT crisis
                                    is, call Geeks!</p>
                        </div>
                    </div>
                   
                   
                    
                </div>

                <div class="mackbook">
                    <img src="{{URL::asset('images/frontend_images/images/macbook.svg') }}">
                </div>
            </div>
    </div>
</div>


<div class="experienced_work">
    <div class="container">
        <div class="row">
        <div class="col-md-6">
            <img src="{{URL::asset('images/frontend_images/images/protection.svg') }}">
            <h2>We Are Experienced Work Lovers Focused On</h2>
            <p>We have been in the repair and service business since 1995. We have experienced 
                service department ready 
                to handle all of your repair tasks. Our team will get your device with guarantee.</p>
        </div>
        <div class="col-md-6">
                <h5>Our spectrum of services covers entire Dubai</h5>
                <p>By just making a single call you can have access to quality solutions and services within minimum time. With the power of remote access, onsite assistance, free pick up, and delivery we offer you excellent services at your doorstep. Our vast reach and experience in dealing with technical issues have enabled us in serving customers from even far edges of Dubai. Al Qusais Industrial First, Abu Hail, Al Nahda Second, Emirates Hill First, Za’abeel First, Mirdif, Muhaisanah Fourth, Al Souq Al Kabeer, Al Twar First, Umm Suqeim Third, Wadi Alamardi, Muhaisanah Third, Nad-al-Hamar and many more other places come under our network of service.

                        We offer you freedom of choosing the time and location as per your requirement. Our experts will make sure that you get quality services always on time.</p>
            </div>
    </div>
    </div>
</div>


<div class="testimonials">
    <div class="container">
            <h2 class="text-center">Testimonials</h2>
        <div class="row">
            <div class="col-xl-8 m-auto">
                <div class="testimonials_box">
                    <div class="testimonials_carousel owl-carousel">
                        <div class="item">
                            <div class="testimonials_boxinn">
                                <img class="quote" src="{{URL::asset('images/frontend_images/images/quote-left.svg') }}">
                                <p>I am thankful to the team of UAE Technician who recovered my gone data that was important 
                                        for my organization. If expert of UAE Technician hadn't recovered my data, I would have 
                                        lost my Job.Thanks a ton.</p>
                                <h5>Mrs. Nazia Aman / CFO, InfoTech</h5>
                                <div class="user_img">
                                    <img src="{{URL::asset('images/frontend_images/images/user.jpg') }}">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials_boxinn">
                                <img class="quote" src="{{URL::asset('images/frontend_images/images/quote-left.svg') }}">
                                <p>I am thankful to the team of UAE Technician who recovered my gone data that was important 
                                        for my organization. If expert of UAE Technician hadn't recovered my data, I would have 
                                        lost my Job.Thanks a ton.</p>
                                <h5>Mrs. Nazia Aman / CFO, InfoTech</h5>
                                <div class="user_img">
                                    <img src="{{URL::asset('images/frontend_images/images/user.jpg') }}">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials_boxinn">
                                <img class="quote" src="{{URL::asset('images/frontend_images/images/quote-left.svg') }}">
                                <p>I am thankful to the team of UAE Technician who recovered my gone data that was important 
                                        for my organization. If expert of UAE Technician hadn't recovered my data, I would have 
                                        lost my Job.Thanks a ton.</p>
                                <h5>Mrs. Nazia Aman / CFO, InfoTech</h5>
                                <div class="user_img">
                                    <img src="{{URL::asset('images/frontend_images/images/user.jpg') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


