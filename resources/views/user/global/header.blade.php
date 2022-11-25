
<head>
    <!-- Basic -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- Site Metas -->
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
@yield('customCss')

    <script
            src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
            defer></script>
    <script src="{{ asset('js/init-alpine.js') }}"></script>
</head>




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
