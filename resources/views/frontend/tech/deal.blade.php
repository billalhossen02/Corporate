@extends('frontend.master')
@section('content')
    @include('frontend.header')

    <!--========Header Title==========-->
    <section class="tech_deals_header" style="background-image:url('{{ asset('assets/frontend/image/rename.jpg') }}');
    ">
        <div class="container">
            <h1>Technology deals</h1>
            <h3>Browse and save on exclusive tech deals from Insight. We offer deep discounts on electronics, devices and
                software, including refurbished and open-box offers.</h3>

            <div class="row d-flex justify-content-center">
                <div class="col-lg-2"></div>
                <!--BUTTON START-->
                <div class="col-lg-3 col-sm-12 d-flex justify-content-center mb-4">
                    <a class="search_all_tech_deals_btn" href="#tech">Explore tech deals</a>
                </div>
                <div class="col-lg-3 col-sm-12 d-flex justify-content-center mb-4">
                    <a class="shop_refurbished_btn " href="#refurb">Shop refurbished</a>
                </div>
                <!--BUTTON END-->
                <div class="col-lg-2"></div>
                </span>

            </div>
        </div>

    </section>
    <!----------Header Title End--------->


    <!--=======Featured deals products=======-->
    <section class="container" id="tech">
        <div class="tech_deals_section_content">
            <!-- section title -->
            <div class="tech_deals_featured_item_title">
                <h3>Featured deals</h3>
                <p>Discover our latest discounts and limited-time offers on the technology brands and devices your business
                    trusts.</p>
            </div>
            <!-- wrapper -->
            <div class="row">
                <!-- product_item -->
                @foreach ($techDeal as $item)
                    <div class="col-lg-2 col-md-4 col-sm-6 my-4">
                        <!-- image -->
                        <div class="tech_deals_thumbnail">
                            <img src="{{ asset('storage/Product/' . $item->image) }}" alt="">
                        </div>

                        <!-- product content -->
                        <div class="tech_deals_product_item_content">
                            <a href="{{ route('product', ['id' => $item->id]) }}"
                                class="tech_deals_content_name">{{ $item->title }}</a>

                            <!-- price -->
                            <div class="tech_deals_product_item_price">
                                <span class="price_currency">Mfr #: </span>
                                <span class="price_currency_value">683J7UT#ABA</span>
                            </div>
                            <div class="tech_deals_product_item_price">
                                <span class="price_currency">USD</span>
                                <span class="price_currency_value">${{ $item->price }}</span>
                            </div>
                            {{-- <div class="tech_deals_product_item_price">
                                <span class="price_currency">2365</span>
                                <span class="price_currency_value">In-stock</span>
                            </div> --}}

                            <!-- button -->
                            <a href="{{ route('product', ['id' => $item->id]) }}" class="tech_deals_shop_btn">Shop now</a>
                        </div>

                    </div>
                @endforeach

            </div>
        </div>
        </div>
    </section><br>
    <hr>
    <!-- Featured deals Section End -->



    <!--====== Trust refurbished products========-->
    <section class="container" id="refurb">
        <div class="d-flex justify-content-center">
            <img src="{{ asset('assets/frontend/image/tech_deals/featured_partners/microsoft-authorized-refurbisher.png') }}"
                alt="">
        </div>
        <div class="trust_refurbished_title">
            <h2>Trust Insight for refurbished products.</h2>
            <p>We offer a range of certified refurbished hardware that <a href="client_stories_blog_insert.html">meets your
                    business needs at a lower price point.</a> From desktops to notebooks to monitors, our refurbished
                products deliver the performance, support and customization you depend on. And, as a Microsoft Authorized
                Refurbisher, we adhere to strict requirements that ensure the quality of our refurbished Microsoft hardware.
            </p>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <button class="common_button">Learn more about refurbished products</button>
        </div>
    </section>
    <!-----Trust refurbished products End------->

    <!--=======Featured refurbished partners=======-->
    <section class="container">
        <div class="tech_deals_section_content">
            <!-- section title -->
            <div class="tech_deals_featured_item_title">
                <h3 class="tech_deals_title_topline"></h3>
                <h3>Shop featured refurbished partners</h3>
            </div>
            <div class="row">
                <!-- Logo -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- image -->
                    <div class="tech_deals_thumbnail">
                        <img src="{{ asset('assets/frontend/image/tech_deals/featured_partners/203-trading.png') }}"
                            alt="">
                    </div>
                </div>
                <!-- Logo -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- image -->
                    <div class="tech_deals_thumbnail">
                        <img src="{{ asset('assets/frontend/image/tech_deals/featured_partners/blairtech.png') }}"
                            alt="">
                    </div>
                </div>
                <!-- Logo -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- image -->
                    <div class="tech_deals_thumbnail">
                        <img src="{{ asset('assets/frontend/image/tech_deals/featured_partners/cnb-computers.png') }}"
                            alt="">
                    </div>
                </div>
                <!-- Logo -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- image -->
                    <div class="tech_deals_thumbnail">
                        <img src="{{ asset('assets/frontend/image/tech_deals/featured_partners/im-sourcing-cpo.png') }}"
                            alt="">
                    </div>
                </div>
                <!-- Logo -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- image -->
                    <div class="tech_deals_thumbnail">
                        <img src="{{ asset('assets/frontend/image/tech_deals/featured_partners/joy-systems.png') }}"
                            alt="">
                    </div>
                </div>
                <!-- Logo -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- image -->
                    <div class="tech_deals_thumbnail">
                        <img src="{{ asset('assets/frontend/image/tech_deals/featured_partners/microcad.png') }}"
                            alt="">
                    </div>
                </div>
                <!-- Logo -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- image -->
                    <div class="tech_deals_thumbnail">
                        <img src="{{ asset('assets/frontend/image/tech_deals/featured_partners/stg.png') }}"
                            alt="">
                    </div>
                </div>
                <!-- Logo -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- image -->
                    <div class="tech_deals_thumbnail">
                        <img src="{{ asset('assets/frontend/image/tech_deals/featured_partners/verified-systems.png') }}"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---Featured refurbished Section End---->


    <!--=======Featured refurbished products=======-->
    <section class="container">
        <div class="tech_deals_section_content">
            <!-- section title -->
            <div class="tech_deals_featured_item_title">
                <h3 class="tech_deals_title_topline"></h3>
                <h3>Featured refurbished products</h3>
            </div>
            <!-- wrapper -->
            <div class="row">
                <!-- product_item -->
                @foreach ($refurbished as $item)
                    <div class="col-lg-2 col-md-4 col-sm-6 mx-2">
                        <!-- image -->
                        <div class="tech_deals_thumbnail">
                            <img src="{{ asset('storage/Product/' . $item->image) }}" alt="">
                        </div>

                        <!-- product content -->
                        <div class="tech_deals_product_item_content">
                            <a
                                href="{{ route('product', ['id' => $item->id]) }}"class="tech_deals_content_name">{{ $item->title }}</a>

                            <!-- price -->
                            <div class="tech_deals_product_item_price">
                                <span class="price_currency">Mfr #: </span>
                                <span class="price_currency_value">683J7UT#ABA</span>
                            </div>
                            <div class="tech_deals_product_item_price">
                                <span class="price_currency">USD</span>
                                <span class="price_currency_value">${{ $item->price }}</span>
                            </div>
                            {{-- <div class="tech_deals_product_item_price">
                                <span class="price_currency">2365</span>
                                <span class="price_currency_value">In-stock</span>
                            </div> --}}

                            <!-- button -->
                            <a href="{{ route('product', ['id' => $item->id]) }}" class="tech_deals_shop_btn">Shop now</a>
                        </div>

                    </div>
                @endforeach

            </div>
        </div>
    </section><br>

    <!-- Featured refurbished Section End -->


    <!--====Purchased warranty Prodcut======-->
    <section class="purchased_warranty"
        style="background-image:url('{{ asset('assets/frontend/image/purchase.jpg') }}');
    ">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-sm-10">
                    <h2>Every certified refurbished product purchased from Insight includes a one-year warranty.</h2>
                </div>
                <div class="col-lg-2 col-sm-2">
                    <div class="d-flex justify-content-end">
                        <img class="img-fluid " src="{{ asset('assets/frontend/image/check.png') }}" width="100px"
                            alt="">
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!------Purchased warranty End---->


    <!--=====Recommended technology deals=====-->
    <section class="container">
        <div class="popular_product_section_content">
            <!-- section title -->
            <div class="tech_deals_featured_item_title">
                <h3>Recommended technology deals for you</h3>
            </div>
            <!-- wrapper -->
            <div class="populer_product_slider">

                <!-- product_item -->
                @foreach ($techDeal as $item)
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
                                <button type="submit" class="product_button product_button_change" data-toggle="modal"
                                    id="addToBasket" data-target="#mediumModal"
                                    data-attr="{{ route('modal', ['id' => $item->id]) }}">Add to Basket</button>
                            </form>
                        </div>

                    </div>
                @endforeach

                <!-- product item -->


            </div>
        </div>
    </section>
    <hr>
    <!-- Recommended technology deals Section End -->

    <!--========Shop by category=======-->
    <section class="container">
        <!--Title-->
        <div class="tech_deals_featured_item_title">
            <h3>Shop by category</h3>
        </div>
        <!--Product Category-->
        <div class="row">
            <!--Category item-->
            @foreach ($categories as $item)
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 p-4">
                    <img class="img-fluid mb-4" src="{{ asset('storage/Category/' . $item->sub_img) }}" alt="">
                    <div class="common_product_item_text">
                        <a href="{{ url('category.html/' . $item->sub_category) }}">{{ $item->sub_category }}</a>
                    </div>
                </div>
            @endforeach
        </div>

    </section>
    <!------Shop by category---->


    @include('frontend.footer')
@endsection
