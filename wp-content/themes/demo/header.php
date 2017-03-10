<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 09/03/2017
 * Time: 9:56 SA
 */
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url") ?>/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url") ?>/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url") ?>/style.css">
    <script src="<?php bloginfo("template_url") ?>/js/jquery-1.11.0.js"></script>
    <script src="<?php bloginfo("template_url") ?>/js/bootstrap.js"></script>
</head>
<body>


<div class="row-filur text-center top-header ">
    <div class="top-container">
        <div class="row">
            <div class="col-xs-4 bg-yellow">
                <div class="top-header-item">
                    <i class="fa fa-phone"></i>
                    043 514 7866
                </div>
            </div>
            <div class="col-xs-4 bg-green">
                <div class="top-header-item">
                    <i class="fa fa-envelope"></i>
                    info@phymed.vn
                </div>
            </div>
            <div class="col-xs-4 bg-blue">
                <div class="top-header-item">
                    <i class="fa fa-map-marker"></i>
                    P1202, 57 Láng Hạ, Ba Ðình, Hà Nội
                </div>
            </div>
        </div>
    </div>
    <div class="row-fluid header">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 logo">
                    <a href="#">
                        <img class="img-responsive" src="<?php bloginfo("template_url") ?>/image/logo.png">
                    </a>
                </div>
                <div class="col-sm-8 main-menu">
                    <div class="menu-main-menu clearfix">
                        <?php
                        if(has_nav_menu("main_menu")) {
                            wp_nav_menu(array(
                                "theme_location"  => "main_menu",
                                'container'       => 'div',
                                'container_class' => 'menu-main-menu clearfix',
                            ));
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>


    </div>
</div>