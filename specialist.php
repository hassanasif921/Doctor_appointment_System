<?php
include 'header.php';
include 'admin/connection.php';
$query="select * from specialist";
$result=mysqli_query($conn,$query);
?>

<div class="row">
<?php while($row=mysqli_fetch_array($result))
        {
            ?>
           

      <div class="col-sm-4" style="background-color:yellow; margin-bottom: 10px;border-left:5px solid white;;border-radius: 4px;background-color: #eff6f8; "><a style="font-weight:500;color:#014e78" href="sdoctor.php?id=<?php echo $row ['id'] ?>">   <?php echo $row['specialist'] ?></a></div>
     
     <?php 
        }
        ?>
        
    </div>