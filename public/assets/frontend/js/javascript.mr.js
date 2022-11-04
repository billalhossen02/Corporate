/*================///Feedback page ///==============*/
//feedback open or close
var lastState = false;

function feedbackButtonClicked() {
if (!lastState) {
    //open
    lastState = true
    document.getElementById("feedback_Sidebar").style.cssText = "width: 380px; right:0px;";
    document.getElementById("feedback_btn").style.marginLeft = "380px";
    document.getElementById("sidebarButton_fb").style.right = "332px";
} else {
    //close
    lastState = false
    document.getElementById("feedback_Sidebar").style.cssText = "width: 0px; right:-18px;";
    document.getElementById("feedback_btn").style.marginLeft = "0px";
    document.getElementById("sidebarButton_fb").style.right = "-40px";
}
}
//-----feedback Details Btn
function feedbackVisible() {
if (document.getElementById('feedback').style.display == 'none') {
    document.getElementById('feedback').style.display = 'flex';
    document.getElementById('feedback_details').style.display = 'none';
}
else {
    document.getElementById('feedback').style.display = 'none';
    document.getElementById('feedback_details').style.display = 'block';
}
}
/*================///Feedback End ///==============*/



/*================///Cookies page ///==============*/
//----Check Box Show Hide
function myCheckboxbtn() {
    var checkBox = document.getElementById("myCheckboxbtn");
    var btn = document.getElementById("btn_show");
    if (checkBox.checked == true) {
        btn.style.display = "block";
    } else {
        btn.style.display = "none";
    }
}
function myCheckboxbtn1() {
    var checkBox = document.getElementById("myCheckboxbtn1");
    var btn = document.getElementById("btn_show");
    if (checkBox.checked == true) {
        btn.style.display = "block";
    } else {
        btn.style.display = "none";
    }
}
function myCheckboxbtn2() {
    var checkBox = document.getElementById("myCheckboxbtn2");
    var btn = document.getElementById("btn_show");
    if (checkBox.checked == true) {
        btn.style.display = "block";
    } else {
        btn.style.display = "none";
    }
}
//-----Cookies Details Btn
function switchVisible() {
    if (document.getElementById('Cookies').style.display == 'none') {
        document.getElementById('Cookies').style.display = 'flex';
        document.getElementById('Cookies_details').style.display = 'none';
    }
    else {
        document.getElementById('Cookies').style.display = 'none';
        document.getElementById('Cookies_details').style.display = 'block';
    }
}
//-----Cookies Text Show hide
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("actives");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    }
  });
}


/*================///Cookies page End Section///==============*/

/*================///Sidebar Tab Content Change///==============*/
//----Tab button content show hide
function openCity(evt, cityName) {
    var i, tab_cookises_tabcontent, tablinks;
    tab_cookises_tabcontent = document.getElementsByClassName("tab_cookises_tabcontent");
    for (i = 0; i < tab_cookises_tabcontent.length; i++) {
        tab_cookises_tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

/*==============///Sidebar Tab Content Change End///=============*/



































//-------hide than show------btn(#show)----show(.menu)
$(document).ready(function () {
    $('#show').click(function () {
        $('.menu').toggle("slide");
    });
});

/*
<div class="toggle"></div>

.toggle{
    height:48px;
    width:48px;
    margin-top: 20px;
    float: left;
    background-image:url("../images/icon/menu-icon.png");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

}
.toggle.expanded{
    position: absolute;
    margin-left: 250px;
    margin-top: 32px;
    transition: 2s;
    height:20px;
    width:20px;
    background-image:url("../images/icon/left-arrow.png");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

//-----image button hide show---div-btn(.toggle)---show(.content)
$(document).ready(function(){
var $content = $(".content").hide();
$(".toggle").on("click", function(e){
    $(this).toggleClass("expanded");
    $content.slideToggle();
});
});
*/
//-------------

$('#click_advance').click(function() {
    $('#display_advance').toggle('1000');
    $("i", this).toggleClass("fa-solid fa-chevron-left fa-solid fa-align-left");
});
