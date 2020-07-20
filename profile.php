
<?php

include "connection.php";
$id=$_GET['id'];
$query="select * from doctor where d_id=".$id;
$result = mysqli_query($conn,$query);
$row =mysqli_fetch_row($result);

     
$querya="select * from availabe where D_id=".$id;
$resulta=mysqli_query($conn,$querya);
 
include "header.php";
?>

<center>




<br><div class="card" style="width: 25rem;">
  <img class="card-img-top" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row[4]); ?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row[1];?></h5>
  </div>
</div>
</center>
<form method="post" enctype="multipart/form-data">
    
  <div class="form-group row">
    <label for="Named" class="col-sm-2 col-form-label">Doctor Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="" placeholder="Name" name="Named" value="<?php echo $row[1];?>" readonly>
    </div>
  </div>
 
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Education</label>
    <div class="col-sm-10">
      <input type="text" name="education" class="form-control" id="inputPassword3" placeholder="Password" value="<?php echo $row[6];?>" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Fees</label>
    <div class="col-sm-10">
      <input type="number" name="fe" class="form-control" id="inputPassword3" placeholder="fees" required value="<?php echo $row[8];?>" readonly>
    </div>
  </div>
  <div class="form-group row">
      <label for="inputState" class="col-sm-2 col-form-label">Specialist</label>
      <div class="col-sm-10">
      <input type="text"  class="form-control" id="inputPassword3" placeholder="Password" readonly value="<?php   
        $query2="select * from specialist where id =".$row[7];
        $result2=mysqli_query($conn,$query2);
        $row2=mysqli_fetch_row($result2);
       echo $row2[1];?>">
      </div>
    </div>
  <div class="form-group row">
      <label for="inputState" class="col-sm-2 col-form-label">State</label>
      <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Password" readonly value="<?php   
      $query1="select * from city where C_id =".$row[5];
       $result1=mysqli_query($conn,$query1);
       $row1=mysqli_fetch_row($result1);
      echo $row1[1];?>">

    
      </div>
    </div>
    <center>
    <h1 style="font-family: 'Rowdies', cursive;">Doctor Availablity</h1>
</center>
<br>
 
<table id="example" class="table table-striped table-bordered" style="width:100%;top:200px">
        <thead>
            <tr>
                <th>Doctor Name</th>
                <th>Day</th>
                <th>Start Time</th>
                <th>End Time</th>
               
            </tr>
        </thead>
        <tbody>
        <?php while($rowa=mysqli_fetch_array($resulta))
        {
            ?>
        <tr>
                <td><?php 
       $query1a="select * from doctor where d_id =".$rowa['D_id'];
       $result1a=mysqli_query($conn,$query1a);
       $row1a=mysqli_fetch_row($result1a);
      echo $row1a[1];
      ?></td>
               <td>
                <?php 
     
      
     $query3a="select * from dayss where Id=".$rowa['days'];
    $result3a=mysqli_query($conn,$query3a);
    $row3a=mysqli_fetch_row($result3a);
    echo $row3a[1];
      ?>
                </td>
                
                <td><?php echo date("g:i a", strtotime($rowa['stime']));?></td>
                <td><?php echo date("g:i a", strtotime($rowa['etime']));?></td>
               

               <?php 
        }
        ?>
        </tbody>
        <tfoot>
            <tr>
            <th>Doctor Name</th>
                <th>Day</th>
                <th>Start Time</th>
                <th>End Time</th>
              
            </tr>
        </tfoot>
    </table>
    </div>
    <?php 
include "footer.php";
?>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script>
$(document).ready(function() {
    $('#example').DataTable();
});</script>