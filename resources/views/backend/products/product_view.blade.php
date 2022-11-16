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
                                <h4>Product Page </h4>

                            </div>
                            <div class="card-body">
                                <a href="{{ route('ProductT') }}"><button style="float:right"
                                        class="btn btn-sm btn-info">Create a
                                        Product</button> </a>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Image</th>
                                                <th>Description</th>
                                                <th>Price</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php($i = 1)
                                            @foreach ($products as $item)
                                                <tr>
                                                    <td>{{ $i++ }}</td>
                                                    <td>{{ $item->title }}</td>
                                                    <td><img src="{{ asset('storage/Product/' . $item->image) }}"
                                                            width="70px" alt=""></td>
                                                    <td>{{ $item->description }}</td>
                                                    <td>{{ $item->price }}</td>
                                                    <td style="width: 100px;>                                            ">
                                                        @can('product-edit')
                                                            <a style="padding-inline: 3px;"
                                                                href="{{ url('edit/product/' . $item->id) }}"><button
                                                                    class="btn btn-sm btn-warning"><i
                                                                        class="fa-solid fa-pen-to-square"></i></button></a>
                                                        @endcan
                                                        @can('product-delete')
                                                            <a style="padding-inline: 3px;"
                                                                href="{{ url('delete/product/' . $item->id) }}"><button
                                                                    class="btn btn-sm btn-danger"><i
                                                                        class="fa-solid fa-trash"></i></button></a>
                                                        @endcan
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                    {{ $products->links() }}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
