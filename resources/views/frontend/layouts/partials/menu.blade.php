<header>
    <!-- Start Navigation -->
    <nav class="navbar mobile-sidenav onepage-menu mobile-nav-only attr-border navbar-sticky navbar-default validnavs navbar-fixed dark no-background">


        <div class="container d-flex justify-content-between align-items-center">

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{url('public/asset/upload/settings/'.$setting_data->mobile_logo)}}" class="logo" alt="Logo">
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">

                <img src="{{url('public/asset/upload/settings/'.$setting_data->mobile_logo)}}" alt="Logo">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-times"></i>
                </button>

                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    <li>
                        <a class="smooth-menu" href="{{url('/')}}">Home</a>
                    </li>
                    <li>
                        <a class="smooth-menu" href="{{url('/')}}#services">Services</a>
                    </li>
                    <li>
                        <a class="smooth-menu" href="{{url('/')}}#about">About</a>
                    </li>
                    <li>
                        <a class="smooth-menu" href="{{url('/blogs')}}">blog</a>
                    </li>
                    <li>
                        <a class="smooth-menu" href="{{url('/')}}#contact">contact</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->

            <!-- Main Nav -->
        </div>
        <!-- Overlay screen for menu -->
        <div class="overlay-screen"></div>
        <!-- End Overlay screen for menu -->
    </nav>
    <!-- End Navigation -->
</header>
<!-- End Header -->


