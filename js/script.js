/* jQuery scripts for Finch Moving Wordpress Template
   im@andreystarkov.ru */

$(document).ready(function(){

    var isiPad = navigator.userAgent.match(/iPad/i) != null;

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
     fontRatio : 30
    });
    $('.bootstrap-carousel').carousel();
 /*   $('#slider-wrapper').css({height: $(window).height()}); */

    $('.carousel-left').click(function(){
        $('.bootstrap-carousel').carousel('prev');
    });
    $('.carousel-right').click(function(){
        $('.bootstrap-carousel').carousel('next');
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

    $('.promo').waypoint(function(direction){
      if(direction == 'down') {
        $('.button-up').removeClass('hidden animated bounceOutRight').addClass('animated bounceInRight visible');
      } else {
        $('.button-up').removeClass('animated bounceInRight visible').addClass('animated bounceOutRight').addClass('hidden');
      }
    });

    if( !(isMobile()) && !(isiPad) ){

        if( $(window).width() > 1000 ) {
    /*
            $('.wrap p, .wrap h2, .wrap h2, .wrap h3, #subpages .box-light-content a, .box-full ul, .box-full ol').each(function(){
                $(this).addClass('ani-up');
            });

            $('.ani-up').waypoint(function(){
              var effects = ["bounceInUp","fadeInUp", "zoomInUp","bounceInLeft","bounceInRight","fadeInLeft", "fadeInRight"];
                var effect = effects[rand(0,effects.length-1)];
                $(this).addClass('animated '+effect);
            }, {offset: '115%', triggerOnce: true});

            $('.ani').waypoint(function(){
                var effects = ["bounceIn", "bounceInDown","bounceInLeft","bounceInRight","bounceInUp","fadeInDown", "fadeInLeft","fadeInUp", "fadeInRight", "flipInX",
                "fadeInUpBig","rotateIn", "flipInX","flipInY", "rotateInDownLeft", "rotateInDownRight", "rollIn",
                 "zoomIn","zoomInDown", "zoomInLeft", "zoomInRight"];
                var effect = effects[rand(0,effects.length-1)];
                $(this).addClass('animated '+effect);
            }, {offset: '95%', triggerOnce: true});

            $('.box-full ul li').each(function(){
                $(this).html('<i class="fa fa-angle-right"></i> '+$(this).html());
            });
*/
        } else {
            $('.truck-hover').each(function(){
                $(this).removeClass('truck-hover');
            });
            $('.ani, .ani-up').css({opacity: 1});
            $('.wow').each(function(){
                $(this).removeClass('wow');
            });
        }
    } else {
      //  $(".st-content").niceScroll({dblclickzoom: false, gesturezoom: false, cursorcolor:"#333",
        //cursorwidth: '11px', cursorborder: '#444',cursorborderradius: '3px', scrollspeed: '10'});

        $('.truck-hover').each(function(){
            $(this).removeClass('truck-hover');
        });
        clearClass($('.ani'), 'ani');
        clearClass($('.box-price', 'price-hover'));
    }

/*
    $('#btn-es-go').click(function(){
        $(this).transition({scale: 2, rotateX: '-20deg', perspective: '120px', rotateX: '45deg', opacity: 0, x: '-900px'}, 1500, function(){
            $(this).css({display: 'none'});
        });
    });
*/
    $('.anal').removeClass('container');

    $('#menu-fixed li a').hover(function(){
        $(this).parent().parent().transition({opacity: 1});
    });

    // init

    $('.tip').tooltipster();

    $("body").removeClass("no-js");

    $('a[href="#"]').on('click',function(e){e.preventDefault();});

 //   $('input[placeholder], textarea[placeholder]').placeholder();
    $('[title="Serving Areas"]').hide();
    $('[href="http://finchmovingservices.com/about/serving-areas/"]').hide();
    $('.wpcf7-submit').addClass('button button-submit');

    $('.wpcf7-text').addClass('input-text').removeClass('wpcf7-form-control');
    $('.wpcf7-captchar').addClass('input-text').removeClass('wpcf7-form-control');
    $('.wpcf7-textarea').addClass('input-text').removeClass('wpcf7-form-control');

  /*  $('.wpcf7 label').each(function(){
      $(this).parent().find('.input-text').attr("placeholder", $(this).html()); $(this).remove();
    });
  */

    /* info tabs */


    $('.tabs').delegate('li:not(.active)','click',function(){
        $(this).addClass('active').siblings().removeClass('active').parents('.tab').find('.box').hide().eq($(this).index()).fadeIn(250);
    });

    $('.wpcf7-validation-errors').mouseover(function() {
        $(this).fadeOut(500);
    });

    if ( $(".tab").has(".tab-prev").length || $(".tab").has(".tab-next").length ) {
        $('.tab-prev, .tab-next').click(function(){
            var $active = $(this).parents(".tab").find(".tabs .active");
            $next = $(this).hasClass('tab-prev') ? $active.prev() : $active.next();
            if (!$next.length) $next = $(this).hasClass('tab-prev') ? $(this).parents(".tab").find('.tabs li:last') : $(this).parents(".tab").find('.tabs li:first');
            $next.click();
            return false;
        });
    }

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
            var offsetTop = target.position().top - target.closest('.st-content').position().top;
            if (target.length) {
              $('.st-content').animate({scrollTop: offsetTop}, 1200, 'easeInQuart');
              return false;
            }

        }
    });

});