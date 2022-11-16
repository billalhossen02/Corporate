@extends('frontend.master')

@section('content')
    <style>
        .btn-success {
            color: #fff;
            background-color: #ae0a46;
            border-color: #ae0a46;
        }

        .btn-success:hover {
            color: #fff;
            background-color: #ae0a46;
            border-color: #ae0a46;
        }

        .update_button {
            display: none;
        }

        .table td,
        .table th {
            padding: .75rem;
            vertical-align: middle !important;
            border-top: 1px solid #dee2e6;
        }
    </style>
    <!-- header section -->
    @include('frontend.header')
    <!-- header section End -->



    <div class="cart_page">
        <!-- cart page content -->
        <div class="cart_page_content">
            <!-- cart header -->
            <div class="cart_header">
                <div class="cart_header_content">
                    <!-- wrapper -->
                    <div class="cart_header_wrapper">
                        <!-- title -->
                        <div class="cart_header_title">Cart</div>
                        <!-- right -->
                        <div class="cart_header_right">
                            <div class="cart_header_right_inner">
                                <ul>
                                    <li><a href="" onclick="print()">
                                            <span><i class="fa-solid fa-print"></i> </span>
                                            <span>Print</span>
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- cart header end-->

            <!-- card body -->

            <div class="cart_body_wrapper">
                <!-- left -->
                <div class="cart_body_left">
                    @include('frontend.flash-message')
                    <div class="your_cart">
                        <!-- header -->
                        <div class="your_cart_header">
                            <div class="your_cart_title">Your cart</div>
                            <div class="your_cart_empty">
                                <form action="{{ route('cart.clear') }}" method="POST">
                                    @csrf
                                    <button class=""
                                        style="outline:none; border:none; background:none; color:#ae0a46">Empty
                                        cart</button>
                                </form>
                            </div>
                        </div>



                        <table class="table" id="cart_table">

                            <thead style="font-size: 13px; color:rgba(22, 20, 20, 0.604)">

                                <th>Image</th>
                                <th>Title</th>
                                <th>Unit Price</th>
                                <th>Quantity</th>
                                <th style="width: 170px">Total price</th>
                                <th>Action</th>

                            </thead>

                            <tbody>

                                @foreach ($cartItems as $item)
                                    <tr>
                                        <!-- wrapper -->
                                        <div class="your_cart_item_wrapper">
                                            <td>
                                                <!-- image -->
                                                <div class="cart_item_image">
                                                    <img src="{{ asset('storage/Product/' . $item->attributes->image) }}"
                                                        alt="">
                                                </div>
                                            </td>

                                            <!-- content -->
                                            <div class="cart_item_content">
                                                <!-- utitlity -->
                                                <div class="cart_item_content_utitlity">
                                                    <td>
                                                        <div class="cart_content_details">
                                                            <!-- name -->
                                                            <a href="{{ route('product', ['id' => $item->id]) }}"
                                                                class="cart_produt_name">{{ $item->name }}</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <!-- cart product price -->
                                                        <div class="cart_product_price cart_auto_price">
                                                            <small>USD</small>
                                                            $<span
                                                                class="unitCart_price">{{ number_format($item->price, 2) }}</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <!-- cart counter-->
                                                        <div class="card_product_counter">
                                                            <form class="myForm">
                                                                @csrf
                                                                <input type="hidden" name="id"
                                                                    value="{{ $item->id }}">
                                                                <input type="hidden" name="price"
                                                                    value="{{ $item->price }}">
                                                                <input type="number" min="1" name="quantity"
                                                                    value="{{ $item->quantity }}"
                                                                    class="cart_input cart_auto" id="quantity" />
                                                                {{-- <button class="update_button" value="{{ $item->id }}" id="upBtn" type="submit">update</button> --}}
                                                            </form>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="cart_product_price1"> <small>USD</small> $<span
                                                                class="tp"
                                                                id="tp">{{ number_format($item->price * $item->quantity, 2) }}</span>
                                                        </div>
                                                    </td>

                                                </div>
                                                <td>
                                                    <!-- delete -->
                                                    <div class="cart_item_delete">
                                                        <form action="{{ route('cart.remove') }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" value="{{ $item->id }}"
                                                                name="id">
                                                            <button style="all: unset; cursor: pointer;"><i
                                                                    class="fa-solid fa-trash-can"></i></button>
                                                        </form>
                                                    </div>
                                                </td>

                                            </div>
                                        </div>
                                    </tr>
                                @endforeach

                            </tbody>

                        </table>

                    </div>
                    <!-- top product -->

                    <!-- single popular Product -->

                    <section class="popular_product_section section_padding"
                        style="background: var(--primaryColor); margin-top: 20px;">
                        <!-- container -->
                        <div class="container_card">
                            <div class="popular_product_section_content">
                                <!-- section title -->
                                <div class="section_title">
                                    <h3 class="title_top_heading">Popular products</h3>
                                </div>
                                <!-- wrapper -->
                                <div class="populer_product_slider">
                                    @foreach ($products as $item)
                                        <!-- product_item -->
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

                                                <!-- button -->
                                                <form class="myForm">
                                                    @csrf
                                                    <input type="hidden" value="{{ $item->id }}" name="id"
                                                        id="id">
                                                    <input type="hidden" value="{{ $item->title }}" name="name"
                                                        id="name">
                                                    <input type="hidden" value="{{ $item->price }}" name="price"
                                                        id="price">
                                                    <input type="hidden" value="{{ $item->image }}" name="image"
                                                        id="image">
                                                    <input type="hidden" value="1" name="quantity" id="quantity">
                                                    <button type="submit" class="product_button product_button_change"
                                                        data-toggle="modal" id="addToBasket" data-target="#mediumModal"
                                                        data-attr="{{ route('modal', ['id' => $item->id]) }}">Add to
                                                        Basket</button>
                                                </form>
                                            </div>

                                        </div>
                                    @endforeach
                                    <!-- product item -->
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- single popular Product end-->
                </div>
                <!-- summury -->
                <div class="cart_sidebar_sumury">
                    <div class="cart_summury_title">Summary</div>

                    <div class="summury_count" id="cart_summary">
                        <ul>
                            <li class="">
                                <span>Subtotal</span>
                                {{-- <input type="hidden" id="getTotal" value="{{ Cart::getTotal() }}"> --}}
                                <div>
                                    <span>$</span><span id="totalPrice1">{{ number_format(Cart::getTotal(), 2) }}</span>
                                </div>
                            </li>
                            <li class=""><span>*Estimated Shipping</span>
                                <span><small>USD</small>${{ number_format(0, 2) }}</span>
                            </li>
                            <li class=""><span>*Tax estimate</span>
                                <span><small>USD</small>${{ number_format(0, 2) }}</span>
                            </li>
                        </ul>

                        <li class="summury_count_total">
                            <span>Total</span>

                            <div>
                                <span>$</span><span id="totalPrice2">
                                    {{ number_format(Cart::getTotal(), 2) }}</span>
                            </div>
                        </li>
                        <input id='checkout' type="hidden" value="{{ Cart::getTotal() }}">
                        <!-- button -->
                        <a href="{{ route('checkout') }}">
                            <div class="submit_button">
                                <input id="work" type="submit" value="Checkout">
                            </div>
                        </a>

                    </div>
                </div>
            </div>

            <!-- card body end-->
        </div>
        <!-- cart page content -->
    </div>

    @include('frontend.footer');


    <script>
        var autoCartInput = document.querySelectorAll(".cart_auto")

        autoCartInput.forEach((currentItem, index) => {
            currentItem.addEventListener("change", function() {
                var cardPriceAuto = parseInt(document.getElementsByClassName("unitCart_price")[index]
                    .innerText)
                var getTotalQuantity = parseInt(document.getElementsByClassName("cart_auto")[index].value)
                var getTotalCart = cardPriceAuto * getTotalQuantity
                var gtp = document.getElementsByClassName("tp")[index].innerText = getTotalCart
                    .toLocaleString();

                allSum();

            })
        });

        function allSum() {
            var grandTotal = document.querySelectorAll(".tp")
            var total = 0;
            grandTotal.forEach(element => {
                var nmap = element.innerText
                var total2 = parseInt(nmap);
                total += total2;
            });
            console.log(total);
            document.getElementById('totalPrice1').innerText = (total.toLocaleString()).toFixed(2);
            document.getElementById('totalPrice2').innerText = (total.toLocaleString()).toFixed(2);
        }
    </script>

    <script>
        if ($('#checkout').val() == 0) {
            $('#work').hide();
        }
    </script>

    <script>
        var buttonAdd = document.querySelectorAll('.cart_input')
        var cartUpdateBtn = document.querySelectorAll('.update_button')
        cartUpdateBtn.forEach(element => {
            element.style.cssText = 'all:unset;display:block;cursor:pointer'
        });
    </script>
    <script>
        $(document).on('change', '#quantity', function(event) {
            event.preventDefault();
            let form = $(this).closest('.myForm');
            let id = form.find("input[name=id]").val();
            let quantity = form.find("input[name=quantity]").val();
            let price = form.find("input[name=price]").val();
            let href = $(this).attr('data-attr');
            $.ajax({
                type: "POST",
                data: {
                    id: id,
                    quantity: quantity,
                    "_token": "{{ csrf_token() }}"
                },
                url: "{{ route('cart.update') }}",
                success: function(data) {
                    console.log("Success");
                    $("#cart_summary").load(window.location.href + " #cart_summary");
                }
            })
        });
        $("#mediumButton2").on("click", function(e) {
            e.preventDefault();
            $("#mediumModal").modal("hide");
            $('#mediumModal').data("modal", null);
        });
    </script>
@endsection
