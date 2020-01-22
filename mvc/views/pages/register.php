<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Đăng kí</h1>
					<nav class="d-flex align-items-center">
						<a href="../home/all">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="../home/register">Đăng kí</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="img/login.jpg" alt="">
						<div class="hover">
							<h4>Bạn đã có tài khoản?</h4>
							<p>Hãy ngay bây giờ để nhận nhiều ưu đãi tốt nhất.</p>
							<a class="primary-btn" href="../home/login">ĐĂNG NHẬP</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Đăng kí nhanh</h3>
						<?php
							if(isset($data["error"])){
								echo 
								"<div class=\"alert alert-danger\">
								$data[error]
								</div>
								";
							}
						?>
						<?php
							if(isset($data["success"])){
								echo 
								"<div class=\"alert alert-success\">
								$data[success]
								</div>
								";
							}
						?>
						<form class="row login_form" action="../home/post_register" method="post" id="contactForm" novalidate="novalidate">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,255}$" id="username" name="username" value="natriwit" placeholder="Tài khoản" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tài khoản'">
							</div>
							<div class="col-md-12 form-group">
								<input type="email" class="form-control" pattern=".{3,255}" id="email" name="email" value="toma.nguyen675@gmail.com" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="password" name="password" value="1" placeholder="Mật khẩu" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mật khẩu'">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="password" name="password2" value="1" placeholder="Xác nhận mật khẩu" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập lại mật khẩu'">
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">Đăng kí</button>
								<a href="#">Quên mật khẩu?</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->