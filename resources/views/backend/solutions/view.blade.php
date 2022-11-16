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
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-title">
                                <h4>Solution Page </h4>

                            </div>
                            <div class="card-body">
                                <a href="{{ route('create_solution') }}"><button style="float: right"
                                        class="btn btn-info">Create a Solution</button> </a>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th>
                                                {{-- <th>Image</th> --}}
                                                <th style="width: 140px">Action</th>
                                                {{-- <th>Description</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @foreach ($blogs ?? '' as $blog) --}}
                                            @foreach ($solutions as $solution)
                                                <tr>
                                                    <td>{{ $solution->id }}</td>
                                                    <td>{{ $solution->title }}</td>
                                                    <td>
                                                        <a href="{{ url('solutions/' . $solution->id) }}">
                                                            <button class="btn-sm btn-warning">Edit</button>
                                                        </a>
                                                        <a href="{{ url('delete/solutions/' . $solution->id) }}">
                                                            <button class="btn-sm btn-danger">Delete</button>
                                                        </a>

                                                        </form>
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
