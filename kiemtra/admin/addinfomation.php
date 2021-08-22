<?php
	session_start();


    if(isset($_POST['addName']) and
    isset($_POST['id_chucvu_add']) and
    isset($_POST['id_donvi_add']) and
    isset($_POST['addEmail']) and
    isset($_POST['addPN']) ){
        $data = array();
    	$data["name"] = $_POST['addName'];
        $data["id_chuc_vu"] = $_POST['id_chucvu_add'];
        $data["id_don_vi"] = $_POST['id_donvi_add'];
    	$data["email"] = $_POST['addEmail'];
    	$data["phone_number"] = $_POST['addPN'];
        
        require_once("../Database.php");
        $db = new Database();
        $isAddedCanBo = $db->addCanBo($data);

        if($isAddedCanBo){
            // Thêm thành công
            echo "Add Can Bo success";
        }else{
            // Thêm thất bại
            echo "fail";
        }
    }else{

        // Không đủ data để thêm
        echo "khong du du lieu";
    }
?>