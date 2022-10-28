@extends('backend.master')
@section('content')

<style>
    .form-group-inner{
        max-width: 380px;
        width: 100%
    }
</style>
      <!-- /# Sidebar -->
   @include('backend.sidebar');
   <!-- /# Header -->
   @include('backend.header');
   
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
               
                    <!-- /# row -->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Select data for Client Widget</h4>
                                </div>

                                <div class="row">
                                <div class="card-body col-6">
                                    <div class="basic-form">
                                        <form class="" action="{{ route('addWidget') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <label>Story 1</label>
                                            <div class="form-group row"> 
                                             <div class="form-group-inner">
                                                <select name="title" class="form-control">
                                                    <option>{{ $data1[0]->title }}</option>
                                                    @foreach ($data as $item)
                                                    <option value="{{ $item->title }}">{{ $item->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="">
                                                <input type="hidden" value="1" name="id">
                                                <button type="submit" class="btn btn-info ml-2 mt-2">Update</button>
                                            </div>
                                               
                                            </div>
                                            </div>
                                            
                                        </form>
                                </div>

                                <div class="card-body col-6">
                                    <div class="basic-form">
                                        <form class="" action="{{ route('addWidget') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <label>Story 2</label>
                                            <div class="form-group row"> 
                                             <div class="form-group-inner">
                                                <select name="title" class="form-control">
                                                    <option>{{ $data1[1]->title }}</option>
                                                    @foreach ($data as $item)
                                                    <option value="{{ $item->title }}">{{ $item->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="">
                                                <input type="hidden" value="2" name="id">
                                                <button type="submit" class="btn btn-info ml-2 mt-2">Update</button>
                                            </div>
                                               
                                            </div>
                                            </div>
                                            
                                        </form>
                                </div>
                            </div>

                            <div class="row">
                                <div class="card-body col-6">
                                    <div class="basic-form">
                                        <form class="" action="{{ route('addWidget') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <label>Story 3</label>
                                            <div class="form-group row"> 
                                             <div class="form-group-inner">
                                                <select name="title" class="form-control">
                                                    <option>{{ $data1[2]->title }}</option>
                                                    @foreach ($data as $item)
                                                    <option value="{{ $item->title }}">{{ $item->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="">
                                                <input type="hidden" value="3" name="id">
                                                <button type="submit" class="btn btn-info ml-2 mt-2">Update</button>
                                            </div>
                                               
                                            </div>
                                            </div>
                                            
                                        </form>
                                </div>

                                <div class="card-body col-6">
                                    <div class="basic-form">
                                        <form class="" action="{{ route('addWidget') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <label>Story 4</label>
                                            <div class="form-group row"> 
                                             <div class="form-group-inner">
                                                <select name="title" class="form-control">
                                                    <option>{{ $data1[3]->title }}</option>
                                                    @foreach ($data as $item)
                                                    <option value="{{ $item->title }}">{{ $item->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="">
                                                <input type="hidden" value="4" name="id">
                                                <button type="submit" class="btn btn-info ml-2 mt-2">Update</button>
                                            </div>
                                               
                                            </div>
                                            </div>
                                            
                                        </form>
                                </div>
                            </div>

                            <div class="row">
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form class="" action="{{ route('addWidget') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <label>Story 5</label>
                                            <div class="form-group row"> 
                                             <div class="form-group-inner">
                                                <select name="title" class="form-control">
                                                    <option>{{ $data1[4]->title }}</option>
                                                    @foreach ($data as $item)
                                                    <option value="{{ $item->title }}">{{ $item->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="">
                                                <input type="hidden" value="5" name="id">
                                                <button type="submit" class="btn btn-info ml-2 mt-2">Update</button>
                                            </div>
                                               
                                            </div>
                                            </div>
                                            
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
            </div>
        </div>
    </div>

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <!--/# row-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>All Client Experience </h4>
                                
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Image</th>
                                                <th>Description</th>
                                                {{-- <th>Action</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php($i=1)
                                            @foreach ($data as $item)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $item->title }}</td>
                                                <td><img src="{{ asset('storage/Client/'.$item->image) }}" width="40px" alt=""></td>
                                                <td>{{ $item->description }}</td>
                                                {{-- <td>
                                                    <a href="{{ url('edit/industry/'.$item->id) }}"><button class="btn-sm btn-warning">Edit</button></a>
                                                    <a href="{{ url('delete/industry/'.$item->id) }}"><button class="btn-sm btn-danger">Delete</button></a>
                                                </td> --}}
                                            </tr>
                                            @endforeach
                                         
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       </div>
       
@endsection
