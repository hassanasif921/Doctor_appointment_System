<?php 
 include '../adminpanel.php';
include '../connection.php';
 
?>
  <h2>Blog form</h2>
  <form class="form-horizontal" method="post"  enctype="multipart/form-data">
    <div class="form-group row">
      <label class="control-label col-sm-2" for="email">Blog Heading:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Enter Heading" name="head">
      </div>
    </div>
    <div class="form-group row">
      <label class="control-label col-sm-2" for="pwd">Blog Content:</label>
      <div class="col-sm-10 green-border-focus">          
      <textarea class="form-control" id="exampleFormControlTextarea5" rows="10" name="content"></textarea>      </div>
    </div>
   
    
 
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Blog Image</label>
    <div class="col-sm-10">
    <input type="file" name="imagess" />

    </div>
  </div>
    <div class="form-group">        
      <div class="col-sm-offset-12 col-sm-12">
        <button type="submit" class="btn btn-primary" name="btnSubmit">Submit</button>
      </div>
    </div>
  </form>
<?PHP
  if(isset($_POST['btnSubmit']))
{
    $query="Select * from blog";
    $result=mysqli_query($conn,$query);
$images1=$_FILES['imagess']['tmp_name'];
$img=addslashes(file_get_contents($images1));
  $heading=$_POST['head'];
  $cont=$_POST['content'];
$dates=date("d/m/Y");

 // $query1="update doctor set d_name='$dname', d_email='$Emaild', d_password='$pass', city='$citypa', education='$edu',specialization='$special',image='$img' where d_dd='$id'";
 // $result1=mysqli_query($conn,$query1);
 $query1 ="insert into blog(b_heading,b_content,b_date,image) VALUES ('$heading','$cont','$dates','$img')";
 $result1=mysqli_query($conn,$query1);
 if($result1)
   {
     echo "Successfull";
   }else{
    echo "fail";
   $err= mysqli_error($conn);
   echo $err;
   }
}
?>