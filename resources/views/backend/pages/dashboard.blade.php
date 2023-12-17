@extends('backend.layouts.app')

@section('main-content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Admin Dashboard</h1>
{{--        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i--}}
{{--                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>--}}
    </div>

    <!-- Content Row -->
    <div class="row">

    <div class="col-lg-12">
        @if(session()->has('msg'))
            <div class="alert alert-{{session()->get('type')}}  alert-dismissible fade show" role="alert">
                {{ session()->get('msg') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
    </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2 pointer" onclick="location.href='{{route('admin.category')}}'">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Category</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$category_count}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-database fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2 pointer" onclick="location.href='{{route('admin.all.blogs')}}'">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                All Blogs
                                </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"> {{$all_blogs}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2 pointer" onclick="location.href='{{route('admin.all.contact')}}'">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                All Message
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col">

                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$message_count}} </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
{{--        <div class="col-xl-3 col-md-6 mb-4">--}}
{{--            <div class="card border-left-warning shadow h-100 py-2 pointer"  onclick="location.href='{{route('admin.all.order')}}'" >--}}
{{--                <div class="card-body">--}}
{{--                    <div class="row no-gutters align-items-center">--}}
{{--                        <div class="col mr-2">--}}
{{--                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">--}}
{{--                                Order Requests</div>--}}
{{--                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$order_count}}</div>--}}
{{--                        </div>--}}
{{--                        <div class="col-auto">--}}
{{--                            <i class="fas fa-cart-plus fa-2x text-gray-300"></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        <!-- Pending Requests Card Example -->
{{--        <div class="col-xl-3 col-md-6 mb-4">--}}
{{--            <div class="card border-left-warning shadow h-100 py-2 pointer"  onclick="location.href='{{route('admin.customers')}}'" >--}}
{{--                <div class="card-body">--}}
{{--                    <div class="row no-gutters align-items-center">--}}
{{--                        <div class="col mr-2">--}}
{{--                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">--}}
{{--                                All Customers</div>--}}
{{--                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$customer_count}}</div>--}}
{{--                        </div>--}}
{{--                        <div class="col-auto">--}}
{{--                            <i class="fas fa-comments fa-2x text-gray-300"></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>

    <!-- Content Row -->



</div>
<!-- /.container-fluid -->

    @endsection
