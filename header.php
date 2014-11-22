<?  $tnames = array(
        1  => "free_moving_estimate",
        2  => "packing_services",
        3  => "small_moves",
        4  => "local_movers_moving_company",
        5  => "long_distance_movers_moving_company"
    );

    $slides = array(
        1  => get_template_directory_uri()."/images/house.jpg",
        2  => get_template_directory_uri()."/images/slides/3.jpg",
        3  => get_template_directory_uri()."/images/beach1.jpg",
        4  => get_template_directory_uri()."/images/slides/1.jpg",
        5  => get_template_directory_uri()."/images/slides/4.jpg"
    );

    $templatePath = get_template_directory();
    $templateUri = get_template_directory_uri();

    $pagename = get_query_var('pagename');
    $rurl = "http://finchmovingservices.com/california/";
    $curl = $_SERVER['REQUEST_URI'];
    $town = getTown($curl);

     if( !empty($town) ){
        $_SESSION["town"] == $town;
     } else {
        if(empty($_SESSION["town"])){
            $town = "san_diego";
            $_SESSION["town"] = "san_diego";
        }
    }

    if( !empty($_SESSION["town"]) ){
      $town = $_SESSION["town"];
    }

    if(strpos($curl, "free_moving_estimate") != FALSE) $car_curr = "#car-1";
     if( (strpos($curl, "packing_services") != FALSE) && (strpos($curl, "_packers") != FALSE) ) $car_curr = "#car-2";
     if(strpos($curl, "small_moves") != FALSE) $car_curr = "#car-3";
     if(strpos($curl, "local_movers") != FALSE) $car_curr = "#car-4";
     if(strpos($curl, "long_distance") != FALSE) $car_curr = "#car-5";

     if(!empty($town)){
         $_SESSION["town"] = $town;
         $url_trucks[1] .= $rurl.$tnames[1]."/".$town."_moving_quote";
         $url_trucks[2] .= $rurl.$tnames[2]."/".$town."_packers";
         $url_trucks[3] .= $rurl.$tnames[3]."/".$town;
         $url_trucks[4] .= $rurl.$tnames[4]."/".$town;
         $url_trucks[5] .= $rurl.$tnames[5]."/".$town;
     }
