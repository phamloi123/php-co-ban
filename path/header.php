<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="ht-left">
                <div class="mail-service">
                    <i class=" fa fa-envelope"></i>
                    <a href="https://preview.colorlib.com/cdn-cgi/l/email-protection"
                        class="__cf_email__">huuloia7tqk@gmail.com</a>
                </div>
                <div class="phone-service">
                    <i class=" fa fa-phone"></i>
                    +84 857.915.409
                </div>
            </div>
            <div class="ht-right">
                <?php if(isset($_SESSION['username'])){
                    ?>
                        <a href="logout.php" class="login-panel noborder"></i>Đăng xuất</a>
                        <a href="#" class="login-panel"><i class="fa fa-user"></i><?php echo $_SESSION['username'] ?></a>
                    <?php
                }
                else{
                    ?>
                        <a href="login.php" class="noborder login-panel"><i class="fa fa-user"></i>Đăng nhập</a>
                        <a href="register.php" class="login-panel"><i class="fa fa-user"></i>Đăng ký</a>
                    <?php
                } ?>
                <div class="lan-selector">
                    <img src="img/flag.jpg">
                    <span>Việt Nam</span>
                    <!-- <select class="language_drop" name="countries" id="countries" style="width:300px;">
                            <option value='yt' data-image="img/flag-1.jpg" data-imagecss="flag yt" data-title="English">
                                English</option>
                            <option value='yu' data-image="img/flag-2.jpg" data-imagecss="flag yu"
                                data-title="Bangladesh">German </option>
                        </select> -->
                </div>
                <div class="top-social">
                    <span style=" font-size: 14px;">Hãy ghé thăm tôi tại:</span>
                    <a href="https://www.facebook.com/loi.huus"><i class="ti-facebook"></i></a>
                    <a href="https://www.facebook.com/loi.huus"><i class="ti-linkedin"></i></a>
                    <a href="https://www.pinterest.com/sonkun0297/"><i class="ti-pinterest"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="inner-header">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="logo">
                        <a href="index.php">
                            <img style="max-width: 90%;" src="img/logo-header2.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="advanced-search">
                        <button type="button" class="category-btn">Tìm kiếm</button>
                        <div class="input-group">
                            <input type="text" placeholder="Bạn cần gì?">
                            <button type="button"><i class="ti-search"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 text-right col-md-3">
                    <ul class="nav-right">
                        <li class="cart-icon">
                            <a href="faq.php">
                                <i class="icon_bag_alt"></i>
                                <span></span>
                            </a>
                            <!-- <div class="cart-hover">
                                <div class="select-items">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="si-pic"><img src="img/select-product-1.jpg" alt=""></td>
                                                <td class="si-text">
                                                    <div class="product-selected">
                                                        <p>$60.00 x 1</p>
                                                        <h6>Kabino Bedside Table</h6>
                                                    </div>
                                                </td>
                                                <td class="si-close">
                                                    <i class="ti-close"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="si-pic"><img src="img/select-product-2.jpg" alt=""></td>
                                                <td class="si-text">
                                                    <div class="product-selected">
                                                        <p>$60.00 x 1</p>
                                                        <h6>Kabino Bedside Table</h6>
                                                    </div>
                                                </td>
                                                <td class="si-close">
                                                    <i class="ti-close"></i>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="select-total">
                                    <span>total:</span>
                                    <h5>$120.00</h5>
                                </div>
                                <div class="select-button">
                                    <a href="#" class="primary-btn view-card">VIEW CARD</a>
                                    <a href="#" class="primary-btn checkout-btn">CHECK OUT</a>
                                </div>
                            </div> -->
                        </li>
                        <li class="cart-price">Giỏ hàng</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-item">
        <div class="container">
            <div class="nav-depart">
                <div class="depart-btn">
                    <i class="ti-menu"></i>
                    <span>Danh mục sản phẩm</span>
                    <ul class="depart-hover">
                        <?php
                        $catelory = "SELECT * FROM catelory WHERE parent = 0";
                        $result = $connect->query($catelory);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <li>
                                    <a href="<?php echo $row['meta'] ?>"><?php echo $row["tencate"]; ?></a>
                                    <ul class="sub-menu">
                                        <?php
                                        $query = "SELECT * FROM catelory where parent =".$row['id']."";
                                        $cmd = $connect->query($query);
                                        if ($cmd->num_rows > 0) {
                                            while ($row = $cmd->fetch_assoc()) {
                                                ?>
                                                    <li>
                                                        <a href="#"><?php echo $row['tencate']?></a>
                                                            <ul class="sub-menu">
                                                                <?php
                                                                    $query1 = "SELECT * FROM catelory where parent =".$row['id']."";
                                                                    $cmd1 = $connect->query($query1);
                                                                    if($cmd->num_rows > 0)
                                                                    {
                                                                        while ($row = $cmd1->fetch_assoc()) {
                                                                            ?>
                                                                                <li><a href="#"><?php echo $row['tencate']?></a></li>
                                                                            <?php
                                                                        }
                                                                    }
                                                                ?>
                                                                
                                                            </ul>
                                                    </li>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </ul>
                                </li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <nav class="nav-menu mobile-menu">
                <ul>
                    <?php
                    $menu = "SELECT * FROM menu";
                    $query = $connect->query($menu);
                    if ($query->num_rows > 0) {
                        while ($row = $query->fetch_assoc()) {
                            ?>
                            <li><a href="<?php echo $row['meta'] ?>"><?php echo $row['tenmenu'] ?></a></li>
                            <?php
                        }
                    }
                    ?>
                </ul>
            </nav>
            <!-- <div id="mobile-menu-wrap"></div> -->
        </div>
    </div>
</header>