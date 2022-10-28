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
                            <h4>Edit: {{$success->title}}</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form method="POST" action={{ url('/successes/'.$success->id) }}" class="row" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control"
                                            placeholder="Enter your solution name..." value="{{$success->title}}" /> 
                                        
                                        @error('title')
                                        <p>{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <label>Description</label>
                                        <input type="text" class="form-control" name="description"
                                            placeholder="Description"
                                            rows="5" value="{{$success->description}}">

                                        @error('description')
                                        <p>{{$message}}</p>
                                        @enderror
                                    </div>                                
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <button type="submit" class="btn btn-info">Submit</button>
                                </div>
                                
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