?><!DOCTYPE HTML>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<? echo get_template_directory_uri(); ?>/images/fav.png" />

    <title><?php
    if (!defined('WPSEO_VERSION')) {
        wp_title('|', true, 'right');
        bloginfo('name');
    }
    else {
        wp_title('');
    }?></title>

    <link rel="apple-touch-icon" sizes="72x72" href="<? echo get_template_directory_uri(); ?>images/touch/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<? echo get_template_directory_uri(); ?>images/touch/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<? echo get_template_directory_uri(); ?>images/touch/apple-touch-icon-144x144.png">

    <meta name="format-detection" content="telephone=8559696683">

    <link rel="stylesheet" type="text/css" href="<? echo get_template_directory_uri(); ?>/fonts/bebasneue/bebasneue.css" />
    <link rel="stylesheet" type="text/css" href="<? echo get_template_directory_uri(); ?>/fonts/alegreya/alegreya.css" />
    <link rel="stylesheet" type="text/css" href="<? echo get_template_directory_uri(); ?>/fonts/lineicons/style.css" />

    <!--  <link rel="stylesheet/less" type="text/css" href="<? echo get_template_directory_uri(); ?>/css/style.less" />-->

    <link rel="stylesheet" type="text/css" href="<? echo get_template_directory_uri(); ?>/css/all.css" />
    <script src="<? echo get_template_directory_uri(); ?>/js/dist/all.js"></script>

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
            $('.nice-slider-fullwidth').css({height: '600px'});
            $('.nice-slider-fullwidth li img').css({bottom: '-100px'});
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
    });
    </script>

    <script src="<? echo get_template_directory_uri(); ?>/js/fullwidth-slider.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/classie.js"></script>


    <script src="<? echo get_template_directory_uri(); ?>/js/script.js"></script>

    <?php // roots_head();
    wp_head(); ?>

    <script type='text/javascript' src='/wp-includes/js/admin-bar.min.js?ver=3.8.4'></script>
    <script type='text/javascript' src='/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js?ver=3.50.0-2014.02.05'></script>
    <script type='text/javascript'>
    /* <![CDATA[ */
    var _wpcf7 = {"loaderUrl":"http:\/\/finchmovingservices.com\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","sending":"Sending ..."};
    /* ]]> */
    </script>
    <script type='text/javascript' src='/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=3.7.2'></script>

    <!--[if lt IE 9]>
        <script src="<? echo get_template_directory_uri(); ?>/js/ie/html5.js"></script>
        <script src="<? echo get_template_directory_uri(); ?>/js/ie/respond.js"></script>
    <![endif]-->

    <script src="<? echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/vendor/less-1.7.5.min.js"></script>

    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script>
    $(function() {
       $('#footmenu').html('<li><a title="Go back to <? echo get_the_title($post->post_parent);?> page." class="btn-back tip" href="<? echo get_permalink($post->post_parent); ?>"><i class="fa fa-angle-left"></i></a></li>'+$('#footmenu').html());
       <? if(!empty($car_curr)) { ?> $('<? echo $car_curr; ?>').addClass('car-current'); <? } ?>
    });
    </script>

    <?php
        $parent_id = $post->ID;
        $parent_id = getTrueParentId($curl);

        if ( !$pagename && $id > 0 ) {
            $post = $wp_query->get_queried_object();
            $pagename = $post->post_name;
        }

        $submenu_text = makeMenuToVar($wpdb, $post, $parent_id);
        if( $parent_id != -1 ) {
            if( $submenu_text == -1) { $submenu_text = makeMenuToVar($wpdb, $post, $post->post_parent); }
        }
        $topMenu = makeMenuList($wpdb, $post, $parent_id);
        if( $parent_id != -1 ) {
            if( $topMenu == -1) { $topMenu  = makeMenuList($wpdb, $post, $post->post_parent); }
        }

         if(strpos($curl, "_moving_services")){
        $topMenu ="<ul class='fixed-menu' id='menu-fixed' style='opacity: 1;'>".
        "<li><a href='http://finchmovingservices.com/california/".$town."_moving_and_packing_services/' class='wow flipInX animated' data-wow-delay='0.2s' title='Moving and Packing'>Moving and Packing</a></li>".
        "<li><a href='http://finchmovingservices.com/california/".$town."_office_movers_relocation/' class='wow flipInX animated' data-wow-delay='0.2s' title='Office Relocation'>Office Relocation</a></li>".
        "</ul>";
         }
         if(strpos($curl, "_and_packing_services")){
        $topMenu ="<ul class='fixed-menu' id='menu-fixed' style='opacity: 1;'>".
        "<li><a href='http://finchmovingservices.com/california/".$town."_moving_and_packing_services/' class='wow flipInX animated submenu-current' data-wow-delay='0.2s' title='Moving and Packing'>Moving and Packing</a></li>".
        "<li><a href='http://finchmovingservices.com/california/".$town."_office_movers_relocation/' class='wow flipInX animated' data-wow-delay='0.2s' title='Office Relocation'>Office Relocation</a></li>".
        "</ul>";
         }
         if(strpos($curl, "_office_movers_relocation/")){
        $topMenu ="<ul class='fixed-menu' id='menu-fixed' style='opacity: 1;'>".
        "<li><a href='http://finchmovingservices.com/california/".$town."_moving_and_packing_services/' class='wow flipInX animated' data-wow-delay='0.2s' title='Moving and Packing'>Moving and Packing</a></li>".
        "<li><a href='http://finchmovingservices.com/california/".$town."_office_movers_relocation/' class='wow flipInX animated submenu-current' data-wow-delay='0.2s' title='Office Relocation'>Office Relocation</a></li>".
        "</ul>";
         }
    ?>

    <? if(!empty($town)) { makeLinks($town); } ?>
    <style>
        html,body { margin-top: 0 !important;}
        .spanning { overflow: hidden;}
        .wow:first-child {
          visibility: hidden;
        }
    </style>
    <?php if($topMenu != -1){ ?>
    <style>
    .header-phone {
        top: 90px;
        left: 125px;
    }
    </style>
    <? } ?>
