
<?php

include "../connection.php";
$id=$_GET['id'];
$query="select * from gallery where Id=".$id;
$result = mysqli_query($conn,$query);
$row =mysqli_fetch_row($result);

 if(isset($_POST['btnSubmit']))
{
    if(isset($_POST['imagess'])){
    $images1=$_FILES['imagess']['tmp_name'];

  $img=addslashes(file_get_contents($images1));
  $dname=$_POST['Named'];
  $query1="update gallery set image_name='$dname',gallery_image='$img' where Id='$id'";
  $result1=mysqli_query($conn,$query1);
}
    
   
else{
    $dname=$_POST['Named'];
    $Emaild=$_POST['Emaild'];
   
  
    $query1="update gallery set image_name='$dname' where Id='$id'";
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
<h1 style="color:blue">Edit Gallery</h1>

</center>

<br>
<form method="post" enctype="multipart/form-data">
    
  <div class="form-group row">
    <label for="Named" class="col-sm-2 col-form-label">Image Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="" placeholder="Name" name="Named" value="<?php echo $row[1];?>">
    </div>
  </div>
  
    </div>
    <input type="file" name="imagess"/>
        <br>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" name="btnSubmit" >Sign in</button>
    </div>
  </div>
  <?php
include '../adminpanelfooter.php';

?>

</html>