<?php
require_once "App/Models/UserModel.php";

class UserController
{
    private $user;

    public function __construct()
    {
        $this->user = new UserModel();
    }

    public function ListUser()
    {
        $users = $this->user->GetAllUser();
        require_once "App/Views/User/List.php";
    }

    public function AddUser()
    {
        $errors = [];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $ten = $_POST["ten"];
            $email = $_POST["email"];
            $mat_khau = $_POST["mat_khau"];

            if (empty($ten)) {
                $errors["ten"] = "Tên không được để trống";
            }

            if (empty($email)) {
                $errors["email"] = "Email không được để trống";
            }

            if (empty($mat_khau)) {
                $errors["mat_khau"] = "Mật khẩu không được để trống";
            }

            if (empty($errors)) {
                $this->user->AddUser($ten, $email, $mat_khau);
                $_SESSION["add"] = true;
                header("location: index.php?url=list-product");
            }
        }

        require_once "App/Views/User/Register.php";
    }

    public function UpdateUser($id, $ten, $email, $mat_khau)
    {
        $errors = [];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (empty($ten)) {
                $errors["ten"] = "Tên không được để trống";
            }

            if (empty($email)) {
                $errors["email"] = "Email không được để trống";
            }

            if (empty($mat_khau)) {
                $errors["mat_khau"] = "Mật khẩu không được để trống";
            }

            if (empty($errors)) {
                $this->user->UpdateUser($id, $ten, $email, $mat_khau);
                $_SESSION["update"] = true;
                header("location: index.php?url=list-product");
            }
        }

        $users = $this->user->GetOneUser($id);
        require_once "App/Views/User/Update.php";
    }

    public function DeleteUser()
    {
        $id = isset($_GET["id"]) ? $_GET["id"] : "";
        $this->user->DeleteUser($id);
        $success = "Xoá người dùng thành công";
        $users = $this->user->GetAllUser();
        require_once "App/Views/User/List.php";
    }

    public function Login()
    {
        $errors = [];
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            $mat_khau = $_POST['mat_khau'];

            $tai_khoan = $this->user->Login($email, $mat_khau);

            if (empty(trim($email))) {
                $errors["email"] = "Email đang trống !";
            }

            if (empty(trim($mat_khau))) {
                $errors["mat_khau"] = "Chưa nhập mật khẩu !";
            }

            if (empty($errors)) {
                if (is_array($tai_khoan)) {
                    $_SESSION["tai_khoan"] = $tai_khoan;
                    header("location: ?url=list-category");
                } else {
                    $errors["dang_nhap"] = "Không tồn tại email hoặc sai mật khẩu";
                }
            }
        }
        require_once "App/Views/User/Login.php";
    }

    public function Logout()
{
    // Xóa toàn bộ session liên quan đến người dùng
    session_unset();
    session_destroy();

    // Chuyển hướng người dùng đến trang đăng nhập
    header("location: ?url=login");
    exit;
    require_once "App/Views/User/Logout.php";
}

}
