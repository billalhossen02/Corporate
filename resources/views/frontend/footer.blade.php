<footer class="container-fluid p-0">
    <!-- footyer gradient -->
    <div class="footer_top">
        <p class="p-0 m-0">We deliver NGen IT Intelligent Technology Solutions expertise.</p>
    </div>

    <!-- main footer -->
    <div class="footer_middle">
        <div class="row footer_middle_wrapper">
            <!-- item -->
            <div class="col-lg-4 col-md-8 col-sm-12 footer_item_wrapper">
                <!-- title -->
                <h6>Newsletter</h6>
                <!-- text -->
                <p>Sign up to receive the IT content that matters most to you. You can update your preferences or
                    unsubscribe any time.</p>
                <!-- button -->
                <button style="font-size: 14px" class="common_button2" data-toggle="modal"
                    data-target="#exampleModalCenter">Sign up for our
                    newsletter</button>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content" style="background-color:rgba(119, 15, 100, 0.24)">
                        <div class="modal-body">
                            <div class="popup_modal p-0 m-0">
                                {{-- content --}}
                                <div class="popup_modal_content"
                                    style="max-width: 570px; border: unset; background: linear-gradient(90deg, #af4286, #dd7fcd 100%, transparent 0);">
                                    <div class="popup_modal_content_wrapper">
                                        <!-- image -->
                                        <div class="neweLetter_image">
                                            <img src="{{ asset('assets/frontend/image/title-shape.png') }}"
                                                alt="">
                                        </div>
                                        <!-- title -->
                                        <div class="neweLetter_title">
                                            <p> Our NewsLetter</p>
                                        </div>
                                        <!-- new form -->
                                        <div class="news_form_content">
                                            <div class="news_form_inner">
                                                <form action="{{ route('newsletter') }}" method="POST">
                                                    @csrf
                                                    <input type="email" class=" form_newsletter" name="email"
                                                        placeholder="Enter Your Email..."
                                                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                                                    <button type="submit" class="newsLetter_btn">Subscribe</button>
                                                </form>
                                            </div>
                                            <div class="news_form_text">
                                                <p>We are going to send to mail </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- item -->
            <div class="col-lg-2 col-md-4 col-sm-6 footer_item_wrapper">
                <!-- title -->
                <h6>About NgenIt</h6>
                <!-- nav list -->
                <div class="footer_nav_list">
                    <ul>
                        <li><a href="{{ url('about.html') }}">Company overview</a></li>
                        <li><a href="">Principal</a></li>
                        <li><a href="">Partners</a></li>
                        <li><a href="">Clients</a></li>
                    </ul>
                </div>
            </div>

            <!-- item -->
            <div class="col-lg-2 col-md-4 col-sm-6 footer_item_wrapper">
                <!-- title -->
                <h6 class="main_footer_item_title">Products & Services</h6>
                <!-- nav list -->
                <div class="footer_nav_list">
                    <ul>
                        <li><a href="{{ route('filter') }}">Products</a></li>
                        <li><a href="">Services</a></li>
                        <li><a href="{{ route('blogs') }}">Solutions</a></li>
                        <li><a href="">Industry</a></li>
                        <li><a href="">TechViews</a></li>
                    </ul>
                </div>
            </div>

            <!-- item -->
            <div class="col-lg-2 col-md-4 col-sm-6 footer_item_wrapper">
                <!-- title -->
                <h6 class="main_footer_item_title">Features & Knowledge </h6>
                <!-- nav list -->
                <div class="footer_nav_list">
                    <ul>
                        <li><a href="{{ url('knowledge') }}">Knowledge base</a></li>
                        <li><a href="{{ route('login') }}">NGEN IT Account</a></li>
                </div>
            </div>

            <!-- item -->
            <div class="col-lg-2 col-md-4 col-sm-6 footer_item_wrapper">
                <!-- title -->
                <h6 class="main_footer_item_title">Help And Support</h6>
                <!-- nav list -->
                <div class="footer_nav_list">
                    <ul>
                        <li><a href="{{ url('/contact') }}">Contact us</a></li>
                        <li><a>FAQs</a></li>
                        <li><a href="{{ url('order/track') }}">Order Helps</a></li>
                        <li><a href="{{ url('order/track') }}">Order Tracks</a></li>
                        <li><a href="{{ url('/support') }}">Supports</a></li>
                </div>
            </div>
        </div>
    </div>

    <!-- footer social -->
    <div class="social_icon_wrapper">
        <div class="footer_social_icon">
            <ul>
                <li><a href="{{ url('https://www.linkedin.com/company/ngenitltd') }}"><i
                            class="fa-brands fa-linkedin"></i></a></li>
                <li><a href="{{ url('https://www.facebook.com/ngenitltd/') }}"><i
                            class="fa-brands fa-square-facebook"></i></a></li>
                <li><a href="{{ url('https://twitter.com/ngenit?lang=en') }}"><i class="fa-brands fa-twitter"></i></a>
                </li>
                <li><a href="{{ url('coming_soon') }}"><i class="fa-brands fa-youtube"></i></a></li>
                <li><a href="{{ url('coming_soon') }}"><i class="fa-brands fa-instagram"></i> </a></li>
            </ul>
        </div>
    </div>

    <!-- footer bottom -->

    <div class="footer_bottom">
        <div class="footer_bottom_wrapper">
            <!-- copy -->
            <div class="footer_copy">&copy NgenIt</div>
            <!-- footer bottom list -->
            <div class="footer_bottom_list">
                <ul>
                    <li><a href="{{ url('privacy') }}">Privacy policy</a></li>
                    <li><a href="{{ url('terms') }}">All Terms & Policies</a></li>
                    <li><a href="{{ url('web-accessibility') }}">Web Accessibility</a></li>
                    <li><a href="{{ url('tech_glossary') }}">Tech glossary</a></li>
                    <li><a href="{{ url('sitemap') }}">Sitemap</a></li>
                    <li><label for="show_cookies">Cookies settings</label></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!--==============Cookises Modals================-->
