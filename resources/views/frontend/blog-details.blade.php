

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
    <div class="blog-area single full-blog right-sidebar full-blog default-padding">
        <div class="container">
            <div class="blog-items">
                <div class="row">
                    <div class="blog-content  col-lg-8 ">
                        <div class="blog-style-one item">

                            <div class="blog-item-box">

                                <div class="thumb">
                                    <img src="{{asset('public/asset/upload/blogs/'.$blogs->image)}}" alt="Thumb">
                                </div>
                                <div class="info p-4">
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <i class="fas fa-calendar-alt"></i> ( {{$blogs->created_at->format('d F, Y')}} ) - Updated {{$blogs->updated_at->diffForHumans()}}
                                            </li>
                                        </ul>
                                    </div>
                                    <h4>{{$blogs->title}}</h4>
                                    {!! $blogs->details !!}
                                </div>
                            </div>
                        </div>

                        <!-- Post Tags Share -->
                        <div class="post-tags share">
                            <div class="tags">
                                <h4>Category: </h4>
                                <a href="{{url('/blogs')}}">{{$blogs->category->name}}</a>
                            </div>
                            <div class="social">
                                <h4>Share:</h4>
                                <ul>

                                    <li>
                                        <a class="facebook" href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a class="twitter" href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a class="pinterest" href="#" target="_blank"><i class="fab fa-pinterest-p"></i></a>
                                    </li>
                                    <li>
                                        <a class="linkedin" href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul><!-- End Social Share -->
                            </div>
                        </div>
                        <!-- Post Tags Share -->



                    </div>

                    <!-- Start Sidebar -->
                    <div class="sidebar  col-lg-4 ">
                        <aside>
                            <div class="sidebar-item search">
                                <div class="sidebar-info">
                                    <form>
                                        <input type="text"  placeholder="Enter Keyword" name="text" class="form-control">
                                        <button type="submit"><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="sidebar-item recent-post ">
                                <h4 class="title">Recent Post</h4>
                                <ul>

                                    @foreach($all_blog as $all_blog)

                                    <li>
                                        <div class="thumb">
                                            <a href="{{route('blog.details',[$all_blog->slug])}}">
                                                <img src="{{asset('public/asset/upload/blogs/'.$all_blog->image)}}" alt="Thumb">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <div class="meta-title">
                                                <span class="post-date">{{$all_blog->updated_at->format('d M, Y')}}</span>
                                            </div>
                                            <a href="{{route('blog.details',[$all_blog->slug])}}">{{$all_blog->title}}</a>
                                        </div>
                                    </li>
                                        @endforeach


                                </ul>
                            </div>
                            <div class="sidebar-item category">
                                <h4 class="title">category list</h4>
                                <div class="sidebar-info">
                                    <ul>
                                        @foreach($category as $cat)
                                        <li>
                                            <a href="{{url('/blogs')}}">{{$cat->name}} <span>{{$cat->blogpost->count()}}</span></a>
                                        </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-item gallery">
                                <h4 class="title">Gallery</h4>
                                <div class="sidebar-info">
                                    <ul>
                                        @foreach($all_blog_image as $blogphoto)
                                        <li>
                                            <div class="gal_img" style="width: 100px; height: 75px; overflow: hidden;">
                                                <a href="{{route('blog.details',[$blogphoto->slug])}}">
                                                    <img src="{{asset('public/asset/upload/blogs/'.$blogphoto->image)}}" alt="thumb">
                                                </a>
                                            </div>
                                        </li>
                                            @endforeach

                                    </ul>
                                </div>
                            </div>

                            <div class="sidebar-item social-sidebar">
                                <h4 class="title">follow us</h4>
                                <div class="sidebar-info">
                                    <ul>
                                        @if($social->facebook)
                                            <li class="facebook">
                                                <a href="{{$social->facebook}}" target="_blank" >
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                        @endif

                                        @if($social->Twitter)
                                            <li class="twitter">
                                                <a href="{{$social->Twitter}}" target="_blank" >
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                        @endif

                                        @if($social->instagram)
                                            <li class="instagram">
                                                <a href="{{$social->instagram}}" target="_blank" >
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                        @endif

                                        @if($social->linkedin)
                                            <li class="linkedin">
                                                <a href="{{$social->linkedin}}" target="_blank" >
                                                    <i class="fab fa-linkedin-in"></i>
                                                </a>
                                            </li>
                                        @endif

                                        @if($social->youtube)
                                            <li class="youtube">
                                                <a href="{{$social->youtube}}" target="_blank" >
                                                    <i class="fab fa-youtube"></i>
                                                </a>
                                            </li>
                                        @endif

                                        @if($social->reddit)
                                            <li>
                                                <a href="{{$social->reddit}}" target="_blank" >
                                                    <i class="fab fa-reddit"></i>
                                                </a>
                                            </li>
                                        @endif

                                        @if($social->pinterest)
                                            <li>
                                                <a href="{{$social->pinterest}}" target="_blank" >
                                                    <i class="fab fa-pinterest"></i>
                                                </a>
                                            </li>
                                        @endif

                                        @if($social->medium)
                                            <li>
                                                <a href="{{$social->medium}}" target="_blank" >
                                                    <i class="fab fa-medium"></i>
                                                </a>
                                            </li>
                                        @endif

                                        @if($social->researchgate)
                                            <li>
                                                <a href="{{$social->researchgate}}" target="_blank" >
                                                    <i class="fab fa-researchgate"></i>
                                                </a>
                                            </li>
                                        @endif

                                        @if($social->googlescholar)
                                            <li>
                                                <a href="{{$social->googlescholar}}" target="_blank" >
                                                    <i class="fab fa-google"></i>
                                                </a>
                                            </li>
                                        @endif


                                    </ul>
                                </div>
                            </div>

                        </aside>
                    </div>
                    <!-- End Start Sidebar -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->


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


