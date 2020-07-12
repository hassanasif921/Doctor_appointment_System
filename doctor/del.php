<?php 
include "connection.php";


    $del=$_GET['id'];
    $query="delete from availabe where id='$del'";
$result=mysqli_query($conn,$query);
if($result)
{
header('Location:../index.php');
}else{
echo "Failed";
$err= mysqli_error($conn);
echo $err;
}


?>