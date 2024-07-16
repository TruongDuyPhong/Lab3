<?php
require_once "Public/Layout/Header.php";
require_once "Public/NavLeft.php";
?>

<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>List user</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="row element-button">
                        <div class="col-sm-2">
                            <a class="btn btn-add btn-sm" href="?url=add-user" title="Thêm">
                                <i class="fas fa-plus"></i>
                                Add new user</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-hover table-bordered" id="sampleTable">
                                <thead>
                                    <tr>
                                        <th>Id user</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Registration Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($users as $user) :
                                        $update_user = "?url=update-user&id=" . $user["id"];
                                        $del_user = "?url=del-user&id=" . $user["id"];
                                    ?>
                                        <tr>
                                            <td><?= $user["id"] ?></td>
                                            <td><?= $user["ten"] ?></td>
                                            <td><?= $user["email"] ?></td>
                                            <td><?= $user["mat_khau"] ?></td>
                                            <td><?= $user["ngay_dang_ki"] ?></td>
                                            <td>
                                                <button class="btn btn-primary btn-sm trash" type="button" title="Xóa">
                                                    <a style="color: red;" href="<?= $del_user ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa ?')">
                                                        <i class=" fas fa-trash-alt"></i>
                                                    </a>
                                                </button>
                                                <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP">
                                                    <a style="color: #f59d39;" href="<?= $update_user ?>">
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

// if (isset($success) && $success != "") {
//     echo "<script>
//     alert('Xoá thành công người dùng')
//     </script>";
// }

// if ($_SESSION["add"]) {
//     echo "<script>
//     alert('Thêm thành công người dùng')
//     </script>";
//     unset($_SESSION["add"]);
// }

// if ($_SESSION["update"]) {
//     echo "<script>
//     alert('Sửa thành công người dùng')
//     </script>";
//     unset($_SESSION["update"]);
// }
?>