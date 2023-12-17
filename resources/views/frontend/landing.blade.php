@extends('frontend.layouts.app')
@section('content')


    <div class="main-wrapper">
        <!-- Start Side Navbar
        ============================================= -->
        <div class="side-navbar-items">
            <div class="nav-wrapper">
                <div class="side-navbar">
                    <div class="side-nav-menu">
                        <a class="smooth-menu" href="{{url('/')}}"><img src="{{url('public/asset/upload/settings/'.$setting_data->site_logo)}}" alt="Logo"></a>
                    </div>
                    <div class="nav-toggle">
                        <img src="{{asset('public/assets/img/menu-white.svg')}}" alt="Menu">
                    </div>

                    <div class="author-social">
                        <input type="checkbox" id="toggle" class="share-toggle" hidden="">
                        <label for="toggle" class="share-button">
                            <i class="fas fa-plus"></i>
                        </label>
                        @if($social->facebook)
                        <a href="{{$social->facebook}}" target="_blank" class="share-icon facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        @endif

                        @if($social->Twitter)
                        <a href="{{$social->Twitter}}" class="share-icon twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        @endif

                        @if($social->instagram)
                            <a href="{{$social->instagram}}" class="share-icon instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                        @endif

                        @if($social->linkedin)
                            <a href="{{$social->linkedin}}" class="share-icon linkedin">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        @endif

                        @if($social->youtube)
                            <a href="{{$social->youtube}}" class="share-icon youtube">
                                <i class="fab fa-youtube"></i>
                            </a>
                        @endif

                        @if($social->reddit)
                            <a href="{{$social->reddit}}" class="share-icon reddit">
                                <i class="fab fa-reddit"></i>
                            </a>
                        @endif

                        @if($social->pinterest)
                            <a href="{{$social->pinterest}}" class="share-icon pinterest">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        @endif

                        @if($social->medium)
                            <a href="{{$social->medium}}" class="share-icon medium">
                                <i class="fab fa-medium"></i>
                            </a>
                        @endif

                        @if($social->researchgate)
                            <a href="{{$social->researchgate}}" class="share-icon researchgate">
                                <i class="fab fa-researchgate"></i>
                            </a>
                        @endif

                        @if($social->googlescholar)
                            <a href="{{$social->googlescholar}}" class="share-icon google">
                                <i class="fab fa-google"></i>
                            </a>
                        @endif
                    </div>

                </div>
            </div>

            <div class="container">
                <div class="nav-side">
                    <div class="nav-items simple-menu">

                        <div class="nav-toggle"><i class="fas fa-times"></i></div>


                        <div class="nav-item dropdown">
                            <a class="smooth-menu" href="{{url('/')}}">Home</a>

                        </div>
                        <div class="nav-item">
                            <a class="smooth-menu" href="#experience">Experience</a>
                            <div class="nav-item-wrapper"></div>
                        </div>
                        <div class="nav-item">
                            <a class="smooth-menu" href="#about">About</a>
                            <div class="nav-item-wrapper"></div>
                        </div>
                        <div class="nav-item">
                            <a class="smooth-menu" href="{{url('/blogs')}}">Blogs</a>
                            <div class="nav-item-wrapper"></div>
                        </div>
                        <div class="nav-item">
                            <a class="smooth-menu" href="#contact">Contact</a>
                            <div class="nav-item-wrapper"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Side Navbar -->

        <!-- Start Banner
        ============================================= -->
        <div id="home" class="banner-style-one-area default-padding">
            <div class="container">
                <div class="banner-top">
                    <div class="row align-center">
                        <div class="col-lg-7 pr-50 pr-md-15 pr-xs-15">
                            <div class="information">
                                <div class="content">
                                    <h2>Hey <img src="{{url('public/assets/img/shape/harnd.png')}}" alt="image not found"> , {!! $setting_data->hero_text !!}</h2>
                                    <p>
                                        {!! $setting_data->hero_subtext !!}
                                    </p>
                                </div>
                                <div class="profile-grid">
                                    <ul>
                                        <li>
                                            <a class="smooth-menu" href="#experience">
                                                Experiences
                                                <div class="icon-list ">
                                                    <i class="fab fa-html5"></i>
                                                    <i class="fab fa-wordpress"></i>

                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="smooth-menu" href="{{route('blog')}}">
                                                Blogs
                                                <img src="{{asset('public/assets/img/shape/laptop.png')}}" alt="Image Not Found">
                                            </a>
                                        </li>
                                        <li>
                                            <a class="smooth-menu" href="#about">
                                                About
                                                <strong>A</strong>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @if($setting_data->hero_img)
                        <div class="col-lg-5">
                            <div class="thumb">
                                <img src="{{url('public/asset/upload/settings/'.$setting_data->hero_img)}}" alt="Image Not Found">
                            </div>
                        </div>
                            @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner -->

        <!-- Start Services
        ============================================= -->
        <div id="experience" class="services-style-one-area default-padding-top mb--50">

            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="left-heading mb-50">
                            <h4 class="sub-title">Skill and Expertise</h4>
                            <h2 class="title">Work Experience</h2>
                            <div class="devider"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row align-items-center">
                    <!-- Single Item -->
                    <div class="service-style-one col-lg-6 col-md-6">
                        @foreach($experience as $exp)
                            <div class="service-style-one-item">
                                <div class="info">
                                    <span>{{$exp->date}}</span>
                                    <h4><strong>{{$exp->designation}} </strong> </h4>
                                    <h6>{{$exp->inistitute}}</h6>
                                    <p> {!! $exp->details !!}</p>

                                </div>
                            </div>
                            @endforeach



                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="col-lg-6">
                        <div class="about-item">
                            <h3><i class="fas fa-user"></i> Web Technology</h3>
                            <ul class="skill-items mt-10">
                                <li>
                                    <div class="icon">
                                        <i class="fab fa-html5"></i>
                                    </div>
                                    <div class="content">
                                        <span>95%</span>
                                        <h5>HTML/CSS3</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fab fa-react"></i>
                                    </div>
                                    <div class="content">
                                        <span>50%</span>
                                        <h5>JQuery</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fab fa-html5"></i>
                                    </div>
                                    <div class="content">
                                        <span>80%</span>
                                        <h5>UX/UI</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fab fa-wordpress" style="background: #0c4128"></i>
                                    </div>
                                    <div class="content">
                                        <span>80%</span>
                                        <h5>WordPress/Typo#</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-arrow-right" style="background: #0d95e8"></i>
                                    </div>
                                    <div class="content">
                                        <span>70%</span>
                                        <h5>Photosop/Illustrator</h5>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="about-item">
                            <h3><i class="fas fa-user"></i> Data Analysis</h3>
                            <ul class="skill-items mt-10">
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-arrow-right" style="background: #0d95e8"></i>
                                    </div>
                                    <div class="content">
                                        <span>70%</span>
                                        <h5>SASS</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-arrow-right" style="background: #0c4128"></i>
                                    </div>
                                    <div class="content">
                                        <span>90%</span>
                                        <h5>GraphPad Prism</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-arrow-right" style="background: #0d95e8"></i>
                                    </div>
                                    <div class="content">
                                        <span>90%</span>
                                        <h5>Microsoft Excel</h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->


                </div>
            </div>
        </div>
        <!-- End Services -->

        <!-- Start About
        ============================================= -->
        <div id="about" class="about-style-one-area default-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="about-style-one-thumb">
                            <img src="{{url('public/asset/upload/aboutme/'.$about_data->myphoto)}}" alt="Image Not found">
                            @if($about_data->experience)
                            <div class="curve-text">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 150" version="1.1">
                                    <path id="textPath" d="M 0,75 a 75,75 0 1,1 0,1 z"></path>
                                    <text><textPath href="#textPath">Years of experience</textPath></text>
                                </svg>
                                <h4>{{$about_data->experience}}</h4>
                            </div>
                                @endif
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1 mt-50">
                        <div class="about-style-one-info">
                            <h3 class="sub-title">My Story</h3>
                            <h2 class="titlee">{{$about_data->title}}</h2>
                            <p>
                                {!!  $about_data->details !!}
                            </p>
                            @if($about_data->cv)
                            <a href="{{url('public/asset/upload/aboutme/'.$about_data->cv)}}" target="_blank" class="btn-standard mt-10 smooth-menu">
                                Download CV
                            </a>
                            @endif
                            <!-- Single Item -->
                            <div class="about-item">
                                <h3><i class="fas fa-user"></i> Biography</h3>
                                <ul class="biography-table">
                                    @if($about_data->name)
                                    <li>
                                        <h5>Name</h5>
                                        <p>
                                            {{$about_data->name}}
                                        </p>
                                    </li>
                                    @endif

                                    @if($about_data->mobile)
                                    <li>
                                        <h5>Mobile</h5>
                                        <p>
                                            {{$about_data->mobile}}
                                        </p>
                                    </li>
                                        @endif
                                        @if($about_data->email)
                                    <li>
                                        <h5>Email</h5>
                                        <p>
                                            {{$about_data->email}}
                                        </p>
                                    </li>
                                    @endif
                                    @if($about_data->publication)
                                    <li>
                                        <h5>Publications (Submitted)</h5>
                                        <p>
                                            {{$about_data->publication}}
                                        </p>
                                    </li>
                                        @endif
                                </ul>
                            </div>
                            <!-- End Single Item -->

                            <!-- Single Item -->
                            <div class="about-item">
                                <h3><i class="fas fa-american-sign-language-interpreting"></i> LINGUISTIC PROFICIENCY</h3>
                                <ul class="biography-table">
                                    @if($about_data->english)
                                    <li>
                                        <h5>English</h5>
                                        <p>
                                            {{$about_data->english}}
                                        </p>
                                    </li>
                                    @endif
                                        @if($about_data->german)
                                    <li>
                                        <h5>German</h5>
                                        <p>
                                            {{$about_data->german}}
                                        </p>
                                    </li>
                                            @endif
                                </ul>
                            </div>
                            <!-- End Single Item -->



                            <!-- Single Item -->
                            @if($education->count() > 0)
                            <div class="about-item">
                                <h3><i class="fas fa-graduation-cap"></i> Educational Background</h3>
                                <ul class="education-table">
                                    @foreach($education as $edu)
                                    <li>
                                        <h4>{{ $edu->title }}</h4>
                                        <h5>{{ $edu->inistitute }}</h5>
                                        <span>{{ $edu->date }}</span>

                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                            @endif
                            <!-- End Single Item -->

                            <!-- Single Item -->
                            @if($internship->count() > 0 )
                            <div class="about-item">
                                <h3><i class="fas fa-graduation-cap"></i> Internship / Research Projects</h3>
                                <ul class="education-table">
                                    @foreach($internship as $intern)
                                    <li>
                                        <span>{{$intern->date}}</span>
                                        <h4>{{$intern->designation}}</h4>
                                        <h5>{{$intern->inistitute}}</h5>
                                        <p>{!! $intern->details !!}
                                        </p>
                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                            @endif
                            <!-- End Single Item -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About -->




        <!-- Start Project
        ============================================= -->
        <div id="portfolio" class="project-style-one-area default-padding">

            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="heading-left">
                            <h4 class="sub-title">Workshops</h4>
                            <h2 class="title">OTHER SKILLS</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row mt--50">
                    @if($workshop->count() > 0)
                    <div class="col-lg-6">
                        <div class="about-item">
                            <h3><i class="fas fa-graduation-cap"></i> Workshops / Event/ Webinars</h3>
                            <ul class="education-table">
                                @foreach($workshop as $wshop)
                                <li>
                                    <span>{{$wshop->date}}</span>
                                    <h4>{{$wshop->designation}}</h4>
                                    <h5> {{$wshop->inistitute}}</h5>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    @endif

                    <!-- Single Item -->
                    <div class="col-lg-6 col-md-6">
                        @if($about_data-> laboratory)
                        <div class="pricing-left">
                            <div class="pricing-style-onee about-item">
                                <h3><i class="fas fa-graduation-cap"></i> LABORATORY SKILLS</h3>
                                {!! $about_data-> laboratory!!}
                            </div>
                        </div>
                        @endif

                        @if($about_data-> membership)
                        <div class="pricing-style-onee about-item">
                            <h3><i class="fas fa-graduation-cap"></i> MEMBERSHIP/OTHERS</h3>
                            {!! $about_data-> membership!!}
                        </div>
                            @endif

                    </div>
                </div>
            </div>



        </div>
        <!-- End Projects -->
        @if($publication->count() > 0)
        <div id="publications" class="services-style-one-area default-padding-top mb--50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="left-heading mb-50">
                            <h4 class="sub-title">What i do</h4>
                            <h2 class="title">PUBLICATIONS (SUBMITTED)</h2>
                            <div class="devider"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <!-- Single Item -->
                    @foreach($publication as $publish)
                    <div class="service-style-one col-lg-11 col-md-10">
                        <div class="service-style-one-item">
                            <div class="info">
                                <h4><strong>{{$publish->name}} </strong> </h4>
                                <p>  {!! $publish->details !!}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
        @endif

        <!-- Start Testimonial
        ============================================= -->
        <div class="testimonial-style-one-area default-padding">
            <div class="container">
                <div class="testimonial-style-one-box">

                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="site-heading text-center">
                                <h4 class="sub-title">Some nice words</h4>
                                <h2>A friendly, committed, and dynamic co-worker with a high degree of indpendence</h2>
                                <div class="devider"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="testimonial-carousel text-center swiper">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Single item -->
                                    <div class="swiper-slide">
                                        <div class="testimonial-style-one">

                                            <div class="item">
                                                <div class="content">
                                                    <p>“Mr. Sattar is always a very committed and conscientious employee who works with great dedication and
                                                        success in his area of ​​responsibility and always shows a high degree of independence
                                                        and initiative.” <br> <a target="_blank" href="https://masattar.com/wp-content/uploads/2020/04/Zwischenzeugnis-Sattar.pdf">Read Full Story</a>
                                                    </p>
                                                </div>
                                                <div class="provider">
                                                    <div class="info">
                                                        <h4>Dr. Ida Retter</h4>
                                                        <span>Head of the office, Charité -University of Medicine Berlin</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single item -->
                                    <!-- Single item -->
                                    <div class="swiper-slide">
                                        <div class="testimonial-style-one">
                                            <div class="item">
                                                <div class="content">
                                                    <p>“Sattar is a dynamic co-worker who fulfills his tasks with a lot of engagement and is goal and-result oriented. He was always communicative and was ready to take multitasks. he did his tasks with utmost care and dedication…”
                                                        <br>
                                                        <a target="_blank" href="https://masattar.com/wp-content/uploads/2020/04/praktikum-intern1.pdf">Read Full Story</a>
                                                    </p>
                                                </div>
                                                <div class="provider">
                                                    <div class="info">
                                                        <h4>Kay Arndt</h4>
                                                        <span>Projekt Management Potsdam GmbH</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single item -->
                                    <!-- Single item -->
                                    <div class="swiper-slide">
                                        <div class="testimonial-style-one">
                                            <div class="item">
                                                <div class="content">
                                                    <p>“Mr. Sattar possesses a strong knowledge which he used successfully in managing is assignments. He was motivated and showed engagement in challenging tasks, even under pressure. He was always friendly to his colleagues”
                                                        <br>
                                                        <a target="_blank" href="https://masattar.com/wp-content/uploads/2020/04/TSI-1.pdf">Read Full Story</a>
                                                    </p>
                                                </div>
                                                <div class="provider">
                                                    <div class="info">
                                                        <h4>Khaled Shamsan</h4>
                                                        <span>TSI-Trade & Service GmbH, Berlin</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single item -->
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Testimonil End -->



        <!-- Start Blog
        ============================================= -->
        <div id="blog" class="home-blog default-padding-top bottom-less">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <h4 class="sub-title">News & Article</h4>
                            <h2 class="title">Latest from blog</h2>
                            <div class="devider"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">

                    <!-- Single item -->
                    <div class="blog-style-one mb-30 col-lg-4 col-xl-4 blogslide owl-carousel ">

                        @foreach($blogs as $blog)
                            <div class="item ">
                                <div class="thumb">
                                    <div class="blog_img">
                                        <a href="{{route('blog.details',[$blog->slug])}}"><img src="{{asset('public/asset/upload/blogs/'.$blog->image)}}" alt="Thumb"></a>
                                    </div>
                                    <div class="inner-date">
                                        <strong>{{$blog->updated_at->format('d')}}</strong> {{$blog->updated_at->format('F Y')}}
                                    </div>
                                </div>
                                <div class="info">
                                    <h4>
                                        <a href="{{route('blog.details',[$blog->slug])}}">{{$blog->title}}</a>
                                    </h4>
                                </div>
                            </div>
                        @endforeach

                    </div>




                    <!-- End Single item -->
                    <div class="col-lg-12 text-center">
                        <button onclick="location.href='{{route('blog')}}'"> View All Blogs <i class="fa fa-arrow-right"></i></button>
                    </div>


                </div>
            </div>

        </div>
        <!-- Brand End -->

        <!-- Start Contact
        ============================================= -->
        <div id="contact" class="contact-area contact-page overflow-hidden default-padding" style="background-image: url({{asset('assets/img/shape/map.png')}});">
            <div class="container">
                <div class="row">


                    <div class="col-tact-stye-one col-lg-5 pr-50 pr-md-15 pr-xs-15">
                        <div class="contact-style-one-info">
                            <div class="top-info">
                                <h2 class="gradient-text">Let's Talk</h2>
                                @if($setting_data->mobile)
                                <div class="call">
                                    <img src="{{asset('public/assets/img/icon/call-dark.png')}}" alt="Image not Found">
                                    <a class="phone-link" href="tel:+4733378901">{{$setting_data->mobile}}</a>
                                </div>
                                @endif
                            </div>
                            <ul class="contact-address">
                                <li>
                                    <div class="info">
                                        <h4>Location</h4>
                                        <p>
                                            {!! $setting_data->location !!}
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <h4>Official Email</h4>
                                        <a href="mailto:sattar.pharm@gmail.com">{{$setting_data->email}}</a>
                                    </div>
                                </li>
                            </ul>
                            <p class="copyright">
                                © {{date('Y')}} {{$setting_data->copyright}}
                            </p>
                        </div>
                    </div>

                    <div class="col-tact-stye-one col-lg-7 pl-60 pl-md-15 pl-xs-15 mt-md-50 mt-xs-50">
                        <div class="contact-form-style-one">
                            <form action="{{route('contact')}}" method="post" enctype="multipart/form-data" class="contact-formm contact-formm mt-30">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" id="name" name="name" placeholder="Name" type="text" value="{{old('name')}}">
                                            @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" id="email" name="email" placeholder="Email*" type="email" value="{{old('email')}}">
                                            @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" id="subject" name="subject" placeholder="Subject" type="text" value="{{old('subject')}}">
                                            @error('subject')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group comments">
                                            <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *">{{old('comments')}}</textarea>
                                            @error('comments')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button type="submit" >
                                            <i class="fa fa-paper-plane"></i> Get in Touch
                                        </button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Brand Blog -->
    </div>
@endsection


