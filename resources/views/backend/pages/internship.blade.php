@extends('backend.layouts.app')
@section('main-content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 text-gray-800">Manage nternship / Research Projects</h1>



        <div class="row">
            <div class="col-lg-12 text-right mb-2">
                <a href="#addintern" class="btn btn-primary" data-toggle="modal" ><i class="fas fa-plus-circle"></i> Add Intership / Research</a>
            </div>

            <div class="col-lg-12">
                @include('backend.layouts.partials.display')
                @include('backend.layouts.partials.displayerror')
            </div>
            <div class="col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">All Internship / Research</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Date</th>
                                    <th>Designation</th>
                                    <th>Institute Name</th>
                                    <th>Details</th>
                                    <th>Status</th>
                                    <th>Updated</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>SL</th>
                                    <th>Date</th>
                                    <th>Designation</th>
                                    <th>Institute Name</th>
                                    <th>Details</th>
                                    <th>Status</th>
                                    <th>Updated</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($internship as $intern)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$intern->date}}</td>
                                        <td>{{$intern->designation}}</td>
                                        <td>{{$intern->inistitute}}</td>
                                        <td>{!! $intern->details !!}</td>
                                        <td>
                                            @if($intern->status)
                                                <div class="badge badge-danger"><i class="fa fa-times"></i> Off</div>
                                            @else
                                                <div class="badge badge-success"> <i class="fa fa-check"></i> Live</div>
                                            @endif

                                        </td>
                                        <td>{{$intern->updated_at->diffForHumans()}}</td>
                                        <td>
                                            <a href="#editintern{{$intern->id}}" data-toggle="modal" class="btn btn-success"><i class="fas fa-edit"> </i> </a>
                                            <a href="#deleteintern{{$intern->id}}" data-toggle="modal" class="btn btn-danger"><i class="fas fa-trash"> </i> </a>
                                        </td>
                                    </tr>

                                    <!-- edit author Modal-->
                                    <div class="modal fade" id="editintern{{$intern->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Internship/ Research</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{route('admin.intern.update', [$intern->id])}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                        @method('PUT')
                                                    <!-- Form Row-->
                                                        <div class="row gx-3 mb-3">
                                                            <!-- Form Group (first name)-->
                                                            <div class="col-md-12">
                                                                <label class="small mb-1" for="image">Date</label>
                                                                <input class="form-control" id="date" type="text" name="date"   value="{{$intern->date}}">

                                                            </div>
                                                            <div class="col-md-12">
                                                                <label class="small mb-1" for="designation">Designation</label>
                                                                <input class="form-control" id="designation" type="text" name="designation"   value="{{$intern->designation}}">
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label class="small mb-1" for="inistitute">Inistitute Name</label>
                                                                <input class="form-control" id="inistitute" type="text" name="inistitute"   value="{{$intern->inistitute}}">
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label class="small mb-1" for="details">Details</label>
                                                                <textarea class="form-control summernote" name="details" id="" cols="30" rows="10">{!! $intern->details !!}</textarea>

                                                            </div>
                                                            <div class="col-md-12 mt-2">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" name="status" id="status" type="checkbox" {{$intern->status == "1" ? 'checked': ''}}>
                                                                    <label class="form-check-label text-dark" for="status">Internship Off</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Save changes button-->
                                                        <button type="submit" class="btn btn-primary" >Save Internship</button>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- add author Modal-->

                                    <!-- delete author Modal-->
                                    <div class="modal fade" id="deleteintern{{$intern->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                         aria-hidden="true">
                                        <div class="modal-dialog " role="document">
                                            <div class="modal-content">
                                                <div class="modal-header text-center">
                                                    <h5 class="modal-title" id="exampleModalLabel">আপনি কি Intership ডিলিট করতে চান? </h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-center">
                                                    <form action="{{route('admin.intern.delete', [$intern->id])}}" method="post" >
                                                    @csrf
                                                    <!-- Save changes button-->
                                                        <h5> {{$intern->designation}} will be deleted !!</h5>
                                                        <button type="submit" class="btn btn-danger" >Yes Delete Internship</button>
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
    <div class="modal fade" id="addintern" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Internship/ Research Projects</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('admin.intern')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-12">
                                <label class="small mb-1" for="date">Date</label>
                                <input class="form-control" id="date" type="text" name="date"   value="{{old('date')}}">
                            </div>
                            <div class="col-md-12">
                                <label class="small mb-1" for="designation">Designation</label>
                                <input class="form-control" id="designation" type="text" name="designation"   value="{{old('designation')}}">
                            </div>
                            <div class="col-md-12">
                                <label class="small mb-1" for="inistitute">Inistitute</label>
                                <input class="form-control" id="inistitute" type="text" name="inistitute"   value="{{old('inistitute')}}">
                            </div>
                            <div class="col-md-12">
                                <label class="small mb-1" for="details">Details</label>
                                <textarea class="form-control summernote" name="details" id="details" ></textarea>
                            </div>
                            <div class="col-md-12 mt-2">
                                <div class="form-check">
                                    <input class="form-check-input" name="status" id="status" type="checkbox" >
                                    <label class="form-check-label text-dark" for="status">Disabled Internship</label>
                                </div>
                            </div>
                        </div>
                        <!-- Save changes button-->
                        <button type="submit" class="btn btn-primary" >Add Internship</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- add author Modal-->

@endsection

