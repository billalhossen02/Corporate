@extends('backend.master')
@section('content')

      <!-- /# Sidebar -->
   @include('backend.sidebar');
   <!-- /# Header -->
   @include('backend.header');
   
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
               
                    <!-- /# row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Edit Brand</h4>
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form class="" action="{{ url('update/brand/'.$data->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <label>Name</label>
                                                <input type="text" name="title" value="{{ $data->title }}"  class="form-control">
                                            </div>
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <img src="{{ asset('storage/Brand/'.$data->image) }}" width="400px" alt="">
                                                <input type="file" name="image" class="form-control" placeholder="Upload your image" required>
                                            </div>
                                            <div class="form-group col-lg-2 col-md-2 col-sm-12">
                                                <label>Category</label>
                                                <select name="category" class="form-control">
                                                    <option value="{{ $data->category }}">{{ $data->category }}</option>
                                                    <option value="Top">Top</option>
                                                    <option value="Featured">Featured</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-info ml-3">Update Brand</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
            </div>
        </div>
    </div>
@endsection
