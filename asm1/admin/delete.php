<?php
require_once "connect.php";


if (isset($_GET['id'])) {
    $id = $_GET['id']; 
    $sql = "DELETE FROM danhmuc WHERE id = $id";
    $query = mysqli_query($conn, $sql);
    
        if ($query) {
            echo "<script>alert('Đã được sửa');</script>";
            header("location: list_dm.php");
        } else {
            echo "fail";
        }
    
}
?>