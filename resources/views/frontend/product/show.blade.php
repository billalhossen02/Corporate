@extends('frontend.master')

@section('content')
    @include('frontend.header')

    <!--===============Product Details Section Begin============================-->
    <section class="container">
        <div class="row">
            <!-- images -->
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 mt-1">
                <div class="product_details_img">
                    <img style="width: 360px;" class="mx-auto d-block" src="{{ asset('storage/Product/' . $sproduct->image) }}"
                        alt="">
                </div>
            </div>
            <!-- Details -->
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 mt-4">
                <div class="product__details__text">
                    <h3>{{ $sproduct->title }}</h3>
                </div>
                <p class="list_price">List Price</p>
                <div class="product__details__price">USD ${{ $sproduct->price }}</div><br>
                <p class="product_details">{{ $sproduct->description }}</p>

                <div class="row">

                </div>
                <div class="product_quantity_wraper">

                    <form class="myForm">
                        @csrf
                        <input type="hidden" value="{{ $sproduct->id }}" name="id">
                        <input type="hidden" value="{{ $sproduct->title }}" name="name">
                        <input type="hidden" value="{{ $sproduct->price }}" name="price">
                        <input type="hidden" value="{{ $sproduct->image }}" name="image">
                        <div class="product__details__quantity">
                            <div class="qu">
                                <div class="pro-qty">
                                    <input type="number" min="1" name="quantity" value="1">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="product_add_to_card product_button_change" id="addToBasket2">Add to
                            Basket</button>
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
        <br />

        </div>
    </section>

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
                    @foreach ($products as $item)
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
                                    <span class="price_currency">US</span>
                                    <span class="price_currency_value">${{ $item->price }}</span>
                                </div>

                                <!-- button -->
                                <form class="myForm">
                                    @csrf
                                    <input type="hidden" value="{{ $item->id }}" name="id" id="id">
                                    <input type="hidden" value="{{ $item->title }}" name="name" id="name">
                                    <input type="hidden" value="{{ $item->price }}" name="price" id="price">
                                    <input type="hidden" value="{{ $item->image }}" name="image" id="image">
                                    <input type="hidden" value="1" name="quantity" id="quantity">
                                    <button type="submit" class="product_button product_button_change" data-toggle="modal"
                                        id="addToBasket" data-target="#mediumModal"
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

    <script>
        // display a modal (medium modal)
        $(document).on('click', '#addToBasket2', function(event) {
            event.preventDefault();

            let form = $(this).closest('.myForm');
            let id = form.find("input[name=id]").val();
            let name = form.find("input[name=name]").val();
            let price = form.find("input[name=price]").val();
            let image = form.find("input[name=image]").val();
            let quantity = form.find("input[name=quantity]").val();
            let href = $(this).attr('data-attr');

            $.ajax({
                type: "POST",
                data: {
                    id: id,
                    name: name,
                    price: price,
                    image: image,
                    quantity: quantity,
                    "_token": "{{ csrf_token() }}"
                },
                url: "{{ route('cart.store') }}",
                success: function(data) {
                    console.log("Success");
                    $("#header_right").load(window.location.href +
                        " #header_right");
                    $("#cart_table").load(window.location.href + " #cart_table");

                }
            })
        });
    </script>
@endsection
