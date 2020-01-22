<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<base href="http://localhost/store/public/">
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>WitShop | Nguyễn Tấn Tiền</title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/main.css">
	<script>
		function showUser(str) {
		if (str=="") {
			document.getElementById("txtHint").innerHTML="";
			return;
		}
		if (window.XMLHttpRequest) {
			// code cho IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		} else { // code cho IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function() {
			if (this.readyState==4 && this.status==200) {
			document.getElementById("txtHint").innerHTML=this.responseText;
			}
		}
		xmlhttp.open("GET","../cart/add_cart&id="+str,true);
		xmlhttp.send();
		}
		</script>
</head>

<body>

	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="../home/all"><img src="http://note.tantien.info/assets/images/logo.png" width="120rem" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="../home/all">Trang chủ</a></li>
							<li class="nav-item submenu dropdown">
								<a href="../home/category" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Danh mục</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="../books/all&page=1">Tất cả sản phẩm</a></li>
									<li class="nav-item"><a class="nav-link" href="../cart/all">Giỏ hàng</a></li>
									<li class="nav-item"><a class="nav-link" href="../cart/follow_cart">Tất cả đơn hàng</a></li>
									
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link" href="../home/contact">Liên hệ</a></li>
							<?php if(isset($_SESSION["level"])){
								if($_SESSION["level"] >1){?>
								<li class="nav-item"><a class="nav-link" href="../adbooks/all">Quản trị</a></li>
							<?php }} ?>
							
							<?php if(isset($_SESSION['user']) && isset($_SESSION['password']) && isset($_SESSION['level'])){ ?>
								<li class="nav-item"><?php echo $_SESSION['user'] ?><a class="nav-link" href="../home/logout">(Logout)</a></li>
							<?php }else{?>
								<li class="nav-item"><a class="nav-link" href="../home/login">Đăng nhập</a></li>
							<?php } ?>
						</ul>
						<ul class="nav navbar-nav navbar-right">
						<?php 
						if(isset($_SESSION["user"])){
							$db = $this->model("CartModel");
							$sum = $db->sum_cart($_SESSION["id"]);
							$sum_all = 0;
							foreach($sum->fetchAll() as $sum){}
							$sum_all = $sum['SUM(total)'];
						}else{

						}
						?>
							<li class="nav-item"><a href="../cart/all" class="cart"><span class="ti-bag"></span><b id="txtHint"> <?php if(isset($_SESSION["user"]) && $sum_all >=1){ echo  "(" .$sum_all .")"; }else{ } ?></b></a></li>
							<li class="nav-item">
								<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form action="../books/post_search" method="post" class="d-flex justify-content-between">
					<input type="text" class="form-control" name="search" id="search_input" placeholder="Search Here" required>
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header>
	