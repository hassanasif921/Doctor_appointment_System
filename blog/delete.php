
<?php

include "../connection.php";
$id=$_GET['id'];
$query="select * from blog where id=".$id;
$result = mysqli_query($conn,$query);
$row =mysqli_fetch_row($result);

 if(isset($_POST['btnSubmit']))
{
    $query1="delete from blog where id='$id'";
$result1=mysqli_query($conn,$query1);
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
<h2>Blog form</h2>
  <form class="form-horizontal" method="post"  enctype="multipart/form-data">
    <div class="form-group row">
      <label class="control-label col-sm-2" for="email">Blog Heading:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Enter Heading" name="head"  value="<?php echo $row[1];?>" >
      </div>
    </div>
    <div class="form-group row">
      <label class="control-label col-sm-2" for="pwd">Blog Content:</label>
      <div class="col-sm-10 green-border-focus">          
      <textarea class="form-control" id="exampleFormControlTextarea5" rows="10" name="content" > <?php echo $row[2];?></textarea>      </div>
    </div>
   
    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Image</label>
    <div class="col-sm-10">
    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row[4]); ?>" width="200px" height="200px" id="blah"/>

    </div>
  </div>
 
  </div>
 
    <div class="form-group">        
      <div class="col-sm-offset-12 col-sm-12">
        <button type="submit" class="btn btn-danger" name="btnSubmit">Yes Delete    </button>
      </div>
    </div>
  </form>
  <?php
  include "../adminpanelfooter.php";
?>
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
