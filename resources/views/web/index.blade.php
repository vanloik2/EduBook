@extends('web.app')
@section('content')
    <div class="app">
        <header id="header">
            <!-- header top -->
            <div class="header__top">
                <div class="container">
                    <section class="row flex">
                        <div class="col-lg-5 col-md-0 col-sm-0 heade__top-left">
                            <span>EduBook - Cội nguồn của tri thức</span>
                        </div>

                        <nav class="col-lg-7 col-md-0 col-sm-0 header__top-right">
                            <ul class="header__top-list">
                                <li class="header__top-item">
                                    <a href="#" class="header__top-link">

                                        Hỏi đáp</a>
                                </li>
                                <li class="header__top-item">
                                    <a href="#" class="header__top-link">Hướng dẫn</a>
                                </li>
                                <li class="header__top-item">
                                    <a href="#" class="header__top-link">Đăng ký</a>
                                </li>
                                <li class="header__top-item">
                                    <a href="#" class="header__top-link">Đăng nhập</a>
                                </li>
                            </ul>
                        </nav>
                    </section>
                </div>
            </div>
            <!--end header top -->

            <!-- header bottom -->
            <div class="header__bottom">
                <div class="container">
                    <section class="row">
                        <div class="col-lg-3 col-md-4 col-sm-12 header__logo">
                            <h1 class="header__heading">
                                <a href="#" class="header__logo-link">
                                    <img src="{{ asset('/web/images1/logo1.png')}}" alt="Logo" class="header__logo-img">
                                </a>
                            </h1>
                        </div>

                        <div class="col-lg-6 col-md-7 col-sm-0 header__search">
                            <select name="" id="" class="header__search-select">
                                <option value="0">All</option>
                                <option value="1">Sách tiếng việt</option>
                                <option value="2">Sách sách nước ngoài</option>
                                <option value="3">Manga-Comic</option>

                            </select>
                            <input type="text" class="header__search-input" placeholder="Tìm kiếm tại đây...">
                            <button class="header__search-btn">
                                <div class="header__search-icon-wrap">
                                    <i class="fas fa-search header__search-icon"></i>
                                </div>
                            </button>
                        </div>

                        <div class="col-lg-2 col-md-0 col-sm-0 header__call">
                            <div class="header__call-icon-wrap">
                                <i class="fas fa-phone-alt header__call-icon"></i>
                            </div>
                            <div class="header__call-info">
                                <div class="header__call-text">
                                    Gọi điện tư vấn
                                </div>
                                <div class="header__call-number">
                                    039.882.3232
                                </div>
                            </div>
                        </div>

                        <a href="cart.html" class="col-lg-1 col-md-1 col-sm-0 header__cart">
                            <div class="header__cart-icon-wrap">
                                <span class="header__notice">4</span>
                                <i class="fas fa-shopping-cart header__nav-cart-icon"></i>
                            </div>
                        </a>
                    </section>
                </div>
            </div>
            <!--end header bottom -->

            <!-- header nav -->
            <div class="header__nav">
                <div class="container">
                    <section class="row">
                        <div class="header__nav-menu-wrap col-lg-3 col-md-0 col-sm-0">
                            <i class="fas fa-bars header__nav-menu-icon"></i>
                            <div class="header__nav-menu-title">Danh mục sản phẩm</div>
                        </div>

                        <div class="header__nav col-lg-9 col-md-0 col-sm-0">
                            <ul class="header__nav-list">
                                <li class="header__nav-item">
                                    <a href="index.html" class="header__nav-link">Trang chủ</a>
                                </li>
                                <li class="header__nav-item">
                                    <a href="category.html" class="header__nav-link">Danh mục sản phẩm</a>
                                </li>
                                <li class="header__nav-item">
                                    <a href="product.html" class="header__nav-link">Sản phẩm</a>
                                </li>
                                <li class="header__nav-item">
                                    <a href="post.html" class="header__nav-link">Bài viết</a>
                                </li>
                                <li class="header__nav-item">
                                    <a href="#" class="header__nav-link">Tuyển cộng tác viên</a>
                                </li>
                                <li class="header__nav-item">
                                    <a href="contact.html" class="header__nav-link">Liên hệ</a>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </header>
        <!--end header nav -->

        <!-- slide - menu list -->
        <section class="menu-slide">
            <div class="container">
                <div class="row">
                    <nav class="menu__nav col-lg-3 col-md-12 col-sm-0">
                        <ul class="menu__list">
                            <li class="menu__item menu__item--active">
                                <a href="#" class="menu__link">
                                    <img src="{{ asset('/web/images1/item/baby-boy.png')}}" alt="" class="menu__item-icon" id="Capa_1"
                                        enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512">
                                    Sách Tiếng Việt</a>
                            </li>
                            <li class="menu__item">
                                <a href="#" class="menu__link">
                                    <img src="{{ asset('/web/images1/item/translation.png')}}" alt="" class="menu__item-icon" id="Capa_1"
                                        enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512">
                                    Sách nước ngoài</a>
                            </li>

                            <li class="menu__item">
                                <a href="#" class="menu__link">
                                    <img src="{{ asset('/web/images1/item/1380754_batman_comic_hero_superhero_icon.png')}}" alt=""
                                        class="menu__item-icon" viewBox="0 0 512 512" width="1012" height="512">

                                    Manga - Comic</a>
                            </li>

                        </ul>
                    </nav>

                    <div class="slider col-lg-9 col-md-12 col-sm-0">
                        <div class="row">
                            <div class="slide__left col-lg-8 col-md-0 col-sm-0">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"
                                    data-interval="3000">
                                    <!-- <ol class="carousel-indicators">
                                       <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                       <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                       <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                   </ol> -->
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{ asset('/web/images1/banner/363488_final1511.jpg')}}" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('/web/images1/banner/Gold_DongA_600X350.jpg')}}" class="d-block w-100"
                                                alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('/web/images1/banner/megabook-glod600X350.pn')}}g" class="d-block w-100"
                                                alt="...">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <div class="slide__left-bottom">
                                    <div class="slide__left-botom-one">
                                        <img src="{{ asset('/web/images1/banner/363107_05.jp')}}g" class="slide__left-bottom-one-img">
                                    </div>
                                    <div class="slide__left-bottom-two">
                                        <img src="{{ asset('/web/images1/banner/363104_06.jpg')}}" class="slide__left-bottom-tow-img">
                                    </div>
                                </div>
                            </div>

                            <div class="slide__right col-lg-4 col-md-0 col-sm-0">
                                <img src="{{ asset('/web/images/banner/slider-right.png1')}}" class="slide__right-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end slide menu list -->
        <!-- score-top-->

        <button onclick="topFunction()" id="myBtn-scroll" title="Go to top"><i class="fas fa-chevron-up"></i></i></button>
        <!-- bestselling product -->
        <section class="bestselling">
            <div class="container">
                <div class="row">
                    <div class="bestselling__heading-wrap">
                        <img src="images/bestselling.png" alt="Sản phẩm bán chạy" class="bestselling__heading-img">
                        <div class="bestselling__heading">Top bán chạy nhất tuần</div>
                    </div>
                </div>

                <section class="row">
                    <div class="bestselling__product col-lg-4 col-md-6 col-sm-12">
                        <div class="bestselling__product-img-box">
                            <img src="{{ asset('/web/images1/product/image_195509_1_22250_thanh_ly_1.jpg')}}" alt="Biểu tượng thất truyền"
                                class="bestselling__product-img">
                        </div>
                        <div class="bestselling__product-text">
                            <h3 class="bestselling__product-title">
                                <a href="#" class="bestselling__product-link">Biểu tượng thất truyền</a>
                            </h3>

                            <div class="bestselling__product-rate-wrap">
                                <i class="fas fa-star bestselling__product-rate"></i>
                                <i class="fas fa-star bestselling__product-rate"></i>
                                <i class="fas fa-star bestselling__product-rate"></i>
                                <i class="fas fa-star bestselling__product-rate"></i>
                                <i class="fas fa-star bestselling__product-rate"></i>
                            </div>

                            <span class="bestselling__product-price">
                                147.000đ
                            </span>

                            <div class="bestselling__product-btn-wrap">
                                <button class="bestselling__product-btn">Xem hàng</button>
                            </div>
                        </div>
                    </div>
                    <div class="bestselling__product col-lg-4 col-md-6 col-sm-12">
                        <div class="bestselling__product-img-box">
                            <img src="{{ asset('/web/images1/product/image_195509_1_31875.jpg')}}" alt="Hỏa Ngục (Tái bản 2020)"
                                class="bestselling__product-img">
                        </div>
                        <div class="bestselling__product-text">
                            <h3 class="bestselling__product-title">
                                <a href="#" class="bestselling__product-link">Hỏa Ngục (Tái bản 2020)</a>
                            </h3>

                            <div class="bestselling__product-rate-wrap">
                                <i class="fas fa-star bestselling__product-rate"></i>
                                <i class="fas fa-star bestselling__product-rate"></i>
                                <i class="fas fa-star bestselling__product-rate"></i>
                                <i class="fas fa-star bestselling__product-rate"></i>
                                <i class="fas fa-star bestselling__product-rate"></i>
                            </div>

                            <span class="bestselling__product-price">
                                219.000đ
                            </span>

                            <div class="bestselling__product-btn-wrap">
                                <button class="bestselling__product-btn">Xem hàng</button>
                            </div>
                        </div>
                    </div>
                    <div class="bestselling__product col-lg-4 col-md-6 col-sm-12">
                        <div class="bestselling__product-img-box">
                            <img src="{{ asset('/web/images1/product/tr_-tue-do-thai_outline_15.9.2017-02.jpg')}}"
                                alt="Trí Tuệ Do Thái (Tái Bản 2018)" class="bestselling__product-img">
                        </div>
                        <div class="bestselling__product-text">
                            <h3 class="bestselling__product-title">
                                <a href="#" class="bestselling__product-link">Trí Tuệ Do Thái (Tái Bản 2018)</a>
                            </h3>

                            <div class="bestselling__product-rate-wrap">
                                <i class="fas fa-star bestselling__product-rate"></i>
                                <i class="fas fa-star bestselling__product-rate"></i>
                                <i class="fas fa-star bestselling__product-rate"></i>
                                <i class="fas fa-star bestselling__product-rate"></i>
                                <i class="fas fa-star bestselling__product-rate"></i>
                            </div>

                            <span class="bestselling__product-price">
                                169.000đ
                            </span>

                            <div class="bestselling__product-btn-wrap">
                                <button class="bestselling__product-btn">Xem hàng</button>
                            </div>
                        </div>
                    </div>
                    <div class="bestselling__product col-lg-4 col-md-6 col-sm-12">
                        <div class="bestselling__product-img-box">
                            <img src="{{ asset('/web/images1/product/image_195509_1_36793.jpg')}}" alt="Nhà Giả Kim (Tái Bản 2020)"
                                class="bestselling__product-img">
                        </div>
                        <div class="bestselling__product-text">
                            <h3 class="bestselling__product-title">
                                <a href="#" class="bestselling__product-link">Nhà Giả Kim (Tái Bản 2020)</a>
                            </h3>

                            <div class="bestselling__product-rate-wrap">
                                <i class="fas fa-star bestselling__product-rate"></i>
                                <i class="fas fa-star bestselling__product-rate"></i>
                                <i class="fas fa-star bestselling__product-rate"></i>
                                <i class="fas fa-star bestselling__product-rate"></i>
                                <i class="fas fa-star bestselling__product-rate"></i>
                            </div>

                            <span class="bestselling__product-price">
                                79.000đ
                            </span>

                            <div class="bestselling__product-btn-wrap">
                                <button class="bestselling__product-btn">Xem hàng</button>
                            </div>
                        </div>
                    </div>
                    <div class="bestselling__product col-lg-4 col-md-6 col-sm-12">
                        <div class="bestselling__product-img-box">
                            <img src="{{ asset('/web/images1/product/image_180164_2_287.jp')}}g" alt="Tuổi Trẻ Đáng Giá Bao Nhiêu? "
                                class="bestselling__product-img">
                        </div>
                        <div class="bestselling__product-text">
                            <h3 class="bestselling__product-title">
                                <a href="#" class="bestselling__product-link">Tuổi Trẻ Đáng Giá Bao Nhiêu? </a>
                            </h3>

                            <div class="bestselling__product-rate-wrap">
                                <i class="fas fa-star bestselling__product-rate"></i>
                                <i class="fas fa-star bestselling__product-rate"></i>
                                <i class="fas fa-star bestselling__product-rate"></i>
                                <i class="fas fa-star bestselling__product-rate"></i>
                                <i class="fas fa-star bestselling__product-rate"></i>
                            </div>

                            <span class="bestselling__product-price">
                                80.000đ
                            </span>

                            <div class="bestselling__product-btn-wrap">
                                <button class="bestselling__product-btn">Xem hàng</button>
                            </div>
                        </div>
                    </div>
                    <div class="bestselling__product col-lg-4 col-md-6 col-sm-12">
                        <div class="bestselling__product-img-box">
                            <img src="{{ asset('/web/images1/product/ttdc01.jp')}}g" alt="Thám Tử Đã Chết - Tập 1 - Tặng Kèm Bookmark Tròn"
                                class="bestselling__product-img">
                        </div>
                        <div class="bestselling__product-text">
                            <h3 class="bestselling__product-title">
                                <a href="#" class="bestselling__product-link">Thám Tử Đã Chết - Tập 1 - Tặng Kèm Bookmark
                                    Tròn</a>
                            </h3>

                            <div class="bestselling__product-rate-wrap">
                                <i class="fas fa-star bestselling__product-rate"></i>
                                <i class="fas fa-star bestselling__product-rate"></i>
                                <i class="fas fa-star bestselling__product-rate"></i>
                                <i class="fas fa-star bestselling__product-rate"></i>
                                <i class="fas fa-star bestselling__product-rate"></i>
                            </div>

                            <span class="bestselling__product-price">
                                119.000đ
                            </span>

                            <div class="bestselling__product-btn-wrap">
                                <button class="bestselling__product-btn">Xem hàng</button>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="row bestselling__banner">

                    <div class="bestselling__banner-left col-lg-6">
                        <img src="{{ asset('/web/images1/banner/920x420_phienchodocu.png')}}" alt="Banner quảng cáo"
                            class="bestselling__banner-left-img">
                    </div>
                    <div class="bestselling__banner-right col-lg-6">
                        <img src="{{ asset('/web/images1/banner/muonkiepnhansinh_resize_920x420.jpg')}}" alt="Banner quảng cáo"
                            class="bestselling__banner-right-img">
                    </div>
                </div>
            </div>
        </section>

        <!-- end bestselling product -->

        <!-- product -->
        <section class="product">
            <div class="container">
                <div class="row">
                    <aside class="product__sidebar col-lg-3 col-md-0 col-sm-12">
                        <div class="product__sidebar-heading">
                            <div class=""></div>
                            <h2 class="product__sidebar-title">
                                <img src="{{ asset('/web/images1/item/1380754_batman_comic_hero_superhero_icon.png')}}" alt=""
                                    class="menu__item-icon" id="Capa_1" enable-background="new 0 0 512 512" height="512"
                                    viewBox="0 0 512 512" width="512">
                                Manga - Comic
                            </h2>
                        </div>

                        <nav class="product__sidebar-list">

                            <div class="row">
                                <div class="product__sidebar-item col-lg-6">
                                    <img src="{{ asset('/web/images1/product/【グラブル】「炭治郎&禰豆子&善逸&伊之助」の評価_性能検証｜鬼滅コラボ【グランブルーファンタジー】 - ゲームウィズ(GameWith).jfif')}}"
                                        alt="" class="product__sidebar-item-img">
                                    <a href="" class="product__sidebar-item-name">Manga</a>
                                </div>
                                <div class="product__sidebar-item col-lg-6">
                                    <img src="{{ asset('/web/images1/product/My Anime For Life.jfif')}}" class="product__sidebar-item-img">
                                    <a href="" class="product__sidebar-item-name">Series Manga</a>
                                </div>
                                <div class="product__sidebar-item col-lg-6">
                                    <img src="{{ asset('/web/images1/product/twd2_biaao_demo.jpg')}}" alt=""
                                        class="product__sidebar-item-img">
                                    <a href="" class="product__sidebar-item-name">Comics</a>
                                </div>
                                <div class="product__sidebar-item col-lg-6">
                                    <img src="{{ asset('/web/images1/product/8936054081882.jpg')}}" alt="" class="product__sidebar-item-img">
                                    <a href="" class="product__sidebar-item-name">Truyện tranh Việt Nam</a>
                                </div>
                            </div>
                        </nav>

                        <div class="product__sidebar-img-wrap">
                            <!-- <img src="{{ asset('/web/images1/product/Demon Slayer_ Kimetsu no Yaiba - Assista na Crunchyroll.png')}}" width="255" height="350" alt=""> -->
                            <video width="255" height="300" controls>
                                <source src="video/contra.st_1629123780_musicaldown.com.mp4" type="video/mp4">
                            </video>
                            <!-- <img src="images/banner_7.jpg" alt="" class="product__sidebar-img"> -->
                        </div>
                    </aside>

                    <article class="product__content col-lg-9 col-md-12 col-sm-12">
                        <nav class="row">
                            <ul class="product__list hide-on-mobile">
                                <li class="product__item product__item--active">
                                    <a href="#" class="product__link">Hành động - Phiêu lưu</a>
                                </li>
                                <li class="product__item">
                                    <a href="#" class="product__link">Bí ẩn - Siêu nhiên</a>
                                </li>
                                <li class="product__item">
                                    <a href="#" class="product__link">Giả tưởng - Khoa học</a>
                                </li>
                                <li class="product__item">
                                    <a href="#" class="product__link">Lãng mạn - Hài kịch</a>
                                </li>
                            </ul>

                            <div class="product__title-mobile">
                                <h2>Hành động - Phiêu lưu</h2>
                            </div>
                        </nav>

                        <div class="row product__panel">

                            <div class="product__panel-item col-lg-3 col-md-4 col-sm-6">
                                <div class="product__panel-item-wrap">
                                    <div class="product__panel-img-wrap">
                                        <img src="{{ asset('/web/images1/product/600my-hero-academia-hoc-vien-sieu-anh-hung.jpg')}}" alt=""
                                            class="product__panel-img">
                                    </div>
                                    <h3 class="product__panel-heading">
                                        <a href="product.html" class="product__panel-link">My Hero Academia - Tập 27:
                                            One’s Justice</a>
                                    </h3>
                                    <div class="product__panel-rate-wrap">
                                        <i class="fas fa-star product__panel-rate"></i>
                                        <i class="fas fa-star product__panel-rate"></i>
                                        <i class="fas fa-star product__panel-rate"></i>
                                        <i class="fas fa-star product__panel-rate"></i>
                                        <i class="fas fa-star product__panel-rate"></i>
                                    </div>

                                    <div class="product__panel-price">
                                        <span class="product__panel-price-old">
                                            20.000đ
                                        </span>
                                        <span class="product__panel-price-current">
                                            19.580đ
                                        </span>
                                    </div>

                                    <div class="product__panel-price-sale-off">
                                        -11%
                                    </div>
                                </div>
                            </div>
                            <div class="product__panel-item col-lg-3 col-md-4 col-sm-6">
                                <div class="product__panel-item-wrap">
                                    <div class="product__panel-img-wrap">
                                        <img src="{{ asset('/web/images1/product/cau-ma-nha-xi-hanako---tap-1.jpg')}}" alt=""
                                            class="product__panel-img">
                                    </div>
                                    <h3 class="product__panel-heading">
                                        <a href="#" class="product__panel-link">"Cậu" Ma Nhà Xí Hanako - Tập 1</a>
                                    </h3>
                                    <div class="product__panel-rate-wrap">
                                        <i class="fas fa-star product__panel-rate"></i>
                                        <i class="fas fa-star product__panel-rate"></i>
                                        <i class="fas fa-star product__panel-rate"></i>
                                        <i class="fas fa-star product__panel-rate"></i>
                                        <i class="fas fa-star product__panel-rate"></i>
                                    </div>

                                    <div class="product__panel-price">
                                        <span class="product__panel-price-old">
                                            28.000đ
                                        </span>
                                        <span class="product__panel-price-current">
                                            22.400đ
                                        </span>
                                    </div>
                                    <div class="product__panel-price-sale-off">
                                        -20%
                                    </div>
                                </div>

                            </div>
                            <div class="product__panel-item col-lg-3 col-md-4 col-sm-6">
                                <div class="product__panel-item-wrap">
                                    <div class="product__panel-img-wrap">
                                        <img src="{{ asset('/web/images1/product/one-piece-tap-95_chuyen-chu-du-cua-oden_1.jpg')}}" alt=""
                                            class="product__panel-img">
                                    </div>
                                    <h3 class="product__panel-heading">
                                        <a href="#" class="product__panel-link">One Piece - Tập 95 (Bản Bìa Rời)</a>
                                    </h3>
                                    <div class="product__panel-rate-wrap">
                                        <i class="fas fa-star product__panel-rate"></i>
                                        <i class="fas fa-star product__panel-rate"></i>
                                        <i class="fas fa-star product__panel-rate"></i>
                                        <i class="fas fa-star product__panel-rate"></i>
                                        <i class="fas fa-star product__panel-rate"></i>
                                    </div>

                                    <div class="product__panel-price">
                                        <span class="product__panel-price-old">
                                            19.500đ
                                        </span>
                                        <span class="product__panel-price-current">
                                            16.575đ
                                        </span>
                                    </div>
                                    <div class="product__panel-price-sale-off">
                                        -15%
                                    </div>
                                </div>

                            </div>
                            <div class="product__panel-item col-lg-3 col-md-4 col-sm-6">
                                <div class="product__panel-item-wrap">
                                    <div class="product__panel-img-wrap">
                                        <img src="{{ asset('/web/images1/product/mob-psycho-100_tap-3.jpg')}}" alt=""
                                            class="product__panel-img">
                                    </div>
                                    <h3 class="product__panel-heading">
                                        <a href="#" class="product__panel-link">Mob Psycho 100 - Tập 3</a>
                                    </h3>
                                    <div class="product__panel-rate-wrap">
                                        <i class="fas fa-star product__panel-rate"></i>
                                        <i class="fas fa-star product__panel-rate"></i>
                                        <i class="fas fa-star product__panel-rate"></i>
                                        <i class="fas fa-star product__panel-rate"></i>
                                        <i class="fas fa-star product__panel-rate"></i>
                                    </div>

                                    <div class="product__panel-price">
                                        <span class="product__panel-price-old">
                                            30.000đ
                                        </span>
                                        <span class="product__panel-price-current">
                                            21.000đ
                                        </span>
                                    </div>

                                    <div class="product__panel-price-sale-off">
                                        -30%
                                    </div>
                                </div>


                            </div>

                            <div class="product__panel-item col-lg-3 col-md-4 col-sm-6">
                                <div class="product__panel-item-wrap">
                                    <div class="product__panel-img-wrap">
                                        <img src="{{ asset('/web/images1/product/thanh-guom-diet-quy-tap-12.jpg')}}" alt=""
                                            class="product__panel-img">
                                    </div>
                                    <h3 class="product__panel-heading">
                                        <a href="#" class="product__panel-link">Thanh Gươm Diệt Quỷ - Tập 12: Các Thượng
                                            Huyền Tập Hợp</a>
                                    </h3>
                                    <div class="product__panel-rate-wrap">
                                        <i class="fas fa-star product__panel-rate"></i>
                                        <i class="fas fa-star product__panel-rate"></i>
                                        <i class="fas fa-star product__panel-rate"></i>
                                        <i class="fas fa-star product__panel-rate"></i>
                                        <i class="fas fa-star product__panel-rate"></i>
                                    </div>

                                    <div class="product__panel-price">
                                        <span class="product__panel-price-current">
                                            25.000đ
                                        </span>
                                    </div>
                                </div>


                            </div>

                            <div class="product__panel-item col-lg-3 col-md-4 col-sm-6">
                                <div class="product__panel-item-wrap">
                                    <div class="product__panel-img-wrap">
                                        <img src="{{ asset('/web/images1/product/image_186914.jpg')}}" alt="" class="product__panel-img">
                                    </div>
                                    <h3 class="product__panel-heading">
                                        <a href="#" class="product__panel-link">My Hero Academia - Tập 5: Todoroki Shoto:
                                            Khởi Đầu (Tái Bản)</a>
                                    </h3>
                                    <div class="product__panel-rate-wrap">
                                        <i class="fas fa-star product__panel-rate"></i>
                                        <i class="fas fa-star product__panel-rate"></i>
                                        <i class="fas fa-star product__panel-rate"></i>
                                        <i class="fas fa-star product__panel-rate"></i>
                                        <i class="fas fa-star product__panel-rate"></i>
                                    </div>

                                    <div class="product__panel-price">
                                        <span class="product__panel-price-current">
                                            20.000đ
                                        </span>
                                    </div>
                                </div>

                            </div>

                            <div class="product__panel-item col-lg-3 col-md-4 col-sm-6">
                                <div class="product__panel-item-wrap">
                                    <div class="product__panel-img-wrap">
                                        <img src="{{ asset('/web/images1/product/image_186912.jpg')}}" alt="" class="product__panel-img">
                                    </div>
                                    <h3 class="product__panel-heading">
                                        <a href="#" class="product__panel-link">My Hero Academia - Tập 3: All Might (Tái
                                            Bản)</a>
                                    </h3>
                                    <div class="product__panel-rate-wrap">
                                        <i class="fas fa-star product__panel-rate"></i>
                                        <i class="fas fa-star product__panel-rate"></i>
                                        <i class="fas fa-star product__panel-rate"></i>
                                        <i class="fas fa-star product__panel-rate"></i>
                                        <i class="fas fa-star product__panel-rate"></i>
                                    </div>

                                    <div class="product__panel-price">
                                        <span class="product__panel-price-current">
                                            20.000đ
                                        </span>
                                    </div>
                                </div>


                            </div>

                            <div class="product__panel-item col-lg-3 col-md-4 col-sm-6">
                                <div class="product__panel-item-wrap">
                                    <div class="product__panel-img-wrap">
                                        <img src="{{ asset('/web/images1/product/one-22.jpg')}}" alt="" class="product__panel-img">
                                    </div>
                                    <h3 class="product__panel-heading">
                                        <a href="#" class="product__panel-link">One-Punch Man Tập 22: Ánh Sáng</a>
                                    </h3>
                                    <div class="product__panel-rate-wrap">
                                        <i class="fas fa-star product__panel-rate"></i>
                                        <i class="fas fa-star product__panel-rate"></i>
                                        <i class="fas fa-star product__panel-rate"></i>
                                        <i class="fas fa-star product__panel-rate"></i>
                                        <i class="fas fa-star product__panel-rate"></i>
                                    </div>

                                    <div class="product__panel-price">
                                        <span class="product__panel-price-current">
                                            21.000đ
                                        </span>
                                    </div>
                                </div>

                            </div>

                    </article>
                </div>
            </div>
        </section>
        <!--end product -->

        <!-- product love -->
        <section class="product__love">
            <div class="container">
                <div class="row bg-white">
                    <div class="col-lg-12 col-md-12 col-sm-12 product__love-title">
                        <h2 class="product__love-heading">
                            Có thể bạn thích
                        </h2>
                    </div>
                </div>
                <div class="row bg-white">
                    <div class="product__panel-item col-lg-2 col-md-3 col-sm-6">
                        <div class="product__panel-img-wrap">
                            <img src="{{ asset('/web/images1/product/image_187163.jpg')}}" alt="" class="product__panel-img">
                        </div>
                        <h3 class="product__panel-heading">
                            <a href="#" class="product__panel-link">Tuổi Thơ Dữ Dội - Tập 2 (Tái Bản 2019)</a>
                        </h3>
                        <div class="product__panel-rate-wrap">
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                        </div>

                        <div class="product__panel-price">
                            <span class="product__panel-price-old product__panel-price-old-hide">
                                80.000đ
                            </span>
                            <span class="product__panel-price-current">
                                69.000đ
                            </span>
                        </div>
                    </div>

                    <div class="product__panel-item col-lg-2 col-md-3 col-sm-6">
                        <div class="product__panel-img-wrap">
                            <img src="{{ asset('/web/images1/product/image_188285.jpg')}}" alt="" class="product__panel-img">
                        </div>
                        <h3 class="product__panel-heading">
                            <a href="#" class="product__panel-link">Chuyện Con Mèo Dạy Hải Âu Bay</a>
                        </h3>
                        <div class="product__panel-rate-wrap">
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                        </div>

                        <div class="product__panel-price">
                            <span class="product__panel-price-old product__panel-price-old-hide">
                                49.000đ
                            </span>
                            <span class="product__panel-price-current">
                                34.300đ
                            </span>
                        </div>
                    </div>

                    <div class="product__panel-item col-lg-2 col-md-3 col-sm-6">
                        <div class="product__panel-img-wrap">
                            <img src="{{ asset('/web/images1/product/8936186542176.jpg')}}" alt="" class="product__panel-img">
                        </div>
                        <h3 class="product__panel-heading">
                            <a href="#" class="product__panel-link">Tôi thích một cô gái nhưng không dám ngỏ lời</a>
                        </h3>
                        <div class="product__panel-rate-wrap">
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                        </div>

                        <div class="product__panel-price">
                            <span class="product__panel-price-old product__panel-price-old-hide 
                       ">
                                109.000đ
                            </span>
                            <span class="product__panel-price-current">
                                70.000đ
                            </span>
                        </div>
                    </div>
                    <div class="product__panel-item col-lg-2 col-md-3 col-sm-6">
                        <div class="product__panel-img-wrap">
                            <img src="{{ asset('/web/images1/product/biamem.jpg')}}" alt="" class="product__panel-img">
                        </div>
                        <h3 class="product__panel-heading">
                            <a href="#" class="product__panel-link">Con Chim Xanh Biếc Bay Về - Tặng Kèm 6 Postcard</a>
                        </h3>
                        <div class="product__panel-rate-wrap">
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                        </div>

                        <div class="product__panel-price">
                            <span class="product__panel-price-old product__panel-price-old-hide">
                                150.000đ
                            </span>
                            <span class="product__panel-price-current">
                                112.500đ
                            </span>
                        </div>
                    </div>

                    <div class="product__panel-item col-lg-2 col-md-3 col-sm-6">
                        <div class="product__panel-img-wrap">
                            <img src="{{ asset('/web/images1/product//8936049524905.jpg')}}" alt="" class="product__panel-img">
                        </div>
                        <h3 class="product__panel-heading">
                            <a href="#" class="product__panel-link">5 Centimet Trên Giây</a>
                        </h3>
                        <div class="product__panel-rate-wrap">
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                        </div>

                        <div class="product__panel-price">
                            <span class="product__panel-price-old product__panel-price-old-hide">
                                50.000đ
                            </span>
                            <span class="product__panel-price-current">
                                39.500đ
                            </span>
                        </div>
                    </div>

                    <div class="product__panel-item col-lg-2 col-md-3 col-sm-6">
                        <div class="product__panel-img-wrap">
                            <img src="{{ asset('/web/images1/product/bia1_tobinhyen_2_1_1.jpg')}}" alt="" class="product__panel-img">
                        </div>
                        <h3 class="product__panel-heading">
                            <a href="#" class="product__panel-link">Tô Bình Yên Vẽ Hạnh Phúc
                            </a>
                        </h3>
                        <div class="product__panel-rate-wrap">
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                        </div>

                        <div class="product__panel-price">
                            <span class="product__panel-price-old product__panel-price-old-hide">
                                78.000đ
                            </span>
                            <span class="product__panel-price-current">
                                63.960đ
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--end product love -->

        <!-- post -->
        <section class="posts">
            <div class="container">
                <header class="row posts__title">
                    <div class="posts__title-wrap col-lg-12 col-md-12 col-sm-12">
                        <h2 class="posts__heading">
                            Tin tức - Bài viết
                        </h2>
                    </div>
                </header>
                <article class="row posts__list">
                    <div class="posts__item col-lg-3 col-md-6 col-sm-6">
                        <div class="posts__item-img">
                            <img src="{{ asset('/web/images1/post/got-it-e-voucher.png')}}" width="80%">
                        </div>
                        <h3 class="posts__item-heading">
                            <a href="" class="posts__item-title">
                                Mẹo săn mã voucher giảm giá tại Edu Book
                            </a>
                        </h3>
                        <div class="posts__item-date">
                            28/05/2020
                        </div>
                        <div class="posts__item-cate-wrap">
                            <div class="posts__item-cate">
                                <i class="fa fa-folder posts__item-cate-icon"></i>
                                <div class="posts__item-cate-name">
                                    Tin tức
                                </div>
                            </div>
                            <div class="posts__item-cate-ad">
                                <i class="fa fa-user posts__item-cate-ad-icon"></i>
                                <div class="posts__item-cate-ad-name">
                                    Nguyễn Nhung
                                </div>
                            </div>
                        </div>
                        <div class="posts__item-description">
                            Nếu bạn đang gặp phải những vấn đề về săn, lấy, sử dụng mã voucher của EduBook. Xin hãy yên
                            tâm, bài viết này
                            dành cho bạn! Trong bài viết này mình sẽ chia sẻ đến bạn những mẹo, những kinh nghiệm giúp bạn
                            săn được nhiều
                            mã giảm giá EduBook nhất có thể.....
                        </div>
                    </div>

                    <div class="posts__item col-lg-3 col-md-6 col-sm-6">
                        <div class="posts__item-img">
                            <img src="{{ asset('/web/images1/post/hinh-ghep-15986994500641611959184.jpg')}}">
                        </div>
                        <h3 class="posts__item-heading">
                            <a href="" class="posts__item-title">
                                Cách phân biệt sách thật, giả chính xác
                            </a>
                        </h3>
                        <div class="posts__item-date">
                            05/06/2020
                        </div>
                        <div class="posts__item-cate-wrap">
                            <div class="posts__item-cate">
                                <i class="fa fa-folder posts__item-cate-icon"></i>
                                <div class="posts__item-cate-name">
                                    Tin tức
                                </div>
                            </div>
                            <div class="posts__item-cate-ad">
                                <i class="fa fa-user posts__item-cate-ad-icon"></i>
                                <div class="posts__item-cate-ad-name">
                                    Trung Trần
                                </div>
                            </div>
                        </div>
                        <div class="posts__item-description">
                            Để các độc giả, phụ huynh, học sinh và các thầy cô giáo… không mua phải các loại sách tham khảo
                            giả, sách in lậu,
                            mình sẽ hướng dẫn cách phân biệt sách thật, giả nhanh chóng và chính xác. Nếu bạn chú ý quan
                            sát một xíu là có thể
                            phân biệt được sách giả ngay. Với sách giả khi cầm trên tay sẽ có cảm giác mềm hơn, không cứng
                            và chắc tay như sách thật...
                        </div>
                    </div>

                    <div class="posts__item col-lg-3 col-md-6 col-sm-6">
                        <div class="posts__item-img">
                            <img src="{{ asset('/web/images1/post/cach-su-dung-ma-giam-gia-hieu-qua-tai-vnreviews.png')}}">
                        </div>
                        <h3 class="posts__item-heading">
                            <a href="#" class="posts__item-title">
                                Sử dụng mã giảm giá Edu Book như thế nào
                            </a>
                        </h3>
                        <div class="posts__item-date">
                            26/05/2020
                        </div>
                        <div class="posts__item-cate-wrap">
                            <div class="posts__item-cate">
                                <i class="fa fa-folder posts__item-cate-icon"></i>
                                <div class="posts__item-cate-name">
                                    Tin tức
                                </div>
                            </div>
                            <div class="posts__item-cate-ad">
                                <i class="fa fa-user posts__item-cate-ad-icon"></i>
                                <div class="posts__item-cate-ad-name">
                                    Tùng Lương
                                </div>
                            </div>
                        </div>
                        <div class="posts__item-description">
                            Sau khi lấy được mã rồi thì tất nhiên bạn phải biết cách sử dụng nó rồi. Về cơ bản thì EduBook
                            cho phép bạn sử dụng cùng
                            lúc 3 loại mã giảm giá mà mình đã kể trên trong cùng 1 đơn hàng. Bao gồm:
                            Mã FreeShip,
                            Mã giảm giá của Shop,
                            Và Ưu đãi từ đối tác thanh toán,....
                        </div>
                    </div>

                    <div class="posts__item col-lg-3 col-md-6 col-sm-6">
                        <div class="posts__item-img">
                            <img src="{{ asset('/web/images1/post/images.jfif')}}">
                        </div>
                        <h3 class="posts__item-heading">
                            <a href="" class="posts__item-title">
                                Hướng dẫn đổi trả sách, hoàn tiền Edu Book
                            </a>
                        </h3>
                        <div class="posts__item-date">
                            22/05/2020
                        </div>
                        <div class="posts__item-cate-wrap">
                            <div class="posts__item-cate">
                                <i class="fa fa-folder posts__item-cate-icon"></i>
                                <div class="posts__item-cate-name">
                                    Tin tức
                                </div>
                            </div>
                            <div class="posts__item-cate-ad">
                                <i class="fa fa-user posts__item-cate-ad-icon"></i>
                                <div class="posts__item-cate-ad-name">
                                    Nguyễn Nhung
                                </div>
                            </div>
                        </div>
                        <div class="posts__item-description">
                            Mua hàng trên Edu Book nhưng sản phẩm bạn nhận được không giống hình, sản phẩm bị lỗi. Bạn nghĩ
                            mình bị lừa, bạn bối rối không biết
                            làm thế nào và quyết định search google: “Phải làm gì khi muốn hoàn trả hàng hoàn tiền trên Edu
                            Book”. Bài viết này sẽ hướng dẫn
                            bạn đổi trả sách EduBook đúng quy trình...
                        </div>
                    </div>
                </article>
                <article class="row posts__view">
                    <a href="post.html" class="posts__view-btn">Xem thêm</a>
                </article>
            </div>
        </section>
        <!-- end post -->


        <!-- footer -->
        <footer>
            <section class="footer__top">
                <div class="container">
                    <div class="row">
                        <article class="footer__top-intro col-lg-5 col-md-4 col-sm-6">
                            <h4 class="footer__top-intro-heading">
                                Về chúng tôi
                            </h4>
                            <div class="footer__top-intro-content">
                                Edubook là cửa hàng luôn cung cấp cho các bạn tìm tòi tri thức, đam mê
                                đọc sách trên khắp cả nước.Chúng tôi sẽ liên tục cập
                                nhật những cuốn sách hay nhất, mới nhất, chất lượng nhất
                                giúp người đọc có những cuốn sách hay nhất để đọc! <br> <br>
                                Điện thoại: 0352 860 701 <br>
                                Email: teamed2@gmail.com <br>
                                Zalo: 039.882.3232 <br>
                            </div>
                        </article>

                        <article class="footer__top-policy col-lg-3 col-md-4 col-sm-6">
                            <h4 class="footer__top-policy-heading">
                                Chính sách mua hàng
                            </h4>

                            <ul class="footer__top-policy-list">
                                <li class="footer__top-policy-item">
                                    <a href="#" class="footer__top-policy-link">Hình thức đặt hàng</a>
                                </li>
                                <li class="footer__top-policy-item">
                                    <a href="#" class="footer__top-policy-link">Hình thức thanh toán</a>
                                </li>
                                <li class="footer__top-policy-item">
                                    <a href="#" class="footer__top-policy-link">Phương thức vận chuyển</a>
                                </li>
                                <li class="footer__top-policy-item">
                                    <a href="#" class="footer__top-policy-link">Chính sách đổi trả</a>
                                </li>
                                <li class="footer__top-policy-item">
                                    <a href="#" class="footer__top-policy-link">Hướng dẫn sử dụng</a>
                                </li>
                            </ul>
                        </article>

                        <article class="footer__top-contact-wrap col-lg-4 col-md-4 col-sm-6">
                            <h4 class="footer__top-contact-heading">
                                Hotline liên hệ
                            </h4>

                            <div class="footer__top-contact">
                                <div class="footer__top-contact-icon">
                                    <img src="images/phone_top.png" class="footer__top-contact-img">
                                </div>

                                <div class="footer__top-contact-phone-wrap">
                                    <div class="footer__top-contact-phone">
                                        039.882.3232
                                    </div>
                                    <div class="footer__top-contact-des">
                                        (Giải đáp thắc mắc 24/24)
                                    </div>
                                </div>
                            </div>

                            <h4 class="footer__top-contact-heading">
                                Kết nối với chúng tôi
                            </h4>

                            <div class="footer__top-contact-social">
                                <a href="#" class="footer__top-contact-social-link">
                                    <img src="images/facebook.png">
                                </a>
                                <a href="#" class="footer__top-contact-social-link">
                                    <img src="images/youtube.png">
                                </a>
                                <a href="#" class="footer__top-contact-social-link">
                                    <img src="images/tiktok.png">
                                </a>
                                <a href="#" class="footer__top-contact-social-link">
                                    <img src="images/zalo.png">
                                </a>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
            <section class="footer__bottom">
                <div class="container">
                    <div class="row">
                        <span class="footer__bottom-content">@Bản quyền thuộc về edubook | Thiết kế bởi team ED2 </span>
                    </div>
                </div>
            </section>
        </footer>
        <!-- end footer -->

        <div class="main__modal">
            <div class="modal__overlay"></div>
            <div class="modal__body">
                <!-- resgist form -->
                <div class="sale-off">
                    <div class="sale-off__container">
                        <h2 class="sale-off__heading">
                            Nhận phiếu giảm giá <span class="sale-off__sp">30%</span> khi mua <br> <span
                                class="sale-off__name">Học tập qua dự án</span>
                        </h2>
                        <div class="sale-off__img">
                            <img src="{{ asset('/web/images1/product/hoc-tap-qua-du-an-2-01-1.jpg')}}" width="300">
                        </div>

                        <a href="product.html" class="sale-off__link">
                            <button class="sale-off__btn">Mua ngay</button>
                        </a>
                    </div>

                    <div class="sale-off__close">
                        <!-- <svg class="sale-off__close-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" class="svg-inline--fa fa-times fa-w-11" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg> -->
                        x
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('web/js/jq.js') }}"></script>
    <script src="{{ asset('web/js/index.js') }}"></script>
@endsection