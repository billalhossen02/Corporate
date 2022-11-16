@extends('backend.master')
@section('content')
    <!-- /# Sidebar -->
    @include('backend.sidebar');
    <!-- /# Header -->
    @include('backend.header');

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <!--/# row-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>Catagory Page</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <a href="{{ route('CategoriesT') }}"><button class="btn btn-sm btn-info"
                                                style="float:right">Create a Category</button></a>
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Category</th>
                                                <th>Sub Category</th>
                                                <th>Sub Sub Category</th>
                                                <th style="width:90px;">Image</th>
                                                {{-- <th style="width:125px; ">Action</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php($i = 1)
                                            @foreach ($categories as $item)
                                                <tr>
                                                    <td>{{ $i++ }}</td>
                                                    <td>{{ $item->category }}</td>
                                                    <td>{{ $item->sub_category }}</td>
                                                    <td>{{ $item->sub_sub_category }}</td>
                                                    <td><img src="{{ asset('storage/Category/' . $item->sub_img) }}"
                                                            width="40px" alt=""></td>
                                                    {{-- <td>
                                                <a href="{{ url('edit/category/'.$item->id) }}"><button class="btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></button></a>
                                                <a href="{{ url('delete/category/'.$item->id) }}"> <button class="btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button></a>
                                            </td> --}}
                                                </tr>
                                            @endforeach


                                        </tbody>

                                    </table>
                                    <br>
                                    <div class="pull-right">{{ $categories->links() }}</div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
