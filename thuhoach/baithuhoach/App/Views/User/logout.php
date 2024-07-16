<?php
require_once "Public/Layout/Header.php";
require_once "Public/NavLeft.php";

// Kiểm tra xem người dùng đã đăng nhập hay chưa
if (isset($_SESSION['tai_khoan'])) {
    require_once "UserController.php";

    // Tạo một instance của UserController
    $userController = new UserController();

    // Nếu có sự kiện logout được kích hoạt
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userController->Logout();
    }
} else {
    // Nếu người dùng chưa đăng nhập, chuyển hướng về trang đăng nhập
    header("location: ?url=login");
    exit;
}
?>

<main class="app-content">
    <div class="row">
        <div class="col-md-12">
            <form action="" class="tile" method="POST">
                <h3 class="tile-title">Xác nhận đăng xuất</h3>
                <div class="tile-body">
                    <p>Bạn có chắc chắn muốn đăng xuất?</p>
                </div>
                <button class="btn btn-danger" type="submit">Đăng xuất</button>
            </form>
        </div>
    </div>
</main>

<?php
require_once "Public/Layout/Footer.php";
?>
