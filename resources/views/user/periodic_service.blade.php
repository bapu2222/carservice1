<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- Site Metas -->
    <link rel="icon" href="{{asset('favicon_io/micon.jpg')}}" type="image/x-icon">
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>

    <title>Marammat</title>

    <link href="{{ url('css/sliders.css')}}" rel="stylesheet"/>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css')}}"/>

    <!-- font awesome style -->
    <link href="{{ url('css/font-awesome.min.css')}}" rel="stylesheet"/>

    <link rel="stylesheet" type="text/css" href="{{ url('css/tailwind.output.css') }}"/>
    <!-- Custom styles for this template -->
    <link href="{{ url('css/style.css')}}" rel="stylesheet"/>
    <!-- responsive style -->
    <link href="{{ url('css/responsive.css')}}" rel="stylesheet"/>
    <style>
        .transition {
            transition: all .2s ease-out;
        }

        .h-60 {
            height: 14rem;
        }

        .w-128 {
            width: 32rem;
        }
    </style>

</head>

<body>
@include('user.service')
<section>
    @if($servicies != null)
        @foreach($servicies as $service)

            <div id="container2" style="height: 100% !important;">
                <div id="slider-container2">
                    <div>
                        @if($service->services_image == null )
                            <img class="cardimg" width=200 height=200 style=" vertical-align: 50%; padding: 63px 16px;"
                                 src="{{'/img/categoriesPhoto/slider1.png'}}"/>

                        @else
                            <img class="cardimg" width=200 height=200 style=" vertical-align: 50%; padding: 63px 16px;"
                                 src="{{'/img/servicesPhoto/'.$service->services_image}}" alt="Services images">
                        @endif
                    </div>

                    <div class="txt">
                        <h2>
                            @foreach ($service_Types as $key => $service_Type)
                                @if(isset($service->type) && $service->type == $key)
                                    {{$service_Type}}
                                @endif
                            @endforeach
                        </h2><br>

                        <p>Service Name <b>{{$service->name}}</b></p><br>
                        <p>Service Price <b>{{$service->price}}</b></p><br>

                        <p>Every 5000Kms or 1 Month Warrenty</p><br>

                        <p>Free Pick-up & Drop</p><br>
                        <p>1000 Kms or 1 Month Warrenty</p><br>
                        <p>4 hrs Taken</p><br>
                        <h3>What's included</h3><br>
                        <p>Engine Oil Replacement, Oil Filter Replacement</p><br>
                        <p>Air Filter Replacement, Coolant Top Up</p><br>
                    </div>
                </div>
            </div>

        @endforeach
    @endif
</section>

<!-- jQery -->
<script src="{{ url('js/jquery-3.4.1.min.js') }}"></script>
<!-- bootstrap js -->
<script src="{{ url('js/bootstrap.js') }}"></script>
<!-- custom js -->
<script src="{{ url('js/custom.js') }}"></script>

</body>
</html>