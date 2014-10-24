<?

    $tnames = array(
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

     if(!empty($town)){
         $_SESSION["town"] = $town;
         $url_trucks[1] .= $rurl.$tnames[1]."/".$town."_moving_quote";
         $url_trucks[2] .= $rurl.$tnames[2]."/".$town."_packers";
         $url_trucks[3] .= $rurl.$tnames[3]."/".$town;
         $url_trucks[4] .= $rurl.$tnames[4]."/".$town;
         $url_trucks[5] .= $rurl.$tnames[5]."/".$town;
     }


?><!DOCTYPE HTML>
<html>
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

    <link rel="stylesheet" type="text/css" href="<? echo get_template_directory_uri(); ?>/css/component.css" />
    <link rel="stylesheet" type="text/css" href="<? echo get_template_directory_uri(); ?>/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="<? echo get_template_directory_uri(); ?>/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<? echo get_template_directory_uri(); ?>/css/fullwidth-slider.css" />
    <link rel="stylesheet" type="text/css" href="<? echo get_template_directory_uri(); ?>/css/svg-icons.css" />
    <link rel="stylesheet" type="text/css" href="<? echo get_template_directory_uri(); ?>/css/tooltipster.css" />

    <link rel="stylesheet" type="text/css" href="<? echo get_template_directory_uri(); ?>/fonts/bebasneue/bebasneue.css" />
    <link rel="stylesheet" type="text/css" href="<? echo get_template_directory_uri(); ?>/fonts/alegreya/alegreya.css" />
    <link rel="stylesheet" type="text/css" href="<? echo get_template_directory_uri(); ?>/fonts/lineicons/style.css" />

    <!--<link rel="stylesheet/less" type="text/css" href="<? echo get_template_directory_uri(); ?>/css/style.less" />-->
     <link rel="stylesheet" type="text/css" href="<? echo get_template_directory_uri(); ?>/css/style.css" />

    <script src="<? echo get_template_directory_uri(); ?>/js/vendor/jquery-2.1.1.min.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/vendor/jquery.easing.1.3.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/vendor/waypoints.min.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/vendor/jquery.transit.min.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/vendor/jquery.tooltipster.min.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/library.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/script.js"></script>

    <?php // roots_head();
   // wp_head(); ?>

    <script type='text/javascript' src='/wp-includes/js/admin-bar.min.js?ver=3.8.4'></script>
    <script type='text/javascript' src='/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js?ver=3.50.0-2014.02.05'></script>
    <script type='text/javascript'>
    /* <![CDATA[ */
    var _wpcf7 = {"loaderUrl":"http:\/\/finchmovingservices.com\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","sending":"Sending ..."};
    /* ]]> */
    </script>
    <script type='text/javascript' src='/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=3.7.2'></script>

    <!--[if lt IE 9]>
        <script src="<? echo get_template_directory_uri(); ?>/js/html5.js"></script>
        <script src="<? echo get_template_directory_uri(); ?>/js/respond.js"></script>
    <![endif]-->

    <script src="<? echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/js/vendor/snap.svg-min.js"></script>
   <!-- <script src="<? echo get_template_directory_uri(); ?>/js/vendor/less-1.7.5.min.js"></script>-->

    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script src="<? echo get_template_directory_uri(); ?>/js/classie.js"></script>
    <!-- <script src="<? echo get_template_directory_uri(); ?>/js/menu.js"></script>  -->

    <script>
    $(function() {
        $('#footmenu').html('<li><a title="Go back to <? echo get_the_title($post->post_parent);?> page." class="btn-back tip" href="<? echo get_permalink($post->post_parent); ?>"><i class="fa fa-angle-left"></i></a></li>'+$('#footmenu').html());
        $('.tip').tooltipster();
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
    ?>

    <? if(!empty($town)) { makeLinks($town); } ?>

</head>
<body class="no-js">

<div id="st-container" class="st-container container">

<div class="st-pusher content">

    <div class="top-nav"> <?php echo $submenu_text; ?> </div>

    <script>
    $(function() {
         $('.st-menu .current-menu-item').append('<? echo getSubMenus($wpdb,$parent_id); ?>');
    });
    </script>

    <div id="st-trigger-effects">
        <button class="btn-nav" data-effect="st-effect-6">
            <div class="svg-wrap">
                <span class="si-icon si-icon-hamburger-cross" data-icon-name="hamburgerCross"></span>
            </div>
        </button>
    </div>

    <nav class="st-menu st-effect-6" id="menu-6">
        <h2 class="icon icon-stack"></h2>
        <?
        wp_nav_menu(array( 'theme_location' => 'primary_navigation', 'walker' => new roots_nav_walker(),
                         'menu_id' => 'topmenu', 'menu_class' => 'top-menu-list', 'fallback_cb' => 'prime_menu_fallback' ));
        ?>
    </nav>

    <div class="st-content main">

        <div class="st-content-inner">

        <header>
              <div id="slider-wrapper">
                 <div id="nice-slider" class="nice-slider nice-slider-fullwidth">

                      <ul class="itemwrap">
                        <li class="current"><img src="<? echo get_template_directory_uri(); ?>/images/slides/3.jpg" alt="img08"/></li>
                        <li><img src="<? echo get_template_directory_uri(); ?>/images/house.jpg" alt="img08"/></li>
                        <li><img src="<? echo get_template_directory_uri(); ?>/images/slides/4.jpg" alt="img08"/></li>
                        <li><img src="<? echo get_template_directory_uri(); ?>/images/beach1.jpg" alt="img07"/></li>
                        <li><img src="<? echo get_template_directory_uri(); ?>/images/slides/1.jpg" alt="img08"/></li>
                      </ul>

                      <div class="top-wrap">

                        <nav>
                            <a class="prev" href="#"><i class="fa fa-angle-left"></i></a>
                            <a class="next" href="#"><i class="fa fa-angle-right"></i></a>
                        </nav>

                        <div class="flt">
                            <img src="<? echo get_template_directory_uri(); ?>/images/bird.png" class="header-img">
                            <div class="header-wrapper">
                                <h1>Finch Moving <span>Company</span></h1>
                                <p>One out of every five Californians require moving services each year.
                                Now that you have found yourself among this group, you can make your move a
                                positive and exciting experience with Finch Movers.</p>
                                <div class="buttons-wrapper">
                                    <a href="#estimate" id="btn-es-go" class="button tip" title="Order us right now!" >Free Estimate <i class="ico li_paperplane"></i></a>
                                </div>
                            </div>
                            <!-- /.header-wrapper -->
                        </div>
                    </div>

                </div>

              </div>
        </header>

        <div class="spanning">

            <div class="promo clearfix section-cars">
                <div class="wrap">
                    <div class="promo-wrapper clearfix">
                        <a id="car-1" href="<?echo $url_trucks[1]; ?>" class="promo-column car-item">
                            <img src="<? echo get_template_directory_uri(); ?>/images/1.png" alt="">
                            <h5>Free Estimate</h5>
                            <p>Accurate visual free moving estimate. Per your request our certified move consultant will meet with you in person to conduct free moving quote at no cost or obligation.</p>
                        </a>
                        <a id="car-2" href="<?echo $url_trucks[2]; ?>" class="promo-column car-item">
                            <img src="<? echo get_template_directory_uri(); ?>/images/2.png"  alt="">
                            <h5>Full Packing</h5>
                            <p>High quality packing services California. Packing can be a very stressful task that requires a significant commitment of time and energy. </p>
                        </a>
                        <a id="car-3" href="<?echo $url_trucks[3]; ?>" class="promo-column car-item">
                            <img src="<? echo get_template_directory_uri(); ?>/images/3.png"  alt="">
                            <h5>Small Moves</h5>
                            <p>Interactively procrastinate high-payoff content without backward-compatible data. </p>
                        </a>
                        <a id="car-4" href="<?echo $url_trucks[4]; ?>" class="promo-column car-item">
                            <img src="<? echo get_template_directory_uri(); ?>/images/4.png"  alt="">
                            <h5>Local Movers</h5>
                            <p>Proudly servicing entire California. Local Movers California provide professional and efficient moving solutions.</p>
                        </a>

                        <a id="car-5" href="<?echo $url_trucks[5]; ?>" class="promo-column car-item" id="long">
                            <img src="<? echo get_template_directory_uri(); ?>/images/5.png" width="273" style="width:273px" alt="">
                            <h5>Long Distance Movers</h5>
                            <p>Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. </p>
                        </a>
                    </div>
                </div>
            </div>

        <? if($pagename == "california"){ ?>
        <div class="box-light anchor" id="estimate">
                <div class="wrap box-estimate">
                    <div class="box-light-content">
                        <h2>Free Estimate</h2>
                        <p>Get the seamless and stress-free move of your belongings. We'll contact you as soon as possible.</p>
                        <div class="phone">
                            <i class="li_phone"></i><b>855 969 6683</b>
                            <span>free<br>call</span>
                        </div>
                   <!--     <div class="box-light-button clearfix">
                            <a href="#" class="button button-download">
                                <span class="button-download-title">Download for</span>
                                <span class="button-download-subtitle">Apple iOS</span>
                            </a>
                            <a href="#" class="button button-download android">
                                <span class="button-download-title">Download for</span>
                                <span class="button-download-subtitle">Android</span>
                            </a>
                        </div> -->
                    </div>
                    <div class="box-form waypoint">
                        <div class="forms-form clearfix">
                            <form action="">
                                <input type="email" placeholder="First Name" class="input-text">
                                <input type="email" placeholder="Last Name" class="input-text">
                                <input type="email" placeholder="E-Mail Address" class="input-text">
                                <input type="email" placeholder="Phone Number" class="input-text">
                                <button class="button button-submit" style="width: 100%"><i class='ico li_paperplane'></i> Get a Free Quote!</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <? } ?>


