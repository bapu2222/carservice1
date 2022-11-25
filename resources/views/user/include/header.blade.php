<!DOCTYPE html>
<html lang="en">
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

    <title>Header - Car Service</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href=" {{ url('css/bootstrap.css')}} "/>

    <!-- fonts style -->
    <link href="{{ url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap') }}"
          rel="stylesheet">

    <!-- font awesome style -->
    <link href="{{ url('css/font-awesome.min.css')}}" rel="stylesheet"/>

    <link rel="stylesheet" type="text/css" href="{{ url('css/tailwind.output.css') }}"/>
    <!-- Custom styles for this template -->
    <link href="{{ url('css/style.css')}}" rel="stylesheet"/>
    <!-- responsive style -->
    <link href="{{ url('css/responsive.css')}}" rel="stylesheet"/>

</head>
<body>

<nav class="bg-white p-2 mt-0 fixed w-full z-10 top-0">
    <div class="container mx-auto flex flex-wrap items-center">
        <div class="flex w-full md:w-1/2 justify-center md:justify-start text-black font-extrabold">
            <a class="text-black no-underline hover:text-black hover:no-underline" href="#">
                <span class="text-2xl pr-20 text-bold"><i class="em em-grinning"></i> Marammat</span>
            </a>
        </div>
        <div class="flex w-full pt-2 content-center justify-between md:w-1/2 md:justify-end">
            <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
                {{-- <li class="mr-3">
                <a class="inline-block py-2 px-4 text-white no-underline" href="#">Home</a>
                </li> --}}
                <li class="mr-3">
                    <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                       href="/">Home</a>
                </li>
                <li class="mr-3">
                    <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                       href="/about">About</a>
                </li>
                <li class="mr-3">
                    <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                       href="/uservice">Services</a>
                </li>
                <li class="mr-3">
                    <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                       href="/why">Why</a>
                </li>
                <li class="mr-3">
                    <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                       href="/contact">Contact</a>
                </li>
                {{-- <li class="mr-3">
                  <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="/contact">SignIn</a>
                </li> --}}
                <li class="ml-4">
                    <div class="md:flex items-center justify-end md:flex-1 lg:w-0 ">
                        <a href="/login"
                           class="inline-block text-sm px-4 py-3 leading-none font-bold uppercase border rounded text-black border-orange hover:border-transparent hover:text-teal-500 hover:bg-orange-600 lg:mt-0">SignIn</a>
                    </div>
                </li>
                <li class="ml-3">
                    <div class="md:flex items-center justify-end md:flex-1 lg:w-0 ">
                        <a href="/register"
                           class="inline-block text-sm px-4 py-3 leading-none font-bold uppercase border rounded text-black border-black hover:border-transparent hover:text-teal-500 hover:bg-orange-600 lg:mt-0">SignUp</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Start header section -->
{{-- <header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
          <span>Marammat</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html"> About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="service.html">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="why.html">Why Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sign Up</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header> --}}

<!-- end header section -->
</body>
</html>