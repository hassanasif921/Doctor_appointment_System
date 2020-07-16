<?php 
include 'header.php';
include 'connection.php';

if(isset($_POST['btnSubmit']))
{
   
    $fname=$_POST['name1'];
    $lname=$_POST['last_name'];
    $contact=$_POST['phone'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $query1="insert into contact(First_name, Last_name, Message, Email, Cell_No) VALUES ('$fname','$lname','$message','$email','$contact')";
   $result1=mysqli_query($conn,$query1);
   //INSERT INTO `doctor`(`d_name`, `d_email`, `d_password`, `image`, `city`, `education`, `availabeid`, `specialization`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])
   if($result1)
   {
     echo "<script>alert('Thanks For Your Message We Will Contact You Soon')</script>";
   }else{
    echo "fail";
   $err= mysqli_error($conn);
   echo $err;
   }
}
?>
<section class="fullwidth">
            <div class="container">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <img src="assets/Main/images/slide-1.jpg" alt="" />
                            <div class="slide_description_wrapper">
                                <div class="container">
                                    <div class="slide_description">
                                        <div>
                                            <h1 class="slide_title">The best in modern<br>dentistry</h1>

                                            <a class="btn btn-default btn-lg slide_button" href="appointment.html">Make an Appointment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="assets/Main/images/slide-2.jpg" alt="" />
                            <div class="slide_description_wrapper">
                                <div class="container">
                                    <div class="slide_description">
                                        <div>
                                            <h1 class="slide_title">The best in modern<br>dentistry</h1>

                                            <a class="btn btn-default btn-lg slide_button" href="appointment.html">Make an Appointment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="images/slide-3.jpg" alt="" />
                            <div class="slide_description_wrapper">
                                <div class="container">
                                    <div class="slide_description">
                                        <div>
                                            <h1 class="slide_title">The best in modern<br>dentistry</h1>

                                            <a class="btn btn-default btn-lg slide_button" href="appointment.html">Make an Appointment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="">
            <div class="container" style="padding-top: 35px;">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h3 class="sc_title margin-bottom-large">Our Services</h3>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-4 col-sm-6">
                        <div class="sc_services sc_services_style_1">
                            <a href="#" class="sc_icon sc_icon_round icon-tooth10 sc_icon_border"></a>
                            <h5 class="sc_title ">Dental Implants</h5>
                            <div class="sc_description">With reconstructive dentistry, we can repaire and restore the beauty of your smile.</div>
                            <a href="#" class="btn btn-default btn-sm center-block">More</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="sc_services sc_services_style_1">
                            <a href="#" class="sc_icon sc_icon_round icon-tooth8 sc_icon_border"></a>
                            <h5 class="sc_title ">Braces</h5>
                            <div class="sc_description">According to scholars and historians, braces date back to ancient times. Around 400-300 BC.</div>
                            <a href="#" class="btn btn-default btn-sm center-block">More</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="sc_services sc_services_style_1">
                            <a href="#" class="sc_icon sc_icon_round icon-tooth11 sc_icon_border"></a>
                            <h5 class="sc_title ">Teeth Whitening</h5>
                            <div class="sc_description">Bleaching methods use carbamide peroxide which reacts with water to form hydrogen peroxide.</div>
                            <a href="#" class="btn btn-default btn-sm center-block">More</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="sc_services sc_services_style_1">
                            <a href="#" class="sc_icon sc_icon_round icon-tooth20 sc_icon_border"></a>
                            <h5 class="sc_title ">Crowns and Bridges</h5>
                            <div class="sc_description">Types of bridges may vary, depending upon how they are fabricated and the way they anchor to the adjacent teeth.</div>
                            <a href="#" class="btn btn-default btn-sm center-block">More</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="sc_services sc_services_style_1">
                            <a href="#" class="sc_icon sc_icon_round icon-tooth9 sc_icon_border"></a>
                            <h5 class="sc_title ">Prevention</h5>
                            <div class="sc_description">The most important part of preventive dentistry is to brush teeth with fluoride toothpaste approved by ADA.</div>
                            <a href="#" class="btn btn-default btn-sm center-block">More</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="sc_services sc_services_style_1">
                            <a href="#" class="sc_icon sc_icon_round icon-dentist6 sc_icon_border"></a>
                            <h5 class="sc_title ">Cosmetic Dentistry</h5>
                            <div class="sc_description">There are only 2 dental specialties that only focus on dental esthetics: Prosthodontics and Orthodontics</div>
                            <a href="#" class="btn btn-default btn-sm center-block">More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="testimonials_section" class="sc_parallax_gradient sc_parallax" data-parallax-speed="0.3" data-parallax-x-pos="50%" data-parallax-y-pos="50%">
            <div class="sc_parallax_content">
                <div class="sc_parallax_overlay">
                    <div class="container">
                        <div class="row text-center">
                            <div class="col-sm-12">
                                <h3 class="sc_title">What our patients say</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div id="testimonialsCarousel" class="carousel slide" data-ride="carousel">

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active sc_testimonials">
                                            <div class="sc_testimonials_item_content">
                                                <div class="sc_testimonials_item_quote">
                                                    <div class="sc_testimonials_item_text">
                                                        My kids and wife deserve the best treatment, so I have discovered that at this clinic you can get everything and more to het healthy teeth and beautiful smiles. I am greatful for the good experience for the kids and myself.
                                                    </div>
                                                </div>
                                                <div class="sc_testimonials_item_author">
                                                    <div class="sc_testimonials_item_name">Joe Schmoe</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item sc_testimonials">
                                            <div class="sc_testimonials_item_content">
                                                <div class="sc_testimonials_item_quote">
                                                    <div class="sc_testimonials_item_text">
                                                        Your dentists are my saviours. The service is great, and I liked that the rooms and equipment were sterile, and the nurces were nice. I would definiltely refer everyone I knew to this clinic, because this is just an awesome place!
                                                    </div>
                                                </div>
                                                <div class="sc_testimonials_item_author">
                                                    <div class="sc_testimonials_item_name">Joe Schmoe</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item sc_testimonials">
                                            <div class="sc_testimonials_item_content">
                                                <div class="sc_testimonials_item_quote">
                                                    <div class="sc_testimonials_item_text">
                                                        I got denials from different dental doctors because of a unique and complicated case. Dr. Phillips however brought hope and eagerly took me into surgery that was successful. Now I can say that I&#8217;ve never been happier. Thank you Doctor!
                                                    </div>
                                                </div>
                                                <div class="sc_testimonials_item_author">
                                                    <div class="sc_testimonials_item_name">Joe Schmoe</div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#testimonialsCarousel" role="button" data-slide="prev">
                                        <span class="icon-angle-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#testimonialsCarousel" role="button" data-slide="next">
                                        <span class="icon-angle-right" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="team_section" class="">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h3 class="sc_title">Meet the team</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-lg-4">
                        <div class="sc_team_item sc_team_item_style_1">
                            <div class="sc_team_item_avatar"><img class="sc_image sc_image_shape_round" width="80" height="80" alt="dr-joseph-phillips.jpg" src="assets/Main/images/dr-joseph-phillips-400x400.jpg">
                            </div>
                            <div class="team_item_info-container">
                                <div class="sc_team_item_info">
                                    <h5 class="sc_team_item_title"><a href="#">Dr. Joseph Phillips</a></h5>

                                    <div class="sc_team_item_position">Senior Doctor</div>
                                    <div class="sc_team_item_description"><span class="sc_team_item_description_span">Lorem ipsum dolor sit amet, consectetur...</span><span class="sc_team_item_description_span_icon sc_icon icon-plus sc_icon_round"></span>
                                    </div>
                                    <div class="sc_socials">
                                        <div class="sc_socials_item">
                                            <a href="#" target="_blank" class="sc_icon sc_icon_round icon-facebook"></a>
                                        </div>
                                        <div class="sc_socials_item">
                                            <a href="#" target="_blank" class="sc_icon sc_icon_round icon-skype"></a>
                                        </div>
                                        <div class="sc_socials_item">
                                            <a href="#" target="_blank" class="sc_icon sc_icon_round icon-twitter"></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="sc_team_item sc_team_item_style_1">
                            <div class="sc_team_item_avatar"><img class="sc_image sc_image_shape_round" width="80" height="80" alt="" src="assets/Main/images/team_1_11-80x80.jpg">
                            </div>
                            <div class="team_item_info-container">
                                <div class="sc_team_item_info">
                                    <h5 class="sc_team_item_title"><a href="#">Dr. Marta Green</a></h5>

                                    <div class="sc_team_item_position">Senior Doctor</div>
                                    <div class="sc_team_item_description"><span class="sc_team_item_description_span">Aliquam erat volutpat. Nulla pulvinar...</span><span class="sc_team_item_description_span_icon sc_icon icon-plus sc_icon_round"></span>
                                    </div>
                                    <div class="sc_socials">
                                        <div class="sc_socials_item">
                                            <a href="#" target="_blank" class="sc_icon sc_icon_round icon-facebook"></a>
                                        </div>
                                        <div class="sc_socials_item">
                                            <a href="#" target="_blank" class="sc_icon sc_icon_round icon-skype"></a>
                                        </div>
                                        <div class="sc_socials_item">
                                            <a href="#" target="_blank" class="sc_icon sc_icon_round icon-twitter"></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="sc_team_item sc_team_item_style_1">
                            <div class="sc_team_item_avatar"><img class="sc_image sc_image_shape_round" width="80" height="80" alt="dr-joseph-phillips.jpg" src="assets/Main/images/dr-edward-grey-80x80.jpg">
                            </div>
                            <div class="team_item_info-container">
                                <div class="sc_team_item_info">
                                    <h5 class="sc_team_item_title"><a href="#">Dr. Edward Grey</a></h5>

                                    <div class="sc_team_item_position">Senior Doctor</div>
                                    <div class="sc_team_item_description"><span class="sc_team_item_description_span">Lorem ipsum dolor sit amet, consectetur...</span><span class="sc_team_item_description_span_icon sc_icon icon-plus sc_icon_round"></span>
                                    </div>
                                    <div class="sc_socials">
                                        <div class="sc_socials_item">
                                            <a href="#" target="_blank" class="sc_icon sc_icon_round icon-facebook"></a>
                                        </div>
                                        <div class="sc_socials_item">
                                            <a href="#" target="_blank" class="sc_icon sc_icon_round icon-skype"></a>
                                        </div>
                                        <div class="sc_socials_item">
                                            <a href="#" target="_blank" class="sc_icon sc_icon_round icon-twitter"></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="gallery_section" class="light_section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h3 class="sc_title">Our Gallery</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="post_item post_item_square">
                            <div class="post_content ih-item circle effect1 top_to_bottom">
                                <div class="post_featured img">
                                    <img class="wp-post-image" width="250" height="250" alt="Digital Dentistry" src="assets/Main/images/Depositphotos_5724724_original-400x400.jpg"> </div>
                                <div class="post_info_wrap info">
                                    <div class="info-back">
                                        <h4 class="post_title">Digital Dentistry</h4>
                                        <div class="post_descr">
                                            <p>Sed ut...</p>
                                            <span class="hover_icon icon-plus-2"></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.info-back /.info -->
                            </div>
                            <!-- /.post_content -->
                        </div>
                        <!-- /.post_item -->
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="post_item post_item_square">
                            <div class="post_content ih-item circle effect1 top_to_bottom">
                                <div class="post_featured img">
                                    <img class="wp-post-image" width="250" height="250" alt="Digital Dentistry" src="assets/Main/images/Depositphotos_9410241_original-250x250.jpg"> </div>
                                <div class="post_info_wrap info">
                                    <div class="info-back">
                                        <h4 class="post_title">Digital Dentistry</h4>
                                        <div class="post_descr">
                                            <p>Sed ut...</p>
                                            <span class="hover_icon icon-plus-2"></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.info-back /.info -->
                            </div>
                            <!-- /.post_content -->
                        </div>
                        <!-- /.post_item -->
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="post_item post_item_square">
                            <div class="post_content ih-item circle effect1 top_to_bottom">
                                <div class="post_featured img">
                                    <img class="wp-post-image" width="250" height="250" alt="Digital Dentistry" src="assets/Main/images/bigstock-profile-of-male-geek-smiling-w-35555741-250x250.jpg"> </div>
                                <div class="post_info_wrap info">
                                    <div class="info-back">
                                        <h4 class="post_title">Digital Dentistry</h4>
                                        <div class="post_descr">
                                            <p>Sed ut...</p>
                                            <span class="hover_icon icon-plus-2"></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.info-back /.info -->
                            </div>
                            <!-- /.post_content -->
                        </div>
                        <!-- /.post_item -->
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="post_item post_item_square">
                            <div class="post_content ih-item circle effect1 top_to_bottom">
                                <div class="post_featured img">
                                    <img class="wp-post-image" width="250" height="250" alt="Digital Dentistry" src="assets/Main/images/additional_post_1-250x250.jpg"> </div>
                                <div class="post_info_wrap info">
                                    <div class="info-back">
                                        <h4 class="post_title">Digital Dentistry</h4>
                                        <div class="post_descr">
                                            <p>Sed ut...</p>
                                            <span class="hover_icon icon-plus-2"></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.info-back /.info -->
                            </div>
                            <!-- /.post_content -->
                        </div>
                        <!-- /.post_item -->
                    </div>
                </div>
            </div>
        </section>

        <section id="contact_form_section" class="sc_parallax_gradient sc_parallax" data-parallax-speed="0.3" data-parallax-x-pos="50%" data-parallax-y-pos="50%">
            <div class="sc_parallax_content">
                <div class="sc_parallax_overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <h3 class="sc_title">Contact us for free consultation</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-1">
                            <form id="contactForm" class="shake"  method="post">
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <input type="text" class="form-control" name="name1" placeholder="Name" required>
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="text" class="form-control" name="last_name" placeholder="Last name" required>
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="email" class="form-control" name="email" placeholder="E-mail" required>
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                                </div>
                                <div class="form-group col-sm-6">
                                    <textarea id="message" name="message" class="form-control" rows="6" placeholder="Enter your message" required></textarea>
                                </div>
                                <div class="form-group col-sm-6">
                                   
                                </div>
                                <div class="form-group col-sm-12">
                                    <button name="btnSubmit" type="submit" id="form-submit" class="btn btn-default btn-lg pull-right ">Submit</button>
                                </div>
                                <div class="trx_addons_message_box sc_form_result"></div>
                            </div>
                        </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php 
include 'footer.php'
?>