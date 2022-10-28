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
                                <h4>Edit Product</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form class="row" action="{{ url('update/product/'.$data->id) }}" method="POST" enctype="multipart/form-data">
                                       @csrf
                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <label>Name</label>
                                            <input type="name" name="title" class="form-control" value="{{ $data->title }}">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <label>Price</label>
                                            <input type="number" name="price" class="form-control" value="{{ $data->price }}">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <label>Description</label>
                                            <textarea class="form-control" name="description" rows="5" value="{{ $data->description }}" placeholder="{{ $data->description }}"></textarea>
                                        </div>
                                      
                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <label>Category</label>
                                            <select name="category" class="form-control">
                                                <option>{{ $data->category }}</option>
                                                @foreach ($categories as $item)
                                                <option value="{{ $item->title }}">{{ $item->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        
                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <label>Brands</label>
                                            <select name="brand" class="form-control">
                                                <option>{{ $data->brand }}</option>
                                                @foreach ($brands as $item)
                                                <option value="{{ $item->title }}">{{ $item->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <label>Industries</label>
                                            <select name="industry" class="form-control">
                                                <option>{{ $data->industry }}</option>
                                                @foreach ($industries as $item)
                                                <option value="{{ $item->title }}">{{ $item->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <img src="{{ asset('storage/Product/'.$data->image) }}" width="400px" alt="">
                                            <input type="file" name="image" class="form-control" required>
                                        </div>
                                     </div>
                                    <button type="submit" class="btn btn-info ml-2">Update Product</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
        </div>
    </div>
</div>
   
@endsection

    
    

