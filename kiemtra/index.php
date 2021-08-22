<?php
require_once "Database.php";
$db = new Database();
$donvis = $db->getAllDonVi();
if(isset($_GET["key_search"])){
    $key_search = $_GET["key_search"];
}else{
    $key_search = null;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <script src="./bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container mt-5">

    <h1 class="text-center">Danh Bạ ĐHTL</h1>
    <div class="go admin">
        <a href="https://localhost/kiemtra/admin/index.php" class="button">Go Admin</a>
    </div>

    <div class="search mb-2">
        <form action="">
            <button type="submit" class="btn btn-outline-primary">search</button>
            <input name="key_search" id="key_search" type="text" placeholder="Search follow name" value="<?php echo $key_search?>">
        </form>
    </div>

    <table class="table table-bordered text-center">
        <thead>
        <tr>
            <th rowspan="2">TT</th>
            <th rowspan="2">Họ và tên</th>
            <th rowspan="2">Id cán bộ</th>
            <th rowspan="2">Chức vụ</th>
            <th colspan="2">Số máy điện thoại</th>
        </tr>
        <tr>
            <th>Email</th>
            <th>Di động</th>
        </tr>
        </thead>
        <tbody>

        <?php
        foreach ($donvis as $donvi) {
            echo '
        <div class="col_donvi">
            <tr>
                <td colspan="6" class="bg-light text-left font-weight-bold">'.$donvi["name"].'</td>
            </tr>';
            $canbos = $db->getAllCanBoByDonVi($donvi["id"], $key_search);
            if(empty($canbos)){
                echo '
            <tr>
                <td colspan="6" class="text-danger"> Không có cán bộ</td>
            </tr>';
            }
            foreach ($canbos as $key => $canbo) {
                $canbo["chucvu"] = $db->getChucVuById($canbo["id_chuc_vu"]);
                echo '<tr>
                <td>'. ++$key .'</td>
                <td>' . $canbo["name"].'</td>
                <td>' . $canbo["id"].'</td>
                <td>'.$canbo["chucvu"]["name"].'</td>
                <td>' . $canbo["email"].'</td>
                <td>' . $canbo["phone_number"].'</td>
            </tr>';
            }

            echo '
        </div>';
        }
        ?>

        </tbody>
    </table>
</div>
</div>
</body>
</html>
