<?php  
session_start();
include 'connection.php';


   $id= $_POST["city_id"];
   $sp= $_SESSION['citt'];;

   $query="select * from doctor where specialization='$id' AND city='$sp'";
$result=mysqli_query($conn,$query);
  

?>
<center>
<h1 style="font-family: 'Rowdies', cursive;color:#2c79f5">Doctors In  <?php 
    
    $queryc="select * from specialist where id =".$id;
    $resultc=mysqli_query($conn,$queryc);
    $rowc=mysqli_fetch_row($resultc);
  echo $rowc[1];
    ?></h1>
</center>

<div class="row" >

<?php while($row=mysqli_fetch_array($result))
        {
            ?>
<div class="col-sm-3">
<div class="card card-block">
  <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
  <div class="card-block">
    <h5 class="card-title" > <?php echo $row['d_name']?></h5>
    <p class="card-text" >City : <?php 
    
    $query1="select * from city where C_id =".$row['city'];
    $result1=mysqli_query($conn,$query1);
    $row1=mysqli_fetch_row($result1);
  echo $row1[1];
    ?>
    <br>
    Education : <?php echo $row['education']?>
    <br>
    Specialist :
    <?php 
    
    $query1="select * from specialist where id =".$row['specialization'];
    $result1=mysqli_query($conn,$query1);
    $row1=mysqli_fetch_row($result1);
  echo $row1[1];
    ?>
    <br>
    </p>
    
    <a href='appoinment.php?id=<?php echo $row ['d_id'] ?>' class="btn btn-primary">Book Appoinment</a>
    
  </div>
  </div>
</div>
<?php
        }
             
         ?> 
</div>  
