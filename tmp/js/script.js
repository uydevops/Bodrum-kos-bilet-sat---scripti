$(document).ready(function () {

    var owl = $('.owl-slider');
      owl.owlCarousel({
        margin: 0,
        loop: false,
        autoplay:true,
        dots: false,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 1
          },
          1000: {
            items: 1
          }
        }
      });

      $('.owl-products').owlCarousel({
        loop: false,
        margin: 0,
        responsiveClass: true,
        dots: false,
        nav: true,
        autoplay:true,
        autoplayTimeout:9000,
        responsive: {
          0: {
            items: 1,
            nav: true
          },
          768: {
            items: 2,
            margin:10,
            nav: false
          },
          1000: {
            items: 2,
            nav: true,
            loop: false,
            margin: 20
          }
        }
      });

      $('.owl-urundetay').owlCarousel({
        loop: false,
        center:true,
        margin:10,
        URLhashListener:true,
        autoplayHoverPause:true,
        startPosition: 'URLHash',
        responsiveClass: true,
        dots: false,
        nav:false,
        responsive: {
          0: {
            items: 1,
            nav: true
          },
          600: {
            items: 1,
            nav: false
          },
          1000: {
            items: 1,
            nav: true,
            loop: false,
            margin: 10
          }
        }
      });

      $('.owl-urundetay-thumbnail').owlCarousel({
        loop: false,
        margin:5,
        nav: true,
        responsive: {
          0: {
            items: 3,
            nav: true
          },
          600: {
            items: 5,
            nav: false
          },
          1000: {
            items: 3,
            nav: true,
            loop: false
          }
        }
      });

      var navInside = $('.header nav.main-manu ul').html();
    $('body').append('<nav class="mobilmenu" id="mobilmenu"><ul>' + navInside + '</ul></nav>');
    $('#mobilmenu').mmenu({
        offCanvas: {
            position: "right"
        },
        "extensions": [
            "fx-menu-slide",
            "fx-panels-zoom",
            "fx-listitems-slide",
            "pagedim-black",
            "theme-dark",
            "shadow-page",
            "shadow-panels"
        ],
        navbars: {
            title: "Menu",
            position: "top",
            content: ["close"],
            height: 2

        }
    });


    $(window).scroll(function() {
      if ($(this).scrollTop() >= 350) {
          $('#yukari').fadeIn(200);
      } else {
          $('#yukari').fadeOut(200);
      }
  });

    $('a#yukari').click (function() {
      $('html, body').animate({scrollTop: $('body').offset().top }, 'slow');
      return false;
    });
    $(window).scroll(function(){
        var Heightw=$(document).height();
        if(Heightw>1200){
            if($(this).scrollTop() >50){
            $('.header').addClass('sabitheader');
        }
        }
        if($(this).scrollTop() <=50) {
            $('.header').removeClass('sabitheader');
        }
    });

    $('.thumbnail a img').click(function() {
       var img=$(this).attr('src');
      $('.large a img').fadeOut('fast',function(){
         $(this).attr('src', img).fadeIn('fast');
      });
    
      $(this).fadeOut('fast',function(){
         var bottlersImg=$('.large a img').attr('src');
         $(this).attr('src', bottlersImg).fadeIn('fast');
         $(".large a").attr("href", bottlersImg);
      });
    });
});