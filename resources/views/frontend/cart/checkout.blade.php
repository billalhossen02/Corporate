@extends('frontend.master')

@section('content')
    <style>
        .btn-design {
            color: #fff;
            background-color: #ae0a46;
            border-color: #ae0a46;
        }

        .check_form_inner a input {
            color: #0d6efd !important;
            text-decoration: underline !important;
            cursor: pointer;
            text-align: right;
        }

        .border-secondary {
            border-color: #bfc7cf !important;
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
                        <div class="cart_header_title">Checkout</div>
                        <!-- right -->
                        <div class="cart_header_right">
                            <div class="cart_header_right_inner">
                                <ul>
                                    <li></li>
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
                    <div class="your_cart">
                        <!-- header -->
                        <div class="your_cart_header">
                            <div class="your_cart_title">Your information</div>
                        </div>

                        <form action="{{ route('add.order') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <!-- check out form -->
                            <div class="checkout_form">
                                <div class="checkout_form_wrapper">

                                    <!-- form item -->
                                    <div class="check_form_inner">
                                        <label for="name">Name <sup>*</sup> </label>
                                        <input type="text" name="name" value="{{ $user->name }}" class="check_form"
                                            id="name" required>
                                    </div>

                                    <!-- form item -->
                                    <div class="check_form_inner">
                                        <label for="Phone">Phone <sup>*</sup> </label>
                                        <input type="tel" name="phone" value="{{ $user->userInfo[0]->phone }}"
                                            class="check_form" id="Phone" required>
                                    </div>

                                    <!-- form item -->
                                    <div class="check_form_inner">
                                        <label for="Email">Email <sup>*</sup> </label>
                                        <input type="email" name="email" class="check_form" value="{{ $user->email }}"
                                            id="Email" required>
                                    </div>

                                    <!-- form item -->
                                    <div class="check_form_inner">
                                        <label for="address">Address <sup>*</sup> </label>
                                        <input type="text" name="address" class="check_form"
                                            value="{{ $user->userInfo[0]->address }}" id="address" required>
                                    </div>

                                    <!-- form item -->
                                    <div class="check_form_inner">
                                        <label for="city">City <sup>*</sup> </label>
                                        <input type="text" name="city" class="check_form"
                                            value="{{ $user->userInfo[0]->city }}" id="city" required>
                                    </div>

                                    <!-- form item -->
                                    <div class="check_form_inner">
                                        <label for="state">State <sup>*</sup> </label>
                                        <input type="text" name="state" class="check_form"
                                            value="{{ $user->userInfo[0]->state }}" id="state" required>
                                    </div>

                                    <!-- form item -->
                                    <div class="check_form_inner">
                                        <label for="zip">Zip Code <sup>*</sup> </label>
                                        <input type="text" name="zip" class="check_form"
                                            value="{{ $user->userInfo[0]->zip }}" id="zip" required>
                                    </div>

                                    <!-- form item -->
                                    <div class="check_form_inner">
                                        <label for="country">Country <sup>*</sup> </label>
                                        <input type="text" name="country" class="check_form"
                                            value="{{ $user->userInfo[0]->country }}" id="country" required>
                                    </div>
                                </div>

                                <!-- form item -->
                                <div class="check_form_inner pt-1">
                                    <label for="message">Select Your Payment Method:</label>
                                    <a data-bs-toggle="modal" data-bs-target="#exampleModal"><img
                                            src="{{ asset('assets/frontend/image/bank-removebg-preview.png') }}"
                                            width="120px" style="cursor: pointer; padding-right:20px" alt=""
                                            onclick="afterPayment()"></a>

                                    <a href="https://www.paypal.com/bd/home"><img
                                            src="{{ asset('assets/frontend/image/paypal-removebg-preview.png') }}"
                                            width="120px" style="cursor: pointer; padding-right:20px" alt=""></a>

                                    <a href="https://stripe.com/"><img
                                            src="{{ asset('assets/frontend/image/stripe.png') }}" width="60px"
                                            style="cursor: pointer; background:transparent" alt=""></a>
                                </div>
                            </div>
                    </div>

                    <div id="bankPayment">

                        <div class="card mt-2 border border-secondary">
                            <div class="card-title pt-1 pl-2 border border-bottom border-secondary">
                                Payment Information
                            </div>
                            <div class="card-body col-12">
                                <div class="row">
                                    <!-- form item -->
                                    <div class="check_form_inner col-6">
                                        <label for="Email">Work Order <sup>*</sup> </label>
                                        <input type="file" name="work_order" class="check_form" id="workorder">
                                    </div>
                                    <br>
                                    <!-- form item -->
                                    <div class="check_form_inner col-6">
                                        <label for="Email">Payment Slip <sup>*</sup> </label>
                                        <input type="file" name="payment_slip" class="check_form" id="payment">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- summury -->
                <div class="cart_sidebar_sumury">
                    <div class="cart_summury_title">Summary</div>

                    <div class="summury_count">
                        <ul>
                            <li class=""><span>Subtotal</span>
                                <span><small>USD</small>${{ number_format(Cart::getTotal(), 2) }}</span>
                            </li>
                            <li class=""><span>*Estimated Shipping</span>
                                <span><small>USD</small>${{ number_format(0, 2) }}</span>
                            </li>
                            <li class=""><span>*Tax estimate</span>
                                <span><small>USD</small>${{ number_format(0, 2) }}</span>
                            </li>
                        </ul>

                        <p class="summury_count_total"> <span>Total</span> <span><small>USD</small>
                                ${{ number_format(Cart::getTotal(), 2) }}</span></p>
                        <!-- Button trigger modal -->
                        <div class="submit_button">
                            <input style="width:150px;float:right" type="submit" value="Place Your order">
                        </div>
                        </form>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Payment Details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <strong>Bank Name:</strong>
                                        <p> Dutch Bangla Bank</p><br>
                                        <strong>Account Title:</strong>
                                        <p> NGen IT</p><br>
                                        <strong>Account Number:</strong>
                                        <p> 234***********</p><br>
                                        <strong>Branch Title:</strong>
                                        <p>West Panthapath</p><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- card body end-->
        </div>
        <!-- cart page content -->
    </div>

    @include('frontend.footer');

    <script>
        $('#bankPayment').hide();
        $('.submit_button').hide();

        function afterPayment() {
            $('#bankPayment').show();
            $('.submit_button').show();


        }
    </script>
@endsection
