<?php
require_once "App/Models/ProductModel.php";

class ProductController
{
    private $pro;

    public function __construct()
    {
        $this->pro = new ProductModel();
    }

    public function ListProduct()
    {
        $ListProduct = $this->pro->GetAllProduct();
        require_once "App/Views/Product/List.php";
    }

    public function AddProduct()
    {
        $errors = [];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $ten_san_pham = $_POST["ten_san_pham"];
            $gia = $_POST["gia"];
            $hinh_anh = $_FILES["hinh_anh"];
            $id_danh_muc = $_POST["id_danh_muc"];

            $upload = $hinh_anh["name"];
            move_uploaded_file($hinh_anh["tmp_name"], "images/" . $upload);

            if (empty(trim($ten_san_pham))) {
                $errors["ten_san_pham"] = 'Tên sản phẩm không được trống';
            }

            if (empty(trim($gia))) {
                $errors["gia"] = 'Giá sản phẩm không được trống';
            }

            if (empty(trim($upload))) {
                $errors["hinh_anh"] = 'Ảnh sản phẩm không được trống';
            }

            if (empty(trim($id_danh_muc))) {
                $errors["id_danh_muc"] = 'Danh mục sản phẩm không được trống';
            }

            if (empty($errors)) {
                $this->pro->AddProduct($ten_san_pham, $gia, $upload, $id_danh_muc);
                $_SESSION["add"] = true;
                header("location: index.php?url=list-product");
            }
        }

        $categoryModel = new CategoryModel();
        $categorys = $categoryModel->GetAllCategory();
        require_once "App/Views/Product/Add.php";
    }

    public function UpdateProduct($id, $ten_san_pham, $gia, $hinh_anh, $id_danh_muc)
    {
        $errors = [];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (!empty($hinh_anh["name"])) {
                $name_img = $hinh_anh["name"];
                $base_name = basename($name_img);
                $upload = "images/" . $base_name;
                move_uploaded_file($hinh_anh["tmp_name"], $upload);
            } else {
                $base_name = "";
                $upload = "";
            }

            if (empty(trim($ten_san_pham))) {
                $errors["ten_san_pham"] = 'Tên sản phẩm không được trống';
            }

            if (empty(trim($gia))) {
                $errors["gia"] = 'Giá sản phẩm không được trống';
            }

            if (empty(trim($id_danh_muc))) {
                $errors["id_danh_muc"] = 'Danh mục sản phẩm không được trống';
            }

            if (empty($errors)) {
                $this->pro->UpdateProduct($id, $ten_san_pham, $gia, $base_name, $id_danh_muc);
                $_SESSION["update"] = true;
                header("location: index.php?url=list-product");
            }
        }

        $categoryModel = new CategoryModel();
        $categorys = $categoryModel->GetAllCategory();
        $Products = $this->pro->GetOneProduct($id);
        require_once "App/Views/Product/Update.php";
    }

    public function DeleteProduct()
    {
        $id = isset($_GET["id"]) ? $_GET["id"] : "";
        $this->pro->DeleteProduct($id);
        $success = "Xoá sản phẩm thành côngg";
        $ListProduct = $this->pro->GetAllProduct();
        require_once "App/Views/Product/List.php";
    }
}
