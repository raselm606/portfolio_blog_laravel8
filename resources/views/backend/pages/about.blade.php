@extends('backend.layouts.app')
@section('main-content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">About me</h1>

        <div class="row">

            <div class="col-lg-12">
                @include('backend.layouts.partials.display')
            </div>

        </div>

        <form action="{{ route('admin.about') }}" method="post" enctype="multipart/form-data">
            @csrf

            <!-- Form Row -->
            <div class="card mb-4">
                <div class="card-header">About Settings</div>
                <div class="card-body">
                    <div class="row gx-3 mb-3">

                        <div class="col-md-12 mb-3">
                            <label class="small mb-1" for="title">About Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{  $about_data->title }}">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="small mb-1" for="details">About Details</label>
                            <textarea class="form-control summernote" id="details" name="details">{!! $about_data->details !!}</textarea>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="small mb-1" for="cv">Upload CV</label>
                            <input type="file" class="form-control" id="cv" name="cv" value="{{  $about_data->cv }}">
                            <a href="{{url('public/asset/upload/aboutme/'.$about_data->cv)}}" target="_blank">Click here to view CV</a>
                            @error('cv')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="col-md-6 mb-3">
                            <label class="small mb-1" for="myphoto">About Photo</label>
                            <input type="file" class="form-control" id="myphoto" name="myphoto" value="{{  $about_data->myphoto }}">
                            @error('myphoto')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <img style="background: #ddd;" src="{{url('public/asset/upload/aboutme/'.$about_data->myphoto)}}" width="80"  alt="no photo">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="small mb-1" for="experience">Years of Experience</label>
                            <input type="text" class="form-control" name="experience" value="{{ $about_data->experience }}">
                            @error('experience')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>



                        <div class="col-md-6 mb-3">
                            <label class="small mb-1" for="name">My Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{  $about_data->name }}">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="small mb-1" for="mobile">Mobile Number</label>
                            <input type="text" class="form-control" id="mobile" name="mobile" value="{{  $about_data->mobile }}">
                            @error('mobile')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="small mb-1" for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{  $about_data->email }}">
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="small mb-1" for="publication">Publications</label>
                            <input type="text" class="form-control" id="publication" name="publication" value="{{  $about_data->publication }}">
                            @error('publication')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="col-md-4 mb-3">
                            <label class="small mb-1" for="english">English</label>
                            <input type="text" class="form-control" id="english" name="english" value="{{  $about_data->english }}">
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="small mb-1" for="german">German</label>
                            <input type="text" class="form-control" id="german" name="german" value="{{  $about_data->german }}">
                        </div>


                        <div class="col-md-12 mb-3">
                            <label class="small mb-1" for="laboratory"> Laboratory Skills</label>
                            <textarea class="form-control summernote" id="laboratory" name="laboratory">{!! $about_data->laboratory !!}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="small mb-1" for="membership"> Membership/Others</label>
                            <textarea class="form-control summernote" id="membership" name="membership">{!! $about_data->membership !!}</textarea>
                        </div>

                        <div class="col-md-12">
                            <!-- Save changes button -->
                            <button type="submit" class="btn btn-lg btn-block btn-primary mt-3">About Setting</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- /.container-fluid -->
@endsection
