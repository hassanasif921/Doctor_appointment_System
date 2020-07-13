<?php include "header.php";

include 'connection.php';
$query="Select * from blog";
$result=mysqli_query($conn,$query);
?>
<section class="heading breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <h1 class="page_title">All Posts</h1>
                    </div>
                    <div class="col-xs-6">
                        <div class="breadcrumbs text-right">
                            <a class="breadcrumbs_item home" href="index.html">Home</a><span class="breadcrumbs_delimiter icon-right-open"></span><span class="breadcrumbs_item current">All Posts</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<section id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-8">
                        <div class="content">
                        <?php while($row=mysqli_fetch_array($result))
        {
            ?>
                            <article class="post_item post_item_excerpt">
                               
                                <h1 class="post_title" style="font-family: 'Fondamento', cursive;"><?php echo $row['b_heading']?></h1>

                                <div class="post_info">
                                    <span class="post_info_item post_info_posted"><a href="#" class="post_info_date"><?php echo $row['b_date']?></a></span>
                                  
                                </div>
                                <div class="post_featured">
                                    <div class="post_thumb" data-image="Depositphotos_1761864_original-750x422.jpg" data-title="Missing Teeth Predict Strokes">
                                        <a class="hover_icon hover_icon_link" href="#"><img class="wp-post-image" width="750" height="422" alt="Missing Teeth Predict Strokes" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"></a>
                                    </div>
                                </div>

                                <div class="post_content clearfix">
                                    <div class="post_descr">
                                        <p><?php echo $row['b_heading']?></h5>
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
                                        <a href="post.php?id=<?php echo $row['id'] ?>" class="btn btn-default">Read More</a>
                                    </div>
                                </div>
                            </article>
<?php 
        }
        ?>
                     

                        

                            <nav id="pagination" class="pagination_wrap pagination_pages" role="navigation">
                                <span class="pager_current active ">1</span>
                                <a href="#" class="">2</a>
                                <a href="#" class="">3</a>
                                <a href="#" class="pager_next "></a>
                                <a href="#" class="pager_last "></a>
                            </nav>
                        </div>
                    </div>
                 
                </div>
            </div>
        </section>
        <?php include "footer.php"?>
