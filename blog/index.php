<?php 
session_start();

include '../adminpanel.php';
include '../connection.php';
$query="Select * from blog";
$result=mysqli_query($conn,$query);
?>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Blog  ID</th>
                <th>Blog  Image</th>

                <th>Blog Heading</th>
                <th>Date</th>
                <th>Edit</th>
                <th>Delete</th>
                
            </tr>
        </thead>
        <tbody>
        <?php while($row=mysqli_fetch_array($result))
        {
            ?>
        <tr>
                <td><?php echo $row['id'] ?></td>
                <td>    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" width="200px" height="200px" id="blah"/>
</td>
                <td>
                <?php echo $row['b_heading'] ?>
                </td>
                <td><?php echo $row['b_date'] ?></td>
               <td> <a href='edit.php?id=<?php echo $row['id'] ?>' class="btn btn-success ">Edit</a> </td>
               <td>  <a href='delete.php?id=<?php echo $row['id'] ?>' class="btn btn-danger ">Delte</a> </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
        <tfoot>
            <tr>
            <th>Blog  ID</th>
                <th>Blog  Image</th>

                <th>Blog Heading</th>
                <th>Date</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </tfoot>
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
    <?php 
include "../adminpanelfooter.php";
?>
<script type="text/JavaScript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" ></script>
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>



<script>
$(document).ready(function() {
    $('#example').DataTable();
} );</script>
