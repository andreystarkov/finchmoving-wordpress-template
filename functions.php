<?php

    if (!function_exists('_log')) {
        function _log($message)
        {
            if (is_array($message) || is_object($message)) {
                error_log(print_r($message, true));
            }
            else {
                error_log($message);
            }
        }
    }

    function sliderImages($town, $res, $rootPath, $rootUri){
        $dir .= $rootPath."/images/show/".$town."/".$res;
        $dir_our .= $rootPath."/images/show/normal/".$res;

        if ($handle_our = opendir($dir_our)) {
            $i = 0;
            while (false !== ($entry_our = readdir($handle_our))) {

                if ($entry_our != "." && $entry_our != "..") {
                    $i++;
                    if( $i == 1){ $cur = "class='current' "; } else { $cur = ""; }
                    $out_our[$i] .= "<li ".$cur."><img src='".$rootUri."/images/show/normal/".$res."/".$entry_our."' /></li>";
                }
            }
            closedir($handle_our);
        }

        if ($handle = opendir($dir)) {
            $i = 0;
            while (false !== ($entry = readdir($handle))) {
                if ($entry != "." && $entry != "..") {
                    if($i == 0) { $cur = "current"; } else { $cur = ""; } $i++;
                    $out_area[$i] .= "<li class='".$cur."'><img src='".$rootUri."/images/show/".$town."/".$res."/".$entry."' /></li>";
                }
            }
            closedir($handle);
        }

        $summary = count($out_our)+count($out_area);

        for($i = 0; $i <= $summary; $i++){
            if(count($out_area) >= $i){
                $return .= $out_area[$i];
            }
            if(count($out_our) >= $i){
                $return .= $out_our[$i];
            }
        }
        return $return;
    }

    function getSubMenus($wpdb,$parent_id){
         $child_pages = $wpdb->get_results("SELECT * FROM $wpdb->posts WHERE post_parent = ".$parent_id." AND post_type = 'page' ORDER BY menu_order", 'OBJECT');
        if ( $child_pages ) {
            foreach ( $child_pages as $pageChild ) {
                setup_postdata( $pageChild ); ?><a class="submenu-item" href="<?php echo  get_permalink($pageChild->ID); ?>" rel="bookmark" title="<?php echo $pageChild->post_title; ?>"><?php echo $pageChild->post_title; ?></a><?php
            }
        }
    }

    function isUrlHas($curl, $string){
        if(strpos($curl, $string) != FALSE) {  return true; } else { return false; }
    }

    function makeLinks($town){
    ?>
        <script>

        $(function () {
            $(".top-menu-list a[title=services]")
            .attr("href", "http://finchmovingservices.com/california/<? echo $town; ?>_moving_services/")
            .append('<i class="li_truck"></i>');

            $(".top-menu-list a[title=tips]")
            .attr("href", "http://finchmovingservices.com/california/professional_movers_<? echo $town; ?>/")
            .append('<i class="li_bulb"></i>');

            $(".top-menu-list a[title=about]")
            .attr("href", "http://finchmovingservices.com/california/licensed_and_insured_movers_moving_company_<? echo $town; ?>")
            .append('<i class="li_study"></i>');

            $(".top-menu-list a[title=home]")
            .attr("href", "http://finchmovingservices.com/california/<? echo $town; ?>_movers_moving_companies/")
            .append('<i class="li_shop"></i>');

            $(".top-menu-list a[title=contact]")
            .attr("href", "http://finchmovingservices.com/california/online_moving_quote_<? echo $town; ?>/")
            .append('<i class="li_paperplane"></i>');

            $(".top-menu-list a[title=pricing]").
            attr("href", "http://finchmovingservices.com/california/moving_companies_rates/<? echo $town; ?>_movers_prices/")
            .append('<i class="li_banknote"></i>');
          // $(".logo a").attr("href", "http://finchmovingservices.com/california/<? echo $town; ?>_movers_moving_companies/");
        });
        </script>
      <?
    }

    function makeMenuToVar($wpdb, $post, $parent_id){
        if ( ($parent_id != 7170) && ($parent_id != -1) ) {
        $child_pages = $wpdb->get_results("SELECT * FROM $wpdb->posts WHERE post_parent = ".$parent_id." AND post_type = 'page' ORDER BY menu_order", 'OBJECT');

        if ( !empty($child_pages) and (count($child_pages) < 6) ) {
            foreach ( $child_pages as $pageChild ) {
                setup_postdata( $pageChild );
                $return .= "<a href='".get_permalink($pageChild->ID)."'";

                if(get_the_title($post->ID) == $pageChild->post_title)
                $return .= " class='submenu-current' ";
                $return .= "rel='bookmark' title='".$pageChild->post_title."'>".$pageChild->post_title."</a>";
            }
        } else return -1;
        } else return -1;

        return $return;
    }

    function makeMenu($wpdb, $post, $parent_id){
        if ( ($parent_id != 7170) && ($parent_id != -1) ) {
        $child_pages = $wpdb->get_results("SELECT * FROM $wpdb->posts WHERE post_parent = ".$parent_id." AND post_type = 'page' ORDER BY menu_order", 'OBJECT');

        if ( !empty($child_pages) and (count($child_pages) < 6) ) {
            foreach ( $child_pages as $pageChild ) {
                setup_postdata( $pageChild ); ?>
                  <?php // echo get_the_post_thumbnail($pageChild->ID, 'thumbnail'); ?>
                     <a href="<?php echo  get_permalink($pageChild->ID); ?>"
                        <?
                             if(get_the_title($post->ID) == $pageChild->post_title){
                              ?> class="submenu-current" <?
                             }
                        ?>
                        rel="bookmark" title="<?php echo $pageChild->post_title; ?>">
                        <?php echo $pageChild->post_title; ?>
                     </a>
            <?
            }
        } else return -1;
        } else return -1;
    }

    function getTown($curl){
            if(strpos($curl, "san-diego") != FALSE) $town = "san_diego";
            if(strpos($curl, "san_diego") != FALSE) $town = "san_diego";
            if(strpos($curl, "la_jolla") != FALSE) $town = "la_jolla";
            if(strpos($curl, "lakeside") != FALSE) $town = "lakeside";
            if(strpos($curl, "el_cajon") != FALSE) $town = "el_cajon";
            if(strpos($curl, "coronado") != FALSE) $town = "coronado";
            if(strpos($curl, "santee") != FALSE) $town = "santee";
            if(strpos($curl, "poway") != FALSE) $town = "poway";
            if(strpos($curl, "mission_bay") != FALSE) $town = "mission_bay";
            if(strpos($curl, "la_mesa") != FALSE) $town = "la_mesa";
            return $town;
    }

    function makeMenuParent($title){
    ?>
        <script>
        $(function() {
            $(".top-menu-list a[title=<? echo $title; ?>]").parent().addClass('current-menu-item');
        });
        </script>
      <?
    }

    function getTrueParentId($curl){
        if(isUrlHas($curl, "professional_movers")) { $parent_id = 6964; makeMenuParent("tips"); }
        if(isUrlHas($curl, "moving_services")) { $parent_id = -1; makeMenuParent("services");  }
        if(isUrlHas($curl, "online_moving_quote")) { $parent_id = 6327; makeMenuParent("contact"); }
        if(isUrlHas($curl, "movers_prices")) { $parent_id = -1; makeMenuParent("pricing"); }
        if(isUrlHas($curl, "online_moving_quote_")) { $parent_id = -1; makeMenuParent("contact"); }
        if(isUrlHas($curl, "movers_moving_companies")) { $parent_id = -1; makeMenuParent("home"); }
        if(strpos($curl, "licensed_and_insured_movers_moving_company") != FALSE) { $parent_id = 6782; makeMenuParent("about"); }
        return $parent_id;
    }

    load_theme_textdomain('prime', get_template_directory() . '/lang');

    if (!isset($content_width))
        $content_width = 584;

    //Set some global vars for PRIME's usage
    define('PRIME_THEME_ROOT_URI', trailingslashit(get_template_directory_uri()));
    define('PRIME_THEME_NAME', 'nexus');
    define('PRIME_THEME_DISPLAY_NAME', 'Nexus');
    define('PRIME_THEME_VERSION', '0.0.0.1');
    define('THEME_DIR', get_template_directory());
    define('PRIME_DEVELOPMENT_MODE', true);
    define('PRIME_OPTIONS_KEY', 'prime_options');
    define('PRIME_PREVIEW', false);

    if (!defined('__DIR__')) define('__DIR__', dirname(__FILE__));

    //Import frontend-strings that have been centrally defined
    require_once get_template_directory() . '/frontend-strings.php';
    //import OptionTree
    require_once get_template_directory() . '/prime-option/index.php';
    //Import Roots
    require_once get_template_directory() . '/inc/index.php';
    //import Prime
    require_once get_template_directory() . '/prime/index.php';


    ?>
