@extends('frontend.master')

@section('content')
    <!-- header section -->
    @include('frontend.header')
    <!-- header section End -->


    <!-- contact us banner -->

    <section class="contact_banner">
        <div class="container">
            <!-- content -->
            <div class="contact_banner_content">
                <h2 class="banner_content_title">Contact us</h2>
            </div>
        </div>
    </section>

    <!-- contact us banner end -->


    <!-- contact body -->

    <div class="contact_body section_padding" id="contact_call">
        <div class="container">
            <!-- wrapper -->
            <div class="contact_body_wrapper">

                <!-- left content -->
                <div class="contact_left_content">
                    <p class="contact_left_title">Need immediate assistance?</p>
                    <p class="contact_left_text">Get assistance with tracking an order, requesting a quote, contacting your
                        account representative and more by <a href="tel:01714243446">phone</a> or <a
                            href="javascript:void(Tawk_API.toggle())">over
                            chat</a>.</p>

                    <!-- contact left phone -->
                    <div class="contact_anything_wrapper">
                        <!-- call -->
                        <div class="contact_call">
                            <div class="contact_call_title">Call us</div>
                            <div class="contact_call_number"> <a href="tel:01714243446"
                                    style="color:#AE0A46">01714243446</a></div>
                        </div>

                        <!-- contact chat -->
                        <div class="contact_call contact_chat">
                            <div class="contact_call_title">Chat now</div>
                            <a href="javascript:void(Tawk_API.toggle())" class="contact_chat_button"> <span> <i
                                        class="fa-solid fa-message"></i>
                                </span> <span> Chat with us</span> </a>
                        </div>
                    </div>

                    <!-- contact global -->
                    <div class="contact_global">
                        <div class="contact_global_title">NGenIt global headquarters</div>
                        <!-- adress -->
                        <div class="gloabal_content_address">
                            <span>Panthapath, Dhaka 1215</span>
                        </div>

                        <!-- contact call or email -->

                        <div class="global_contact_phone">
                            <!-- item -->
                            <div class="global_contact_phone_item">
                                <span>Billing & invoice: </span> <a href="tel:01714243446">01714243446</a>
                            </div>

                            <!-- item -->
                            <div class="global_contact_phone_item">
                                <span>Information and sales:</span> <a href="tel:01714243446">01714243446</a>
                            </div>

                            <!-- item -->
                            <div class="global_contact_phone_item">
                                <span>OneCall support:</span> <a href="tel:01714243446">01714243446</a>
                            </div>

                            <!-- item -->
                            <div class="global_contact_phone_item">
                                <span>Returns:</span> <a href="tel:01714243446">01714243446</a>
                            </div>
                        </div>

                        <!-- location button -->
                        <a href="{{ url('contact/location') }}" class="contactus_button">View all NGenIt office
                            locations</a>

                    </div>


                </div>


                <!-- right contact form -->
                <div class="right_contact_form">
                    @include('frontend.flash-message')
                    <!-- form content -->
                    <div class="right_contact_form_content">
                        <p class="right_form_title">Hear from our team</p>
                        <p class="right_form_subtitle">A specialist will reach out soon.</p>

                        <form action="{{ route('contactus.store') }}" method="post">
                            @csrf
                            <!-- wrapper -->
                            <div class="form_item_wrapper">

                                <!-- form item -->
                                <div class="form_item_inner">
                                    <input class="form_input" name="name" type="text" placeholder="Name" required>
                                    <label class="form_label" for="">Name: *</label>
                                </div>

                                <!-- form item -->
                                <div class="form_item_inner">
                                    <input class="form_input" name="phone" type="number" placeholder="Phone" required>
                                    <label class="form_label" for="">Phone: *</label>
                                </div>

                                <!-- form item -->
                                <div class="form_item_inner">
                                    <input class="form_input" name="email" type="email" placeholder="Email" required>
                                    <label class="form_label" for="">Email: *</label>
                                </div>

                                <!-- form item -->
                                <div class="form_item_inner">
                                    <input class="form_input" name="company" type="text" placeholder="Company">
                                    <label class="form_label" for="">Company: *</label>
                                </div>

                                <!-- form item -->
                                <div class="form_item_inner">
                                    <select name="state" id="state" class="form_input dynamic" required>
                                        <option value="">State</option>
                                    </select>
                                </div>

                                <!-- form item -->
                                <div class="form_item_inner">
                                    <select name="country" id="country" class="form_input dynamic" data-dependent="state"
                                        required>
                                        <option value="">Country</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->country }}">{{ $country->country }}</option>
                                        @endforeach
                                    </select>

                                    <!-- label -->
                                    <label class="form_label" for="">Country: *</label>
                                </div>
                            </div>



                            <!-- form item -->
                            <div class="form_item_fullInner">
                                <select name="help_type" id="" class="form_input" required>
                                    <option value="Need help With...">Need help With...</option>
                                    <option value="Exploring solutions and services">Exploring solutions and services
                                    </option>
                                    <option value="Billing support">Billing support </option>
                                    <option value="Order support">Order support </option>
                                    <option value="A general inquiry">A general inquiry </option>
                                </select>
                            </div>

                            <!-- form item -->
                            <div class="form_item_fullInner">
                                <textarea class="form_input" name="message" type="text" placeholder="Message"></textarea>
                                <label class="form_label" for="">Message: *</label>
                            </div>

                            <!-- checkbox -->

                            <div class="form_checkbos_wrapper">
                                <!-- checkbox input -->
                                <div class="checkBox_inner">
                                    <input type="checkbox">
                                </div>
                                <!-- content -->
                                <div class="checkBox_content">By checking this box, I consent to receive Insight marketing
                                    emails. We respect your privacy and will not share your personal information with any
                                    other company, person or identity.</div>
                            </div>

                            <!-- submit button -->
                            <button type="submit" class="single_banner_button" style="margin-top: 50px">Hear from a
                                specialist</button>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- contact body end-->


    @include('frontend.footer')
@endsection
