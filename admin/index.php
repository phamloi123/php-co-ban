<?php include '../ketnoi/connect.php' ?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fashi | Template</title>

    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
</head>

<body class="body">
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Thêm sản phẩm</button>
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>IMG</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Giá sale</th>
                                    <th>Thông tin chi tiết</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sqllietke = "SELECT * FROM product";
                                $result = $connect->query($sqllietke);
                                while ($row = $result->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td>
                                            <img src="../img/products/<?php echo $row['meta'] ?>">
                                        </td>
                                        <td>
                                            <?php echo $row['tensp'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row['gia'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row['giasale'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row['details'] ?>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary" href="sua.php?id=<?php echo $row['id'] ?>">Sửa</a>
                                            <a onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này?')"
                                                href="xoa.php?id=<?php echo $row['id'] ?>">Xóa</a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Thêm sản phẩm</h4>
                </div>
                <div class="modal-body">
                    <form name="form" id="form" action="ajax_update.php" enctype="multipart/form-data" method="POST">
                        <div class="modal-body">
                            <div class="box-input">
                                <label>Tên sản phẩm</label>
                                <input type="text" name="tensp" autocomplete="off" required>
                            </div>
                            <div class="box-input">
                                <label>Giá</label>
                                <input type="text" name="gia" required>
                            </div>
                            <div class="box-input">
                                <label>Loại sản phẩm</label>
                                <select class="form-select" name="selectedOptionId">
                                    <?php
                                    $select = "SELECT * FROM catelory WHERE parent > 4";
                                    $result = $connect->query($select);
                                    ?>
                                    <?php
                                    while ($row = $result->fetch_assoc()) {
                                        ?>
                                        <option name="selectedOptionId" value="<?php echo $row['id']; ?>">
                                            <?php echo $row['tencate'] ?>
                                        </option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="box-input">
                                <label>Giá khuyến mãi</label>
                                <input type="text" name="giasale">
                            </div>
                            <div class="box-input">
                                <label>Thông tin sản phẩm</label>
                                <input type="text" name="details">
                            </div>
                            <div class="box-input">
                                <label>Upload hình ảnh</label>
                                <input type="file" name="tenimg">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" data-dismiss="modal">Thêm sản phẩm</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>

</html>