<section class="cookises_settings_wrapper">

    <input type="checkbox" id="show_cookies">
    <!-- <label for="show_cookies">View Form</label> -->

    <!--Content Wrapper-->
    <div class="cookises_settings_pop">
        <label for="show_cookies" class="close-btn fas fa-times" title="close"></label>
        <div class="modal_title_cookises">
            <img src="{{ asset('assets/frontend/image/Logo/logo.png') }}" alt="">
            <h2 class="align-middle">Privacy Preference Center</h2>
        </div>
        <!--------Cookies Tab content-------->
        <div id="Cookies" class="tab_cookises_wrapper">
            <div class="tab_cookises_settings">
                <button class="tablinks" onclick="openCity(event, 'Privacy')" id="defaultOpen">Your privacy</button>
                <button class="tablinks" onclick="openCity(event, 'Strictly')">Strictly necessary cookies</button>
                <button class="tablinks" onclick="openCity(event, 'Performance')">Performance cookies</button>
                <button class="tablinks" onclick="openCity(event, 'Functional')">Functional cookies</button>
                <button class="tablinks" onclick="openCity(event, 'Targeting')">Targeting cookies</button>
            </div>

            <div id="Privacy" class="tab_cookises_tabcontent">
                <h5>Your privacy</h5>
                <p>When you visit any website, it may store or retrieve information on your browser, mostly in the form
                    of cookies. This information might be about you, your preferences or your device and is mostly used
                    to make the site work as you expect it to. The information does not usually directly identify you,
                    but it can give you a more personalized web experience. Because we respect your right to privacy,
                    you can choose not to allow some types of cookies. Click on the different category headings to find
                    out more and change our default settings. However, blocking some types of cookies may impact your
                    experience of the site and the services we are able to offer. You can get more information by going
                    to our Privacy Policy or Statement in the footer of the website.</p>
            </div>

            <div id="Strictly" class="tab_cookises_tabcontent">
                <div class="d-flex justify-content-between">
                    <h5>Strictly necessary cookies</h5>
                    <h5 style="color: #ae0a46; display: inline;">Always active</h5>
                </div>

                <p>These cookies are necessary for the website to function and cannot be switched off in our systems.
                    They are usually only set in response to actions made by you which amount to a request for services,
                    such as setting your privacy preferences, logging in or filling in forms. You can set your browser
                    to block or alert you about these cookies, but some parts of the site will not then work. These
                    cookies do not store any personally identifiable information.</p>

                <a href="#">Cookies details</a>

            </div>

            <div id="Performance" class="tab_cookises_tabcontent">
                <div class="d-flex justify-content-between">
                    <h5>Performance cookies</h5>
                    <label class="switch">
                        <input type="checkbox" id="myCheckboxbtn" onclick="myCheckboxbtn()" checked>
                        <span class="slider round"></span>
                    </label>
                </div>

                <p>These cookies allow us to count visits and traffic sources so we can measure and improve the
                    performance of our site. They help us to know which pages are the most and least popular and see how
                    visitors move around the site. Most of these cookies collect and process aggregated (anonymized)
                    information without identifying individuals. If you do not allow these cookies we will not know when
                    you have visited our site, and will not be able to monitor its performance.</p>

                <a href="#" onclick="switchVisible();" value="Click"> Cookies details</a>
            </div>

            <div id="Functional" class="tab_cookises_tabcontent">
                <div class="d-flex justify-content-between">
                    <h5>Functional cookies</h5>
                    <label class="switch">
                        <input type="checkbox" id="myCheckboxbtn1" onclick="myCheckboxbtn1()" checked>
                        <span class="slider round"></span>
                    </label>
                </div>

                <p>These cookies enable the website to provide enhanced functionality and personalisation. They may be
                    set by us or by third party providers whose services we have added to our pages. If you do not allow
                    these cookies then some or all of these services may not function properly.</p>

                <a href="#" onclick="switchVisible();" value="Click"> Cookies details</a>
            </div>

            <div id="Targeting" class="tab_cookises_tabcontent">
                <div class="d-flex justify-content-between">
                    <h5>Targeting cookies</h5>
                    <label class="switch">
                        <input type="checkbox" id="myCheckboxbtn2" onclick="myCheckboxbtn2()" checked>
                        <span class="slider round"></span>
                    </label>
                </div>

                <p>These cookies may be set through our site by our advertising partners. They may be used by those
                    companies to build a profile of your interests and show you relevant adverts on other sites. They do
                    not store directly personal information, but are based on uniquely identifying your browser and
                    internet device. If you do not allow these cookies, you will experience less targeted advertising.
                </p>

                <a href="#" onclick="switchVisible();" value="Click"> Cookies details</a>
            </div>
        </div>
        <!--------Cookies Details----------->
        <div id="Cookies_details" class="Cookies_details_wrapper">
            <div class="cookie_list_filter row d-flex">
                <div class="col-4 d-flex">
                    <label onclick="switchVisible();" value="Click"><i
                            class="fa-solid fa-angle-left fa-xl"></i></label>
                    <h5>Cookie List</h5>
                </div>
                <div class="col-8 d-flex justify-content-end">
                    <form class="cookies_search_btn d-flex" action="">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    <button class="cookie_filter_icon"><i class="fa-solid fa-filter fa-xl"></i></button>
                </div>
            </div>
            <div class="cookie_list_content">
                <div class="cookie_list_content_item">
                    <!--====///First///====-->
                    <button class="collapsible">First party cookies</button>
                    <div class="content">
                        <!--Item-->
                        <ul>
                            <li>
                                <div class="cookie_veiw_name">Name</div>
                                <div class="cookie_veiw_title">trwv.vc</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Host</div>
                                <div class="cookie_veiw_title">ngenit.com</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Duration</div>
                                <div class="cookie_veiw_title">A few seconds</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Type</div>
                                <div class="cookie_veiw_title">First Party</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Category</div>
                                <div class="cookie_veiw_title">Targeting cookies</div>
                            </li>
                        </ul>

                        <!--Item-->
                        <ul>
                            <li>
                                <div class="cookie_veiw_name">Name</div>
                                <div class="cookie_veiw_title">trwv.vc</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Host</div>
                                <div class="cookie_veiw_title">ngenit.com</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Duration</div>
                                <div class="cookie_veiw_title">A few seconds</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Type</div>
                                <div class="cookie_veiw_title">First Party</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Category</div>
                                <div class="cookie_veiw_title">Targeting cookies</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Description</div>
                                <div class="cookie_veiw_title">Marketo - These cookies store the total number of visits
                                    each visitor has to the Site, track email recipient behavior to measure campaign
                                    effectiveness and personalize Site content based on information known about the
                                    visitor.</div>
                            </li>
                        </ul>
                        <!--Item-->
                        <ul>
                            <li>
                                <div class="cookie_veiw_name">Name</div>
                                <div class="cookie_veiw_title">trwv.vc</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Host</div>
                                <div class="cookie_veiw_title">ngenit.com</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Duration</div>
                                <div class="cookie_veiw_title">A few seconds</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Type</div>
                                <div class="cookie_veiw_title">First Party</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Category</div>
                                <div class="cookie_veiw_title">Targeting cookies</div>
                            </li>
                        </ul>

                        <!--Item-->
                        <ul>
                            <li>
                                <div class="cookie_veiw_name">Name</div>
                                <div class="cookie_veiw_title">trwv.vc</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Host</div>
                                <div class="cookie_veiw_title">ngenit.com</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Duration</div>
                                <div class="cookie_veiw_title">A few seconds</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Type</div>
                                <div class="cookie_veiw_title">First Party</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Category</div>
                                <div class="cookie_veiw_title">Targeting cookies</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Description</div>
                                <div class="cookie_veiw_title">Marketo - These cookies store the total number of visits
                                    each visitor has to the Site, track email recipient behavior to measure campaign
                                    effectiveness and personalize Site content based on information known about the
                                    visitor.</div>
                            </li>
                        </ul>
                    </div><br>

                    <!--====///First///====-->
                    <button class="collapsible">exchange.mediavine.com</button>
                    <div class="content">
                        <!--Item-->
                        <ul>
                            <li>
                                <div class="cookie_veiw_name">Name</div>
                                <div class="cookie_veiw_title">trwv.vc</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Host</div>
                                <div class="cookie_veiw_title">ngenit.com</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Duration</div>
                                <div class="cookie_veiw_title">A few seconds</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Type</div>
                                <div class="cookie_veiw_title">First Party</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Category</div>
                                <div class="cookie_veiw_title">Targeting cookies</div>
                            </li>
                        </ul>

                        <!--Item-->
                        <ul>
                            <li>
                                <div class="cookie_veiw_name">Name</div>
                                <div class="cookie_veiw_title">trwv.vc</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Host</div>
                                <div class="cookie_veiw_title">ngenit.com</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Duration</div>
                                <div class="cookie_veiw_title">A few seconds</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Type</div>
                                <div class="cookie_veiw_title">First Party</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Category</div>
                                <div class="cookie_veiw_title">Targeting cookies</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Description</div>
                                <div class="cookie_veiw_title">Marketo - These cookies store the total number of visits
                                    each visitor has to the Site, track email recipient behavior to measure campaign
                                    effectiveness and personalize Site content based on information known about the
                                    visitor.</div>
                            </li>
                        </ul>
                        <!--Item-->
                        <ul>
                            <li>
                                <div class="cookie_veiw_name">Name</div>
                                <div class="cookie_veiw_title">trwv.vc</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Host</div>
                                <div class="cookie_veiw_title">ngenit.com</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Duration</div>
                                <div class="cookie_veiw_title">A few seconds</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Type</div>
                                <div class="cookie_veiw_title">First Party</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Category</div>
                                <div class="cookie_veiw_title">Targeting cookies</div>
                            </li>
                        </ul>

                        <!--Item-->
                        <ul>
                            <li>
                                <div class="cookie_veiw_name">Name</div>
                                <div class="cookie_veiw_title">trwv.vc</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Host</div>
                                <div class="cookie_veiw_title">ngenit.com</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Duration</div>
                                <div class="cookie_veiw_title">A few seconds</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Type</div>
                                <div class="cookie_veiw_title">First Party</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Category</div>
                                <div class="cookie_veiw_title">Targeting cookies</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Description</div>
                                <div class="cookie_veiw_title">Marketo - These cookies store the total number of visits
                                    each visitor has to the Site, track email recipient behavior to measure campaign
                                    effectiveness and personalize Site content based on information known about the
                                    visitor.</div>
                            </li>
                        </ul>
                    </div><br>

                </div>


            </div>
        </div>
        <div class="modal_footer_cookises">
            <div class="d-flex justify-content-between">
                <button class="btn_footer_cookises"><strong> Confirm choices</strong></button>
                <!--Show & Hide butoon-->
                <button class="btn_footer_cookises" id="btn_show"><strong> Allow cookises</strong></button>
            </div>

            <div class="text_footer_cookises">
                <p>Powered by<span class="text-success h6">OneTrust</span></p>
            </div>
        </div>
    </div>
</section>
