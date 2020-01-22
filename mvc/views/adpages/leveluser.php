
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                       <h2><strong>Cấp quyền cho người dùng</strong></h2>
                    </div>
                    <div class="card-body card-block">
                    <?php if(isset($data["success"])){ ?>
                    <div class="alert alert-success text-center"><h3>Cập nhật thành công</h3><a href="../aduser/user"> << quay lại trang user</a></div>
                    <?php }else{} ?>
                    <?php foreach($data["user"]->fetchAll() as $row){ ?>
                        <form action="../aduser/post_level_user" method="post" class="form-horizontal">
                            
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="name" class=" form-control-label">Username</label></div>
                                <div class="col-12 col-md-9"><input type="text" disabled name="name" value="<?php echo $row["username"] ?>" class="form-control"></div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="level" class=" form-control-label">Danh mục</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="level" id="select" class="form-control">
                                        <option value="1">Thành viên</option>                                  
                                        <option value="3" class="text-success">Quản lí sách và tác giả</option>
                                        <option value="4" class="text-warning">Quản lí user</option>
                                        <option value="5" class="text-primary">Quản lí giỏ hàng</option>
                                        <option value="2" class="text-danger">Quản trị viên</option>
                                    </select>
                                </div>
                            </div>
                            <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
                            
                            
                        <br>
                        <button class="btn btn-success float-right">Cấp quyền</button>
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
