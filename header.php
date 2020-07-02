<?php session_start();?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<!-- Mirrored from dentalux-html.ancorathemes.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Jun 2020 21:19:06 GMT -->
<head>
    <title>Care Group</title>
    <meta charset="utf-8">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" type="image/png" href="favicon.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
    <?php
// patient registration
include "patient/vendor/mdi-font/css/material-design-iconic-font.min.css"  ;
include "patient/vendor/font-awesome-4.7/css/font-awesome.min.css";
//<!-- Font special for pages-->
include "https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" ;

//<!-- Vendor CSS-->
include "/patient/vendor/select2/select2.min.css" ;
include "patient/vendor/datepicker/daterangepicker.css" ;
//<!-- Main CSS-->
include "patient/css/main.css";



include "assets/Main/fonts/fontello/css/fontello.css";
include "https://fonts.googleapis.com/css?family=Lato:400,700,900";
include "https://fonts.googleapis.com/css?family=Damion";
include "assets/Main/css/animate.min.css";
include "assets/Main/css/core.portfolio.css";
include "assets/Main/css/flexslider.css";
include "assets/Main/css/styles.css" ;
include "assets/Main/css/responsive.css";
?>
<?php

    
    include "assets/adminlogin/vendor/animate/animate.css";
    include "assets/adminlogin/vendor/css-hamburgers/hamburgers.min.css";
    include "assets/adminlogin/vendor/animsition/css/animsition.min.css";
    include "assets/adminlogin/vendor/select2/select2.min.css";
    include "assets/adminlogin/vendor/daterangepicker/daterangepicker.css";
    include "assets/adminlogin/css/util.css";
	include "assets/adminlogin/css/main.css";

    ?>
    </style>
    <!--[if lt IE 9]>
        <script src="js/vendor/html5shiv.min.js"></script>
        <script src="js/vendor/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a target="_blank"  href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div id="box_wrapper">

        <section id="underheader" class="">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 topWrap ">
                        <div class="usermenu_area">
                            <div class="menuUsItem pull-right">
                                <div class="timetable_area">
                                    <span class=""><strong>Mn - St: </strong>8:00am - 9:00pm <strong>Sn: </strong>Closed</span>
                                </div>
                            </div>
                            <div class="menuUsItem pull-left">
                                <div class="contact_area">
                                    <i class="icon-cellphone67 icon-rounded"></i>free call<span class="text-separator"></span><a href="tel:+080012345678">0800 123 45 678</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <header id="header" class="">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 topWrap">
                        <div class="logo logo_center">
                            <a class="navbar-brand" href="index.html">
                              <!--  <img class="logo_main" src="assets/Main/images/logo.png" alt="Dentalux logo"> -->
                                <span class="logo_text">CARE <i>Group</i></span>
                            </a>
                        </div>
                        <div class="bottomWrap">
                            <div class="search" title="Open/close search form">
                                <div class="searchForm">
                                    <form role="search" method="get" class="search-form" action="#">
                                        <input type="text" class="searchField" placeholder="" value="" name="s" title="Search for:">
                                        <button type="submit" class="searchSubmit" title="Start search"><span class="icoSearch"></span></button>
                                    </form>
                                </div>
                                <div class="ajaxSearchResults"></div>
                            </div>
                            <a href="#" class="openResponsiveMenu icon-menu"></a>
                            <nav id="mainmenu_wrapper" class="menuTopWrap topMenuStyleLine text-center">
                                <ul id="mainmenu" class="nav sf-menu inited ">
                                    <li class="menu-item-has-children custom_view_item current-menu-item">
                                        <a href="#">Home <span class="caret"></span></a>
                                        <ul class="sub-menu fadeInUp animated">
                                            <li class="menu-item current-menu-item">
                                                <a href="index.html">Homepage</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="home-page-2.html">Home Page 2</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="home-page-3.html">Home Page 3</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-type-custom menu-item-has-children">
                                        <a href="#">Pages <span class="caret"></span></a>
                                        <ul class="sub-menu fadeInUp animated">
                                            <li class="menu-item">
                                                <a href="about.html">About</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="shortcodes.html">Shortcodes</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="typography.html">Typography</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="single-post.html">Single Post</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="404-2.html">404</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-type-custom">
                                        <a href="services.html">Services</a>
                                    </li>
                                    <li class="menu-item-type-custom menu-item-has-children">
                                        <a href="#">Team <span class="caret"></span></a>
                                        <ul class="sub-menu fadeInUp animated">
                                            <li class="menu-item">
                                                <a href="team.html">Team Members</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="dr-marta-green.html">Dr. Marta Green</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-type-custom">
                                        <a href="gallery.html" class="">Gallery</a>
                                    </li>
                                    <li class="menu-item-type-custom menu-item-has-children">
                                        <a href="#">Blog <span class="caret"></span></a>
                                        <ul class="sub-menu fadeInUp animated">
                                            <li class="menu-item">
                                                <a href="blog.html">Blog</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="masonry.html">Masonry</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-type-custom">
                                        <a href="appointment.html">Appointment</a>
                                    </li>
                                    <li class="menu-item-type-custom">
                                        <a href="contact.html">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>