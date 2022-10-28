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
                            <div class="basic-form">
                                <form method="POST" action="/blogs/{{$blog->id}}" class="row" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group col-lg-12 col-md-6 col-sm-12">
                                        <label>Description</label>
                                        {{-- <input type="text" class="form-control" name="description"
                                            placeholder="Prodcut description..."
                                            rows="5" value="{{$blog->description}}"> --}}
                                        {{-- <textarea name="description" class="ckeditor form-control" id="ckeditor" cols="5" rows="5"> --}}
                                        <textarea name="description" class="form-control" id="summary-ckeditor" cols="5" rows="5">
                                            {{$blog->description}}
                                        </textarea>


                                        @error('description')
                                        <p>{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control"
                                            placeholder="Enter your solution name..." value="{{$blog->title}}" /> 
                                        
                                        @error('title')
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
                                        <label>Image</label> 
                                        <input type="file" class="form-control" placeholder="Upload your image" name="logo">

                                        <img class="img-fluid" src="{{$blog->logo ? asset ('storage/' . $blog->logo) : asset('assets/frontend/image/Logo/logo.png')}}" alt="">

                                            {{-- accept=".png" --}}
                                            @error('logo')
                                            <p>{{$message}}</p>
                                            @enderror
                                    </div>
                                    {{-- Industries
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <label>Industry</label>
                                        <input type="text" class="form-control" name="industries" placeholder="Enter your industry here"
                                            rows="5" value="{{$blog->industries}}"></textarea>
                                        
                                        @error('industries')
                                        <p>{{$message}}</p>
                                        @enderror
                                    </div>
                                    Solutions
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <label>Solution</label>
                                        <input type="text" class="form-control" name="solutions" placeholder="Enter your solution here"
                                            rows="5" value="{{$blog->solutions}}"></textarea>
                                        
                                        @error('solutions')
                                        <p>{{$message}}</p>
                                        @enderror
                                    </div> --}}

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <label>Solution </label>
                                         <p>
                                             <select name="solutions" id="" class="form-control">
                                                 <option>Select Solution</option>
                                            @foreach($solutions as $solution)
                                                <option value="{{$solution->title}}">{{$solution->title}}</option>
                                            @endforeach 
                                            </select>
                                        </p>  
                                        @error('solution')
                                        <p>{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <label>Industry </label>
                                         <p>
                                             <select name="industries" id="" class="form-control">
                                                 <option>Select Industries</option>
                                            @foreach($industries as $industry)
                                                <option value="{{$industry->title}}">{{$industry->title}}</option>
                                            @endforeach 
                                            </select>
                                        </p>  
                                        @error('industry')
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