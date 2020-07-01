<?php 
include "../header.php";

include 'connection.php';
$query="Select * from doctor";
$result=mysqli_query($conn,$query);
?>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">City</th>
      <th scope="col">Education</th>
      <th scope="col">Specialization</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php while($row=mysqli_fetch_array($result))
        {
            ?>
    <tr>
        <td><?php echo $row['d_id'] ?></td>
        <td><?php echo $row['d_name']?></td>
        <td><?php echo $row['d_email']?></td>
      <td><?php echo $row['d_password']?></td>
      <td><?php 
       $query1="select * from city where C_id =".$row['city'];
       $result1=mysqli_query($conn,$query1);
       $row1=mysqli_fetch_row($result1);
      echo $row1[1];
      ?></td>
      <td><?php echo $row['education']?></td>
      <td><?php 
       $query2="select * from specialist where id =".$row['specialization'];
       $result2=mysqli_query($conn,$query2);
       $row2=mysqli_fetch_row($result2);
      echo $row2[1];
      ?></td>
      <td>    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" width="80px" height="80px"/>
</td>
<?php 
echo "<td><a href='edit.php?id=".$row['d_id']."'>Edit</a>  |  <a href='Delete.php?id=".$row['d_id']."'>Delete</a></td>";
?>   
</tr>
        <?php }
        ?> 
  </tbody>
</table>
<?php 
include "../footer.php";
?>