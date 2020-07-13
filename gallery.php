<?php 
include "header.php";
include 'connection.php';
$query="Select * from gallery";
$result=mysqli_query($conn,$query);

?>
        <section class="heading breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <h1 class="page_title">Gallery</h1>
                    </div>
                    <div class="col-xs-6">
                        <div class="breadcrumbs text-right">
                            <a class="breadcrumbs_item home" href="index.html">Home</a><span class="breadcrumbs_delimiter icon-right-open"></span><span class="breadcrumbs_item current">Gallery</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <section id="gellery" class="container page masonry">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="content">
                        <?php while($row=mysqli_fetch_array($result))
        {
            ?>
                            <div id="isotope" class="masonry grid gallery five_columns isotope no_padding portfolioWrap">
                                <div class="isotopeElement">
                                    <article class="post_item post_item_masonry">
                                        <h5 class="post_title"><a href="#"><span class="post_icon icon-book-2"></span><?php echo $row['image_name']?></a>
                                        </h5>
                                        <div class="post_featured">
                                            <div class="post_thumb" data-image="Depositphotos_5724724_original.jpg" data-title="<?php echo $row['image_name']?>">
                                            <img class="wp-post-image" alt="<?php echo $row['image_name']?>" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['gallery_image']); ?>">
                                                <a class="" href="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['gallery_image']); ?>" title="How to Prevent Dental Caries" rel="magnific">
                                                    <span class="grid_hover_icon icon-search"></span>
                                                </a>
                                                <a title="Cillum dolore cillum" href="#">
                                                    <span class="grid_hover_icon icon-link"></span>
                                                </a>
                                                <div class="hover_shadow"></div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                         </div>
        <?php }?>

                        </div>
                    </div>
                </div>
            </section>
        </section>
        <?php 
include "footer.php"
?>