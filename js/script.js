/* jQuery scripts for Finch Moving Wordpress Template
   im@andreystarkov.ru */

$(document).ready(function(){

    function createSliderNavigation(obj){
        var box = $(obj);
        var count = $('.item', obj).length;
        for(var i = 0; i < count; i++){
            $('.carousel-indicators', box).append('<li data-target="'+obj+'" data-slide-to="'+i+'"></li>');
        }
        $(box).append('<a class="left carousel-control carousel-left" href="'+obj+'" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control carousel-right" href="'+obj+'" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a>');
    }

    createSliderNavigation('#pricing-slider');
    createSliderNavigation('#header-slider');


    function rand(min, max){
        return Math.floor((Math.random()*max)+min);
    }
        clearClass($('.box-price', 'price-hover'));
    function clearClass(obj, className){
        obj.each(function(){
            $(this).removeClass(className);
        });
    }
    clearClass($('.ani'), 'ani');
    function isMobile() {
      try{ document.createEvent("TouchEvent"); return true; }
      catch(e){ return false; }
    }

    $('body').flowtype({
     minFont   : 12,
     maxFont   : 18,
     fontRatio : 30,
     minimum : 400,
     maximum : 1200,
     lineRatio : 1.45
    });

    $('.bootstrap-carousel').carousel();
 /*   $('#slider-wrapper').css({height: $(window).height()}); */

    $('.carousel-left').click(function(){
        $(this).parent().carousel('prev');
    });
    $('.carousel-right').click(function(){
        $(this).parent().carousel('next');
    });

    $('.bg-parallax').parallax({positionY: 0,speed: 0.1});
     $.fn.waypoint.defaults = {
      context: '.st-content',
      continuous: true,
      enabled: true,
      horizontal: false,
      offset: 0,
      triggerOnce: false
    };

    $('.box-light').waypoint(function(direction){
    alert('lol');
      if(direction == 'down') {
        $('.button-up').removeClass('hidden animated bounceOutRight').addClass('animated bounceInRight visible');
      } else {
        $('.button-up').removeClass('animated bounceInRight visible').addClass('animated bounceOutRight').addClass('hidden');
      }
    });

    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {

        $('.truck-hover').each(function(){
            $(this).removeClass('truck-hover');
        });
        $('.ani, .ani-up').css({opacity: 1});
        $('.wow').each(function(){
            $(this).removeClass('wow');
        });
    }

    $('.anal').removeClass('container');

    $('#menu-fixed li a').hover(function(){
        $(this).parent().parent().transition({opacity: 1});
    });

    // init

    $('.tip').tooltipster();

    $("body").removeClass("no-js");

    $('a[href="#"]').on('click',function(e){e.preventDefault();});


    $('[title="Serving Areas"]').hide();
    $('[href="http://finchmovingservices.com/about/serving-areas/"]').hide();
    $('.wpcf7-submit').addClass('button button-submit');

    $('.wpcf7-text').addClass('input-text').removeClass('wpcf7-form-control');
    $('.wpcf7-captchar').addClass('input-text').removeClass('wpcf7-form-control');
    $('.wpcf7-textarea').addClass('input-text').removeClass('wpcf7-form-control');

    /* info tabs */

    $('.wpcf7-validation-errors').mouseover(function() {
        $(this).fadeOut(500);
    });


    $('.button-submit').hover(function(){
         $(this).transition({scale:1});
        $('.ico', this).transition({scale: '1.3', x: '-30px', rotate: '80deg'}, 800, 'easeOutBack', function(){
            $(this).transition({scale: '0.8', x: '15px', rotate: '-20deg'}, 900, function(){
                $(this).transition({scale: '1', x: '0px', rotate: '0deg'}, 1200, 'easeOutBack');
             //   $('.box-estimate h2').transition({backgroundColor: '#dc8c2b'});
            });

        });
    });

    var docWidth = document.documentElement.offsetWidth;

    [].forEach.call(
      document.querySelectorAll('*'),
      function(el) {
        if (el.offsetWidth > docWidth) {
     //    console.log(el);
        }
      }
    );

    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            var offsetTop = target.position().top - target.closest('body').position().top;
            if (target.length) {
              $('body').animate({scrollTop: offsetTop}, 1200, 'easeInQuart');
              return false;
            }

        }
    });

});