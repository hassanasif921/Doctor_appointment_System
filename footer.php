<footer>
            <div class="copyright_area">
                <div class="container">
                    <div class="row copy">
                        <div class="col-sm-9 col-xs-12 copyright"><a target="_blank" href="https://themeforest.net/user/ancorathemes/portfolio">AncoraThemes</a> © <span id="date"></span> All Rights Reserved <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a></div>
                        <div class="col-sm-3 col-xs-12 footer_social text-right">
                            <div class="sc_socials">
                                <div class="sc_socials_item">
                                    <a href="#" target="_blank" class="sc_icon icon-facebook-circled"></a>
                                </div>
                                <div class="sc_socials_item">
                                    <a href="#" target="_blank" class="sc_icon icon-skype-outline"></a>
                                </div>
                                <div class="sc_socials_item">
                                    <a href="#" target="_blank" class="sc_icon icon-twitter-circled"></a>
                                </div>
                                <div class="sc_socials_item">
                                    <a href="#" target="_blank" class="sc_icon icon-linkedin-circled"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- eof #box_wrapper -->

   
    <script>
<?php
  //  <!-- libraries -->
  $first_part=dirname($_SERVER['PHP_SELF']);



   include "assets/adminlogin/vendor/jquery/jquery-3.2.1.min.js";
   include "assets/adminlogin/vendor/animsition/js/animsition.min.js";
   include "assets/adminlogin/vendor/bootstrap/js/popper.js";
   include "assets/adminlogin/vendor/bootstrap/js/bootstrap.min.js";
   include "assets/adminlogin/vendor/select2/select2.min.js";
   include "assets/adminlogin/vendor/daterangepicker/moment.min.js";
   include "assets/adminlogin/vendor/daterangepicker/daterangepicker.js";
   include "assets/adminlogin/vendor/countdowntime/countdowntime.js";
   include "assets/adminlogin/js/main.js";
 
 // patient registration
 include "assets/patientregistration/vendor/jquery/jquery.min.js";
 //<!-- Veassets/ndor JS-->
 include "assets/patientregistration/vendor/select2/select2.min.js";
 include "assets/patientregistration/vendor/datepicker/moment.min.js";
 include "assets/patientregistration/vendor/datepicker/daterangepicker.js";

 //<!-- Main JS-->
 include "assets/patientregistration/js/global.js";
 if($first_part=="/E-project")
 {
 include "assets/Main/js/vendor/jquery-1.11.3.min.js";
 include "assets/Main/js/vendor/bootstrap.min.js";

 include "assets/Main/js/vendor/jquery.appear.js";
 include "assets/Main/js/vendor/modernizr-2.6.2.min.js";

 include "assets/Main/js/vendor/jquery.ui.totop.js";
 include "assets/Main/js/vendor/superfish.js";
 include "assets/Main/js/vendor/jquery.flexslider-min.js";
 include "assets/Main/js/custom/_form_contact.js";
 include "assets/Main/js/custom/front.js";
 include "assets/Main/js/custom/utils.js";
 include "assets/Main/js/_utils.js";
 }
 else
 {
    include "../assets/Main/js/vendor/jquery-1.11.3.min.js";
    include "../assets/Main/js/vendor/bootstrap.min.js";
   
    include "../assets/Main/js/vendor/jquery.appear.js";
    include "../assets/Main/js/vendor/modernizr-2.6.2.min.js";
   
    include "../assets/Main/js/vendor/jquery.ui.totop.js";
    include "../assets/Main/js/vendor/superfish.js";
    include "../assets/Main/js/vendor/jquery.flexslider-min.js";
    include "../assets/Main/js/custom/_form_contact.js";
    include "../assets/Main/js/custom/front.js";
    include "../assets/Main/js/custom/utils.js";
    include "../assets/Main/js/_utils.js";
 }


?>
</script>
<?php
if($first_part=="/E-project")
{
    ?>
<script type="text/javascript" src="assets/Main/js/vendor/modernizr-2.6.2.min.js"></script>
<script type="text/javascript" src="assets/Main/js/custom/shortcodes_init.js"></script>

<script type="text/javascript" src="assets/Main/js/custom/shortcodes_init.js"></script>

<?php
}
else 
{
    ?>
    <script type="text/javascript" src="assets/Main/js/vendor/modernizr-2.6.2.min.js"></script>
<script type="text/javascript" src="assets/Main/js/custom/shortcodes_init.js"></script>

<?php 
}
?>
   
    <script type="text/javascript" src=""></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- superfish menu  -->
    <script type="text/javascript" src=""></script>

    <!-- page scrolling -->
    <script type="text/javascript" src=""></script>

    <!-- sliders, filters, carousels -->
    <script type="text/javascript" src=''></script>

    <!-- custom scripts -->
    <script type="text/javascript" src=""></script>
    <script type="text/javascript" src=""></script>
    <script type="text/javascript" src=""></script>
    <script type="text/javascript" src=""></script>
</body>


<!-- Mirrored from dentalux-html.ancorathemes.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Jun 2020 21:19:53 GMT -->
</html>