<?php
require_once "connect.php";


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $getdata = mysqli_query($conn, "SELECT * FROM danhmuc WHERE id = $id ");
    //assoc chuyển object thành mảng
    $category = mysqli_fetch_assoc($getdata);

    if (isset($_POST['submit'])) {
        $maDM = $_POST['maDM'];
        $tenDM = $_POST['tenDM'];
        $status = $_POST['status'];

        $sql = "UPDATE danhmuc SET maDM = '$maDM' , tenDM = '$tenDM' , status = '$status' WHERE id = $id";

        $query = mysqli_query($conn, $sql);

        if (!$query) {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully";
        if ($query) {
            echo "<script>alert('Đã được sửa');</script>";
            header("location: list_dm.php");
        } else {
            echo "fail";
        }
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
        <h1>Sửa danh mục</h1>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="" class="form-label">Mã DM</label>
                <input type="text" class="form-control" name="maDM" value="<?php echo $category['maDM'] ?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Tên DM</label>
                <input type="text" class="form-control" name="tenDM" value="<?php echo $category['tenDM'] ?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Trạng thái</label>
                <div class="radio">
                    <label for="">
                        <input type="radio" name="status" value="1" checked="checked" value="<?php
                                                                                                echo ($category['status'] == 1) ? 'checked' : '' ?>">Kích hoạt
                    </label>
                    <label for="">
                        <input type="radio" name="status" value="0" value="<?php
                                                                            echo ($category['status'] == 0) ? 'checked' : '' ?>">Không kích hoạt
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>

</body>

</html>