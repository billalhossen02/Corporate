@extends('frontend.master')

@section('content')
    <!-- header section -->
    @include('frontend.header')
    <!-- header section End -->


    <link rel="stylesheet" href="style.css">
    <!-- banner single page start -->

    <section class="banner_single_page" style="background-image:url('{{ asset('storage/Banner/1664260881.jpg') }}')">
        <div class="container">
            <div class="single_banner_content">
                <!-- image -->
                <div class="single_banner_image">
                    <img src="" alt="">
                </div>
                <!-- heading -->
                <h1 class="single_banner_heading">Industries we serve</h1>
                <p class="single_banner_text">We combine deep industry experience and technology expertise to solve your IT
                    challenges.</p>
                <!-- single banner button -->
                <div class="single_buttton_wrapper">
                    <a href="#contact" class="single_banner_button">Talk to a specialist</a>
                </div>
            </div>
        </div>
    </section>

    <!-- banner single page end-->


    <!-- industry solution -->
    <section class="industry_solution section_padding">
        <div class="container">
            <!-- home title -->
            <div class="home_title" style="max-width: 1000px;">
                <h5 class="home_title_heading"> Solutions for your industry</h5>

                <p class="home_title_text">No two industries are the same. That’s why we tailor technology solutions to your
                    business sector. Whether you need a robust security system to protect your data and ensure compliance or
                    software that enhances your service delivery, we can help.</p>
            </div>

            <!-- wrapper -->

            <div class="industry_solution_wrapper">
                <!-- card item-->
                <div class="industry_solution_item">
                    <div class="industry_solution_item_content">
                        <!-- img -->
                        <div class="industy_solution_item_image">
                            <img src="assets/frontend/image/industry/construction-industry-icon.png" alt="">
                        </div>
                        <!-- name -->
                        <div class="industy_solution_item_name">
                            @foreach ($industries as $industry)
                                <p>{{ $industry->title }}</p>
                            @endforeach
                        </div>

                        <div class="industy_solution_item_text">
                            <p>Adopt rugged and easy-to-manage solutions and services that help you increase productivity
                                and reduce construction costs.</p>
                        </div>
                    </div>
                    <a href="{{ url('/blogs') }}" class="industry_solution_item_button">Explore our solutions →</a>
                </div>
                <!-- item end -->
            </div>
        </div>
    </section>
    <!-- industry solution end -->

    <!-- our clint tab -->

    <section class="clint_tab_section section_padding">
        <div class="container">

            <div class="clint_tab_content">
                <!-- home title -->
                <div class="home_title" style="max-width: 980px;">
                    <h5 class="home_title_heading"> Client success stories</h5>
                    <p class="home_title_text">See how we’ve helped organizations of all sizes — across every industry —
                        maximize the value of their IT solutions, leverage emerging technologies and create fresh
                        experiences.</p>
                </div>

                <!-- clint_tab_content_button  -->

                <div class="clint_tab_button">
                    <!-- tab button content -->
                    <div class="clint_tab_btn_content">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" data-bs-target="#clintFirstTab"
                                    data-bs-toggle="pill">HEALTHCARE</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-target="#clintSecondTab"
                                    data-bs-toggle="pill">HIGHER EDUCATION</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-target="#clintThirdTab"
                                    data-bs-toggle="pill">MINING</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-target="#clintFourthTab"
                                    data-bs-toggle="pill">ENERGY</a></li>
                        </ul>
                    </div>
                </div>

                <!-- clint tab contet area -->

                <div class="clint_tab_area_main tab-content">

                    <!-- single area -->
                    <div class="clint_tab_area tab-pane fade show active" id="clintFirstTab">
                        <!-- wrapper -->
                        <div class="clint_tab_area_wrapper">
                            <!-- thumbanial -->
                            <div class="clint_tab_area_thumbnail">
                                <div class="clint_tab_area_thumbnail_image">
                                    <img src="assets/image/tabs image/steward-health-care-transforms-care.jpg"
                                        alt="">
                                </div>

                                <div class="clint_tab_area_thumbnail_caption">
                                    <p>Steward Health Care reduces patient length of stay and improves care coordination
                                        with real-time data analytics.</p>
                                </div>
                            </div>


                            <!-- content -->
                            <div class="clint_tab_area_content">
                                <p class="clint_tab_content_title">Steward Health Care Transforms Care Through Digital
                                    Innovation</p>

                                <div class="clint_tab_content_text_area">
                                    <p class="clint_tab_content_text_title">Challenge</p>
                                    <p class="clint_tab_content_text_paragraph">Steward Health Care wanted to reduce
                                        patient length of stay and improve the overall patient experience.</p>
                                </div>

                                <div class="clint_tab_content_text_area">
                                    <p class="clint_tab_content_text_title">solutions</p>
                                    <p class="clint_tab_content_text_paragraph">Microsoft Azure role-based access
                                        control and encryption provide HIPAA-compliant security for a unified data
                                        monitoring platform that leverages real-time business data and analytics.</p>
                                </div>

                                <div class="clint_tab_content_text_area_list">
                                    <p class="clint_tab_content_text_title">Results</p>

                                    <ul>
                                        <li>98% accurate prediction of patient load out to a week at a time</li>
                                        <li>Reduced patient length of stay by 1.5 dayss</li>
                                        <li>Predictable staffing</li>
                                        <li>Reduced operational costs — saving millions of dollars per hospital, per
                                            year</li>
                                    </ul>
                                </div>

                                <!-- button -->
                                <div class="business_seftion_button" style="text-align: left;">
                                    <a href="#">Explore business outcomes</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- single area end -->



                    <!-- single area -->
                    <div class="clint_tab_area tab-pane fade" id="clintSecondTab">
                        <!-- wrapper -->
                        <div class="clint_tab_area_wrapper">
                            <!-- thumbanial -->
                            <div class="clint_tab_area_thumbnail">
                                <div class="clint_tab_area_thumbnail_image">
                                    <img src="assets/image/tabs image/bonvista-energy-move-to-the-cloud-thumbnail.jpg"
                                        alt="">
                                </div>

                                <div class="clint_tab_area_thumbnail_caption">
                                    <p>Steward Health Care reduces patient length of stay and improves care coordination
                                        with real-time data analytics.</p>
                                </div>
                            </div>


                            <!-- content -->
                            <div class="clint_tab_area_content">
                                <p class="clint_tab_content_title">College Campus Fast Tracks Deployment for Distance
                                    Learning</p>

                                <div class="clint_tab_content_text_area">
                                    <p class="clint_tab_content_text_title">Challenge</p>
                                    <p class="clint_tab_content_text_paragraph">The college needed a simplified way to
                                        standardize Apple across the board for a distance learning initiative within two
                                        departments. To add to this challenge, the organization needed more than 1,000
                                        MacBook and iPad devices deployed within a 30-day timeframe.</p>
                                </div>

                                <!-- solution list -->

                                <div class="clint_tab_content_text_area_list_marker">
                                    <p class="clint_tab_content_text_title">solution</p>

                                    <ul>
                                        <li> 1,000+ MacBook and iPad devices </li>
                                        <li> Accelerated device deployment </li>
                                        <li> Asset tagging for easy logistic management </li>
                                        <li> Apple device enrollment program </li>
                                        <li> Touchless deployment via Jamf Mobile Device Management </li>
                                    </ul>
                                </div>

                                <div class="clint_tab_content_text_area_list">
                                    <p class="clint_tab_content_text_title">Results</p>

                                    <ul>
                                        <li>98% accurate prediction of patient load out to a week at a time</li>
                                        <li>Reduced patient length of stay by 1.5 dayss</li>
                                        <li>Predictable staffing</li>
                                        <li>Reduced operational costs — saving millions of dollars per hospital, per
                                            year</li>
                                    </ul>
                                </div>

                                <!-- button -->
                                <div class="business_seftion_button" style="text-align: left;">
                                    <a href="#">Explore business outcomes</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- single area end -->



                    <!-- single area -->
                    <div class="clint_tab_area tab-pane fade" id="clintThirdTab">
                        <!-- wrapper -->
                        <div class="clint_tab_area_wrapper">
                            <!-- thumbanial -->
                            <div class="clint_tab_area_thumbnail">
                                <div class="clint_tab_area_thumbnail_image">
                                    <img src="assets/image/tabs image/college-campus-fast-tracks-deployment-for-distance-learning-thumb.jpg"
                                        alt="">
                                </div>

                                <div class="clint_tab_area_thumbnail_caption">
                                    <p>Steward Health Care reduces patient length of stay and improves care coordination
                                        with real-time data analytics.</p>
                                </div>
                            </div>


                            <!-- content -->
                            <div class="clint_tab_area_content">
                                <p class="clint_tab_content_title">Steward Health Care Transforms Care Through Digital
                                    Innovation</p>

                                <div class="clint_tab_content_text_area">
                                    <p class="clint_tab_content_text_title">Challenge</p>
                                    <p class="clint_tab_content_text_paragraph">Steward Health Care wanted to reduce
                                        patient length of stay and improve the overall patient experience.</p>
                                </div>

                                <div class="clint_tab_content_text_area">
                                    <p class="clint_tab_content_text_title">solutions</p>
                                    <p class="clint_tab_content_text_paragraph">Microsoft Azure role-based access
                                        control and encryption provide HIPAA-compliant security for a unified data
                                        monitoring platform that leverages real-time business data and analytics.</p>
                                </div>

                                <div class="clint_tab_content_text_area_list">
                                    <p class="clint_tab_content_text_title">Results</p>

                                    <ul>
                                        <li>98% accurate prediction of patient load out to a week at a time</li>
                                        <li>Reduced patient length of stay by 1.5 dayss</li>
                                        <li>Predictable staffing</li>
                                        <li>Reduced operational costs — saving millions of dollars per hospital, per
                                            year</li>
                                    </ul>
                                </div>

                                <!-- button -->
                                <div class="business_seftion_button" style="text-align: left;">
                                    <a href="#">Explore business outcomes</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- single area end -->


                    <!-- single area -->
                    <div class="clint_tab_area tab-pane fade" id="clintFourthTab">
                        <!-- wrapper -->
                        <div class="clint_tab_area_wrapper">
                            <!-- thumbanial -->
                            <div class="clint_tab_area_thumbnail">
                                <div class="clint_tab_area_thumbnail_image">
                                    <img src="assets/image/tabs image/newcrest-mining-improve-operations-with-azure-iot.jpg"
                                        alt="">
                                </div>

                                <div class="clint_tab_area_thumbnail_caption">
                                    <p>Steward Health Care reduces patient length of stay and improves care coordination
                                        with real-time data analytics.</p>
                                </div>
                            </div>


                            <!-- content -->
                            <div class="clint_tab_area_content">
                                <p class="clint_tab_content_title">Steward Health Care Transforms Care Through Digital
                                    Innovation</p>

                                <div class="clint_tab_content_text_area">
                                    <p class="clint_tab_content_text_title">Challenge</p>
                                    <p class="clint_tab_content_text_paragraph">Steward Health Care wanted to reduce
                                        patient length of stay and improve the overall patient experience.</p>
                                </div>

                                <div class="clint_tab_content_text_area">
                                    <p class="clint_tab_content_text_title">solutions</p>
                                    <p class="clint_tab_content_text_paragraph">Microsoft Azure role-based access
                                        control and encryption provide HIPAA-compliant security for a unified data
                                        monitoring platform that leverages real-time business data and analytics.</p>
                                </div>

                                <div class="clint_tab_content_text_area_list">
                                    <p class="clint_tab_content_text_title">Results</p>

                                    <ul>
                                        <li>98% accurate prediction of patient load out to a week at a time</li>
                                        <li>Reduced patient length of stay by 1.5 dayss</li>
                                        <li>Predictable staffing</li>
                                        <li>Reduced operational costs — saving millions of dollars per hospital, per
                                            year</li>
                                    </ul>
                                </div>

                                <!-- button -->
                                <div class="business_seftion_button" style="text-align: left;">
                                    <a href="#">Explore business outcomes</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- single area end -->

                </div>

            </div>
        </div>
    </section>

    <!-- our clint tab end -->

    <!-- we serve -->
    <section class="we_serve section_padding">
        <div class="container">
            <!-- wrapper -->

            <div class="we_serve_wrapper" style="align-items: center;">
                <!-- content -->
                <div class="we_serve_content">

                    <div class="solution_feature_title">Public sector industries</div>

                    <p class="solution_feature_text">Insight Public Sector has decades of experience helping organizations
                        achieve their mission. We offer end-to-end IT solutions and discounted products through purchasing
                        contracts.</p>

                    <a href="" class="product_button">Explore Insight Public Sector</a>
                </div>

                <!-- sidebar -->
                <div class="we_serve_sidebar">
                    <!-- sidebar list -->
                    <div class="we_serve_sidebar_list">
                        <ul>
                            <li><a href="">Federal government ›</a></li>
                            <li><a href="">Federal government ›</a></li>
                            <li><a href="">Federal government ›</a></li>
                            <li><a href="">Federal government ›</a></li>
                        </ul>

                    </div>
                </div>

            </div>


        </div>
    </section>
    <!-- we serve end -->

    <!-- pageform section -->

    <div id="contact" class="pageform_section section_padding">
        <div class="container">
            <!-- wrapper -->
            <div class="pageform_wrapper">
                <!-- content -->
                <div class="page_form_content">
                    <div class="clint_help_section_heading_wrapper" style="flex-direction: column;">
                        <!-- title -->
                        <h5 class="home_title_heading" style="text-align: left; color: #fff;"> <span>Ind</span>ustries we
                            serve</h5>
                        <p class="home_title_text" style=" color: #fff; text-align: left; max-width: 885px;">We offer
                            breadth and depth —
                            combining deep industry expertise and technical skills to connect you to the right IT solutions.
                            With one strategic partner, you’ll get guidance at any stage of your IT transformation journey.
                        </p>
                    </div>
                </div>
                <!-- pageform panel -->
                <div class="page_form_panel">
                    <div class="right_contact_form_content">
                        <p class="right_form_title">Hear from our team</p>
                        <p class="right_form_subtitle">A specialist will reach out soon.</p>

                        <!-- wrapper -->
                        <div class="form_item_wrapper">

                            <!-- form item -->
                            <div class="form_item_inner">
                                <input class="form_input" type="text" placeholder="First Name">
                                <label class="form_label" for="">First Name: *</label>
                            </div>

                            <!-- form item -->
                            <div class="form_item_inner">
                                <input class="form_input" type="text" placeholder="Last Name">
                                <label class="form_label" for="">Last Name: *</label>
                            </div>

                            <!-- form item -->
                            <div class="form_item_inner">
                                <input class="form_input" type="number" placeholder="Phone">
                                <label class="form_label" for="">Phone: *</label>
                            </div>

                            <!-- form item -->
                            <div class="form_item_inner">
                                <input class="form_input" type="email" placeholder="Business Email">
                                <label class="form_label" for="">Business Email: *</label>
                            </div>

                            <!-- form item -->
                            <div class="form_item_inner">
                                <select name="" id="" class="form_input">
                                    <option value="">Sate</option>
                                    <option value="">Dhaka</option>
                                    <option value="">Dinajpur</option>
                                    <option value="">Rangpur</option>
                                    <option value="">Panchagar</option>
                                    <option value="">Nilphamari</option>
                                    <option value="">Gajipur</option>
                                    <option value="">Sylhet</option>
                                </select>
                            </div>

                            <!-- form item -->
                            <div class="form_item_inner">
                                <select name="" id="" class="form_input">
                                    <option value="">Country</option>
                                    <option value="">Bangladesh</option>
                                    <option value="">India</option>
                                    <option value="">Pakistan</option>
                                    <option value="">Afganistan</option>
                                </select>
                                <!-- label -->
                                <label class="form_label" for="">Country: *</label>
                            </div>

                        </div>

                        <!-- form item -->
                        <div class="form_item_fullInner">
                            <input class="form_input" type="text" placeholder="Company/Organization">
                            <label class="form_label" for="">Company: *</label>
                        </div>

                        <!-- form item -->
                        <div class="form_item_fullInner">
                            <select name="" id="" class="form_input">
                                <option value="">Need help With...</option>
                                <option value="">Exploring solutions and services </option>
                                <option value="">Billing support </option>
                                <option value="">Order support </option>
                                <option value="">A general inquiry </option>
                            </select>
                        </div>

                        <!-- checkbox -->

                        <div class="form_checkbos_wrapper">
                            <!-- checkbox input -->
                            <div class="checkBox_inner">
                                <input type="checkbox">
                            </div>
                            <!-- content -->
                            <div class="checkBox_content">By checking this box, I consent to receive Insight marketing
                                emails. We respect your privacy and will not share your personal information with any other
                                company, person or identity.</div>
                        </div>

                        <!-- submit button -->
                        <a href="" class="single_banner_button" style="margin-top: 50px">Hear from a
                            specialist</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- feture content -->
    <div class="feature_content section_padding">
        <div class="container">
            <!-- section title -->
            <div class="section_title">
                <h3 class="title_top_heading">Featured content</h3>
            </div>
            <!-- wrapper -->
            <div class="feature_content_wrapper">
                <!-- item -->
                <a href="" class="feature_content_item">
                    <!-- image -->
                    <div class="feature_content_item_thumbnail">
                        <img src="assets/frontend/image/single page/feature/feature1.jpg" alt="">
                    </div>
                    <!-- content -->
                    <div class="feature_content_item_content">
                        <p class="feature_content_item_name"> Solution brief </p>
                        <p class="feature_content_item_text">Why Insight for Microsoft Cloud</p>
                    </div>
                </a>

                <!-- item -->
                <a href="" class="feature_content_item">
                    <!-- image -->
                    <div class="feature_content_item_thumbnail">
                        <img src="assets/frontend/image/single page/feature/feature2.jpg" alt="">
                    </div>
                    <!-- content -->
                    <div class="feature_content_item_content">
                        <p class="feature_content_item_name"> Solution brief </p>
                        <p class="feature_content_item_text">Why Insight for Microsoft Cloud</p>
                    </div>
                </a>


                <!-- item -->
                <a href="" class="feature_content_item">
                    <!-- image -->
                    <div class="feature_content_item_thumbnail">
                        <img src="assets/frontend/image/single page/feature/feature3.jpg" alt="">
                    </div>
                    <!-- content -->
                    <div class="feature_content_item_content">
                        <p class="feature_content_item_name"> Solution brief </p>
                        <p class="feature_content_item_text">Why Insight for Microsoft Cloud</p>
                    </div>
                </a>


                <!-- item -->
                <a href="" class="feature_content_item">
                    <!-- image -->
                    <div class="feature_content_item_thumbnail">
                        <img src="assets/frontend/image/single page/feature/feature4.jpg" alt="">
                    </div>
                    <!-- content -->
                    <div class="feature_content_item_content">
                        <p class="feature_content_item_name"> Solution brief </p>
                        <p class="feature_content_item_text">Why Insight for Microsoft Cloud</p>
                    </div>
                </a>

            </div>
        </div>
    </div>

    <!-- feture content end-->

    <!-- pageform section end-->
@endsection
