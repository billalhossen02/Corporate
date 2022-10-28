@extends('frontend.master')


@section('content')

@include('frontend.header')

 <!--======Featured client stories==========-->
 <section class="header_title_clinet_stories">
    <h1>Client stories</h1>
</section>

<section class="container">
    <div class="featured_client_stories_wrapper">
        <div class="featured_client_stories">
            <div class="container">
                <div class="featured_client_stories_title">
                    <h1 class="">Related posts</h1>
                </div>
    
                <div class="row">
                    <!--------item------->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="client_stories_item">
                            <a href="#">
                                <img class="img-fluid" src="{{asset('assets/frontend/image/single-blog/item/item (1).jpg')}}" alt="">
                                <h4>Tech journal</h6>
                                <h3>Dan Groves, VP of IT for Westerra Credit Union - Disruption is Part of the Journey</h3>
                            </a>
                            
                        </div> 
                    </div>
                    <!--------item------->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="client_stories_item">
                            <a href="">
                                <img class="img-fluid" src="{{asset('assets/frontend/image/single-blog/item/item (2).jpg')}}" alt="">
                                <h4>Video</h6>
                                <h3>EcoStruxure IT Mainfreight Case Study</h3>
                            </a>
                            
                        </div> 
                    </div>
                    <!--------item------->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="client_stories_item">
                            <a href="">
                                <img class="img-fluid" src="{{asset('assets/frontend/image/single-blog/item/item (3).jpg')}}" alt="">
                                <h4>Tech journal</h6>
                                <h3>Acer and Google Chrome OS Partner for Sustainable Solutions</h3>
                            </a>
                            
                        </div> 
                    </div>
                    <!--------item------->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="client_stories_item">
                            <a href="">
                                <img class="img-fluid" src="{{asset('assets/frontend/image/single-blog/item/item (4).jpg')}}" alt="">
                                <h4>Free ebook</h6>
                                <h3>Discover the True Potential of Virtualization</h3>
                            </a>
                            
                        </div> 
                    </div>
                </div>
    
            </div>
        </div>
    </div>
    
