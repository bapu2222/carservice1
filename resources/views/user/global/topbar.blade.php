<nav class=" navbar navbar-expand-lg navbar-light  fixed-top  " style="box-shadow: 0 1px 10px -3px #222; background: #fcfcfc">
    <div class="container">
        <a class="navbar-brand" href="http://carservice.test/"><i class="fas fa-car-garage"></i> Marammat</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="http://carservice.test/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/uservice">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/why">Why</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
                @if(isset(auth()->user()->is_admin) && auth()->user()->is_admin == 1)
                <li class="nav-item">
                    <a class="nav-link" href="{{route('dashboard.index')}}">Admin Dashboard</a>
                </li>
                @endif
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <ul class="navbar-nav mr-auto">

                @if(auth()->user())
                    <li class="m-1 nav-item">
                        <a class="nav-link inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                           href="">{{auth()->user()->name}}</a>
                    </li>
                    <li class="m-1 nav-item">
                        <a class="nav-link inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                           href="{{route('auth.logout')}}">Log out</a>
                    </li>
                @else
                    <li class="m-1 nav-item">
                        <div class="md:flex items-center justify-end md:flex-1 lg:w-0 ">
                            <a href="/login"
                               class="nav-link inline-block text-sm px-4 py-3 leading-none font-bold uppercase border rounded text-black border-orange hover:border-transparent hover:text-teal-500 hover:bg-orange-600 lg:mt-0">SignIn</a>
                        </div>
                    </li>
                    <li class="m-1 nav-item">
                        <div class="md:flex items-center justify-end md:flex-1 lg:w-0 ">
                            <a href="/register"
                               class="nav-link inline-block text-sm px-4 py-3 leading-none font-bold uppercase border rounded text-black border-black hover:border-transparent hover:text-teal-500 hover:bg-orange-600 lg:mt-0">SignUp</a>
                        </div>
                    </li>
                @endif
                </ul>
            </form>
        </div>
    </div>
</nav>