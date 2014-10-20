<?php
/*
Template Name: With submenu
*/
?>
<?php get_header(); ?>
<?php roots_content_before();
global $prime_frontend;
?>

<?php roots_main_before(); ?>

<?
    $curl = $_SERVER['REQUEST_URI'];

    function makeSubMenu($town){

        $curl = $_SERVER['REQUEST_URI'];

        if(strpos($curl, "about") != FALSE){
            $this .= "<a href='http://finchmovingservices.com/california/licensed_movers_".$town."/' id='link-licenses' class='btn-submenu'><i class='fa fa-sun-o'></i> Finch Moving License</a>".
            "<a href='http://finchmovingservices.com/california/insured_movers_".$town."/' id='link-insurance' class='btn-submenu'><i class='fa fa-shield'></i>Finch Moving Insurance</a>".
            "<a href='http://finchmovingservices.com/california/".$town."_movers_moving_companies_reviews/' id='link-reviews' class='btn-submenu'><i class='fa fa-thumbs-o-up'></i>Finch Moving Reviews</a>";
        }

        if(strpos($curl, "moving_services") != FALSE){
            $this .= "<a href='http://finchmovingservices.com/california/".$town."_moving_and_packing_services/' id='link-packing' class='btn-submenu'><i class='fa fa-gift'></i> Moving and Packing </a>".
            "<a href='http://finchmovingservices.com/california/".$town."_office_movers_relocation/' id='link-office' class='btn-submenu'><i class='fa fa-suitcase'></i>Office Relocation</a>";
        }

        if(strpos($curl, "professional_movers") != FALSE){
            $this .= "<a href='http://finchmovingservices.com/california/moving_checklist_san_".$town."/' id='link-checklist' class='btn-submenu'><i class='fa fa-calendar'></i>Moving Checklist</a>".
            "<a href='http://finchmovingservices.com/california/packing_tips_".$town."/' id='link-tips' class='btn-submenu'><i class='fa fa-lightbulb-o'></i>Packing Tips</a>";
        }

        return $this;

    }

     if(strpos($curl, "san-diego_to_san-francisco") != FALSE){
        $subMenu = makeSubMenu("san-diego_to_san-francisco");
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


?>
<div class="main has-sidebar has-sidebar-right <?php $prime_frontend->slider_classes(); ?>" role="main">
    <div class="container">
        <div class="intro">

         <?  include "http://finchmovingservices.com/wp-content/themes/nexus/_/slider-area.inc.html"; ?>

        <?php // $prime_frontend->prime_page_intro(); ?>
        </div>
    </div>
    <div class="subheader-wrapper">

    <? include "http://finchmovingservices.com/wp-content/themes/nexus/_/truck-menu.inc.html"; ?>

        <div class="container_12" style="display: none">

            <div class="grid_12">
                <div id="subheader">
                    <?php
                    global $post;
                    global $prime_frontend;
                    $prime_frontend->prime_title_and_subtitle();
                    ?>
         <? // include "http://finchmovingservices.com/".get_template_directory_uri()."/_/slider-area.inc.html"; ?>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>

    <div class="row-fluid clearfix">
        <div class="intro">

            <?php $prime_frontend->prime_page_intro(); ?>
        </div>
    </div>


    <div class="content-wrapper">

        <div class="overlay-divider"></div>
        <div class="clearfix page-container row-fluid">


            <div class="span8">
                <div class="prime-page" style="margin-left:0; margin-right: 20px; margin-top: 0">
				<div class="block" id="subnav-box" style="display: none">
					<a class="color-1 flag" href="http://finchmovingservices.com/california/san_diego_movers_moving_companies_reviews/">
						<i class="fa fa-thumbs-o-up"></i><p>Finch Moving Reviews</p>
					</a>
					<a class="color-2 flag" href="#"><i class="fa fa-sun-o"></i><p>Finch Moving License</p></a>
					<a class="flag color-3" href="#"><i class="fa fa-shield"></i><p>Finch Moving Insurance</p></a>
				</div>

					<div style="width: 100%; position: relative; padding: 25px">
                    <?php roots_loop_before(); ?>
                    <?php get_template_part('loop', 'page'); ?>
                    <?php roots_loop_after(); ?>
					</div>
                </div>
            </div>

            <?php roots_sidebar_before(); ?>
            <div class="span4 sidebar-wrapper">
                <div id="sidebar" class="box-submenu" style="padding-left: 20px; padding-right: 20px">

                    <div class="submenu-items">
                    <h3 style="margin-bottom: 30px">See also:</h3>

                    <? echo $subMenu; ?>

                    </div>
                    <?php roots_sidebar_inside_before(); ?>

                    <?php get_sidebar(); ?>

                    <?php roots_sidebar_inside_after(); ?>
                </div>
                <!-- /#sidebar -->
                <?php roots_sidebar_after(); ?>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>
</div><!-- /.main -->
<?php roots_main_after(); ?>
<?php roots_content_after(); ?>

