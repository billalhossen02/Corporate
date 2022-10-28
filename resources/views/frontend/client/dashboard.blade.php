@extends('frontend.master')


@section('content')

@include('frontend.header')


<div id="wrapper" class="row">
    <a href="#" id="click_advance" onclick="my()"><i class="fa-solid fa-chevron-left fa-lg"></i></a>
    <a href="#" style="
    position: absolute;
    left: 13px;
    top: 10px;
    z-index: 9999;
    " onclick="my2()"><i class="fa-solid fa-align-left fa-lg"></i></a>
    <!--=======Sidebar Start==========-->
    <section class="col-xl-3 col-lg-4 col-sm-12 content m-0" id="display_advance">
        <div class="sidebar_manu_wrapper p-0">
            <div class="sidebar-manu">
                <h2>Account Tools</h2>
                <p>Welcome back motiur.cmt@gmail.com.</p>
                <a href="#" class="common_button_logout mb-2">Logout - not you?</a>
                <hr><br>
            </div>
            <div class="sidebar-nav">
                <a href="#">My Company</a>
                <a href="#">Dashboard</a>
                <p class="accordion-heading">Tools<span class="plusminus float-right mr-4">+</span></p>
                <div class="accordion-body" style="display: none;">
                    <a href="#">Saved Carts / Order Templates</a>
                </div>
                <p class="accordion-heading">Personalization<span class="plusminus float-right mr-4">+</span></p>
                <div class="accordion-body" style="display: none;">
                    <a href="#">Personal Product List</a>
                    <a href="#">User Subsciptions</a>
                    <a href="#">User Profile</a>
                </div>


            </div>
        </div>
    </section>
    <!----Sidebar End---->

    <!--=========Content start========-->
    <div id="cls" class="container-fluid col-xl-9 col-lg-8 col-sm-12">
        <div id="client_dashboard_content_wp" class="row">

            <!--Content welcome Section-->
            <section class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 client_dashboard_welcome_section">
                    <h2>Welcome to my NGen it</h2>
                    <p>Welcome to myInsight myInsight is a global platform for optimizing your technology supply chain. Here you can discover, purchase and manage your hardware, software and cloud solutions. Our dedicated account management team is also available to provide the highest level of personalized service and customer satisfaction.</p>
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
                        <li>Get exclusive pricing, reduced shipping rates and  <a href="">customizable product catalogs.</a></li>
                        <li>Create  <a href=""> order templates and quotes</a>to save for later.</li>
                        <li>Transition from<a href="">tactical to strategic procurement</a>  and implementation.</li>
                        <a href="#" class="common_button_dashboard mt-4">Learn more</a>
                    </ul>
                </div>
            </section>
            <!--Content welcome End-->

        </div>
        <div class="d-flex justify-content-center m-2">
            <a href="#" class="common_button"> Learn more about our tools</a>
        </div>
    </div>
    <!----Content End---->
</div>
<!--=================JS=================-->
<!-- jquery cdn -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!--Client Dashboard Sidebar-->
<!-- <script src="js/jquery.mr.js"></script> -->
<script>


    $('#click_advance').click(function() {
        $('#display_advance').toggle('1000');
        // $("i", this).toggleClass("fa-solid fa-chevron-left fa-solid fa-align-left");
    });


    $(".fa-chevron-left").show();
    $(".fa-align-left").hide();
    function my(){
        $(".fa-align-left").show();
        $(".fa-chevron-left").hide();
    $("#cls").addClass('col-xl-12')
    }
    function my2(){
    $(".fa-chevron-left").show();
    $("#display_advance").show();
    $(".fa-align-left").hide();
    if ($( "#cls" ).hasClass('col-xl-12')) {
    $( "#cls" ).removeClass( 'col-xl-12');
    }

}

</script>

















@endsection
