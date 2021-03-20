"use strict";

$(document).ready(function () {
  // Index page

  /*
    if(document.title == 'شركة الروقي للسيراميك والبورسلين'){
          if(window.innerWidth <= 576){
              let img= document.querySelectorAll(".carousel-item img");
                  img[0].setAttribute("src", "layout/images/home/slider-mobile1.jpg");
                img[1].setAttribute("src", "layout/images/home/slider-mobile2.jpg");
                img[2].setAttribute("src", "layout/images/home/slider-mobile3.jpg");
            
        }
    }
   
  */
  $('#ceramic').on('click', function () {
    $('.main-links').hide();
    $('.ceramic-links').show();
  });
  $('#poreclian').on('click', function () {
    $('.main-links').hide();
    $('.poreclian-links').show();
  });
  $('#sintaryWare').on('click', function () {
    $('.main-links').hide();
    $('.sw-ware-links').show();
  }); // Blogger Page

  if (document.title == 'المدونة') {
    if (window.innerWidth <= 576) {
      var bloggerImage = document.querySelectorAll(".body-post img");

      for (var i = 0; i <= bloggerImage.length; i++) {
        var getAttr = bloggerImage[i].getAttribute("src");
        var arr = getAttr.split(".");
        var str = arr[0] + "." + arr[1] + "-mobile" + "." + arr[2];
        bloggerImage[i].setAttribute("src", str);
      }
    }
  } // Scroll Button


  var scrollbutton = $("#scrollTop");
  $(window).scroll(function () {
    if ($(this).scrollTop() >= 320) {
      scrollbutton.show();
    } else {
      scrollbutton.hide();
    }
  });
  scrollbutton.click(function () {
    $("html,body").animate({
      scrollTop: 0
    }, 1000);
  }); // sent message in contact page

  $(".send-message").fadeOut(3000);
  /*
  $("body").niceScroll({
      cursorcolor: "#424242", // change cursor color in hex
      cursoropacitymin: 0, // change opacity when cursor is inactive (scrollabar "hidden" state), range from 1 to 0
      cursoropacitymax: 1, // change opacity when cursor is active (scrollabar "visible" state), range from 1 to 0
      cursorwidth: "10px", // cursor width in pixel (you can also write "5px")
      cursorborder: "1px solid #FCA92D", // css definition for cursor border
      cursorborderradius: "12px", // border radius in pixel for cursor
      zindex: "auto", // change z-index for scrollbar div
      scrollspeed: 60, // scrolling speed
      background: "#f00", // change css for rail background
      iframeautoresize: true, // autoresize iframe on load event
      cursorminheight: 400 , // set the minimum cursor height (pixel)
      })
    */
});
//# sourceMappingURL=main.dev.js.map
