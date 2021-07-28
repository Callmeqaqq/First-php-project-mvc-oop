<?php
require_once "connect.php";

$query = "SELECT * FROM danhmuc";
$category = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Mã DM</th>
                <th scope="col">Tên DM</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($category as $key => $value) { ?>
                <tr>
                    <td><?php echo $key + 1 ?></td>
                    <td><?php echo $value['maDM'] ?></td>
                    <td><?php echo $value['tenDM'] ?></td>

                    <?php if ($value['status'] == 1) { ?>
                        <td><span >Còn bán</span></td>
                    <?php } else { ?>
                        <td><span>Ngừng bán</span></td>
                    <?php } ?>

                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="edit.php?id=<?php echo $value['id']?>"><button type="button" class="btn btn-primary">Sửa</button></a>
                            <a href="delete.php?id=<?php echo $value['id']?>"><button type="button" class="btn btn-primary">Xóa</button></a>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <a href="index.php"><button type="button" class="btn btn-primary btn-lg">Thêm SP</button></a>
</body>

</html>