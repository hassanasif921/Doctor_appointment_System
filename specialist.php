<?php
include 'header.php';
include 'admin/connection.php';
$query="select * from specialist";
$result=mysqli_query($conn,$query);
?>

    <section class="">
            <div class="container" style="padding-top: 35px;">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h3 class="sc_title margin-bottom-large">specialist</h3>
                    </div>
                </div>
                <div class="row text-center">
                <?php while($rowservice=mysqli_fetch_array($result))
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