</head>
<body class="no-js">

<div id="st-container" class="st-container">

<div class="st-pusher content">

    <div class="top-nav"></div>

    <script>
    $(function() {
         $('.st-menu .current-menu-item').append('<? echo getSubMenus($wpdb,$parent_id); ?>');
         $('[name="Reviews"]').addClass('current');
    <? if(strpos($curl, "_moving_services")){ ?>
         $('.st-menu ul .current-menu-item').append("<a href='http://finchmovingservices.com/california/<?echo $town; ?>_moving_and_packing_services/' title='Moving and Packing'>Moving and Packing</a><a href='http://finchmovingservices.com/california/<?echo $town; ?>_office_movers_relocation/' title='Office Relocation'>Office Relocation</a>");
    <? } ?>
    });
    </script>

    <div id="st-trigger-effects">
        <button class="btn-nav wow bounceInLeft" data-wow-delay="0.7s" data-effect="st-effect-2">
          <!--  <div class="svg-wrap">
                <span class="si-icon si-icon-hamburger-cross" data-icon-name="hamburgerCross"></span>
            </div> -->
            <i class="fa fa-bars"></i>
        </button>
    </div>

    <div id="top-menu-wrap" class="top-menu-wrap skel-layers-fixed">
        <ul class="fixed-menu" id="menu-fixed">
        <?php if($topMenu != -1) { echo $topMenu; }

        ?>
        </ul>
    </div>

    <nav class="st-menu st-effect-6" id="menu-6">
        <div class="icon icon-stack"></div>
        <?
        wp_nav_menu(array( 'theme_location' => 'primary_navigation', 'walker' => new roots_nav_walker(),
                         'menu_id' => 'topmenu', 'menu_class' => 'top-menu-list', 'fallback_cb' => 'prime_menu_fallback' ));
        ?>
    </nav>

    <div class="st-content main">

        <a href="#header" class="button-up hidden"><i class="fa fa-angle-up"></i></a>

        <div class="st-content-inner">

        <div id="header" style="overflow:hidden">

          <div id="slider-wrapper" style="overflow:hidden">

            <div class="truck-logo wow bounceInRight" data-wow-delay="0.1s"><img src="<? echo get_template_directory_uri(); ?>/images/truck-logo4.png" alt="Finch Moving Services"></div>

            <div class="top-phone header-phone wow wow bounceInLeft" data-wow-delay="0.2s">
                <i class="li_phone"></i><b>855 969 6683</b>
                <span>free<br>call</span>
            </div>

            <div id="nice-slider" class="nice-slider nice-slider-fullwidth" style="overflow:hidden">

                  <ul class="itemwrap slider-content">
                    <? echo sliderImages($town, "1600", $templatePath, $templateUri); ?>
                  </ul>

                    <div class="top-wrap">

                        <nav>
                            <div class="mobile-phone"><i class="li_phone"></i><b>855 969 6683</b></div>
                            <a href="#box-estimate" id="btn-es-go" data-wow-delay="0.8s" class="button-estimate wow bounceInRight" >Free Estimate <i class="ico li_paperplane"></i></a>
                            <a class="slider-control prev" href="#"><i class="fa fa-angle-left"></i></a>
                            <a class="slider-control next" href="#"><i class="fa fa-angle-right"></i></a>

                        </nav>

                        <div class="slider-caption caption-current" id="caption-1"><div class="wrp">
                            <p><i class="li_diamond"></i>We are a non-franchised, locally owned and operated moving company for the local and long distance moving.</p>
                        </div></div>

                        <div class="slider-caption" id="caption-2"><div class="wrp">
                            <p><i class="li_star"></i>We have a very deep passion for serving our clients best interests.</p>
                        </div></div>

                        <div class="slider-caption" id="caption-3"><div class="wrp">
                            <p><i class="li_truck"></i>Get the seamless and stress-free move of your belongings in a timely manner with being cost friendly with Finch Movers.</p>
                        </div></div>

                        <div class="slider-caption" id="caption-4"><div class="wrp">
                            <p><i class="li_like"></i>We pride ourselves on prompt and exceptional service and cost effective pricing.</p>
                        </div></div>

                        <div class="slider-caption" id="caption-5"><div class="wrp">
                            <p><i class="li_clock"></i>Our fast and careful movers are dedicated to provide professional moving services.</p>
                        </div></div>

                         <div class="flt">
                            <div class="header-wrapper">

                            </div>
                         </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="spanning" id="main-block">

            <div class="promo clearfix section-cars">
                <div class="wrap">
                    <div class="promo-wrapper clearfix">
                        <a id="car-1" href="<?echo $url_trucks[1]; ?>" class="truck-hover promo-column car-item">
                            <div class="car-img">
                                <img src="<? echo get_template_directory_uri(); ?>/images/1.png" alt="">
                            </div>
                            <h5><span>Free Estimate</span></h5>
                            <p>Accurate visual free moving estimate. Per your request our certified move consultant will meet with you in person to conduct free moving quote at no cost or obligation.</p>
                        </a>
                        <a id="car-2" href="<?echo $url_trucks[2]; ?>" class="truck-hover promo-column car-item">
                            <div class="car-img">
                                <img src="<? echo get_template_directory_uri(); ?>/images/2.png" alt="">
                            </div>
                            <h5><span>Full Packing</span></h5>
                            <p>High quality packing services California. Packing can be a very stressful task that requires a significant commitment of time and energy. </p>
                        </a>
                        <a id="car-3" href="<?echo $url_trucks[3]; ?>" class="truck-hover promo-column car-item">
                            <div class="car-img">
                                <img src="<? echo get_template_directory_uri(); ?>/images/3.png" alt="">
                            </div>
                            <h5><span>Small Moves</span></h5>
                            <p>Interactively procrastinate high-payoff content without backward-compatible data. </p>
                        </a>
                        <a id="car-4" href="<?echo $url_trucks[4]; ?>" class="truck-hover promo-column car-item">
                            <div class="car-img">
                                <img src="<? echo get_template_directory_uri(); ?>/images/4.png" alt="">
                            </div>
                            <h5><span>Local Movers</span></h5>
                            <p>Proudly servicing entire California. Local Movers California provide professional and efficient moving solutions.</p>
                        </a>

                        <a id="car-5" href="<?echo $url_trucks[5]; ?>" class="truck-hover promo-column car-item car-last">
                            <div class="car-img">
                                <img src="<? echo get_template_directory_uri(); ?>/images/5.png" alt="">
                            </div>
                            <h5><span>Long Distance Movers</span></h5>
                            <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. </p>
                        </a>
                    </div>
                </div>
            </div>

    <? if($pagename == "california"){ ?>
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
                    <div class="forms-form clearfix">
                      <div class="anal widget-1 widget-first container sidebar-widget">          <div class="textwidget"><div class="form-estimate">
                        <p>We'll contact you as soon as possible</p>
                        <div class="wpcf7" id="wpcf7-f6390-o1"><form action="/california/moving_companies_rates/san_diego_movers_prices/#wpcf7-f6390-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                        <div style="display: none;">
                        <input type="hidden" name="_wpcf7" value="6390" />
                        <input type="hidden" name="_wpcf7_version" value="3.7.2" />
                        <input type="hidden" name="_wpcf7_locale" value="" />
                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f6390-o1" />
                        <input type="hidden" name="_wpnonce" value="82ef54ae81" />
                        </div>
                        <ul>
                        <li class="side-by-side"><span class="wpcf7-form-control-wrap first-name"><input type="text" name="first-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="First name" /></span><span class="wpcf7-form-control-wrap last-name"><input type="text" name="last-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Last name" /></span></li>
                        <li><span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email address" /></span></li>
                        <li><span class="wpcf7-form-control-wrap PhoneNumber"><input type="text" name="PhoneNumber" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Phone Number" /></span></li>
                        <li class="stretch-submit"><input type="submit" value="Get a Free Quote!" class="wpcf7-form-control wpcf7-submit" /></li>
                        </ul>
                        <div class="wpcf7-response-output wpcf7-display-none"></div></form></div>
                        <div class="divider shortcode-divider thick"></div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <? } ?>



