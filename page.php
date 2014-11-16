<?php get_header(); ?>

  <div class="box-light clearfix box-content" id="info">
      <div class="wrap">
          <div class="box-full clearfix">
          <?php roots_loop_before();
          get_template_part('loop', 'page');
          roots_loop_after(); ?>
         </div>
        </div>
  </div>


          <div id="subpages" class="slide-1 clearfix img-truck-4 box-img">

          <div class="wrap"><div class="box-light-content clearfix">
            <?
            $curl = $_SERVER['REQUEST_URI'];
            $parent_id = $post->ID;
            $parent_id = getTrueParentId($curl);

            if ( !$pagename && $id > 0 ) {
                $post = $wp_query->get_queried_object();
                $pagename = $post->post_name;
            }

            if( $parent_id != -1 ) {

                if( (makeMenu($wpdb, $post, $parent_id)) == -1) makeMenu($wpdb, $post, $post->post_parent);
            } else {/*)
            ?>


                            <?
                          wp_nav_menu(array( 'theme_location' => 'primary_navigation', 'walker' => new roots_nav_walker(),
                                           'menu_id' => 'footmenu', 'menu_class' => 'top-menu-list', 'fallback_cb' => 'prime_menu_fallback' ));
                          ?>

               <?*/ }?>
              </div></div>
              </div>

  <?php get_footer(); ?>


