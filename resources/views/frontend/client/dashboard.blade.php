@extends('frontend.master')


@section('content')
    @include('frontend.header')


    <!--=========Content Wrapper=============-->
    @include('frontend.client.sidebar')

    <!--Content Wrapper-->
    <div class="d-flex">
        <div id="userSideButton_wrapper">
            <button class="sidebarButtonStyle" onclick="userDashboardSidebarClicked()">☰</button>
        </div>
        <div id="Content_Wrapper">
            <!--Content-->
            <section class="client_dashboard_content_wp">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 client_dashboard_welcome_section">
                        <h2>Welcome to my NGen it</h2>
                        <p>Welcome to myInsight myInsight is a global platform for optimizing your technology supply
                            chain. Here you can discover, purchase and manage your hardware, software and cloud
                            solutions. Our dedicated account management team is also available to provide the highest
                            level of personalized service and customer satisfaction.</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 client_dashboard_blog">
                        <h2>Order management</h2>
                        <ul>
                            <li>Get procurement support from your dedicated rep.</li>
                            <li>Determine <a href="">company standards</a> for products.</li>
                            <li>Set <a href="">customizable approval workflows.</a></li>
                            <li>Create and assign user <a href="">roles and permissions.</a></li>
                            <a href="#" class="common_button_dashboard mt-4">Learn more</a>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 client_dashboard_blog">
                        <h2>Shopping</h2>
                        <ul>
                            <li>Source technology solutions from thousands of partners.</li>
                            <li>Get exclusive pricing, reduced shipping rates and <a href="">customizable product
                                    catalogs.</a></li>
                            <li>Create <a href=""> order templates and quotes</a>to save for later.</li>
                            <li>Transition from<a href="">tactical to strategic procurement</a> and
                                implementation.</li>
                            <a href="#" class="common_button_dashboard mt-4">Learn more</a>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </div>
    </div>
    @include('frontend.footer')
@endsection
