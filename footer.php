
  <?  $town = $GLOBALS['town']; $templateUri = $GLOBALS['templateUri'];  $templatePath = $GLOBALS['templatePath'];
      $curl = $GLOBALS['curl']; $car_curr = $GLOBALS['car_curr'];
  ?>

    <? if($pagename != "california"){ ?>

        <div class="box-light anchor" id="estimate">
            <div class="wrap box-estimate">
                <div class="box-light-content" style="margin-bottom:0px;">
                    <h2 class="ani">Free Quote</h2>
                    <p class="ani">Get the seamless and stress-free move of your belongings. We'll contact you as soon as possible.</p>
                    <div class="top-phone ani">
                        <i class="li_phone"></i><a id="estimate-phone" href="tel://8559696683">855 969 6683</a>
                        <span>free<br>call</span>
                    </div>
                </div>
                <div class="box-form ani" id="box-estimate">
                    <div id="trigger-estimate" class="forms-form clearfix">
                      <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
        </div>

    <? } ?>

    <? if($pagename == "pricing"){ ?>

        <div id="subpages" class="img-truck bg-parallax" data-parallax="scroll" data-image-src="<? echo get_template_directory_uri(); ?>/images/truck/truck-1600.jpg">
            <div class="wrap">
                <div class="box-light-content clearfix">
                    <h2>see also:</h2>

                        <?
                        $child_pages = $wpdb->get_results("SELECT * FROM $wpdb->posts WHERE post_parent = ".$post->ID." AND post_type = 'page' ORDER BY menu_order", 'OBJECT');
                        if ( $child_pages ) {

                            foreach ( $child_pages as $pageChild ) {
                                setup_postdata( $pageChild ); ?>
                                  <?php // echo get_the_post_thumbnail($pageChild->ID, 'thumbnail'); ?>
                                     <a href="<?php echo  get_permalink($pageChild->ID); ?>" class="submenu-current" rel="bookmark" title="<?php echo $pageChild->post_title; ?>">
                                        <?php echo $pageChild->post_title; ?>
                                     </a>
                        <?php
                            }
                        }?>
                </div>
            </div>
        </div>

    <? } ?>
    <style>
    #footer .ico-fb i { color:#3A5795; }
    #footer .ico-ld i { color:#0177B5; }
    #footer .ico-tw i { color:#5EA9DD; }
    #footer .ico-yelp i { color:#C72116; }
    #footer .ico-google i { color:#DC4E38; }

    </style>
    <footer id="footer">
        <div class="box-footer wrap contacts">
            <div class="floats">
                <a href="http://www.facebook.com/FinchMovingCompany" class="contact ani ico-fb"><i class="fa fa-facebook-square"></i></a>
                <a href="http://linkedin.com/pub/finch-moving/3a/114/125" class="contact ani ico-ld"><i class="fa fa-linkedin-square"></i></a>
                <a href="http://twitter.com/FinchMoving" class="contact ico-tw"><i class="fa ani fa-twitter"></i></a>
                <a href="http://www.yelp.com/biz/finch-moving-san-diego-san-diego" class="contact ico-yelp"><i class="fa fa-yelp"></i></a>
                <a href="https://plus.google.com/115840740562737641834/about?hl=en" class="contact ico-google"><i class="fa fa-google-plus"></i></a>
            </div>

        </div>

        <div class="footer-menu ani-up">
            <?
            wp_nav_menu(array( 'theme_location' => 'primary_navigation', 'walker' => new roots_nav_walker(),
                             'menu_id' => 'footer-nav', 'menu_class' => 'top-menu-list', 'fallback_cb' => 'prime_menu_fallback' ));
            ?>
        </div>
    </footer>

    </div>
  </div>
</div>

</div>
</div>


    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/dist/all.js"></script>
 <!--   <script src="<? echo get_template_directory_uri(); ?>/js/libs/bootstrap.min.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/libs/jquery.easing.1.3.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/libs/skel.min.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/libs/skel-layers.min.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/libs/jquery.transit.min.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/libs/jquery.tooltipster.min.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/libs/jquery.nicescroll.min.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/libs/parallax.min.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/libs/flowtype.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/libs/jquery.cookie.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/libs/library.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/libs/wow.min.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/libs/waypoints.min.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/libs/queryloader2.min.js" type="text/javascript"></script> -->
    <script type="text/javascript">
    window.addEventListener('DOMContentLoaded', function() {
        new QueryLoader2(document.querySelector("body"), {
            barColor: "#efefef",
            backgroundColor: "#3b6028",
            percentage: false,
            barHeight: 10,
            minimumTime: 200,
            fadeOutTime: 1000,
            onLoadComplete: $('#preloadOverlay').hide()
        });
    });
    </script>

