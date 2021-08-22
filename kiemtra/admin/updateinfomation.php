<?php 
	session_start();

	if(isset($_POST['idCB']) and
	isset($_POST['upName']) and
    isset($_POST['upCV']) and 
	isset($_POST['upDV']) and 
    isset($_POST['upEmail']) and
    isset($_POST['upPN']) ){
		$id_canbo = $_POST['idCB'];
    	$data["name"] = $_POST['upName'];
		$data["id_chuc_vu"] = $_POST['upCV'];
		$data["id_don_vi"] = $_POST['upDV'];
    	$data["email"] = $_POST['upEmail'];
    	$data["phone_number"] = $_POST['upPN'];
		
        require_once("../Database.php");
        $db = new Database();
        $isUpdatedCanBo = $db->updateCanBoById($id_canbo, $data);

        if($isUpdatedCanBo){
            // Thêm thành công
            echo "Update Can Bo success";
        }else{
            // Thêm thất bại
           echo "Update thất bại";
		}
    }else{
		// Ko đủ dữ liệu
		echo "Không đủ dữ liệu để update";
	}
 ?>
