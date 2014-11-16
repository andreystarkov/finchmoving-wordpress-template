<?php
/*
    Template Name: Pricing
*/
?>
    <?php get_header(); ?>

    <div class="box-light clearfix anchor" id="pricing">
        <div class="wrap">
            <div class="box-full box-col clearfix contacts ">
                <h2>Best pricing</h2>
                <div class="col-3 box-price ani" id="price-1">
                    <img src="<? echo get_template_directory_uri(); ?>/images/price-1.png">
                    <h5><span>2</span> MOVERS & TRUCK</h5>
                    <p>$75 PER HOUR</p>
                </div>
                <div class="col-3 box-price ani" id="price-2">
                    <img src="<? echo get_template_directory_uri(); ?>/images/price-2.png">
                    <h5><span>3</span>  MOVERS & TRUCK</h5>
                    <p>$100 PER HOUR</p>
                </div>
                <div class="col-3 box-price ani" id="price-3">
                    <img src="<? echo get_template_directory_uri(); ?>/images/price-3.png">
                    <h5><span>4</span> MOVERS & TRUCK</h5>
                    <p>$125 PER HOUR</p>
                </div>
            </div>

        </div>
    </div>

    <div class="comments clearfix img-blur-1 box-img" id="pricing-bonus">
        <div class="wrap">

            <div class="tab ani">
                <div class="box visible">
                    <h4><i class="li_star"></i> 5% Discount</h4>
                    <p>Military members, seniors, students.</p>
                </div>
                <div class="box">
                    <h4><i class="fa fa-gift"></i> No Extra Charge For</h4>
                    <p>Last minute, Holidays, Weekends, Assembly,
                    Reassembly, Stairs, Elevators Mileage, Overtime.</p>
                </div>
                <div class="box">
                    <h4><i class="fa fa-home"></i> Buy or Sell your home with Finch Reality</h4>
                    <p>And we'll move you<br><b>FOR FREE</b>.</p>
                </div>
                <div class="box">
                    <h4><i class="li_key"></i> Licensed & Insured</h4>
                    <p>CALT - 0190910, CA #425182</p>
                </div>
                <ul class="tabs">
                    <li class="active"></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <a href="#" class="tab-prev ani"><i class="fa fa-angle-left"></i></a>
                <a href="#" class="tab-next ani"><i class="fa fa-angle-right"></i></a>
            </div>
        </div>
    </div>

 <div class="box-light clearfix anchor box-content" id="info">
      <div class="wrap">
          <div class="box-full clearfix">
          <?php roots_loop_before(); ?>
          <?php get_template_part('loop', 'page'); ?>
          <?php roots_loop_after(); ?>
         </div>
        </div>
  </div>
          <div id="subpages" class="slide-1 clearfix img-truck-2 box-img">
          <div class="wrap"><div class="box-light-content clearfix waypoint">
            <?
            $curl = $_SERVER['REQUEST_URI'];
            $parent_id = $post->ID;
            $parent_id = getTrueParentId($curl);

            if ( !$pagename && $id > 0 ) {
                $post = $wp_query->get_queried_object();
                $pagename = $post->post_name;
            }

            if( $parent_id != -1 ) {
                ?>            <h2><? echo get_the_title(); ?> </h2><?
                if( (makeMenu($wpdb, $post, $parent_id)) == -1) makeMenu($wpdb, $post, $post->post_parent);
            } else {/*
            ?>

                <h2><? echo get_the_title(); ?> </h2>
                            <?
                          wp_nav_menu(array( 'theme_location' => 'primary_navigation', 'walker' => new roots_nav_walker(),
                                           'menu_id' => 'footmenu', 'menu_class' => 'top-menu-list', 'fallback_cb' => 'prime_menu_fallback' ));
                          ?>

               <?  */ }?>
              </div></div>
              </div>
    <?php get_footer(); ?>


