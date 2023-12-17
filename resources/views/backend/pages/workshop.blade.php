@extends('backend.layouts.app')
@section('main-content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 text-gray-800">Manage Workshops / Event/ Webinars</h1>



        <div class="row">
            <div class="col-lg-12 text-right mb-2">
                <a href="#addworkshop" class="btn btn-primary" data-toggle="modal" ><i class="fas fa-plus-circle"></i> Add Workshops / Event/ Webinars</a>
            </div>

            <div class="col-lg-12">
                @include('backend.layouts.partials.display')
                @include('backend.layouts.partials.displayerror')
            </div>
            <div class="col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">All Workshops / Event/ Webinars</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Date</th>
                                    <th>Title</th>
                                    <th>Institute Name</th>
                                    <th>Status</th>
                                    <th>Updated</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>SL</th>
                                    <th>Date</th>
                                    <th>Title</th>
                                    <th>Institute Name</th>
                                    <th>Status</th>
                                    <th>Updated</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($workshop as $work)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$work->date}}</td>
                                        <td>{{$work->designation}}</td>
                                        <td>{{$work->inistitute}}</td>
                                        <td>
                                            @if($work->status)
                                                <div class="badge badge-danger"><i class="fa fa-times"></i> Off</div>
                                            @else
                                                <div class="badge badge-success"> <i class="fa fa-check"></i> Live</div>
                                            @endif

                                        </td>
                                        <td>{{$work->updated_at->diffForHumans()}}</td>
                                        <td>
                                            <a href="#editwork{{$work->id}}" data-toggle="modal" class="btn btn-success"><i class="fas fa-edit"> </i> </a>
                                            <a href="#deletework{{$work->id}}" data-toggle="modal" class="btn btn-danger"><i class="fas fa-trash"> </i> </a>
                                        </td>
                                    </tr>

                                    <!-- edit author Modal-->
                                    <div class="modal fade" id="editwork{{$work->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Workshops / Event/ Webinars</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{route('admin.workshop.update', [$work->id])}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                        @method('PUT')
                                                    <!-- Form Row-->
                                                        <div class="row gx-3 mb-3">
                                                            <!-- Form Group (first name)-->
                                                            <div class="col-md-12">
                                                                <label class="small mb-1" for="image">Date</label>
                                                                <input class="form-control" id="date" type="text" name="date"   value="{{$work->date}}">

                                                            </div>
                                                            <div class="col-md-12">
                                                                <label class="small mb-1" for="designation">Title</label>
                                                                <input class="form-control" id="designation" type="text" name="designation"   value="{{$work->designation}}">
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label class="small mb-1" for="inistitute">Inistitute Name</label>
                                                                <input class="form-control" id="inistitute" type="text" name="inistitute"   value="{{$work->inistitute}}">
                                                            </div>
                                                            <div class="col-md-12 mt-2">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" name="status" id="status" type="checkbox" {{$work->status == "1" ? 'checked': ''}}>
                                                                    <label class="form-check-label text-dark" for="status">Workshops Off</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Save changes button-->
                                                        <button type="submit" class="btn btn-primary" >Save Workshops</button>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- add author Modal-->

                                    <!-- delete author Modal-->
                                    <div class="modal fade" id="deletework{{$work->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                         aria-hidden="true">
                                        <div class="modal-dialog " role="document">
                                            <div class="modal-content">
                                                <div class="modal-header text-center">
                                                    <h5 class="modal-title" id="exampleModalLabel">আপনি কি Workshops ডিলিট করতে চান? </h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-center">
                                                    <form action="{{route('admin.workshop.delete', [$work->id])}}" method="post" >
                                                    @csrf
                                                    <!-- Save changes button-->
                                                        <h5> {{$work->designation}} will be deleted !!</h5>
                                                        <button type="submit" class="btn btn-danger" >Yes Delete Workshops</button>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- delete author Modal-->


                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    <!-- add Publishyer Modal-->
    <div class="modal fade" id="addworkshop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Workshops</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('admin.workshop')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-12">
                                <label class="small mb-1" for="date">Date</label>
                                <input class="form-control" id="date" type="text" name="date"   value="{{old('date')}}">
                            </div>
                            <div class="col-md-12">
                                <label class="small mb-1" for="designation">Title</label>
                                <input class="form-control" id="designation" type="text" name="designation"   value="{{old('designation')}}">
                            </div>
                            <div class="col-md-12">
                                <label class="small mb-1" for="inistitute">Inistitute Name</label>
                                <input class="form-control" id="inistitute" type="text" name="inistitute"   value="{{old('inistitute')}}">
                            </div>
                            <div class="col-md-12 mt-2">
                                <div class="form-check">
                                    <input class="form-check-input" name="status" id="status" type="checkbox" >
                                    <label class="form-check-label text-dark" for="status">Disabled Workshops</label>
                                </div>
                            </div>
                        </div>
                        <!-- Save changes button-->
                        <button type="submit" class="btn btn-primary" >Add Workshops</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- add author Modal-->

@endsection

