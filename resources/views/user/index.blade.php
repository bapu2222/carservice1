@extends('user.global.master')
@section('content')
<!-- slider section -->
<section class="slider_section ">
    <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-6 col-lg-5">
                            <div class="detail-box">
                                <h1 class="text-2xl">
                                    Car Repair <br>
                                    And Maintenance
                                </h1>
                                <p>
                                    Anything embarrassing hidden in the middle of text. All the Lorem Ipsuanything
                                    embarrassing hidden in the middle of text. All the Lorem Ipsumm </p>
                                <div class="btn-box">
                                    <a href="{{route('book.index')}}" class="btn-1">
                                        Book More
                                    </a>
                                    <a href="" class="btn-2">
                                        Contact Us
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-7">
                            <div class="img-box">
                                <img src="{{asset('images/contact-img.png')}}" alt="" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-6 col-lg-5">
                            <div class="detail-box">
                                <h1>
                                    Car Repair <br>
                                    And Maintenance
                                </h1>
                                <p>
                                    Anything embarrassing hidden in the middle of text. All the Lorem Ipsuanything
                                    embarrassing hidden in the middle of text. All the Lorem Ipsumm </p>
                                <div class="btn-box">
                                    <a href="/book" class="btn-1">
                                        Book More
                                    </a>
                                    <a href="" class="btn-2">
                                        Contact Us
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-7">
                            <div class="img-box">
                                <img src="{{asset('images/slider-img.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-6 col-lg-5">
                            <div class="detail-box">
                                <h1>
                                    Car Repair <br>
                                    And Maintenance
                                </h1>
                                <p>
                                    Anything embarrassing hidden in the middle of text. All the Lorem Ipsuanything
                                    embarrassing hidden in the middle of text. All the Lorem Ipsumm </p>
                                <div class="btn-box">
                                    @if(isset(auth()->user()->id))
                                        <a href="{{route('book.index')}}" class="btn-1">
                                            Book More
                                        </a>
                                    @else
                                        <a href="/login" class="btn-1">
                                            Login
                                        </a>
                                    @endif
                                    <a href="" class="btn-2">
                                        Contact Us
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-7">
                            <div class="img-box">
                                <img src="images/contact-img.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ol class="carousel-indicators">
            <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
            <li data-target="#customCarousel1" data-slide-to="1"></li>
            <li data-target="#customCarousel1" data-slide-to="2"></li>
        </ol>
    </div>
</section>
<!-- end slider section -->

<!-- service section -->

<section class="service_section ">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Our Services
            </h2>
        </div>
    </div>
    <div class="container ">
        <div class="row">
            <div class="col-md-5 col-lg-3">
                <div class="box ">
                    <div class="img-box">
                        <img src="images/periodic-services.svg" alt="">
                    </div>
                    <div class="detail-box">
                        <h4>
                           <a href="#"> Periodic Service </a>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-lg-3">
                <div class="box ">
                    <div class="img-box">
                        <img src="{{asset('images/denting-painting.svg')}}" alt="">
                    </div>
                    <div class="detail-box">
                        <h4>
                            Denting & Painting
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-lg-3">
                <div class="box ">
                    <div class="img-box">
                        <img src="{{asset('images/battery.svg')}}" alt="">
                    </div>
                    <div class="detail-box">
                        <h4>
                            Batteries
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-lg-3">
                <div class="box ">
                    <div class="img-box">
                        <img src="{{asset('images/4.png')}}" alt="">
                    </div>
                    <div class="detail-box">
                        <h4>
                            Car Spa & Cleaning
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-lg-3">
                <div class="box ">
                    <div class="img-box">
                        <img src="{{asset('images/ac_service.png')}}" alt="">
                    </div>
                    <div class="detail-box">
                        <h4>
                            AC Service & Repair
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-lg-3">
                <div class="box ">
                    <div class="img-box">
                        <img src="{{asset('images/tyressss.svg')}}" alt="">
                    </div>
                    <div class="detail-box">
                        <h4>
                            Tyres & Wheel Care
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-lg-3">
                <div class="box ">
                    <div class="img-box">
                        <img src="{{asset('images/10.png')}}" alt="">
                    </div>
                    <div class="detail-box">
                        <h4>
                            Windshields & Lights
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-lg-3">
                <div class="box ">
                    <div class="img-box">
                        <img src="{{asset('images/clutcj.png')}}" alt="">
                    </div>
                    <div class="detail-box">
                        <h4>
                            Clutch & Fitments
                        </h4>
                    </div>
                </div>
            </div>
        </div>
</section>

<!-- end service section -->

<!-- about section -->

