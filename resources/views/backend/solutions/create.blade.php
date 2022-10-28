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
                                <h4>Create Solution</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="POST" action="{{ route('store_solution') }}" class="row" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <label>Title</label>
                                            <input name="title" type="name" class="form-control" placeholder="Enter your solution name...">
                                            @error('title')
                                            <p>{{$message}}</p>
                                            @enderror
                                        </div>
                                        {{-- <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <label>Image</label>
                                            <input type="file" class="form-control" placeholder="Upload your image" accept=".png">
                                        </div> --}}
                                        <!--
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <label>Tag</label>
                                            <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>
                                        -->
                                    </div>

                                        <button type="submit" class="btn btn-info ml-3">Add Solution</button>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
                
        </div>
    </div>
   </div>
   
@endsection

  
