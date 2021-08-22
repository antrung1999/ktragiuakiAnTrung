<?php 
    session_start();
    $NameOfUser = $_SESSION["username"];
?>

<!doctype html>
<html lang="en">

<head>
    <title>Trang quản trị danh bạ ĐHTL</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">


                        <a class="navbar-brand" href="#">
                            <img src="imgs/LogoTL.png" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="http://localhost/kiemtra/index.php">Trang chủ <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Giới thiệu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Bài viết</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Liên hệ - góp ý</a>
                                </li>
                            </ul>
                            <form class="form-inline">
                                <input class="form-control mr-sm-2" type="text" />
                                <button class="btn btn-primary my-2 my-sm-0" type="submit">
                                    Tìm kiếm
                                </button>
                            </form>
                        </div>

                    </nav>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-md-3 method-left">
                    <div class="hello">Xin chào</div>
                    <div class="info">
                        <div class="avatar">
                        </div>
                        <span class="username">
                            <?php 
                                echo $NameOfUser;
                            ?>
                        </span>
                        <a href="https://localhost/kiemtra/admin/index.php">đăng xuất</a>
                    </div>
                    <div class="btn-group-vertical">
                        <button type="button" class="btn btnAdd">Thêm thông tin cán bộ</button>
                        <button type="button" class="btn btnUpdate">Sửa thông tin cán bộ</button>
                        <button type="button" class="btn btnDelete">Xóa thông tin cán bộ</button>
                    </div>
                </div>
                <div class="col-xs-12 col-md-9 content-right">
                    <div class="titlePage">
                        <!-- this is content via js -->
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="addinfomation"> 
                                <!-- form add infomation -->
                                <form role="form" method="post" id="addForm" action="addinfomation.php">
                                    <div class="form-group">
                                        <label for="exampleInputName">
                                            Họ và Tên
                                        </label>
                                        <input type="text" class="form-control" id="addName" name="addName" />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputCV">
                                            Chức Vụ
                                        </label>
                                        <input type="text" class="form-control" id="id_chucvu_add" name="id_chucvu_add"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputCV">
                                            Đơn Vị
                                        </label>
                                        <input type="text" class="form-control" id="id_donvi_add" name="id_donvi_add"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail">
                                            Email
                                        </label>
                                        <input type="text" class="form-control" id="addEmail" name="addEmail"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPN">
                                            Di Động
                                        </label>
                                        <input type="text" class="form-control" id="addPN" name="addPN"/>
                                    </div>
                                    <button type="submit" class="btn btn-primary submit-add">
                                        Thêm thông tin
                                    </button>
                                </form>
                            </div>
                            <div class="updateinfomation">
                                <!-- form update infomation -->
                                <form role="form" method="post" id="updateForm" action="updateinfomation.php">
                                    <div class="form-group">
                                        <label for="exampleInputCB">
                                            ID Cán bộ cần sửa
                                        </label>
                                        <input type="text" class="form-control" id="idCB" name="idCB"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName">
                                            Họ tên
                                        </label>
                                        <input type="text" class="form-control" id="upName" name="upName" />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputCV">
                                            Chức Vụ
                                        </label>
                                        <input type="text" class="form-control" id="upCV" name="upCV"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputDV">
                                            Đơn Vị
                                        </label>
                                        <input type="text" class="form-control" id="upDV" name="upDV" />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail">
                                            Email
                                        </label>
                                        <input type="text" class="form-control" id="upEmail" name="upEmail" />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPN">
                                            Di Động
                                        </label>
                                        <input type="text" class="form-control" id="upPN" name="upPN" />>
                                    <button type="submit" class="btn btn-primary submit-update">
                                        Sửa thông tin
                                    </button>
                                </form>
                            </div>
                            <div class="updatePost">
                                <!-- form delete post -->
                                <form role="form" method="get" id="deleteForm" action="./delinfomation.php">
                                    <div class="form-group">
                                        <label for="id_canbo_delete">
                                            ID cán bộ cần xóa
                                        </label>
                                        <input type="text" class="form-control" id="id_canbo_delete" name="id_canbo_delete" />
                                    </div>
                                    <button type="submit" class="btn btn-primary submit-del">
                                        Xóa thông tin
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <script src="js/direc.js"></script>
</body>

</html>
