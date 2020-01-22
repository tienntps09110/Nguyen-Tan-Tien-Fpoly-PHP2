
    <div class="content">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3><strong class="card-title">Thông tin tác giả</strong></h3>
                        </div>
                        <div class="card-body" id="top">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Tên</th>
                                        <th>Url</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($data["author"]->fetchAll() as $row){ ?>
                                    <tr>
                                        <td><?php echo $row["name"] ?></td>
                                        <td><?php echo $row["url_name"] ?></td>
                                        <td>
                                            <button type="button" class="btn btn-success mb-1" data-toggle="modal" data-target="#largeModal<?php echo $row["id"]?>">
                                                Xem
                                            </button>
                                        </td>
                                        <td>
                                            <a href="../adauthor/edit_author/<?php echo $row["id"] ?>" class="btn btn-info">Sửa</a>
                                        </td>
                                        <td>
                                            <a href="../adauthor/delete_author/<?php echo $row["id"] ?>" class="btn btn-danger">Xóa</a>
                                        </td>
                                    </tr>
                                    
                                    <div class="modal fade" id="largeModal<?php echo $row["id"]?>" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">

                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="largeModalLabel">Thông tin tác giả</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <img class="card-img-top" src="images/author/<?php echo $row["image"] ?>" alt="<?php echo $row["username"] ?>" style="width:100px; display:block; margin-left:auto; margin-right: auto;">
                                                        <div class="card-body">
                                                            <h3 class="card-title mb-3" style="font-weight: bold;"><?php echo $row["name"] ?></h3>
                                                            
                                                            <ul class="list">
                                                                <li>
                                                                    <h5 style="font-weight: bold;"><span>Ngày sinh</span>: 
                                                                        <?php if(isset($row["date_birth"])) echo "<b class=\"text-success\">" .$row["date_birth"] ."</b>";
                                                                        else echo "<b class=\"text-danger\">" ."Chưa cập nhật" ."</b>"; ?>
                                                                .   </h5>
                                                                </li>
                                                                <li>
                                                                    <h5 style="font-weight: bold;"><span>Quê quán</span>: 
                                                                        <?php if(isset($row["home_town"])) echo "<b class=\"text-success\">" .$row["home_town"] ."</b>";
                                                                        else echo "<b class=\"text-danger\">" ."Chưa cập nhật" ."</b>"; ?>
                                                                .   </h5>
                                                                </li>
                                                                <li>
                                                                    <h5 style="font-weight: bold;"><span>Thông tin</span>: 
                                                                        <?php if(isset($row["info"])) echo "<b class=\"text-success\">" .$row["info"] ."</b>";
                                                                        else echo "<b class=\"text-danger\">" ."Chưa cập nhật" ."</b>"; ?>
                                                                .   </h5>
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
