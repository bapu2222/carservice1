<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- Site Metas -->
    <link rel="icon" href="{{ url('images/fevicon.png')}}" type="image/gif"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Marammat</title>

    <link href="{{ url('css/sliders.css')}}" rel="stylesheet"/>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>

    <!-- font awesome style -->
    <link href="{{ url('css/font-awesome.min.css')}}" rel="stylesheet"/>

    <link rel="stylesheet" type="text/css" href="{{ url('css/tailwind.output.css') }}"/>
    <!-- Custom styles for this template -->
    <link href="{{ url('css/style.css')}}" rel="stylesheet"/>
    <!-- responsive style -->
    <link href="{{ url('css/responsive.css')}}" rel="stylesheet"/>

    <style>
        #container {
            height: 20vh;
            width: 50vw;
            margin-top: 100px;
            padding: 0;
            display: grid;

        }

        #slider-container {
            height: 150px;
            width: 100vw;
            background: #e5e9ea;
            position: relative;
            overflow: hidden;
            padding: 20px;
        }

        #slider-container .btn {
            position: absolute;
            top: calc(50% - 30px);
            height: 30px;
            width: 30px;
        }

        #slider-container #slider {
            display: flex;
            width: 1000%;
            height: 50%;
            transition: all .5s;
        }

        #slider-container #slider .slide a {
            height: 80%;
            margin: auto 10px;
            display: grid;
            place-items: center;
        }

        #slider-container #slider .slide:hover {
            margin-top: 10px;
            height: 140%;
            background-color: rgb(220, 204, 204);
            place-items: center;
        }

        #slider-container #slider .slide .headerimg {
            color: white;
            width: 80px;
            height: 80px;
        }

        #slider-container #slider .slide p {
            color: black;
            font-size: 18px;
        }

        #text {
            padding-left: 40px;
            font-size: 22px;
        }


        #container2 {
            height: 30vh;
            width: 30vw;
            margin-top: 20px;
            margin-left: 40px;
            background: #e5e9ea;
            border-radius: 10px;
            display: inline-block;
        }

        #slider-container2 {
            width: auto;
            display: flex;
        }

        #slider-container2 .cimgs .cardimg {
            width: 200px;
            height: 200px;
            float: left;
            border-radius: 10px;
        }

        #slider-container2 .txt {
            display: inline-block;
            margin: 10px 20px;
        }

        #slider-container2 h2 {
            display: inline-block;
            margin: 5px 8px;
            font-size: 20px;
            font-weight: bold;
        }

        #slider-container2 h3 {
            display: inline-block;
            margin: 5px 9px;
            font-size: 14px;
            font-weight: bold;
        }

        #slider-container2 p {
            display: inline-block;
            margin: 3px 15px;
            font-size: 12px;
        }


        #container1 {
            height: 25vh;
            width: 50vw;
            margin-top: 100px;
            padding: 0;
            display: grid;
        }

        #slider-container1 {
            height: 150px;
            width: 100vw;
            position: relative;
            overflow: hidden;
            padding: 20px;
        }

        @media only screen and (min-width: 1100px) {

            #slider-container #slider .slide {
                width: calc(2.5% - 240px);
            }
        }

        /*
        @media only screen and (max-width: 1100px) {

          #slider-container #slider .slide {
            width: calc(3.3333333% - 20px);
          }

        }

        @media only screen and (max-width: 900px) {

          #slider-container #slider .slide {
            width: calc(5% - 20px);
          }

        }

        @media only screen and (max-width: 550px) {

          #slider-container #slider .slide {
            width: calc(10% - 20px);
          }
        }  */
    </style>
</head>

<body>
<!-- header section strats -->
@include('user.global.topbar')
<!-- end header section -->

