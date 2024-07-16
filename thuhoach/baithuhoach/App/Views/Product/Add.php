<?php
require_once "Public/Layout/Header.php";
require_once "Public/NavLeft.php";
?>

<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Danh sản phẩm sản phẩm</li>
            <li class="breadcrumb-item"><a href="#">Thêm sản phẩm</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="?url=add-product" class="tile" method="POST" enctype="multipart/form-data">
                <h3 class="tile-title">Tạo mới sản phẩm</h3>
                <div class="tile-body">
                    <div class="row">
                        <div class="form-group  col-md-4">
                            <label class="control-label">Tên sản phẩm</label>
                            <input name="ten_san_pham" class="form-control" type="text">
                            <p style="color: red; margin-top: 5px;"><?= $errors['ten_san_pham'] ?? "" ?></p>
                        </div>

                        <div class="form-group  col-md-4">
                            <label class="control-label">Giá</label>
                            <input name="gia" class="form-control" type="text">
                            <p style="color: red; margin-top: 5px;"><?= $errors['gia'] ?? "" ?></p>
                        </div>

                        <div class="form-group  col-md-4">
                            <label class="control-label">Ảnh</label>
                            <input name="hinh_anh" class="form-control" type="file">
                            <p style="color: red; margin-top: 5px;"><?= $errors['hinh_anh'] ?? "" ?></p>
                        </div>

                        <div class="form-group  col-md-4">
                            <label for="exampleSelect1" class="control-label">Danh mục</label>
                            <select class="form-control" name="id_danh_muc">
                                <option value="">-- Chọn danh mục --</option>
                                <?php foreach ($categorys as $ctg) :
                                ?>
                                    <option value="<?= $ctg["id"] ?>"><?= $ctg["ten_danh_muc"] ?></option>
                                <?php endforeach ?>
                            </select>
                            <p style="color: red; margin-top: 5px;"><?= $errors['id_danh_muc'] ?? "" ?></p>
                        </div>
                    </div>
                </div>
                <p style="color: green; margin-top: 5px;"><?= $success ?? "" ?></p>
                <button class="btn btn-save" type="submit">Thêm mới</button>
            </form>
        </div>
    </div>

</main>

<?php
require_once "Public/Layout/Footer.php";
?>