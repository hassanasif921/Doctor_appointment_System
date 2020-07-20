<?php 
 include '../adminpanel.php';
include '../connection.php';
$querydoctor = "Select * from doctor";
$resultd=mysqli_query($conn,$querydoctor);

   
   
   $countd = mysqli_num_rows($resultd);

   $querypa = "Select * from patient";
$resultp=mysqli_query($conn,$querypa);
   $countp = mysqli_num_rows($resultp);

   $queryc = "Select * from city";
   $resultc=mysqli_query($conn,$queryc);
      $countc = mysqli_num_rows($resultc);
 $querycpont = "Select * from contact";
 $resultcont=mysqli_query($conn,$querycpont);
?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Numer Of doctor</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $countd?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-user-md fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Number Of Patients</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $countp?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-wheelchair-alt fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Number Of City</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $countc?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-map-marker fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Pending Requests Card Example -->
          
          </div>
<center>
          <!-- Content Row -->
          <h1>User's Messages</h1>

          <div class="row">
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Last Name</th>
                <th>Messagr</th>
                <th>Email</th>
                <th>Phone Number</th>
            
            </tr>
        </thead>
        <tbody>
        <?php while($rowcont=mysqli_fetch_array($resultcont))
        {
            ?>
        <tr>
                
                <td><?php echo $rowcont['First_name']?></td>
                <td><?php echo $rowcont['Last_name']?></td>
                <td><?php echo $rowcont['Message']?></td>
                <td><?php echo $rowcont['Email']?></td>
                <td><?php echo $rowcont['Cell_No']?></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
        <tfoot>
            <tr>
            <th>Name</th>
            <th>Last Name</th>
                <th>Messagr</th>
                <th>Email</th>
                <th>Phone Number</th>
            </tr>
        </tfoot>
    </table>
          </div>
          </center>

          <!-- Content Row -->
    
          <?php 
 include '../adminpanelfooter.php';

?>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );</script>