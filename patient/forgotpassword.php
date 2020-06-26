<?php
include '../header.php';

?>
<br>
<br>
<br>
<center>
<h1 style="color:blue">Forgot Password</h1>

</center>
<form method="post">
<div class="form-group row">
    <label for="Named" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="" placeholder="Email" name="email" >
    </div>
  </div>
    <input type="submit" name="btnSubmit" class="btn btn-success"/>
    </form>
    <?php
include '../footer.php';

?>
<?php
include 'connection.php';
if(isset($_POST['btnSubmit']))
{
   $usern =$_POST['email'];
  
   $query = "Select * from patient where username='$usern'";
   $result=mysqli_query($conn,$query);
   $row = mysqli_fetch_array($result);
      
      
      $count = mysqli_num_rows($result);
   if($count)
   {
    $to      = $usern;
    $from      = "hassanasif302672@gmail.com";
    $headers = 'From: ' .$from . "\r\n" . 'Reply To :' .$from . "\r\n" .'X-Mailer :PHP /' .phpversion();
    $subject = 'Hospital Management System';
    $body = 'Hello '.$row[1].' Your Password Is '.$row[5].' Please Change Your Password For Security Reasons';
    
    
    $send = mail($to, $subject, $body, $headers);
    if($send){
        echo "Mail Send";
    }
    else {
        echo "mail could not send to $to address";
    }
   }
}
?>
