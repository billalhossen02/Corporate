@extends('frontend.master')
@include('frontend.header')
@section('content')
    <!-- banner single page start -->
    <section class="banner_single_page">
        <div class="container">
            <div class="single_banner_content" style="max-width: 800px">
                <!-- image -->
                <div class="single_banner_image">
                    <img src="assets/image/single page/banner/microsoft-surface.png" alt="">
                </div>
                <!-- heading -->
                <h1 class="single_banner_heading">Technology deals</h1>
                <p class="single_banner_text">Browse and save on exclusive tech deals from Insight. We offer deep discounts
                    on electronics, devices and software, including refurbished and open-box offers.</p>
                <!-- single banner button -->
                <div class="single_buttton_wrapper">
                    <a href="" class="single_banner_button">Explore tech deals</a>
                    <a href="" class="single_banner_button single_banner_button2">Shop refurbished</a>
                </div>
            </div>
        </div>
    </section>
    <!-- banner single page end-->

    <!-- techdeals product -->

    <section class="techdeals_section section_padding">
        <div class="container">
            <div class="section_title" style="max-width: 1024px">
                <h3 class="title_top_heading">Featured deals</h3>
                <p class="title_tex_content">Discover our latest discounts and limited-time offers on the technology brands
                    and devices your business trusts.</p>
            </div>

            <div class="techdeals_product_wrapper" id="tech_deals_item">

                <!-- item -->
                <div class="techdeals_product_item" id="">
                    <!-- thumbnail -->
                    <div class="techdeals_product_thumbnail">
                        <img src="assets/frontend/image/brand/tech.jpg" alt="">
                    </div>
                    <!-- content -->
                    <div class="techdeals_product_content">
                        <p class="techdeals_product_title">HP EliteBook 840 G8 Notebook - 14" - Core i5 1145G7 - vPro - 16
                            GB RAM - 256 GB SSD - US</p>
                        <!-- price -->
                        <p class="techdeals_product_price">
                            <span>$449.99</span>
                            <span>USD </span>
                        </p>
                        <!-- button -->
                        <div class="techdeals_product_button">
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- techdeals product end -->

    <!-- techdeals refurbished  -->

    <div class="techRefer_section section_padding">
        <div class="container">
            <div class="single_banner_content" style="max-width: 100%;">
                <!-- image -->
                <div class="single_banner_image">
                    <img src="assets/frontend/image/brand/techdelas.png" alt="">
                </div>
                <!-- heading -->
                <h1 class="single_banner_heading" style="color: #222222; font-size: 34px; line-height: 40px">Trust Insight
                    for refurbished products.</h1>
                <p class="single_banner_text" style="color: #3e332d; font-size: 16px;">We offer a range of certified
                    refurbished hardware that meets your business needs at a lower price point. From desktops to notebooks
                    to monitors, our refurbished products deliver the performance, support and customization you depend on.
                    And, as a Microsoft Authorized Refurbisher, we adhere to strict requirements that ensure the quality of
                    our refurbished Microsoft hardware.</p>
                <!-- single banner button -->
                <div class="single_buttton_wrapper">
                    <a href="" class="single_banner_button single_banner_button2">Learn more about refurbished
                        products</a>
                </div>
            </div>
        </div>
    </div>

    <!-- techdeals refurbished  end -->

    <!-- refurbished category -->

    <div class="refur_category section_padding">
        <div class="container">
            <div class="refur_category_wrapper" id="refur_category_wrapper">


                <div class="refur_category_item">

                    <div class="refur_cateItem_thumbnail">
                        <img src="assets/frontend/image/brand/refur1.png" alt="">
                    </div>

                    <div class="refur_cateItem_name">
                        <a href="#">Refurbished notebooks</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- refurbished category end -->

    <!-- refurbished brand -->

    <div class="refur_brand_section">
        <div class="container">
            <!-- title -->
            <div class="section_title">
                <h3 class="title_top_heading"
                    style="font-size: 24px; line-height: 30px;color: #5f5753;font-weight: 500;font-family: monospace; word-spacing: -5px;">
                    Shop featured refurbished partners</h3>
            </div>
            <div class="refur_brand_wrapper" id="refur_brand_wrapper">
                <!-- item -->
                <div class="refur_brand_item">
                    <img src="assets/frontend/image/brand/techbrand.png" alt="">
                </div>

            </div>
        </div>
    </div>

    <!-- section altra -->

    <div class="product_altra">
        <div class="container">
            <div class="section_title">
                <h3 class="title_top_heading"
                    style="font-size: 24px; line-height: 30px;color: #5f5753;font-weight: 500;font-family: monospace; word-spacing: -5px;">
                    Shop featured refurbished partners</h3>
            </div>

            <div class="product_altra_wrapper">

                <!-- item -->
                <div class="techdeals_product_item techdeals_product_altra">
                    <!-- thumbnail -->
                    <div class="techdeals_product_thumbnail">
                        <img src="assets/frontend/image/brand/tech.jpg" alt="">
                    </div>
                    <!-- content -->
                    <div class="techdeals_product_content">
                        <p class="techdeals_product_title"> HP EliteBook 840 G8 Notebook - 14 " - Core i5 1145 G7 - vPro -
                            16 GB RAM - 256 GB SSD - US </p>
                        <!-- price -->
                        <p class="techdeals_product_price">
                            <span>$449.99</span>
                            <span>USD </span>
                        </p>
                        <!-- button -->
                        <div class="techdeals_product_button">
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                </div>

                <!-- item -->
                <div class="techdeals_product_item techdeals_product_altra">
                    <!-- thumbnail -->
                    <div class="techdeals_product_thumbnail">
                        <img src="assets/frontend/image/brand/tech.jpg" alt="">
                    </div>
                    <!-- content -->
                    <div class="techdeals_product_content">
                        <p class="techdeals_product_title"> HP EliteBook 840 G8 Notebook - 14 " - Core i5 1145 G7 - vPro -
                            16 GB RAM - 256 GB SSD - US </p>
                        <!-- price -->
                        <p class="techdeals_product_price">
                            <span>$449.99</span>
                            <span>USD </span>
                        </p>
                        <!-- button -->
                        <div class="techdeals_product_button">
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- section altra end-->

    <!-- refurbished brand end -->

    <!-- slider -->
    <section class="popular_product_section section_padding">
        <!-- container -->
        <div class="container">
            <div class="popular_product_section_content">
                <!-- section title -->
                <div class="section_title">
                    <h3 class="title_top_heading">Featured cables</h3>
                </div>
                <!-- wrapper -->
                <div class="populer_product_slider">

                    <!-- product_item -->

                    <div class="product_item">
                        <!-- image -->
                        <div class="product_item_thumbnail">
                            <img src="assets/frontend/image/single page/single product/product8.jpg" alt="">
                        </div>

                        <!-- product content -->
                        <div class="product_item_content">
                            <a href="" class="product_item_content_name">Microsoft Wireless Desktop 2000 - keyboard
                                and mouse set - QWERTY - US - black</a>

                            <!-- price -->
                            <div class="product_item_price">
                                <span class="price_currency">usd</span>
                                <span class="price_currency_value">$856</span>
                            </div>

                            <!-- button -->
                            <a href="" class="product_button">Add to Basket</a>
                        </div>

                    </div>
                    <!-- product item -->


                    <!-- product_item -->

                    <div class="product_item">
                        <!-- image -->
                        <div class="product_item_thumbnail">
                            <img src="assets/frontend/image/single page/single product/product8.jpg" alt="">
                        </div>

                        <!-- product content -->
                        <div class="product_item_content">
                            <a href="" class="product_item_content_name">Microsoft Wireless Desktop 2000 - keyboard
                                and mouse set - QWERTY - US - black</a>

                            <!-- price -->
                            <div class="product_item_price">
                                <span class="price_currency">usd</span>
                                <span class="price_currency_value">$856</span>
                            </div>

                            <!-- button -->
                            <a href="" class="product_button">Add to Basket</a>
                        </div>

                    </div>
                    <!-- product item -->


                    <!-- product_item -->

                    <div class="product_item">
                        <!-- image -->
                        <div class="product_item_thumbnail">
                            <img src="assets/frontend/image/single page/single product/product9.jpg" alt="">
                        </div>

                        <!-- product content -->
                        <div class="product_item_content">
                            <a href="" class="product_item_content_name">Microsoft Wireless Desktop 2000 - keyboard
                                and mouse set - QWERTY - US - black</a>

                            <!-- price -->
                            <div class="product_item_price">
                                <span class="price_currency">usd</span>
                                <span class="price_currency_value">$856</span>
                            </div>

                            <!-- button -->
                            <a href="" class="product_button">Add to Basket</a>
                        </div>

                    </div>
                    <!-- product item -->



                    <!-- product_item -->

                    <div class="product_item">
                        <!-- image -->
                        <div class="product_item_thumbnail">
                            <img src="assets/frontend/image/single page/single product/product10.jpg" alt="">
                        </div>

                        <!-- product content -->
                        <div class="product_item_content">
                            <a href="" class="product_item_content_name">Microsoft Wireless Desktop 2000 - keyboard
                                and mouse set - QWERTY - US - black</a>

                            <!-- price -->
                            <div class="product_item_price">
                                <span class="price_currency">usd</span>
                                <span class="price_currency_value">$856</span>
                            </div>

                            <!-- button -->
                            <a href="" class="product_button">Add to Basket</a>
                        </div>

                    </div>
                    <!-- product item -->


                    <!-- product_item -->

                    <div class="product_item">
                        <!-- image -->
                        <div class="product_item_thumbnail">
                            <img src="assets/frontend/image/single page/single product/product11.jpg" alt="">
                        </div>

                        <!-- product content -->
                        <div class="product_item_content">
                            <a href="" class="product_item_content_name">Microsoft Wireless Desktop 2000 - keyboard
                                and mouse set - QWERTY - US - black</a>

                            <!-- price -->
                            <div class="product_item_price">
                                <span class="price_currency">usd</span>
                                <span class="price_currency_value">$856</span>
                            </div>

                            <!-- button -->
                            <a href="" class="product_button">Add to Basket</a>
                        </div>

                    </div>
                    <!-- product item -->


                </div>
            </div>
        </div>
    </section>

    <!-- category -->
    <section class="network_cable section_padding" style="background: #F7F6F5;">
        <div class="container">

            <div class="section_title">
                <h3 class="title_top_heading">By brand</h3>
            </div>

            <div class="refur_brand_wrapper">

                <!-- item -->
                <div class="category_item_inner">
                    <!-- image -->
                    <div class="category_item_image">
                        <img src="assets/frontend/image/brand/apc.png" alt="">
                    </div>
                    <!-- title -->
                    <div class="category_item_title">Ethernet</div>
                </div>

                <!-- item -->
                <div class="category_item_inner">
                    <!-- image -->
                    <div class="category_item_image">
                        <img src="assets/frontend/image/brand/cisco.png" alt="">
                    </div>
                    <!-- title -->
                    <div class="category_item_title">Ethernet</div>
                </div>

                <!-- item -->
                <div class="category_item_inner">
                    <!-- image -->
                    <div class="category_item_image">
                        <img src="assets/frontend/image/brand/axiom.png" alt="">
                    </div>
                    <!-- title -->
                    <div class="category_item_title">Ethernet</div>
                </div>

                <!-- item -->
                <div class="category_item_inner">
                    <!-- image -->
                    <div class="category_item_image">
                        <img src="assets/frontend/image/brand/lexmark.png" alt="">
                    </div>
                    <!-- title -->
                    <div class="category_item_title">Ethernet</div>
                </div>

                <!-- item -->
                <div class="category_item_inner">
                    <!-- image -->
                    <div class="category_item_image">
                        <img src="assets/frontend/image/brand/2.png" alt="">
                    </div>
                    <!-- title -->
                    <div class="category_item_title">Ethernet</div>
                </div>
                <!-- item -->
                <div class="category_item_inner">
                    <!-- image -->
                    <div class="category_item_image">
                        <img src="assets/frontend/image/brand/3.png" alt="">
                    </div>
                    <!-- title -->
                    <div class="category_item_title">Ethernet</div>
                </div>
                <!-- item -->
                <div class="category_item_inner">
                    <!-- image -->
                    <div class="category_item_image">
                        <img src="assets/frontend/image/brand/hdmi.png" alt="">
                    </div>
                    <!-- title -->
                    <div class="category_item_title">Ethernet</div>
                </div>
                <!-- item -->
                <div class="category_item_inner">
                    <!-- image -->
                    <div class="category_item_image">
                        <img src="assets/frontend/image/brand/1.png" alt="">
                    </div>
                    <!-- title -->
                    <div class="category_item_title">Ethernet</div>
                </div>

            </div>

        </div>
    </section>
    @include('frontend.footer')
@endsection
