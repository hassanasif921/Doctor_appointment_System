<?php

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    $first_part=dirname($_SERVER['PHP_SELF']);
?>
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
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="favicon.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Rowdies&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Fondamento:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fondamento:ital@1&family=Galada&display=swap" rel="stylesheet">
     <?php
if($first_part=="/E-project")
{
    ?>
    
    <link href="assets/Main/fonts/fontello/css/fontello.css" rel="stylesheet" type="text/css" media="all" />
    <link href="assets/Main/css/styles.css" rel="stylesheet" type="text/css" media="all" />
  <?php
}
else
{
?>
 <link href="../assets/Main/fonts/fontello/css/fontello.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../assets/Main/css/styles.css" rel="stylesheet" type="text/css" media="all" />
    <?php 
    }
    ?>
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


 
if($first_part=="/E-project")
{
    
include "assets/Main/fonts/fontello/css/fontello.css";
include "https://fonts.googleapis.com/css?family=Lato:400,700,900";
include "https://fonts.googleapis.com/css?family=Damion";
include "assets/Main/css/animate.min.css";
include "assets/Main/css/core.portfolio.css";
include "assets/Main/css/flexslider.css";
include "assets/Main/css/styles.css" ;
include "assets/Main/fonts/fontello/css/fontello.css" ;

include "assets/Main/css/responsive.css";
}
else
{
    include "../assets/Main/fonts/fontello/css/fontello.css";
include "https://fonts.googleapis.com/css?family=Lato:400,700,900";
include "https://fonts.googleapis.com/css?family=Damion";
include "../assets/Main/css/animate.min.css";
include "../assets/Main/css/core.portfolio.css";
include "../assets/Main/css/flexslider.css";
include "../assets/Main/css/styles.css" ;
include "../assets/Main/fonts/fontello/css/fontello.css" ;

include "../assets/Main/css/responsive.css";
}
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
<?php
// $first_part=basename($_SERVER['PHP_SELF'], ".php");

