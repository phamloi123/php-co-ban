<?php
    $id = $_GET['id'];
    include '../ketnoi/connect.php';
    $sqlxoa = "DELETE FROM product WHERE id = $id";
    $result = $connect->query($sqlxoa);
    header("location: index.php")
?>