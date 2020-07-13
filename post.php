
<?php 
$id=$_GET['id'];

include 'connection.php';
$query="Select * from blog where id=".$id;
$result=mysqli_query($conn,$query);
$row =mysqli_fetch_row($result);
include "header.php";
?>
<div class="container-fluid">
<div class="row">
        <div class="col-sm-12">
      <h1 style="font-family: 'Fondamento', cursive;"><?php echo $row[1] ?></h1>
      <br>
      <h6>Date : <?php echo $row[3] ?></h6>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row[4]); ?>" width="100%" height="500px">

        </div>
    </div>
    <hr style="height:2px;border-width:0;color:gray;background-color:gray">

    <div class="row">
        <div class="col-sm-12">
        <p style="font-family: 'Galada', cursive;font-size:20px"> <?php echo $row[2] ?></p>

        </div>
    </div>
</div>
<?php 
include "footer.php";
?>