
  <?  $town = $GLOBALS['town']; $templateUri = $GLOBALS['templateUri'];  $templatePath = $GLOBALS['templatePath'];
      $curl = $GLOBALS['curl']; $car_curr = $GLOBALS['car_curr'];
  ?>

    <? if($pagename != "california"){ ?>

        <div class="box-light anchor" id="estimate">
            <div class="wrap box-estimate">
                <div class="box-light-content">
                    <h2 class="ani">Free Estimate</h2>
                    <p class="ani">Get the seamless and stress-free move of your belongings. We'll contact you as soon as possible.</p>
                    <div class="top-phone ani">
                        <i class="li_phone"></i><b>855 969 6683</b>
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

        <div id="subpages" class="slide-1 clearfix img-truck-2 box-img " style="box-shadow: inset 0px -6px 18px rgba(0,0,0,0.5)">
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

    <footer>
        <div class="box-footer wrap contacts">
            <div class="floats">
                <a href="http://www.facebook.com/FinchMovingCompany" class="contact ani ico-fb"><i class="fa fa-facebook-square"></i></a>
                <a href="http://linkedin.com/pub/finch-moving/3a/114/125" class="contact ani ico-ld"><i class="fa fa-linkedin-square"></i></a>
                <a href="http://twitter.com/FinchMoving" class="contact ico-tw"><i class="fa ani fa-twitter-square"></i></a>
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


    <script src="<? echo get_template_directory_uri(); ?>/js/libs/_jquery-2.1.1.min.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/libs/jquery.easing.1.3.js"></script>

    <script src="<? echo get_template_directory_uri(); ?>/js/libs/skel.min.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/libs/skel-layers.min.js"></script>
<!--  <script src="<? echo get_template_directory_uri(); ?>/js/skel-config.js"></script>-->

  <!--  <script src="<? echo get_template_directory_uri(); ?>/js/vendor/skel-panels.min.js"></script>-->

    <script src="<? echo get_template_directory_uri(); ?>/js/libs/jquery.transit.min.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/libs/jquery.tooltipster.min.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/libs/jquery.nicescroll.min.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/libs/jquery.cookie.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/libs/library.js"></script>
 <!--
    <script src="<? echo get_template_directory_uri(); ?>/js/vendor/TweenMax.min.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/vendor/highlight.pack.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/vendor/jquery.scrollmagic.min.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/vendor/jquery.scrollmagic.debug.js"></script>-->

    <script src="<? echo get_template_directory_uri(); ?>/js/libs/wow.min.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/libs/waypoints.min.js"></script>

<script>
$( function(){

    skel.init({
        reset: 'full',
        containers: '95%',
        breakpoints: {
            xlarge: { media: '(min-width: 1300px) and (max-width:1600px)', href: '<? echo get_template_directory_uri(); ?>/css/responsive/style-xlarge.css', },
            large: { media: '(min-width:1000) and (max-width: 1480px)', href: '<? echo get_template_directory_uri(); ?>/css/responsive/style-large.css'},
            medium: { media: '(min-width: 480px) and (max-width: 1000px)', href: '<? echo get_template_directory_uri(); ?>/css/responsive/style-medium.css' },
            small: { media: '(max-width: 1000px)', href: '<? echo get_template_directory_uri(); ?>/css/responsive/style-small.css' },
            xsmall: { media: '(max-width: 480px)', href: '<? echo get_template_directory_uri(); ?>/css/responsive/style-xsmall.css' }
        },plugins: {
            layers: {
              titleBar: {
                position: 'top-left',
                width: '100%',
                height: 50,
                html: '<div class="toggle left-panel" id="topPanel" data-action="toggleLayer" data-args="navPanel"><i class="fa fa-bars"></i>' +
                '<span class="title"></span></div><a class="button-home tip" style="display:none" title="На главную страницу" href="/"><i class="fa fa-home"></i></a>'
              },
              navPanel: {
                position: 'top-left',
                width: 295,
                height: '100%',
                orientation: 'vertical',
                side: 'left',
                hidden: true,
                animation: 'pushX',
                clickToHide: true,
                html: $('#menuContainer').html()
              }
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
             $('#nice-slider .slider-content').html(data);
            /*  $('#nice-slider .slider-content li').each(function(){
                i++;
                $(this).addClass('caption-'+i);
                $(this).attr('data-caption', 'caption-'+i);
                if(i > 4) i = 0;
            }); */
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


<? if(!empty($town)) { makeLinks($town); } ?>

<?
        $parent_id = $post->ID;
        $parent_id = getTrueParentId($curl);

?>
<script src="<? echo get_template_directory_uri(); ?>/js/libs/fullwidth-slider.js"></script>
<script src="<? echo get_template_directory_uri(); ?>/js/classie.js"></script>
<script src="<? echo get_template_directory_uri(); ?>/js/script.js"></script>

<?php // roots_head();
wp_head(); ?>

<script type='text/javascript' src='/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js?ver=3.50.0-2014.02.05'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpcf7 = {"loaderUrl":"http:\/\/finchmovingservices.com\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","sending":"Sending ..."};
/* ]]> */
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