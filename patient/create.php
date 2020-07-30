<?php
include "../adminpanel.php";

?>
<?php 

include '../connection.php';
$query="Select * from city";
$result=mysqli_query($conn,$query);
?>
<center>
<h1 style="color:blue">Doctor Registration Form</h1>

</center>

<br>
<form method="post">
    
  <div class="form-group row">
    <label for="Named" class="col-sm-2 col-form-label">Patient Name</label>
    <div class="col-sm-10">  <input class="form-control" type="text" name="namep"  required pattern="^[a-zA-Z\s]+$"  title="Numbers Are Not Allowed"> 

    </div>
  </div>
  <div class="form-group row">
    <label for="Named" class="col-sm-2 col-form-label">Contact</label>
    <div class="col-sm-10">
    <input class="form-control" type="text" name="contact" maxlength="11" placeholder="Phone Number Should be like 03xxxxxxxxx" pattern="03[0-9]{2}(?!1234567)(?!1111111)(?!7654321)[0-9]{7}" required title="Phone Number Should be like 03xxxxxxxxx">

    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
    <input class="form-control" type="email" name="username" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3,}$"  title="Valid Email Is required" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">password</label>
    <div class="col-sm-10">
    <input class="form-control" type="password" name="password" pattern=".{8,}" title="Eight or more characters" required>
    </div>
  </div>
  
  <div class="form-group row">
      <label for="inputState" class="col-sm-2 col-form-label">City</label>
      <div class="col-sm-10">
      <select name="city" class="form-control" required >
                                        <option disabled="disabled" selected="selected">Select City</option>
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
      </div>
    </div>
  <div class="form-group row">
      <label for="inputState" class="col-sm-2 col-form-label">Gender</label>
      <div class="col-sm-10">
      <select name="gender" required class="form-control">
                                            <option disabled="disabled" selected="selected">Select Gender</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                         
                                        </select>
      </div>
    </div>
    
        <br>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" name="btnSubmit">Create</button>
    </div>
  </div>
  <?php
include "../adminpanelfooter.php";

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
echo $countc;
if($countc >0 )
{
    
    
    echo "<script>alert('Ussername Not Available')</script>";

}
else{
    $query1="insert into patient(name, city, contacts, username, password, Gender) VALUES ('$pname','$citypa','$contactp','$usernamep','$passwordp','$genderps')";
    $result1=mysqli_query($conn,$query1);
    
    if($result1)
          {
             echo "<script>alert('Data Inserted')</script>";
    
         }
  else{
   
             $err= mysqli_error($conn);
             echo $err;
             }
    }
  
  

}?>
</html>