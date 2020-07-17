<?php 

include 'connection.php';
$query="Select * from patient";
$result=mysqli_query($conn,$query);
?>
<?php 
include "../adminpanel.php";
?>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">City</th>
      <th scope="col">Contact</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Gender</th>
      
    </tr>
  </thead>
  <tbody>
  <?php while($row=mysqli_fetch_array($result))
        {
            ?>
    <tr>
        <td><?php echo $row['pid'] ?></td>
        <td><?php echo $row['name']?></td>
        <td><?php 
       $query1="select * from city where C_id =".$row['city'];
       $result1=mysqli_query($conn,$query1);
       $row1=mysqli_fetch_row($result1);
      echo $row1[1];
      ?></td>
        <td><?php echo $row['contacts']?></td>
      <td><?php echo $row['username']?></td>
     
      <td><?php echo $row['password']?></td>
      <td><?php echo $row['Gender']?></td>

<td><a href='edit.php?id=<?php echo $row['pid'] ?>' class="btn btn-success ">Edit</a>  | <button class="btn btn-danger btndelete">Delete</button> |</td>

</tr>
        <?php }
        ?> 
  </tbody>
</table>


<div class="modal " id="deletemodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
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
<?php include "../adminpanelfooter.php"?>
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