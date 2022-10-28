@extends('frontend.master')

@section('content')

@include('frontend.header')

    <!--===============Product Details Section Begin============================-->
    <section class="container">
        <div class="row">
            <!-- images -->
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 mt-1">
                <div class="product_details_img">
                    <img style="width: 360px;" class="mx-auto d-block"
                        src="{{ asset('storage/Product/'.$sproduct->image) }}" alt="">
                </div>
                {{-- <div class="product__details__pic__slider owl-carousel">
                    <img data-imgbigurl="{{ asset('storage/Product/'.$sproduct->image) }}"
                        src="{{ asset('storage/Product/'.$sproduct->image) }}" alt="">
                </div> --}}
            </div>
            <!-- Details -->
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 mt-4">
                <div class="product__details__text">
                    <h3>{{ $sproduct->title }}</h3>
                    {{-- <h6 class="text-dark">Insight # 8PM-00001	Mfr. # 8PM-00001	UNSPSC: 43170000 --}}
                    </h6>
                    {{-- <div class="product__details__rating">
                        <img src="img/star-outline.svg"/>
                        <img src="img/star-outline.svg"/>
                        <img src="img/star-outline.svg"/>
                        <img src="img/star-outline.svg"/>
                        <img src="img/star-outline.svg"/>

                        <span>No reviews yet.</span>
                    </div> --}}
                    <p class="list_price">List Price</p>
                    <div class="product__details__price">USD ${{ $sproduct->price }}</div><br>
                    {{-- <h6> Estimate the total price of this item</h6> --}}

                    {{-- <div class="row">
                        <table class="product-specs">
                            <tbody><tr scope="row">
                                <td>Processor / Chipset:</td>
                                <td class="spec-label0">Intel Core i3 (11th Gen) 1115G4</td>
                            </tr>

                            <tr scope="row">
                                <td>Memory:</td>
                                <td class="spec-label0">8 GB</td>
                            </tr>

                            <tr scope="row">
                                <td>Storage:</td>
                                <td class="spec-label0">128 GB SSD</td>
                            </tr>

                            <tr scope="row">
                                <td>Display:</td>
                                <td class="spec-label0">13"</td>
                            </tr>

                        </tbody></table>
                    </div> --}}

                    <p class="product_details">{{ $sproduct->description }}</p>

                    <div class="row">

                    </div>
                    <div class="product_quantity_wraper">

                                    <form class="myForm">
                                        @csrf
                                        <input type="hidden" value="{{ $sproduct->id }}" name="id">
                                        <input type="hidden" value="{{ $sproduct->title }}" name="name">
                                        <input type="hidden" value="{{ $sproduct->price }}" name="price">
                                        <input type="hidden" value="{{ $sproduct->image }}"  name="image">
                                        <div class="product__details__quantity">
                                            <div class="qu">
                                                <div class="pro-qty">
                                                     <input type="number" min="1" name="quantity" value="1">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="product_add_to_card product_button_change" data-toggle="modal" id="addToBasket"
                                        data-target="#mediumModal"
                                        data-attr="{{ route('modal', ['id' => $sproduct->id]) }}">Add to Basket</button>
                                    </form>

                        <div class="need_help">
                             <h6>Need Help Ordering?</h6>
                            <h6>call <strong>123-24556-5555</strong></h6>
                        </div>
                    </div>
                    <a href="#" class="
                        product_your_purchase">Protect your purchase</a>
                </div>
            </div>
            <br/>

        </div>
    </section>
    <!-- Product Details Section End -->

    <br>
    <!--===============Sidbar & Tab Section Begin============================-->

    {{-- <section class="container" style="overflow: hidden;">
        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">London</button>
            <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
            <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
        </div>

        <div id="London" class="tabcontent">
            <h3>London</h3>
            <p>London is the capital city of England.</p>
        </div>

        <div id="Paris" class="tabcontent">
            <h3>Paris</h3>
            <p>Paris is the capital of France.</p>
        </div>

        <div id="Tokyo" class="tabcontent">
            <h3>Tokyo</h3>
            <p>Tokyo is the capital of Japan.</p>
        </div>
    </section>
    <br>
    <hr> --}}


     <!--===============Related Product Section Begin============================-->
    <section class="popular_product_section section_padding">
        <!-- container -->
        <div class="container">
            <div class="popular_product_section_content">
                <!-- section title -->
                <div class="section_title">
                    <h3 class="title_top_heading">Related Product</h3>
                </div>
                <!-- wrapper -->
                <div class="populer_product_slider">

                    <!-- product_item -->
                @foreach ($products as $item )

                    <div class="product_item">
                        <!-- image -->
                        <div class="product_item_thumbnail">
                            <img src="{{ asset('storage/Product/'.$item->image) }}" alt="">
                        </div>

                        <!-- product content -->
                        <div class="product_item_content">
                            <a href="{{ route('product',['id' => $item->id]) }}" class="product_item_content_name">{{ $item->title }}</a>

                            <!-- price -->
                            <div class="product_item_price">
                                <span class="price_currency">US</span>
                                <span class="price_currency_value">${{ $item->price }}</span>
                            </div>

                            <!-- button -->
                            <form class="myForm">
                                @csrf
                                <input type="hidden" value="{{ $item->id }}"   name="id" id="id">
                                <input type="hidden" value="{{ $item->title }}" name="name" id="name">
                                <input type="hidden" value="{{ $item->price }}" name="price" id="price">
                                <input type="hidden" value="{{ $item->image }}" name="image" id="image">
                                <input type="hidden" value="1" name="quantity" id="quantity">
                                <button type="submit" class="product_button product_button_change" data-toggle="modal" id="addToBasket"
                                    data-target="#mediumModal"
                                    data-attr="{{ route('modal', ['id' => $item->id]) }}">Add to Basket</button>
                            </form>
                        </div>

                    </div>
                 @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- Related Product Section End -->
    @include('frontend.footer')

@endsection
