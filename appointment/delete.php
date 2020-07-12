<?php 
session_start();
include '../connection.php';
$id=$_GET['id'];
  
$query="select * from appoinment where Id=".$id;
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);
if(isset($_POST['btnSubmit'])){
   
    $querydelete="delete from appoinment where id='$id'";
$resultdelete=mysqli_query($conn,$querydelete);
if($resultdelete)
{
header('Location:index.php');
}
else{
echo "Failed";
$err= mysqli_error($conn);
echo $err;
}
}
include '../adminpanel.php';
?>

<div class="container">
  <h2>Vertical (basic) form</h2>
  <form method = "post">
    <div class="form-group">
      <label for="email">Doctor Name: </label>
      <input type="text" class="form-control" name="dname" value="<?php 
       $query1="select * from doctor where d_id =".$row['D_id'];
       $result1=mysqli_query($conn,$query1);
       $row1=mysqli_fetch_row($result1);
      echo $row1[1];
      ?>" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Patient Name:</label>
      <input type="text" class="form-control" id="pname" placeholder="Enter password" name="pwd" value ="<?php 
       $query4="select * from patient where pid =".$row['P_id'];
       $result4=mysqli_query($conn,$query4);
       $row4=mysqli_fetch_row($result4);
      echo $row4[1];
      ?>">
    </div>
    <div class="form-group">
      <label for="pwd">Day</label>
      <input type="text" class="form-control" id="pname" placeholder="Enter password" name="pwd" value ="  <?php 
      $query2="select * from availabe where id=".$row['Avail_id'];
      $result2=mysqli_query($conn,$query2);
      $row2=mysqli_fetch_row($result2);
      
     $query3="select * from dayss where Id=".$row2[2];
    $result3=mysqli_query($conn,$query3);
    $row3=mysqli_fetch_row($result3);
    echo $row3[1];
      ?>">
    </div>
    <div class="form-group">
      <label for="pwd">Date</label>
      <input type="text" class="form-control" id="pname" placeholder="Enter password" name="pwd" value ="<?php echo $row['Date'] ?>">
    </div>
    <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" name="btnSubmit" >Delete</button>
    </div>
  </div>
</form>
</div>
      
    <?php 
include "../adminpanelfooter.php";
?>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script>
$(document).ready(function() {
    $('#example').DataTable();
});
</script>
