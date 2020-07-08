
<?php 
 include '../header.php';

include 'connection.php';
$query="Select * from doctor";
$result=mysqli_query($conn,$query);

?>
<h1>Doctor registration</h1>
<form method="post" enctype="multipart/form-data">
    
  
  <div class="form-group row">
      <label for="inputState" class="col-sm-2 col-form-label">Doctor</label>
      <div class="col-sm-10">
      <select id="inputState" name="doctor" class="form-control">
     
                                        <?php
        while($row=mysqli_fetch_array($result))
        {
        ?>
            <option value=<?php echo $row['d_id'];?>>
            <?php echo $row['d_name'];?>
            </option>
        <?php
        }
        ?>
                                         
                                        
      </select>
      </div>
    </div>
    <div class="form-group row">
    <label for="Named" class="col-sm-2 col-form-label">Days</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="" placeholder="day" name="day">
    </div>
  </div>
  <div class="form-group row">
    <label for="Named" class="col-sm-2 col-form-label">Start Time</label>
    <div class="col-sm-10">
      <input type="Time" class="form-control" id="" placeholder="Time" name="time">
    </div>
  </div>
  <div class="form-group row">
    <label for="Named" class="col-sm-2 col-form-label">End Time</label>
    <div class="col-sm-10">
      <input type="Time" class="form-control" id="" placeholder="Time" name="etime">
    </div>
  </div>
 
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" name="btnSubmit">Sign in</button>
    </div>
  </div>


<?php
include "../footer.php";
 if(isset($_POST['btnSubmit']))
{
   
    $dname=$_POST['doctor'];
    $days=$_POST['day'];
   
    $STime=$_POST['time'];
    $ETime=$_POST['etime'];
    $query1="insert into availabe(D_id	, days, stime,etime) VALUES ('$dname','$days','$STime','$ETime')";
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
