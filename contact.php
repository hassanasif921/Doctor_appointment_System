<?php include "header.php";
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
        <section class="heading breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <h1 class="page_title">Contacts</h1>
                    </div>
                    <div class="col-xs-6">
                        <div class="breadcrumbs text-right">
                            <a class="breadcrumbs_item home" href="index.html">Home</a><span class="breadcrumbs_delimiter icon-right-open"></span><span class="breadcrumbs_item current">Contacts</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

      

      

        <section id="contact_form_section_2" class="light_section">
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
                                    <button name="btnSubmit" type="submit" id="form-submit" class="btn btn-primary btn-lg pull-right ">Submit</button>
                                </div>
                               
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    
  <?php 
  include "footer.php";
  
  ?>