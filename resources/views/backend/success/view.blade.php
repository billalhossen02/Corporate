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
                            <h4>Solution Page </h4>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @foreach ($blogs ?? '' as $blog) --}}
                                        @foreach ($successes as $success)
                                        <tr>
                                            <td>{{ $success->title}}</td>
                                            <td>{{ $success->description }}</td>
                                            <td>
                                                <a href="{{ url('/successes/edit/'.$success->id) }}">
                                                    <button class="btn-sm btn-warning">Edit</button>
                                                </a>
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