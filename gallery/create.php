<?php 
include '../adminpanel.php';
include '../connection.php';
 
?>
  <h2>Add Gallery Image</h2>
  <form class="form-horizontal" method="post"  enctype="multipart/form-data">
    <div class="form-group row">
      <label class="control-label col-sm-2" for="email">Image Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Enter name" name="iname">
      </div>
    </div>
    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-10">
    <input type="file" name="imagess" id="imgInp"/>

    </div>
  </div>
   
    
 
  </div>
  
    <div class="form-group">        
      <div class="col-sm-offset-12 col-sm-12">
        <button type="submit" class="btn btn-primary" name="btnSubmit">Submit</button>
      </div>
    </div>
  </form>

  <script>
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

$("#imgInp").change(function() {
  readURL(this);
});
</script>
<?PHP
  if(isset($_POST['btnSubmit']))
{
  
$images2=$_FILES['imagess']['tmp_name'];
$img=addslashes(file_get_contents($images2));
  $in=$_POST['iname'];
  

 // $query1="update doctor set d_name='$dname', d_email='$Emaild', d_password='$pass', city='$citypa', education='$edu',specialization='$special',image='$img' where d_dd='$id'";
 // $result1=mysqli_query($conn,$query1);
 $query1 ="insert into gallery(image_name,gallery_image) VALUES ('$in','$img')";
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