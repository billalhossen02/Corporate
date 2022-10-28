@extends('backend.master')
@section('content')
    <!-- /# Sidebar -->
    @include('backend.sidebar');
    <!-- /# Header -->
    @include('backend.header');
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">

                <!-- /# row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>Create Product</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form class="row" action="{{ route('addProduct') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <label>Name</label>
                                            <input type="text" name="title" class="form-control"
                                                placeholder="Enter your product name..." required>
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <label>Price</label>
                                            <input type="number" name="price" class="form-control"
                                                placeholder="Enter your price" required>
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <label>Description</label>
                                            <textarea class="form-control" name="description" placeholder="Prodcut description..." rows="5" required></textarea>
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <label>Image</label>
                                            <input type="file" name="image" class="form-control"
                                                placeholder="Upload your image" required>
                                        </div>


                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <label>Product Type</label>
                                            <select name="product_type" class="form-control">
                                                <option>Select Product Type</option>
                                                <option value="new">New</option>
                                                <option value="deal">Techdeal</option>
                                                <option value="refurbished">Refurbished</option>
                                            </select>
                                        </div>


                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <label>Category</label>
                                            <select name="category" class="form-control dynamic2" id="category"
                                                data-dependent="sub_category">
                                                <option>Select Category</option>
                                                @foreach ($categories as $item)
                                                    <option value="{{ $item->category }}">{{ $item->category }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <label>Sub Category</label>
                                            <select name="sub_category" id="sub_category" class="form-control dynamic2"
                                                data-dependent="sub_sub_category" required>
                                                <option>Select Sub Category</option>

                                            </select>
                                        </div>

                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <label>Sub Sub Category</label>
                                            <select name="sub_sub_category" id="sub_sub_category"
                                                class="form-control dynamic2" data-dependent="sub_sub_sub_category">
                                                <option>Select Sub Sub Category</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <label>Sub Sub Sub Category</label>
                                            <select name="sub_sub_sub_category" id="sub_sub_sub_category"
                                                class="form-control">
                                                <option>Select Sub Sub Sub Category</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <label>Brands</label>
                                            <select name="brand" class="form-control">
                                                <option>Select Brand</option>
                                                @foreach ($brands as $item)
                                                    <option value="{{ $item->title }}">{{ $item->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <label>Industries</label>
                                            <select name="industry" class="form-control">
                                                <option>Select Industry</option>
                                                @foreach ($industries as $item)
                                                    <option value="{{ $item->title }}">{{ $item->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                </div>
                                <button type="submit" class="btn btn-info ml-2">Add Product</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {

            $('.dynamic2').change(function() {
                if ($(this).val() != '') {
                    var select = $(this).attr("id");
                    var value = $(this).val();
                    var dependent = $(this).data('dependent');
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url: "{{ route('dynamicdependent.fetch2') }}",
                        method: "POST",
                        data: {
                            select: select,
                            value: value,
                            _token: _token,
                            dependent: dependent
                        },
                        success: function(result) {
                            $('#' + dependent).html(result);
                        }

                    })
                }
            });

            $('#category').change(function() {
                $('#sub_category').val('');
            });

            $('#sub_category').change(function() {
                $('#sub_sub_category').val('');
            });


        });
    </script>
@endsection