<div id="container" style=" display: inline-block;">
    <div id="slider-container">
        <div id="slider">
            <div class="slide">
                <a href="{{route('all-services-periodic-index','periodic_services')}}">
                    <img src="/images/periodic-services.svg"/>
                    <p>Periodic Services</p>
                </a>
            </div>
            <div class="slide">
                <a href="{{route('all-services-periodic-index','denting_painting')}}">
                    <img src="/images/denting-painting.svg"/>
                    <p>Denting & Painting</p>
                </a>
            </div>
            <div class="slide">
                <a href="{{route('all-services-periodic-index','batteries')}}">
                    <img src="/images/battery.svg"/>
                    <p>Batteries</p>
                </a>
            </div>
            <div class="slide">
                <a href="{{route('all-services-periodic-index','car_spa_cleaning')}}">
                    <img src="{{asset('images/4.png')}}"/>
                    <p>Car Spa & Cleaning</p>
                </a>
            </div>
            <div class="slide">
                <a href="{{route('all-services-periodic-index','ac_service_repair')}}">
                    <img src="/images/ac_service.png"/>
                    <p>AC Service & Repair</p>
                </a>
            </div>
            <div class="slide">

                <a href="{{route('all-services-periodic-index','tyres_wheel_care')}}">
                    <img src="/images/tyre.png"/>
                    <p>Tyres & Wheel Care</p>
                </a>
            </div>
            <div class="slide">
                <a href="{{route('all-services-periodic-index','windshields_lights')}}">
                    <img src="/images/10.png"/>
                    <p>Windshields & Lights</p>
                </a>
            </div>
            <div class="slide">
                <a href="{{route('all-services-periodic-index','clutch_fitments')}}">
                    <img src="/images/clutcj.png"/>
                    <p>Clutch & Fitments</p>
                </a>
            </div>
        </div>
    </div>

</div>

<!-- end service section -->

<!-- start footer section -->
{{-- @include('user.include.footer') --}}
<!-- end footer section -->

<!-- jQery -->

<script src="{{ url('js/jquery-3.4.1.min.js') }}"></script>
<!-- bootstrap js -->
<script src="{{ url('js/bootstrap.js') }}"></script>
<!-- custom js -->
<script src="{{ url('js/custom.js') }}"></script>


</body>

</html>

{{--    <div id="container2">--}}
{{--        <div id="slider-container2">--}}
{{--            <div class="cimgs">--}}
{{--                <img class="cardimg" src="/images/standard_service.jpg"/>--}}
{{--            </div>--}}
{{--            <div class="txt">--}}
{{--                <h2>Standard Service</h2><br>--}}
{{--                <p>Every 5000Kms or 1 Month Warrenty</p><br>--}}
{{--                <p>Free Pick-up & Drop</p><br>--}}
{{--                <p>1000 Kms or 1 Month Warrenty</p><br>--}}
{{--                <p>4 hrs Taken</p><br>--}}
{{--                <h3>What's included</h3><br>--}}
{{--                <p>Engine Oil Replacement, Oil Filter Replacement</p><br>--}}
{{--                <p>Air Filter Replacement, Coolant Top Up</p><br>--}}
{{--                <p>Fuel Filter Replacement</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div id="container2">--}}
{{--        <div id="slider-container2">--}}
{{--            <div class="cimgs">--}}
{{--                <img class="cardimg" src="/images/comprehensive_service.jpg"/>--}}
{{--            </div>--}}
{{--            <div class="txt">--}}
{{--                <h2>Comprehensive Service</h2><br>--}}
{{--                <p>Every 5000Kms or 1 Month Warrenty</p><br>--}}
{{--                <p>Free Pick-up & Drop</p><br>--}}
{{--                <p>1000 Kms or 1 Month Warrenty</p><br>--}}
{{--                <p>4 hrs Taken</p><br>--}}
{{--                <h3>What's included</h3><br>--}}
{{--                <p>Engine Oil Replacement, Oil Filter Replacement</p><br>--}}
{{--                <p>Air Filter Replacement, Coolant Top Up</p><br>--}}
{{--                <p>Fuel Filter Replacement, Cabin Filter/AC Filter Cleaning</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div id="container1">--}}
{{--        <div id="slider-container1"></div>--}}
{{--    </div>--}}
{{--    <div id="container1">--}}
{{--        <div id="slider-container1"></div>--}}
{{--    </div>--}}