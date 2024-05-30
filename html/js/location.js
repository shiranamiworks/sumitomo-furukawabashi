$(window).on("load resize", function () {
  if ($(window).width() < 640) {
    //コマ数・送りの設定
    var feed = 1;
    var frame = 1;

    //横幅取得・設定
    var tblWrapW = $("#wrap .box").outerWidth();
    var tblW = $(".scrollimage").outerWidth();
    var tblScrlW = parseInt(tblW - tblWrapW);
    $("#wrap .box").outerWidth(tblWrapW);
    $(".scrollimage").outerWidth(tblW);

    //カウント初期値
    var count = 0;
    //clearinterval対策
    var setItv = "";

    //スクロール値取得
    $("#wrap .box").scroll(function () {
      count = $(this).scrollLeft();
    });

    //移動設定
    var countUp = function () {
      if (checkBA === "a") {
        var count2 = count + feed;
        $("#wrap .box").scrollLeft(count2);
      } else {
        var count2 = count - feed;
        $("#wrap .box").scrollLeft(count2);
      }
    };
  }
  //インターバルの設定
  function setItvF() {
    setItv = setInterval(countUp, frame);
  }

  //進む
  $(".scrollimage_rightbox")
    .mousedown(function () {
      checkBA = "a";
      if (count < tblScrlW) {
        $(this).css("opacity", "0.7");
        setItvF();
      }
    })
    .mouseup(function () {
      if (count <= tblScrlW) {
        $(this).css("opacity", "0.4");
        clearInterval(setItv);
      }
    });

  //戻る
  $(".scrollimage_leftbox")
    .mousedown(function () {
      checkBA = "b";
      if (0 < count) {
        $(this).css("opacity", "0.7");
        setItvF();
      }
    })
    .mouseup(function () {
      if (0 <= count) {
        $(this).css("opacity", "0.4");
        clearInterval(setItv);
      }
    });
});

$(window).one("load resize", function () {
  $("#wrap .box").scrollLeft(688);
});

jQuery(document).ready(function($) {

    // SP用 MVスライド
    $('.image__slide').slick({
        infinite: true,
        dots: true,
        arrows: false,
        speed: 1000,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
    });

})

$(function () {
  if ($(".swipe-img").length) {
    $(window).on("load resize", function () {
      if ($(".sp").is(":visible")) {
        var ww = $(this).width();
        $(".swipe-img.modify-starts").each(function () {
          var w = $(this).find("img.sp").length
            ? $(this).find("img.sp").width()
            : $(this).find("img").width();
          w =
            w +
            parseInt($(this).css("padding-left")) +
            parseInt($(this).css("padding-right"));
          var pos = w / 2 - ww / 2;
          if ($(this).hasClass("right-start")) {
            pos = w / 2 - (w / 5) * -1;
          }
          $(this).animate({ scrollLeft: pos }, 30);
        });
      }
    });
  }
});

$(function(){
  $('.js-modal-open').each(function(){
    $(this).on('click',function(){
      var target = $(this).data('target');
      var modal = document.getElementById(target);
      $(modal).fadeIn();
      return false;
    });
  });
  $('.js-modal-close').on('click',function(){
    $('.js-modal').fadeOut();
    return false;
  }); 
});