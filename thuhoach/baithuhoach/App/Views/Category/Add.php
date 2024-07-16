<?php
require_once "Public/Layout/Header.php";
require_once "Public/NavLeft.php";
?>

<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Danh sách danh mục</li>
            <li class="breadcrumb-item"><a href="#">Thêm danh mục</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="?url=add-category" class="tile" method="POST">
                <h3 class="tile-title">Tạo mới danh mục</h3>
                <div class="tile-body">
                    <div class="row">
                        <div class="form-group  col-md-4">
                            <label class="control-label">Tên danh mục</label>
                            <input name="ten_danh_muc" class="form-control" type="text">
                            <p style="color: red; margin-top: 5px;"><?= $errors['ten_danh_muc'] ?? "" ?></p>
                            <p style="color: green; margin-top: 5px;"><?= $success ?? "" ?></p>
                        </div>
                    </div>
                </div>
                <button class="btn btn-save" type="submit">Thêm mới</button>
            </form>
        </div>
    </div>

</main>

<?php
require_once "Public/Layout/Footer.php";
?>