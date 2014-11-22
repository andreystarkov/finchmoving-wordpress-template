
       <?

        if($pagename != "california"){ ?>
            <div class="box-light anchor" id="estimate">
                <div class="container box-estimate">
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

<script src="<? echo get_template_directory_uri(); ?>/js/sidebarEffects.js"></script>
<script src="<? echo get_template_directory_uri(); ?>/js/vendor/wow.min.js"></script>
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