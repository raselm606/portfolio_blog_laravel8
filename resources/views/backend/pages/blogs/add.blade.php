@extends('backend.layouts.app')
@section('main-content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Add Blog</h1>



        <div class="row">
            <div class="col-lg-12">
                @include('backend.layouts.partials.display')
            </div>
        </div>

        <form action="{{route('admin.blogs.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <!-- Form Row-->
                <!-- Form Group (first name)-->
                    <div class="card mb-4">
                        <div class="card-header">Add Blog Details</div>
                        <div class="card-body">
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6 mb-3">
                                    <label class="small mb-1" for="cate_id">Blog Category <span class="text-danger">*</span></label>
                                    <select name="cate_id" id="cate_id" class="form-control">
                                        <option value="" >Select a Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}" >{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('cate_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="small mb-1" for="image">Image <span class="text-danger">*</span></label>
                                    <input type="file" class="form-control" id="image" name="image" value="{{old('image')}}">
                                    @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label class="small mb-1" for="title">Blog Title <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
                                    @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="small mb-1" for="slug">Blog Title Slug <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="slug" name="slug" value="{{old('slug')}}">
                                    @error('slug')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label class="small mb-1" for="details">Blog Details</label>
                                    <textarea  id="details" class="form-control editorck" cols="30" rows="3" name="details">{{old('details')}}</textarea>
                                    @error('details')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mt-3">
                                    <div class="form-check">
                                        <input class="form-check-input" name="status" id="status" type="checkbox" >
                                        <label class="form-check-label text-dark" for="status">Hide Blog</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="homepage" id="homepage" type="checkbox" >
                                        <label class="form-check-label text-dark" for="homepage">Show on Hompage</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <!-- Save changes button-->
                                    <button type="submit" class="btn btn-lg btn-block btn-primary mt-3" >Add Blog</button>
                                </div>
                        </div>
                    </div>
             </div>


            </div>
        </form>

    </div>
    <!-- /.container-fluid -->
</div>

@endsection

