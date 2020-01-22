<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                       <h3><strong>Thêm tác giả mới</strong></h3>
                    </div>
                    <div class="card-body card-block">
                        <form action="../adauthor/post_add_author" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="name" class=" form-control-label">Tên tác giả</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="name" placeholder="Nhập tên tác giả" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="date_birth" class=" form-control-label">Ngày sinh</label></div>
                                <div class="col-12 col-md-9"><input type="date" id="text-input" name="date_birth" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="home_town" class=" form-control-label">Quê quán</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="home_town" placeholder="Nhập quê quán" class="form-control"><small class="help-block form-text">Nhập đầy đủ thông tin</small></div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="file-input" class=" form-control-label">Ảnh đại diện</label></div>
                                <div class="col-12 col-md-9"><input type="file" id="file-input" name="image" class="form-control-file" required></div>
                            </div>
                            <hr>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="info" class=" form-control-label">Thông tin thêm</label></div>
                                <textarea name="info" class="ckeditor" cols="30" rows="10"></textarea>
                            </div>
                        <br>
                        <button class="btn btn-success float-right">Thêm tác giả mới</button>
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
