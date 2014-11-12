<<<<<<< HEAD

$(document).ready(function(){

    function animateHeader(){
        $('.header-img').css({y: '-1000px', rotate: '+45deg', scale: '0.4'});
        $('header h1').css({y: '-800px', x: '-600px', rotate:'90deg'});
        $('header p').css({x: '-1450px', rotate: '60deg', scale: 0.5});
        $('.header-wrapper .button').css({y: '300px', opacity: 0});

        setTimeout(function() {
          $('header h1').transition({y: '0px', x: '0px', rotate: '-15deg', scale:'0.8'},300, 'easeOutExpo', function(){
                $('header h1').transition({scale:'1.1', rotate: '5deg'}, 400, 'easeInOutCirc', function(){
                    $(this).transition({scale:1,rotate: '0'}, 'easeInOutCirc');
                    $('header p').transition({
                         x: '0px',
                        rotate: '0deg', scale: 0.85
                    }, 600, 'easeOutBack', function(){
                            $(this).transition({x:'0px', rotate: '0deg', scale: 1}, 300, 'easeOutExpo');
                            $('.header-wrapper .button').transition({y: '0', opacity: 1}, 'easeInOutCirc');
                    });
                });
          });
        }, 500);

        setTimeout(function() {
          $('.header-img').transition({y: '0px', rotate: '-35deg', scale:'1.1'}, 400, 'easeOutExpo', function(){
                $('.header-img').transition({rotate: '15deg', scale:'1'},500, 'easeInOutCirc', function(){
                    $(this).transition({y: '0px', rotate: '0deg', scale: '1'}, 300, 'easeOutExpo');
                });
          });
        }, 300);

    }

    function waypointsInit(){
          /*  $('.promo').css({scale: 0, perspective: '100px', rotateX: '90deg'});
            $('#estimate').css({y: '-267px'});
            $('.promo').waypoint(function(direction) {
                 $('.promo').transition({scale: 1, perspective: '100px', rotateX: '0deg'}, 500, 'easeInOutCirc');
                 $('#estimate').transition({y: '0px'}, 500, 'easeInOutCirc');
            }, { offset: '20%', triggerOnce: true });
        */
        $('.waypoint').css({ scale: '0', rotate: '90deg'});
        $('.section-cars').css({ padding: '0', height: '0px'});
        $('.wp-appear').css({ x: '1800px' });
        $('.car-item').css({x: '1500px', scale: '0'});
        $('.box-price').css({x: '2000px', scale: '0.3', rotate: '90deg'});
        $('.box-estimate h2').css({backgroundColor: 'transparent'});
=======

$(document).ready(function(){

    $('.box-full ul li').each(function(){
        $(this).html('<i class="fa fa-angle-right"></i> '+$(this).html());
    });

    $('#btn-es-go').click(function(){
        $(this).transition({scale: 2, rotateX: '-20deg', perspective: '120px', rotateX: '45deg', opacity: 0, x: '-900px'}, 1500, function(){
            $(this).css({display: 'none'});
        })
    })
    $('.anal').removeClass('container');

    $('.spanning').scroll(function(){
        console.log($(this).offset().top+' '+$(this).position().top);
        $('#menu-fixed').transition({opacity: 0.7});
    });

    $('#menu-fixed li a').hover(function(){
        $(this).parent().parent().transition({opacity: 1});
    });
>>>>>>> pre

    $(".st-content").niceScroll({cursorcolor:"#333",cursorwidth: '11px', cursorborder: '#444',cursorborderradius: '3px', scrollspeed: '20'});

    KeyboardJS.on('left', function() {
        setTimeout(function() {
            $('.btn-nav').click();
        });
    });

<<<<<<< HEAD
        $('.waypoint').waypoint(function(direction) {
            $(this).transition({ scale: '1', rotate: '0deg'}, 800, 'easeOutBack');
        }, {offset: '75%', triggerOnce: true});

        $('.wp-appear').waypoint(function(direction) {
            $(this).transition({ x: '0'}, 1200, 'easeOutBack');
        }, {offset: '45%', triggerOnce: true});

      /*   $('.button-submit').css({scale: 0});
        $('.button-submit').waypoint(function(direction) {
            $(this).transition({scale:1});
            $('.ico', this).transition({scale: '1.5', x: '-50px', rotate: '80deg'}, 800, 'easeOutBack', function(){
                $(this).transition({scale: '0.8', x: '30px', rotate: '-20deg'}, 900, function(){
                    $(this).transition({scale: '1', x: '0px', rotate: '0deg'}, 1200, 'easeOutBack');
                 //   $('.box-estimate h2').transition({backgroundColor: '#dc8c2b'});
                });
            })
        }, {offset: '75%', triggerOnce: true}); */


        $('.box-light').waypoint(function(direction) {
            $('.ico', this).transition({scale: '1.5', x: '-50px', rotate: '80deg'}, 1000, 'easeOutBack', function(){
                $(this).transition({scale: '0.8', x: '30px', rotate: '-20deg'}, 1100, function(){
                    $(this).transition({scale: '1', x: '0px', rotate: '0deg'}, 1200, 'easeOutBack');
                 //   $('.box-estimate h2').transition({backgroundColor: '#dc8c2b'});
                });
            })
            $('.section-cars').transition({ height:'auto', x: '0px', scale: '1', padding: '35px 0 5px'}, function(){
                for(var i = 0; i < 6; i++){
                    $('#car-'+i).transition({x: '0px', scale: '1'}, 400*i, 'easeOutBack');
                }
            });

        }, {offset: '78%', triggerOnce: true});
=======
    KeyboardJS.on('right', function() {
        setTimeout(function() {
            $('.btn-nav').click();
        });
    });

    // init

    $('.tip').tooltipster();
>>>>>>> pre

    $("body").removeClass("no-js");

<<<<<<< HEAD
        }, {offset: '70%', triggerOnce: true});
=======
    $('a[href="#"]').on('click',function(e){e.preventDefault();});
>>>>>>> pre

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
            $('.st-content').animate({scrollTop: offsetTop}, 1200, 'easeInQuart');
            return false;
          }
        }
    });

