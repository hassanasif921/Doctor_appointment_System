<?php 
include '../connection.php';

if(isset($_POST['deletedata'])){
    $del=$_POST['delete_id'];
    $query="delete from patient where pid='$del'";
$result=mysqli_query($conn,$query);
if($result)
{
header('Location:index.php');
}else{
echo "Failed";
$err= mysqli_error($conn);
echo $err;
}

}
?>