
$(document).ready(function(){

    if( $('.top-nav').html() != -1 ){
        $('#btn-es-go').css({top: '100px'});
    };

    var i = 5;
    $('.nice-slider-fullwidth li').each(function(){
        i++;
        $(this).addClass('caption-'+i);
        $(this).attr('data-caption', 'caption-'+i);
        if(i > 5) i = 0;
    });

    // keys scroll
    $('.promo').waypoint(function(){
        $('#btn-es-go').html('<i class="ico li_paperplane"></i>');
        $('#btn-es-go').addClass('btn-inactive');
        $('#btn-es-go i').css({'margin-left': '0px', 'margin-top': '5px', 'margin-right': '5px'});
    },{offset: '20%'});

    KeyboardJS.on('left', function() {
        setTimeout(function() {
            $('.btn-nav').click();
        });
    });

    KeyboardJS.on('right', function() {
        setTimeout(function() {
            $('.btn-nav').click();
        });
    });

    KeyboardJS.on('up', function() {
        setTimeout(function() {
            $('.st-content').animate({scrollTop: $('.main').scrollTop()-$(window).height()}, 700, 'easeInQuart');
        });
    });

    KeyboardJS.on('down', function() {
        setTimeout(function() {
            $('.st-content').animate({scrollTop: $('.main').scrollTop()+$(window).height()}, 700, 'easeInQuart');
        });
    });

    // init
    $('.tip').tooltipster();

    $("body").removeClass("no-js");

    $('a[href="#"]').on('click',function(e){e.preventDefault();});

    $('input[placeholder], textarea[placeholder]').placeholder();

    $('.wpcf7-submit').addClass('button button-submit');

    $('.wpcf7-text').addClass('input-text').removeClass('wpcf7-form-control');
    $('.wpcf7-captchar').addClass('input-text').removeClass('wpcf7-form-control');
    $('.wpcf7-textarea').addClass('input-text').removeClass('wpcf7-form-control');

  /*  $('.wpcf7 label').each(function(){
      $(this).parent().find('.input-text').attr("placeholder", $(this).html()); $(this).remove();
    });
  */

    /* info tabs */

    $(function(){
        $('.tabs').delegate('li:not(.active)','click',function(){
            $(this).addClass('active').siblings().removeClass('active').parents('.tab').find('.box').hide().eq($(this).index()).fadeIn(250);
        });
    });

    setInterval(function(){
     $('.tabs').addClass('active').siblings().removeClass('active').parents('.tab').find('.box').hide().eq($(this).index()).fadeIn(250);
    },8000);

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

        })
    });


    var docWidth = document.documentElement.offsetWidth;

    [].forEach.call(
      document.querySelectorAll('*'),
      function(el) {
        if (el.offsetWidth > docWidth) {
          console.log(el);
        }
      }
    );

    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          var offsetTop = target.position().top - target.closest('.st-content').position().top;
          if (target.length) {
            $('.st-content').animate({scrollTop: offsetTop}, 700, 'easeInQuart');
            return false;
          }
        }
    });

});