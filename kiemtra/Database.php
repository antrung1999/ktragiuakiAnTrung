<?php

class Database
{
    const SERVER_NAME = "localhost";
    const USER_NAME = "root";
    const PASSWORD = "12345678";
    const DB_NAME = "antrung";

    const TB_DONVI = "don_vi";
    const TB_CHUCVU = "chuc_vu";
    const TB_CANBO = "can_bo";

    private $conn;

    public function __construct()
    {
        // Create connection
        $conn = new mysqli(self::SERVER_NAME, self::USER_NAME, self::PASSWORD, self::DB_NAME);
        // Check connection
        if ($conn->connect_error) {
            die("connect db fail");
        } else {
            $this->conn =  $conn;
        }
    }

    /**
     * @return array
     */
    public function getAllDonVi()
    {
        $query = "SELECT * FROM " . self::TB_DONVI;
        $result = mysqli_query($this->conn, $query);
        $result_array = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $result_array;
    }


    public function getAllCanBo()
    {
        $query = "SELECT * FROM " . self::TB_CANBO;
        $result = mysqli_query($this->conn, $query);
        $result_array = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $result_array;
    }

    public function getAllChucVu()
    {
        $query = "SELECT * FROM " . self::TB_CHUCVU;
        $result = mysqli_query($this->conn, $query);
        $result_array = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $result_array;
    }

    public function getAllCanBoByDonVi($id_donvi, $name = null)
    {
        if (empty($name)) {
            $query = "SELECT * FROM " . self::TB_CANBO . " WHERE id_don_vi = $id_donvi";
        } else {
            $query = "SELECT * FROM " . self::TB_CANBO . " WHERE id_don_vi = $id_donvi AND name like '%" . $name . "%'";
        }
        $result = mysqli_query($this->conn, $query);
        $result_array = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $result_array;
    }

    public function getChucVuById($id_chucvu)
    {
        $query = "SELECT * FROM " . self::TB_CHUCVU . " WHERE id = $id_chucvu LIMIT 1";
        $result = mysqli_query($this->conn, $query);
        $result_array = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $result_array[0];
    }

    public function addCanBo($data)
    {
        $sql = "INSERT INTO " . self::TB_CANBO . " (name, email, phone_number, id_don_vi, id_chuc_vu)
        VALUES ('" . $data["name"] . "', '" . $data["email"] . "', '" . $data["phone_number"] . "', '" . $data["id_don_vi"] . "', '" . $data["id_chuc_vu"] . "')";

        if (mysqli_query($this->conn, $sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function updateCanBoById($id_canbo, $data)
    {
        $sql = "UPDATE can_bo 
        
        SET name = '".$data["name"]."' , email = '".$data["email"]."', phone_number = '".$data["phone_number"]."',
            id_don_vi = '".$data["id_don_vi"]."', id_chuc_vu = '".$data["id_chuc_vu"]."' 
        
        WHERE id = " . $id_canbo;

        if (mysqli_query($this->conn, $sql)) {
            return true ;
        } else {
            return false;
        }
    }

    public function deleteCanboById($id_canbo)
    {
        // sql to delete a record
        $sql = "DELETE FROM can_bo WHERE id = " . $id_canbo;

        if (mysqli_query($this->conn, $sql)) {
            return true;
        } else {
            return false;
        }
    }
}
