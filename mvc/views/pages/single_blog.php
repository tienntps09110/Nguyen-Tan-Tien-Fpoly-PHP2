<?php foreach($data["author"]->fetchAll() as $row){ ?>
<section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1><?php echo $row["name"] ?></h1>
                    <nav class="d-flex align-items-center">
                        <a href="../home/all">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="category.html">Tác giả<span class="lnr lnr-arrow-right"></span></a>
                        <a href="../author/info/<?php echo $row["url_name"] ?>"><?php echo $row["name"] ?></a>
                        
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Blog Area =================-->
    <section class="blog_area single-post-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget author_widget">
                            <img class="author_img rounded-circle" src="images/author/<?php echo $row["image"] ?>" width="200px;" style="height:200px;     object-fit: cover;" alt="<?php echo $row["image"] ?>">
                            <h4><?php echo $row["name"] ?></h4>
                            <div class="blog_info text-left">
                                <ul class="blog_meta list">
                                    <li><b class="text-dark"><i class="lnr lnr-user"></i>Tên:</b> <?php echo $row["name"] ?></li>
                                    <li><b class="text-dark"><i class="lnr lnr-calendar-full"></i> Năm sinh:</b> <?php echo $row["date_birth"] ?></li>
                                    <li><b class="text-dark"><i class="lnr lnr-eye"></i> Quê quán:</b> <?php echo $row["home_town"] ?></li>
                                </ul>
                            </div>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Top 5 tác phẩm nổi bật</h3>
                            <?php foreach($data["books"]->fetchAll() as $row1){ ?>
                            <div class="media post_item">
                                <img src="images/books/<?php echo $row1["image"] ?>" style="width:2.5rem;" alt="post">
                                <div class="media-body">
                                    <a href="../books/detail/<?php echo $row1["url_book"] ?>">
                                        <h3><?php echo $row1["name"] ?></h3>
                                    </a>
                                    <p><?php echo number_format($row1["views"], 0, ',', '.') ?> views</p>
                                </div>
                            </div>
                            <?php } ?>
                        </aside> 
                    </div>
                </div>

                <div class="col-lg-8 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12 col-md-12 blog_details">
                            <h2><?php echo $row["name"] ?></h2>
                            <p class="excert">
                                <?php echo $row["info"] ?>
                            </p>
                            
                        </div>
                        
                    </div>
                    
                    
                    
                </div>
                
            </div>
        </div>
    </section>
<?php } ?>
    <!--================Blog Area =================-->