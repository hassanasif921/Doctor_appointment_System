
<?php
session_start();
if(isset($_SESSION['pat']))
{
    header('location: ../index.php');
}
include '../header.php';

?>
<?php 

include 'connection.php';
$query="Select * from city";
$result=mysqli_query($conn,$query);

?>
    <div class="page-wrapper ">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">User Registration Form</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                    <div class="form-row">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="namep"  required pattern="^[a-zA-Z\s]+$"  title="Numbers Are Not Allowed"> 
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Contact</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="contact" maxlength="11" placeholder="Phone Number Should be like 03xxxxxxxxx" pattern="03[0-9]{2}(?!1234567)(?!1111111)(?!7654321)[0-9]{7}" required title="Phone Number Should be like 03xxxxxxxxx">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="username" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3,}$"  title="Valid Email Is required" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="password" pattern=".{8,}" title="Eight or more characters" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="name">City</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="city" class="input-group" required>
                                        <option value="">Select City</option>
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
                                        <select name="gender" required>
                                            <option  value="">Select Gender</option>
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
    $querycheck=" SELECT * FROM `patient` WHERE username = '$usernamep'";
$resultcheck=mysqli_query($conn,$querycheck);
$rowcheck=mysqli_fetch_array($resultcheck);
$countc = mysqli_num_rows($resultcheck);

if($countc >0 )
{
    
    
    echo "<script>alert('Email Not Available')</script>";

}
else{
    $query1="insert into patient(name, city, contacts, username, password, Gender) VALUES ('$pname','$citypa','$contactp','$usernamep','$passwordp','$genderps')";
   $result1=mysqli_query($conn,$query1);
   
   if($result1)
   {
   
    header('location: login.php');
   }else{
  
   $err= mysqli_error($conn);
   echo $err;
   }
}
}?>