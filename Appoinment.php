<?php
session_start();
include 'header.php';
include 'admin/connection.php';
$id=$_GET['id'];  // getting id from url
$_SESSION['dayy']=$id;
$query="select * from doctor where d_id=".$id;  //getting data from product table based on given id
$doc=mysqli_query($conn,$query); //executing query
$doct=mysqli_fetch_row($doc);  //fetching data
$patient=$_SESSION['pat'];
$query1="select * from patient where pid=".$patient;
$mariz=mysqli_query($conn,$query1); //executing query
$p=mysqli_fetch_row($mariz);  //fetching data


$query2="select * from dayss";
$dastiyabi=mysqli_query($conn,$query2); //executing query
//$dastiyab=mysqli_fetch_row($dastiyabi);  //fetching data
if(isset($_POST['btnSubmit']))
{
  $edate=strtotime($_POST['datee']); 
  $dat=date("Y-m-d",$edate);

$pname =$p[0];
$da =$_POST['dt'];
$querycheck="select * from appoinment where D_id='$id' AND P_id='$pname' AND Date='$dat'";
$resultcheck=mysqli_query($conn,$querycheck);
$rowcheck = mysqli_fetch_array($resultcheck);
$councheckt = mysqli_num_rows($resultcheck);
$querycheck1="select * from appoinment where D_id='$id'AND Date='$dat'";
$resultcheck1=mysqli_query($conn,$querycheck1);
$rowcheck1 = mysqli_fetch_array($resultcheck1);
$councheckt1 = mysqli_num_rows($resultcheck1);
if(!$councheckt){
  if($councheckt1 < 6){
  
    $queryf ="insert into appoinment(D_id,P_id,Avail_id,Date) VALUES ('$id','$pname','$da','$dat')";
    $resultf=mysqli_query($conn,$queryf);
   if($resultf)
     {
    echo "<script>alert('Thanks !Appointment Create');</script>";
    
      }
      else{
         echo "fail";
          $err= mysqli_error($conn);
         echo $err;
        }
      }
      else {
        echo "<script>alert('Limit Exceeds');</script>";
      }

  }
  else {
    echo "<script>alert('Appointment Already Created');</script>";
  }
}

?>

<div class="container">
  <h2>Vertical (basic) form</h2>
  <form method = "post">
    <div class="form-group">
      <label for="email">Doctor Name: </label>
      <input type="text" class="form-control" name="dname" value="<?php echo $doct[1]?>" placeholder="Enter email" name="email" readonly="readonly">
    </div>
    <div class="form-group">
      <label for="pwd">Patient Name:</label>
      <input type="text" class="form-control" id="pname" placeholder="Enter password" name="pwd" value ="<?php echo $p[1]?>" readonly="readonly">
    </div>
   
    <div class="form-group row">
      <label for="inputState" class="col-sm-2 col-form-label">Days And Timming</label>
      <div class="col-sm-10">
      <select id="daysid"  class="form-control" required>
      <option selected="selected" disabled="disabled" >SELECT DAY</option>
                                        <?php
        while($row=mysqli_fetch_array($dastiyabi))
        {
        ?>
            <option value=<?php echo $row['Id'];?>>
         <?php echo $row['day_name'];?>
            </option>
        <?php
        }
        ?>
                                         
                                        
      </select>
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Select Day:</label>
      <div class="col-sm-10">
      <select id="timeee" name="dt" required class="form-control">
    <option value="" >Select Day First</option>
    </select>
</div>
    </div>
   
    <div class="form-group row">
      <label for="da" class="col-sm-2 col-form-label"> Date :</label>
      <div class="col-sm-10">
      <input type="text" class="form-control" id="datepicker" name="datee" required >
      </div>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    
    <button type="submit" class="btn btn-default" name ="btnSubmit">Submit</button>
  </form>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/themes/smoothness/jquery-ui.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
<script>
    var mayday;
    $(document).ready(function(){
        $('#daysid').change(function(){
            mayday=$('#daysid').val();
            if(mayday){
    $.ajax({
        type:'POST',
        url:'time.php',
        data:'country_id='+mayday,
        success:function(html){
       //     alert(html);
            $('#timeee').html(html);
         //   $('#city').html('<option value="">Select state first</option>'); 
        }
    }); 
}
        });
    });
$(function() {
    $( "#datepicker" ).datepicker(
    {
        beforeShowDay: function(d) {
            var day = d.getDay();
            if(mayday==1)
            return [(day != 0 &&  day != 2&& day != 3&&  day != 4&&  day != 5 &&  day != 6)];
            if(mayday==2)
            return [(day != 0 &&  day != 1&& day != 3&&  day != 4&&  day != 5 &&  day != 6)];
            if(mayday==3)
            return [(day != 0 &&  day != 1&& day != 2&&  day != 4&&  day != 5 &&  day != 6)];
            if(mayday==4)
            return [(day != 0 &&  day != 1&& day != 2&&  day != 3&&  day != 5 &&  day != 6)];
            if(mayday==5)
            return [(day != 0 &&  day != 1&& day != 2&&  day != 3&&  day != 4 &&  day != 6)];
            if(mayday==6)
            return [(day != 0 &&  day != 1&& day != 2&&  day != 3&&  day != 4 &&  day != 5)];
            if(mayday==0)
            return [(day != 1 &&  day != 2&& day != 3&&  day != 4&&  day != 5 &&  day != 6)];
        }
    });
  });
  </script>