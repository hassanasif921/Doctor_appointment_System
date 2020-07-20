<?php  
session_start();
include 'admin/connection.php';


    $da=$_SESSION['dayy'];
   $c= $_POST["country_id"];
   $query2="select * from availabe where D_id='$da' AND days ='$c'";
$dastiyabi=mysqli_query($conn,$query2);
  

?>
<div class="form-group row">
      <label for="inputState" class="col-sm-2 col-form-label">Days And Timming</label>
      <div class="col-sm-10">
      <select  class="form-control">
     
                                        <?php
        while($row=mysqli_fetch_array($dastiyabi))
        {
            
        ?>
            <option value=<?php echo $row['id'];?>>
            <?php echo "(" . date("g:i a", strtotime($row['stime'])) ." - ". date("g:i a", strtotime($row['etime'])). ")" ;?>
            </option>
        <?php
        }
        ?>
                                         
                                        
      </select>
      </div>
    </div>