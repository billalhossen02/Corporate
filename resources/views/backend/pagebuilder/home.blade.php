@extends('backend.master')

@section('content')
    @include('backend.sidebar')

    @include('backend.header');

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">

                        
                    <form action="{{ route('addPageHome') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-12" style="border-bottom: 1px solid black">
                        </div>
                        <div class="col-12" style="border-bottom: 1px solid black;margin-top:-10px">
                            <h6 style="background:white; width:68px; margin:auto">Section 1</h6>
                            <div class="row">
                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                    <label>Banner1</label>
                                    <input type="file" name="banner1" class="form-control"
                                        placeholder="Upload your banner" required>
                                </div>

                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                    <label>Banner2</label>
                                    <input type="file" name="banner2" class="form-control"
                                        placeholder="Upload your banner" required>
                                </div>

                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                    <label>Banner3</label>
                                    <input type="file" name="banner3" class="form-control"
                                        placeholder="Upload your banner" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-12" style="border-bottom: 1px solid black;margin-top:-10px">
                            <h6 style="background:white; width:68px; margin:auto">Section 2</h6>
                            <div class="row">
                                <!-- /# row -->
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="card-body col-4">
                                            <div class="basic-form">
                                                    <label>Story 1</label>
                                                    <div class="form-group row">
                                                        <div class="form-group-inner">
                                                            <select name="story1" class="form-control" id="select1">
                                                                <option></option>
                                                                @foreach ($data as $item)
                                                                    <option value="{{ $item->title }}">{{ $item->title }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>

                                        <div class="card-body col-4">
                                            <div class="basic-form">
                                                    <label>Story 2</label>
                                                    <div class="form-group row">
                                                        <div class="form-group-inner">
                                                            <select name="story2" class="form-control" id="select2">
                                                                <option></option>
                                                                @foreach ($data as $item)
                                                                    <option value="{{ $item->title }}">{{ $item->title }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>

                                        <div class="card-body col-4">
                                            <div class="basic-form">
                                                    <label>Story 3</label>
                                                    <div class="form-group row">
                                                        <div class="form-group-inner">
                                                            <select name="story3" class="form-control" id="select3">
                                                                <option></option>
                                                                @foreach ($data as $item)
                                                                    <option value="{{ $item->title }}">
                                                                        {{ $item->title }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="card-body col-4">
                                            <div class="basic-form">
                                                    <label>Story 4</label>
                                                    <div class="form-group row">
                                                        <div class="form-group-inner">
                                                            <select name="story4" class="form-control" id="select4">
                                                                <option></option>
                                                                @foreach ($data as $item)
                                                                    <option value="{{ $item->title }}">
                                                                        {{ $item->title }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>

                                        <div class="card-body col-4">
                                            <div class="basic-form">
                                                    <div class="form-group">
                                                        <div class="form-group-inner">
                                                            <label>Story 5</label>
                                                            <select name="story5" class="form-control" id="select5">
                                                                <option></option>
                                                                @foreach ($data as $item)
                                                                    <option value="{{ $item->title }}">
                                                                        {{ $item->title }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                             </div>
                                        </div>
                                        <div class="col-4"></div>
                                    </div>

                                    </div>
                                </div>
                            </div>

                        <div class="col-12" style="border-bottom: 1px solid black;margin-top:-10px">
                            <h6 style="background:white; width:68px; margin:auto">Section 3</h6>
                            <div class="row pt-3 pb-3">
                               
                                <div class="form-group col-3">
                                    <div class="form-group-inner">
                                        <label>Solution 1</label>
                                        <select name="solution1" class="form-control" id="select6">
                                            <option></option>
                                            @foreach ($blogs as $item)
                                                <option value="{{ $item->title }}">{{ $item->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-3">
                                    <div class="form-group-inner">
                                        <label>Solution 2</label>
                                        <select name="solution2" class="form-control" id="select7">
                                            <option></option>
                                            @foreach ($blogs as $item)
                                                <option value="{{ $item->title }}">{{ $item->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-3">
                                    <div class="form-group-inner">
                                        <label>Solution 3</label>
                                        <select name="solution3" class="form-control" id="select8">
                                            <option></option>
                                            @foreach ($blogs as $item)
                                                <option value="{{ $item->title }}">{{ $item->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-3">
                                    <div class="form-group-inner">
                                        <label>Solution 4</label>
                                        <select name="solution4" class="form-control" id="select9">
                                            <option></option>
                                            @foreach ($blogs as $item)
                                                <option value="{{ $item->title }}">{{ $item->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <div class="col-12" style="border-bottom: 1px solid black;margin-top:-10px">
                            <h6 style="background:white; width:68px; margin:auto">Section 6</h6>
                            <div class="row pt-3 pb-3">
                                <div class="form-group col-4">
                                    <div class="form-group-inner">
                                        <label>Success 1</label>
                                        <select name="success1" class="form-control" id="select10">
                                            <option></option>
                                            @foreach ($successes as $item)
                                                <option value="{{ $item->title }}">{{ $item->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-4">
                                    <div class="form-group-inner">
                                        <label>Success 2</label>
                                        <select name="success2" class="form-control" id="select11">
                                            <option></option>
                                            @foreach ($successes as $item)
                                                <option value="{{ $item->title }}">{{ $item->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-4">
                                    <div class="form-group-inner">
                                        <label>Success 3</label>
                                        <select name="success3" class="form-control" id="select12">
                                            <option></option>
                                            @foreach ($successes as $item)
                                                <option value="{{ $item->title }}">{{ $item->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                        <button type="submit" class="btn btn-sm btn-success pull-right">Add Page</button>
                     </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<script type="text/javascript">
    $("#select1").select2({
        placeholder: "Select a Client Experience",
        allowClear: true
    });
    $("#select2").select2({
        placeholder: "Select a Client Experience",
        allowClear: true
    });
    $("#select3").select2({
        placeholder: "Select a Client Experience",
        allowClear: true
    });
    $("#select4").select2({
        placeholder: "Select a Client Experience",
        allowClear: true
    });
    $("#select5").select2({
        placeholder: "Select a Client Experience",
        allowClear: true
    });
    $("#select6").select2({
        placeholder: "Select a Solution",
        allowClear: true
    });
    $("#select7").select2({
        placeholder: "Select a Solution",
        allowClear: true
    });
    $("#select8").select2({
        placeholder: "Select a Solution",
        allowClear: true
    });
    $("#select9").select2({
        placeholder: "Select a Solution",
        allowClear: true
    });
    $("#select10").select2({
        placeholder: "Select a Success Story",
        allowClear: true
    });
    $("#select11").select2({
        placeholder: "Select a Success Story",
        allowClear: true
    });
    $("#select12").select2({
        placeholder: "Select a Success Story",
        allowClear: true
    });
</script>
@endsection
