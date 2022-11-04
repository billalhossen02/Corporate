<header class="header_section">
    <!-- header_top -->
    <div class="header_top">
        <div class="header_top_wrapper">
            <!-- left -->
            <div class="header_top_left">
                <div class="header_top_nav">
                    <ul>
                        <li class="nav_respons">
                            <span>Tools</span>
                            <span class="header_top_svg"><svg class="c-icon c-icon--dropdown" viewBox="0 0 192 512">
                                    <polygon points="0,208 96,304 192,208"></polygon>
                                </svg></span>

                            <!-- Top hover sub nav -->
                            <div class="top_header_subNav">
                                <ul>
                                    <li><a href=""> Track an order</a></li>
                                    <li><a href=""> Learn more about our tools</a></li>
                                    <li><a href=""> Cloud Management Platform</a></li>
                                    <li><a href=""> Dashboards</a></li>
                                    <li><a href=""> Order tracking & reporting</a></li>
                                    <li><a href=""> Personalization & preferences</a></li>
                                    <li><a href=""> Procurement integration</a></li>
                                    <li><a href=""> Purchasing options</a></li>
                                    <li><a href=""> Renewals & Warranty Manager</a></li>
                                    <li><a href=""> Software asset management tools</a></li>
                                </ul>
                            </div>

                        </li>
                        <li class="nav_respons">
                            <span>Support</span>
                            <span class="header_top_svg"><svg class="c-icon c-icon--dropdown" viewBox="0 0 192 512">
                                    <polygon points="0,208 96,304 192,208"></polygon>
                                </svg></span>

                            <!-- Top hover sub nav -->
                            <div class="top_header_subNav">
                                <ul>
                                    <li><a href="">Chat With Us</a></li>
                                    <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                                    <li><a href="">Call Support</a></li>
                                    <li><a href="">Knowdlge Base</a></li>
                                    <li><a href="">Web Support Assistance</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- middile -->
            <div class="header_top_middile">
                <div class="header_top_nav">
                    <ul>
                        <li class="nav_respons"> <span class="nav_top_ic"><i style="font-size:19px"
                                    class="fa-brands fa-whatsapp"></i>
                            </span><a href="https://wa.me/+8801714243446" target="_blank">01714243446</a></li>
                        <li><a href="mailto:Sales@ngenitltd.com"> <span class="nav_top_ic"><i
                                        class="fa-regular fa-envelope"></i>
                                </span>Sales@ngenitltd.com</a></li>
                    </ul>
                </div>
            </div>

            <!-- right -->
            <div class="header_top_right" id="header_right">
                <div class="header_top_nav">
                    <ul>
                        @if (Auth::check())
                            <div class="dropdown">
                                <button style="border: none" class="btn-sm dropdown-toggle" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-user-large"></i> {{ Auth::user()->name }}
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="{{ url('client/dashboard') }}">Dashboard</a></li>
                                    <li><a class="dropdown-item" href="{{ url('order/track') }}">Order List</a></li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ url('logout') }}">Logout</a>
                                    </li>
                                </ul>
                            </div>
                        @else
                            <li class="nav-respons">
                                <a style="color: #fff;" href="{{ route('login') }}">
                                    Sign in
                                </a>
                                <span class="header_top_svg"><svg class="c-icon c-icon--dropdown" viewBox="0 0 192 512">
                                        <polygon points="0,208 96,304 192,208"></polygon>
                                    </svg></span>

                                <div class="top_header_subNav" style="left: -165px !important">
                                    <ul>
                                        <li><a href="{{ route('register') }}">Sign up</a></li>
                                        <li><a href="{{ route('forgot') }}">Forgot Password</a></li>
                                    </ul>
                                </div>
                            </li>
                        @endif

                        <li class="nav_response_card">
                            <div class="dropdown">
                                <a data-toggle="">
                                    <i class="fa fa-shopping-cart"><span class='badge'
                                            id='lblCartCount'>{{ \Cart::getContent()->count() }}</span>
                                    </i>
                                </a>
                                <div class="dropdown-menu ddcss"
                                    style="padding:15px; width:330px !important; box-shadow:0px 5px 30px black; transform:translate3d(-287px, 30px, 0px) !important">
                                    <div class="row total-header-section">
                                        <div class="col-lg-4 col-sm-4 col-4">
                                            <a href="{{ route('cart.list') }}">
                                                <p style="color:#AE0A46">View all</p>
                                            </a>
                                        </div>
                                        <div class="col-lg-8 col-sm-8 col-8 total-section text-right">
                                            <p>Total: <span
                                                    class="text-info">${{ number_format(Cart::getTotal(), 2) }}</span>
                                            </p>
                                            <input id='checkout2' type="hidden" value="{{ Cart::getTotal() }}">
                                        </div>
                                    </div>

                                    @foreach (cartItems()->take(3) as $item)
                                        <div class="row cart-detail">
                                            <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                                <img src="{{ asset('storage/Product/' . $item->attributes->image) }}"
                                                    alt="">
                                            </div>
                                            <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                                <a href="{{ route('product', ['id' => $item->id]) }}">
                                                    <p>{{ $item->name }}</p>
                                                </a>
                                                <span class="" style="font-size: 13px"> Qty :
                                                    {{ $item->quantity }}</span><br>
                                                <span class="" style="font-size: 13px">Unit Price :
                                                    ${{ $item->price }}</span> <br>
                                                <span class="" style="font-size: 13px">Total Price :
                                                    ${{ $item->price * $item->quantity }}</span>
                                            </div>
                                        </div>
                                    @endforeach

                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                            <a href="{{ route('checkout') }}">
                                                <div class="submit_button">
                                                    <input style="border-radius: 20px" id="work2" type="submit"
                                                        value="Checkout">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- main header -->
    <div class="main_header">
        <div class="main_header_wrapper">
            <!-- logo -->
            <a href="{{ url('/') }}" class="header_logo">
                <img src="{{ asset('assets/frontend/image/Logo/logo.png') }}" alt="">
            </a>
            <!-- nav -->
            <div class="header_nav">
                <ul>
                    <!-- nav item -->
                    <li class="nav_toogler ">
                        <a>
                            <span>Our Services</span>
                            <span class="header_top_svg"><svg class="c-icon c-icon--dropdown" viewBox="0 0 192 512">
                                    <polygon points="0,208 96,304 192,208"></polygon>
                                </svg></span>
                        </a>

                        <!-- sub nav -->

                        <div class="sub_nav">
                            <!-- content -->
                            <div class="sub_nav_content">
                                <div class="sub_nav_wrapper">

                                    <!-- item -->
                                    <div class="sub_nav_item">
                                        <!-- title -->
                                        <div class="sub_nav_item_title">
                                            <a href="">
                                                <span class="nav_item_saparate"></span> Products
                                            </a>
                                        </div>
                                        <p class="sub_nav_item_text">Harness the power of technology to achieve your
                                            most ambitious goals.</p>
                                        <!-- list -->
                                        <div class="sub_nav_item_list">
                                            <ul>

                                                @foreach (categories()->take(5) as $item)
                                                    <li>
                                                        <a href="">
                                                            <form method="GET"
                                                                action="{{ url('product/filter') }}">
                                                                <input type="hidden" name="filtercategory[]"
                                                                    value="{{ $item->category }}">
                                                                <button style="all:unset" type="submit"
                                                                    href="{{ route('filter') }}"
                                                                    class="common_button"><span>{{ $item->category }}</span></button>
                                                                <span><i style="
                                                                font-size: 12px;
                                                                color: var(--mainColor);"
                                                                        class="fa-solid fa-angle-right"></i></span>
                                                            </form>
                                                        </a>
                                                    </li>
                                                @endforeach

                                                <li>
                                                    <a href="{{ route('filter') }}">
                                                        <span>View All Products</span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <!-- item -->


                                    <!-- item -->
                                    <div class="sub_nav_item">
                                        <!-- title -->
                                        <div class="sub_nav_item_title">
                                            <a href="">
                                                <span class="nav_item_saparate nav_item_saparate2"></span>Solutions
                                            </a>
                                        </div>
                                        <p class="sub_nav_item_text">Our deep expertise and end-to-end capabilities
                                            help you navigate complex IT challenges.</p>
                                        <!-- list -->
                                        <div class="sub_nav_item_list">
                                            <ul>

                                                @foreach (solutions()->take(5) as $item)
                                                    <li>
                                                        <a href="">
                                                            <form method="GET" action="{{ route('blogs') }}">
                                                                <input type="hidden" name="filtersolution[]"
                                                                    value="{{ $item->title }}">
                                                                <button style="all:unset" type="submit"
                                                                    class="common_button"><span>{{ $item->title }}</span></button>
                                                                <span><i style="
                                                                font-size: 12px;
                                                                color: var(--mainColor);"
                                                                        class="fa-solid fa-angle-right"></i></span>
                                                            </form>
                                                        </a>
                                                    </li>
                                                @endforeach


                                                <li>
                                                    <a href="{{ route('blogs') }}">
                                                        <span>View All Solutions</span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <!-- item -->


                                    <!-- item -->
                                    <div class="sub_nav_item">
                                        <!-- title -->
                                        <div class="sub_nav_item_title">
                                            <a href="">Industry
                                                <span class="nav_item_saparate nav_item_saparate3"></span>
                                            </a>
                                        </div>
                                        <p class="sub_nav_item_text">Our service offerings — spanning cloud,
                                            collaboration and more — drive new business outcomes.</p>
                                        <!-- list -->
                                        <div class="sub_nav_item_list">
                                            <ul>

                                                @foreach (industries()->take(5) as $item)
                                                    <li>
                                                        <a href="">
                                                            <form method="GET" action="{{ route('blogs') }}">
                                                                <input type="hidden" name="filterindustry[]"
                                                                    value="{{ $item->title }}">
                                                                <button style="all:unset" type="submit"
                                                                    class="common_button"><span>{{ $item->title }}</span></button>
                                                                <span><i style="
                                                                font-size: 12px;
                                                                color: var(--mainColor);"
                                                                        class="fa-solid fa-angle-right"></i></span>
                                                            </form>
                                                        </a>
                                                    </li>
                                                @endforeach

                                                <li>
                                                    <a href="{{ route('blogs') }}">
                                                        <span>View All industries</span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>

                                    <!-- item -->
                                    <div class="sub_nav_item">
                                        <!-- title -->
                                        <div class="sub_nav_item_title">
                                            <a href="">
                                                Services
                                                <span class="nav_item_saparate nav_item_saparate4"></span>
                                            </a>
                                        </div>
                                        <p class="sub_nav_item_text">Our industry specialists have the knowledge and
                                            experience to meet your unique needs.</p>
                                        <!-- list -->
                                        <div class="sub_nav_item_list">
                                            <ul>
                                                <li>
                                                    <a href="">
                                                        <span>Consulting services</span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="">
                                                        <span>Managed services
                                                        </span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="">
                                                        <span>Digital HR Services </span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="">
                                                        <span>Support Services</span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="">
                                                        <span>View All Services </span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <!-- item -->

                                </div>
                            </div>
                            <!-- submenu bottom -->
                            <div class="sub_menu_botttom">
                                <div class="sub_menu_botttom_content">
                                    <a href="" class="sub_botttom_text">View all solutions</a>
                                </div>
                            </div>
                        </div>

                    </li>

                    <!-- nav item -->
                    <li class="nav_toogler ">
                        <a>
                            <span>Tech Contents</span>
                            <span class="header_top_svg"><svg class="c-icon c-icon--dropdown" viewBox="0 0 192 512">
                                    <polygon points="0,208 96,304 192,208"></polygon>
                                </svg></span>
                        </a>


                        <!-- sub menu -->
                        <div class="sub_nav">
                            <!-- content -->
                            <div class="sub_nav_content">
                                <div class="sub_nav_wrapper">

                                    <!-- item -->
                                    <div class="sub_nav_item">
                                        <!-- title -->
                                        <div class="sub_nav_item_title">
                                            <a href="">
                                                <span class="nav_item_saparate"></span> By Industry
                                            </a>
                                        </div>
                                        <p class="sub_nav_item_text">Harness the power of technology to achieve your
                                            most ambitious goals.</p>
                                        <!-- list -->
                                        <div class="sub_nav_item_list">
                                            <ul>

                                                @foreach (industries()->take(5) as $item)
                                                    <li>
                                                        <a href="">
                                                            <span>{{ $item->title }}</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>
                                                @endforeach


                                                <li>
                                                    <a href="">
                                                        <span>View All industries</span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <!-- item -->


                                    <!-- item -->
                                    <div class="sub_nav_item">
                                        <!-- title -->
                                        <div class="sub_nav_item_title">
                                            <a href="">
                                                <span class="nav_item_saparate nav_item_saparate2"></span> By
                                                Solution
                                            </a>
                                        </div>
                                        <p class="sub_nav_item_text">Our deep expertise and end-to-end capabilities
                                            help you navigate complex IT challenges.</p>
                                        <!-- list -->
                                        <div class="sub_nav_item_list">
                                            <ul>

                                                @foreach (solutions()->take(5) as $item)
                                                    <li>
                                                        <a href="">
                                                            <span>{{ $item->title }}
                                                            </span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>
                                                @endforeach


                                                <li>
                                                    <a href="">
                                                        <span>View All Solutions</span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <!-- item -->


                                    <!-- item -->
                                    <div class="sub_nav_item">
                                        <!-- title -->
                                        <div class="sub_nav_item_title">
                                            <a href="">By Technology
                                                <span class="nav_item_saparate nav_item_saparate3"></span>
                                            </a>
                                        </div>
                                        <p class="sub_nav_item_text">Our service offerings — spanning cloud,
                                            collaboration and more — drive new business outcomes.</p>
                                        <!-- list -->
                                        <div class="sub_nav_item_list">
                                            <ul>
                                                <li>
                                                    <a href="">
                                                        <span>AI & IoT</span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="">
                                                        <span>IT optimization</span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="">
                                                        <span>Cloud</span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="">
                                                        <span>Cybersecurity </span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="">
                                                        <span>View All Technologies</span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>

                                    <!-- item -->
                                    <div class="sub_nav_item">
                                        <!-- title -->
                                        <div class="sub_nav_item_title">
                                            <a href="">
                                                By Contents
                                                <span class="nav_item_saparate nav_item_saparate4"></span>
                                            </a>
                                        </div>
                                        <p class="sub_nav_item_text">Our industry specialists have the knowledge and
                                            experience to meet your unique needs.</p>
                                        <!-- list -->
                                        <div class="sub_nav_item_list">
                                            <ul>
                                                <li>
                                                    <a href="">
                                                        <span>Analyst Report</span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="">
                                                        <span> Article
                                                        </span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="">
                                                        <span>Client story
                                                        </span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="">
                                                        <span>Tech Journal</span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="">
                                                        <span>View All Contents </span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <!-- item -->

                                </div>
                            </div>
                            <!-- submenu bottom -->
                            <div class="sub_menu_botttom">
                                <div class="sub_menu_botttom_content">
                                    <a href="" class="sub_botttom_text">View all solutions</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- nav item -->
                    <li class="nav_toogler ">
                        <a>
                            <span>Partner & Clients</span>
                            <span class="header_top_svg"><svg class="c-icon c-icon--dropdown" viewBox="0 0 192 512">
                                    <polygon points="0,208 96,304 192,208"></polygon>
                                </svg></span>
                        </a>


                        <!-- sub menu -->
                        <div class="sub_nav">
                            <!-- content -->
                            <div class="sub_nav_content">
                                <div class="sub_nav_wrapper">

                                    <!-- item -->
                                    <div class="sub_nav_item">
                                        <!-- title -->
                                        <div class="sub_nav_item_title">
                                            <a href="">
                                                <span class="nav_item_saparate"></span> Partners
                                            </a>
                                        </div>
                                        <p class="sub_nav_item_text">Harness the power of technology to achieve your
                                            most ambitious goals.</p>
                                        <!-- list -->
                                        <div class="sub_nav_item_list">
                                            <ul>
                                                <li>
                                                    <a href="">
                                                        <span>Optimum</span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="">
                                                        <span>Intimicy</span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="">
                                                        <span>Leads Innovation</span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="">
                                                        <span>Yongkhar</span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="">
                                                        <span>View All Partners</span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <!-- item -->


                                    <!-- item -->
                                    <div class="sub_nav_item">
                                        <!-- title -->
                                        <div class="sub_nav_item_title">
                                            <a href="">
                                                <span class="nav_item_saparate nav_item_saparate2"></span>Clients
                                            </a>
                                        </div>
                                        <p class="sub_nav_item_text">Our deep expertise and end-to-end capabilities
                                            help you navigate complex IT challenges.</p>
                                        <!-- list -->
                                        <div class="sub_nav_item_list">
                                            <ul>
                                                <li>
                                                    <a href="">
                                                        <span> icddr'b
                                                        </span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="">
                                                        <span>UNDP
                                                        </span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="">
                                                        <span> Chevron
                                                        </span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="">
                                                        <span>Bangladesh Bank</span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="">
                                                        <span>View All Clients</span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>


                                            </ul>
                                        </div>
                                    </div>
                                    <!-- item -->


                                    <!-- item -->
                                    <div class="sub_nav_item">
                                        <!-- title -->
                                        <div class="sub_nav_item_title">
                                            <a href="">Principals
                                                <span class="nav_item_saparate nav_item_saparate3"></span>
                                            </a>
                                        </div>
                                        <p class="sub_nav_item_text">Our service offerings — spanning cloud,
                                            collaboration and more — drive new business outcomes.</p>
                                        <!-- list -->
                                        <div class="sub_nav_item_list">
                                            <ul>
                                                <li>
                                                    <a href="">
                                                        <span>Acronis
                                                        </span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="">
                                                        <span>Riverbed</span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="">
                                                        <span>Pepperel + Fuschs</span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="">
                                                        <span>Schnieder </span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="">
                                                        <span>View All Principals</span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- item -->
                                    <div class="sub_nav_item">
                                        <!-- title -->
                                        <div class="sub_nav_item_title">
                                            <a href="">Investors
                                                <span class="nav_item_saparate nav_item_saparate4"></span>
                                            </a>
                                        </div>
                                        <p class="sub_nav_item_text">Our industry specialists have the knowledge and
                                            experience to meet your unique needs.</p>
                                        <!-- list -->
                                        <div class="sub_nav_item_list">
                                            <ul>
                                                <li>
                                                    <a href="">
                                                        <span>Not Done</span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="">
                                                        <span> Healthcare </span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="">
                                                        <span>Manufacturing </span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="">
                                                        <span> Public sector</span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="">
                                                        <span>View All Investors</span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <!-- item -->

                                </div>
                            </div>
                            <!-- submenu bottom -->
                            <div class="sub_menu_botttom">
                                <div class="sub_menu_botttom_content">
                                    <a href="" class="sub_botttom_text">View all solutions</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- nav item -->
                    <li class="nav_toogler">
                        <a>
                            <span>Connect Us</span>
                            <span class="header_top_svg"><svg class="c-icon c-icon--dropdown" viewBox="0 0 192 512">
                                    <polygon points="0,208 96,304 192,208"></polygon>
                                </svg></span>
                        </a>


                        <!-- sub menu -->
                        <div class="sub_nav">
                            <!-- content -->
                            <div class="sub_nav_content">
                                <div class="sub_nav_wrapper">

                                    <!-- item -->
                                    <div class="sub_nav_item">
                                        <!-- title -->
                                        <div class="sub_nav_item_title">
                                            <a href="">
                                                <span class="nav_item_saparate"></span> Contacts
                                            </a>
                                        </div>
                                        <p class="sub_nav_item_text">Harness the power of technology to achieve your
                                            most ambitious goals.</p>
                                        <!-- list -->
                                        <div class="sub_nav_item_list">
                                            <ul>
                                                <li>
                                                    <a href="">
                                                        <span>Direct Reach</span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="">
                                                        <span>Social Connects</span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="">
                                                        <span>Datasheets</span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="">
                                                        <span>About Us</span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="">
                                                        <span>Social logos</span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <!-- item -->


                                    <!-- item -->
                                    <div class="sub_nav_item">
                                        <!-- title -->
                                        <div class="sub_nav_item_title">
                                            <a href="">
                                                <span class="nav_item_saparate nav_item_saparate2"></span>Service
                                            </a>
                                        </div>
                                        <p class="sub_nav_item_text">Our deep expertise and end-to-end capabilities
                                            help you navigate complex IT challenges.</p>
                                        <!-- list -->
                                        <div class="sub_nav_item_list">
                                            <ul>
                                                <li>
                                                    <a href="">
                                                        <span> Webinars
                                                        </span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="">
                                                        <span>Presentations
                                                        </span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="">
                                                        <span> PoCs
                                                        </span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="">
                                                        <span>Knowledgebase</span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="">
                                                        <span>Request Service Call</span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>


                                            </ul>
                                        </div>
                                    </div>
                                    <!-- item -->


                                    <!-- item -->
                                    <div class="sub_nav_item">
                                        <!-- title -->
                                        <div class="sub_nav_item_title">
                                            <a href="">Events
                                                <span class="nav_item_saparate nav_item_saparate3"></span>
                                            </a>
                                        </div>
                                        <p class="sub_nav_item_text">Our service offerings — spanning cloud,
                                            collaboration and more — drive new business outcomes.</p>
                                        <!-- list -->
                                        <div class="sub_nav_item_list">
                                            <ul>
                                                <li>
                                                    <a href="">
                                                        <span>Online
                                                        </span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="">
                                                        <span>Venues</span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="">
                                                        <span>Newsroom</span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="">
                                                        <span>Request Events</span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- item -->
                                    <div class="sub_nav_item">
                                        <!-- title -->
                                        <div class="sub_nav_item_title">
                                            <a href="">Career
                                                <span class="nav_item_saparate nav_item_saparate4"></span>
                                            </a>
                                        </div>
                                        <p class="sub_nav_item_text">Our industry specialists have the knowledge and
                                            experience to meet your unique needs.</p>
                                        <!-- list -->
                                        <div class="sub_nav_item_list">
                                            <ul>
                                                <li>
                                                    <a href="">
                                                        <span>Join our team</span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="">
                                                        <span> Available Jobs </span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="">
                                                        <span>Request Free Trainings</span>
                                                        <span><i class="fa-solid fa-angle-right"></i></span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <!-- item -->

                                </div>
                            </div>
                            <!-- submenu bottom -->
                            <div class="sub_menu_botttom">
                                <div class="sub_menu_botttom_content">
                                    <a href="" class="sub_botttom_text">View all solutions</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- nav item -->
                    <li class="nav_toogler">
                        <a>
                            <span>Shop</span>
                            <span class="header_top_svg"><svg class="c-icon c-icon--dropdown" viewBox="0 0 192 512">
                                    <polygon points="0,208 96,304 192,208"></polygon>
                                </svg></span>
                        </a>


                        <!-- sub menu -->
                        <div class="sub_nav">
                            <!-- content -->
                            <div class="sub_nav_content">
                                <div class="sub_nav_wrapper">

                                    <!-- item -->
                                    {{-- <div class="sub_nav_item">
                                        <!-- title -->
                                        <div class="sub_nav_item_title">
                                            <a href="">
                                                <span class="nav_item_saparate"></span> By Product
                                            </a>
                                        </div>

                                        <div class="sub_nav_item_list">
                                            <ul>

                                                @foreach (products()->take(5) as $item)
                                                    <li>
                                                        <a href="{{ route('product', ['id' => $item->id]) }}">
                                                            <span>{{ $item->title }}</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>
                                                @endforeach

                                            </ul>
                                        </div>

                                    </div> --}}
                                    <!-- item -->


                                    <!-- item -->
                                    <div class="sub_nav_item">
                                        <!-- title -->
                                        <div class="sub_nav_item_title">
                                            <a href="">
                                                <span class="nav_item_saparate nav_item_saparate2"></span>By Category
                                            </a>
                                        </div>

                                        <div class="sub_nav_item_list">
                                            <ul>

                                                @foreach (categories()->take(5) as $item)
                                                    <li>
                                                        <a href="{{ url('category.html/' . $item->sub_category) }}">
                                                            <span>{{ $item->sub_category }}</span>
                                                            <span><i style="
                                                                font-size: 12px;
                                                                color: var(--mainColor);"
                                                                    class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>
                                                @endforeach
                                                <br>
                                                <a href="{{ url('shop.html') }}"><button
                                                        class="product_button_h">Shop all Category</button></a>


                                            </ul>
                                        </div>

                                    </div>
                                    <!-- item -->


                                    <!-- item -->
                                    <div class="sub_nav_item">
                                        <!-- title -->
                                        <div class="sub_nav_item_title">
                                            <a href="">By Brand
                                                <span class="nav_item_saparate nav_item_saparate3"></span>
                                            </a>

                                            <div class="sub_nav_item_list">
                                                <ul>

                                                    @foreach (brands()->take(5) as $item)
                                                        <li>
                                                            <a
                                                                href="{{ url('hardware', ['brand' => $item->title]) }}">
                                                                <button style="all:unset"
                                                                    class="common_button"><span>{{ $item->title }}</span></button>
                                                                <span><i style="
                                                                    font-size: 12px;
                                                                    color: var(--mainColor);"
                                                                        class="fa-solid fa-angle-right"></i></span>
                                                            </a>
                                                        </li>
                                                    @endforeach

                                                    <a href="{{ url('partner.html') }}"><button
                                                            class="product_button_h">Shop all Brand
                                                        </button></a>

                                                </ul>
                                            </div>

                                        </div>
                                    </div>



                                </div>
                            </div>
                            <!-- submenu bottom -->
                            {{-- <div class="sub_menu_botttom" style="gap: 30px">
                                <div class="sub_menu_botttom_content">
                                    <a href="" class="sub_botttom_text">View all Category</a>
                                </div>
                            </div> --}}

                        </div>
                    </li>
                </ul>
            </div>

            <!-- header serch box -->
            <div class="header_search" id="header_search_m">
                <div class="header_search_inner">
                    <form action="" method="POST">
                        <input type="text" name="title" placeholder="What can we help you find?"
                            class="input_control" id="search">
                        <!-- icon -->
                        <div class="search_icon">
                            <span><svg class="cx_1630815321671header_icon_size cx_1630815321671_primary_search_icon"
                                    id="search" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 20 20">
                                    <path class="cx_1630815321671_svg_icons" id="Search-2" data-name="Search"
                                        d="M19.724,18.547,14.757,13.58a8.336,8.336,0,1,0-1.177,1.177l4.968,4.968a.832.832,0,1,0,1.177-1.177ZM8.317,14.975a6.658,6.658,0,1,1,6.658-6.658,6.658,6.658,0,0,1-6.658,6.658Z"
                                        transform="translate(0.032 0.032)" fill="#1E272E"></path>
                                </svg></span>
                        </div>
                    </form>
                    <table class="searchTable">
                        <tbody class="searchTableBody" id="searchTableBody">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- mobile header -->
    <div id="dl-menu" class="dl-menuwrapper">
        <button id="mobileBNT" class="dl-trigger">
            <ul>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </button>
        <ul class="dl-menu">

            {{-- item --}}
            <li>
                <a href="#">Our Services</a>
                <ul class="dl-submenu">
                    <li>
                        <a href="#">Products</a>
                        <ul class="dl-submenu">
                            <li><a href="#">Hardwares</a></li>
                            <li><a href="#">Softwares</a></li>
                            <li><a href="#">Digital Services</a></li>
                            <li><a href="#">View All Products</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">Solutions</a>
                        <ul class="dl-submenu">
                            <li><a href="#">View All Solution</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">Industry</a>
                        <ul class="dl-submenu">
                            <li><a href="#">Financial</a></li>
                            <li><a href="#">Healthcare</a></li>
                            <li><a href="#">Manufacturing</a></li>
                            <li><a href="#">Public sector</a></li>
                            <li><a href="#">View All industries</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">Service</a>
                        <ul class="dl-submenu">
                            <li><a href="#">Consulting services</a></li>
                            <li><a href="#">Managed services</a></li>
                            <li><a href="#">Digital HR Services</a></li>
                            <li><a href="#">Support Services</a></li>
                            <li><a href="#">View All Services</a></li>
                        </ul>
                    </li>

                </ul>
            </li>

            {{-- item --}}
            <li>
                <a href="#">Tech Contents</a>
                <ul class="dl-submenu">
                    <li>
                        <a href="#">By Industry</a>
                        <ul class="dl-submenu">

                            <li><a href="#">Education</a></li>
                            <li><a href="#">Healthcare</a></li>
                            <li><a href="#">Manufacturing</a></li>
                            <li><a href="#">Public sector</a></li>
                            <li><a href="#">View All industries</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">By Solution</a>
                        <ul class="dl-submenu">
                            <li><a href="#">Modern infrastructure</a></li>
                            <li><a href="#">Networking</a></li>
                            <li><a href="#">Procurement</a></li>
                            <li><a href="#">Real-time data</a></li>
                            <li><a href="#">View All Solutions</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">By Technology</a>
                        <ul class="dl-submenu">
                            <li><a href="#">AI & IoT</a></li>
                            <li><a href="#">IT optimization</a></li>
                            <li><a href="#">Cloud</a></li>
                            <li><a href="#">Cybersecurity</a></li>
                            <li><a href="#">View All Technologies</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">By Contebts</a>
                        <ul class="dl-submenu">
                            <li><a href="#">Analyst Report</a></li>
                            <li><a href="#">Article</a></li>
                            <li><a href="#">Client story</a></li>
                            <li><a href="#">Tech Journal</a></li>
                            <li><a href="#">View All Contents</a></li>
                        </ul>
                    </li>

                </ul>
            </li>

            {{-- item --}}
            <li>
                <a href="#">Partner & Clints</a>
                <ul class="dl-submenu">
                    <li>
                        <a href="#">Partner</a>
                        <ul class="dl-submenu">
                            {{-- pr --}}

                            <li><a href="#">icddr'b</a></li>
                            <li><a href="#">UNDP</a></li>
                            <li><a href="#">Chevron</a></li>
                            <li><a href="#">Bangladesh Bank</a></li>
                            <li><a href="#">View All Clients</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">Clints</a>
                        <ul class="dl-submenu">
                            <li><a href="#">Optimum</a></li>
                            <li><a href="#">Intimicy</a></li>
                            <li><a href="#">Leads Innovation</a></li>
                            <li><a href="#">Yongkhar</a></li>
                            <li><a href="#">View All Partner</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">Principals</a>
                        <ul class="dl-submenu">
                            <li><a href="#">Acronis</a></li>
                            <li><a href="#">Riverbed</a></li>
                            <li><a href="#">Pepperel + Fuschs</a></li>
                            <li><a href="#">Schnieder</a></li>
                            <li><a href="#">View All Principals</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">Investor</a>
                        <ul class="dl-submenu">
                            <li><a href="#">Not Done</a></li>
                            <li><a href="#">Healthcare</a></li>
                            <li><a href="#">Manufacturing</a></li>
                            <li><a href="#">Public sector</a></li>
                            <li><a href="#">View All Investors</a></li>
                        </ul>
                    </li>

                </ul>
            </li>

            {{-- item --}}
            <li>
                <a href="#">Contact Us</a>
                <ul class="dl-submenu">
                    <li>
                        <a href="#">Contact</a>
                        <ul class="dl-submenu">
                            <li><a href="#">Direct Reach</a></li>
                            <li><a href="#">Social Connects</a></li>
                            <li><a href="#">Datasheets</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Social logos</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">service</a>
                        <ul class="dl-submenu">
                            <li><a href="#">Webinars</a></li>
                            <li><a href="#">Presentations</a></li>
                            <li><a href="#">PoCs</a></li>
                            <li><a href="#">Knowledgebase</a></li>
                            <li><a href="#">Request Service Call</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">Event</a>
                        <ul class="dl-submenu">
                            <li><a href="#">Online</a></li>
                            <li><a href="#">Venues</a></li>
                            <li><a href="#">Newsroom</a></li>
                            <li><a href="#">Request Events</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">Career</a>
                        <ul class="dl-submenu">
                            <li><a href="#">Join our team</a></li>
                            <li><a href="#">Available Jobs</a></li>
                            <li><a href="#">Request Free Trainings</a></li>
                        </ul>
                    </li>

                </ul>
            </li>


            {{-- item --}}
            <li>
                <a href="#">Shop</a>
                <ul class="dl-submenu">
                    <li><a href="#">By Industry</a></li>
                    <li><a href="#">Hardware</a></li>
                    <li><a href="#">Software</a></li>
                </ul>
            </li>

        </ul>
    </div>
    <!-- mobile header end -->
