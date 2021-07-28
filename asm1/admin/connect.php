<?php
    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    $dbname = 'asm_php1';
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    mysqli_set_charset($conn, 'utf8');
