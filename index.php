<?php 
include 'header.php';
include 'connection.php';
$querydoctor="SELECT * FROM `doctor` LIMIT 3";
$resultdoc=mysqli_query($conn,$querydoctor);
$querygallery="SELECT * FROM `gallery` LIMIT 4";
$resultgall=mysqli_query($conn,$querygallery);
$queryservise="SELECT * FROM `specialist` LIMIT 6";
$resultser=mysqli_query($conn,$queryservise);

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

                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="assets/Main/images/slide-3.jpg" alt="" />
                            <div class="slide_description_wrapper">
                                <div class="container">
                                    <div class="slide_description">
                                        <div>
                                            <h1 class="slide_title">The best in modern<br>dentistry</h1>

                                         
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
                <?php while($rowservice=mysqli_fetch_array($resultser))
        {
            ?>
                    <div class="col-md-4 col-sm-6">
                        <div class="sc_services sc_services_style_1">
                          
                        <a href="sdoctor.php?id=<?php echo $rowservice ['id'] ?>"><h5 class="sc_title "><?php echo $rowservice['specialist']?></h5></a>

                            
                        </div>
                    </div>
                   <?php 
        }
        ?>
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
                <?php while($rowdoctor=mysqli_fetch_array($resultdoc))
        {
            ?>
                    <div class="col-sm-6 col-lg-4">

                        <div class="sc_team_item sc_team_item_style_1">
                            <div class="sc_team_item_avatar"><img class="sc_image sc_image_shape_round" width="80" height="80" alt="dr-joseph-phillips.jpg" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($rowdoctor['image']); ?>">
                            </div>
                            <div class="team_item_info-container">
                                <div class="sc_team_item_info">
                                    <h5 class="sc_team_item_title"><a href='profile.php?id=<?php echo $rowdoctor['d_id'] ?>'><?php echo $rowdoctor['d_name']?></a></h5>

                                    <div class="sc_team_item_position"><?php 
       $querycity="select * from city where C_id =".$rowdoctor['city'];
       $resultcity=mysqli_query($conn,$querycity);
       $rowcity=mysqli_fetch_row($resultcity);
      echo $rowcity[1];
      ?></div>
                                    <div class="sc_team_item_description"><span class="sc_team_item_description_span"><?php 
       $querys="select * from specialist where id =".$rowdoctor['specialization'];
       $results=mysqli_query($conn,$querys);
       $rows=mysqli_fetch_row($results);
      echo $rows[1];
      ?></span>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
        <?php }?>
                      
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
                <?php while($rowgallery=mysqli_fetch_array($resultgall))
        {
            ?>
                    <div class="col-sm-6 col-md-3">

                        <div class="post_item post_item_square">
                            <div class="post_content ih-item circle effect1 top_to_bottom">
                                <div class="post_featured img">
                                    <img class="wp-post-image" width="250" height="250" alt="<?php echo $rowgallery['image_name']?>" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($rowgallery['gallery_image']); ?>"> </div>
                                <div class="post_info_wrap info">
                                    <div class="info-back">
                                        <h4 class="post_title"><?php echo $rowgallery['image_name']?></h4>
                                        <div class="post_descr">
                                         
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
                 <?php 
        }
        ?>
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
                            <form class="shake"  method="post">
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <input type="text" class="form-control" name="name1" placeholder="Name" required required pattern="^[a-zA-Z\s]+$"  title="Numbers Are Not Allowed">
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="text" class="form-control" name="last_name" placeholder="Last name" required>
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="email" class="form-control" name="email" placeholder="E-mail"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3,}$"  title="Valid Email Is required" required>
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="text" class="form-control" name="phone" placeholder="Phone"  placeholder="Phone Number Should be like 03xxxxxxxxx" pattern="03[0-9]{2}(?!1234567)(?!1111111)(?!7654321)[0-9]{7}" required title="Phone Number Should be like 03xxxxxxxxx">
                                </div>
                                <div class="form-group col-sm-6">
                                    <textarea id="message" name="message" class="form-control" rows="6" placeholder="Enter your message" required></textarea>
                                </div>
                                <div class="form-group col-sm-6">
                                   
                                </div>
                                <div class="form-group col-sm-12">
                                    <button name="btnSubmit" type="submit" id="form-submit" class="btn btn-default btn-lg pull-right ">Submit</button>
                                </div>
                               
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
<?php
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
   echo "<script>alert($err)</script>";
   }
}
?>