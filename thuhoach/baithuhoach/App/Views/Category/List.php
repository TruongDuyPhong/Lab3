<?php
require_once "Public/Layout/Header.php";
require_once "Public/NavLeft.php";
?>

<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>List Category</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="row element-button">
                        <div class="col-sm-2">
                            <a class="btn btn-add btn-sm" href="?url=add-category" title="Thêm">
                                <i class="fas fa-plus"></i>
                                Add new category</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-hover table-bordered" id="sampleTable">
                                <thead>
                                    <tr>
                                        <th>ID cate</th>
                                        <th>Name cate</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($categorys as $ctg) : ?>
                                        <tr>
                                            <td><?= isset($ctg["id"]) ? $ctg["id"] : "" ?></td>
                                            <td><?= isset($ctg["ten_danh_muc"]) ? $ctg["ten_danh_muc"] : "" ?></td>
                                            <td>
                                                <button class="btn btn-primary btn-sm trash" type="button" title="Xóa">
                                                    <a style="color: red;" href="<?= isset($ctg["id"]) ? "?url=del-category&id=" . $ctg["id"] : "" ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa ?')">
                                                        <i class=" fas fa-trash-alt"></i>
                                                    </a>
                                                </button>
                                                <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" data-toggle="modal" data-target="#ModalUP">
                                                    <a style="color: #f59d39;" href="<?= isset($ctg["id"]) ? "?url=update-category&id=" . $ctg["id"] : "" ?>">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                </button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
require_once "Public/Layout/Footer.php";

if (isset($success) && $success != "") {
    echo "<script>alert('Xoá thành công danh mục')</script>";
}

// if ($_SESSION["add"]) {
//     echo "<script>alert('Thêm thành công danh mục')</script>";
//     unset($_SESSION["add"]);
// }

// if ($_SESSION["update"]) {
//     echo "<script>alert('Sửa thành công danh mục')</script>";
//     unset($_SESSION["update"]);
// }
?>