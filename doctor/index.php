<?php 
include "../adminpanel.php";
include 'connection.php';
$query="Select * from doctor";
$result=mysqli_query($conn,$query);
?>
<div class="container-fluid">
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

<td><a href='edit.php?id=<?php echo $row['d_id'] ?>' class="btn btn-success ">Edit</a>  | <button class="btn btn-danger btndelete">Delete</button> |<a href='view.php?id=<?php echo $row['d_id'] ?>' class="btn btn-success ">Viiew</a> </td>

</tr>
        <?php }
        ?> 
  </tbody>
</table>
</div>
<?php include "../adminpanelfooter.php"?>

<div class="modal fade" id="deletemodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="delete.php" method="POST">
      <div class="modal-body">
      
        <input type="hidden" name="delete_id" id="delete_id"> 
          <h4>Do You Want To Delete This</h4>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
        <button type="submit" name="deletedata" class="btn btn-danger">Yes Delete</button>
      </div>
      </form>
    </div>
  </div>
</div>
<script type="text/JavaScript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" ></script>
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script>
$(document).ready(function () {

  $('.btndelete').on('click',function () {
    $('#deletemodel').modal('show');
    $tr =$(this).closest('tr');
    var data =$tr.children("td").map(function(){
      return $(this).text();
    }).get();
    console.log(data);
    $('#delete_id').val(data[0]);
  });
});
</script>