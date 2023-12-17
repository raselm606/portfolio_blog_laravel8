@extends('backend.layouts.app')
@section('main-content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Manage Sub Sub Categories</h1>



        <div class="row">
            <div class="col-lg-12 text-right mb-2">
                <a href="#addsubsubcat" class="btn btn-primary" data-toggle="modal" ><i class="fas fa-plus-circle"></i> Add Sub Sub Catagory</a>
            </div>

            <div class="col-lg-12">
                @include('backend.layouts.partials.displayerror')
            </div>
            <div class="col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">All Categories</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Category</th>
                                    <th>Sub Category</th>
                                    <th>Name English</th>
                                    <th>Name Bangla</th>
                                    <th>URL</th>
                                    <th>Updated</th>
                                    <th>Manage</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>SL</th>
                                    <th>Category</th>
                                    <th>Sub Category</th>
                                    <th>Name English</th>
                                    <th>Name Bangla</th>
                                    <th>URL</th>
                                    <th>Updated</th>
                                    <th>Manage</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($subsubcategories as $subsub)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$subsub->Category->category_en}}</td>
                                    <td>{{$subsub->Subcategori->subcategory_en}}</td>
                                    <td>{{$subsub->subcategory_en}}</td>
                                    <td>{{$subsub->subcategory_bn}}</td>

                                    <td>{{$subsub->updated_at->diffForHumans()}}</td>
                                    <td>
                                        <a href="#editcat{{$subsub->id}}" data-toggle="modal" class="btn btn-success"><i class="fas fa-edit"> </i> </a>
                                        <a href="#deletecat{{$subsub->id}}" data-toggle="modal" class="btn btn-danger"><i class="fas fa-trash"> </i> </a>
                                    </td>
                                </tr>

                                <!-- edit author Modal-->
                                <div class="modal fade" id="editcat{{$subsub->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                     aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Sub Categories</h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{route('admin.test.subsubcategory.update', [$subsub->id])}}" method="post" >
                                                @csrf
                                                <!-- Form Row-->
                                                    <div class="row gx-3 mb-3">
                                                        <!-- Form Group (first name)-->
                                                        <div class="col-md-12">
                                                            <label class="small mb-1" for="category_id">Category</label>
                                                            <select name="category_id" id="category_id" class="form-control">
                                                                <option value="" disabled>Select a category</option>
                                                                @foreach($categories as $category)
                                                                    <option value="{{$category->id}}" {{$category->id == $subsub->category_id ? 'selected' : ''}}>{{$category->category_en}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label class="small mb-1" for="subcategory_id">Sub Category</label>
                                                            <select name="subcategory_id" id="subcategory_id" class="form-control">
                                                                <option value="" disabled>Select a sub category</option>
                                                                @foreach($subcategories as $subcat)
                                                                    <option value="{{$subcat->id}}" {{$subcat->id == $subsub->subcategory_id ? 'selected' : ''}}>{{$subcat->subcategory_en}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label class="small mb-1" for="subcategory_en">Categories name English</label>
                                                            <input class="form-control" id="subcategory_en" type="text" name="subcategory_en"   value="{{$subsub->subcategory_en}}">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label class="small mb-1" for="subcategory_bn">Categories name Bangla</label>
                                                            <input class="form-control" id="subcategory_bn" type="text" name="subcategory_bn"   value="{{$subsub->subcategory_bn}}">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label class="small mb-1" for="subcategory_slug">Categories Link</label>
                                                            <input class="form-control" id="subcategory_slug" type="text" name="subcategory_slug"   value="{{$subsub->subcategory_slug}}">
                                                        </div>
                                                    </div>
                                                    <!-- Save changes button-->
                                                    <button type="submit" class="btn btn-primary" >Update Sub Sub Categories</button>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- add author Modal-->

                                <!-- delete author Modal-->
                                <div class="modal fade" id="deletecat{{$subsub->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                     aria-hidden="true">
                                    <div class="modal-dialog " role="document">
                                        <div class="modal-content">
                                            <div class="modal-header text-center">
                                                <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete Sub Categories?</h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <form action="{{route('admin.test.subsubcategory.destroy', [$subsub->id])}}" method="post" >
                                                @csrf
                                                    <!-- Save changes button-->
                                                    <h5><label class="text-primary">{{$subsub->name}}</label> will be deleted !!</h5>
                                                    <button type="submit" class="btn btn-danger" >Yes Delete Sub Sub Categories</button>
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

    <!-- add addsubcat Modal-->
    <div class="modal fade" id="addsubsubcat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Sub Sub Category</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('admin.test.subsubcategory.store')}}" method="post" >
                        @csrf
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-12">
                                <label class="small mb-1" for="category_id">Category Name</label>
                                <select name="category_id" id="category_id" class="form-control">
                                    <option value="" >Select a category</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->category_en}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label class="small mb-1" for="subcategory_id">Sub Category Name</label>
                                <select name="subcategory_id" id="subcategory_id" class="form-control">
                                    <option value="" disabled>Select a category</option>

                                </select>
                            </div>
                            <div class="col-md-12">
                                <label class="small mb-1" for="subcategory_en">Sub Sub Category Name English</label>
                                <input class="form-control" id="subcategory_en" type="text" name="subcategory_en"   value="{{old('subcategory_en')}}">
                            </div>
                            <div class="col-md-12">
                                <label class="small mb-1" for="subcategory_bn">Sub Sub Category Name Bangla</label>
                                <input class="form-control" id="subcategory_bn" type="text" name="subcategory_bn"   value="{{old('subsubcategory_bn')}}">
                            </div>
                            <div class="col-md-12">
                                <label class="small mb-1" for="subcategory_slug">Sub Sub Category URL Text</label>
                                <input class="form-control" id="subcategory_slug" type="text" name="subcategory_slug"   value="{{old('subcategory_slug')}}">
                            </div>

                        </div>
                        <!-- Save changes button-->
                        <button type="submit" class="btn btn-primary" >Add Sub Sub Categories</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- add addsubcat Modal-->



    <script src="{{asset('backend/vendor/ajax/3.5.1.jquery.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="category_id"]').on('change', function(){
                var category_id = $(this).val();
                if(category_id) {
                    $.ajax({
                        url: "{{  url('/admin/subsubcategory/ajax') }}/"+category_id,
                        type:"GET",
                        dataType:"json",
                        success:function(data) {
                            var d =$('select[name="subcategory_id"]').empty();
                            $.each(data, function(key, value){
                                $('select[name="subcategory_id"]').append('<option value="'+ value.id +'">' + value.subcategory_en + '</option>');
                            });
                        },
                    });
                } else {
                    alert('danger');
                }
            });
        });
    </script>



@endsection

