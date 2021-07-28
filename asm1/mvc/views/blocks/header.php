<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .current-time {
            font-size: 1rem;
            position: absolute;
            left: 20px;

        }
    </style>
</head>

<body>
    <header>
        <!-- phần user đăng nhập -->
        <div class="container-pc">
            <ul class="user-option">
                <li>
                    <?php
                    echo "<p class='current-time' style='color:white;'><i class='far fa-clock'></i> " . $data['time'] . "</p>";
                    ?>
                </li>
                <li><a href="">
                        <i class="fas fa-box"></i>
                        Tra cứu đơn hàng
                    </a></li>
                <li><a href="../c_home/news">
                        <i class="fas fa-heart"></i>
                        Yêu thích
                    </a></li>
                <li><a href="">
                        <i class="fas fa-luggage-cart"></i>
                        Giỏ hàng
                    </a>
                </li>
                <li style="color: white;">
                    <i class="fas fa-user"></i>
                    <?php
                    if (isset($_SESSION['username'])) {
                        echo $_SESSION['username'];
                        echo '<a href="../c_home/logout"> Logout</a>';
                    } else {
                        echo '<a href="../c_register">Tài khoản</a>';
                    }
                    ?>
                </li>
            </ul>
            <!-- thanh nằm ngang -->
            <nav class="menu">
                <div class="logo-header">
                    <a href="/c_home">
                        <img src="/public/img/Logo_Ananas.png" alt="Logo" width="130px" height="130px">
                    </a>

                </div>
                <ul class="nav-row">
                    <li>
                        <a href="../c_danhmuc">SẢN PHẨM</a>
                        <div class="menu-display">
                            <ul class="mini-menu">
                                <li class="moi"><a href="#">MỚI</a></li>
                                <li class="hot"><a href="#">BÁN CHẠY</a></li>
                                <li class="sale"><a href="#">PHỤ KIỆN</a></li>
                                <!-- <span class="highlight">MỌI NGƯỜI THƯỜNG GỌI CHÚNG TÔI LÀ</span>
                                        <h3 class="highlight-dua">DỨA !</h3> -->
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#">GIÀY</a>
                        <div class="menu-display">
                            <ul class="giay-menu">
                                <li class="nam"><a href="#">NAM</a></li>
                                <li class="nu"><a href="#">NỮ</a></li>
                                <li class="sale-off-nav"><a href="#">GIẢM GIÁ</a></li>
                                <!-- <h3 class="highlight-buy">BUY MORE PAY LESS</h3> <span class="highlight">ÁP DỤNG KHI
                                            MUA PHỤ KIỆN</span> -->
                            </ul>
                        </div>
                    </li>
                    <li><a href="#">QUẦN ÁO</a></li>
                    <li><a href="#">PHỤ KIỆN</a></li>
                </ul>
                <!-- thanh tìm kiếm -->
                <div class="search">
                    <input class="timkiem" type="text" placeholder="Tìm kiếm...">
                    <a class="icon-search" href="">
                        <i class="fas fa-search"></i>
                    </a>
                </div>
            </nav>
            <!-- Hết phần header -->
        </div>
        <!-- header mobile -->
        <div class="container-mobile">
            <div class="nav-mobile">
                <a href="" class="logo-mobile"><img src="/Img/Logo_Ananas.png" alt=""></a>
                <input type="checkbox" name="" id="chk-menu">
                <div class="user-nav">
                    <i class="fas fa-search"></i>
                    <i class="fas fa-box"></i>
                    <i class="fas fa-user"></i>
                </div>
                <label for="chk-menu" class="hien-menu">
                    <i class="fas fa-bars"></i>
                </label>

                <ul class="menu-mobile">
                    <p href="">TÌM KIẾM</p>
                    <p href="">SẢN PHẨM</p>
                    <p href="">GIÀY</p>
                    <p href="">QUẦN ÁO</p>
                    <p href="">PHỤ KIỆN</p>

                    <label for="chk-menu" class="an-menu">
                        <i class="far fa-times-circle"></i>
                    </label>
                </ul>
            </div>
        </div>
    </header>
</body>

</html>