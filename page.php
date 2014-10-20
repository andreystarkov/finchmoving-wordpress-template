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

            <div id="subpages" class="slide-1 clearfix img-blur-1 box-img waypoint">
                <div class="wrap">
                    <div class="box-light-content clearfix">
                        <h2>see also:</h2>
                            <?
                            $child_pages = $wpdb->get_results("SELECT * FROM $wpdb->posts WHERE post_parent = ".$post->ID." AND post_type = 'page' ORDER BY menu_order", 'OBJECT'); 
                           if ( $child_pages ) {

                                foreach ( $child_pages as $pageChild ) {
                                    setup_postdata( $pageChild ); ?>
                                      <?php // echo get_the_post_thumbnail($pageChild->ID, 'thumbnail'); ?>
                                         <a href="<?php echo  get_permalink($pageChild->ID); ?>" rel="bookmark" title="<?php echo $pageChild->post_title; ?>">
                                            <?php echo $pageChild->post_title; ?>
                                         </a>
                            <?php 
                                } 
                            }?>
                    </div>
                </div>
            </div>

    <?php get_footer(); ?>


