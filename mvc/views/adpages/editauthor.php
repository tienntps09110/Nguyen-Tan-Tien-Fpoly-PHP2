
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                       <h2><strong>Chỉnh sửa thông tin tác giả</strong></h2>
                    </div>
                    <div class="card-body card-block">
                    <?php if(isset($data["success"])){ ?>
                    <div class="alert alert-success text-center"><h3>Cập nhật thành công</h3><a href="../adauthor/author"> << quay lại trang tác giả</a></div>
                    <?php }else{} ?>
                    <?php foreach($data["author"]->fetchAll() as $row){ ?>
                        <form action="../adauthor/post_edit_author" method="post" enctype="multipart/form-data" class="form-horizontal">
                            
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="name" class=" form-control-label">Tên</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="name" value="<?php echo $row["name"] ?>" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Url name</label></div>
                                <div class="col-12 col-md-9"><input type="text" name="url_name" value="<?php echo $row["url_name"] ?>" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="date_birth" class=" form-control-label">Ngày sinh</label></div>
                                <div class="col-12 col-md-9"><input type="date" id="text-input" name="date_birth" value="<?php echo $row["date_birth"] ?>" placeholder="Nhập ngày sinh" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="home_town" class=" form-control-label">Quê quán</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="home_town" value="<?php echo $row["home_town"] ?>" placeholder="Nhập ngày sinh" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="file-input" class=" form-control-label">Ảnh đại diện sách</label></div>
                                <div class="col-12 col-md-9"><input type="file" name="image" class="form-control-file"><small class="help-block form-text">Ảnh sẽ được giữ nguyên nếu không upload.</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="email" class=" form-control-label">Thông tin</label></div>
                                <textarea name="info" class="ckeditor" id="info" cols="100" rows="10"><?php echo $row["info"] ?></textarea>
                            </div>
                            <div id="example"></div>
                            <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
                            
                            
                        <br>
                        <button type="submit" class="btn btn-success float-right">Update sản phẩm</button>
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
