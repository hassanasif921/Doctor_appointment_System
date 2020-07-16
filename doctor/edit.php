
<?php

include "connection.php";
$id=$_GET['id'];
$query="select * from doctor where d_id=".$id;
$result = mysqli_query($conn,$query);
$row =mysqli_fetch_row($result);
$query2="Select * from city";
$resultc=mysqli_query($conn,$query2);
$query3="Select * from specialist";
$result3=mysqli_query($conn,$query3);
 if(isset($_POST['btnSubmit']))
{
    if(isset($_POST['imagess'])){
    $images1=$_FILES['imagess']['tmp_name'];

  $img=addslashes(file_get_contents($images1));
  $dname=$_POST['Named'];
  $Emaild=$_POST['Emaild'];

  $pass=$_POST['password'];
  $citypa=$_POST['city'];
  $special=$_POST['Specialist'];
  $edu=$_POST['education'];
  $query1="update doctor set d_name='$dname', d_email='$Emaild', d_password='$pass', city='$citypa', education='$edu',specialization='$special',image='$img' where d_id='$id'";
  $result1=mysqli_query($conn,$query1);

}
    
   
else{
    $dname=$_POST['Named'];
    $Emaild=$_POST['Emaild'];
   
    $pass=$_POST['password'];
    $citypa=$_POST['city'];
    $special=$_POST['Specialist'];
    $edu=$_POST['education'];
    $query1="update doctor set d_name='$dname', d_email='$Emaild', d_password='$pass', city='$citypa', education='$edu',specialization='$special'where d_id='$id'";
   $result1=mysqli_query($conn,$query1);
}
   //INSERT INTO `doctor`(`d_name`, `d_email`, `d_password`, `image`, `city`, `education`, `availabeid`, `specialization`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])
   if($result1)
   {
    
    header("Location:index.php");
   }else{
    echo "fail";
   $err= mysqli_error($conn);
   echo $err;
   }
}
include "../adminpanel.php";
?>

<center>
<h1 style="color:blue">Doctor Registration Form</h1>

</center>

<br>
<form method="post" enctype="multipart/form-data">
    
  <div class="form-group row">
    <label for="Named" class="col-sm-2 col-form-label">Doctor Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="" placeholder="Name" name="Named" value="<?php echo $row[1];?>" required pattern="^[a-zA-Z\s]+$"  title="Numbers Are Not Allowed"> 
    </div>
  </div>
  <div class="form-group row">
    <label for="Named" class="col-sm-2 col-form-label">Doctor Email</label>
    <div class="col-sm-10">
<input type="email" class="form-control" id="" placeholder="Email" name="Emaild" value="<?php echo $row[2];?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3,}$"  title="Valid Email Is required" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password" value="<?php echo $row[3];?>" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Education</label>
    <div class="col-sm-10">
      <input type="text" name="education" class="form-control" id="inputPassword3" placeholder="Password" value="<?php echo $row[6];?>" required>
    </div>
  </div>
  <div class="form-group row">
      <label for="inputState" class="col-sm-2 col-form-label">Specialist</label>
      <div class="col-sm-10">
      <select id="inputState" name="Specialist" class="form-control" required>
     
                                        <?php
        while($row3=mysqli_fetch_array($result3))
        {
            if($row[7]==$row3['id'])
            {
        ?>
            <option value=<?php echo $row3['id'];?> selected>
            <?php echo $row3['specialist'];?>
            </option>
            <?php
            }
            else {
                ?>
         <option value=<?php echo $row3['id'];?> >
            <?php echo $row3['specialist'];?>
            </option>
        <?php
            }
        }
        ?>
                                         
                                        
      </select>
      </div>
    </div>
  <div class="form-group row">
      <label for="inputState" class="col-sm-2 col-form-label">State</label>
      <div class="col-sm-10">
      <select id="inputState" name="city" class="form-control" required>
     
                                     
      <?php
        while($rowc=mysqli_fetch_array($resultc))
        {
            
            if($row[5]==$rowc['C_id'])
            {
        ?>
            <option value=<?php echo $rowc['C_id'];?> selected>
            <?php echo $rowc['C_name']; ?> 
           
            </option>
            <?php 
            }
            else {
            ?>
             <option value=<?php echo $rowc['C_id'];?> >
            <?php echo $rowc['C_name']; ?> 
           
            </option>

        <?php
            }
        }
        ?>
                                         
                                        
      </select>
      </div>
    </div>
    <input type="file" name="imagess"/>
        <br>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" name="btnSubmit" >Update</button>
    </div>
  </div>
  <?php
include '../adminpanelfooter.php';

?>

</html>