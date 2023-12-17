@extends('backend.layouts.app')
@section('main-content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Settings</h1>

        <div class="row">

            <div class="col-lg-12">
                @include('backend.layouts.partials.display')
            </div>

        </div>

        <form action="{{ route('admin.update.setting') }}" method="post" enctype="multipart/form-data">
            @csrf

            <!-- Form Row -->
            <div class="card mb-4">
                <div class="card-header">Site Settings</div>
                <div class="card-body">
                    <div class="row gx-3 mb-3">

                        <div class="col-md-6 mb-3">
                            <label class="small mb-1" for="admin_title">Admin Title</label>
                            <input type="text" class="form-control" id="admin_title" name="admin_title" value="{{  $setting_data->admin_title }}">
                            @error('admin_title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="small mb-1" for="site_title">Site Title</label>
                            <input type="text" class="form-control" id="site_title" name="site_title" value="{{  $setting_data->site_title }}">
                            @error('site_title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="small mb-1" for="site_logo">Site Logo</label>
                            <input type="file" class="form-control" id="site_logo" name="site_logo" value="{{  $setting_data->site_logo }}">
                            @error('site_logo')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <img style="background: #ddd;" src="{{url('public/asset/upload/settings/'.$setting_data->site_logo)}}" width="80"  alt="">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="small mb-1" for="mobile_logo">Site Mobile Logo</label>
                            <input type="file" class="form-control" id="mobile_logo" name="mobile_logo" value="{{  $setting_data->mobile_logo }}">
                            @error('mobile_logo')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <img src="{{url('public/asset/upload/settings/'.$setting_data->mobile_logo)}}" width="80"  alt="">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="small mb-1" for="favicon">Favicon Logo</label>
                            <input type="file" class="form-control" id="favicon" name="favicon" value="{{  $setting_data->favicon }}">
                            @error('favicon')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <img src="{{url('public/asset/upload/settings/'.$setting_data->favicon)}}" width="80"  alt="">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="small mb-1" for="hero_img">Hero Image</label>
                            <input type="file" class="form-control" id="hero_img" name="hero_img" value="{{  $setting_data->hero_img }}">
                            @error('hero_img')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <img src="{{url('public/asset/upload/settings/'.$setting_data->hero_img)}}" width="80"  alt="">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="small mb-1" for="hero_text">Hero Title</label>
                            <textarea name="hero_text" id="hero_text"  class="form-control summernote">{!! $setting_data->hero_text !!}  </textarea>
                            @error('hero_text')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="small mb-1" for="hero_subtext">Hero Subtitle</label>
                            <textarea name="hero_subtext" id="hero_subtext"  class="form-control summernote">{!! $setting_data->hero_subtext !!}</textarea>
                            @error('hero_subtext')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="small mb-1" for="mobile">Mobile Number</label>
                            <input type="text" class="form-control" id="mobile" name="mobile" value="{{  $setting_data->mobile }}">
                            @error('mobile')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="small mb-1" for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{  $setting_data->email }}">
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="small mb-1" for="copyright">Footer Copyright Text</label>
                            <input type="text" class="form-control" id="copyright" name="copyright" value="{{  $setting_data->copyright }}">
                            @error('copyright')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="col-md-12 mb-3">
                            <label class="small mb-1" for="location">Location</label>
                            <textarea class="form-control summernote" id="location" name="location">{!! $setting_data->location !!}</textarea>
                        </div>
                        <!-- Add more fields as needed for your settings -->

                        <div class="col-md-12">
                            <!-- Save changes button -->
                            <button type="submit" class="btn btn-lg btn-block btn-primary mt-3">Update Setting</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- /.container-fluid -->
@endsection
