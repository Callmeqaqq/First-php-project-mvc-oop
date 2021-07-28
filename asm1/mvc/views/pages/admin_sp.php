<?php
        $conn;
        $servername = 'localhost';
        $username = 'root';
        $password = 'root';
        $dbname = 'asm_php1';
            $conn = mysqli_connect('$servername', '$username', '$password','$dbname');
            mysqli_set_charset($conn, 'utf8'); 
        $query = "SELECT * FROM danhmuc";
        $category = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php ?>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Mã SP</th>
                <th scope="col">Tên SP</th>
                <th scope="col">Ngày nhập</th>
                <th scope="col">Đơn vị</th>
                <th scope="col">Số Lượng</th>
                <th scope="col">Mã DM</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($category as $key => $value) {?>
            <tr>
                <th scope="row"><?php echo $key ?></th>
                <td><?php echo $value['maDM'] ?></td>
                <td><?php echo $value['tenDM'] ?></td>
                <td><?php echo $value['ngayNhap'] ?></td>
                <td><?php echo $value['donViSP'] ?></td>
                <td><?php echo $value['soLuong'] ?></td>
                <td><?php echo $value['maDM'] ?></td>
                <td><?php echo $value['hinhAnh'] ?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="edit.php?id=1"><button type="button" class="btn btn-primary">Sửa</button></a>
                        <a href=""><button type="button" class="btn btn-primary">Xóa</button></a>
                    </div>
                </td>
            </tr>

            <?php } ?>
        </tbody>
    </table>
    <a href="../c_admin/addnew">Thêm SP</a>
</body>

</html>