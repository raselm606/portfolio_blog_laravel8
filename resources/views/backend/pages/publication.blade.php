@extends('backend.layouts.app')
@section('main-content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 text-gray-800">Manage Publication</h1>



        <div class="row">
            <div class="col-lg-12 text-right mb-2">
                <a href="#addworkshop" class="btn btn-primary" data-toggle="modal" ><i class="fas fa-plus-circle"></i> Add Publication</a>
            </div>

            <div class="col-lg-12">
                @include('backend.layouts.partials.display')
                @include('backend.layouts.partials.displayerror')
            </div>
            <div class="col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">All Publication</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Details</th>
                                    <th>Status</th>
                                    <th>Updated</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Details</th>
                                    <th>Status</th>
                                    <th>Updated</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($publication as $publish)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$publish->name}}</td>
                                        <td>{!! $publish->details !!}</td>
                                        <td>
                                            @if($publish->status)
                                                <div class="badge badge-danger"><i class="fa fa-times"></i> Off</div>
                                            @else
                                                <div class="badge badge-success"> <i class="fa fa-check"></i> Live</div>
                                            @endif

                                        </td>
                                        <td>{{$publish->updated_at->diffForHumans()}}</td>
                                        <td>
                                            <a href="#editwork{{$publish->id}}" data-toggle="modal" class="btn btn-success"><i class="fas fa-edit"> </i> </a>
                                            <a href="#deletework{{$publish->id}}" data-toggle="modal" class="btn btn-danger"><i class="fas fa-trash"> </i> </a>
                                        </td>
                                    </tr>

                                    <!-- edit author Modal-->
                                    <div class="modal fade" id="editwork{{$publish->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Publication</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{route('admin.publication.update', [$publish->id])}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                        @method('PUT')
                                                    <!-- Form Row-->
                                                        <div class="row gx-3 mb-3">
                                                            <!-- Form Group (first name)-->
                                                            <div class="col-md-12">
                                                                <label class="small mb-1" for="name">Name</label>
                                                                <input class="form-control" id="name" type="text" name="name"   value="{{$publish->name}}">

                                                            </div>
                                                            <div class="col-md-12">
                                                                <label class="small mb-1" for="details">Details</label>
                                                                <textarea name="details" id="" cols="30" rows="10" class="form-control summernote">{{$publish->details}}</textarea>
                                                            </div>

                                                            <div class="col-md-12 mt-2">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" name="status" id="status" type="checkbox" {{$publish->status == "1" ? 'checked': ''}}>
                                                                    <label class="form-check-label text-dark" for="status">Publication Off</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Save changes button-->
                                                        <button type="submit" class="btn btn-primary" >Save Publication</button>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- add author Modal-->

                                    <!-- delete author Modal-->
                                    <div class="modal fade" id="deletework{{$publish->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                         aria-hidden="true">
                                        <div class="modal-dialog " role="document">
                                            <div class="modal-content">
                                                <div class="modal-header text-center">
                                                    <h5 class="modal-title" id="exampleModalLabel">Do you want to delete? </h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-center">
                                                    <form action="{{route('admin.publication.delete', [$publish->id])}}" method="post" >
                                                    @csrf
                                                    <!-- Save changes button-->
                                                        <h5> Publication will be deleted !!</h5>
                                                        <button type="submit" class="btn btn-danger" >Yes Delete Publication</button>
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
                    <h5 class="modal-title" id="exampleModalLabel">Add Publication</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('admin.publication')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-12">
                                <label class="small mb-1" for="name">Name</label>
                                <input class="form-control" id="name" type="text" name="name"   value="{{old('name')}}">
                            </div>
                            <div class="col-md-12">
                                <label class="small mb-1" for="details">Details</label>
                                <textarea name="details" id="" cols="30" rows="10" class="form-control summernote">{{old('details')}}</textarea>
                            </div>
                            <div class="col-md-12 mt-2">
                                <div class="form-check">
                                    <input class="form-check-input" name="status" id="status" type="checkbox" >
                                    <label class="form-check-label text-dark" for="status">Disabled Publication</label>
                                </div>
                            </div>
                        </div>
                        <!-- Save changes button-->
                        <button type="submit" class="btn btn-primary" >Add Publication</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- add author Modal-->

@endsection

