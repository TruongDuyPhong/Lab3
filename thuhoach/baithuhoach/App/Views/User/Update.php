<?php
require_once "Public/Layout/Header.php";
require_once "Public/NavLeft.php";
?>

<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"> user management</li>
            <!-- <li class="breadcrumb-item"><a href="#">Sửa người dùng</a></li> -->
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php foreach ($users as $user) : ?>
            <form action="?url=update-user" class="tile" method="POST">
                <h3 class="tile-title">Edit user</h3>
                <div class="tile-body">
                    <div class="row">
                        <div class="form-group  col-md-4">
                            <label class="control-label">ID</label>
                            <input name="id" value="<?= $user["id"] ?>" class="form-control" type="text" readonly>
                        </div>

                        <div class="form-group  col-md-4">
                            <label class="control-label">User name</label>
                            <input name="ten" value="<?= $user["ten"] ?>" class="form-control" type="text">
                            <p style="color: red; margin-top: 5px;"><?= $errors['ten'] ?? "" ?></p>
                        </div>

                        <div class="form-group  col-md-4">
                            <label class="control-label">Email</label>
                            <input name="email" value="<?= $user["email"] ?>" class="form-control" type="email">
                            <p style="color: red; margin-top: 5px;"><?= $errors['email'] ?? "" ?></p>
                        </div>

                        <div class="form-group  col-md-4">
                            <label class="control-label">Password</label>
                            <input name="mat_khau" value="<?= $user["mat_khau"] ?>" class="form-control" type="text">
                            <p style="color: red; margin-top: 5px;"><?= $errors['mat_khau'] ?? "" ?></p>
                        </div>
                    </div>
                </div>
                <p style="color: green; margin-top: 5px;"><?= $success ?? "" ?></p>
                <button class="btn btn-save" type="submit">Edit now</button>
            </form>
            <?php endforeach; ?>
        </div>
    </div>

</main>

<?php
require_once "Public/Layout/Footer.php";
?>