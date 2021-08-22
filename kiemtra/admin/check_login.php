<?php 
	if (isset($_POST['input_log_Email']) and isset($_POST['input_log_Pass'])) {
		$email = $_POST['input_log_Email'];
		$pass = $_POST['input_log_Pass'];	

		$conn = mysqli_connect('localhost','root','12345678','antrung');
		mysqli_set_charset($conn, 'UTF8');
		if (!$conn) {
			die("ERROR".mysqli_connect_error());
		}else{
			$sql = "select * from admin where email='".$email."'";
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)>0){
				$row = mysqli_fetch_assoc($result);
				if ($pass == $row["password"]) {
					session_start();
					$_SESSION['iduser'] = $row['id'];
					$_SESSION['username'] = $row['user_name'];	
					header("Location: https://localhost/kiemtra/admin/home.php");
				}
				else{
					header("Location: https://localhost/kiemtra/admin/index.php");
				}
			}
		}
	}
	
 ?>