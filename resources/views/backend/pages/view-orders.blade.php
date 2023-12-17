@extends('backend.layouts.app')

@section('main-content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">View Orders</h1>

        <div class="row justify-content-center">
            @if(session()->has('msg'))
                <div class="alert alert-{{session()->get('alert-type')}}  alert-dismissible fade show" role="alert">
                    {{ session()->get('msg') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <div class="col-lg-4">
                <div class="order_product mb-5">
                    <div class="card">
                        <div class="card-header">
                            <h5>User Personal Info</h5>
                        </div>
                        <div class="card-body">
                            <h6 >Full Name</h6>
                            <div class="border p-2 mb-2">{{$order->fullname}}</div>
                            <h6 >Email</h6>
                            <div class="border p-2 mb-2">{{Auth::user()->email}}</div>
                            <h6 >Mobile</h6>
                            <div class="border p-2 mb-2">{{$order->mobile}}</div>
                            <h6 >Address</h6>
                            <div class="border p-2 mb-2">{{$order->address}}</div>
                            <h6 >City</h6>
                            <div class="border p-2 mb-2">{{$order->city}}</div>
                            <h6 >State</h6>
                            <div class="border p-2 mb-2">{{$order->state}}</div>
                            <h6 >Zipcode</h6>
                            <div class="border p-2 mb-2">{{$order->zipcode}}</div>
                            <h6 >Country</h6>
                            <div class="border p-2 mb-2">{{$order->country}}</div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-lg-8">
                <div class="order_product mb-5 ">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5>View Orders </h5>
                            <a class="btn btn-primary" href="{{url('/admin/orders')}}" > <span class="fa fa-arrow-left"></span> Back</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-striped ">
                                    <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Quantity</th>
                                        <th></th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Price</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @php
                                    $total = 0;
                                    @endphp

                                    @foreach($order->orderItems as $item)
                                        <tr>
                                            <td>
                                                {{$item->prod->name}}
                                            </td>
                                            <td>{{$item->qty}}</td>
                                            <td></td>
                                            <td><img width="50" src="{{ asset('asset/upload/products/'.$item->prod->image) }}" alt=""></td>
                                            <td>{{$item->price}}</td>

                                            @php
                                            $total += $item->price * $item->qty;
                                            @endphp

                                        </tr>

                                    @endforeach

                                    <!-- Sub total, shipping cost, and total -->
                                    <tr>
                                        <th scope="row" colspan="4" class="text-center"><strong>Sub Total </strong></th>
                                        <td>{{$total}} <span id="sub_total_cell"></span></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row" colspan="4" class="text-center"><strong>Shipping Cost </strong></th>
                                        <td>৳ <span id="shipping_cost_cell">60</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row" colspan="4" class="text-center"><strong>Total</strong></th>
                                        <td id="total_cell">৳ <span id="total_value">{{$total+60}}</span></td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>

                                            <form action="{{route('admin.update.order',[$order->id])}}" method="post">
                                                @csrf
                                                <select name="order_status" id="" class="form-select">
                                                    <option {{$order->status == '0' ? 'selected' : ''}} value="0">Pending</option>
                                                    <option {{$order->status == '1' ? 'selected' : ''}} value="1">Completed</option>
                                                </select>
                                                <button type="submit" class="btn btn-primary btn-sm">Update</button>
                                            </form>
                                        </td>
                                    </tr>



                                    <!-- End subtotal, shipping cost, and total -->

                                    </tbody>
                                </table>



                            </div>
                        </div>




                    </div>
                </div>



            </div>

        </div>
    </div>


@endsection
