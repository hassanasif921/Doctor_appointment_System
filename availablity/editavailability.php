
<?php

include "../connection.php";
$id=$_GET['id'];
$query="select * from availabe where id=".$id;
$result = mysqli_query($conn,$query);
$row =mysqli_fetch_row($result);
$query2="Select * from dayss";
$result2=mysqli_query($conn,$query2);
if(isset($_POST['btnSubmit']))
{
 
  $Day=$_POST['da'];
  $start=$_POST['st'];
  $end=$_POST['et'];
  $query1="update availabe set days='$Day', stime='$start', etime='$end' where id='$id'";
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
include "../header.php";
?>
<form method="post" enctype="multipart/form-data">
    
    <div class="form-group row">
      <label for="Named" class="col-sm-2 col-form-label">Doctor Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="" placeholder="Name" name="Named" value="<?php  
        $queryd="select * from doctor where d_id =".$row[1];
       $resultd=mysqli_query($conn,$queryd);
       $rowd=mysqli_fetch_row($resultd);
      echo $rowd[1];?>" readonly>
      </div>
    </div>
    <div class="form-group row">
      <label for="inputState" class="col-sm-2 col-form-label">Day</label>
      <div class="col-sm-10">
      <select  name="da" class="form-control">
     
                                     
      <?php
        while($rowc=mysqli_fetch_array($result2))
        {
            
            if($row[2]==$rowc['Id'])
            {
        ?>
            <option value=<?php echo $rowc['Id'];?> selected>
            <?php echo $rowc['day_name']; ?> 
           
            </option>
            <?php 
            }
            else {
            ?>
             <option value=<?php echo $rowc['Id'];?>>
            <?php echo $rowc['day_name']; ?> 
           
            </option>

        <?php
            }
        }
        ?>
                                         
                                        
      </select>
      </div>
    </div>
    <div class="form-group row">
    <label for="Named" class="col-sm-2 col-form-label">Start Time</label>
    <div class="col-sm-10">
      <input type="Time" class="form-control" id="" placeholder="Time" name="st" value="<?php echo $row[3];?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="Named" class="col-sm-2 col-form-label">End Time</label>
    <div class="col-sm-10">
      <input type="Time" class="form-control" id="" placeholder="Time" name="et" value="<?php echo $row[4];?>">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" name="btnSubmit" >Update</button>
    </div>
  </div>
</form>