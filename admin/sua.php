<?php
include '../ketnoi/connect.php';
$id = $_GET['id'];
$sqlsua = $connect->query("SELECT * FROM product WHERE id = $id");
foreach($sqlsua->fetch_assoc() as $k =>$v){
    $row[$k] = $v;
}
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang web của tôi</title>
    <link rel="stylesheet" href="font/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
</head>

<body>
    <form name="sua" id="sua" action="" method="POST">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <div class="box-input">
            <label for="tensp">Tên sản phẩm</label>
            <input type="text" name="tensp" value="<?php echo $row['tensp']; ?>">
        </div>
        <div class="box-input">
            <label for="metasp">Meta sản phẩm</label>
            <input type="text" name="meta" value="<?php echo $row['meta']; ?>">
        </div>
        <div class="box-input">
            <label for="price">Giá sản phẩm</label>
            <input type="text" name="gia" value="<?php echo $row['gia']; ?>">
        </div>
        <div class="box-input">
            <label for="sale-price">Giá khuyến mãi</label>
            <input type="text" name="giasale" value="<?php echo $row['giasale']; ?>">
        </div>
        <div class="box-input">
            <label for="details">Chi tiết sản phẩm</label>
            <input type="text" name="details" value="<?php echo $row['details']; ?>">
        </div>
        <div class="button">
            <input type="submit" name="submit" value="Sửa"  >
        </div>
    </form>
    <div id="results"></div>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#sua").validate({
                submitHandler: function (form) {
                    $('#results').html('<img src="Loading.gif"> Processing... please wait');
                    $.post('receive.php', $("#sua").serialize(), function (data) {
                        $('#results').html(data);
                    });
                }
            });
        });
    </script>
</body>

</html>
