<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Login</h1>
					<nav class="d-flex align-items-center">
						<a href="../home/all">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="../home/login">Đăng nhập</a>
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
							<h4>Bạn chưa có tài khoản?</h4>
							<p>Hãy đăng kí tài khoản ngay bây giờ để nhận nhiều ưu đãi tốt nhất.</p>
							<a class="primary-btn" href="../home/register">ĐĂNG KÍ NGAY</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
							<?php
								if(isset($data["error"])){
									echo 
									"<div class=\"alert alert-danger\">
									$data[error]
									</div>
									";
								}
							?>
						<h3>Đăng nhập</h3>
						<form class="row login_form" action="../home/post_login" method="post" id="contactForm" novalidate="novalidate">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="username" name="username" value="<?php if(isset($_COOKIE['user'])) echo $_COOKIE['user'] ?>" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="password" name="password" value="<?php if(isset($_COOKIE['user'])){ echo $_COOKIE['password']; } ?>" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account">
									<input type="checkbox" id="f-option2" name="selector" checked>
									<label for="f-option2">Nhớ</label>
								</div>
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">Đăng nhập</button>
								<a href="#">Quên mật khẩu?</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->