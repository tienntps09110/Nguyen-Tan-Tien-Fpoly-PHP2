<section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                <h1>Chi tiết đơn hàng</h1>
                    <nav class="d-flex align-items-center">
                        <a href="../home/all">Home<span class="lnr lnr-arrow-right"></span></a> 
                        <a href="../cart/follow_cart">Đơn hàng<span class="lnr lnr-arrow-right"></span></a>
                        <a href="../cart/cart_detail&id=<?php echo $_GET["id"] ?>">Chi tiết đơn hàng</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Cart Area =================-->
    <section class="cart_area">
        <div class="container">
            <h2>Hóa đơn</h2>
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Sản phẩm</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Tạm tính</th>
                            </tr>
                        </thead>
                        <tbody>
                        <!-- Start cart -->
                            <?php $tong=0; foreach($data["cart"]->fetchAll() as $key=>$row){?>
                            <tr>
                                <td>
                                   
                                    <div class="media">
                                        <div class="d-flex">
                                        <?php $key1 = $key +1; echo "#" .$key1; ?>
                                        <img src="images/books/<?php echo $row["image"] ?>" alt="<?php echo $row["name"] ?>" width="55rem;">
                                        </div>
                                        <div class="media-body">
                                            <a href="../books/detail/<?php echo $row["url_book"] ?>"><p><?php echo $row["name"] ?></p></a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                <?php  
                                    $change_money = number_format($row["price"], 0, ',', '.');
                                    if($row["sale_price"] >0){
                                        $sale =$row["price"]-($row["price"] * ($row["sale_price"] / 100));
                                        $change_money1 = number_format($sale, 0, ',', '.');
                                        echo "<h4>$change_money1 đ</h4>";
                                        echo "<h6> <i class=\"text-success\" style=\"text-decoration: line-through; color: #cccccc;\">$change_money đ</i> <b class=\"text-danger\">- $row[sale_price] %</b></h6>";
                                    }else{
                                        echo "<h4>$change_money đ</h4>";
                                    }
                                ?>
                                </td>
                                <td>
                                    <h5><?php echo $row["total2"] ?></h5>
                                </td>
                                <td>
                                    <?php
                                        if($row["sale_price"] >0){
                                            $don_gia = number_format($sale * $row["total2"], 0, ',', '.');
                                            echo "<h5> $don_gia đ</h5>";
                                            $tong = $tong  + ($sale * $row["total2"]);
                                        }else{
                                            $don_gia = number_format($row["price"] * $row["total2"], 0, ',', '.');
                                            echo "<h5>$don_gia đ</h5>";
                                            $tong = $tong  + ($row["price"] * $row["total2"]);
                                        }
                                        
                                    ?>
                                </td>
                            </tr>
                            <?php } ?>
                            
                            <!-- End cart -->
                            <tr>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    <h6>Tạm tính:</h6>
                                    <h6>Phí vận chuyển:</h6>
                                    <hr>
                                    <h4 style="font-weight:bold;">Tổng tiền</h4>
                                    
                                </td>
                                <td>
                                <h6><?php  echo number_format($tong, 0, ',', '.') ." đ"; ?></h6>
                                <h6>
                                    <?php
                                        if($data["ship"] == 1){
                                            echo "15.000 đ";
                                            $tong = $tong + 15000;
                                        }else{
                                            echo "Miễn phí";
                                        }
                                    ?>
                                </h6>
                                <hr>
                                    <h4 class="text-danger" style="font-weight: bold;"><?php  echo number_format($tong, 0, ',', '.') ." đ"; ?></h4>
                                </td>
                            </tr>
                            
                           

                        </tbody>
                    </table>
                </div>
            <hr>
            <div class="row">
                <div class="col-6" style="border: 1px green solid;">
                <h2 class="text-center text-primary">Theo dõi đơn hàng</h2>
                    <?php if($data["status"] == 1){?>
                        <nav class="d-flex align-items-center">
                            <h4 style="color:#seagreen;">Xác nhận!<span class="lnr lnr-arrow-right"></span> </h4>
                            <h4 style="color:#seagreen;"> Vận chuyển!<span class="lnr lnr-arrow-right"></span> </h4>
                            <h4 style="color:#seagreen;"> Giao hàng!</h4>
                        </nav>
                        <p>Lưu ý : Đơn hàng đang chờ xác thực từ bộ phận kiểm duyệt thời gian lâu nhất khoảng 5h.</p>
                    <?php }else if($data["status"] == 2){ ?>
                        <nav class="d-flex align-items-center">
                            <h4 style="color:seagreen;">Xác nhận!<img src="https://cdn3.iconfinder.com/data/icons/flat-actions-icons-9/792/Tick_Mark_Dark-512.png" width="40rem" alt="Success"><span class="lnr lnr-arrow-right"></span> </h4>
                            <h4 style="color:#seagreen;"> Vận chuyển!<span class="lnr lnr-arrow-right"></span> </h4>
                            <h4 style="color:#seagreen;"> Giao hàng!</h4>
                        </nav>
                        <p>Lưu ý :<b>Đơn hàng đã xác nhận</b>, đang chờ vận chuyển từ bộ phận vận chuyển thời gian lâu nhất khoảng 5h.</p>
                    <?php }else if($data["status"] == 3){ ?>
                        <nav class="d-flex align-items-center">
                            <h4 style="color:seagreen;">Xác nhận!<img src="https://cdn3.iconfinder.com/data/icons/flat-actions-icons-9/792/Tick_Mark_Dark-512.png" width="40rem" alt="Success"><span class="lnr lnr-arrow-right"></span> </h4>
                            <h4 style="color:seagreen;"> Vận chuyển!<img src="https://cdn3.iconfinder.com/data/icons/flat-actions-icons-9/792/Tick_Mark_Dark-512.png" width="40rem" alt="Success"><span class="lnr lnr-arrow-right"></span> </h4>
                            <h4 style="color:#seagreen;"> Giao hàng!</h4>
                        </nav>
                        <p>Lưu ý : :<b>Đơn hàng đã vận chuyển</b>, dự kiến thời gian giao hàng lâu nhất khoảng 48h.</p>
                    <?php }else if($data["status"] == 4){ ?>
                        <nav class="d-flex align-items-center">
                            <h4 style="color:seagreen;">Xác nhận!<img src="https://cdn3.iconfinder.com/data/icons/flat-actions-icons-9/792/Tick_Mark_Dark-512.png" width="40rem" alt="Success"><span class="lnr lnr-arrow-right"></span> </h4>
                            <h4 style="color:seagreen;"> Vận chuyển!<img src="https://cdn3.iconfinder.com/data/icons/flat-actions-icons-9/792/Tick_Mark_Dark-512.png" width="40rem" alt="Success"><span class="lnr lnr-arrow-right"></span> </h4>
                            <h4 style="color:seagreen;"> Giao hàng!<img src="https://cdn3.iconfinder.com/data/icons/flat-actions-icons-9/792/Tick_Mark_Dark-512.png" width="40rem" alt="Success"></h4>
                        </nav>
                        <p>Lưu ý : :<b>Đơn hàng đã giao thành công cho quý khách</b>, chúc quý khách có những phút giây đọc sách thư giản.</p>
                    <?php }else{ ?>
                        <h4 class="text-danger">Đơn hàng của bạn đã bị hủy<img src="images/tickred.png" width="40rem" alt="Error"></h4>
                    <?php }?>
                </div>
                    <div class="col-6" style="border: 1px green solid;">
                    <h2 class="text-center text-primary">Thông tin đơn hàng</h2>
                    <?php foreach($data["info"]->fetchAll() as $info){ ?>
                        <h6><b class="text-dark">Tên:</b> <i><?php echo $info["name"] ?>.</i></h6>
                        <h6><b class="text-dark">Số điện thoại:</b> <?php echo $info["phone"] ?>.</h6>
                        <h6><b class="text-dark">Email:</b> <?php echo $info["mail"] ?>.</h6>
                        <hr>
                        <h6><b class="text-dark">Địa chỉ giao:</b> <?php echo $info["place"] ?>.</h6>
                        <h6><b class="text-dark">Thời gian đặt :</b> <?php echo $info["created_at"] ?>.</h6>
                        <h6><b class="text-dark">Hình thức giao hàng :</b> Ship cod.</h6>
                        <p><b class="text-dark">Ghi chú :</b> <?php echo $info["note"] ?>.</p>
                        <hr>
                        <h6>Tổng tiền hóa đơn: <span class="text-danger"><?php echo number_format($info["money"], 0, ',', '.') ."đ       "; ?>.</span> </h6>
                    <?php } ?>
                </div>
            </div>            
            </div>
        </div>
    </section>
    <!--================End Cart Area =================-->