</section>
<!----------Featured client stories End--------->
<br><br>
<hr>
<br><br>
<!--============Content & Filter=============-->
<section class="container">
    <!----------Filter Top-nav Bar --------->
    <div class="clinet_stories_filter_top_bar">
        <label>Results per page </label>
        <span class="client_story_filter_page">
            <select>
                <option value="#" selected>10</option>
                <option value="20">20</option>
                <option value="30">30</option>
                <option value="40">40</option>
            </select>
        </span>

        {{-- <label class="ml-4">Filter By: </label>
        <span class="client_story_filter_all_year">
            <select>
                <option value="#" selected>All years</option>
                <option value="#">2022</option>
                <option value="#">2021</option>
                <option value="#">2020</option>
                <option value="#">2019</option>
                <option value="#">2018</option>
                <option value="#">2017</option>
                <option value="#">2016</option>
                <option value="#">2015</option>
                <option value="#">2014</option>
                <option value="#">2013</option>
                <option value="#">2012</option>
            </select>
        </span> --}}
    </div>
    <hr>
    <div class="row">
        <!----------Sidebar client stories --------->
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="sidebar_client_stories">
                <label> <b>2</b>results matched your search</label>

                <hr>
                <!--------Your search--------->
                <div class="client_stories_your_search">
                    <h6 class="mb-4">Your search</h6>
                    <div class="alert alert-secondary alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>Education (higher)
                    </div>
                    <div class="alert alert-secondary alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>Application (low)
                    </div>
                </div>
                
                <hr>
                <!-------Content Results---------->
                <div class="client_stories_narrow_content">
                    <h6 class="mb-4">Narrow content results</h6>
                    <input type="text" placeholder="BY KEYWORD...">
                </div>

                <hr>
                <!--------Topic--------->
                <div class="client_stories_filter_category">
                    <h6 onclick="myFunction()" class="mb-4"><i class="fa-solid fa-caret-down"></i> Topic</h6>
                    
                    <div id="filter_category">
                        <div class="form-check">
                            <input class="form-check-input custom" type="checkbox" id="flexCheckDefault">
                            <span class="ml-2">Agile</span>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input custom" type="checkbox" id="flexCheckDefault">
                            <span class="ml-2">Application Development</span>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input custom" type="checkbox" id="flexCheckDefault">
                            <span class="ml-2">Artificial Intelligence</span>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input custom" type="checkbox" id="flexCheckDefault">
                            <span class="ml-2">As a service</span>
                        </div>
                    </div>
                    
                </div>
                <hr>
                <!--------Industry--------->
                <div class="client_stories_filter_category">
                    <h6 onclick="showhide()" class="mb-4"><i class="fa-solid fa-caret-down"></i> Industry</h6>
                    
                    <div id="newpost">
                        <div class="form-check">
                            <input class="form-check-input custom" type="checkbox" id="flexCheckDefault">
                            <span class="ml-2">Agile</span>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input custom" type="checkbox" id="flexCheckDefault">
                            <span class="ml-2">Application Development</span>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input custom" type="checkbox" id="flexCheckDefault">
                            <span class="ml-2">Artificial Intelligence</span>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input custom" type="checkbox" id="flexCheckDefault">
                            <span class="ml-2">As a service</span>
                        </div>
                    </div>
                    
                </div>
                <hr>
                <!--------End--------->

            </div>
        </div>
        <!----------conternt client stories --------->
        <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="row">
                <!--------item------->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="client_stories_content_item">
                        <a href="#">
                            <img class="img-fluid" src="{{asset('assets/frontend/image/single-blog/item/item (1).jpg')}}" alt="">
                            <h3 class="mt-4">Dan Groves, VP of IT for Westerra Credit Union - Disruption is Part of the Journey</h3>

                            <p>An educational services company needed to find cost-effective alternatives to its storage and disaster recovery solutions. The company wanted to expand its cloud footprint in the process and partnered with Insight to help discover a best-fit approach.</p>
                            <h4>Client story / 23 Nov 2021</h6>
                        </a>
                    </div> 
                </div>
                <!--------item------->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="client_stories_content_item">
                        <a href="#">
                            <img class="img-fluid" src="{{asset('assets/frontend/image/single-blog/item/item (2).jpg')}}" alt="">
                            <h3 class="mt-4">Enterprise Technology Company Modernizes Its Security Environment</h3>

                            <p>After failing an audit that highlighted multiple vulnerabilities, this global technology solutions company sought expert guidance to remediate issues and gain better visibility into the health of its IT ecosystem.</p>
                            <h4>Client story / 23 Nov 2021</h6>
                        </a>
                    </div> 
                </div>
                <!--------item------->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="client_stories_content_item">
                        <a href="#">
                            <img class="img-fluid" src="{{asset('assets/frontend/image/single-blog/item/item (3).jpg')}}" alt="">
                            <h3 class="mt-4">Law Firm Client Gets Support for Mission-Critical Malware Remediation</h3>

                            <p>When a phishing attack introduced ransomware that froze operations and threatened client data, the law firm engaged Insight for immediate remediation help.</p>
                            <h4>Client story / 23 Nov 2021</h6>
                        </a>
                    </div> 
                </div>
                <!--------item------->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="client_stories_content_item">
                        <a href="#">
                            <img class="img-fluid" src="{{asset('assets/frontend/image/single-blog/item/item (4).jpg')}}" alt="">
                            <h3 class="mt-4">Enterprise Technology Company Modernizes Its Security Environment</h3>

                            <p>After failing an audit that highlighted multiple vulnerabilities, this global technology solutions company sought expert guidance to remediate issues and gain better visibility into the health of its IT ecosystem.</p>
                            <h4>Client story / 23 Nov 2021</h6>
                        </a>
                    </div> 
                </div>
                <!--------item------->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="client_stories_content_item">
                        <a href="#">
                            <img class="img-fluid" src="{{asset('assets/frontend/image/single-blog/item/item (1).jpg')}}" alt="">
                            <h3 class="mt-4">Law Firm Client Gets Support for Mission-Critical Malware Remediation</h3>

                            <p>When a phishing attack introduced ransomware that froze operations and threatened client data, the law firm engaged Insight for immediate remediation help.</p>
                            <h4>Client story / 23 Nov 2021</h6>
                        </a>
                    </div> 
                </div>
                
            </div>
        </div>
    </div>
</section>
<hr>
<br>
<!----------End Page--------->

<script>
    function myFunction() {
        var x = document.getElementById("filter_category");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }  
    function showhide()
    {  
         var div = document.getElementById("newpost");  
         if (div.style.display !== "none") 
         {  
             div.style.display = "none";  
         }  
         else
         {  
             div.style.display = "block";  
         }  
    } 
    //-----------------
    $(document).ready(function() {
        var s = $("#sticker");
        var pos = s.position();					   
        $(window).scroll(function() {
            var windowpos = $(window).scrollTop();
            if (windowpos >= pos.top) {
                s.addClass("stick");
            } else {
                s.removeClass("stick");	
            }
        });
    });
    //-----------------
    function ReadMoreLess() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var iMoreLess = document.getElementById("iMoreLess");
        var lblText = document.getElementById("lblText");
        if (dots.style.display === "none") {
            dots.style.display = "inline";
            iMoreLess.className = "fa fa-chevron-circle-right";
            lblText.innerHTML = "See all open positions";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            iMoreLess.className = "fa fa-chevron-circle-down";
            lblText.innerHTML = "Hide all open positions";
            moreText.style.display = "inline";
        }
    }
</script>


@include('frontend.footer');
