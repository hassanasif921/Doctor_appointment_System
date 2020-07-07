<?php 
session_start();
include 'connection.php';
 $is=$_SESSION['docid']; 
  
$query="select * from appoinment where D_id=".$is;
$result=mysqli_query($conn,$query);

include '../header.php';
?>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Doctor Name</th>
                <th>Date</th>
                <th>Day</th>
                <th>Patient Name</th>
                <th>Patient Contact</th>
                <th>Gender</th>
            </tr>
        </thead>
        <tbody>
        <?php while($row=mysqli_fetch_array($result))
        {
            ?>
        <tr>
                <td><?php 
       $query1="select * from doctor where d_id =".$row['D_id'];
       $result1=mysqli_query($conn,$query1);
       $row1=mysqli_fetch_row($result1);
      echo $row1[1];
      ?></td>
                <td><?php echo $row['Date'] ?></td>
                <td>
                <?php 
      $query2="select * from availabe where id=".$row['Avail_id'];
      $result2=mysqli_query($conn,$query2);
      $row2=mysqli_fetch_row($result2);
      
     $query3="select * from dayss where Id=".$row2[2];
    $result3=mysqli_query($conn,$query3);
    $row3=mysqli_fetch_row($result3);
    echo $row3[1];
      ?>
                </td>
                <td><?php 
       $query4="select * from patient where pid =".$row['P_id'];
       $result4=mysqli_query($conn,$query4);
       $row4=mysqli_fetch_row($result4);
      echo $row4[1];
      ?></td>
                <td><?php 
      
      echo $row4[6];
      ?></td>
                <td><?php 
      
      echo $row4[5];
      ?></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
        <tfoot>
            <tr>
            <th>Doctor Name</th>
                <th>Date</th>
                <th>Day</th>
                <th>Patient Name</th>
                <th>Patient Contact</th>
                <th>Gender</th>
            </tr>
        </tfoot>
    </table>
    <?php 
include "../footer.php";
?>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );</script>