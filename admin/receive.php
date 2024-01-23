<?php
    include '../ketnoi/connect.php';
    sleep(1);
    $id = $_POST['id'];
    $tensp = $_POST['tensp'];
    $metasp = $_POST['meta'];
    $price = $_POST['gia'];
    $saleprice = $_POST['giasale'];
    $details = $_POST['details'];
    $sqlupdate = "UPDATE product SET tensp = '$tensp', 
    meta = '$metasp',
    gia = $price,
    `giasale` = $saleprice,
    details = '$details'
    WHERE id = $id";
    echo $sqlupdate;
    $result = $connect->query($sqlupdate);
    // if($result){
    //     header("location: index.php");
    //     exit;
    // }
    echo '<script>window.location.href = "index.php";</script>';
?>