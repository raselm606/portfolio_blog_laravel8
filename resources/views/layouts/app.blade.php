<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- csrf token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Bazar</title>
    @include('frontend.layouts.partials.style')

    <style>
        ul#ui-id-1 {
            z-index: 999999 !important;
        }
    </style>
</head>
<body>
<div class="toparea_ fixed-top" >

    <nav class="navbar navbar-expand-lg bg-dark bg-body-tertiary ">
        <div class="container-fluid">
            <a class="navbar-brand logoarae" href="{{url('/')}}"><span class="text-warning">Bazar24.com</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse mobile_none navbar-collapse" id="navbarSupportedContent">
                <form class="d-flex ml-auto mr-auto col-lg-5 mb-2 mt-2" >
                    <input class="form-control" id="search_product" style="border-radius: 30px;" type="search" placeholder="Search your product" aria-label="Search">

                </form>
                <div class=" mb-2">
                    <span class="text-white"><i class="fa fa-phone-alt"></i> Call: +880168178 </span>
                    <a href="#" class="btn btn-warning"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span id="cart-count-placeholder"></span></a>
                </div>

            </div>
        </div>

    </nav>

    <div class="navbarr bg-warning ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="navarea ">
                        <ul class="nav justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                            </li>

                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





@yield('content')

<footer class="bg-dark text-white pt-3 pb-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center ">
                <p>&copy; {{date('Y')}} <a href="{{url('/')}}" class="text-warning">Bazar24.com</a> All right reserve <br>
                    developed by <a target="_blank" href="https://icodev.space" class="text-warning">icodev.space</a></p>
            </div>
        </div>
    </div>
</footer>

<!-- js -->
@include('frontend.layouts.partials.script')

@yield('scripts')
</body>
</html>


