<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                       <h3><strong>Thêm sách mới</strong> </h3>
                    </div>
                    <div class="card-body card-block">
                        <form action="../adbooks/post_add_books" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="name" class=" form-control-label">Tên sách</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="name" placeholder="Nhập tên sách" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="pages" class=" form-control-label">Số trang</label></div>
                                <div class="col-12 col-md-9"><input type="number" id="text-input" name="pages" placeholder="Nhập số trang sách" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="publish_house" class=" form-control-label">Nhà xuất bản</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="publish_house" placeholder="Nhập tên nhà xuất bản" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="date_publish" class=" form-control-label">Ngày xuất bản</label></div>
                                <div class="col-12 col-md-9"><input type="date" id="text-input" name="date_publish" placeholder="Nhập ngày xuất bản" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="select" class=" form-control-label">Bìa sách</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="cover_type" id="select" class="form-control">
                                        <option value="Bìa cứng">Bìa cứng</option>
                                        <option value="Bìa mềm">Bìa mềm</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="width_height" class=" form-control-label">Kích thước</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="width_height" placeholder="Nhập kích thước sách" class="form-control"><small class="help-block form-text">Ví dụ: 23 x 15</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="price" class=" form-control-label">Giá sách</label></div>
                                <div class="col-12 col-md-9"><input type="number" id="text-input" name="price" placeholder="Nhập giá sách" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="sale_price" class=" form-control-label">Giảm giá</label></div>
                                <div class="col-12 col-md-9"><input type="number" id="text-input" name="sale_price" placeholder="Nhập phần trăm giảm giá" class="form-control"><small class="help-block form-text">Ví dụ: giảm 10% thì nhập 10,không giảm nhập 0.</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="total" class=" form-control-label">SL sản phẩm trong kho</label></div>
                                <div class="col-12 col-md-9"><input type="number" id="text-input" name="total" placeholder="Nhập số lượng sản phẩm trong kho" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="id_type" class=" form-control-label">Danh mục</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="id_type" id="select" class="form-control">
                                        <?php foreach($data["type"]->fetchAll() as $row1){ ?>
                                            <option value="<?php echo $row1["id"] ?>"><?php echo $row1["name"] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="id_author" class=" form-control-label">Tác giả</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="id_author" id="select" class="form-control">
                                        <?php foreach($data["author"]->fetchAll() as $row2){ ?>
                                            <option value="<?php echo $row2["id"] ?>"><?php echo $row2["name"] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="id_company" class=" form-control-label">Công ty sản xuất</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="id_company" id="select" class="form-control">
                                        <?php foreach($data["company"]->fetchAll() as $row3){ ?>
                                            <option value="<?php echo $row3["id"] ?>"><?php echo $row3["name"] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="file-input" class=" form-control-label">Ảnh đại diện sách</label></div>
                                <div class="col-12 col-md-9"><input type="file" id="file-input" name="image" class="form-control-file" required></div>
                            </div>
                            <hr>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="file-input" class=" form-control-label">Ảnh sách thêm</label></div>
                                <div class="col-3 col-md-3"><input type="file" id="file-input" name="image1" class="form-control-file"></div>
                                <div class="col-3 col-md-3"><input type="file" id="file-input" name="image2" class="form-control-file"></div>
                                <div class="col-3 col-md-3"><input type="file" id="file-input" name="image3" class="form-control-file"></div>
                                <div class="col-3 col-md-3"></div>
                                <div class="col-3 col-md-3"><input type="file" id="file-input" name="image4" class="form-control-file"></div>
                                <div class="col-3 col-md-3"><input type="file" id="file-input" name="image5" class="form-control-file"></div>
                                <div class="col-3 col-md-3"><input type="file" id="file-input" name="image6" class="form-control-file"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="content" class=" form-control-label">Nội dung</label></div>
                                <textarea name="content" class="ckeditor" cols="30" rows="10"></textarea>
                            </div>
                        <br>
                        <button class="btn btn-success float-right">Thêm sản phẩm mới</button>
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
