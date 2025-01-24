$(function(){
  $(".slider").slick({
    autoplay: true,
    arrows: true,
    fade: true,
    asNavFor: ".thumbnail",
  });
  $(".thumbnail").slick({
    slidesToShow: 10,
    asNavFor: ".slider",
    focusOnSelect: true,
        responsive: [
            {
                breakpoint: 768,
                slidesToShow: 3,
            }
        ]
  });
});

