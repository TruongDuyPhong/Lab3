<?php
require_once "Public/Layout/Header.php";
require_once "Public/NavLeft.php";
?>

<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">LIST PRODUCT</li>
            <!-- <li class="breadcrumb-item"><a href="#">Edit Product</a></li> -->
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php foreach ($Products as $product) : ?>
            <form action="?url=update-product" class="tile" method="POST" enctype="multipart/form-data">
                <h3 class="tile-title">Edit Product</h3>
                <div class="tile-body">
                    <div class="row">
                        <div class="form-group  col-md-4">
                            <label class="control-label">ID Pro</label>
                            <input name="id" value="<?= $product["id"] ?>" class="form-control" type="text" readonly>
                        </div>

                        <div class="form-group  col-md-4">
                            <label class="control-label">Name Pro</label>
                            <input name="ten_san_pham" value="<?= $product["ten_san_pham"] ?>" class="form-control" type="text">
                            <p style="color: red; margin-top: 5px;"><?= $errors['ten_san_pham'] ?? "" ?></p>
                        </div>

                        <div class="form-group  col-md-4">
                            <label class="control-label">Price</label>
                            <input name="gia" value="<?= $product["gia_san_pham"] ?>" class="form-control" type="text">
                            <p style="color: red; margin-top: 5px;"><?= $errors['gia'] ?? "" ?></p>
                        </div>

                        <div class="form-group  col-md-4">
                            <label class="control-label">Images</label>
                            <input name="hinh_anh" class="form-control" type="file">
                            <p style="color: red; margin-top: 5px;"><?= $errors['hinh_anh'] ?? "" ?></p>
                        </div>

                        <div class="form-group  col-md-4">
                            <img style="width: 100px; height: 100px; object-fit: cover;"
                                src="images/<?= $product["anh_san_pham"] ?>" alt="">
                        </div>

                        <div class="form-group  col-md-4">
                            <label for="exampleSelect1" class="control-label">Category</label>
                            <select class="form-control" name="id_danh_muc">
                                <option value="<?= $product["id_danh_muc"] ?>"><?= $product["ten_danh_muc"] ?></option>
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
                <button class="btn btn-save" type="submit">Edit product</button>
            </form>
            <?php endforeach; ?>
        </div>
    </div>
</main>

<?php
require_once "Public/Layout/Footer.php";
?>