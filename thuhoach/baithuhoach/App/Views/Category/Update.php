<?php
require_once "Public/Layout/Header.php";
require_once "Public/NavLeft.php";
?>

<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">List Category</li>
            <li class="breadcrumb-item"><a href="#">Edit Category</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php foreach ($CategoryDetail as $ctg) ?>
            <form action="?url=update-category" class="tile" method="POST">
                <h3 class="tile-title">Edit Category</h3>
                <div class="tile-body">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label class="control-label">ID</label>
                            <input name="id" value="<?= $ctg["id"] ?? "" ?>" class="form-control" type="text" readonly>
                        </div>

                        <div class="form-group col-md-4">
                            <label class="control-label">Name cate</label>
                            <input name="ten_danh_muc" value="<?= $ctg["ten_danh_muc"] ?? "" ?>" class="form-control" type="text">
                            <p style="color: red; margin-top: 5px;"><?= $errors['ten_danh_muc'] ?? "" ?></p>
                        </div>
                    </div>
                </div>
                <p style="color: green; margin-top: 5px;"><?= $success ?? "" ?></p>
                <button class="btn btn-save" type="submit">Edit Cate</button>
            </form>
        </div>
    </div>

</main>

<?php
require_once "Public/Layout/Footer.php";
?>