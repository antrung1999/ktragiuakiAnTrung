<?php 
	if(isset($_GET['id_canbo_delete'])){
		$id_canbo = $_GET['id_canbo_delete'];
			
        require_once("../Database.php");
        $db = new Database();
        $isDeletedCanBo = $db->deleteCanboById($id_canbo);

        if($isDeletedCanBo){
            // Thêm thành công
            echo "Xóa Can Bo success";
        }else{
            // Thêm thất bại
           echo "Xóa thất bại";
		}
	}else{
		echo "Không thấy id canbo";
	}
 ?>