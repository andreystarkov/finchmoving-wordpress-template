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

          <div id="subpages" class="slide-1 clearfix img-blur-1 box-img">
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
            } else {
            ?>

                <h2><? echo get_the_title(); ?> </h2>
                            <?
                          wp_nav_menu(array( 'theme_location' => 'primary_navigation', 'walker' => new roots_nav_walker(),
                                           'menu_id' => 'footmenu', 'menu_class' => 'top-menu-list', 'fallback_cb' => 'prime_menu_fallback' ));
                          ?>

               <? } ?>
              </div></div>
              </div>

  <?php get_footer(); ?>