?>
    <div id="box_wrapper">

      
        <header id="header" class="">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 topWrap">
                    <?php 
                    if($first_part=="/E-project")
                    {
                        ?>
                        <div class="logo logo_center">
                            <a class="navbar-brand" href="index.html">
                              <img class="" src="logo.png" alt="Dentalux logo" width="500px">
                                
                            </a>
                        </div>
                    <?php 
                    }
                    
                    else
                    {
                        ?>
                        <div class="logo logo_center">
                            <a class="navbar-brand" href="../index.html">
                              <img class="" src="../logo.png" alt="Dentalux logo" width="500px">
                                
                            </a>
                        </div>
                    <?php 
                    }
                    ?>
                        <div class="bottomWrap">
                           
                            <a href="#" class="openResponsiveMenu icon-menu"></a>
                            <nav id="mainmenu_wrapper" class="menuTopWrap topMenuStyleLine text-center">
                                <ul id="mainmenu" class="nav sf-menu inited ">
                                <?php
                                if($first_part=="/E-project")
                                {
                                ?>
                                    <li class="menu-item-type-custom">
                                        <a href="index.php">Index</a>
                                    </li>
                                   
                                    <li class="menu-item-type-custom">
                                        <a href="AllDoctors.php">Doctors</a>
                                    </li>
                                    <li class="menu-item-type-custom">
                                        <a href="gallery.php" class="">Gallery</a>
                                    </li>
                                     <li class="menu-item-type-custom">
                                        <a href="blog.php" class="">Blog</a>
                                    <li class="menu-item-type-custom">
                                        <a href="contact.php">Contact</a>
                                    </li>
                                    </li>
<?php
                                }else if($first_part=="/E-project/admin" || $first_part=="/E-project/doctor" || $first_part=="/E-project/patient"){
?>
                                    <li class="menu-item-type-custom">
                                        <a href="../index.php">Index</a>
                                    </li>
                                   
                                    <li class="menu-item-type-custom">
                                        <a href="../AllDoctors.php">Doctors</a>
                                    </li>
                                    <li class="menu-item-type-custom">
                                        <a href="../gallery.php" class="">Gallery</a>
                                    </li>
                                     <li class="menu-item-type-custom">
                                        <a href="../blog.php" class="">Blog</a>
                                    <li class="menu-item-type-custom">
                                        <a href="../contact.php">Contact</a>
                                    </li>
                                    </li>
                                    <?php
                                }  
                                       if(isset($_SESSION['duser'])&&$first_part=="/E-project")
                                       {
                                    ?> 
                                    <li class="menu-item-type-custom">
                                        <a href="doctor/myappointments.php">My Appointment</a>
                                    </li>
                                    <li class="menu-item-type-custom">
                                        <a href="doctor/myavailability.php">My Availability</a>
                                    </li>
                                    <li class="menu-item-type-custom">
                                        <a href="doctor/myprofile.php">My Profile</a>
                                    </li>
                                    <li class="menu-item-type-custom">
                                        <a href="logout.php">logout</a>
                                    </li>
                                    <?php
                                }else if(isset($_SESSION['duser'])&&$first_part=="/E-project/doctor")
                                       {
                                    ?> 
                                     <li class="menu-item-type-custom">
                                        <a href="myappointments.php">My Appointment</a>
                                    </li>
                                    <li class="menu-item-type-custom">
                                        <a href="myavailability.php">My Availability</a>
                                    </li>
                                    <li class="menu-item-type-custom">
                                        <a href="myprofile.php">My Profile</a>
                                    </li>
                                    <li class="menu-item-type-custom">
                                        <a href="../logout.php">logout</a>
                                    </li>
                                    <?php
                                }
                                
                                    ?>
                                     
                                     <?php  
                                       if(isset($_SESSION['pat']) &&$first_part=="/E-project")
                                       {
                                    ?> 
                                    <li class="menu-item-type-custom">
                                        <a href="specialist.php">Find Specialist/Book Appointment</a>
                                    </li>
                                    <li class="menu-item-type-custom">
                                        <a href="patient/myappointment.php">My Appointment</a>
                                    </li>
                                    <li class="menu-item-type-custom">
                                        <a href="patient/myprofile.php">My Profile</a>
                                    </li>
                                    <li class="menu-item-type-custom">
                                        <a href="logout.php">logout</a>
                                    </li>
                                    <?php
                                }
                                else if(isset($_SESSION['pat']) &&$first_part=="/E-project/patient"){

                                    ?>
                                    <li class="menu-item-type-custom">
                                        <a href="../specialist.php">Find Specialist/Book Appointment</a>
                                    </li>
                                    <li class="menu-item-type-custom">
                                        <a href="myappointment.php">My Appointment</a>
                                    </li>
                                    <li class="menu-item-type-custom">
                                        <a href="myprofile.php">My Profile</a>
                                    </li>
                                    <li class="menu-item-type-custom">
                                        <a href="../logout.php">logout</a>
                                    </li>
                                    <?php
                                }
                            
                                
                                
                               if($first_part=="/E-project" && !isset($_SESSION['docid']) && !isset($_SESSION['pat'])){
                                       
                                       ?>
                                    <li class="menu-item-type-custom menu-item-has-children">
                                           <a href="#">login <span class="caret"></span></a>
                                           <ul class="sub-menu fadeInUp animated">
                                               <li class="menu-item">
                                                   <a href="doctor/login.php">Doctor Login</a>
                                               </li>
                                               <li class="menu-item">
                                               <a href="patient/login.php">Patient Login</a>
                                               </li>
                                               <li class="menu-item">
                                                   <a href="admin/admin.php">Admin Login</a>
                                                                                                 

                                               </li>
                                             
                                           </ul>
                                          </li>
                                          <li class="menu-item-type-custom">
                                        <a href="patient/register.php">Register</a>
                                    </li>
                                      <?php 
                                          }
                                      ?>
                                      
                                                <?php  
                                          if($first_part=="/E-project/doctor" && !isset($_SESSION['docid']))
                                          {
                                       ?>
                                    <li class="menu-item-type-custom menu-item-has-children">
                                           <a href="#">login <span class="caret"></span></a>
                                           <ul class="sub-menu fadeInUp animated">
                                               <li class="menu-item">
                                                   <a href="login.php">Doctor Login</a>
                                               </li>
                                               <li class="menu-item">
                                               <a href="../patient/login.php">Patient Login</a>
                                               </li>
                                               <li class="menu-item">
                                                   <a href="../admin/admin.php">Admin Login</a>
                                               </li>
                                             
                                           </ul>
                                       <li>
                                       <li class="menu-item-type-custom">
                                        <a href="../patient/register.php">Register</a>
                                    </li>
                                      <?php 
                                          }
                                      ?>
                                       <?php  
                                          if($first_part=="/E-project/admin")
                                          {
                                       ?>
                                    <li class="menu-item-type-custom menu-item-has-children">
                                           <a href="#">login <span class="caret"></span></a>
                                           <ul class="sub-menu fadeInUp animated">
                                               <li class="menu-item">
                                                   <a href="../doctor/login.php">Doctor Login</a>
                                               </li>
                                               <li class="menu-item">
                                               <a href="../patient/login.php">Patient Login</a>
                                               </li>
                                               <li class="menu-item">
                                                   <a href="admin.php">Admin Login</a>
                                               </li>
                                             
                                           </ul>
                                       <li>
                                      <?php 
                                          }
                                      ?>
                                       <?php  
                                          if($first_part=="/E-project/patient" &&  !isset($_SESSION['pat'])) 
                                          {
                                       ?>
                                    <li class="menu-item-type-custom menu-item-has-children">
                                           <a href="#">login <span class="caret"></span></a>
                                           <ul class="sub-menu fadeInUp animated">
                                               <li class="menu-item">
                                                   <a href="../doctor/login.php">Doctor Login</a>
                                               </li>
                                               <li class="menu-item">
                                               <a href="login.php">Patient Login</a>
                                               </li>
                                               <li class="menu-item">
                                                   <a href="../admin/admin.php">Admin Login</a>
                                               </li>
                                             
                                           </ul>
                                       <li>
                                       <li class="menu-item-type-custom">
                                        <a href="register.php">Register</a>
                                    </li>
                                      <?php 
                                          }
                                      ?>
                                   
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>