<?php get_header(); ?>
<?php /* roots_content_before();
global $prime_frontend;
?>

<?php roots_main_before(); ?>


<?

    $curl = $_SERVER['REQUEST_URI'];

    function makeSubMenu($town){

        $curl = $_SERVER['REQUEST_URI'];
        if(strpos($curl, "licensed_and_insured_movers_moving_company") != FALSE){
            $this .= "<a href='http://finchmovingservices.com/california/licensed_movers_".$town."/' id='link-licenses' class='btn-submenu'><i class='fa fa-sun-o'></i> Finch Moving License</a>".
            "<a href='http://finchmovingservices.com/california/insured_movers_".$town."/' id='link-insurance' class='btn-submenu'><i class='fa fa-shield'></i>Finch Moving Insurance</a>".
            "<a href='http://finchmovingservices.com/california/".$town."_movers_moving_companies_reviews/' id='link-reviews' class='btn-submenu'><i class='fa fa-thumbs-o-up'></i>Finch Moving Reviews</a>";
        }

        if(strpos($curl, "moving_services") != FALSE){
            $this .= "<a href='http://finchmovingservices.com/california/".$town."_moving_and_packing_services/' id='link-packing' class='btn-submenu'><i class='fa fa-gift'></i> Moving and Packing </a>".
            "<a href='http://finchmovingservices.com/california/".$town."_office_movers_relocation/' id='link-office' class='btn-submenu'><i class='fa fa-suitcase'></i>Office Relocation</a>";
        }

        if(strpos($curl, "professional_movers") != FALSE){
            $this .= "<a href='http://finchmovingservices.com/california/moving_checklist_".$town."/' id='link-checklist' class='btn-submenu'><i class='fa fa-calendar'></i>Moving Checklist</a>".
            "<a href='http://finchmovingservices.com/california/packing_tips_".$town."/' id='link-tips' class='btn-submenu'><i class='fa fa-lightbulb-o'></i>Packing Tips</a>";
        }

        if($town == "about"){
            $this .= "<a href='#' id='link-licenses' class='btn-submenu'><i class='fa fa-sun-o'></i> Finch Moving License</a>".
            "<a href='#' id='link-insurance' class='btn-submenu'><i class='fa fa-shield'></i>Finch Moving Insurance</a>".
            "<a href='#' id='link-reviews' class='btn-submenu'><i class='fa fa-thumbs-o-up'></i>Finch Moving Reviews</a>";
        }
        return $this;

    }

     if(strpos($curl, "san-diego_to_san-francisco") != FALSE){
        $subMenu = makeSubMenu("san_diego");
     }

     if(strpos($curl, "san_diego") != FALSE){
        $subMenu = makeSubMenu("san_diego");
     }
     if(strpos($curl, "la_jolla") != FALSE){
        $subMenu = makeSubMenu("la_jolla");
     }

     if(strpos($curl, "lakeside") != FALSE){
        $subMenu = makeSubMenu("lakeside");
     }

     if(strpos($curl, "el_cajon") != FALSE){
        $subMenu = makeSubMenu("el_cajon");
     }

      if(strpos($curl, "coronado") != FALSE){
        $subMenu = makeSubMenu("coronado");
     }

      if(strpos($curl, "santee") != FALSE){
        $subMenu = makeSubMenu("santee");
     }

      if(strpos($curl, "poway") != FALSE){
        $subMenu = makeSubMenu("poway");
     }

     if(strpos($curl, "mission_bay") != FALSE){
        $subMenu = makeSubMenu("mission_bay");
     }

     if(strpos($curl, "la_mesa") != FALSE){
        $subMenu = makeSubMenu("la_mesa");
     }

     if(strpos($curl, "about") != FALSE){
        $subMenu = makeSubMenu("about");
     }

*/ ?>


            <div class="slide-1 clearfix img-truck-1 box-img waypoint">
                <div class="wrap">
                    <div class="box-light-content clearfix">
                        <h2 class="wp-appear"><?php echo get_the_title(); ?></h2>

                    </div>
                  <!--  <div class="box-light-img">
                        <div class="box-light-img-inside" style="margin-top:70px"><img src="images/truck-big-1.png" alt=""></div>
                    </div> -->
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

            <?php /* roots_sidebar_before(); ?>
        <!--     <div class="span4 sidebar-wrapper">
                <div id="sidebar" <? if(!empty($subMenu)) { ?> class="box-submenu" style="padding-left: 20px; padding-right: 20px" <? } ?>>
                    <? if(!empty($subMenu)) { ?>
                        <div class="submenu-items">
                        <h3 style="margin-bottom: 30px">See also:</h3>

                        <? echo $subMenu; ?>

                        </div>
                    <? } ?>
                    <?php roots_sidebar_inside_before(); ?>

                    <?php get_sidebar(); ?>

                    <?php roots_sidebar_inside_after(); ?>
                </div>
                /#sidebar -->
                <?php roots_sidebar_after(); ?>
            </div>
        </div>
    </div>
    <?php */ get_footer(); ?>


