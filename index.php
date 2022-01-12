<?php
include './config.php';
    $user = [];
    $user = mysqli_query($coon,"SELECT * FROM user WHERE 5");
    //$user = [];
    $user = (isset($_SESSION['user']))? $user = $_SESSION['user']: [];
    // if($user == []){
    //     header('location: dangky.php');
    // }
    
    //$user = $_SESSION['user'];
    mysqli_close($coon);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link rel="stylesheet" href="./assets/fontawesome-web/fontawesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Qwitcher+Grypen:wght@400;700&family=Waterfall&display=swap" rel="stylesheet">
    <title>Nhóm 6</title>
</head>
<body>
    <div class="main">
        <!--Header-->
        <div class="header">
            <div class="header-logo">
                <img src="./assets/img/logo/logo4.png" alt="" class="header-logo__img">
            </div>
            
            <div class="header-content">
                <div class="header-content__heading">
                    <span class="header-content__heading-text">Giải pháp toàn diện cho ngôi nhà của bạn</span>

                    <span class="header-content__heading-icon">
                        <i class="fas fa-phone-alt"></i>
                    </span>
                    <span class="header-content__heading-phone">0938 78 0005 - 0967 78 0005</span>
                </div>

            <!--Header navbar-->
                <div class="header-nav">
                    <ul class="header-nav__list">
                        <li class="header-nav__item">
                            <a href="" class="header-nav__link">TRANG CHỦ</a>
                        </li>
                        <li class="header-nav__item">
                            <a href="" class="header-nav__link">GIỚI THIỆU</a>
                        </li>
                        <li class="header-nav__item">
                            <a href="" class="header-nav__link">SẢN PHẨM</a>
                        </li>
                        <li class="header-nav__item">
                            <a href="" class="header-nav__link">TIN TỨC</a>
                        </li>
                        <li class="header-nav__item">
                            <a href="" class="header-nav__link">LIÊN HỆ</a>
                        </li>
                        
                        <li class="header-nav__item">
                        <?php if(isset($user) and isset($user['name']) and isset($user['coin'])){
                            echo '<a href="./profile.php" class="header-nav__link"><i class="fas fa-user"></i>Thông Tin Cá Nhân</a>';
                            }else{
                                echo '
                                <a href="dangnhap.php" class="header-nav__link">ĐĂNG NHẬP</a>
                                    ';
                                } ?>
                        </li>
                    </ul>
                    <div class="header-search">
                        <input type="text" class="header-saerch__input" placeholder="Nhập từ khóa">
                            <i class="fas fa-search header-search__icon"></i>
                    </div>
                </div>
            </div>

            <!--Header navbar mobile -->
            <button class="nav-mobile-open-btn js__menu-btn--open"><i class="fas fa-bars nav-mobile-icon"></i></button>
            <div class="header-nav-mobile">
                <div class="header-nav-mobile__heading">
                    <img src="./assets/img/logo/logo4.png" alt="" class="header-nav-mobile__img">
                    <button class="nav-mobile-close-btn js__menu-btn--close"><i class="fas fa-times"></i></button>
                </div>
                <ul class="header-nav-mobile__list">
                    <li class="header-nav-mobile__item">
                        <a href="" class="header-nav-mobile__link"><i class="fas fa-home header-nav-mobile__icon"></i> Trang chủ</a>
                    </li>
                    <li class="header-nav-mobile__item">
                        <a href="" class="header-nav-mobile__link"><i class="fas fa-th header-nav-mobile__icon"></i> Giới thiệu</a>
                    </li>
                    <li class="header-nav-mobile__item">
                        <a href="" class="header-nav-mobile__link"><i class="fas fa-shopping-cart header-nav-mobile__icon"></i> Sản phẩm</a>
                    </li>
                    <li class="header-nav-mobile__item">
                        <a href="" class="header-nav-mobile__link"><i class="fas fa-newspaper header-nav-mobile__icon"></i> Tin tức</a>
                    </li>
                    <li class="header-nav-mobile__item">
                        <a href="" class="header-nav-mobile__link"><i class="fas fa-headset header-nav-mobile__icon"></i> Liên hệ</a>
                    </li>
                    <li class="header-nav-mobile__item">
                    <?php if(isset($user) and isset($user['name']) and isset($user['coin'])){
                            echo '
                            <p class="header-nav-mobile__link"><i class="fas fa-user"></i>Thông Tin Cá Nhân</p>
                            <p class="header-nav-mobile__link">Khách hàng: '.$user['name'].'</p>
                            <p class="header-nav-mobile__link">Số dư: '.$user['coin'].' đ</p>
                            <p><a href="./logout.php" class="header-nav-mobile__link"><i class="fas fa-user"></i>Đăng xuất</a></p>
                            ';
                    }else{
                        echo '<a href="./dangky.php" class="header-nav-mobile__link"><i class="fas fa-user header-nav-mobile__icon"></i> Đăng nhập / đăng ký</a>';
                        } ?>
                        
                    </li>
                    <li class="header-nav-mobile-list__item">
                        <a href="" class="header-nav-mobile__link"></a>
                    </li>
                </ul>
            </div>
        </div>
        <!--End header-->

        <!--slide-->
        <div class="slider">
            <div class="slider__overlay"></div>
            <div class="slide">
                <img class="slide__img" src="./assets/img/banner/slide_show/1.jpg" idx="0" alt="">
                <img class="slide__img" src="./assets/img/banner/slide_show/3.jpg" idx="1" alt="">
                <img class="slide__img" src="./assets/img/banner/slide_show/3.png" idx="2" alt="">
        
                <button id="next" class="slide-btn__next"><i class="fas fa-chevron-right"></i></button>
                <button id="prev" class="slide-btn__prev"><i class="fas fa-chevron-left"></i></button>
        
                <div class="change-img">
                    <button class="active change-btn" idx="0"></button>
                    <button class="change-btn" idx="1"></button>
                    <button class="change-btn" idx="2"></button>
                </div>

                
            <!--<div class="slide__description">
                    <h4 class="slide-description__text">Nội Thất Sang Trọng</h4>
                    <a href="" class="slide-description__btn">Mua ngay</a>
                </div> -->
          </div>
        </div>
        <!--end slide-->

        <!--Content-->
        <div class="content">
            <!-- Danh mục sản phẩm mobile -->
            <div class="home-category-mobile">
                <h4 class="home-category-mobile__title">DANH MỤC SẢN PHẨM</h4>
                <div class="grid">
                    <div class="grid__row">
                        <div class="grid-row__col-3">
                            <div class="category-mobile__item">
                                <a href="" class="category-mobile__link">
                                    <img src="./assets/img/product_portfolio/smart_home.jpg" alt="" class="category-mobile__img">
                                    <span class="category-mobile__name">Giải pháp trọn gói nhà thông minh</span>
                                </a>
                            </div>
                        </div>

                        <div class="grid-row__col-3">
                            <div class="category-mobile__item">
                                <a href="" class="category-mobile__link">
                                    <img src="./assets/img/product_portfolio/control_center.jpg" alt="" class="category-mobile__img">
                                    <span class="category-mobile__name">Trung tâm điều khiển - NTM</span>
                                </a>
                            </div>
                        </div>

                        <div class="grid-row__col-3">
                            <div class="category-mobile__item">
                                <a href="" class="category-mobile__link">
                                    <img src="./assets/img/product_portfolio/camera_ip.jpg" alt="" class="category-mobile__img">
                                    <span class="category-mobile__name">Camera IP không dây</span>
                                </a>
                            </div>
                        </div>

                        <div class="grid-row__col-3">
                            <div class="category-mobile__item">
                                <a href="" class="category-mobile__link">
                                    <img src="./assets/img/product_portfolio/socket.jpg" alt="" class="category-mobile__img">
                                    <span class="category-mobile__name">Công tắc, ổ cắm - NTM</span>
                                </a>
                            </div>
                        </div>

                        <div class="grid-row__col-3">
                            <div class="category-mobile__item">
                                <a href="" class="category-mobile__link">
                                    <img src="./assets/img/product_portfolio/Sensor.jpg" alt="" class="category-mobile__img">
                                    <span class="category-mobile__name">Cảm biến - NTM</span>
                                </a>
                            </div>
                        </div>

                        <div class="grid-row__col-3">
                            <div class="category-mobile__item">
                                <a href="" class="category-mobile__link">
                                    <img src="./assets/img/product_portfolio/living_room.jpg" alt="" class="category-mobile__img">
                                    <span class="category-mobile__name">Nội thất phòng khách</span>
                                </a>
                            </div>
                        </div>

                        <div class="grid-row__col-3">
                            <div class="category-mobile__item">
                                <a href="" class="category-mobile__link">
                                    <img src="./assets/img/product_portfolio/kitchen.jpg" alt="" class="category-mobile__img">
                                    <span class="category-mobile__name">Nội thất nhà bếp</span>
                                </a>
                            </div>
                        </div>

                        <div class="grid-row__col-3">
                            <div class="category-mobile__item">
                                <a href="" class="category-mobile__link">
                                    <img src="./assets/img/product_portfolio/kitchen.jpg" alt="" class="category-mobile__img">
                                    <span class="category-mobile__name">Nội thất phòng ngủ</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!------------------------------>

            <div class="grid">
                <div class="grid__row">
                    <div class="grid-row__col-3 grid-row__col-4-tb">
                        <!--Danh mục sản phẩm-->
                        <div class="home-category">
                            <h4 class="list__heading">DANH MỤC SẢN PHẨM</h4>
                            <ul class="list__group">
                                <li class="list-group__item category__item">
                                    <a href="" class="list-group__link category__link"><i class="fas fa-angle-double-right"></i> Giải pháp trọn gói nhà thông minh</a>
                                </li>
                                <li class="list-group__item category__item">
                                    <a href="" class="list-group__link category__link"><i class="fas fa-angle-double-right"></i> Trung tâm điều khiển - NTM</a>
                                </li>
                                <li class="list-group__item category__item">
                                    <a href="" class="list-group__link category__link"><i class="fas fa-angle-double-right"></i> Camera IP không dây</a>
                                </li>
                                <li class="list-group__item category__item">
                                    <a href="" class="list-group__link category__link"><i class="fas fa-angle-double-right"></i> Công tắc, ổ cấm - NTM</a>
                                </li>
                                <li class="list-group__item category__item">
                                    <a href="" class="list-group__link category__link"><i class="fas fa-angle-double-right"></i> Cảm biến - NTM</a>
                                </li>
                                <li class="list-group__item category__item">
                                    <a href="" class="list-group__link category__link"><i class="fas fa-angle-double-right"></i> Nội thất phòng khách </a>
                                </li>
                                <li class="list-group__item category__item">
                                    <a href="" class="list-group__link category__link"><i class="fas fa-angle-double-right"></i> Nội thất nhà bếp</a>
                                </li>
                            </ul>
                        </div>

                        <!--Tin tức-->
                        <div class="home__new">
                            <h4 class="list__heading">TIN TỨC</h4>
                            <ul class="list__group">
                                <li class="list-group__item new__item">
                                    <img src="./assets/img/product/security/download.jpg" alt="" class="new__img">
                                    <a href="" class="list-group__link new__link">Giải pháp trọn gói nhà thông minh Smart Home</a>
                                </li>
                                <li class="list-group__item new__item">
                                    <img src="./assets/img/product/security/download.jpg" alt="" class="new__img">
                                    <a href="" class="list-group__link new__link">Giải pháp trọn gói nhà thông minh Smart Home - SIÊU TIẾT KIỆM</a>
                                </li>
                                <li class="list-group__item new__item">
                                    <img src="./assets/img/product/kitchen/kitchen1.jpg" alt="" class="new__img">
                                    <a href="" class="list-group__link new__link">Thiết kế nhà bếp tiện lợi</a>
                                </li>
                                <li class="list-group__item new__item">
                                    <img src="./assets/img/product/living_room/room3.jpg" alt="" class="new__img">
                                    <a href="" class="list-group__link new__link">Những điều cần biết về sàn gỗ</a>
                                </li>
                                <li class="list-group__item new__item">
                                    <img src="./assets/img/product/living_room/room5.jpg" alt="" class="new__img">
                                    <a href="" class="list-group__link new__link">Xu hướng kết hợp màu xám trong phòng tắm</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--Sản phẩm-->
                    <div class="grid-row__col-9 grid-row__col-8-tb grid-row__col-12-mb">
                        <div class="home__product">
                            <h4 class="product__heading">SẢN PHẨM NỔI BẬT</h4>
                            <span class="product__heading-underline"></span>
                            <div class="grid__row">
                                <!--product item-->

                                <div class="grid-row__col-3 grid-row__col-4-tb grid-row__col-6-mb">
                                    <div class="product__item">
                                        <a href="" class="product__link">
                                            <div class="product__img" style="background-image: url(./assets/img/product/security/download.jpg);"></div>
                                            <div class="product__body">
                                                <span class="product__name">Trọn Gói Smart Home QUAN SÁT - BÁO TRỘM </span>
                                            <span class="product__price">8.330.000 đ</span>
                                            <a href="" class="product__btn" role="button"><i class="fas fa-shopping-cart product__icon"></i> Mua hàng</a>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <!--product item-->
                                <div class="grid-row__col-3 grid-row__col-4-tb grid-row__col-6-mb">
                                    <div class="product__item">
                                        <a href="" class="product__link">
                                        <div class="product__img" style="background-image: url(./assets/img/product/security/sensor2.jpg);"></div>
                                        <div class="product__body">
                                            <span class="product__name">Thiết Bị Cảm Biến Hàng Rào SHR01 Phạm Vi 250m </span>
                                        <span class="product__price">2.490.000 đ</span>
                                        <a href="" class="product__btn" role="button"><i class="fas fa-shopping-cart product__icon"></i> Mua hàng</a>
                                        </div>
                                    </a>
                                    </div>
                                </div>

                                <!--product item-->
                                <div class="grid-row__col-3 grid-row__col-4-tb grid-row__col-6-mb">
                                    <div class="product__item">
                                        <a href="" class="product__link">
                                        <div class="product__img" style="background-image: url(./assets/img/product/security/sensor3.jpg);"></div>
                                        <div class="product__body">
                                            <span class="product__name">Came Biến Cửa/Cửa Sổ Có Phản Hồi SGD</span>
                                        <span class="product__price">650.000 đ</span>
                                        <a href="" class="product__btn" role="button"><i class="fas fa-shopping-cart product__icon"></i> Mua hàng</a>
                                        </div>
                                    </a>
                                    </div>
                                </div>

                                <!--product item-->
                                <div class="grid-row__col-3 grid-row__col-4-tb grid-row__col-6-mb">
                                    <div class="product__item">
                                        <a href="" class="product__link">
                                        <div class="product__img" style="background-image: url(./assets/img/product/security/sensor4.jpg);"></div>
                                        <div class="product__body">
                                            <span class="product__name">Cảm Biến Hồng Ngoại PIR Có Phản Hồi SmartZ SGP </span>
                                        <span class="product__price">720.000 đ</span>
                                        <a href="" class="product__btn" role="button"><i class="fas fa-shopping-cart product__icon"></i> Mua hàng</a>
                                        </div>
                                    </a>
                                    </div>
                                </div>

                                <!--product item-->
                                <div class="grid-row__col-3 grid-row__col-4-tb grid-row__col-6-mb">
                                    <div class="product__item">
                                        <a href="" class="product__link">
                                        <div class="product__img" style="background-image: url(./assets/img/product/security/download1.jpg);"></div>
                                        <div class="product__body">
                                            <span class="product__name">Thiết Bị Mở Rộng Sóng SmartZ SRE</span>
                                        <span class="product__price">780.000 đ</span>
                                        <a href="" class="product__btn" role="button"><i class="fas fa-shopping-cart product__icon"></i> Mua hàng</a>
                                        </div>
                                    </a>
                                    </div>
                                </div>

                                <!--product item-->
                                <div class="grid-row__col-3 grid-row__col-4-tb grid-row__col-6-mb">
                                    <div class="product__item">
                                        <a href="" class="product__link">
                                        <div class="product__img" style="background-image: url(./assets/img/product/security/camera5.jpg);"></div>
                                        <div class="product__body">
                                            <span class="product__name">Camera IP Ngoài Trời SmartZ Không Dây SCF 1025</span>
                                        <span class="product__price">2.150.000 đ</span>
                                        <a href="" class="product__btn" role="button"><i class="fas fa-shopping-cart product__icon"></i> Mua hàng</a>
                                        </div>
                                    </a>
                                    </div>
                                </div>

                                <!--product item-->
                                
                                <div class="grid-row__col-3 grid-row__col-4-tb grid-row__col-6-mb">
                                    <div class="product__item">
                                        <a href="" class="product__link">
                                        <div class="product__img" style="background-image: url(./assets/img/product/security/camera6.jpg);"></div>
                                        <div class="product__body">
                                            <span class="product__name">Camera IP SmartZ IS01 - Có Thể Gọi Báo Trộm</span>
                                        <span class="product__price">2.990.000 đ</span>
                                        <a href="" class="product__btn" role="button"><i class="fas fa-shopping-cart product__icon"></i> Mua hàng</a>
                                        </div>
                                    </a>
                                    </div>
                                </div>

                                <!--product item-->

                                <div class="grid-row__col-3 grid-row__col-4-tb grid-row__col-6-mb">
                                    <div class="product__item">
                                        <a href="" class="product__link">
                                        <div class="product__img" style="background-image: url(./assets/img/product/security/camera7.jpg);"></div>
                                        <div class="product__body">
                                            <span class="product__name">Camera IP SmartZ Quay 360 Độ SCR3603</span>
                                        <span class="product__price">1.650.000 đ</span>
                                        <a href="" class="product__btn" role="button"><i class="fas fa-shopping-cart product__icon"></i> Mua hàng</a>
                                        </div>
                                    </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Đăng ký nhận tư vấn-->
            <div class="registration">
                <div class="registration__overlay"></div>
                <div class="registration__content">
                    <div class="registration__heading">
                        <span>ĐĂNG KÝ NHẬN</span>
                        <span style="color: var(--primary-color);">TƯ VẤN MIỄN PHÍ</span>
                    </div>
                    <div class="registration__form">
                        <input type="text" class="registration-form__input" placeholder="Nhập email...">
                        <a href="./dangky.php" class="registration-form__btn">ĐĂNG KÝ</a>
                    </div>
                </div>
            </div>

            <!--Sản phẩm-->
            <div class="grid">
                <div class="home__product">
                    <h4 class="product__heading">SẢN PHẨM</h4>
                    <div class="product-btn-next-prev">
                        <a href="" role="button" class="product-btn__prev"><i class="fas fa-chevron-left"></i></a>
                        <a href="" role="button" class="product-btn__next"><i class="fas fa-chevron-right"></i></a>
                    </div>
                    <span class="product__heading-underline"></span>
                    <div class="grid__row grid__row-mb--srcoll">
                        <!--product item-->

                        <div class="grid-row__col-2-4 grid-row__col-6-mb">
                            <div class="product__item">
                                <a href="" class="product__link">
                                    <div class="product__img" style="background-image: url(./assets/img/product/furniture/switch5.jpg);"></div>
                                    <div class="product__body">
                                        <span class="product__name">Ổ Cắm Thông Minh SK1 + Remote 528</span>
                                    <span class="product__price">520.000 đ</span>
                                    <a href="" class="product__btn" role="button"><i class="fas fa-shopping-cart product__icon"></i> Mua hàng</a>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!--product item-->

                        <div class="grid-row__col-2-4 grid-row__col-6-mb">
                            <div class="product__item">
                                <a href="" class="product__link">
                                    <div class="product__img" style="background-image: url(./assets/img/product/furniture/switch3.jpg);"></div>
                                    <div class="product__body">
                                        <span class="product__name">Công Tắc Cảm Ứng Thông Minh Điều Chỉnh Độ Sáng</span>
                                    <span class="product__price">1.300.000 đ</span>
                                    <a href="" class="product__btn" role="button"><i class="fas fa-shopping-cart product__icon"></i> Mua hàng</a>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!--product item-->

                        <div class="grid-row__col-2-4 grid-row__col-6-mb">
                            <div class="product__item">
                                <a href="" class="product__link">
                                    <div class="product__img" style="background-image: url(./assets/img/product/furniture/switch1.jpg);"></div>
                                    <div class="product__body">
                                        <span class="product__name">Bộ Công Tắc Điều Khiển SmartZ SGM </span>
                                    <span class="product__price">650.000 đ</span>
                                    <a href="" class="product__btn" role="button"><i class="fas fa-shopping-cart product__icon"></i> Mua hàng</a>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!--product item-->

                        <div class="grid-row__col-2-4 grid-row__col-6-mb">
                            <div class="product__item">
                                <a href="" class="product__link">
                                    <div class="product__img" style="background-image: url(./assets/img/product/furniture/switch2.jpg);"></div>
                                    <div class="product__body">
                                        <span class="product__name">Công Tắc Thông Minh Cảm Ứng 3 Nút Điều Khiển</span>
                                    <span class="product__price">1.300.000 đ</span>
                                    <a href="" class="product__btn" role="button"><i class="fas fa-shopping-cart product__icon"></i> Mua hàng</a>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!--product item-->

                        <div class="grid-row__col-2-4 grid-row__col-6-mb">
                            <div class="product__item">
                                <a href="" class="product__link">
                                    <div class="product__img" style="background-image: url(./assets/img/product/furniture/switch4.jpg);"></div>
                                    <div class="product__body">
                                        <span class="product__name">Công Tắc Cảm Ứng Thông Minh Có Phản Hồi SW1 - 2 Nút</span>
                                    <span class="product__price">1.350.000 đ</span>
                                    <a href="" class="product__btn" role="button"><i class="fas fa-shopping-cart product__icon"></i> Mua hàng</a>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Nội thất phòng khách-->
                <div class="home__product">
                    <h4 class="product__heading">NỘI THẤT PHÒNG KHÁCH</h4>
                    <div class="product-btn-next-prev">
                        <a href="" role="button" class="product-btn__prev"><i class="fas fa-chevron-left"></i></a>
                        <a href="" role="button" class="product-btn__next"><i class="fas fa-chevron-right"></i></a>
                    </div>
                    <span class="product__heading-underline"></span>
                    <div class="grid__row grid__row-mb--srcoll ">
                        <!--product item-->

                        <div class="grid-row__col-2-4 grid-row__col-6-mb">
                            <div class="product__item">
                                <a href="" class="product__link">
                                    <div class="product__img" style="background-image: url(./assets/img/product/living_room/room1.jpg);"></div>
                                    <div class="product__body">
                                        <span class="product__name">Nội Thất Phòng Khách 1</span>
                                    <span class="product__price">Liên hệ</span>
                                    <a href="" class="product__btn" role="button"><i class="fas fa-shopping-cart product__icon"></i> Mua hàng</a>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!--product item-->

                        <div class="grid-row__col-2-4 grid-row__col-6-mb">
                            <div class="product__item">
                                <a href="" class="product__link">
                                    <div class="product__img" style="background-image: url(./assets/img/product/living_room/room2.jpg);"></div>
                                    <div class="product__body">
                                        <span class="product__name">Nội Thất Phòng Khách 1</span>
                                    <span class="product__price">Liên hệ</span>
                                    <a href="" class="product__btn" role="button"><i class="fas fa-shopping-cart product__icon"></i> Mua hàng</a>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!--product item-->

                        <div class="grid-row__col-2-4 grid-row__col-6-mb">
                            <div class="product__item">
                                <a href="" class="product__link">
                                    <div class="product__img" style="background-image: url(./assets/img/product/living_room/room3.jpg);"></div>
                                    <div class="product__body">
                                        <span class="product__name">Sofa 8</span>
                                    <span class="product__price">Liên hệ</span>
                                    <a href="" class="product__btn" role="button"><i class="fas fa-shopping-cart product__icon"></i> Mua hàng</a>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!--product item-->

                        <div class="grid-row__col-2-4 grid-row__col-6-mb">
                            <div class="product__item">
                                <a href="" class="product__link">
                                    <div class="product__img" style="background-image: url(./assets/img/product/living_room/room4.jpg);"></div>
                                    <div class="product__body">
                                        <span class="product__name">Sofa 7</span>
                                    <span class="product__price">Liên hệ</span>
                                    <a href="" class="product__btn" role="button"><i class="fas fa-shopping-cart product__icon"></i> Mua hàng</a>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!--product item-->

                        <div class="grid-row__col-2-4 grid-row__col-6-mb">
                            <div class="product__item">
                                <a href="" class="product__link">
                                    <div class="product__img" style="background-image: url(./assets/img/product/living_room/room5.jpg);"></div>
                                    <div class="product__body">
                                        <span class="product__name">Nội Thất Phòng Khách 8</span>
                                    <span class="product__price">Liên hệ</span>
                                    <a href="" class="product__btn" role="button"><i class="fas fa-shopping-cart product__icon"></i> Mua hàng</a>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Nội thất nhà bếp-->
                <div class="home__product">
                    <h4 class="product__heading">NỘI THẤT NHÀ BẾP</h4>
                    <div class="product-btn-next-prev">
                        <a href="" role="button" class="product-btn__prev"><i class="fas fa-chevron-left"></i></a>
                        <a href="" role="button" class="product-btn__next"><i class="fas fa-chevron-right"></i></a>
                    </div>
                    <span class="product__heading-underline"></
                    span>
                    <div class="grid__row grid__row-mb--srcoll">
                        <!--product item-->

                        <div class="grid-row__col-2-4 grid-row__col-6-mb">
                            <div class="product__item">
                                <a href="" class="product__link">
                                    <div class="product__img" style="background-image: url(./assets/img/product/kitchen/kitchen1.jpg);"></div>
                                    <div class="product__body">
                                        <span class="product__name">Nội Thất Nhà Bếp 8</span>
                                    <span class="product__price">Liên hệ</span>
                                    <a href="" class="product__btn" role="button"><i class="fas fa-shopping-cart product__icon"></i> Mua hàng</a>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!--product item-->

                        <div class="grid-row__col-2-4 grid-row__col-6-mb">
                            <div class="product__item">
                                <a href="" class="product__link">
                                    <div class="product__img" style="background-image: url(./assets/img/product/kitchen/kitchen2.jpg);"></div>
                                    <div class="product__body">
                                        <span class="product__name">Nội Thất Nhà Bếp 7 </span>
                                    <span class="product__price">Liên hệ</span>
                                    <a href="" class="product__btn" role="button"><i class="fas fa-shopping-cart product__icon"></i> Mua hàng</a>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!--product item-->

                        <div class="grid-row__col-2-4 grid-row__col-6-mb">
                            <div class="product__item">
                                <a href="" class="product__link">
                                    <div class="product__img" style="background-image: url(./assets/img/product/kitchen/kitchen3.jpg);"></div>
                                    <div class="product__body">
                                        <span class="product__name">Nội Thất Nhà Bếp 6</span>
                                    <span class="product__price">Liên hệ</span>
                                    <a href="" class="product__btn" role="button"><i class="fas fa-shopping-cart product__icon"></i> Mua hàng</a>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!--product item-->

                        <div class="grid-row__col-2-4 grid-row__col-6-mb">
                            <div class="product__item">
                                <a href="" class="product__link">
                                    <div class="product__img" style="background-image: url(./assets/img/product/kitchen/kitchen4.jpg);"></div>
                                    <div class="product__body">
                                        <span class="product__name">Nội Thất Nhà Bếp 5</span>
                                    <span class="product__price">Liên hệ</span>
                                    <a href="" class="product__btn" role="button"><i class="fas fa-shopping-cart product__icon"></i> Mua hàng</a>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!--product item-->

                        <div class="grid-row__col-2-4 grid-row__col-6-mb">
                            <div class="product__item">
                                <a href="" class="product__link">
                                    <div class="product__img" style="background-image: url(./assets/img/product/kitchen/kitchen5.jpg);"></div>
                                    <div class="product__body">
                                        <span class="product__name">Nội Thất Nhà Bếp 3</span>
                                    <span class="product__price">Liên hệ</span>
                                    <a href="" class="product__btn" role="button"><i class="fas fa-shopping-cart product__icon"></i> Mua hàng</a>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--phòng ngủ -->
                <div class="home__product">
                    <h4 class="product__heading">NỘI THẤT PHONG NGỦ</h4>
                    <div class="product-btn-next-prev">
                        <a href="" role="button" class="product-btn__prev"><i class="fas fa-chevron-left"></i></a>
                        <a href="" role="button" class="product-btn__next"><i class="fas fa-chevron-right"></i></a>
                    </div>
                    <span class="product__heading-underline"></
                    span>
                    <div class="grid__row grid__row-mb--srcoll">
                        <!--product item-->

                        <div class="grid-row__col-2-4 grid-row__col-6-mb">
                            <div class="product__item">
                                <a href="" class="product__link">
                                    <div class="product__img" style="background-image: url(./assets/img/product/bedroom/1.jpg);"></div>
                                    <div class="product__body">
                                        <span class="product__name">Nội Thất Phòng Ngủ 1</span>
                                    <span class="product__price">Liên hệ</span>
                                    <a href="" class="product__btn" role="button"><i class="fas fa-shopping-cart product__icon"></i> Mua hàng</a>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!--product item-->

                        <div class="grid-row__col-2-4 grid-row__col-6-mb">
                            <div class="product__item">
                                <a href="" class="product__link">
                                    <div class="product__img" style="background-image: url(./assets/img/product/bedroom/2.jpg);"></div>
                                    <div class="product__body">
                                        <span class="product__name">Nội Thất Phòng Ngủ 2</span>
                                    <span class="product__price">Liên hệ</span>
                                    <a href="" class="product__btn" role="button"><i class="fas fa-shopping-cart product__icon"></i> Mua hàng</a>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!--product item-->

                        <div class="grid-row__col-2-4 grid-row__col-6-mb">
                            <div class="product__item">
                                <a href="" class="product__link">
                                    <div class="product__img" style="background-image: url(./assets/img/product/bedroom/3.jpg);"></div>
                                    <div class="product__body">
                                        <span class="product__name">Nội Thất Phòng Ngủ 3</span>
                                    <span class="product__price">Liên hệ</span>
                                    <a href="" class="product__btn" role="button"><i class="fas fa-shopping-cart product__icon"></i> Mua hàng</a>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!--product item-->

                        <div class="grid-row__col-2-4 grid-row__col-6-mb">
                            <div class="product__item">
                                <a href="" class="product__link">
                                    <div class="product__img" style="background-image: url(./assets/img/product/bedroom/4.jpg);"></div>
                                    <div class="product__body">
                                        <span class="product__name">Nội Thất Phòng Ngủ 4</span>
                                    <span class="product__price">Liên hệ</span>
                                    <a href="" class="product__btn" role="button"><i class="fas fa-shopping-cart product__icon"></i> Mua hàng</a>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!--product item-->

                        <div class="grid-row__col-2-4 grid-row__col-6-mb">
                            <div class="product__item">
                                <a href="" class="product__link">
                                    <div class="product__img" style="background-image: url(./assets/img/product/bedroom/5.jpg);"></div>
                                    <div class="product__body">
                                        <span class="product__name">Nội Thất Phòng Ngủ 5</span>
                                    <span class="product__price">Liên hệ</span>
                                    <a href="" class="product__btn" role="button"><i class="fas fa-shopping-cart product__icon"></i> Mua hàng</a>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Content-->


        <div class="footer">
            <div class="footer__heading">
               <div class="footer__social">
                <span class="footer-social__text">FOLLOW US: </span>
                <a href="" class="footer-social__link"><img src="https://img.icons8.com/color/48/000000/facebook.png"/></a>
                <a href="" class="footer-social__link"><img src="https://img.icons8.com/color/48/000000/twitter-squared.png"/></a>
                <a href="" class="footer-social__link"><img src="https://img.icons8.com/color/48/000000/google-plus-squared.png"/></a>
                <a href="" class="footer-social__link"><img src="https://img.icons8.com/fluency/48/000000/instagram-new.png"/></a>
               </div>

               <div class="footer__nav">
                    <ul class="header-nav__list">
                        <li class="header-nav__item">
                            <a href="" class="header-nav__link">Trang chủ</a>
                        </li>
                        <li class="header-nav__item">
                            <a href="" class="header-nav__link">Giới thiệu</a>
                        </li>
                        <li class="header-nav__item">
                            <a href="" class="header-nav__link">Sản phẩm</a>
                        </li>
                        <li class="header-nav__item">
                            <a href="" class="header-nav__link">Tin tức</a>
                        </li>
                        <li class="header-nav__item">
                            <a href="" class="header-nav__link">Liên hệ</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer__body">                
                <div class="grid">
                    <div class="grid__row footer__content">
                            <div class="grid-row__col-4 grid-row__col-12-mb">
                                <div class="footer-content__copyright">
                                    <h4 class="footer-content-copyright__title">TRƯỜNG CAO ĐẲNG KT - KT CẦN THƠ</h4>
                                    <span>Địa chỉ:  Số 9, đường Cách mạng Tháng tám, Phường An Hòa, Quận Ninh Kiều, TP. Cần Thơ</span>
                                    <span>Điện thoai: (84-0292)   3826072 ; Fax:  (84-0292)  3821326</span>
                                    <span> Email:  ktktct@ctec.edu.vn</span>
                                    <span>Thiết kế website: Nhóm những em bé hiếu học</span>
                                </div>
                            </div>
    
                            <div class="grid-row__col-4 grid-row__col-12-mb">
                                <div class="footer-content__fanpage">
                                    <h4>FANPAGE</h4>
                                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" style="border:none;overflow:hidden; width: 100%; height: auto;" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                                </div>
                            </div>
    
                            <div class="grid-row__col-4 grid-row__col-12-mb">
                                <div class="footer-content__map">
                                    <h4>BẢN ĐỒ</h4>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.566778300421!2d105.77051591474272!3d10.052561992815116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a087e3a7a82893%3A0x9bff806f3142bf87!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEtpbmggdOG6vyAtIEvhu7kgdGh14bqtdCBD4bqnbiBUaMah!5e0!3m2!1svi!2s!4v1641174342633!5m2!1svi!2s"style="border:0; width: 100%; height: auto;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                    </div>
                </div>

                <div class="footer-team">
                    <div class="grid">
                        <div class="grid__row">
                            <div class="grid-row__col-2 grid-row__col-6-mb">
                                <div class="footer-team__member">
                                    <img src="./assets/img/team/1.jpg" alt="" class="footer-team__member-img">
                                    <span class="footer-team__member-name">Lê Công Thảo</span>
                                </div>
                            </div>

                            <div class="grid-row__col-2 grid-row__col-6-mb">
                                <div class="footer-team__member">
                                    <img src="./assets/img/team/2.jpg" alt="" class="footer-team__member-img">
                                    <span class="footer-team__member-name">Nguyễn Nhựt Thanh</span>
                                </div>
                            </div>

                            <div class="grid-row__col-2 grid-row__col-6-mb">
                                <div class="footer-team__member">
                                    <img src="./assets/img/team/3.jpg" alt="" class="footer-team__member-img">
                                    <span class="footer-team__member-name">Trần Phong Nhã</span>
                                </div>
                            </div>

                            <div class="grid-row__col-2 grid-row__col-6-mb">
                                <div class="footer-team__member">
                                    <img src="./assets/img/team/4.jpg" alt="" class="footer-team__member-img">
                                    <span class="footer-team__member-name">Trần Hoài Thương</span>
                                </div>
                            </div>

                            <div class="grid-row__col-2 grid-row__col-6-mb">
                                <div class="footer-team__member">
                                    <img src="./assets/img/team/5.jpg" alt="" class="footer-team__member-img">
                                    <span class="footer-team__member-name">Nguyễn Minh Linh</span>
                                </div>
                            </div>

                            <div class="grid-row__col-2 grid-row__col-6-mb">
                                <div class="footer-team__member">
                                    <img src="./assets/img/team/6.jpg" alt="" class="footer-team__member-img">
                                    <span class="footer-team__member-name">Dư Tuấn Anh</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal">
        <div class="overlay"></div>
        <div class="modal__container">
            <h4 class="modal__title"></h4>
            <a href="" class="modal__btn-login"></a>
            <a href="" class="modal__fogot-password"></a>
        </div>
    </div>

    <script src="assets/jquery_360/jquery-3.6.0.js"></script>
    <script src="./assets/js/script.js"></script>

    <!--js slider-->
    <script>
      $(document).ready(function () {
      var stt = 0;
      var endImg = $("img.slide__img:last").attr("idx");
  
      $("button.change-btn").click(function () {
          stt = $(this).attr("idx");
  
          changeImg(stt);
      });
  
      $("#next").click(function () {
          if (++stt > endImg) {
              stt = 0;
          }
  
          changeImg(stt);
      });
  
      $("#prev").click(function () {
          if (--stt < 0) {
              stt = endImg;
          }
  
          changeImg(stt);
      });
  
      var interval;
      var timer = function () {
          interval = setInterval(function () {
              $("#next").click();
          }, 5000);
      };
      timer();
  });
  
  
      //Hide all image slide__img and show image have index "stt"
      //Remove active all buttton and set "active" for button have index "stt"
      //Reset timer when change image
      function changeImg(stt) {
          $("img.slide__img").hide();
          $("img.slide__img").eq(stt).fadeIn(500);
          $("button.change-btn").removeClass("active");
          $("button.change-btn").eq(stt).addClass("active");
  
          clearInterval(interval);
          timer();
      }; 


    /* js menu mobile */
    const menu = document.querySelector('.header-nav-mobile')
    const btnOpen = document.querySelector('.js__menu-btn--open')
    const btnClose = document.querySelector('.js__menu-btn--close')

    function showMenu() {
        menu.classList.add('open')
        
        
    }

    function closeMenu() {
        menu.classList.remove('open')
    }

    btnOpen.addEventListener('click', showMenu)

    btnClose.addEventListener('click', function() {
        menu.classList.remove('open')
    })


  </script>

</body>
</html>