@extends('frontend.master')

@section('content')
    <!-- header section -->
    @include('frontend.header')
    <!-- header section End -->

    <!--========Header Title==========-->
    <section class="support_assistance_header"
        style="background-image:url('{{ asset('assets/frontend/image/buy-category-hero.jpg') }}');
    ">
        <div class="container">
            <div class="d-flex justify-content-center">
                <span>Web support assistance</span>
            </div>
            <h1>How can we help you?</h1>
        </div>

    </section>
    <!----------Header Title End--------->

    <!--==========Support Assistance Contact From=========-->
    <section class="container">
        <div class="support_assistance_wrapper">
            <div class="row">
                <div class="col-lg-7 col-sm-12 support_assistance_content">
                    <p>Having trouble with insight.com? Reach out to our team of Web support specialists and get help over
                        the phone or through email.</p>
                    <div>
                        <h3>Need to reach us right away?</h3>
                    </div>
                    <div class="d-flex ">
                        <div class="col-4 contact_hline_call p-0">
                            <a href="callto:01714243446" x-cq-linkchecker="skip">Call us</a>
                        </div>
                        <div class="col-8">
                            <span>Call 1.800.INSIGHT to talk to a specialist directly.</span>
                        </div>

                    </div>
                    <div class="d-flex my-4">
                        <div class="col-4 contact_hline_email p-0">
                            <a href="mailto:Sales@ngenit.com">Email us</a>
                        </div>
                        <div class="col-8 ">
                            <span>Contact a specialist via email at your convenience.</span>
                        </div>
                    </div>
                    <div class="d-flex">
                        <img class="img-fluid" src="{{ asset('assets/frontend/image/support-assistance-page-women.jpg') }}"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-sm-12 support_assistance_contact_us">
                    <div>
                        <h4>Contact us</h4>
                    </div>
                    <form action="{{ route('add.support') }}" method="POST">
                        @csrf
                        <div class="mb-2">
                            <label class="form-label" for="">First name</label><span class="text-danger">*</span>
                            <div>
                                <input type="text" class="form-control" name="first_name" required
                                    placeholder="First name">
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="">Last name</label>
                            <div>
                                <input class="form-control" type="text" name="last_name" required
                                    placeholder="Last name">
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="">Company</label><span class="text-danger">*</span>
                            <div>
                                <input class="form-control" type="text" name="company" required
                                    placeholder=" Company name" maxlength="255" tabindex="0">
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="">Email address</label><span class="text-danger">*</span>
                            <div>
                                <input class="form-control" type="email" name="email" required
                                    placeholder="Email address" maxlength="255" tabindex="0">
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="">Phone number</label><span class="text-danger">*</span>
                            <div>
                                <input class="form-control" type="text" name="phone" required
                                    placeholder="Phone number" maxlength="255" tabindex="0">
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="">Support topic</label><span class="text-danger">*</span>
                            <div>
                                <select name="support_topic" required class="form-control">
                                    <option value="" selected="selected">Select a topic</option>
                                    <option value="Account creation problem">Account creation problem</option>
                                    <option value="Cannot login">Cannot login</option>
                                    <option value="Cannot place an order">Cannot place an order</option>
                                    <option value="Client feedback entry">Client feedback entry</option>
                                    <option value="General web issue">General web issue</option>
                                    <option value="Order return request">Order return request</option>
                                    <option value="Order tracking/history">Order tracking/history</option>Order invoice
                                    issue</option>
                                    <option value="Product information request">Product information request</option>
                                    <option value="Update my account/email information">Update my account/email information
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="">Comments</label>
                            <div>
                                <textarea class="form-control" name="comment" required id="" cols="50" rows="2"></textarea>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="">Contact me via</label><span
                                class="text-danger">*</span>
                            <div>
                                <input type="radio" id="" name="contact_by" value="Phone"
                                    onclick="onlyOne(this)">
                                <label for="" style="font-weight: normal;">Phone</label><br>
                                <input type="radio" id="" name="contact_by" value="Email"
                                    onclick="onlyOne(this)">
                                <label for="" style="font-weight: normal;">Email</label>
                            </div>
                        </div>
                        <button type="submit" class="common_button2">Hear from a specialist</button>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <br><br>
    <!-------------End--------->

    @include('frontend.footer')
    <script>
        function onlyOne(radio) {
            console.log('work');
            var checkboxes = document.getElementsByName('contact_by')
            checkboxes.forEach((item) => {
                if (item !== radio) item.checked = false
            })
        }
    </script>
@endsection