</header>
<style>
    .dropdown-menu.ddcss {
        position: absolute;
        transform: translate3d(-88px, 25px, 0px) !important;
        top: 0px;
        left: 0px;
        will-change: transform;
    }

    .dropdown:hover .dropdown-menu.dropdown-menu.ddcss {
        display: block;
        margin-top: 0;
    }

    .searchTable {
        background: #fff;
        width: 100%;
    }

    .searchTableBody {
        display: block;
    }

    .searchTableBody tr td {
        background-color: #fff !important;
        padding: 5px 10px;
        font-size: 13px;
    }

    .searchTableBody tr:last-child {
        padding-bottom: 20px;
        display: block;
    }

    .searchTableBody tr:first-child {
        padding-top: 20px;
        display: block;
    }


    .searchTableBody tr td a {
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        text-overflow: ellipsis;
        overflow: hidden;
    }
</style>

<script>
    // focus in search
    var headerSearch = document.getElementById('header_search_m')
    var searchInner = document.getElementById('search')

    searchInner.addEventListener("focusin", function() {
        headerSearch.style.cssText = "max-width: calc(100% - 15%); position: absolute ;right: 20px;"
        document.getElementById('searchTableBody').classList.remove('d-none');

    })

    window.addEventListener('dblclick', function() {
        headerSearch.style.cssText = "position: relative; max-width: 270px;"
        document.getElementById('searchTableBody').classList.add('d-none');

    })
</script>
