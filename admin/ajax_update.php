<?php
include '../ketnoi/connect.php';
$tensp = $_POST['tensp'];
$parent = $_POST['selectedOptionId'];
$sql1 = "SELECT * FROM catelory WHERE id = '$parent'";
$kq1 = $connect->query($sql1);
$value1 = $kq1->fetch_assoc();
$id1 = $value1['parent'];
$sql2 = "SELECT * FROM catelory WHERE id = '$id1'";
$kq2 = $connect->query($sql2);
$value2 = $kq2->fetch_assoc();
$id2 = $value2['parent'];
$sql3 = "SELECT meta FROM catelory WHERE id = '$id2'";
$kq3 = $connect->query($sql3);
$value3 = $kq3->fetch_assoc();
$cate = $value3['meta'];
if (isset($_FILES['tenimg'])) {
    $file_name = $_FILES['tenimg']['name'];
    $file_tmp = $_FILES['tenimg']['tmp_name'];
    $upload_dir = '../img/products/'.$cate.'/';
    echo $upload_dir;
    $img = $upload_dir . $file_name; //img/bat_tinh_yeu_len
    echo 'Đây là $img ' . $img;
    $metasp = $file_name;
    move_uploaded_file($file_tmp, $img); //img/bat_tinh)yeu_len.jpg
}
$gia = (int) $_POST['gia'];
if ($_POST['giasale'] === "") {
    $giasale = 0;
} else {
    $giasale = (int) $_POST['giasale'];
}
$details = $_POST['details'];
$sqlthem = "INSERT INTO product (tensp,gia,`giasale`,parent,details) 
    value ('$tensp',$gia,$giasale,$parent,'$details')";
$result = $connect->query($sqlthem);
echo "Thêm sản phẩm thành công";
?>