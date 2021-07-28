<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Products</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="img/site.webmanifest">
    <link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="Ultimate Multipurpose HTML Dashboard Kit">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@ui8">
    <meta name="twitter:title" content="Unity">
    <meta name="twitter:description" content="Ultimate Multipurpose HTML Dashboard Kit">
    <meta name="twitter:creator" content="@ui8">
    <meta property="og:title" content="Unity">
    <meta property="og:type" content="Article">
    <meta property="og:description" content="Ultimate Multipurpose HTML Dashboard Kit">
    <meta property="og:site_name" content="Unity">
    <meta property="fb:admins" content="132951670226590">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Poppins:ital,wght@0,500;1,500&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" media="all" href="/public/css/app.css">
    <script src="https://kit.fontawesome.com/0ce02f9503.js" crossorigin="anonymous"></script>
    <script>
        var viewportmeta = document.querySelector('meta[name="viewport"]');
        if (viewportmeta) {
            if (screen.width < 375) {
                var newScale = screen.width / 375;
                viewportmeta.content = 'width=375, minimum-scale=' + newScale + ', maximum-scale=1.0, user-scalable=no, initial-scale=' + newScale + '';
            } else {
                viewportmeta.content = 'width=device-width, maximum-scale=1.0, initial-scale=1.0';
            }
        }
    </script>
</head>

