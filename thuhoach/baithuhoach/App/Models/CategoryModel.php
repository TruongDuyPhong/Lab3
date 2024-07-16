<?php
require_once "Assets/db.php";

class CategoryModel extends Database
{
    public function GetAllCategory()
    {
        $query = "select * from danh_muc";
        return $this->getData($query);
    }

    public function AddCategory($ten_danh_muc)
    {
        $query = "insert into danh_muc (ten_danh_muc) values ('$ten_danh_muc')";
        return $this->getData($query, false);
    }

    public function GetOneCategory($id)
    {
        $sql = "select * from danh_muc where id = '$id'";
        return $this->getData($sql);
    }

    public function UpdateCategory($id, $ten_danh_muc)
    {
        $sql = "update danh_muc set ten_danh_muc = '$ten_danh_muc' where id = '$id'";
        return $this->getData($sql, false);
    }

    public function DeleteCategory($id)
    {
        $query = "delete from danh_muc where id = '$id'";
        return $this->getData($query, false);
    }
}
