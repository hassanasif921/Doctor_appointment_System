<?php 
$id=$_GET['id'];

include '../connection.php';
$query="Select * from specialist where id=".$id;
$result=mysqli_query($conn,$query);
$row =mysqli_fetch_row($result);



 if(isset($_POST['btnSubmit']))
{
   // $images=$_FILES['images']['tmp_name'];
  // $img=addslashes(file_get_contents($images));
    $cname=$_POST['name'];
   
  //  $query1="insert into patient(name, city, contact, username, password, Gender) VALUES ('$pname','$citypa','$contactp','$usernamep','$passwordp','$genderps')";
    $query1=" update specialist set specialist='$cname' where id='$id'";
   $result1=mysqli_query($conn,$query1);
   
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
<form method="post">
  <div class="form-group row">
    <label for="n" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" id="n"  value="<?php echo $row[1];?>" required pattern="^[a-zA-Z\s]+$"  title="Numbers Are Not Allowed"> 
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-12">
      <button type="submit" class="btn btn-primary form-control" name="btnSubmit" >Update</button>
    </div>
  </div>
</form>
