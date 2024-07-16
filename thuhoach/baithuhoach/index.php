<?php
session_start();

require_once "App/Controllers/CategoryController.php";
require_once "App/Controllers/ProductController.php";
require_once "App/Controllers/UserController.php";

$url = isset($_GET["url"]) ? $_GET["url"] : "/";

$category = new CategoryController();
$product = new ProductController();
$user = new UserController();

$check = ["list-category", "add-category", "update-category", "del-category", "list-product", "add-product", "update-product", "del-product", "list-user", "add-user", "update-user", "del-user"];
// nếu như chưa đăng nhập, không thể thực hiện chức năng: thêm, sửa, xoá
if (!isset($_SESSION["tai_khoan"]) && in_array($url, $check)) {
    header("Location: ?url=login");
    exit();
}

switch ($url) {
    case "/":
        $user->Login();
        break;

    case "list-category":
        $category->ListCategory();
        break;

    case "add-category":
        $category->AddCategory();
        break;

    case "update-category":
        $category->UpdateCategory($_REQUEST["id"], isset($_POST["ten_danh_muc"]) ? $_POST["ten_danh_muc"] : "");
        break;

    case "del-category":
        $category->DeleteCategory();
        break;

    case "list-product":
        $product->ListProduct();
        break;

    case "add-product":
        $product->AddProduct();
        break;

    case "update-product":
        $product->UpdateProduct($_REQUEST["id"], isset($_POST["ten_san_pham"]) ? $_POST["ten_san_pham"] : "", isset($_POST["gia"]) ? $_POST["gia"] : "", isset($_FILES["hinh_anh"]) ? $_FILES["hinh_anh"] : "", isset($_POST["id_danh_muc"]) ? $_POST["id_danh_muc"] : "");
        break;

    case "del-product":
        $product->DeleteProduct();
        break;

    case "list-user":
        $user->ListUser();
        break;

    case "add-user":
        $user->AddUser();
        break;

    case "update-user":
        $user->UpdateUser($_REQUEST["id"], isset($_POST["ten"]) ? $_POST["ten"] : "", isset($_POST["email"]) ? $_POST["email"] : "", isset($_POST["mat_khau"]) ? $_POST["mat_khau"] : "");
        break;

    case "del-user":
        $user->DeleteUser();
        break;

    case "login":
        $user->Login();
        break;
    case "logout":
        $user->Logout();
        break;
 
}
