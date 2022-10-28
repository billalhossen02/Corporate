//---------menu----------
$(document).ready(function(){
    $(".accordion-heading").click(function(){
        if($(".accordion-body").is(':visible')){
            $(".accordion-body").slideUp(600);
            $(".plusminus").text('+')
        }
        else{
            $(this).next(".accordion-body").slideDown(600);
            $(this).children(".plusminus").text('-');
        }
    });
});

//-------hide than show------btn(#show)----show(.menu)
$(document).ready(function(){
    $('#show').click(function() {
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

// $('#click_advance').click(function() {
//     $('#display_advance').toggle('1000');
//     $("i", this).toggleClass("fa-solid fa-chevron-left fa-solid fa-align-left");
// });

//-------------

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