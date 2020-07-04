<?php 
$id=$_GET['id'];

include 'connection.php';
$query="Select * from patient where pid=".$id;
$result=mysqli_query($conn,$query);
$row =mysqli_fetch_row($result);

$query2="Select * from city";
$result2=mysqli_query($conn,$query2);


 if(isset($_POST['btnSubmit']))
{
   // $images=$_FILES['images']['tmp_name'];
  // $img=addslashes(file_get_contents($images));
    $pname=$_POST['paname'];
    $contactp=$_POST['contactp'];
    $usernamep=$_POST['email'];
    $passwordp=$_POST['password'];
    $citypa=$_POST['city'];
    $genderps=$_POST['gender'];
  //  $query1="insert into patient(name, city, contact, username, password, Gender) VALUES ('$pname','$citypa','$contactp','$usernamep','$passwordp','$genderps')";
    $query1=" update patient set name='$pname',city='$citypa',contacts='$contactp',username='$usernamep',password='$passwordp',Gender='$genderps' where pid='$id'";
   $result1=mysqli_query($conn,$query1);
   
   if($result1)
   {
       
    header("Location:index.php");
}else{
 echo "fail";
$err= mysqli_error($conn);
echo $err;
}
}
?>
<?php 
include "../adminpanel.php";
?>
<form method="post">
  <div class="form-group row">
    <label for="n" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="paname" id="n"  value="<?php echo $row[1];?>" > 
    </div>
</div>
    <div class="form-group row">
      <label for="inputState" class="col-sm-2 col-form-label">State</label>
      <div class="col-sm-10">
      <select id="inputState" name="city" class="form-control">
     
                                     
      <?php
        while($rowc=mysqli_fetch_array($result2))
        {
            
            if($row[2]==$rowc['C_id'])
            {
        ?>
            <option value=<?php echo $rowc['C_id'];?> selected>
            <?php echo $rowc['C_name']; ?> 
           
            </option>
            <?php 
            }
            else {
            ?>
             <option value=<?php echo $rowc['C_id'];?> >
            <?php echo $rowc['C_name']; ?> 
           
            </option>

        <?php
            }
        }
        ?>
                                         
                                        
      </select>
      </div>
    </div>   
    
    <div class="form-group row">
    <label for="c" class="col-sm-2 col-form-label">Contact</label>
    <div class="col-sm-10">
      <input type="text" name="contactp" class="form-control" id="c" placeholder="Password" value="<?php echo $row[6];?>">
    </div>
  </div> 
  
  <div class="form-group row">
    <label for="e" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input name="email" type="Text" class="form-control" id="e" placeholder="Password" value="<?php echo $row[3];?>">
    </div>
  </div> 
    <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password" value="<?php echo $row[4];?>">
    </div>
  </div>
  <div class="form-group row">
  <label for="gender" class="col-sm-2 col-form-label">Gender</label>
    <div class="col-sm-10">
        <?php
        $m="Male";
        $f="Female";
          if($row[5]== $m)
          {
              ?>
    <select name="gender" class="form-control">
                                            <option disabled="disabled" >Select Gender</option>
                                            <option  selected="selected">Male</option>
                                            <option >Female</option>
                                         
                                        </select>

         <?php
          }
        
                        else 
                        {
                        ?>
                        <select name="gender" class="form-control">
                                            <option disabled="disabled" >Select Gender</option>
                                            <option  >Male</option>
                                            <option  selected="selected">Female</option>
                                         
                                        </select>
                                        <?php 
                        }?>

    </div>
    </div>
  
  <div class="form-group row">
    <div class="col-sm-12">
      <button type="submit" class="btn btn-primary form-control" name="btnSubmit" >Sign in</button>
    </div>
  </div>
</form>