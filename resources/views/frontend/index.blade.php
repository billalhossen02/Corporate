@extends('frontend.master')
@section('content')
    <!-- header section -->
    @include('frontend.header')
    <!-- header section End -->

    <!-- banner start -->
    @include('frontend.banner')
    <!-- banner start end-->

    <!-- home card -->
    <section class="home_card_section">
        <div class="container">
            <!-- wrapper -->
            <div class="home_card_wrapper">

                <!-- home card item -->
                <div class="home_card_item">
                    <h5 class="home_card_item_title">Explore NgenIt solutions.</h5>
                    <div href="" class="home_card_button">
                        <a href="{{ url('/blogs') }}">View Solutions</a>
                    </div>
                    <!-- button -->
                </div>

                <!-- home card item -->
                <div class="home_card_item">
                    <h5 class="home_card_item_title">Shop products</h5>
                    <div href="" class="home_card_button">
                        <a href="{{ route('shop.html') }}">Shop Now</a>
                    </div>
                    <!-- button -->
                </div>
            </div>
        </div>
    </section>

    <!-- home card end -->


    <!-- business section -->

    <section class="business_seftion section_padding">
        <div class="container">
            <div class="business_seftion_content">
                <!-- home title -->
                <div class="home_title">
                    <h5 class="home_title_heading"> <Span>T</Span>op businesses across industries have trusted Insight to
                        achieve their ambitious business goals.</h5>

                    <p class="home_title_text">Our technical expertise, broad solutions portfolio and supply chain
                        capabilities give us the right resources and scale to achieve more for you.</p>
                </div>

                <!-- business item wrapper -->
                <div class="business_seftion_wrapper">
                    @foreach (homePage() as $item)
                        <!-- item -->
                        <div href="#" class="business_item">

                            <!-- image -->
                            <div class="business_item_icon">
                                <img src="{{ asset('storage/Client/' . $item->story1[0]->image) }}" alt="">
                            </div>

                            <!-- content -->
                            <div class="business_item_content">
                                <p class="business_item_title">{{ $item->story1[0]->title }}</p>
                                <p class="business_item_text">{{ $item->story1[0]->description }}</p>
                                <a href="{{ url('story/' . $item->story1[0]->id) }}"
                                    class="business_item_button"><span>Learn
                                        More</span> <span class="business_item_button_icon"><i
                                            class="fa-solid fa-arrow-right-long"></i></span></a>
                            </div>
                        </div>

                        <!-- item -->
                        <div href="#" class="business_item">

                            <!-- image -->
                            <div class="business_item_icon">
                                <img src="{{ asset('storage/Client/' . $item->story2[0]->image) }}" alt="">
                            </div>

                            <!-- content -->
                            <div class="business_item_content">
                                <p class="business_item_title">{{ $item->story2[0]->title }}</p>
                                <p class="business_item_text">{{ $item->story2[0]->description }}</p>
                                <a href="{{ url('story/' . $item->story2[0]->id) }}"
                                    class="business_item_button"><span>Learn
                                        More</span> <span class="business_item_button_icon"><i
                                            class="fa-solid fa-arrow-right-long"></i></span></a>
                            </div>
                        </div>


                        <!-- item -->
                        <div href="#" class="business_item">

                            <!-- image -->
                            <div class="business_item_icon">
                                <img src="{{ asset('storage/Client/' . $item->story3[0]->image) }}" alt="">
                            </div>

                            <!-- content -->
                            <div class="business_item_content">
                                <p class="business_item_title">{{ $item->story3[0]->title }}</p>
                                <p class="business_item_text">{{ $item->story3[0]->description }}</p>
                                <a href="{{ url('story/' . $item->story3[0]->id) }}"
                                    class="business_item_button"><span>Learn
                                        More</span> <span class="business_item_button_icon"><i
                                            class="fa-solid fa-arrow-right-long"></i></span></a>
                            </div>
                        </div>


                        <!-- item -->
                        <div href="#" class="business_item">

                            <!-- image -->
                            <div class="business_item_icon">
                                <img src="{{ asset('storage/Client/' . $item->story4[0]->image) }}" alt="">
                            </div>

                            <!-- content -->
                            <div class="business_item_content">
                                <p class="business_item_title">{{ $item->story4[0]->title }}</p>
                                <p class="business_item_text">{{ $item->story4[0]->description }}</p>
                                <a href="{{ url('story/' . $item->story4[0]->id) }}"
                                    class="business_item_button"><span>Learn
                                        More</span> <span class="business_item_button_icon"><i
                                            class="fa-solid fa-arrow-right-long"></i></span></a>
                            </div>
                        </div>

                        <!-- item -->
                        <div href="#" class="business_item">

                            <!-- image -->
                            <div class="business_item_icon">
                                <img src="{{ asset('storage/Client/' . $item->story5[0]->image) }}" alt="">
                            </div>

                            <!-- content -->
                            <div class="business_item_content">
                                <p class="business_item_title">{{ $item->story5[0]->title }}</p>
                                <p class="business_item_text">{{ $item->story5[0]->description }}</p>
                                <a href="{{ url('story/' . $item->story5[0]->id) }}"
                                    class="business_item_button"><span>Learn
                                        More</span> <span class="business_item_button_icon"><i
                                            class="fa-solid fa-arrow-right-long"></i></span></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- business section end-->


    <!-- business section end-->
    <!-- learn client history -->
    <div class="learn_clint_hustory section_padding">
        <div class="container">
            <div class="learn_clint_hustory_content">
                <!-- title -->
                <div class="section_title">
                    <h3 class="title_top_heading">Learn more in our client stories.</h3>
                </div>
                <!-- wrapper -->
                <div class="learn_clint_hustory_wrapper">
                    @foreach (homePage() as $blog)
                        <a href="blogs/{{ $blog->solution1[0]->id }}">
                            <div class="product_item">
                                <!-- image -->
                                <div class="feature_content_item_thumbnail">
                                    <img src="{{ asset('storage/Blog/' . $blog->solution1[0]->logo) }}" alt="">
                                </div>
                                <div class="feature_content_item_content">
                                    <p class="feature_content_item_name">
                                        Solution Brief
                                    </p>
                                    <p class="feature_content_item_text">{{ $blog->solution1[0]->title }}</p>
                                </div>
                            </div>
                        </a>

                        <a href="blogs/{{ $blog->solution2[0]->id }}">
                            <div class="product_item">
                                <!-- image -->
                                <div class="feature_content_item_thumbnail">
                                    <img src="{{ asset('storage/Blog/' . $blog->solution2[0]->logo) }}" alt="">
                                </div>
                                <div class="feature_content_item_content">
                                    <p class="feature_content_item_name">
                                        Solution Brief
                                    </p>
                                    <p class="feature_content_item_text">{{ $blog->solution2[0]->title }}</p>
                                </div>
                            </div>
                        </a>

                        <a href="blogs/{{ $blog->solution3[0]->id }}">
                            <div class="product_item">
                                <!-- image -->
                                <div class="feature_content_item_thumbnail">
                                    <img src="{{ asset('storage/Blog/' . $blog->solution3[0]->logo) }}" alt="">
                                </div>
                                <div class="feature_content_item_content">
                                    <p class="feature_content_item_name">
                                        Solution Brief
                                    </p>
                                    <p class="feature_content_item_text">{{ $blog->solution3[0]->title }}</p>
                                </div>
                            </div>
                        </a>

                        <a href="blogs/{{ $blog->solution4[0]->id }}">
                            <div class="product_item">
                                <!-- image -->
                                <div class="feature_content_item_thumbnail">
                                    <img src="{{ asset('storage/Blog/' . $blog->solution4[0]->logo) }}" alt="">
                                </div>
                                <div class="feature_content_item_content">
                                    <p class="feature_content_item_name">
                                        Solution Brief
                                    </p>
                                    <p class="feature_content_item_text">{{ $blog->solution4[0]->title }}</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>

                <!-- button -->
                <div class="learn_clint_history_btn">
                    <a href="blogs">See all client stories</a>
                </div>
            </div>
        </div>
    </div>
    <!-- learn client history End-->

    <!-- learn clint history End-->


    <!-- shop product section -->

    <div class="shop_product_section section_padding">
        <div class="container">
            <div class="shop_product_wrapper">
                <!-- content -->
                <div class="shop_product_content">
                    <div class="home_title" style="width: 100%; margin: 0px;">
                        <h5 class="home_title_heading" style="text-align: left;"> Shop products and hardware</h5>

                        <p class="home_title_text" style="text-align: left; font-size: 18px !important;">With more than
                            600,000 products and 7,500 in-house brand experts at your fingertips, we’ll get you the
                            technology you need to achieve your goals. And, you can manage it all seamlessly through your
                            myInsight account.</p>

                        <div class="business_seftion_button" style="text-align: left;">
                            <a href="{{ route('shop.html') }}">Shop Now</a>
                        </div>
                    </div>
                </div>

                <!-- product brand -->
                <div class="shop_product_brand_list">
                    <ul>
                        <li><a href="{{ route('shop.html') }}">Product categories</a></li>
                        <li><a href="{{ url('partner.html') }}">Brands</a></li>
                        <li><a href="{{ url('techdeal.html') }}">Tech deals</a></li>
                        <li><a href="{{ url('account_benefits') }}">Account benefits</a></li>
                        <li><a href="{{ url('techdeal.html/#refurb') }}">Refurbished products</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <!-- shop product section end -->


    <!-- top product section -->


    <section class="popular_product_section section_padding">
        <!-- container -->
        <div class="container">
            <div class="popular_product_section_content">
                <!-- section title -->
                <div class="section_title">
                    <h3 class="title_top_heading">Popular products</h3>
                </div>
                <div class="populer_product_slider">

                    <!-- product_item -->
                    @foreach ($products_h as $item)
                        <div class="product_item">
                            <!-- image -->
                            <div class="product_item_thumbnail">
                                <img src="{{ asset('storage/Product/' . $item->image) }}" alt="">
                            </div>

                            <!-- product content -->
                            <div class="product_item_content">
                                <a href="{{ route('product', ['id' => $item->id]) }}"
                                    class="product_item_content_name">{{ $item->title }}</a>

                                <!-- price -->
                                <div class="product_item_price">
                                    <span class="price_currency">USD</span>
                                    <span class="price_currency_value">${{ $item->price }}</span>
                                </div>
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

                    <!-- product item -->

                </div>
                <div class="populer_product_slider">

                    <!-- product_item -->
                    @foreach ($products_s as $item)
                        <div class="product_item">
                            <!-- image -->
                            <div class="product_item_thumbnail">
                                <img src="{{ asset('storage/Product/' . $item->image) }}" alt="">
                            </div>

                            <!-- product content -->
                            <div class="product_item_content">
                                <a href="{{ route('product', ['id' => $item->id]) }}"
                                    class="product_item_content_name">{{ $item->title }}</a>

                                <!-- price -->
                                <div class="product_item_price">
                                    <span class="price_currency">USD</span>
                                    <span class="price_currency_value">${{ $item->price }}</span>
                                </div>
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

                    <!-- product item -->

                </div>
            </div>
        </div>
    </section>

    <!-- top product section end -->

    <!-- our success section -->

    <section class="our_success section_padding">
        <div class="container">
            <!-- title -->
            <div class="section_title">
                <h3 class="title_top_heading">Our success starts with our culture.</h3>
            </div>
            <!-- wrapper -->
            <div class="our_success_wrapper">
                @foreach (homePage() as $item)
                    <!-- item -->
                    <div class="our_success_item">
                        <p class="our_success_item_title">{{ $item->success1[0]->title }}</p>

                        <div class="our_success_item_body">
                            {{ $item->success1[0]->description }}
                        </div>
                    </div>

                    <!-- item -->
                    <div class="our_success_item">
                        <p class="our_success_item_title our_success_item_title2">{{ $item->success2[0]->title }}</p>

                        <div class="our_success_item_body">
                            {{ $item->success2[0]->description }}
                        </div>
                    </div>

                    <!-- item -->
                    <div class="our_success_item">
                        <p class="our_success_item_title our_success_item_title3">{{ $item->success3[0]->title }}</p>

                        <div class="our_success_item_body">
                            {{ $item->success3[0]->description }}
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>

    <!-- our success section end -->

    @include('frontend.footer')

    <style>
        #backIcon {
            display: none !important;

        }
    </style>
@endsection
