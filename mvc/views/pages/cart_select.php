<section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                <h1>Tất cả đơn hàng</h1>
                    <nav class="d-flex align-items-center">
                        <a href="../home/all">Home<span class="lnr lnr-arrow-right"></span></a> 
                        <a href="../cart/all">Cart<span class="lnr lnr-arrow-right"></span></a>
                        <a href="../cart/follow_cart">Tất cả đơn hàng</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Cart Area =================-->
    <section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">STT</th>
                                <th scope="col">Tên</th>
                                <th scope="col">Ngày đặt</th>
                                <th scope="col">Tình trạng</th>
                                <th scope="col">Xem</th>
                            </tr>
                        </thead>
                        <tbody>
                        <!-- Start cart -->
                            <?php foreach($data["cart"]->fetchAll() as $key=>$row){ ?>
                                <tr>
                                    <td>
                                    <h4><?php echo $key1 = $key + 1; ?></h4>
                                    </td>
                                    <td>
                                        <h5><?php echo $row["name"] ?></h5>
                                    </td>
                                    <td>
                                        <h5><?php echo $row["created_at"] ?></h5>
                                    </td>
                                    <td>
                                        <?php 
                                            if($row["status"] == 1){ echo "<h4 style=\"color:#ffba00;\">Đang chờ xác nhận!</h4>"; }
                                            elseif($row["status"] == 2) { echo "<h4 style=\"color:blueviolet;\">Đã xác nhậc, chờ vận chuyển!</h4>"; }
                                            elseif($row["status"] == 3) { echo "<h4 style=\"color:#38a4ff;\">Đang vận chuyển!</h4>"; }
                                            elseif($row["status"] == 4) { echo "<h4 style=\"color:seagreen;\">Đã giao hàng! </h4>"; }
                                            else{ echo "<h4 class=\"text-danger\">Đơn hàng đã bị hủy </h4>"; }
                                        
                                        ?>
                                    </td>
                                    <td>
                                        <h3> <a href="../cart/cart_detail&id=<?php echo $row['id'] ?>" class="btn btn-info">Xem</a></h3>
                                    </td>
                                </tr>
                            <?php }?>
                            
                            <!-- End cart -->
                            
                            
                            
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--================End Cart Area =================-->