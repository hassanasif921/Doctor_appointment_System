<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="text" name="email" />
    <input type="submit" name="btnSubmit"/>
    </form>
</body>
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
</html>