<? if(!empty($town)) { makeLinks($town); } ?>
    <script>
    $( function(){

        skel.init({
            reset: 'full',
            containers: '95%',
            breakpoints: {
                xlarge: { media: '(min-width: 1300px) and (max-width:1600px)', href: '<? echo get_template_directory_uri(); ?>/css/responsive/style-xlarge.css', },
                large: { media: '(min-width:1000) and (max-width: 1480px)', href: '<? echo get_template_directory_uri(); ?>/css/responsive/style-large.css'},
                medium: { media: '(min-width: 480px) and (max-width: 1024px)', href: '<? echo get_template_directory_uri(); ?>/css/responsive/style-medium.css' },
                small: { media: '(max-width: 1000px)', href: '<? echo get_template_directory_uri(); ?>/css/responsive/style-small.css' },
                xsmall: { media: '(max-width: 480px)', href: '<? echo get_template_directory_uri(); ?>/css/responsive/style-xsmall.css' },
                mobile: { media: '(min-width: 320px) and (max-width: 1030px)'},
                desktop: { media: '(min-width: 1030px)'}
            },plugins: {
                layers: {
                  titleBar: {
                    breakpoints: ['mobile'],
                    position: 'top-left',
                    width: '100%',
                    height: 50,
                    html: $('#titleContainer').html()
                  },
                  bigBar: {
                    breakpoints: ['desktop'],
                    position: 'top-left',
                    width: '100%',
                    height: 80,
                    html: $('#titleContainerBig').html()
                  },
                  navPanel: {
                    breakpoints: ['mobile'],
                    position: 'top left',
                    width: 260,
                    height: '100%',
                    speed: 300,
                    orientation: 'vertical',
                    side: 'left',
                    hidden: true,
                    animation: 'fade',
                    clickToHide: true,
                    html: $('#menuContainer').html()
                  }, navPanelBig: {
                    breakpoints: ['desktop'],
                    position: 'top left',
                    width: 360,
                    height: '100%',
                    speed: 300,
                    orientation: 'vertical',
                    side: 'left',
                    hidden: true,
                    animation: 'fade',
                    clickToHide: true,
                    html: $('#menuContainer').html()
                  },
                }
              }
        });

        var i = 4;
        var res = "1600";
        var width = $(window).width();

        if( width < 1000) {
            $('#subpages').css({
                backgroundImage: 'url(<? echo get_template_directory_uri(); ?>/images/truck-small.jpg)',
                'background-attachment': 'scroll',
                'background-size': 'cover'
            });
        }
        if( width < 1800){ res = "1600"; }
        if( width < 1400){
            res = "1000";
            $('.nice-slider-fullwidth').css({height: '520px'});
            $('.nice-slider-fullwidth li img').css({bottom: '-100px'});
        }
        if( width < 1100 ){
            $('.promo-column').css({'padding': '15px 2px'});
        }
        if( width > 1800){ res = "1900"; }

        $.ajax({
            url: '<?echo $templateUri; ?>/getslider.php',
            type: 'post',
            data: {
            town: '<? echo $town; ?>',
            rootPath: '<? echo $templatePath; ?>',
            rootUri: '<? echo $templateUri; ?>',
            res: res
            },
            success: function( data, textStatus, jQxhr ){
                 $('#header-slider .carousel-inner').html(data);

             },
            error: function( jqXhr, textStatus, errorThrown ){ }
        });

       $('#footmenu').html('<li><a title="Go back to <? echo get_the_title($post->post_parent);?> page." class="btn-back tip" href="<? echo get_permalink($post->post_parent); ?>"><i class="fa fa-angle-left"></i></a></li>'+$('#footmenu').html());
       <? if(!empty($car_curr)) { ?> $('<? echo $car_curr; ?>').addClass('car-current'); <? } ?>

         $('.st-menu .current-menu-item').append('<? echo getSubMenus($wpdb,$parent_id); ?>');
         $('[name="Reviews"]').addClass('current');
    <? if(strpos($curl, "_moving_services")){ ?>
         $('.st-menu ul .current-menu-item').append("<a href='http://finchmovingservices.com/california/<?echo $town; ?>_moving_and_packing_services/' title='Moving and Packing'>Moving and Packing</a><a href='http://finchmovingservices.com/california/<?echo $town; ?>_office_movers_relocation/' title='Office Relocation'>Office Relocation</a>");
    <? } ?>

    });
</script>

<script>
(function($) {
  $.fn.nodoubletapzoom = function() {
      $(this).bind('touchstart', function preventZoom(e) {
        var t2 = e.timeStamp
          , t1 = $(this).data('lastTouch') || t2
          , dt = t2 - t1
          , fingers = e.originalEvent.touches.length;
        $(this).data('lastTouch', t2);
        if (!dt || dt > 500 || fingers > 1) return; // not double-tap

        e.preventDefault(); // double tap - prevent the zoom
        // also synthesize click events we just swallowed up
        $(this).trigger('click').trigger('click');
      });
  };
})(jQuery);

</script>

<?
        $parent_id = $post->ID;
        $parent_id = getTrueParentId($curl);

?>
  <!--<script src="<? echo get_template_directory_uri(); ?>/js/libs/fullwidth-slider.js"></script>
<script src="<? echo get_template_directory_uri(); ?>/js/classie.js"></script> -->
<script src="<? echo get_template_directory_uri(); ?>/js/script.js"></script>

<?php // roots_head();
wp_head(); ?>

<script type='text/javascript' src='/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js?ver=3.50.0-2014.02.05'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpcf7 = {"loaderUrl":"http:\/\/finchmovingservices.com\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","sending":"Sending ..."};
/* ]]> */2
</script>
<script type='text/javascript' src='/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=3.7.2'></script>

<script>
(function(i, s, o, g, r, a, m){
  i['GoogleAnalyticsObject'] = r;
  i[r] = i[r] || function() {
    (i[r].q = i[r].q || []).push(arguments)
  },
  i[r].l = 1 * new Date();
  a = s.createElement(o),
  m = s.getElementsByTagName(o)[0];
  a.async = 1;
  a.src = g;
  m.parentNode.insertBefore(a, m)
})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
ga('create', 'UA-48245648-1', 'auto');
ga('send', 'pageview');
</script>
<script>
    var wow = new WOW({
        animateClass: 'animated',
        offset: 100,
        mobile: false
     });
     wow.init();
</script>

</body>
</html>