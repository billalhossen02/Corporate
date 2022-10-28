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
                                <h4>Brand Page </h4>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Image</th>
                                                <th style="width:125px; ">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php($i = 1)
                                            @foreach ($brands as $item)
                                                <tr>
                                                    <td>{{ $i++ }}</td>
                                                    <td>{{ $item->title }}</td>
                                                    <td><img src="{{ asset('storage/Brand/' . $item->image) }}" width="20px"
                                                            alt=""></td>
                                                    <td>
                                                        <a href="{{ url('edit/brand/' . $item->id) }}"><button
                                                                class="btn-sm btn-warning"><i
                                                                    class="fa-solid fa-pen-to-square"></i></button></a>
                                                        <a href="{{ url('delete/brand/' . $item->id) }}"><button
                                                                class="btn-sm btn-danger"><i
                                                                    class="fa-solid fa-trash"></i></button></a>
                                                    </td>
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
