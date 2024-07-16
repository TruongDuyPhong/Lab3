<?php
require_once "Public/Layout/Header.php";
require_once "Public/NavLeft.php";
?>

<main class="app-content">
    <div class="row">
        <div class="col-md-12">
            <form action="?url=login" class="tile" method="POST">
                <h3 class="tile-title">Đăng nhập</h3>
                <div class="tile-body">
                    <div class="row">

                        <div class="form-group  col-md-4">
                            <label class="control-label">Email</label>
                            <input name="email" class="form-control" type="email">
                            <p style="color: red; margin-top: 5px;"><?= $errors['email'] ?? "" ?></p>
                        </div>

                        <div class="form-group  col-md-4">
                            <label class="control-label">Mật khẩu</label>
                            <input name="mat_khau" class="form-control" type="text">
                            <p style="color: red; margin-top: 5px;"><?= $errors['mat_khau'] ?? "" ?></p>
                        </div>
                    </div>
                </div>
                <p style="color: red; margin-top: 5px;"><?= $errors['dang_nhap'] ?? "" ?></p>
                <p style="color: green; margin-top: 5px;"><?= $success ?? "" ?></p>
                <button class="btn btn-save" type="submit">Đăng nhập</button>
            </form>
        </div>
    </div>

</main>

<?php
require_once "Public/Layout/Footer.php";
?>