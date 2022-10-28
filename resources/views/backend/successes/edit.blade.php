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
                            <h4>Edit: {{$blog->title}}</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form method="POST" action="/blogs/{{$blog->id}}" class="row" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control"
                                            placeholder="Enter your solution name..." value="{{$blog->title}}" /> 
                                        
                                        @error('title')
                                        <p>{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <label>Description</label>
                                        <input type="text" class="form-control" name="description"
                                            placeholder="Prodcut description..."
                                            rows="5" value="{{$blog->description}}">

                                        @error('description')
                                        <p>{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <label>Heading 1</label>
                                        <input type="text" class="form-control" name="header1" placeholder="Enter your heading here"
                                            rows="5" value="{{$blog->header1}}"></textarea>
                                        
                                        @error('header1')
                                        <p>{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <label>Heading 2</label>
                                        <input type="text" class="form-control" name="header2" placeholder="Enter your sub heading here"
                                            rows="5" value="{{$blog->header2}}"></textarea>

                                        @error('header2')
                                        <p>{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <label>Image</label> 
                                        <input type="file" class="form-control" placeholder="Upload your image" name="logo">

                                        <img src="{{$blog->logo ? asset ('storage/' . $blog->logo) : asset('assets/frontend/image/Logo/logo.png')}}" alt="">

                                            {{-- accept=".png" --}}
                                            @error('logo')
                                            <p>{{$message}}</p>
                                            @enderror
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <label>Tag</label> 
                                        <input type="text" class="form-control" placeholder="Enter your tag name..." name="tags" value="{{$blog->tags}}" />

                                        @error('tags')
                                        <p>{{$message}}</p>
                                        @enderror
                                    </div>

                                
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <button type="submit" class="btn btn-info ml-3">Submit</button>
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