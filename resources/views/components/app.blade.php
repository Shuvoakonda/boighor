<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home | Books Library eCommerce Store</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/icon.png">

    <!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Cusom css -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer js -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body>
    <!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
    your browser</a> to improve your experience and security.</p>
<![endif]-->

    <!-- Main wrapper -->
    <div class="wrapper" id="wrapper">
        <!-- Header -->
        <header id="wn__header" class="header__area header__absolute sticky__header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-6 col-lg-2">
                        <div class="logo">
                            <a href="{{ route('index') }}">
                                <img src="images/logo/logo.png" alt="logo images">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 d-none d-lg-block">
                        <nav class="mainmenu__nav">
                            <ul class="meninmenu d-flex justify-content-start">
                                <li class="drop with--one--item"><a href="{{ route('index') }}">Home</a>
                                </li>
                                <li class="drop"><a href="{{ route('shop') }}">Shop</a>
                                    <div class="megamenu mega03">
                                        <ul class="item item03">
                                            <li class="title">Shop Layout</li>
                                            <li><a href="shop-grid.html">Shop Grid</a></li>
                                            <li><a href="shop-list.html">Shop List</a></li>
                                            <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                            <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                            <li><a href="shop-no-sidebar.html">Shop No sidebar</a></li>
                                            <li><a href="single-product.html">Single Product</a></li>
                                        </ul>
                                        <ul class="item item03">
                                            <li class="title">Shop Page</li>
                                            <li><a href="my-account.html">My Account</a></li>
                                            <li><a href="cart.html">Cart Page</a></li>
                                            <li><a href="checkout.html">Checkout Page</a></li>
                                            <li><a href="wishlist.html">Wishlist Page</a></li>
                                            <li><a href="error404.html">404 Page</a></li>
                                            <li><a href="faq.html">Faq Page</a></li>
                                        </ul>
                                        <ul class="item item03">
                                            <li class="title">Bargain Books</li>
                                            <li><a href="shop-grid.html">Bargain Bestsellers</a></li>
                                            <li><a href="shop-grid.html">Activity Kits</a></li>
                                            <li><a href="shop-grid.html">B&N Classics</a></li>
                                            <li><a href="shop-grid.html">Books Under $5</a></li>
                                            <li><a href="shop-grid.html">Bargain Books</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="drop"><a href="{{ route('books') }}">Books</a>
                                    <div class="megamenu mega03">
                                        <ul class="item item03">
                                            <li class="title">Categories</li>
                                            <li><a href="shop-grid.html">Biography </a></li>
                                            <li><a href="shop-grid.html">Business </a></li>
                                            <li><a href="shop-grid.html">Cookbooks </a></li>
                                            <li><a href="shop-grid.html">Health & Fitness </a></li>
                                            <li><a href="shop-grid.html">History </a></li>
                                        </ul>
                                        <ul class="item item03">
                                            <li class="title">Customer Favourite</li>
                                            <li><a href="shop-grid.html">Mystery</a></li>
                                            <li><a href="shop-grid.html">Religion & Inspiration</a></li>
                                            <li><a href="shop-grid.html">Romance</a></li>
                                            <li><a href="shop-grid.html">Fiction/Fantasy</a></li>
                                            <li><a href="shop-grid.html">Sleeveless</a></li>
                                        </ul>
                                        <ul class="item item03">
                                            <li class="title">Collections</li>
                                            <li><a href="shop-grid.html">Science </a></li>
                                            <li><a href="shop-grid.html">Fiction/Fantasy</a></li>
                                            <li><a href="shop-grid.html">Self-Improvemen</a></li>
                                            <li><a href="shop-grid.html">Home & Garden</a></li>
                                            <li><a href="shop-grid.html">Humor Books</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="drop"><a href="{{ route('kids') }}">Kids</a>
                                    <div class="megamenu mega02">
                                        <ul class="item item02">
                                            <li class="title">Top Collections</li>
                                            <li><a href="shop-grid.html">American Girl</a></li>
                                            <li><a href="shop-grid.html">Diary Wimpy Kid</a></li>
                                            <li><a href="shop-grid.html">Finding Dory</a></li>
                                            <li><a href="shop-grid.html">Harry Potter</a></li>
                                            <li><a href="shop-grid.html">Land of Stories</a></li>
                                        </ul>
                                        <ul class="item item02">
                                            <li class="title">More For Kids</li>
                                            <li><a href="shop-grid.html">B&N Educators</a></li>
                                            <li><a href="shop-grid.html">B&N Kids' Club</a></li>
                                            <li><a href="shop-grid.html">Kids' Music</a></li>
                                            <li><a href="shop-grid.html">Toys & Games</a></li>
                                            <li><a href="shop-grid.html">Hoodies</a></li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="drop"><a href="{{ route('blog') }}">Blog</a>
                                    <div class="megamenu dropdown">
                                        <ul class="item item01">
                                            <li><a href="blog.html">Blog Page</a></li>
                                            <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                            <li><a href="blog-no-sidebar.html">Blog No Sidebar</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="{{ route('contact') }}">Contact</a>
                                </li>
                                <li class="drop"><a href="{{ route('about') }}">Abouts</a>
                                    <div class="megamenu dropdown">
                                        <ul class="item item01">
                                            <li><a href="about.html">About Page</a></li>
                                            <li class="label2"><a href="portfolio.html">Portfolio</a>
                                                <ul>
                                                    <li><a href="portfolio.html">Portfolio</a></li>
                                                    <li><a href="portfolio-three-column.html">Portfolio 3 Column</a>
                                                    </li>
                                                    <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="my-account.html">My Account</a></li>
                                            <li><a href="cart.html">Cart Page</a></li>
                                            <li><a href="checkout.html">Checkout Page</a></li>
                                            <li><a href="wishlist.html">Wishlist Page</a></li>
                                            <li><a href="error404.html">404 Page</a></li>
                                            <li><a href="faq.html">Faq Page</a></li>
                                            <li><a href="team.html">Team Page</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-6 col-6 col-lg-2">
                        <ul class="header__sidebar__right d-flex justify-content-end align-items-center">
                            <li class="shop_search"><a class="search__active" href="#"></a></li>
                            <li class="wishlist"><a href="#"></a></li>
                            <li class="shopcart"><a class="cartbox_active" href="#"><span
                                        class="product_qun">3</span></a>
                                <!-- Start Shopping Cart -->
                                <div class="block-minicart minicart__active">
                                    <div class="minicart-content-wrapper">
                                        <div class="micart__close">
                                            <span>close</span>
                                        </div>
                                        <div class="items-total d-flex justify-content-between">
                                            <span>3 items</span>
                                            <span>Cart Subtotal</span>
                                        </div>
                                        <div class="total_amount text-end">
                                            <span>$66.00</span>
                                        </div>
                                        <div class="mini_action checkout">
                                            <a class="checkout__btn" href="cart.html">Go to Checkout</a>
                                        </div>
                                        <div class="single__items">
                                            <div class="miniproduct">
                                                <div class="item01 d-flex">
                                                    <div class="thumb">
                                                        <a href="product-details.html"><img
                                                                src="images/product/sm-img/1.jpg"
                                                                alt="product images"></a>
                                                    </div>
                                                    <div class="content">
                                                        <h6><a href="product-details.html">Voyage Yoga Bag</a></h6>
                                                        <span class="price">$30.00</span>
                                                        <div class="product_price d-flex justify-content-between">
                                                            <span class="qun">Qty: 01</span>
                                                            <ul class="d-flex justify-content-end">
                                                                <li><a href="#"><i
                                                                            class="zmdi zmdi-settings"></i></a>
                                                                </li>
                                                                <li><a href="#"><i
                                                                            class="zmdi zmdi-delete"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item01 d-flex mt--20">
                                                    <div class="thumb">
                                                        <a href="product-details.html"><img
                                                                src="images/product/sm-img/3.jpg"
                                                                alt="product images"></a>
                                                    </div>
                                                    <div class="content">
                                                        <h6><a href="product-details.html">Impulse Duffle</a></h6>
                                                        <span class="price">$40.00</span>
                                                        <div class="product_price d-flex justify-content-between">
                                                            <span class="qun">Qty: 03</span>
                                                            <ul class="d-flex justify-content-end">
                                                                <li><a href="#"><i
                                                                            class="zmdi zmdi-settings"></i></a>
                                                                </li>
                                                                <li><a href="#"><i
                                                                            class="zmdi zmdi-delete"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item01 d-flex mt--20">
                                                    <div class="thumb">
                                                        <a href="product-details.html"><img
                                                                src="images/product/sm-img/2.jpg"
                                                                alt="product images"></a>
                                                    </div>
                                                    <div class="content">
                                                        <h6><a href="product-details.html">Compete Track Tote</a></h6>
                                                        <span class="price">$40.00</span>
                                                        <div class="product_price d-flex justify-content-between">
                                                            <span class="qun">Qty: 03</span>
                                                            <ul class="d-flex justify-content-end">
                                                                <li><a href="#"><i
                                                                            class="zmdi zmdi-settings"></i></a>
                                                                </li>
                                                                <li><a href="#"><i
                                                                            class="zmdi zmdi-delete"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mini_action cart">
                                            <a class="cart__btn" href="cart.html">View and edit cart</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Shopping Cart -->
                            </li>
                            <li class="setting__bar__icon"><a class="setting__active" href="#"></a>
                                <div class="searchbar__content setting__block">
                                    <div class="content-inner">
                                        <div class="switcher-currency">
                                            <strong class="label switcher-label">
                                                <span>Currency</span>
                                            </strong>
                                            <div class="switcher-options">
                                                <div class="switcher-currency-trigger">
                                                    <span class="currency-trigger">USD - US Dollar</span>
                                                    <ul class="switcher-dropdown">
                                                        <li>GBP - British Pound Sterling</li>
                                                        <li>EUR - Euro</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="switcher-currency">
                                            <strong class="label switcher-label">
                                                <span>Language</span>
                                            </strong>
                                            <div class="switcher-options">
                                                <div class="switcher-currency-trigger">
                                                    <span class="currency-trigger">English01</span>
                                                    <ul class="switcher-dropdown">
                                                        <li>English02</li>
                                                        <li>English03</li>
                                                        <li>English04</li>
                                                        <li>English05</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="switcher-currency">
                                            <strong class="label switcher-label">
                                                <span>Select Store</span>
                                            </strong>
                                            <div class="switcher-options">
                                                <div class="switcher-currency-trigger">
                                                    <span class="currency-trigger">Fashion Store</span>
                                                    <ul class="switcher-dropdown">
                                                        <li>Furniture</li>
                                                        <li>Shoes</li>
                                                        <li>Speaker Store</li>
                                                        <li>Furniture</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="switcher-currency">
                                            <strong class="label switcher-label">
                                                <span>My Account</span>
                                            </strong>
                                            <div class="switcher-options">
                                                <div class="switcher-currency-trigger">
                                                    <div class="setting__menu">
                                                        <span><a href="#">Compare Product</a></span>
                                                        <span><a href="#">My Account</a></span>
                                                        <span><a href="#">My Wishlist</a></span>
                                                        <span><a href="#">Sign In</a></span>
                                                        <span><a href="#">Create An Account</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Start Mobile Menu -->
                <div class="row d-none">
                    <div class="col-lg-12 d-none">
                        <nav class="mobilemenu__nav">
                            <ul class="meninmenu">
                                <li><a href="index.html">Home</a>
                                    <ul>
                                        <li><a href="index.html">Home Style Default</a></li>
                                        <li><a href="index-2.html">Home Style Two</a></li>
                                        <li><a href="index-3.html">Home Style Three</a></li>
                                        <li><a href="index-box.html">Home Box Style</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Pages</a>
                                    <ul>
                                        <li><a href="about.html">About Page</a></li>
                                        <li><a href="portfolio.html">Portfolio</a>
                                            <ul>
                                                <li><a href="portfolio.html">Portfolio</a></li>
                                                <li><a href="portfolio-three-column.html">Portfolio 3 Column</a></li>
                                                <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="cart.html">Cart Page</a></li>
                                        <li><a href="checkout.html">Checkout Page</a></li>
                                        <li><a href="wishlist.html">Wishlist Page</a></li>
                                        <li><a href="error404.html">404 Page</a></li>
                                        <li><a href="faq.html">Faq Page</a></li>
                                        <li><a href="team.html">Team Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="shop-grid.html">Shop</a>
                                    <ul>
                                        <li><a href="shop-grid.html">Shop Grid</a></li>
                                        <li><a href="shop-list.html">Shop List</a></li>
                                        <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                        <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                        <li><a href="shop-no-sidebar.html">Shop No sidebar</a></li>
                                        <li><a href="single-product.html">Single Product</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog.html">Blog</a>
                                    <ul>
                                        <li><a href="blog.html">Blog Page</a></li>
                                        <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                        <li><a href="blog-no-sidebar.html">Blog No Sidebar</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- End Mobile Menu -->
                <div class="mobile-menu d-block d-lg-none">
                </div>
                <!-- Mobile Menu -->
            </div>
        </header>
        <!-- //Header -->
        <!-- Start Search Popup -->
        <div class="brown--color box-search-content search_active block-bg close__top">
            <form id="search_mini_form" class="minisearch" action="#">
                <div class="field__search">
                    <input type="text" placeholder="Search entire store here...">
                    <div class="action">
                        <a href="#"><i class="zmdi zmdi-search"></i></a>
                    </div>
                </div>
            </form>
            <div class="close__wrap">
                <span>close</span>
            </div>
        </div>
        <!-- End Search Popup -->
        {{ $slot }}
        <!-- Footer Area -->
        <footer id="wn__footer" class="footer__area bg__cat--8 brown--color">
            <div class="footer-static-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer__widget footer__menu">
                                <div class="ft__logo">
                                    <a href="index.html">
                                        <img src="images/logo/3.png" alt="logo">
                                    </a>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered duskam alteration variations of passages</p>
                                </div>
                                <div class="footer__content">
                                    <ul class="social__net social__net--2 d-flex justify-content-center">
                                        <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                                        <li><a href="#"><i class="bi bi-google"></i></a></li>
                                        <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                                        <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                                        <li><a href="#"><i class="bi bi-youtube"></i></a></li>
                                    </ul>
                                    <ul class="mainmenu d-flex justify-content-center">
                                        <li><a href="index.html">Trending</a></li>
                                        <li><a href="index.html">Best Seller</a></li>
                                        <li><a href="index.html">All Product</a></li>
                                        <li><a href="index.html">Wishlist</a></li>
                                        <li><a href="index.html">Blog</a></li>
                                        <li><a href="index.html">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright__wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="copyright">
                                <div class="copy__right__inner text-start">
                                    <p>&copy; 2021, Boighor. Made with <i class="fa fa-heart text-danger"></i> by <a
                                            href="http://hasthemes.com/" target="_blank">HasThemes</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="payment text-end">
                                <img src="images/icons/payment.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- //Footer Area -->
        <!-- QUICKVIEW PRODUCT -->
        <div id="quickview-wrapper">
            <!-- Modal -->
            <div class="modal fade" id="productmodal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal__container" role="document">
                    <div class="modal-content">
                        <div class="modal-header modal__header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-product">
                                <!-- Start product images -->
                                <div class="product-images">
                                    <div class="main-image images">
                                        <img alt="big images" src="images/product/big-img/1.jpg">
                                    </div>
                                </div>
                                <!-- end product images -->
                                <div class="product-info">
                                    <h1>Simple Fabric Bags</h1>
                                    <div class="rating__and__review">
                                        <ul class="rating">
                                            <li><span class="ti-star"></span></li>
                                            <li><span class="ti-star"></span></li>
                                            <li><span class="ti-star"></span></li>
                                            <li><span class="ti-star"></span></li>
                                            <li><span class="ti-star"></span></li>
                                        </ul>
                                        <div class="review">
                                            <a href="#">4 customer reviews</a>
                                        </div>
                                    </div>
                                    <div class="price-box-3">
                                        <div class="s-price-box">
                                            <span class="new-price">$17.20</span>
                                            <span class="old-price">$45.00</span>
                                        </div>
                                    </div>
                                    <div class="quick-desc">
                                        Designed for simplicity and made from high quality materials. Its sleek geometry
                                        and material combinations creates a modern look.
                                    </div>
                                    <div class="select__color">
                                        <h2>Select color</h2>
                                        <ul class="color__list">
                                            <li class="red"><a title="Red" href="#">Red</a></li>
                                            <li class="gold"><a title="Gold" href="#">Gold</a></li>
                                            <li class="orange"><a title="Orange" href="#">Orange</a></li>
                                            <li class="orange"><a title="Orange" href="#">Orange</a></li>
                                        </ul>
                                    </div>
                                    <div class="select__size">
                                        <h2>Select size</h2>
                                        <ul class="color__list">
                                            <li class="l__size"><a title="L" href="#">L</a></li>
                                            <li class="m__size"><a title="M" href="#">M</a></li>
                                            <li class="s__size"><a title="S" href="#">S</a></li>
                                            <li class="xl__size"><a title="XL" href="#">XL</a></li>
                                            <li class="xxl__size"><a title="XXL" href="#">XXL</a></li>
                                        </ul>
                                    </div>
                                    <div class="social-sharing">
                                        <div class="widget widget_socialsharing_widget">
                                            <h3 class="widget-title-modal">Share this product</h3>
                                            <ul class="social__net social__net--2 d-flex justify-content-start">
                                                <li class="facebook"><a href="#" class="rss social-icon"><i
                                                            class="zmdi zmdi-rss"></i></a></li>
                                                <li class="linkedin"><a href="#"
                                                        class="linkedin social-icon"><i
                                                            class="zmdi zmdi-linkedin"></i></a></li>
                                                <li class="pinterest"><a href="#"
                                                        class="pinterest social-icon"><i
                                                            class="zmdi zmdi-pinterest"></i></a></li>
                                                <li class="tumblr"><a href="#" class="tumblr social-icon"><i
                                                            class="zmdi zmdi-tumblr"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="addtocart-btn">
                                        <a href="#">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END QUICKVIEW PRODUCT -->
    </div>
    <!-- //Main wrapper -->

    <!-- JS Files -->
    <script src="js/vendor/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/active.js"></script>

</body>


<!-- Mirrored from htmldemo.net/boighor/boighor/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Apr 2023 18:58:52 GMT -->

</html>
