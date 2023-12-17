<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ========== Page Title ========== -->
    <title>Home | MAS-Md Abdus Sattar | Pharmacist | Toxicologist | Web designer</title>

    <!-- This site is optimized with the Yoast SEO Premium plugin v12.7.1 - https://yoast.com/wordpress/plugins/seo/ -->
    <meta name="description" content="My name is Md Abdus Sattar. I am from Bangaldesh. Currently, I live in Germany. I am interested in Pharmacy, Toxicology, Data Analysis, and Web Development"/>
    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
    <link rel="canonical" href="https://masattar.com/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Home | MAS-Md Abdus Sattar | Pharmacist | Toxicologist | Web designer" />
    <meta property="og:description" content="My name is Md Abdus Sattar. I am from Bangaldesh. Currently, I live in Germany. I am interested in Pharmacy, Toxicology, Data Analysis, and Web Development" />
    <meta property="og:url" content="https://masattar.com/" />
    <meta property="og:site_name" content="MAS-Md Abdus Sattar | Pharmacist | Toxicologist | Web designer" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="My name is Md Abdus Sattar. I am from Bangaldesh. Currently, I live in Germany. I am interested in Pharmacy, Toxicology, Data Analysis, and Web Development" />
    <meta name="twitter:title" content="Home | MAS-Md Abdus Sattar | Pharmacist | Toxicologist | Web designer" />
    <meta name="twitter:image" content="{{asset('assets/img/logo.png')}}" />
    <!--  Yoast SEO Premium plugin. -->

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{asset('assets/img/logo.png')}}" type="image/x-icon">
    @include('frontend.layouts.partials.style')

</head>

<body class="onepage-version bg-fixed" style="background-image: url({{asset('assets/img/shape/banner.jpg')}});">

<!-- Start Preloader
============================================= -->
{{--    <div id="preloader">--}}
{{--        <div id="ventix-preloader" class="ventix-preloader">--}}
{{--            <div class="animation-preloader">--}}
{{--                <div class="spinner"></div>--}}
{{--            </div>--}}
{{--            <div class="loader">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-3 loader-section section-left">--}}
{{--                        <div class="bg"></div>--}}
{{--                    </div>--}}
{{--                    <div class="col-3 loader-section section-left">--}}
{{--                        <div class="bg"></div>--}}
{{--                    </div>--}}
{{--                    <div class="col-3 loader-section section-right">--}}
{{--                        <div class="bg"></div>--}}
{{--                    </div>--}}
{{--                    <div class="col-3 loader-section section-right">--}}
{{--                        <div class="bg"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
<!-- End Preloader -->


<!-- Header
============================================= -->
@include('frontend.layouts.partials.menu')

@yield('content')


@include('frontend.layouts.partials.script')

</body>

</html>
