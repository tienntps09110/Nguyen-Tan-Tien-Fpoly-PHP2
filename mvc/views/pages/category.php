<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1><?php echo $data["info"] ?></h1>
					<nav class="d-flex align-items-center" id="top">
						<a href="../home/all">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="../books/all&page=1">Books<span class="lnr lnr-arrow-right"></span></a>
						<a href="../books/type/<?php echo $data["url"] ?>&page=1"><?php echo $data["info"] ?></a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
	<div class="container">
		<div class="row">
			<div class="col-xl-3 col-lg-4 col-md-5">
				<div class="sidebar-categories">
					<div class="head">Danh mục</div>
					<ul class="main-categories">

						<!-- Start danh mục -->
						<li class="main-nav-list"><a href="../books/all&page=1#top" aria-expanded="false" aria-controls="fruitsVegetable">
							<span class="lnr lnr-arrow-right"></span>Tất cả loại sách</a>	
						</li>
						<?php foreach($data["danhmuc"]->fetchAll() as $row){?>
						<li class="main-nav-list"><a href="../books/type/<?php echo $row["url_name"] ?>&page=1#top" aria-expanded="false" aria-controls="fruitsVegetable">
							<span class="lnr lnr-arrow-right"></span><?php echo $row["name"] ?></a>	
						</li>
						<?php } ?>
						<!-- End danh mục -->

							<!-- Danh mục con dự phòng -->
							<!-- <ul class="collapse" id="fruitsVegetable" data-toggle="collapse" aria-expanded="false" aria-controls="fruitsVegetable">
								<li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
								<li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a></li>
								<li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a></li>
								<li class="main-nav-list child"><a href="#">Meat Alternatives<span class="number">(01)</span></a></li>
								<li class="main-nav-list child"><a href="#">Meat<span class="number">(11)</span></a></li>
							</ul> -->
					</ul>
				</div>
				<div class="sidebar-filter mt-50">
					<div class="top-filter-head">Product Filters</div>
					<div class="common-filter">
						<div class="head">Brands</div>
						<form action="#">
							<ul>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="apple" name="brand"><label for="apple">Apple<span>(29)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="asus" name="brand"><label for="asus">Asus<span>(29)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="gionee" name="brand"><label for="gionee">Gionee<span>(19)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="micromax" name="brand"><label for="micromax">Micromax<span>(19)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="samsung" name="brand"><label for="samsung">Samsung<span>(19)</span></label></li>
							</ul>
						</form>
					</div>
					<div class="common-filter">
						<div class="head">Color</div>
						<form action="#">
							<ul>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="black" name="color"><label for="black">Black<span>(29)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="balckleather" name="color"><label for="balckleather">Black
										Leather<span>(29)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="blackred" name="color"><label for="blackred">Black
										with red<span>(19)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="gold" name="color"><label for="gold">Gold<span>(19)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="spacegrey" name="color"><label for="spacegrey">Spacegrey<span>(19)</span></label></li>
							</ul>
						</form>
					</div>
					<div class="common-filter">
						<div class="head">Price</div>
						<div class="price-range-area">
							<div id="price-range"></div>
							<div class="value-wrapper d-flex">
								<div class="price">Price:</div>
								<span>$</span>
								<div id="lower-value"></div>
								<div class="to">to</div>
								<span>$</span>
								<div id="upper-value"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-9 col-lg-8 col-md-7">
				<!-- Start Filter Bar -->
				<div class="filter-bar d-flex flex-wrap align-items-center">
					<div class="sorting">
						<select>
							<option>Chọn</option>
							<option value="1">Giá từ thấp đến cao</option>
							<option value="1">Giá từ cao đến thấp</option>
							<option value="1">Sản phẩm giảm giá</option>
						</select>
					</div>
					<div class="sorting mr-auto">
					</div>
					<div class="pagination">
						<a href="../books/<?php echo $data["url_page"] ?>
							<?php 
								if(isset($_GET["page"]) && $_GET["page"]>1){
									$truoc = $_GET["page"]-1;
									echo "&page=" .$truoc;
								}else{
									$diss = "pointer-events: none; background-color: #ccc;";
								}
							?>#top
						" class="prev-arrow" style="<?php if(isset($diss)){echo $diss;} ?>"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
						<?php for($i=1 ; $i <= $data["sotrang"] ; $i++){ ?>
							<?php if(isset($_GET["page"])){if($_GET["page"] == $i){ $active = "active";?>
								<a href="../books/<?php echo $data["url_page"] ?>&page=<?php echo $i ?>#top" class="<?php if(isset($active)){ echo $active; } ?>"><?php echo $i ?></a>
							<?php }else{ ?>
								<a href="../books/<?php echo $data["url_page"] ?>&page=<?php echo $i ?>#top"><?php echo $i ?></a>
						<?php }}} ?>
						<a href="../books/<?php echo $data["url_page"] ?>
							<?php 
								if(isset($_GET["page"]) && $_GET["page"]< $data["sotrang"]){
									$truoc = $_GET["page"]+1;
									echo "&page=" .$truoc;
								}else{
									$dis = "pointer-events: none; background-color: #ccc;";
								}
							?>#top
						" class="next-arrow" style="<?php if(isset($dis)){echo $dis;} ?>"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<!-- End Filter Bar -->
				<!-- Start Best Seller -->
				<section class="lattest-product-area pb-40 category-list">
					<div class="row">

						<!-- single product -->
						<?php foreach($data["books"]->fetchAll() as $row){ ?>
							<div class="col-lg-3 col-md-6">
								<div class="single-product">
									<img class="img-fluid imghome" style="width:80% !important" src="images/books/<?php echo $row["image"] ?>" alt="">
									<div class="product-details">
										<a href="../books/detail/<?php echo $row["url_book"] ?>"><?php echo $row["name"] ?></a>
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
											<a href="#" class="social-info">
												<span class="lnr lnr-heart"></span>
												<p class="hover-text">Yêu thích</p>
											</a>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
						<!-- End single product -->

					</div>
				</section>
				<!-- End Best Seller -->
				<!-- Start Filter Bar -->
				<div class="filter-bar d-flex flex-wrap align-items-center">
					<div class="sorting mr-auto">
					</div>
					<div class="pagination">
						<a href="../books/<?php echo $data["url_page"] ?>
							<?php 
								if(isset($_GET["page"]) && $_GET["page"]>1){
									$truoc = $_GET["page"]-1;
									echo "&page=" .$truoc;
								}else{
									$diss = "pointer-events: none; background-color: #ccc;";
								}
							?>#top
						" class="prev-arrow" style="<?php if(isset($diss)){echo $diss;} ?>"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
						<?php for($i=1 ; $i <= $data["sotrang"] ; $i++){ ?>
							<?php if(isset($_GET["page"])){if($_GET["page"] == $i){ $active = "active";  ?>
								<a href="../books/<?php echo $data["url_page"] ?>&page=<?php echo $i ?>#top" class="<?php if(isset($active)){ echo $active; } ?>"><?php echo $i ?></a>
							<?php }else{ ?>
								<a href="../books/<?php echo $data["url_page"] ?>&page=<?php echo $i ?>#top"><?php echo $i ?></a>
						<?php }}} ?>
						<a href="../books/<?php echo $data["url_page"] ?>
							<?php 
								if(isset($_GET["page"]) && $_GET["page"]< $data["sotrang"]){
									$truoc = $_GET["page"]+1;
									echo "&page=" .$truoc;
								}else{
									$dis = "pointer-events: none; background-color: #ccc;";
								}
							?>#top
						" class="next-arrow" style="<?php if(isset($dis)){echo $dis;} ?>"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<!-- End Filter Bar -->
			</div>
		</div>
	</div>

	