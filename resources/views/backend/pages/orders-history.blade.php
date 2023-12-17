@extends('backend.layouts.app')

@section('main-content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Order History</h1>

    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header d-flex justify-content-between py-3">
                    <h6 class="m-0 font-weight-bold text-primary">All Orders</h6>
                    <a href="{{route('admin.history.order')}}" class="btn btn-primary">Back</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-center table-striped table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Order Date</th>
                                    <th>Tracking Number</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$order->created_at->diffForHumans()}}</td>
                                    <td>{{$order->traking_no}}</td>
                                    <td>
                                        @if($order->status == 0)
                                            <span class="badge bg-primary badge-primary">Pending</span>
                                        @else
                                            <span class="badge bg-success badge-success">Completed</span>
                                            @endif
                                    </td>
                                    <td>
                                        <a href="{{route('admin.view.order',[$order->id])}}" class="btn btn-primary">View Order</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection
