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
                                <h4>Home Page <span><a href="{{ url('choose') }}"><button
                                                class="btn btn-sm btn-info" style="font-size: 12px; float:right">Create a New
                                                Page</button></a>
                                    </span></h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Page Name</th>
                                                <th class="text-right">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php($i = 1)
                                            @foreach ($home->take(1) as $item)
                                                <tr>
                                                    <td>{{ $i++ }}</td>
                                                    <td>Home Page</td>

                                                    <td class="pull-right">
                                                        <a href="{{ url('/') }}"><button
                                                                class="btn btn-sm btn-outline-primary"><i class="fa fa-eye"
                                                                    aria-hidden="true"></i>
                                                            </button></a>

                                                        <a href="{{ url('pagebuilder/home/'.$item->id) }}"><button class="btn btn-sm  btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="card-title pt-3">
                                <h4>All Brand Page</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Brand</th>
                                                <th class="text-right">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php($i = 1)
                                            @foreach ($brands as $item)
                                                <tr>
                                                    <td>{{ $i++ }}</td>
                                                    <td>{{ $item->brand }}</td>

                                                    <td class="pull-right">
                                                        <a href="{{ url('hardware/' . $item->brand) }}"><button
                                                                class="btn btn-sm btn-outline-primary"><i class="fa fa-eye"
                                                                    aria-hidden="true"></i>
                                                            </button></a>

                                                            <a href="{{ url('pagebuilder/brand/delete/' . $item->id) }}"><button
                                                                class="btn btn-sm  btn-outline-danger"><i
                                                                    class="fa fa-trash" aria-hidden="true"></i></button></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                            <div class="card-title pt-3">
                                <h4>All Category Page</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Category</th>
                                                <th class="text-right">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php($i = 1)
                                            @foreach ($categories as $item)
                                                <tr>
                                                    <td>{{ $i++ }}</td>
                                                    <td>{{ $item->category }}</td>

                                                    <td class="pull-right">
                                                        <a href="{{ url('category.html/' . $item->category) }}"><button
                                                                class="btn btn-sm btn-outline-primary"><i class="fa fa-eye"
                                                                    aria-hidden="true"></i>
                                                            </button></a>
                                                        <a href="{{ url('pagebuilder/category/delete/' . $item->id) }}"><button
                                                                class="btn btn-sm  btn-outline-danger"><i
                                                                    class="fa fa-trash" aria-hidden="true"></i></button></a>
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

    <style>
        tr {
            border-bottom: 1px solid #E7E7E7;
        }

        td {
            border: none;
        }
    </style>
@endsection
