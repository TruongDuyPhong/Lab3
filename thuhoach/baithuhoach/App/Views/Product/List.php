<?php
require_once "Public/Layout/Header.php";
require_once "Public/NavLeft.php";
?>

<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>List Product</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="row element-button">
                        <div class="col-sm-2">
                            <a class="btn btn-add btn-sm" href="?url=add-product" title="Thêm">
                                <i class="fas fa-plus"></i>
                                Add new product</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-hover table-bordered" id="sampleTable">
                                <thead>
                                    <tr>
                                        <th>ID Product</th>
                                        <th>Name Product</th>
                                        <th>Price</th>
                                        <th>Images</th>
                                        <th>Category</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($ListProduct as $product) :
                                        $update_product = "?url=update-product&id=" . $product["id"];
                                        $del_product = "?url=del-product&id=" . $product["id"];
                                    ?>
                                        <tr>
                                            <td><?= $product["id"] ?></td>
                                            <td><?= $product["ten_san_pham"] ?></td>
                                            <td><?= $product["gia_san_pham"] ?></td>
                                            <td>
                                                <img style="width: 200px; height: 200px; object-fit: cover;" src="images/<?= $product["anh_san_pham"] ?>" alt="">
                                            </td>
                                            <td><?= $product["ten_danh_muc"] ?></td>
                                            <td>
                                                <button class="btn btn-primary btn-sm trash" type="button" title="Xóa">
                                                    <a style="color: red;" href="<?= $del_product ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa ?')">
                                                        <i class=" fas fa-trash-alt"></i>
                                                    </a>
                                                </button>
                                                <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP">
                                                    <a style="color: #f59d39;" href="<?= $update_product ?>">
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
    echo "<script>
    alert('Xoá thành công sản phẩm')
    </script>";
}

// if ($_SESSION["add"]) {
//     echo "<script>
//     alert('Thêm thành công sản phẩm')
//     </script>";
//     unset($_SESSION["add"]);
// }

// if ($_SESSION["update"]) {
//     echo "<script>
//     alert('Sửa thành công sản phẩm')
//     </script>";
//     unset($_SESSION["update"]);
// }
?>