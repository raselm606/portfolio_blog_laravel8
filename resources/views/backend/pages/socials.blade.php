@extends('backend.layouts.app')
@section('main-content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Socials</h1>

        <div class="row">

            <div class="col-lg-12">
                @include('backend.layouts.partials.display')
            </div>

        </div>

        <form action="{{ route('admin.socials') }}" method="post" enctype="multipart/form-data">
            @csrf

            <!-- Form Row -->
            <div class="card mb-4">
                <div class="card-header">Socials Settings</div>
                <div class="card-body">
                    <div class="row gx-3 mb-3">

                        <div class="col-md-6 mb-3">
                            <label class="small mb-1" for="facebook">Facebook</label>
                            <input type="text" class="form-control" id="facebook" name="facebook" value="{{ $social_data->facebook }}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="small mb-1" for="Twitter">Twitter</label>
                            <input type="text" class="form-control" id="Twitter" name="Twitter" value="{{ $social_data->Twitter }}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="small mb-1" for="linkedin">Linkedin</label>
                            <input type="text" class="form-control" id="linkedin" name="linkedin" value="{{ $social_data->linkedin }}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="small mb-1" for="instagram">Instagram</label>
                            <input type="text" class="form-control" id="instagram" name="instagram" value="{{ $social_data->instagram }}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="small mb-1" for="youtube">Youtube</label>
                            <input type="text" class="form-control" id="youtube" name="youtube" value="{{ $social_data->youtube }}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="small mb-1" for="researchgate">ResearchGate</label>
                            <input type="text" class="form-control" id="researchgate" name="researchgate" value="{{ $social_data->researchgate }}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="small mb-1" for="googlescholar">Google Scholar</label>
                            <input type="text" class="form-control" id="googlescholar" name="googlescholar" value="{{ $social_data->googlescholar }}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="small mb-1" for="reddit">Reddit</label>
                            <input type="text" class="form-control" id="reddit" name="reddit" value="{{ $social_data->reddit }}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="small mb-1" for="medium">Medium</label>
                            <input type="text" class="form-control" id="medium" name="Medium" value="{{ $social_data->Medium }}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="small mb-1" for="pinterest">Pinterest</label>
                            <input type="text" class="form-control" id="pinterest" name="pinterest" value="{{ $social_data->pinterest }}">
                        </div>

                        <!-- Add more fields as needed for your settings -->

                        <div class="col-md-2">
                            <!-- Save changes button -->
                            <button type="submit" class="btn btn-lg btn-block btn-primary mt-3">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- /.container-fluid -->
@endsection