<<<<<<< HEAD
  //  $('.st-content').css({height: $('.st-content-inner').height()});

    /*     $('.anchor').waypoint(function(direction) {
            var a = $(this).attr('id');

            $(".top-nav a").transition({
                perspective: '100px',
                boxShadow: '0 0 0 rgba(0,0,0,0)',
                rotateX: '0deg',
                backgroundColor: 'rgba(0,0,0,0)',
                borderBottom: '0px solid rgba(0,0,0,0)'
            });

            $(".top-nav a[href=#"+a+"]").transition({
                perspective: '100px',
                rotateX: '5deg',
                backgroundColor: '#5c5970',
                borderBottom: '4px solid #43405b',
                boxShadow: '0 5px 12px rgba(0,0,0,0.35)'
            });
        }, {offset: '10px'}); */



            $('.button-submit').hover(function(){
                 $(this).transition({scale:1});
                $('.ico', this).transition({scale: '1.3', x: '-30px', rotate: '80deg'}, 800, 'easeOutBack', function(){
                    $(this).transition({scale: '0.8', x: '15px', rotate: '-20deg'}, 900, function(){
                        $(this).transition({scale: '1', x: '0px', rotate: '0deg'}, 1200, 'easeOutBack');
                     //   $('.box-estimate h2').transition({backgroundColor: '#dc8c2b'});
                    });

                })
            });

/*
    $('.header-img').each(function(){ $(this).transition({x:'1500px'},1); });

    $('.promo-column').waypoint(function(direction) {
    $('.promo-column').each(function(){
            $(this).transition({x: '0', opacity: 1}, 500);
        });
    }, {
      offset: '80%',
      vertical: true
    }); */

});//document ready
=======
});
>>>>>>> pre
