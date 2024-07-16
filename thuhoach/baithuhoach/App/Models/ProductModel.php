<?php
require_once "Assets/db.php";

class ProductModel extends Database
{
    public function GetAllProduct()
    {
        $query = "select san_pham.*, danh_muc.ten_danh_muc as ten_danh_muc from san_pham 
        join danh_muc on danh_muc.id = san_pham.id_danh_muc";
        return $this->getData($query);
    }

    public function AddProduct($ten_san_pham, $gia, $hinh_anh, $id_danh_muc)
    {
        $query = "insert into san_pham (ten_san_pham, gia_san_pham, anh_san_pham, id_danh_muc) values ('$ten_san_pham', '$gia', '$hinh_anh', '$id_danh_muc')";
        return $this->getData($query, false);
    }

    public function GetOneProduct($id)
    {
        $query = "select san_pham.*, danh_muc.ten_danh_muc as ten_danh_muc from san_pham 
        join danh_muc on danh_muc.id = san_pham.id_danh_muc 
        where san_pham.id = '$id'";
        return $this->getData($query);
    }

    public function UpdateProduct($id, $ten_san_pham, $gia, $hinh_anh, $id_danh_muc)
    {
        if (!empty($hinh_anh)) {
            $query = "update san_pham set ten_san_pham = '$ten_san_pham', gia_san_pham = '$gia', anh_san_pham = '$hinh_anh', id_danh_muc = '$id_danh_muc' where id = '$id'";
            return $this->getData($query, false);
        } else {
            $query = "update san_pham set ten_san_pham = '$ten_san_pham', gia_san_pham = '$gia', id_danh_muc = '$id_danh_muc' where id = '$id'";
            return $this->getData($query, false);
        }
    }

    public function DeleteProduct($id)
    {
        $query = "delete from san_pham where id = '$id'";
        return $this->getData($query, false);
    }
}
