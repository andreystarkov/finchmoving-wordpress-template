
        <? 
        function getSubMenus($wpdb,$post){
             $child_pages = $wpdb->get_results("SELECT * FROM $wpdb->posts WHERE post_parent = ".$post->ID." AND post_type = 'page' ORDER BY menu_order", 'OBJECT'); 
            if ( $child_pages ) {
                foreach ( $child_pages as $pageChild ) {
                    setup_postdata( $pageChild ); ?><a class="submenu-item" href="<?php echo  get_permalink($pageChild->ID); ?>" rel="bookmark" title="<?php echo $pageChild->post_title; ?>"><?php echo $pageChild->post_title; ?></a><?php 
                }
            }
        }

        $work_dir = "/wp-content/themes/nexus";

        if($pagename != "california"){ ?>       
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

                          <?php get_sidebar(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <? } ?>

            <? if($pagename == "pricing"){ ?>
            <div id="subpages" class="slide-1 clearfix img-truck-2 box-img waypoint" style="box-shadow: inset 0px -6px 18px rgba(0,0,0,0.5)">
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
            <? } ?>

            <footer>
                    <div class="box-footer wrap contacts">

                        <div class="floats">
                        <a href="www.facebook.com/FinchMovingCompany" class="contact ico-fb"><i class="fa fa-facebook-square"></i></a>
                        <a href="linkedin.com/pub/finch-moving/3a/114/125" class="contact ico-ld"><i class="fa fa-linkedin-square"></i></a>
                        <a href="twitter.com/FinchMoving" class="contact ico-tw"><i class="fa fa-twitter-square"></i></a>


                        <div id="footer-phone" class="phone">
                            <i class="li_phone"></i><b>855 969 6683</b>
                            <span>free<br>call</span>
                        </div>
                        </div>

                    </div>
            </footer>
            </div>

        </div> <!-- spanning -->
    </div>

</div>
</div>

    <script src="<? echo $work_dir; ?>/js/vendor/jquery-2.1.1.min.js"></script>
    <script src="<? echo $work_dir; ?>/js/vendor/jquery.easing.1.3.js"></script>
    <script src="<? echo $work_dir; ?>/js/vendor/waypoints.min.js"></script>
    <script src="<? echo $work_dir; ?>/js/vendor/jquery.transit.min.js"></script>
    <script src="<? echo $work_dir; ?>/js/vendor/jquery.tooltipster.min.js"></script>

    <script src="<? echo $work_dir; ?>/js/library.js"></script>
    <script src="<? echo $work_dir; ?>/js/retina.js"></script>
    <script src="<? echo $work_dir; ?>/js/fullwidth-slider.js"></script>
    <script src="<? echo $work_dir; ?>/js/script.js"></script>
    <script src="<? echo $work_dir; ?>/js/classie.js"></script>
    <script src="<? echo $work_dir; ?>/js/sidebarEffects.js"></script>

    <script src="<? echo $work_dir; ?>/js/svgicons-config.js"></script>
    <script src="<? echo $work_dir; ?>/js/svgicons.js"></script>

    <script type='text/javascript' src='/wp-includes/js/admin-bar.min.js?ver=3.8.4'></script>
    <script type='text/javascript' src='/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js?ver=3.50.0-2014.02.05'></script>
    <script type='text/javascript'>
    /* <![CDATA[ */
    var _wpcf7 = {"loaderUrl":"http:\/\/finchmovingservices.com\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","sending":"Sending ..."};
    /* ]]> */
    </script>
    <script type='text/javascript' src='/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=3.7.2'></script>
    <script type="text/javascript">
            (function() {
                var request, b = document.body, c = 'className', cs = 'customize-support', rcs = new RegExp('(^|\\s+)(no-)?'+cs+'(\\s+|$)');

                request = true;

                b[c] = b[c].replace( rcs, ' ' );
                b[c] += ( window.postMessage && request ? ' ' : ' no-' ) + cs;
            }());
    </script>

    <script>
    $(function() {

        $('.current-menu-item').append('<? getSubMenus($wpdb,$post); ?>');
        [].slice.call( document.querySelectorAll( '.si-icon' ) ).forEach( function( el ) {
            var svgicon = new svgIcon( el, svgIconConfig );
        } );
    });
    </script>

</body>
</html>