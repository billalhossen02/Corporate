@extends('frontend.master')

@section('content')
    @include('frontend.header')

    <!-- banner single page start -->
    <section class="banner_single_page" style="background-image:url('{{ asset('storage/Banner/' . $data->banner) }}');
    ">
        <div class="container">
            <div class="single_banner_content">
                <!-- image -->
                <div class="single_banner_image">
                    <img src="" alt="">
                </div>
                <!-- heading -->
                <h1 class="single_banner_heading">{{ $data->h1 }}</h1>
                <p class="single_banner_text">{{ $data->h2 }}</p>
                <div class="single_buttton_wrapper">
                    <form method="GET" action="{{ url('product/filter') }}"><button type="submit"
                            class="single_banner_button">
                            <input type="hidden" name="keyword" value="Cables">
                            Browse all {{ $data->category }}</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- network cable -->
    <section class="network_cable section_padding">
        <div class="container">

            <div class="section_title">
                <h3 class="title_top_heading">Display {{ $data->category }}</h3>
            </div>

            <div class="network_cable_wrapper">
                <!-- item -->
                <div class="category_item_inner">
                    <!-- image -->
                    <div class="category_item_image">
                        <img src="{{ asset('storage/Category/' . $data->cat1[0]->sub_sub_sub_img) }}" alt="">
                    </div>
                    <!-- title -->
                    <div class="category_item_title">

                        <form action="{{ url('product/filter') }}" method="GET">
                            <input type="hidden" name="keyword" value="{{ $data->cat1[0]->sub_sub_sub_category }}">
                            <button type="submit"
                                style="border: none; background:none; color:#BE215E">{{ $data->cat1[0]->sub_sub_sub_category }}</button>
                        </form>
                    </div>
                </div>
                <!-- item -->
                <div class="category_item_inner">
                    <!-- image -->
                    <div class="category_item_image">
                        <img src="{{ asset('storage/Category/' . $data->cat2[0]->sub_sub_sub_img) }}" alt="">
                    </div>
                    <!-- title -->
                    <div class="category_item_title">

                        <form action="{{ url('product/filter') }}" method="GET">
                            <input type="hidden" name="keyword" value="{{ $data->cat2[0]->sub_sub_sub_category }}">
                            <button type="submit"
                                style="border: none; background:none; color:#BE215E">{{ $data->cat2[0]->sub_sub_sub_category }}</button>
                        </form>
                    </div>
                </div>
                <!-- item -->
                <div class="category_item_inner">
                    <!-- image -->
                    <div class="category_item_image">
                        <img src="{{ asset('storage/Category/' . $data->cat3[0]->sub_sub_sub_img) }}" alt="">
                    </div>
                    <!-- title -->
                    <div class="category_item_title">
                        <form action="{{ url('product/filter') }}" method="GET">
                            <input type="hidden" name="keyword" value="{{ $data->cat3[0]->sub_sub_sub_category }}">
                            <button type="submit"
                                style="border: none; background:none; color:#BE215E">{{ $data->cat3[0]->sub_sub_sub_category }}</button>
                        </form>
                    </div>
                </div>
                <!-- item -->
                <div class="category_item_inner">
                    <!-- image -->
                    <div class="category_item_image">
                        <img src="{{ asset('storage/Category/' . $data->cat4[0]->sub_sub_sub_img) }}" alt="">
                    </div>
                    <!-- title -->
                    <div class="category_item_title">
                        <form action="{{ url('product/filter') }}" method="GET">
                            <input type="hidden" name="keyword" value="{{ $data->cat4[0]->sub_sub_sub_category }}">
                            <button type="submit"
                                style="border: none; background:none; color:#BE215E">{{ $data->cat4[0]->sub_sub_sub_category }}</button>
                        </form>
                    </div>
                </div>

            </div>

            <div class="category_all_btn">
                <form method="GET" action="{{ url('product/filter') }}"><button type="submit" class="product_button">
                        <input type="hidden" name="keyword" value="Cables">
                        Shop all {{ $data->category }}</button>
                </form>
            </div>

        </div>
    </section>

    <!-- network cable -->
    <section class="network_cable section_padding" style="background: #F7F6F5;">
        <div class="container">

            <div class="section_title">
                <h3 class="title_top_heading">Network {{ $data->category }}</h3>
            </div>

            <div class="network_cable_wrapper">
                <!-- item -->
                <div class="category_item_inner">
                    <!-- image -->
                    <div class="category_item_image">
                        <img src="{{ asset('storage/Category/' . $data->cat5[0]->sub_sub_sub_img) }}" alt="">
                    </div>
                    <!-- title -->
                    <div class="category_item_title">
                        <form action="{{ url('product/filter') }}" method="GET">
                            <input type="hidden" name="keyword" value="{{ $data->cat5[0]->sub_sub_sub_category }}">
                            <button type="submit"
                                style="border: none; background:none; color:#BE215E">{{ $data->cat5[0]->sub_sub_sub_category }}</button>
                        </form>
                    </div>
                </div>
                <!-- item -->
                <div class="category_item_inner">
                    <!-- image -->
                    <div class="category_item_image">
                        <img src="{{ asset('storage/Category/' . $data->cat6[0]->sub_sub_sub_img) }}" alt="">
                    </div>
                    <!-- title -->
                    <div class="category_item_title">
                        <form action="{{ url('product/filter') }}" method="GET">
                            <input type="hidden" name="keyword" value="{{ $data->cat6[0]->sub_sub_sub_category }}">
                            <button type="submit"
                                style="border: none; background:none; color:#BE215E">{{ $data->cat6[0]->sub_sub_sub_category }}</button>
                        </form>
                    </div>
                </div>
                <!-- item -->
                <div class="category_item_inner">
                    <!-- image -->
                    <div class="category_item_image">
                        <img src="{{ asset('storage/Category/' . $data->cat7[0]->sub_sub_sub_img) }}" alt="">
                    </div>
                    <!-- title -->
                    <div class="category_item_title">
                        <form action="{{ url('product/filter') }}" method="GET">
                            <input type="hidden" name="keyword" value="{{ $data->cat7[0]->sub_sub_sub_category }}">
                            <button type="submit"
                                style="border: none; background:none; color:#BE215E">{{ $data->cat7[0]->sub_sub_sub_category }}</button>
                        </form>
                    </div>
                </div>
                <!-- item -->
                <div class="category_item_inner">
                    <!-- image -->
                    <div class="category_item_image">
                        <img src="{{ asset('storage/Category/' . $data->cat8[0]->sub_sub_sub_img) }}" alt="">
                    </div>
                    <!-- title -->
                    <div class="category_item_title">
                        <form action="{{ url('product/filter') }}" method="GET">
                            <input type="hidden" name="keyword" value="{{ $data->cat8[0]->sub_sub_sub_category }}">
                            <button type="submit"
                                style="border: none; background:none; color:#BE215E">{{ $data->cat8[0]->sub_sub_sub_category }}</button>
                        </form>
                    </div>
                </div>

            </div>

            <div class="category_all_btn">
                <form method="GET" action="{{ url('product/filter') }}"><button type="submit"
                        class="product_button">
                        <input type="hidden" name="keyword" value="Cables">
                        Shop all {{ $data->category }}</button>
                </form>
            </div>

        </div>
    </section>

    <!-- network cable -->
    <section class="network_cable section_padding">
        <div class="container">

            <div class="section_title">
                <h3 class="title_top_heading">Adapters</h3>
            </div>

            <div class="network_cable_wrapper">
                <!-- item -->
                <div class="category_item_inner">
                    <!-- image -->
                    <div class="category_item_image">
                        <img src="{{ asset('storage/Category/' . $data->cat9[0]->sub_sub_sub_img) }}" alt="">
                    </div>
                    <!-- title -->
                    <div class="category_item_title">
                        <form action="{{ url('product/filter') }}" method="GET">
                            <input type="hidden" name="keyword" value="{{ $data->cat9[0]->sub_sub_sub_category }}">
                            <button type="submit"
                                style="border: none; background:none; color:#BE215E">{{ $data->cat9[0]->sub_sub_sub_category }}</button>
                        </form>
                    </div>
                </div>
                <!-- item -->
                <div class="category_item_inner">
                    <!-- image -->
                    <div class="category_item_image">
                        <img src="{{ asset('storage/Category/' . $data->cat10[0]->sub_sub_sub_img) }}" alt="">
                    </div>
                    <!-- title -->
                    <div class="category_item_title">
                        <form action="{{ url('product/filter') }}" method="GET">
                            <input type="hidden" name="keyword" value="{{ $data->cat10[0]->sub_sub_sub_category }}">
                            <button type="submit"
                                style="border: none; background:none; color:#BE215E">{{ $data->cat10[0]->sub_sub_sub_category }}</button>
                        </form>
                    </div>
                </div>
                <!-- item -->
                <div class="category_item_inner">
                    <!-- image -->
                    <div class="category_item_image">
                        <img src="{{ asset('storage/Category/' . $data->cat11[0]->sub_sub_sub_img) }}" alt="">
                    </div>
                    <!-- title -->
                    <div class="category_item_title">
                        <form action="{{ url('product/filter') }}" method="GET">
                            <input type="hidden" name="keyword" value="{{ $data->cat11[0]->sub_sub_sub_category }}">
                            <button type="submit"
                                style="border: none; background:none; color:#BE215E">{{ $data->cat11[0]->sub_sub_sub_category }}</button>
                        </form>
                    </div>
                </div>
                <!-- item -->
                <div class="category_item_inner">
                    <!-- image -->
                    <div class="category_item_image">
                        <img src="{{ asset('storage/Category/' . $data->cat12[0]->sub_sub_sub_img) }}" alt="">
                    </div>
                    <!-- title -->
                    <div class="category_item_title">
                        <form action="{{ url('product/filter') }}" method="GET">
                            <input type="hidden" name="keyword" value="{{ $data->cat12[0]->sub_sub_sub_category }}">
                            <button type="submit"
                                style="border: none; background:none; color:#BE215E">{{ $data->cat12[0]->sub_sub_sub_category }}</button>
                        </form>
                    </div>
                </div>

            </div>

            <div class="category_all_btn">
                <form method="GET" action="{{ url('product/filter') }}"><button type="submit"
                        class="product_button">
                        <input type="hidden" name="keyword" value="Cables">
                        Shop all {{ $data->category }}</button>
                </form>
            </div>

        </div>
    </section>

    <section class="popular_product_section section_padding">
        <!-- container -->
        <div class="container">
            <div class="popular_product_section_content">
                <!-- section title -->
                <div class="section_title">
                    <h3 class="title_top_heading">Featured {{ $data->category }}</h3>
                </div>
                <!-- wrapper -->
                <div class="populer_product_slider">

                    <!-- product_item -->
                    @foreach ($featuredCables as $item)
                        <div class="product_item">
                            <!-- image -->
                            <div class="product_item_thumbnail">
                                <img src="{{ asset('storage/Product/' . $item->image) }}" alt="">
                            </div>

                            <!-- product content -->
                            <div class="product_item_content">
                                <a href="" class="product_item_content_name">{{ $item->title }}</a>

                                <!-- price -->
                                <div class="product_item_price">
                                    <span class="price_currency">usd</span>
                                    <span class="price_currency_value">${{ $item->price }}</span>
                                </div>

                                <!-- button -->
                                <form class="myForm">
                                    @csrf
                                    <input type="hidden" value="{{ $item->id }}" name="id" id="id">
                                    <input type="hidden" value="{{ $item->title }}" name="name" id="name">
                                    <input type="hidden" value="{{ $item->price }}" name="price" id="price">
                                    <input type="hidden" value="{{ $item->image }}" name="image" id="image">
                                    <input type="hidden" value="1" min="1" name="quantity" id="quantity">
                                    <button type="submit" class="product_button product_button_change"
                                        data-toggle="modal" id="addToBasket" data-target="#mediumModal"
                                        data-attr="{{ route('modal', ['id' => $item->id]) }}">Add to Basket</button>
                                </form>
                            </div>

                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    <!-- network cable -->
    <section class="network_cable section_padding" style="background: #F7F6F5;">
        <div class="container">

            <div class="section_title">
                <h3 class="title_top_heading">By brand</h3>
            </div>

            <div class="network_cable_wrapper2">

                @foreach ($brands->take(20) as $item)
                    <!-- item -->
                    <div class="category_item_inner">
                        <!-- image -->
                        <div class="category_item_image">
                            <img src="{{ asset('storage/Brand/' . $item->image) }}" alt="">
                        </div>
                        <!-- title -->
                        <div class="category_item_title"><a href="{{ url('hardware', ['brand' => $item->title]) }}">Shop
                                {{ $item->title }}
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>

            <div class="category_all_btn">
                <a href="{{ url('partner.html') }}"><button class="product_button">Shop all Brand </button></a>
            </div>

        </div>
    </section>

    <!-- network cable -->
    <section class="network_cable section_padding">
        <div class="container">

            <div class="section_title">
                <h3 class="title_top_heading">Storage {{ $data->category }}</h3>
            </div>

            <div class="network_cable_wrapper">
                <!-- item -->
                <div class="category_item_inner">
                    <!-- image -->
                    <div class="category_item_image">
                        <img src="{{ asset('storage/Category/' . $data->cat13[0]->sub_sub_sub_img) }}" alt="">
                    </div>
                    <!-- title -->
                    <div class="category_item_title">
                        <form action="{{ url('product/filter') }}" method="GET">
                            <input type="hidden" name="keyword" value="{{ $data->cat13[0]->sub_sub_sub_category }}">
                            <button type="submit"
                                style="border: none; background:none; color:#BE215E">{{ $data->cat13[0]->sub_sub_sub_category }}</button>
                        </form>
                    </div>
                </div>
                <!-- item -->
                <div class="category_item_inner">
                    <!-- image -->
                    <div class="category_item_image">
                        <img src="{{ asset('storage/Category/' . $data->cat14[0]->sub_sub_sub_img) }}" alt="">
                    </div>
                    <!-- title -->
                    <div class="category_item_title">
                        <form action="{{ url('product/filter') }}" method="GET">
                            <input type="hidden" name="keyword" value="{{ $data->cat14[0]->sub_sub_sub_category }}">
                            <button type="submit"
                                style="border: none; background:none; color:#BE215E">{{ $data->cat14[0]->sub_sub_sub_category }}</button>
                        </form>
                    </div>
                </div>
                <!-- item -->
                <div class="category_item_inner">
                    <!-- image -->
                    <div class="category_item_image">
                        <img src="{{ asset('storage/Category/' . $data->cat15[0]->sub_sub_sub_img) }}" alt="">
                    </div>
                    <!-- title -->
                    <div class="category_item_title">
                        <form action="{{ url('product/filter') }}" method="GET">
                            <input type="hidden" name="keyword" value="{{ $data->cat15[0]->sub_sub_sub_category }}">
                            <button type="submit"
                                style="border: none; background:none; color:#BE215E">{{ $data->cat15[0]->sub_sub_sub_category }}</button>
                        </form>
                    </div>
                </div>
                <!-- item -->
                <div class="category_item_inner">
                    <!-- image -->
                    <div class="category_item_image">
                        <img src="{{ asset('storage/Category/' . $data->cat16[0]->sub_sub_sub_img) }}" alt="">
                    </div>
                    <!-- title -->
                    <div class="category_item_title">
                        <form action="{{ url('product/filter') }}" method="GET">
                            <input type="hidden" name="keyword" value="{{ $data->cat16[0]->sub_sub_sub_category }}">
                            <button type="submit"
                                style="border: none; background:none; color:#BE215E">{{ $data->cat16[0]->sub_sub_sub_category }}</button>
                        </form>
                    </div>
                </div>

            </div>

            <div class="category_all_btn">
                <form method="GET" action="{{ url('product/filter') }}"><button type="submit"
                        class="product_button">
                        <input type="hidden" name="keyword" value="Cables">
                        Shop all {{ $data->category }}</button>
                </form>
            </div>

        </div>
    </section>

    <!-- network cable -->
    <section class="network_cable section_padding" style="background: #F7F6F5;">
        <div class="container">

            <div class="section_title">
                <h3 class="title_top_heading">Power {{ $data->category }}</h3>
            </div>

            <div class="network_cable_wrapper">
                <!-- item -->
                <div class="category_item_inner">
                    <!-- image -->
                    <div class="category_item_image">
                        <img src="{{ asset('storage/Category/' . $data->cat17[0]->sub_sub_sub_img) }}" alt="">
                    </div>
                    <!-- title -->
                    <div class="category_item_title">
                        <form action="{{ url('product/filter') }}" method="GET">
                            <input type="hidden" name="keyword" value="{{ $data->cat17[0]->sub_sub_sub_category }}">
                            <button type="submit"
                                style="border: none; background:none; color:#BE215E">{{ $data->cat17[0]->sub_sub_sub_category }}</button>
                        </form>
                    </div>
                </div>
                <!-- item -->
                <div class="category_item_inner">
                    <!-- image -->
                    <div class="category_item_image">
                        <img src="{{ asset('storage/Category/' . $data->cat18[0]->sub_sub_sub_img) }}" alt="">
                    </div>
                    <!-- title -->
                    <div class="category_item_title">
                        <form action="{{ url('product/filter') }}" method="GET">
                            <input type="hidden" name="keyword" value="{{ $data->cat18[0]->sub_sub_sub_category }}">
                            <button type="submit"
                                style="border: none; background:none; color:#BE215E">{{ $data->cat18[0]->sub_sub_sub_category }}</button>
                        </form>
                    </div>
                </div>
                <!-- item -->
                <div class="category_item_inner">
                    <!-- image -->
                    <div class="category_item_image">
                        <img src="{{ asset('storage/Category/' . $data->cat19[0]->sub_sub_sub_img) }}" alt="">
                    </div>
                    <!-- title -->
                    <div class="category_item_title">
                        <form action="{{ url('product/filter') }}" method="GET">
                            <input type="hidden" name="keyword" value="{{ $data->cat19[0]->sub_sub_sub_category }}">
                            <button type="submit"
                                style="border: none; background:none; color:#BE215E">{{ $data->cat19[0]->sub_sub_sub_category }}</button>
                        </form>
                    </div>
                </div>
                <!-- item -->
                <div class="category_item_inner">
                    <!-- image -->
                    <div class="category_item_image">
                        <img src="{{ asset('storage/Category/' . $data->cat20[0]->sub_sub_sub_img) }}" alt="">
                    </div>
                    <!-- title -->
                    <div class="category_item_title">
                        <form action="{{ url('product/filter') }}" method="GET">
                            <input type="hidden" name="keyword" value="{{ $data->cat20[0]->sub_sub_sub_category }}">
                            <button type="submit"
                                style="border: none; background:none; color:#BE215E">{{ $data->cat20[0]->sub_sub_sub_category }}</button>
                        </form>
                    </div>
                </div>

            </div>

            <div class="category_all_btn">
                <form method="GET" action="{{ url('product/filter') }}"><button type="submit"
                        class="product_button">
                        <input type="hidden" name="keyword" value="Cables">
                        Shop all {{ $data->category }}</button>
                </form>
            </div>

        </div>
    </section>
    @include('frontend.footer')
@endsection
