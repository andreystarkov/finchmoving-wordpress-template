  <?php
  /*
    Template Name: Content Page Without Sidebar
  */
  ?>

  <?php get_header(); ?>


  <div class="box-light clearfix anchor box-content" id="info">
      <div class="wrap">
          <div class="box-full clearfix">
          <?php roots_loop_before(); ?>
          <?php get_template_part('loop', 'page'); ?>
          <?php roots_loop_after(); ?>

         </div>
        </div>
  </div>
  <style>
  #subpages ul li { display: inline-block; }
  #subpages .box-light-content h2 { display: inline-block; float: none; }
  #subpages ul { display: block; overflow: hidden; padding: 12px;}
  </style>
  <?
  $child_pages = $wpdb->get_results("SELECT * FROM $wpdb->posts WHERE post_parent = ".$post->ID." AND post_type = 'page' ORDER BY menu_order", 'OBJECT');
  if ( $child_pages ) { ?>
      <div id="subpages" class="slide-1 clearfix img-blur-1 box-img waypoint">
          <div class="wrap">
              <div class="box-light-content clearfix">
                  <h2>see also:</h2>
                  <a title="Go back to '<? echo get_the_title($post->post_parent); ?>' page." class="btn-back tip" href="<? echo get_permalink($post->post_parent); ?>">
                  <i class="fa fa-angle-left"></i></a>
                  <? foreach ( $child_pages as $pageChild ) {
                      setup_postdata( $pageChild ); ?>
                           <a href="<?php echo  get_permalink($pageChild->ID); ?>" rel="bookmark">
                              <?php echo $pageChild->post_title; ?>
                           </a>
                   <?
                  }
                    ?>
              </div>
          </div>
      </div>
  <? } else { ?>
        <div id="subpages" class="slide-1 clearfix img-blur-1 box-img waypoint">
          <div class="wrap">
              <div class="box-light-content clearfix">
                  <h2><? echo get_the_title(); ?> </h2>
                      <?
                    wp_nav_menu(array( 'theme_location' => 'primary_navigation', 'walker' => new roots_nav_walker(),
                                     'menu_id' => 'footmenu', 'menu_class' => 'top-menu-list', 'fallback_cb' => 'prime_menu_fallback' ));
                    ?>

              </div>
          </div>
      </div>
  <? } ?>

  <?php get_footer(); ?>


