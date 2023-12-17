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
                             <a class="smooth-menu" href="{{url('/')}}#experience">Experience</a>
                             <div class="nav-item-wrapper"></div>
                         </div>
                         <div class="nav-item">
                             <a class="smooth-menu" href="{{url('/')}}#about">About</a>
                             <div class="nav-item-wrapper"></div>
                         </div>
                         <div class="nav-item">
                             <a class="smooth-menu" href="{{url('/blogs')}}">Blogs</a>
                             <div class="nav-item-wrapper"></div>
                         </div>
                         <div class="nav-item">
                             <a class="smooth-menu" href="{{url('/')}}#contact">Contact</a>
                             <div class="nav-item-wrapper"></div>
                         </div>

                     </div>
                 </div>
             </div>
         </div>
         <!-- End Side Navbar -->



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
                    @foreach($all_blogs as $blogpost)
                    <div class="blog-style-one mb-30 col-xl-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <div class="blog_img">
                                    <a href="{{route('blog.details',[$blogpost->slug])}}"><img src="{{asset('public/asset/upload/blogs/'.$blogpost->image)}}" alt="Thumb"></a>
                                </div>

                                <div class="inner-date">
                                    <strong>{{$blogpost->updated_at->format('d')}}</strong> {{$blogpost->updated_at->format('F Y')}}
                                </div>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="{{route('blog.details',[$blogpost->slug])}}">{{$blogpost->title}}</a>
                                </h4>

                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- End Single item -->

                    <div class="col-lg-12 text-center">
                        {{ $all_blogs->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>

        </div>
        <!-- Brand End -->


         <!-- Start Footer
  ============================================= -->
         <footer class="bg-dark text-light mt-5">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-6">
                         <p class="copyright-text">
                             &copy;  {{date('Y')}} {{$setting_data->copyright}}
                         </p>
                     </div>
                     <div class="col-lg-6 text-end">
                         <ul class="footer-link">
                             <li>
                                 <a href="mailto:sattar.pharm@gmail.com">Email: {{$setting_data->email}}</a>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
         </footer>
         <!-- End Footer -->


     </div>

@endsection
