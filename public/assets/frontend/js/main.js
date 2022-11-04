var toggleItem = document.querySelectorAll(".nav_toogler")
var toggleSubItem = document.querySelectorAll(".sub_nav")

;
[...toggleItem].forEach((item, index) => {
    item.addEventListener("click", function () {
        for (var i = 0; i < toggleItem.length; i++) {
            toggleItem[i].addEventListener("click", function () {
                var current = document.getElementsByClassName("activeList");
                current[index].className = current[index].className.replace(" activeList", "");
                this.className += " activeList";
            });
        }
        item.classList.toggle("activeList")
    });
});

$('.banner_slider').slick({
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    arrows: false,
    autoplay: true
});


$(document).ready(function () {
    $('.populer_product_slider, .product_veiw_details_wrapper').slick({
        dots: true,
        autoplay: false,
        arrows: true,
        infinite: true,
        slidesToShow: 4,
        speed: 200,
        centerPadding: '80px',
        responsive: [{
                breakpoint: 760,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    items: 1,
                }
            },
            {
                breakpoint: 540,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    items: 1,
                }
            },
        ]
    });
});


// Auto Update Cart

// let unitPrice = document.getElementById("unit_price").innerText;

// $(document).on('change', '#quantity', function(event) {
// event.preventDefault();

//    let form = $(this).closest('.myForm');
//    let quantity = form.find("input[name=quantity]").val();

//    let totalPriceCalculate = unitPrice * quantity

//    document.getElementById("totalPrice").innerText = totalPriceCalculate



// });
