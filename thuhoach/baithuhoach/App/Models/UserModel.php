<?php
require_once "Assets/db.php";

class UserModel extends Database
{
    public function GetAllUser()
    {
        $query = "select * from nguoi_dung";
        return $this->getData($query);
    }

    public function AddUser($ten, $email, $mat_khau)
    {
        $query = "insert into nguoi_dung (ten, email, mat_khau) values ('$ten', '$email', '$mat_khau')";
        return $this->getData($query, false);
    }

    public function GetOneUser($id)
    {
        $query = "select * from nguoi_dung where id = '$id'";
        return $this->getData($query);
    }

    public function UpdateUser($id, $ten, $email, $mat_khau)
    {
        $query = "update nguoi_dung set ten = '$ten', email = '$email', mat_khau = '$mat_khau'where id = '$id'";
        return $this->getData($query, false);
    }

    public function DeleteUser($id)
    {
        $query = "delete from nguoi_dung where id = '$id'";
        return $this->getData($query, false);
    }

    public function Login($email, $mat_khau)
    {
        $query = "select * from nguoi_dung where email like '%$email%' and mat_khau like '%$mat_khau%'";
        return $this->getData($query, false);
    }
}
