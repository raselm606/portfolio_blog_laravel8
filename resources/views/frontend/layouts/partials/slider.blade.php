<div class="slider_area mt-75">
    <div class="container-fluid">
        <div  class="row banner_slider">
            @foreach($sliders as $slider)
                <div class="col-lg-12 ">

                    <div class="item">
                        <img src="{{url('public/asset/upload/slider/'.$slider->image)}}" class="d-block w-100" alt="...">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
