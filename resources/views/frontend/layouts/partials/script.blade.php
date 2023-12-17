<!-- jQuery Frameworks
============================================= -->
<script src="{{asset('public/assets/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('public/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('public/assets/js/jquery.appear.js')}}"></script>
<script src="{{asset('public/assets/js/jquery.easing.min.js')}}"></script>
<script src="{{asset('public/assets/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('public/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('public/assets/js/progress-bar.min.js')}}"></script>
<script src="{{asset('public/assets/js/circle-progress.js')}}"></script>
<script src="{{asset('public/assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('public/assets/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('public/assets/js/count-to.js')}}"></script>
<script src="{{asset('public/assets/js/jquery.scrolla.min.js')}}"></script>
<script src="{{asset('public/assets/js/ScrollOnReveal.js')}}"></script>
<script src="{{asset('public/assets/js/YTPlayer.min.js')}}"></script>
<script src="{{asset('public/assets/js/validnavs.js')}}"></script>
<script src="{{asset('public/assets/js/gsap.js')}}"></script>
<script src="{{asset('public/assets/js/ScrollTrigger.min.js')}}"></script>
<script src="{{asset('public/assets/js/TweenMax.min.js')}}"></script>
<script src="{{asset('public/assets/js/main.js')}}"></script>
<script src="{{url('public/frontend/vendor/toastr/toastr.min.js')}}"></script>
<script src="{{url('public/frontend/vendor/sweetalert/sweetalert.min.js')}}"></script>


<script>

    @if(Session::has('msg'))
        toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "positionClass": "toast-top-center"
    };
    var type = "{{ Session::get('alert-type','info')}}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('msg')}}");
            break;
        case 'success':
            toastr.success("{{ Session::get('msg')}}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('msg')}}");
            break;
        case 'error':
            toastr.error("{{ Session::get('msg')}}");
            break;

    }
    @endif

/** add to cart */

</script>


@if(Session::has('msg'))
    <script>
        swal({{ Session::has('msg') }});
    </script>
@endif

