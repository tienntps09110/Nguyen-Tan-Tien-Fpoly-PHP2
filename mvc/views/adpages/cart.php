
    <div class="content">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" id="top">
                            <strong class="card-title">Quản lí giỏ hàng</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Mã đơn</th>
                                        <th>Tên</th>
                                        <th>Ngày đặt</th>
                                        <th>Số tiền</th>
                                        <th>Tình trạng</th>
                                        <th>Xem</th>
                                        <th>Duyệt</th>
                                        <th>Hủy</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($data["cart"]->fetchAll() as $row){ ?>
                                    <tr>
                                        <td><?php echo $row["id"] ?></td>
                                        <td><?php echo $row["name"] ?></td>
                                        <td><?php echo $row["created_at"] ?></td>
                                        <td>
                                        <?php echo number_format($row["money"], 0, ',', '.') ?>đ
                                        </td>
                                        <td>
                                            <?php 
                                                if($row["status"] == 1){
                                                    echo "<b style=\"color:#ffba00;\">Chờ xác nhận</b>";
                                                }elseif($row["status"] == 2){
                                                    echo "<b style=\"color:blueviolet;\">Chờ vận chuyển</b>";
                                                }elseif($row["status"] == 3){
                                                    echo "<b style=\"color:#38a4ff;\">Đang vận chuyển</b>";
                                                }elseif($row["status"] == 4){
                                                    echo "<b style=\"color:#38a4ff;\">Đã giao hàng</b>";
                                                }else{
                                                    echo "<b style=\"color:red;\">Đã hủy</b>";
                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info mb-1" data-toggle="modal" data-target="#largeModal<?php echo $row["id"]?>">
                                                Xem
                                            </button>
                                        </td>
                                        <td>
                                            <?php if($row["status"] >=4){}else{?>
                                            <a href="../adcart/confirm/<?php echo $row["id"] ."/" .$row["status"] ?>" class="btn btn-success">Duyệt</a>
                                            <?php }?>
                                        </td>
                                        <td>
                                        <?php if($row["status"] >=4){}else{?>
                                            <a href="../adcart/destroy/<?php echo $row["id"] ?>" class="btn btn-danger">Hủy đơn</a>
                                            <?php }?>
                                        </td>
                                    </tr>
                                    
                                    <!-- Start modal -->
                                    <div class="modal fade" id="largeModal<?php echo $row["id"]?>" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">

                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="largeModalLabel">Thông tin tài khoản</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h3 class="card-title mb-3" style="font-weight: bold;">Mã đơn: <?php echo $row["id"] ?></h3>
                                                            <ul class="list">
                                                                <li>
                                                                <h4 class="card-title mb-3" style="font-weight: bold; color: green;">Thông tin</h4>
                                                                    <h6 style="font-weight: bold;"><span>Tên</span>: 
                                                                        <b><?php echo $row["name"] ?></b>
                                                                    </h6>
                                                                    <h6 style="font-weight: bold;"><span>SDT</span>: 
                                                                        <b><?php echo $row["phone"] ?></b>
                                                                    </h6>
                                                                    <h6 style="font-weight: bold;"><span>Email</span>: 
                                                                        <b><?php echo $row["mail"] ?></b>
                                                                    </h6>
                                                                    <h6 style="font-weight: bold;"><span>Địa chỉ</span>: 
                                                                        <b><?php echo $row["place"] ?></b>
                                                                    </h6>
                                                                    <h6 style="font-weight: bold;"><span>Tiền ship</span>: 
                                                                        <b><?php  if($row["ship"] == 0) echo "miễn phí"; else echo "15.000 đ"; ?></b>
                                                                    </h6>
                                                                </li>
                                                                
                                                                
                                                                <li>
                                                                    <h4 class="card-title mb-3" style="font-weight: bold; color: green;">Các sản phẩm đã đặt</h4>
                                                                </li>
                                                                    <?php 
                                                                        $db = $this->model("CartModel"); 
                                                                        foreach($db->user_cart_detail2($row["id"])->fetchAll() as $row1){ 
                                                                    ?>
                                                                    <p class="text-dark">Id sản phẩm: <b class="text-primary"><?php echo $row1["id"] ?></b></p>
                                                                    <p class="text-dark">Tên: <b class="text-primary"><?php echo $row1["name"] ?></b></p>
                                                                    <p class="text-dark">Giá: <b class="text-danger"><?php echo number_format($row1["price"], 0, ',', '.') ?>đ</b></p>
                                                                    <p class="text-dark">Số lượng: <b class="text-primary"><?php echo $row1["total2"] ?></b></p>
                                                                    <hr>
                                                                    <?php } ?>
                                                                <li>
                                                                    <h4 class="card-title mb-3" style="font-weight: bold; color: green;">Tổng tiền: <b class="text-danger"><?php echo number_format($row["money"], 0, ',', '.') ?></b></h4>
                                                                    
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đồng ý</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End modal -->

                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->
    </div><!-- .content -->



<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="assets/js/main.js"></script>


<script src="assets/js/lib/data-table/datatables.min.js"></script>
<script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
<script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
<script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
<script src="assets/js/lib/data-table/jszip.min.js"></script>
<script src="assets/js/lib/data-table/vfs_fonts.js"></script>
<script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
<script src="assets/js/lib/data-table/buttons.print.min.js"></script>
<script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
<script src="assets/js/init/datatables-init.js"></script>


<script type="text/javascript">
    $(document).ready(function() {
        $('#bootstrap-data-table-export').DataTable();
    } );
</script>
