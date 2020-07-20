<?php
session_start();
include 'connection.php';
  // getting id from url
 $id=$_GET['id'];
 $_SESSION['citt']=$id;
 $query1c="select * from specialist";
 $result1c=mysqli_query($conn,$query1c);
  $s=isset($_SESSION['citypat']);
  if($s ){
  $query="select * from doctor where specialization='$id' AND city='$s'";
$result=mysqli_query($conn,$query);
  }
else{
  $query="select * from doctor where city='$id'";
  $result=mysqli_query($conn,$query);
  }

include 'header.php';
?>
 <div class="form-group row">
      <label for="inputState" class="col-sm-2 col-form-label">Sort Doctor By Specialist</label>
      <div class="col-sm-10">
      <select id="daysid" name="city" class="form-control" required>
     <option selected="selected" disabled="disabled">Select specialization</option>
                                        <?php
        while($row1c=mysqli_fetch_array($result1c))
        {
        ?>
            <option value=<?php echo $row1c['id'];?>>
            <?php echo $row1c['specialist'];?>
            </option>
        <?php
        }
        ?>
                                         
                                        
      </select>
      </div>
    </div>
    <div id="cit">
<div class="row" >

<?php while($row=mysqli_fetch_array($result))
        {
            ?>
<div class="col-sm-3">
<div class="card card-block">
  <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
  <div class="card-block">
    <h3 class="card-title" > <?php echo $row['d_name']?></h3>
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
          </div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/themes/smoothness/jquery-ui.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
<script>
    var mayday ;
    $(document).ready(function(){
        $('#daysid').change(function(){
            mayday=$('#daysid').val();
           //alert(mayday);
            if(mayday){
    $.ajax({
        type:'POST',
        url:'filldoctorbyspe.php',
        data:'city_id='+mayday,
        success:function(html){
       //     alert(html);
            $('#cit').html(html);
         //   $('#city').html('<option value="">Select state first</option>'); 
        }
    }); 
}
        });
    });
    </script>
<?php
//include 'footer.php';

?>