<section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                <h1>Giỏ hàng</h1>
                    <nav class="d-flex align-items-center">
                        <a href="../home/all">Home<span class="lnr lnr-arrow-right"></span></a> 
                        <a href="../cart/all">Cart<span class="lnr lnr-arrow-right"></span></a>
                        <a href="../cart/all">Giỏ hàng</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Cart Area =================-->
    <section class="cart_area" id="top">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Sản phẩm</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Thành tiền</th>
                                <th scope="col"></th>
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
                                <td style="width:15%;">
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
                                <td>
                                    <form action="../cart/delete_cart" method="post">
                                        <input type="hidden" value="<?php echo $row["id2"] ?>" name="id_cart_wishlist">
                                        <button type="submit" class="btn btn-danger" title="Xóa">X</a>
                                    </form>
                                    
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
                                    <h5>Tổng tiền</h5>
                                </td>
                                <td>
                                    <h5 class="text-danger" style="font-weight: bold;"><?php  echo number_format($tong, 0, ',', '.') ."đ       "; ?></h5>
                                </td>
                            </tr>
                            
                            <tr class="bottom_button">
                                <td>
                                    <!-- <a class="gray_btn" href="#">Cập nhật</a> -->
                                    
                                </td>
                                <td style="width: 20%;">
                                    <div class="cupon_text d-flex align-items-center">
                                        <input type="text" placeholder="Mã giảm giá">
                                        <a class="primary-btn" href="#">Áp dụng</a>
                                    </div>
                                </td>
                                <td>

                                </td>
                                <td>
                                    
                                </td>
                            </tr>
                            <tr class="shipping_area">
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    
                                </td>
                                <td>
                                    <div class="shipping_box">
                                        <form action="../cart/post_cart" method="post">
                                            <ul class="list">
                                                <h6 class="float-left">Phương thức ship <i class="fa fa-caret-down" aria-hidden="true"></i></h6>
                                                <select class="shipping_select" name="ship">
                                                    <option value="0">Ship tiết kiệm (Miễn phí - 7 ngày).</option>
                                                    <option value="1">Ship nhanh (15.000 đ - 2 ngày).</option>
                                                </select>
                                            </ul>
                                            <h6 class="float-left">Tỉnh thành <i class="fa fa-caret-down" aria-hidden="true"></i></h6>
                                            <input type="text" name="place" placeholder="TP HCM">
                                            <!-- <select class="shipping_select" name="place">
                                                <option value="TP HCM">TP HCM</option>
                                                <option value="Hà Nội">Hà Nội</option>
                                                <option value="Tây Ninh">Tây Ninh</option>
                                            </select> -->
                                            <h6 class="float-left">Địa chỉ-Phường xã-Quận huyện <i class="fa fa-caret-down" aria-hidden="true"></i></h6>
                                            <input type="text" name="place1" placeholder="111/17-Phạm Văn Chiêu-Gò Vấp">
                                            <!-- <select class="shipping_select" name="place1">
                                                <option value="Trảng bàng">Trảng bàng</option>
                                                <option value="Gò vấp">Gò vấp</option>
                                                <option value="Long an">Long an</option>
                                            </select> -->
                                            <textarea name="note" placeholder="Ghi chú" class="form-control" cols="30" rows="4"></textarea>
                                            <br>
                                            <a class="gray_btn" href="#">Update Details</a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="out_button_area">
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    
                                </td>
                                <td>
                                    <div class="checkout_btn_inner d-flex align-items-center">
                                        <a class="gray_btn" href="../home/all">Tiếp tục mua sắm</a>
                                        <input type="hidden" name="total" value="<?php echo $tong ?>">
                                        <button type="submit" class="primary-btn" style="border:none;">Đặt hàng</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--================End Cart Area =================-->