@extends('backend.layouts.app')
@section('main-content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Profile</h1>

        <div class="row">

            <div class="col-xl-6">
                <!-- Account details card-->
                @include('backend.layouts.partials.display')
                <div class="card mb-4">
                    <div class="card-header">Account Details</div>
                    <div class="card-body">
                        <form action="{{route('admin.profile')}}" method="post">
                            @csrf
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="name">Full name</label>
                                    <input class="form-control" id="name" type="text" name="name"  value="{{$user->name}}">
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <!-- Form Row        -->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (organization name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="email">Email</label>
                                    <input class="form-control" id="email" type="email" name="email"  value="{{$user->email}}">
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <!-- Save changes button-->
                            <button class="btn btn-primary" type="submit">Save changes</button>
                        </form>
                    </div>
                </div>

                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Change Password</div>
                    <div class="card-body">
                        <form action="{{route('admin.forget')}}" method="post">
                            @csrf
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="oldpass">Old Password</label>
                                    <input class="form-control" id="oldpass" type="password" name="oldpass">
                                    @error('oldpass')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="newpass">New Password</label>
                                    <input class="form-control" id="newpass" type="password" name="newpass" >
                                    @error('newpass')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="repass">Retype new Password</label>
                                    <input class="form-control" id="repass" type="password" name="repass" >
                                    @error('repass')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Change Password</button>
                        </form>
                    </div>
                </div>
            </div>

                        <div class="col-xl-4">
                            <!-- Profile picture card-->
                            <div class="card mb-4 mb-xl-0">
                                <div class="card-header">Profile Info</div>
                                <div class="card-body text-center">
                                    <!-- Profile picture image-->
                                    <h6><strong>Name: </strong>{{$user->name}}</h6>
                                    <h6><strong>Email: </strong>{{$user->email}}</h6>
{{--                                    <img class="img-account-profile rounded-circle mb-2" src="{{asset('backend/img/undraw_profile.svg')}}" alt="">--}}
                                    <!-- Profile picture help block-->
{{--                                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>--}}
                                    <!-- Profile picture upload button-->
                                </div>
                            </div>
                        </div>
        </div>

    </div>
    <!-- /.container-fluid -->


    @endsection

