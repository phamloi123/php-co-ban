<?php
    $username ="kxchbry8t5kq_sinhvienit"; // Khai báo username
    $password = "zxc!@#123";      // Khai báo password
    $server   = "localhost";   // Khai báo server
    $dbname   = "kxchbry8t5kq_sinhvienit";      // Khai báo database
    // Kết nối database
    $connect = new mysqli($server, $username, $password, $dbname);
    mysqli_set_charset($connect, 'UTF8');
    //Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
    if ($connect->connect_error) {
        die("Không kết nối :" . $connect->connect_error);
    }
?>