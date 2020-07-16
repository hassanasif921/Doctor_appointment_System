<?php 
 include '../adminpanel.php';
include '../connection.php';
 $query="Select * from specialist";
$result=mysqli_query($conn,$query);


 if(isset($_POST['btnSubmit']))
{
   
  
    $cname=$_POST['cna'];
    $query1="insert into specialist(specialist) VALUES ('$cname')";
   $result1=mysqli_query($conn,$query1);
   //INSERT INTO `doctor`(`d_name`, `d_email`, `d_password`, `image`, `city`, `education`, `availabeid`, `specialization`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])
   if($result1)
   {
     echo "Successfull";
   }else{
    echo "fail";
   $err= mysqli_error($conn);
   echo $err;
   }
}?>
<form method="post">

 <div class="form-group row">
    <label for="Named" class="col-sm-3 col-form-label">Enter specialization</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="" placeholder="Enter specialization" name="cna" required pattern="^[a-zA-Z\s]+$"  title="Numbers Are Not Allowed"> 
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" name="btnSubmit">Enter</button>
    </div>
  </div>
</form>


<?php
include "../adminpanelfooter.php";
?>