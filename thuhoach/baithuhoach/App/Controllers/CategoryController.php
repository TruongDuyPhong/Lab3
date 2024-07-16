<?php
require_once "App/Models/CategoryModel.php";

class CategoryController
{
    private $category;

    public function __construct()
    {
        $this->category = new CategoryModel();
    }

    public function ListCategory()
    {
        $categorys = $this->category->GetAllCategory();
        require_once "App/Views/Category/List.php";
    }

    public function AddCategory()
    {
        $errors = [];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $ten_danh_muc = $_POST["ten_danh_muc"];

            if (empty(trim($ten_danh_muc))) {
                $errors["ten_danh_muc"] = 'Tên danh mục không được trống';
            }

            if (empty($errors)) {
                $this->category->AddCategory($ten_danh_muc);
                $_SESSION["add"] = true;
                header("location: index.php?url=list-category");
            }
        }
        require_once "App/Views/Category/Add.php";
    }

    public function UpdateCategory($id)
    {
        $errors = [];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = $_POST["id"];
            $ten_danh_muc = $_POST["ten_danh_muc"];

            if (empty(trim($ten_danh_muc))) {
                $errors["ten_danh_muc"] = 'Tên danh mục không được trống';
            }

            if (empty($errors)) {
                $this->category->UpdateCategory($id, $ten_danh_muc);
                $_SESSION["update"] = true;
                header("location: index.php?url=list-category");
            }
        }
        $CategoryDetail = $this->category->GetOneCategory($id);
        require_once "App/Views/Category/Update.php";
    }

    public function DeleteCategory()
    {
        $id = isset($_GET["id"]) ? $_GET["id"] : "";
        $this->category->DeleteCategory($id);
        $success = "Xoá thành công";
        $categorys = $this->category->GetAllCategory();
        require_once "App/Views/Category/List.php";
    }
}
