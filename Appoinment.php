<?php 

include 'header.php';
include 'admin/connection.php';
$id=$_GET['id'];  // getting id from url
$query="select * from doctor where d_id=".$id;  //getting data from product table based on given id
$doc=mysqli_query($conn,$query); //executing query
$doct=mysqli_fetch_row($doc);  //fetching data
$patient=isset($_SESSION['pat']);
$query1="select * from patient where pid=".$patient;
$mariz=mysqli_query($conn,$query1); //executing query
$p=mysqli_fetch_row($mariz);  //fetching data


$query2="select * from availabe where D_id=".$id;
$dastiyabi=mysqli_query($conn,$query2); //executing query
//$dastiyab=mysqli_fetch_row($dastiyabi);  //fetching data
if(isset($_POST['btnSubmit']))
{

$dat=$_POST['datee'];
$pname =isset($p[1]);
$da =$_POST['dt'];
$queryf ="insert into appoinment(D_id,P_id,Avail_id,Date) VALUES ('$id','$pname','$da','$dat')";
$resultf=mysqli_query($conn,$queryf);
  if($resultf)
   {
     echo "Successfull";
    
   }else{
    echo "fail";
   $err= mysqli_error($conn);
   echo $err;
   }
}

?>

<div class="container">
  <h2>Vertical (basic) form</h2>
  <form method = "post">
    <div class="form-group">
      <label for="email">Doctor Name: </label>
      <input type="text" class="form-control" name="dname" value="<?php echo $doct[1]?>" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Patient Name:</label>
      <input type="text" class="form-control" id="pname" placeholder="Enter password" name="pwd" value ="<?php echo $p[1]?>">
    </div>
   
  <div class="form-group row">
      <label for="inputState" class="col-sm-2 col-form-label">Days And Timming</label>
      <div class="col-sm-10">
      <select id="inputState" name="dt" class="form-control">
     
                                        <?php
        while($row=mysqli_fetch_array($dastiyabi))
        {
        ?>
            <option value=<?php echo $row['id'];?>>
         <?php echo $row['days'] ."(" .$row['stime'] ." - ". $row['etime']. ")" ;?>
            </option>
        <?php
        }
        ?>
                                         
                                        
      </select>
      </div>
    </div>
    <div class="form-group">
      <label for="da">Date :</label>
      <input type="text" class="form-control" id="datepicker" name="datee">
      <p class="name"></p>

    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    
    <button type="submit" class="btn btn-default" name ="btnSubmit">Submit</button>
  </form>
</div>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script type="text/javascript"> 
$( document ).ready(function() {
            $("#datepicker").datepicker({
                dateFormat: "dd-mm-yy",
                onSelect: function(dateText, inst) {
                    var date = $.datepicker.parseDate(inst.settings.dateFormat || $.datepicker._defaults.dateFormat, dateText, inst.settings);
                    var dateText = $.datepicker.formatDate("DD", date, inst.settings);
                   
                    //Session["datee"] = dateText;
                   // sessionStorage.setItem("lastname", dateText);

                  // $.post("../sess.php", {"da": sessionStorage.getItem('lastname')});
                    $("p.name").html( "Day Name= " + dateText ); // Just the day of week
                   
                   

                    
                }
            });
        });
    </script>
   