<?php
session_start();
include 'admin/connection.php';
  // getting id from url
  
$query="select * from doctor";
$result=mysqli_query($conn,$query);
$queryse="select * from specialist";
$resultse=mysqli_query($conn,$queryse);
$queryci="select * from city";
$resultci=mysqli_query($conn,$queryci);
include 'header.php';
?>

          <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-primary" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          All Doctors
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
      <div class="row">
<?php while($row=mysqli_fetch_array($result))
        {
            ?>
<div class="col-sm-3">
<div class="card card-block">
  <img class="card-img-top" data-src="holder.js/100px180/" alt="100%x180" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
  <div class="card-block">
  <a href='profile.php?id=<?php echo $row ['d_id'] ?>'> <h5 class="card-title" > <?php echo $row['d_name']?></h5></a>
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
   

    
  </div>
  </div>
</div>

<?php
        }
             
         ?>   
          </div>

      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-primary collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Search Doctor By Specialist
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body" style="background-color:#e3dfde">
      <section class="">
            <div class="container" style="padding-top: 35px;">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h3 class="sc_title margin-bottom-large">Our Services</h3>
                    </div>
                </div>
                <div class="row text-center">
                <?php while($rowservice=mysqli_fetch_array($resultse))
        {
            ?>
                    <div class="col-md-4 col-sm-6">
                        <div class="sc_services sc_services_style_1">
                          
                        <a href="sdoctor.php?id=<?php echo $rowservice ['id'] ?>"><h5 class="sc_title "><?php echo $rowservice['specialist']?></h5></a>
                            
                        </div>
                    </div>
                   <?php 
        }
        ?>
                </div>
            </div>
        </section>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-primary collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Search Dotor By City
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
      <div class="card-body" style="background-color:#e3dfde">
      <section class="">
            <div class="container" style="padding-top: 35px;">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h3 class="sc_title margin-bottom-large">Cities</h3>
                    </div>
                </div>
                <div class="row text-center">
                <?php while($rowci=mysqli_fetch_array($resultci))
        {
            ?>
                    <div class="col-md-4 col-sm-6">
                        <div class="sc_services sc_services_style_1">
                          
                        <a href="city.php?id=<?php echo $rowci ['C_id'] ?>"><h5 class="sc_title "><?php echo $rowci['C_name']?></h5></a>
                            
                        </div>
                    </div>
                   <?php 
        }
        ?>
                </div>
            </div>
        </section>
      </div>      </div>
    </div>
  </div>
</div>

  
 
  
  
  
<?php
//include 'footer.php';

?>