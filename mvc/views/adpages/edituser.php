
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                       <h2><strong>Sửa</strong> email người dùng</h2>
                    </div>
                    <div class="card-body card-block">
                    <?php if(isset($data["success"])){ ?>
                    <div class="alert alert-success text-center"><h3>Cập nhật thành công</h3><a href="../aduser/user"> << quay lại trang user</a></div>
                    <?php }else{} ?>
                    <?php foreach($data["user"]->fetchAll() as $row){ ?>
                        <form action="../aduser/post_edit_user" method="post" class="form-horizontal">
                            
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="name" class=" form-control-label">Username</label></div>
                                <div class="col-12 col-md-9"><input type="text" disabled name="name" value="<?php echo $row["username"] ?>" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Email cũ</label></div>
                                <div class="col-12 col-md-9"><input type="email" disabled value="<?php echo $row["email"] ?>" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="email" class=" form-control-label">Email thay đổi</label></div>
                                <div class="col-12 col-md-9"><input type="email" id="text-input" name="email" placeholder="Nhập email thay đổi" class="form-control"></div>
                            </div>
                            <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
                            
                            
                        <br>
                        <button class="btn btn-success float-right">Thêm sản phẩm mới</button>
                    <?php } ?>
                    </form>      
        </div>


    </div><!-- .animated -->
</div><!-- .content -->
<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="assets/js/main.js"></script>
