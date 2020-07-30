
<?php

include '../connection.php';
$id=$_GET['id'];
$query="select * from doctor where d_id=".$id;
$result = mysqli_query($conn,$query);
$row =mysqli_fetch_row($result);

    
 
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
      <input type="text" class="form-control" id="" placeholder="Name" name="Named" value="<?php echo $row[1];?>" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Named" class="col-sm-2 col-form-label">Doctor Email</label>
    <div class="col-sm-10">
<input type="email" class="form-control" id="" placeholder="Email" name="Emaild" value="<?php echo $row[2];?>" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="text" name="password" class="form-control" id="inputPassword3" placeholder="Password" value="<?php echo $row[3];?>" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Education</label>
    <div class="col-sm-10">
      <input type="text" name="education" class="form-control" id="inputPassword3" placeholder="Password" value="<?php echo $row[6];?>" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Fees</label>
    <div class="col-sm-10">
      <input type="number" name="fe" class="form-control" id="inputPassword3" placeholder="fees" required value="<?php echo $row[8];?>" readonly>
    </div>
  </div>
  <div class="form-group row">
      <label for="inputState" class="col-sm-2 col-form-label">Specialist</label>
      <div class="col-sm-10">
      <input type="text"  class="form-control" id="inputPassword3" placeholder="Password" readonly value="<?php   
        $query2="select * from specialist where id =".$row[7];
        $result2=mysqli_query($conn,$query2);
        $row2=mysqli_fetch_row($result2);
       echo $row2[1];?>">
      </div>
    </div>
  <div class="form-group row">
      <label for="inputState" class="col-sm-2 col-form-label">State</label>
      <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Password" readonly value="<?php   
      $query1="select * from city where C_id =".$row[5];
       $result1=mysqli_query($conn,$query1);
       $row1=mysqli_fetch_row($result1);
      echo $row1[1];?>">

    
      </div>
    </div>
    <div class="form-group row">
    <label class="col-sm-2 col-form-label">Doctor Picture</label>
    <div class="col-sm-10">
    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row[4]); ?>" width="80px" height="80px"/>
    </div>
 
  <?php
include '../adminpanelfooter.php';

?>

</html>