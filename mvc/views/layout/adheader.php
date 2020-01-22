<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <base href="http://localhost/store/public/">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ela Admin - HTML5 Admin Template</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />
    <script src="ckeditor/ckeditor.js"></script>
   <style>
    #weatherWidget .currentDesc {
        color: #ffffff!important;
    }
        .traffic-chart {
            min-height: 335px;
        }
        #flotPie1  {
            height: 150px;
        }
        #flotPie1 td {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }
        .chart-container {
            display: table;
            min-width: 270px ;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #flotLine5  {
             height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }
        #cellPaiChart{
            height: 160px;
        }
        th{
            cursor: pointer;
        }
    </style>
</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                <li class="active">
                        <a href="../adbooks/all"><i class="menu-icon fa fa-home"></i>Thông báo</a>
                    </li>
                    <?php if($_SESSION["level"] == 2){ ?>
                    <li>
                        <a href="../adbooks/dashboard"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <?php }if($_SESSION["level"] == 2 || $_SESSION["level"] == 3){ ?>
                    <li class="menu-title">Quản lí sách</li>
                    <li class="menu-item">
                        <a href="../adbooks/add_books"> <i class="menu-icon fa fa-cogs"></i>Thêm sách mới</a>
                    </li>
                    <li class="menu-item">
                        <a href="../adbooks/books"> <i class="menu-icon fa fa-cogs"></i>Thông tin sách</a>
                    </li>
                    <?php }if($_SESSION["level"] == 2 || $_SESSION["level"] == 4){ ?>
                    <li class="menu-title">Quản lí người dùng</li>
                    <li class="menu-item">
                        <a href="../aduser/user"> <i class="menu-icon fa fa-cogs"></i>Thông tin người dùng</a>
                    </li>
                    <?php }if($_SESSION["level"] == 2 || $_SESSION["level"] == 3){ ?>
                    <li class="menu-title">Quản lí tác giả</li>
                    <li class="menu-item">
                        <a href="../adauthor/add_author"> <i class="menu-icon fa fa-cogs"></i>Thêm tác giả mới</a>
                    </li>
                    <li class="menu-item">
                        <a href="../adauthor/author"> <i class="menu-icon fa fa-cogs"></i>Thông tin tác giả</a>
                    </li>
                    <?php }if($_SESSION["level"] == 2 || $_SESSION["level"] == 5){ ?>
                    <li class="menu-title">Quản lí giỏ hàng</li>
                    <li class="menu-item">
                        <a href="../Adcart/cart"> <i class="menu-icon ti-shopping-cart"></i>Thông tin đơn hàng</a>
                    </li>
                    <?php } ?>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <a class="navbar-brand logo_h" href="../home/all"><img src="http://note.tantien.info/assets/images/logo.png" width="110rem" alt=""></a>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="user-area dropdown float-right">
                            <?php if(isset($_SESSION['user']) && isset($_SESSION['password']) && isset($_SESSION['level'])){ ?>
								<li class="nav-item text-success"><?php echo $_SESSION['user'] ?><a href="../home/logout">(Logout)</a></li>
							<?php }else{?>
								<li class="nav-item"><a class="nav-link" href="../home/login">Đăng nhập</a></li>
							<?php } ?>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->
        <!-- Content -->
        