<section class="about_section layout_padding">
    <div class="container  ">
        <div class="row">
            <div class="col-md-6 ">
                <div class="img-box">
                    <img src="{{asset("images/contact-img.png")}}" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="detail-box">
                    <div class="heading_container">
                        <h2>
                            About Us
                        </h2>
                    </div>
                    <p>
                        Words which don't look even slightly believable. If you are going to use a passage of Lorem
                        Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All
                        the Lorem Ipsum generators on the Internet tend to repeat predefined chunks </p>
                    <a href="">
                        Read More
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end about section -->

<!-- why section -->

<section class="why_section ">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Why Choose Us
            </h2>
        </div>
    </div>
    <div class="container ">
        <div class="row">
            <div class="col-md-6 col-lg-4 mx-auto">
                <div class="box ">
                    <div class="img-box">
                        <img src="{{asset('images/w1.png')}}" alt="">
                    </div>
                    <div class="detail-box">
                        <h4>
                            Best Workers
                        </h4>
                        <p>
                            Generators on the Internet tend to repeat predefined chunks as necessary
                        </p>
                        <a href="">
                            Read More
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mx-auto ">
                <div class="box ">
                    <div class="img-box">
                        <img src="{{asset('images/w2.png')}}" alt="">
                    </div>
                    <div class="detail-box">
                        <h4>
                            Best Materials
                        </h4>
                        <p>
                            Generators on the Internet tend to repeat predefined chunks as necessary
                        </p>
                        <a href="">
                            Read More
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mx-auto">
                <div class="box ">
                    <div class="img-box">
                        <img src="{{asset('images/w3.png')}}" alt="">
                    </div>
                    <div class="detail-box">
                        <h4>
                            Best Service
                        </h4>
                        <p>
                            Generators on the Internet tend to repeat predefined chunks as necessary
                        </p>
                        <a href="">
                            Read More
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end why section -->

<!-- client section -->
<section class="client_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Testimonial
            </h2>
            <p>
                Even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to
            </p>
        </div>
    </div>
    <div class="container px-0">
        <div id="customCarousel2" class="carousel  slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 mx-auto">
                                <div class="box">
                                    <div class="img-box">
                                        <img src="{{asset('images/client.jpg')}}" alt="">
                                    </div>
                                    <div class="detail-box">
                                        <div class="client_info">
                                            <div class="client_name">
                                                <h5>
                                                    Morojink
                                                </h5>
                                                <h6>
                                                    Customer
                                                </h6>
                                            </div>
                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut
                                            labore
                                            et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                            ullamco laboris nisi ut
                                            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                            voluptate velit esse
                                            cillum
                                            dolore eu fugia
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 mx-auto">
                                <div class="box">
                                    <div class="img-box">
                                        <img src="{{asset('images/client.jpg')}}" alt="">
                                    </div>
                                    <div class="detail-box">
                                        <div class="client_info">
                                            <div class="client_name">
                                                <h5>
                                                    Morojink
                                                </h5>
                                                <h6>
                                                    Customer
                                                </h6>
                                            </div>
                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut
                                            labore
                                            et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                            ullamco laboris nisi ut
                                            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                            voluptate velit esse
                                            cillum
                                            dolore eu fugia
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 mx-auto">
                                <div class="box">
                                    <div class="img-box">
                                        <img src="{{asset('images/client.jpg')}}" alt="">
                                    </div>
                                    <div class="detail-box">
                                        <div class="client_info">
                                            <div class="client_name">
                                                <h5>
                                                    Morojink
                                                </h5>
                                                <h6>
                                                    Customer
                                                </h6>
                                            </div>
                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut
                                            labore
                                            et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                            ullamco laboris nisi ut
                                            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                            voluptate velit esse
                                            cillum
                                            dolore eu fugia
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel_btn-box">
                <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- end client section -->

<!-- contact section -->
<section class="contact_section layout_padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="form_container">
                    <div class="heading_container ">
                        <h2>
                            Get In Touch
                        </h2>
                    </div>
                    <form action="#">
                        <div>
                            <input type="text" placeholder="Your Name"/>
                        </div>
                        <div>
                            <input type="email" placeholder="Your Email"/>
                        </div>
                        <div>
                            <input type="text" placeholder="Your Phone"/>
                        </div>
                        <div>
                            <input type="text" class="message-box" placeholder="Message"/>
                        </div>
                        <div class="btn_box ">
                            <button>
                                SEND
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="img-box">
                    <img src="{{asset('images/contact-img.png')}}" alt="">

                </div>
            </div>
        </div>
    </div>
</section>
<!-- end contact section -->
@stop