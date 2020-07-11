<?php
include '../header.php';
include '../connection.php';
$query="Select * from blog";
$result=mysqli_query($conn,$query);
?>


    <div class="card">
    <?php while($row=mysqli_fetch_array($result))
        {
            ?>
      <div class="row">
                <div class="col-sm-3">
                    <div class="card-body">
       <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" width="100%" height="200px">
                    </div>
                </div>  
            <div class="col-sm-9">
   <div class="card-body">
   <h5 class="card-title"><?php echo $row['b_heading']?></h5>
        <p class="card-text"><?php //echo $row['b_content'] 
        $string = strip_tags($row['b_content']);
        if (strlen($string) > 20) {
        
            // truncate string
            $stringCut = substr($string, 0, 500);
            $endPoint = strrpos($stringCut, ' ');
        
            //if the string doesn't contain any space then it will cut without word basis.
            $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
            $string .= '... <a href="post.php">Read More</a>';
        }
        echo $string;?></p>
        <a href='post.php?id=<?php echo $row['id'] ?>' class="btn btn-primary">Read More</a>     </div>
             </div>      
      </div>
      <?php 
        }
        ?>
    </div>
  
<?php
include '../footer.php';

?>