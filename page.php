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
    <div class="wrap">
      <div class="box-light-content clearfix">

    <?
    $curl = $_SERVER['REQUEST_URI'];
    $town = getTown($curl);
     if(strpos($curl, "_moving_services")){
      echo "<ul class='fixed-menu' style='opacity: 1;'>".
      "<li><a href='http://finchmovingservices.com/california/".$town."_moving_and_packing_services/'  data-wow-delay='0.2s' title='Moving and Packing'>Moving and Packing</a></li>".
      "<li><a href='http://finchmovingservices.com/california/".$town."_office_movers_relocation/' data-wow-delay='0.2s' title='Office Relocation'>Office Relocation</a></li>".
      "</ul>";
     }
     if(strpos($curl, "_and_packing_services")){
      echo "<ul class='fixed-menu'style='opacity: 1;'>".
      "<li><a href='http://finchmovingservices.com/california/".$town."_moving_and_packing_services/' class='submenu-current' data-wow-delay='0.2s' title='Moving and Packing'>Moving and Packing</a></li>".
      "<li><a href='http://finchmovingservices.com/california/".$town."_office_movers_relocation/data-wow-delay='0.2s' title='Office Relocation'>Office Relocation</a></li>".
      "</ul>";
     }
     if(strpos($curl, "_office_movers_relocation/")){
      echo "<ul class='fixed-menu' style='opacity: 1;'>".
      "<li><a href='http://finchmovingservices.com/california/".$town."_moving_and_packing_services/' data-wow-delay='0.2s' title='Moving and Packing'>Moving and Packing</a></li>".
      "<li><a href='http://finchmovingservices.com/california/".$town."_office_movers_relocation/' class='submenu-current' data-wow-delay='0.2s' title='Office Relocation'>Office Relocation</a></li>".
      "</ul>";
     }

        $curl = $_SERVER['REQUEST_URI'];
        $parent_id = $post->ID;
        $parent_id = getTrueParentId($curl);

        if ( !$pagename && $id > 0 ) {
            $post = $wp_query->get_queried_object();
            $pagename = $post->post_name;
        }

        if( $parent_id != -1 ) {

            if( (makeMenu($wpdb, $post, $parent_id)) == -1) makeMenu($wpdb, $post, $post->post_parent);
        }
      ?>
      </div>
    </div>
  </div>
<?php get_footer(); ?>


