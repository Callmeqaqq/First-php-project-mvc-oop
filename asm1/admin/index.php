<?php
require_once "connect.php";


if (isset($_POST['submit'])) {
    $maDM = $_POST['maDM'];
    $tenDM = $_POST['tenDM'];
    $status = $_POST['status'];

    $query = "INSERT INTO danhmuc(maDM, tenDM, status) VALUES ('$maDM','$tenDM','$status')";
    $category = mysqli_query($conn, $query);
    if ($category) {
        echo "Thành công";
    } else {
        echo "thất bại";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Thêm danh mục</h1>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="" class="form-label">Mã DM</label>
                <input type="text" class="form-control" name="maDM">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Tên DM</label>
                <input type="text" class="form-control" name="tenDM">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Trạng thái</label>
                <div class="radio">
                    <label for="">
                        <input type="radio" name="status" value="1" checked="checked">Kích hoạt
                    </label>
                    <label for="">
                        <input type="radio" name="status" value="0">Không kích hoạt
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Tạo DM</button>
        </form>
    </div>

</body>

</html>