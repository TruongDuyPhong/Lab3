<?php
require_once "Public/Layout/Header.php";
require_once "Public/NavLeft.php";
?>

<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">user management</li>
            <!-- <li class="breadcrumb-item"><a href="#">Thêm người dùng</a></li> -->
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="?url=add-user" class="tile" method="POST">
                <h3 class="tile-title">Add new user</h3>
                <div class="tile-body">
                    <div class="row">
                        <div class="form-group  col-md-4">
                            <label class="control-label">User name</label>
                            <input name="ten" class="form-control" type="text">
                            <p style="color: red; margin-top: 5px;"><?= $errors['ten'] ?? "" ?></p>
                        </div>

                        <div class="form-group  col-md-4">
                            <label class="control-label">Email</label>
                            <input name="email" class="form-control" type="email">
                            <p style="color: red; margin-top: 5px;"><?= $errors['email'] ?? "" ?></p>
                        </div>

                        <div class="form-group  col-md-4">
                            <label class="control-label">Password</label>
                            <input name="mat_khau" class="form-control" type="text">
                            <p style="color: red; margin-top: 5px;"><?= $errors['mat_khau'] ?? "" ?></p>
                        </div>
                    </div>
                </div>
                <p style="color: green; margin-top: 5px;"><?= $success ?? "" ?></p>
                <button class="btn btn-save" type="submit">Add user</button>
            </form>
        </div>
    </div>

</main>

<?php
require_once "Public/Layout/Footer.php";
?>