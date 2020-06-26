
<?php
include '../header.php';

?>
<?php 

include 'connection.php';
$query="Select * from city";
$result=mysqli_query($conn,$query);

?>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Event Registration Form</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                    <div class="form-row">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="namep">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Contact</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="contact">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">username</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="username">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="password">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="name">City</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="city">
                                        <?php
        while($row=mysqli_fetch_array($result))
        {
        ?>
            <option value=<?php echo $row['C_id'];?>>
            <?php echo $row['C_name'];?>
            </option>
        <?php
        }
        ?>
                                         
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Gender</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender">
                                            <option disabled="disabled" selected="selected">Select Gender</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                         
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit" name="btnSubmit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
   
<?php
include '../footer.php';

?>


<?php
 if(isset($_POST['btnSubmit']))
{
   // $images=$_FILES['images']['tmp_name'];
  // $img=addslashes(file_get_contents($images));
    $pname=$_POST['namep'];
    $contactp=$_POST['contact'];
    $usernamep=$_POST['username'];
    $passwordp=$_POST['password'];
    $citypa=$_POST['city'];
    $genderps=$_POST['gender'];
    $query1="insert into patient(name, city, contact, username, password, Gender) VALUES ('$pname','$citypa','$contactp','$usernamep','$passwordp','$genderps')";
   $result1=mysqli_query($conn,$query1);
   
   if($result1)
   {
   
    $to      = $usernamep;
    $from      = "hassanasif302672@gmail.com";
    $headers = 'From: ' .$from . "\r\n" . 'Reply To :' .$from . "\r\n" .'X-Mailer :PHP /' .phpversion();
    $subject = 'Hospital Management System';
    $body = 'Hello '.$pname;
    
    
    $send = mail($to, $subject, $body, $headers);
    if($send){
        echo "Mail Send";
    }
    else {
        echo "mail could not send to $to address";
    }
 
   }else{
  
   $err= mysqli_error($conn);
   echo $err;
   }
}?>