<section class="banner-area">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-start">
				<div class="col-lg-12">
					<div class="active-banner-slider owl-carousel">

						<!-- single-slide -->
						<?php foreach($data["ramdom"]->fetchAll() as $rows){ ?>
						<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5 col-md-6">
								<div class="banner-content">
									<h2><?php echo $rows["name"] ?></h2>
									<p class="cuttext"><?php echo $rows["content"] ?></p>
									<div class="add-bag d-flex align-items-center">
									<a href="../books/detail/<?php echo $rows["url_book"] ?>" class="genric-btn info circle arrow">Xem chi tiết<span class="lnr lnr-arrow-right"></span></a>
			
								</div>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="banner-img">
								<img class="img-fluid" style="margin-top: 8rem !important; margin-left: 15rem !important; width: 35% !important; box-shadow: 7px 7px 15px 5px #000000 !important;" src="images/books/<?php echo $rows["image"] ?>" alt="">
							</div>
							<br><br><br>
						</div>
						</div>
						<?php } ?>
						<!--End single-slide -->

					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- start features Area -->
	<section class="features-area section_gap">
		<div class="container">
			<div class="row features-inner">
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon1.png" alt="">
						</div>
						<h6>Miễn phí giao hàng</h6>
						<p>Miễn phí với giao hàng tiết kiệm</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon2.png" alt="">
						</div>
						<h6>Chính sách hoàn trả</h6>
						<p>Miễn phí khi gửi đơn hoàn trả</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon3.png" alt="">
						</div>
						<h6>Hỗ trợ 24/7</h6>
						<p>Tổng đài giải đáp 0902318374</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon4.png" alt="">
						</div>
						<h6>Thanh toán an toàn</h6>
						<p>Nhận hàng mới trả tiền</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end features Area -->

	<!-- Start category Area -->
	<section class="category-area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 col-md-12">
					<div class="row">
						<div class="col-lg-8 col-md-8">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="img/category/c1.jpg" alt="">
								<a href="../books/type/tieu-thuyet&page=1#top" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">Tiểu thuyết</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="img/category/c2.jpg" alt="">
								<a href="../books/type/tinh-yeu&page=1#top" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">Tình yêu</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="img/category/c3.jpg" alt="">
								<a href="../books/type/kinh-nghiem-song&page=1#top" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">Kinh nghiệm sống</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-8 col-md-8">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="img/category/c4.jpg" alt="">
								<a href="../books/type/van-hoc&page=1#top" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">Văn học</h6>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-deal">
						<div class="overlay"></div>
						<img class="img-fluid w-100" src="img/category/c5.jpg" alt="">
						<a href="../books/all&page=1#top" target="_blank">
							<div class="deal-details">
								<h6 class="deal-title">Tất cả loại sách</h6>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End category Area -->

	<!-- start product Area -->
	<section class="owl-carousel active-product-area section_gap">
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Tình yêu</h1>
							<p>Thể loại sách tình yêu tuyển chọn hay nhất.</p>
						</div>
					</div>
				</div>
				<div class="row">

					<!-- single product -->
					<?php foreach($data["books"]->fetchAll() as $row){ ?>
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid imghome" src="images/books/<?php echo $row["image"] ?>" alt="">
							<div class="product-details">
								<h6><?php echo $row["name"] ?></h6>
								<div class="price">
									<?php  
										$change_money = number_format($row["price"], 0, ',', '.');
										if($row["sale_price"] >0){
											$sale =$row["price"]-($row["price"] * ($row["sale_price"] / 100));
											$change_money1 = number_format($sale, 0, ',', '.');
											echo "<h6>$change_money1 đ</h6>";
											echo "<h6 class=\"l-through\">$change_money đ</h6>";
										}else{
											echo "<h6>$change_money đ</h6>";
										}
									?>
								</div>
								<div class="prd-bottom">
									<a name="users" onclick="showUser(<?php echo $row['id']; ?>)" class="social-info" style="cursor: pointer !important;">
										<span class="ti-bag"></span>
										<p class="hover-text">Thêm</p>
									</a>
									<a href="../books/detail/<?php echo $row["url_book"] ?>" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">Xem</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
					<!-- end single product -->
				</div>
				<a href="../books/type/tinh-yeu&page=1#top" class="btn btn-info float-right">Xem tất cả</a>
			</div>
		</div>
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Giảm giá</h1>
							<p>Các loại sách có giá tốt nhất.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- single product -->
					<?php foreach($data["books_sale"]->fetchAll() as $row){ ?>
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid imghome" src="images/books/<?php echo $row["image"] ?>" alt="">
							<div class="product-details">
								<h6><?php echo $row["name"] ?></h6>
								<div class="price">
									<?php  
										$change_money = number_format($row["price"], 0, ',', '.');
										if($row["sale_price"] >0){
											$sale =$row["price"]-($row["price"] * ($row["sale_price"] / 100));
											$change_money1 = number_format($sale, 0, ',', '.');
											echo "<h6>$change_money1 đ</h6>";
											echo "<h6 class=\"l-through\">$change_money đ</h6>";
										}else{
											echo "<h6>$change_money đ</h6>";
										}
									?>
								</div>
								<div class="prd-bottom">
									<a name="users" onclick="showUser(<?php echo $row['id']; ?>)" class="social-info" style="cursor: pointer !important;">
										<span class="ti-bag"></span>
										<p class="hover-text">Thêm</p>
									</a>
									<a href="../books/detail/<?php echo $row["url_book"] ?>" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">Xem</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
					<!-- end single product -->
				</div>
				<a href="../books/all&page=1#top" class="btn btn-info float-right">Xem tất cả</a>
			</div>
		</div>
	</section>
	<!-- end product Area -->

	<!-- Start exclusive deal Area -->
	<section class="exclusive-deal-area">
		<div class="container-fluid">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-6 no-padding exclusive-left">
					<div class="row clock_sec clockdiv" id="clockdiv">
						<div class="col-lg-12">
							<h1>Exclusive Hot Deal Ends Soon!</h1>
							<p>Who are in extremely love with eco friendly system.</p>
						</div>
						<div class="col-lg-12">
							<div class="row clock-wrap">
								<div class="col clockinner1 clockinner">
									<h1 class="days">150</h1>
									<span class="smalltext">Days</span>
								</div>
								<div class="col clockinner clockinner1">
									<h1 class="hours">23</h1>
									<span class="smalltext">Hours</span>
								</div>
								<div class="col clockinner clockinner1">
									<h1 class="minutes">47</h1>
									<span class="smalltext">Mins</span>
								</div>
								<div class="col clockinner clockinner1">
									<h1 class="seconds">59</h1>
									<span class="smalltext">Secs</span>
								</div>
							</div>
						</div>
					</div>
					<a href="" class="primary-btn">Shop Now</a>
				</div>
				<div class="col-lg-6 no-padding exclusive-right">
					<div class="active-exclusive-product-slider">
						<!-- single exclusive carousel -->
						<div class="single-exclusive-slider">
							<img class="img-fluid" src="img/product/e-p1.png" alt="">
							<div class="product-details">
								<div class="price">
									<h6>$150.00</h6>
									<h6 class="l-through">$210.00</h6>
								</div>
								<h4>addidas New Hammer sole
									for Sports person</h4>
								<div class="add-bag d-flex align-items-center justify-content-center">
									<a class="add-btn" href=""><span class="ti-bag"></span></a>
									<span class="add-text text-uppercase">Add to Bag</span>
								</div>
							</div>
						</div>
						<!-- single exclusive carousel -->
						<div class="single-exclusive-slider">
							<img class="img-fluid" src="img/product/e-p1.png" alt="">
							<div class="product-details">
								<div class="price">
									<h6>$150.00</h6>
									<h6 class="l-through">$210.00</h6>
								</div>
								<h4>addidas New Hammer sole
									for Sports person</h4>
								<div class="add-bag d-flex align-items-center justify-content-center">
									<a class="add-btn" href=""><span class="ti-bag"></span></a>
									<span class="add-text text-uppercase">Add to Bag</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End exclusive deal Area -->

	<!-- Start brand Area -->
	<section class="brand-area section_gap">
		<div class="container">
			<div class="row">
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="img/brand/1.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="img/brand/2.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="img/brand/3.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="img/brand/4.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="img/brand/5.png" alt="">
				</a>
			</div>
		</div>
	</section>
	<!-- End brand Area -->

	<!-- Start related-product Area -->
	<section class="related-product-area section_gap_bottom">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<div class="section-title">
						<h1>Deals of the Week</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
							magna aliqua.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-9">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="img/r1.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="img/r2.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="img/r3.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="img/r5.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="img/r6.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="img/r7.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-related-product d-flex">
								<a href="#"><img src="img/r9.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-related-product d-flex">
								<a href="#"><img src="img/r10.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-related-product d-flex">
								<a href="#"><img src="img/r11.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
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