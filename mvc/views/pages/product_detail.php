<?php foreach($data["detail"]->fetchAll() as $row){ ?>
<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1><?php echo $row["name"] ?></h1>
					<nav class="d-flex align-items-center">
						<a href="../home/all&page=1">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="../books/all&page=1">Shop<span class="lnr lnr-arrow-right"></span></a>
						<a href="../books/detail/<?php echo $row["url_book"] ?>"><?php echo $row["name"] ?></a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Single Product Area =================-->
	<div class="product_image_area">
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-6">
				
					<div class="s_Product_carousel">
						<div class="single-prd-item">
						<a href="images/books/<?php echo $row["image"] ?>" class="img-pop-up"><img class="img-fluid" style="height: 26rem; object-fit: contain;" src="images/books/<?php echo $row["image"] ?>" alt=""></a>
						</div>
						<?php foreach($data["image"]->fetchAll() as $rows){ ?>
							<div class="single-prd-item">
								<a href="images/books/<?php echo $rows["image_name"] ?>" class="img-pop-up">
									<img class="img-fluid" style="height: 26rem; object-fit: contain;" src="images/books/<?php echo $rows["image_name"] ?>" alt="">
								</a>
							</div>
						<?php }?>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
						<h3><?php echo $row["name"] ?></h3>
						<?php  
							$change_money = number_format($row["price"], 0, ',', '.');
							if($row["sale_price"] >0){
								$sale =$row["price"]-($row["price"] * ($row["sale_price"] / 100));
								$change_money1 = number_format($sale, 0, ',', '.');
								echo "<h2>$change_money1 đ</h2>";
								echo "<h4> <i class=\"text-success\" style=\"text-decoration: line-through; color: #cccccc;\">$change_money đ</i> <b class=\"text-danger\">- $row[sale_price] %</b></h4>";
							}else{
								echo "<h6>$change_money đ</h6>";
							}
						?>
						<br>
						<ul class="list">
						<?php foreach($data["typename"]->fetchAll() as $rows5){ ?>
							<li><h5><span>Thể loại</span>:<a class="active" href="../books/type/<?php echo $rows5["url_name"]; ?>"> <?php echo $rows5["name"]; } ?>.</a></h5></li>
						<?php foreach($data["author"]->fetchAll() as $rows1){ ?>
							<li><h5><span>Tác giả</span>:<a class="text-success" href="../author/info/<?php echo $rows1["url_name"] ?>"> <?php echo $rows1["name"] ?>.</a></h5></li>
						<?php foreach($data["company"]->fetchAll() as $rows2){ ?>
							<li><span>Công ty phát hành</span> : <?php echo $rows2["name"] ?>.</li>
							<li><span>Còn</span> : <?php echo $row["total"] ?> cuốn.</li>
							<li class="text-primary"><span>Lượt xem</span> : <?php echo number_format($row["views"], 0, ',', '.')?> views.</li>
						</ul>
						<hr>
						<!-- <div class="product_count">
							<label for="qty">Số lượng:</label>
							<input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
							<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
							 class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
							<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
							 class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
						</div> -->
						<div id="cmt"></div>
						<div class="card_area d-flex align-items-center">
							<a class="primary-btn text-light" name="users" onclick="showUser(<?php echo $row['id']; ?>)">Add to Cart</a>
							<a class="icon_btn" href="#"><i class="lnr lnr lnr-diamond"></i></a>
							<a class="icon_btn" href="#"><i class="lnr lnr lnr-heart"></i></a>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!--================End Single Product Area =================-->

	<!--================Product Description Area =================-->
	<section class="product_description_area">
		<div class="container">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Mô tả</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
					 aria-selected="false">Thông tin</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
					 aria-selected="false">Bình luận</a>
				</li>	
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
				<blockquote class="generic-blockquote"><?php echo $row["content"] ?></blockquote>
					<h6 class="text-center text-danger">Nguyễn Tấn Tiền</h6>
				</div>
				<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<td>
										<h5>Tên sách</h5>
									</td>
									<td>
										<h5><?php echo $row["name"] ?></h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Số trang</h5>
									</td>
									<td>
										<h5><?php echo $row["pages"] ?> trang</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Nhà xuất bản</h5>
									</td>
									<td>
										<h5><?php echo $row["publish_house"] ?></h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Ngày xuất bản</h5>
									</td>
									<td>
										<h5><?php echo $row["date_publish"] ?></h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Loại bìa</h5>
									</td>
									<td>
										<h5><?php echo $row["cover_type"] ?></h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Kích thước</h5>
									</td>
									<td>
										<h5><?php echo $row["width_height"] ?> cm</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Tác giả</h5>
									</td>
									<td>
										<h5><?php echo $rows1["name"] ?></h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Công ty sản xuất</h5>
									</td>
									<td>
										<h5><?php echo $rows2["name"] ?></h5>
										<?php } ?>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<?php } ?>
				<div class="tab-pane fade show active" id="contact" role="tabpanel" aria-labelledby="contact-tab">
					<div class="row">
						<div class="col-lg-6">
							<div class="comment_list">
							<?php foreach($data["comment"]->fetchAll() as $rows3){ ?>
								<!-- Start comment -->
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img class="rounded-circle" width="60rem" src="images/users/<?php echo $rows3["image"] ?>" alt="<?php echo $rows3["username"] ?>">
										</div>
										<div class="media-body">
											<h4><?php echo $rows3["username"] ?></h4>
											<h5><?php echo $rows3["created_at"] ?></h5>
										</div>
									</div>
									<p><?php echo $rows3["content"] ?></p>
								</div>
								<!-- End comment -->
							<?php } ?>
							</div>
						</div>
						<!-- POST COMMENT -->
						<div class="col-lg-6">
							<?php if(isset($_SESSION['user'])){ ?>
								<div class="review_box">
									<h4>Đăng tải bình luận</h4>
									<form class="row contact_form" action="../books/post_comment" method="post" id="contactForm" novalidate="novalidate">
										<div class="col-md-12">
											<div class="form-group">
												<input type="hidden" name="id_book" value="<?php echo $row["id"] ?>">
												<textarea class="form-control" name="comment" id="comment" rows="1" placeholder="Nội dung"></textarea>
											</div>
										</div>
										<div class="col-md-12 text-right">
											<button type="submit" class="btn primary-btn">Đăng</button>
										</div>
									</form>
								</div>
							<?php }else{ ?>
								<h4 class="text-center"><a href="../home/login">Đăng nhập</a> để bình luận.</h4>
							<?php } ?>
						</div>
						<!-- END POST COMMENT -->
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!--================End Product Description Area =================-->
<?php } ?>
	<!-- Start related-product Area -->
	<section class="related-product-area section_gap_bottom">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<div class="section-title">
						<h1>Cùng danh mục</h1>
						<p>Hãy mua sách ngay hôm nay để có ưu đãi tốt nhất.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-9">
					<div class="row">
						<?php foreach($data["sametype"]->fetchAll() as $rows4){ ?>		
						<!-- Start Muc giong nhau -->
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<img class="sameimg" src="images/books/<?php echo $rows4["image"] ?>" alt="<?php echo $rows4["name"] ?>">
								<div class="desc">
									<a href="../books/detail/<?php echo $rows4["url_book"] ?>" class="title"><?php echo $rows4["name"] ?></a>
									<div class="price">
										<?php  
											$change_money = number_format($rows4["price"], 0, ',', '.');
											if($rows4["sale_price"] >0){
												$sale =$rows4["price"]-($rows4["price"] * ($rows4["sale_price"] / 100));
												$change_money1 = number_format($sale, 0, ',', '.');
												echo "<h5>$change_money1 đ</h5>";
												echo "<h6> <i class=\"text-success\" style=\"text-decoration: line-through; color: #cccccc;\">$change_money đ</i> <b class=\"text-danger\">- $rows4[sale_price] %</b></h6>";
											}else{
												echo "<h5>$change_money đ</h5>";
											}
										?>
									</div>
								</div>
							</div>
						</div>
						<!-- End Muc giong nhau -->
						<?php } ?>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="ctg-right">
						<a href="#" target="_blank">
							<img class="img-fluid d-block mx-auto" src="img/category/c5.jpg" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End related-product Area -->