<body>
    <script>
        console.log(localStorage.getItem('darkMode'));
        if (localStorage.getItem('darkMode') === "on") {
            document.body.classList.add("dark");
            document.addEventListener("DOMContentLoaded", function() {
                document.querySelector('.js-switch-theme input').checked = true;
            });
        }
    </script>
        

    <div class="page">
    <?php
                if(isset($data['resultaddnew'])){
                    if ($data['resultaddnew'] == true) {
                        echo "<script>alert('Thành công thêm vào kho');</script>";
                    } else {
                        echo "<script>alert('Thất bại thêm vào kho');</script>";
                    }
                }
            ?>
        <div class="sidebar">
            <div class="sidebar__top"><button class="sidebar__close"><svg class="icon icon-close">
                        <use xlink:href="img/sprite.svg#icon-close"></use>
                    </svg></button><a class="sidebar__logo" href="index.php"><img class="sidebar__pic sidebar__pic_black" src="/public/img/logo.png" alt="" /><img class="sidebar__pic sidebar__pic_white" src="/public/img/logo-white.png" alt="" /></a><button class="sidebar__burger"></button></div>
            <div class="sidebar__wrapper">
                <div class="sidebar__inner"><a class="sidebar__logo" href="index.php"><img class="sidebar__pic" src="/public/img/logo-sm.png" alt="" /></a>
                    <div class="sidebar__list">
                        <div class="sidebar__group">
                            <div class="sidebar__caption caption-sm">Công cụ<span> quản trị</span></div>
                            <div class="sidebar__menu"><a class="sidebar__item" href="index.php">
                                    <div><i class="fas fa-chart-bar"></i></div>
                                    <div class="sidebar__text"> Tổng quan</div>
                                </a>
                                <a class="sidebar__item active" href="../c_admin">
                                    <div><i class="fas fa-warehouse"></i></div>
                                    <div class="sidebar__text">Sản phẩm</div>
                                </a>
                                <a class="sidebar__item" href="campaigns.php">
                                    <div><i class="fas fa-user-cog"></i></div>
                                    <div class="sidebar__text"> Cài đặt</div>
                                </a></div>
                        </div>
                        <div class="sidebar__group">
                            <div class="sidebar__caption caption-sm">Khách hàng</div>
                            <div class="sidebar__menu">
                                <a class="sidebar__item" href="inbox.php">
                                    <div class="sidebar__icon">
                                        <svg class="icon icon-message">
                                            <use xlink:href="img/sprite.svg#icon-message"></use>
                                        </svg>
                                    </div>
                                    <div class="sidebar__text"><i class="far fa-envelope-open"></i> Tin nhắn</div>
                                    <div class="sidebar__counter">18</div>
                                </a>
                                <a class="sidebar__item" href="notifications.php">
                                    <div class="sidebar__icon">
                                        <svg class="icon icon-notification">
                                            <use xlink:href="img/sprite.svg#icon-notification"></use>
                                        </svg>
                                    </div>
                                    <div class="sidebar__text"><i class="far fa-bell"></i> Thông báo</div>
                                    <div class="sidebar__counter">2 </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar__profile">
                        <div class="sidebar__details"><a class="sidebar__link" href="#">
                                <div class="sidebar__icon"><svg class="icon icon-profile">
                                        <use xlink:href="img/sprite.svg#icon-profile"></use>
                                    </svg></div>
                                <div class="sidebar__text">Profile</div>
                            </a><a class="sidebar__link" href="#">
                                <div class="sidebar__icon"><svg class="icon icon-logout">
                                        <use xlink:href="img/sprite.svg#icon-logout"></use>
                                    </svg></div>
                                <div class="sidebar__text">Log out</div>
                            </a></div><a class="sidebar__user" href="#">
                            <div class="sidebar__ava"><img class="sidebar__pic" src="/public/img/ava.png" alt="" /></div>
                            <div class="sidebar__desc">
                                <div class="sidebar__man">Duy Quang</div>
                                <div class="sidebar__status caption">Manager</div>
                            </div>
                            <div class="sidebar__arrow"><svg class="icon icon-arrows">
                                    <use xlink:href="img/sprite.svg#icon-arrows"></use>
                                </svg></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="sidebar__bottom"><label class="switch switch_theme js-switch-theme"><input class="switch__input" type="checkbox" /><span class="switch__in"><span class="switch__box"></span><span class="switch__icon"><svg class="icon icon-moon">
                                <use xlink:href="img/sprite.svg#icon-moon"></use>
                            </svg><svg class="icon icon-sun">
                                <use xlink:href="img/sprite.svg#icon-sun"></use>
                            </svg></span></span></label></div>
        </div>
        <div class="page__wrapper">
            <div class="page__center">
                <div class="page__row page__row_head">
                    <div class="page__col">
                        <div class="page__hello h5">Chào Duy Quang ,</div>
                        <div class="page__welcome h2">Mừng trở lại!<span class="desktop-hide">👋</span></div>
                    </div>
                </div>
                <div class="page__content">
                    <div class="banner">
                        <div class="banner__container">
                            <div class="banner__preview"><img class="banner__pic" src="/public/img/banner-pic.png" alt=""></div>
                            <div class="banner__wrap">
                                <div class="banner__title h3">Quản lý sản phẩm</div>
                                <div class="banner__text">Thêm - Sửa - Xóa sản phẩm</div>
                                <a href="../c_admin/addnew"><button class="banner__btn btn btn_white">Thêm sản phẩm</button></a>
                                <button class="banner__btn btn btn_white">Xóa sản phẩm</button>
                                <button class="banner__btn btn btn_white">Chỉnh chi tiết sản phẩm</button>
                            </div>
                        </div>
                    </div>
                    <div class="page__stat page__stat_pt32">
                        <div class="sorting">
                            <div class="sorting__row">
                                <div class="sorting__col">
                                    <div class="sorting__dropdowns">
                                        <div class="dropdown js-dropdown">
                                            <div class="dropdown__head js-dropdown-head">7 ngày qua</div>
                                            <div class="dropdown__body js-dropdown-body"><a class="dropdown__item" href="#">
                                                    <div class="dropdown__title title">14 ngày qua </div>
                                                </a><a class="dropdown__item" href="#">
                                                    <div class="dropdown__title title">1 tháng qua</div>
                                                </a><a class="dropdown__item" href="#">
                                                    <div class="dropdown__title title">1 năm qua </div>
                                                </a></div>
                                        </div>
                                        <div class="dropdown js-dropdown">
                                            <div class="dropdown__head js-dropdown-head">Mới nhất</div>
                                            <div class="dropdown__body js-dropdown-body"><a class="dropdown__item" href="#">
                                                    <div class="dropdown__title title">Hot</div>
                                                    <div class="dropdown__info caption">1 tháng qua</div>
                                                </a><a class="dropdown__item" href="#">
                                                    <div class="dropdown__title title">Doanh thu cao nhất</div>
                                                    <div class="dropdown__info caption">1 tháng qua</div>
                                                </a><a class="dropdown__item" href="#">
                                                    <div class="dropdown__title title">Hết hàng</div>
                                                    <div class="dropdown__info caption">SP còn bán</div>
                                                </a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sorting__col">
                                    <div class="sorting__line">
                                        <div class="sorting__search"><button class="sorting__open"><svg class="icon icon-search">
                                                    <use xlink:href="img/sprite.svg#icon-search"></use>
                                                </svg></button><input class="sorting__input" type="text" placeholder="Search"></div>
                                        <div class="sorting__actions"><button class="sorting__action"><svg class="icon icon-edit">
                                                    <use xlink:href="img/sprite.svg#icon-edit"></use>
                                                </svg></button><button class="sorting__action"><svg class="icon icon-box">
                                                    <use xlink:href="img/sprite.svg#icon-box"></use>
                                                </svg></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="products products_main">
                            <div class="products__table">
                                <div class="products__row products__row_head">
                                    <div class="products__cell"><label class="checkbox"><input class="checkbox__input" type="checkbox"><span class="checkbox__in"><span class="checkbox__tick"></span></span></label></div>
                                    <div class="products__cell">Sản Phẩm</div>
                                    <div class="products__cell">Tồn hàng</div>
                                    <div class="products__cell">Màu</div>
                                    <div class="products__cell">Giá</div>
                                    <div class="products__cell">Đánh giá</div>
                                </div>
                                <div class="products__row">
                                    <div class="products__cell"><label class="checkbox"><input class="checkbox__input" type="checkbox"><span class="checkbox__in"><span class="checkbox__tick"></span></span></label></div>
                                    <div class="products__cell"><a class="products__item" href="#">
                                            <div class="products__preview"><img class="products__pic" src="/public/img/non3.jpg" alt=""></div>
                                            <div class="products__details">
                                                <div class="products__title title">Nón</div>
                                                <div class="products__info caption color-gray">3D Illustration</div>
                                            </div>
                                        </a></div>
                                    <div class="products__cell">
                                        <div class="products__payment">37 in stock</div>
                                    </div>
                                    <div class="products__cell">
                                        <div class="products__color">
                                            <div class="products__bg" style="background-color: #6C5DD3;"></div>
                                            <div class="products__text">Purple</div>
                                        </div>
                                    </div>
                                    <div class="products__cell">
                                        <div class="products__cost">
                                            <div class="products__money">$68.00</div>
                                            <div class="products__tooltip">
                                                <div class="products__sale">
                                                    <div class="products__icon bg-red"><img class="products__pic" src="/public/img/chat-black.svg" alt=""></div>
                                                    <div class="products__caption caption-sm">Latest Sale</div>
                                                </div>
                                                <div class="products__price h3">$68</div>
                                                <div class="products__progress"><span style="width: 68%;"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products__cell">
                                        <div class="products__rating"><span class="color-green">5.0</span> (45 votes)</div>
                                    </div>
                                </div>
                                <div class="products__body">
                                    <div class="products__bg" style="background-color: #6C5DD3;"></div>
                                    <div class="products__line">
                                        <div class="products__col">
                                            <div class="products__money">$68.45</div>
                                        </div>
                                        <div class="products__col">37 in stock</div>
                                        <div class="products__col color-green">5.0</div>
                                    </div>
                                </div>
                                <div class="products__row">
                                    <div class="products__cell"><label class="checkbox"><input class="checkbox__input" type="checkbox"><span class="checkbox__in"><span class="checkbox__tick"></span></span></label></div>
                                    <div class="products__cell"><a class="products__item" href="#">
                                            <div class="products__preview"><img class="products__pic" src="/public/img/giay3.jpg" alt=""></div>
                                            <div class="products__details">
                                                <div class="products__title title">Sapiens Illustration</div>
                                                <div class="products__info caption color-gray">3D Illustration</div>
                                            </div>
                                        </a></div>
                                    <div class="products__cell">
                                        <div class="products__payment">37 in stock</div>
                                    </div>
                                    <div class="products__cell">
                                        <div class="products__color">
                                            <div class="products__bg" style="background-color: #7FBA7A;"></div>
                                            <div class="products__text">Green</div>
                                        </div>
                                    </div>
                                    <div class="products__cell">
                                        <div class="products__cost">
                                            <div class="products__money">$68.00</div>
                                            <div class="products__tooltip">
                                                <div class="products__sale">
                                                    <div class="products__icon bg-red"><img class="products__pic" src="/public/img/chat-black.svg" alt=""></div>
                                                    <div class="products__caption caption-sm">Latest Sale</div>
                                                </div>
                                                <div class="products__price h3">$68</div>
                                                <div class="products__progress"><span style="width: 68%;"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products__cell">
                                        <div class="products__rating"><span class="color-green">5.0</span> (45 votes)</div>
                                    </div>
                                </div>
                                <div class="products__body">
                                    <div class="products__bg" style="background-color: #7FBA7A;"></div>
                                    <div class="products__line">
                                        <div class="products__col">
                                            <div class="products__money">$68.45</div>
                                        </div>
                                        <div class="products__col">37 in stock</div>
                                        <div class="products__col color-green">5.0</div>
                                    </div>
                                </div>
                                <div class="products__row">
                                    <div class="products__cell"><label class="checkbox"><input class="checkbox__input" type="checkbox"><span class="checkbox__in"><span class="checkbox__tick"></span></span></label></div>
                                    <div class="products__cell"><a class="products__item" href="#">
                                            <div class="products__preview"><img class="products__pic" src="/public/img/vo.jpg" alt=""></div>
                                            <div class="products__details">
                                                <div class="products__title title">Collab Landing Page</div>
                                                <div class="products__info caption color-gray">3D Illustration</div>
                                            </div>
                                        </a></div>
                                    <div class="products__cell">
                                        <div class="products__payment">37 in stock</div>
                                    </div>
                                    <div class="products__cell">
                                        <div class="products__color">
                                            <div class="products__bg" style="background-color: #FFCE73;"></div>
                                            <div class="products__text">Yellow</div>
                                        </div>
                                    </div>
                                    <div class="products__cell">
                                        <div class="products__cost">
                                            <div class="products__money">$68.00</div>
                                            <div class="products__tooltip">
                                                <div class="products__sale">
                                                    <div class="products__icon bg-red"><img class="products__pic" src="/public/img/chat-black.svg" alt=""></div>
                                                    <div class="products__caption caption-sm">Latest Sale</div>
                                                </div>
                                                <div class="products__price h3">$68</div>
                                                <div class="products__progress"><span style="width: 68%;"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products__cell">
                                        <div class="products__rating"><span class="color-green">5.0</span> (45 votes)</div>
                                    </div>
                                </div>
                                <div class="products__body">
                                    <div class="products__bg" style="background-color: #FFCE73;"></div>
                                    <div class="products__line">
                                        <div class="products__col">
                                            <div class="products__money">$68.45</div>
                                        </div>
                                        <div class="products__col">37 in stock</div>
                                        <div class="products__col color-green">5.0</div>
                                    </div>
                                </div>
                                <div class="products__row">
                                    <div class="products__cell"><label class="checkbox"><input class="checkbox__input" type="checkbox"><span class="checkbox__in"><span class="checkbox__tick"></span></span></label></div>
                                    <div class="products__cell"><a class="products__item" href="#">
                                            <div class="products__preview"><img class="products__pic" src="/public/img/non500x500.jpg" alt=""></div>
                                            <div class="products__details">
                                                <div class="products__title title">Abstract 3D Kit</div>
                                                <div class="products__info caption color-gray">3D Illustration</div>
                                            </div>
                                        </a></div>
                                    <div class="products__cell">
                                        <div class="products__payment">37 in stock</div>
                                    </div>
                                    <div class="products__cell">
                                        <div class="products__color">
                                            <div class="products__bg" style="background-color: #FFA2C0;"></div>
                                            <div class="products__text">Pink</div>
                                        </div>
                                    </div>
                                    <div class="products__cell">
                                        <div class="products__cost">
                                            <div class="products__money">$68.00</div>
                                            <div class="products__tooltip">
                                                <div class="products__sale">
                                                    <div class="products__icon bg-red"><img class="products__pic" src="/public/img/chat-black.svg" alt=""></div>
                                                    <div class="products__caption caption-sm">Latest Sale</div>
                                                </div>
                                                <div class="products__price h3">$68</div>
                                                <div class="products__progress"><span style="width: 68%;"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products__cell">
                                        <div class="products__rating"><span class="color-green">5.0</span> (45 votes)</div>
                                    </div>
                                </div>
                                <div class="products__body">
                                    <div class="products__bg" style="background-color: #FFA2C0;"></div>
                                    <div class="products__line">
                                        <div class="products__col">
                                            <div class="products__money">$68.45</div>
                                        </div>
                                        <div class="products__col">37 in stock</div>
                                        <div class="products__col color-green">5.0</div>
                                    </div>
                                </div>
                                <div class="products__row">
                                    <div class="products__cell"><label class="checkbox"><input class="checkbox__input" type="checkbox"><span class="checkbox__in"><span class="checkbox__tick"></span></span></label></div>
                                    <div class="products__cell"><a class="products__item" href="#">
                                            <div class="products__preview"><img class="products__pic" src="/public/img/giay4.jpg" alt=""></div>
                                            <div class="products__details">
                                                <div class="products__title title">Abstract 3D Kit</div>
                                                <div class="products__info caption color-gray">3D Illustration</div>
                                            </div>
                                        </a></div>
                                    <div class="products__cell">
                                        <div class="products__payment">37 in stock</div>
                                    </div>
                                    <div class="products__cell">
                                        <div class="products__color">
                                            <div class="products__bg" style="background-color: #6C5DD3;"></div>
                                            <div class="products__text">Purple</div>
                                        </div>
                                    </div>
                                    <div class="products__cell">
                                        <div class="products__cost">
                                            <div class="products__money">$68.00</div>
                                            <div class="products__tooltip">
                                                <div class="products__sale">
                                                    <div class="products__icon bg-red"><img class="products__pic" src="/public/img/chat-black.svg" alt=""></div>
                                                    <div class="products__caption caption-sm">Latest Sale</div>
                                                </div>
                                                <div class="products__price h3">$68</div>
                                                <div class="products__progress"><span style="width: 68%;"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products__cell">
                                        <div class="products__rating"><span class="color-green">5.0</span> (45 votes)</div>
                                    </div>
                                </div>
                                <div class="products__body">
                                    <div class="products__bg" style="background-color: #6C5DD3;"></div>
                                    <div class="products__line">
                                        <div class="products__col">
                                            <div class="products__money">$68.45</div>
                                        </div>
                                        <div class="products__col">37 in stock</div>
                                        <div class="products__col color-green">5.0</div>
                                    </div>
                                </div>
                                <div class="products__row">
                                    <div class="products__cell"><label class="checkbox"><input class="checkbox__input" type="checkbox"><span class="checkbox__in"><span class="checkbox__tick"></span></span></label></div>
                                    <div class="products__cell"><a class="products__item" href="#">
                                            <div class="products__preview"><img class="products__pic" src="/public/img/giay.jpg" alt=""></div>
                                            <div class="products__details">
                                                <div class="products__title title">Sapiens Illustration</div>
                                                <div class="products__info caption color-gray">3D Illustration</div>
                                            </div>
                                        </a></div>
                                    <div class="products__cell">
                                        <div class="products__payment">37 in stock</div>
                                    </div>
                                    <div class="products__cell">
                                        <div class="products__color">
                                            <div class="products__bg" style="background-color: #7FBA7A;"></div>
                                            <div class="products__text">Green</div>
                                        </div>
                                    </div>
                                    <div class="products__cell">
                                        <div class="products__cost">
                                            <div class="products__money">$68.00</div>
                                            <div class="products__tooltip">
                                                <div class="products__sale">
                                                    <div class="products__icon bg-red"><img class="products__pic" src="/public/img/chat-black.svg" alt=""></div>
                                                    <div class="products__caption caption-sm">Latest Sale</div>
                                                </div>
                                                <div class="products__price h3">$68</div>
                                                <div class="products__progress"><span style="width: 68%;"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products__cell">
                                        <div class="products__rating"><span class="color-green">5.0</span> (45 votes)</div>
                                    </div>
                                </div>
                                <div class="products__body">
                                    <div class="products__bg" style="background-color: #7FBA7A;"></div>
                                    <div class="products__line">
                                        <div class="products__col">
                                            <div class="products__money">$68.45</div>
                                        </div>
                                        <div class="products__col">37 in stock</div>
                                        <div class="products__col color-green">5.0</div>
                                    </div>
                                </div>
                                <div class="products__row">
                                    <div class="products__cell"><label class="checkbox"><input class="checkbox__input" type="checkbox"><span class="checkbox__in"><span class="checkbox__tick"></span></span></label></div>
                                    <div class="products__cell"><a class="products__item" href="#">
                                            <div class="products__preview"><img class="products__pic" src="/public/img/non2.jpg" alt=""></div>
                                            <div class="products__details">
                                                <div class="products__title title">Collab Landing Page</div>
                                                <div class="products__info caption color-gray">3D Illustration</div>
                                            </div>
                                        </a></div>
                                    <div class="products__cell">
                                        <div class="products__payment">37 in stock</div>
                                    </div>
                                    <div class="products__cell">
                                        <div class="products__color">
                                            <div class="products__bg" style="background-color: #FFCE73;"></div>
                                            <div class="products__text">Yellow</div>
                                        </div>
                                    </div>
                                    <div class="products__cell">
                                        <div class="products__cost">
                                            <div class="products__money">$68.00</div>
                                            <div class="products__tooltip">
                                                <div class="products__sale">
                                                    <div class="products__icon bg-red"><img class="products__pic" src="/public/img/chat-black.svg" alt=""></div>
                                                    <div class="products__caption caption-sm">Latest Sale</div>
                                                </div>
                                                <div class="products__price h3">$68</div>
                                                <div class="products__progress"><span style="width: 68%;"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products__cell">
                                        <div class="products__rating"><span class="color-green">5.0</span> (45 votes)</div>
                                    </div>
                                </div>
                                <div class="products__body">
                                    <div class="products__bg" style="background-color: #FFCE73;"></div>
                                    <div class="products__line">
                                        <div class="products__col">
                                            <div class="products__money">$68.45</div>
                                        </div>
                                        <div class="products__col">37 in stock</div>
                                        <div class="products__col color-green">5.0</div>
                                    </div>
                                </div>
                            </div>
                            <div class="products__more"><button class="products__btn btn btn_black">Load More</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="popup mfp-hide" id="popup-settings">
        <form class="popup__form">
            <div class="popup__title h6">Account Settings</div>
            <div class="popup__tags"><a class="popup__tag active" href="#">Profile</a><a class="popup__tag" href="#">Password</a><a class="popup__tag" href="#">Email</a><a class="popup__tag" href="#">Notification</a><a class="popup__tag" href="#">Settings</a></div><select class="popup__select mobile-show">
                <option>Profile</option>
                <option>Password</option>
                <option>Email</option>
                <option>Notification</option>
                <option>Settings</option>
            </select>
            <div class="popup__user">
                <div class="popup__title h6 mobile-show">Your Profile</div>
                <div class="popup__category caption-sm">Your Avatar</div>
                <div class="popup__line">
                    <div class="popup__ava"><img class="popup__pic" src="/public/img/ava.png" alt=""></div>
                    <div class="popup__details">
                        <div class="popup__btns">
                            <div class="popup__loading"><input class="popup__file" type="file"><button class="popup__btn btn btn_purple">Upload New</button></div><button class="popup__btn btn btn_gray">Delete Avatar</button>
                        </div>
                        <div class="popup__text">Avatar help your teammates recognize you in Unity.</div>
                    </div>
                </div>
            </div>
            <div class="popup__fieldset">
                <div class="popup__row">
                    <div class="popup__field field">
                        <div class="field__label">Your Full Name</div>
                        <div class="field__wrap"><input class="field__input" type="text"></div>
                    </div>
                    <div class="popup__field field">
                        <div class="field__label">Display Name</div>
                        <div class="field__wrap"><input class="field__input" type="text"></div>
                    </div>
                </div>
                <div class="popup__row">
                    <div class="popup__field field">
                        <div class="field__label">Role</div>
                        <div class="field__wrap"><input class="field__input" type="text"></div>
                    </div>
                    <div class="popup__field field">
                        <div class="field__label">Location</div>
                        <div class="field__wrap"><input class="field__input" type="text"></div>
                    </div>
                </div>
                <div class="popup__row">
                    <div class="popup__field field">
                        <div class="field__label">Role</div>
                        <div class="field__wrap"><input class="field__input" type="text"></div>
                    </div>
                    <div class="popup__field field">
                        <div class="field__label">Team</div>
                        <div class="field__wrap"><input class="field__input" type="text"></div>
                    </div>
                </div>
                <div class="popup__field field">
                    <div class="field__label">Bio</div>
                    <div class="field__wrap"><textarea class="field__textarea"></textarea></div>
                </div>
            </div><button class="popup__btn btn btn_black" type="submit">Update Profile</button>
        </form>
    </div>
    <!-- scripts-->
    <script src="/public/js/lib/jquery.min.js"></script>
    <script src="/public/js/lib/owl.carousel.min.js"></script>
    <script src="/public/js/lib/svg4everybody.min.js"></script>
    <script src="/public/js/lib/apexcharts.min.js"></script>
    <script src="/public/js/lib/jquery.magnific-popup.min.js"></script>
    <script src="/public/js/app.js"></script>
    <script src="/public/js/charts.js"></script>
</body>

</html>