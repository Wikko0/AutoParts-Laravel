<!doctype html>
<html class="no-js" lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content=" " />
    <!-- Title -->
    <title>AutoParts - Laravel</title>
    <!-- Favicon  -->
    <link rel="shortcut icon" href="{{asset('assets/images/fevicon.png')}}" />

    <!-- *********** CSS Files *********** -->
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}" />
    <!-- Styles CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" />
</head>

<body class="template-index">
<!-- Start Page Loader -->
<div class="page-loading"></div>
<!-- End Page Loader -->

<!--  Start Main Wrapper -->
<div class="main-wrapper cart-drawer-push">
    <!-- Start Promotional Bar Section -->
    <div class="promotional-bar border-0 rounded-0 d-flex align-items-center alert alert-warning fade show" role="alert">
        <div class="container-fluid full-promotional-bar">
            <span>{{ __('app.shop_discount') }} <a href="#">{{ __('app.shop_now') }}</a></span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="ti-close"></i></button>
        </div>
    </div>
    <!-- End Promotional Bar Section -->

    <!-- Start Header Section -->
    <header class="header bg-white">
        <div class="container-fluid full-header">
            <div class="d-flex justify-content-between align-items-center">
                <!-- Start Navigation -->
                <nav class="navigation navbar position-static navbar-expand-lg p-0 w-50">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse"><span class="icon ti-menu"></span></button>
                    <div id="navbar-collapse" class="navbar-collapse collapse dual-nav">
                        <a href="#" class="closeNav-btn d-lg-none clearfix" id="closeNav" title="Close"><span class="menu-close mr-2">Close</span><i class="ti-close" aria-hidden="true"></i></a>
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#">{{__('app.home')}}<span class="arw plush" title="Click to show/hide"></span></a>
                                <!-- Start Megamenu Dropdown -->
                                <div class="megamenu submenu dropdown">
                                    <ul>
                                        <li><a class="item" href="index.html">Home Version 1</a></li>
                                        <li><a class="item" href="index-v2.html">Home Version 2</a></li>
                                        <li><a class="item" href="index-v3.html">Home Version 3</a></li>
                                        <li><a class="item" href="boxed-layout.html">Boxed Version 4</a></li>
                                    </ul>
                                </div>
                                <!-- End Megamenu Dropdown -->
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">{{__('app.feature')}}
                                    <span class="arw plush" title="Click to show/hide"></span>
                                    <span class="lbl hot">Hot</span></a>
                                <!-- Start Megamenu Style 1 -->
                                <div class="megamenu submenu style1">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-lg-6">
                                                <div class="row">
                                                    <div class="megamenu-lvl col-12 col-sm-12 col-lg-4">
                                                        <h3>Categories Pages</h3>
                                                        <ul>
                                                            <li><a class="item" href="collections.html">Collections Version 1</a></li>
                                                            <li><a class="item" href="collections-v2.html">Collections Version 2</a></li>
                                                            <li><a class="item" href="shop-grid-fullwidth.html">Grid Full width</a></li>
                                                            <li><a class="item" href="shop-grid-left-sidebar.html">Grid Left Sidebar</a></li>
                                                            <li><a class="item" href="shop-grid-right-sidebar.html">Grid Right sidebar</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="megamenu-lvl col-12 col-sm-12 col-lg-4">
                                                        <h3>Categories Pages</h3>
                                                        <ul>

                                                            <li><a class="item" href="shop-list-fullwidth.html">List Full width</a></li>
                                                            <li><a class="item" href="shop-list-left-sidebar.html">List Left Sidebar</a></li>
                                                            <li><a class="item" href="shop-list-right-sidebar.html">List Right sidebar</a></li>
                                                            <li><a class="item" href="search-results.html">Search Results</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="megamenu-lvl col-12 col-sm-12 col-lg-4">
                                                        <h3>Product pages</h3>
                                                        <ul>
                                                            <li><a class="item" href="product-details.html">Product Full width</a></li>
                                                            <li><a class="item" href="product-details-classic.html">Product Classic</a></li>
                                                            <li><a class="item" href="product-details-sidebar.html">Product Sidebar</a></li>
                                                            <li><a class="item" href="product-details-group.html">Product Group</a></li>
                                                            <li><a class="item" href="product-details-sticky.html">Product Sticky</a></li>

                                                        </ul>
                                                    </div>
                                                    <div class="megamenu-lvl col-12 col-sm-12 col-lg-4">
                                                        <h3>Shop pages</h3>
                                                        <ul>
                                                            <li><a class="item" href="cart.html">Cart</a></li>
                                                            <li><a class="item" href="checkout.html">Checkout</a></li>
                                                            <li><a class="item" href="wishlist.html">Wishlist</a></li>
                                                            <li><a class="item" href="order-tracking.html">Order Tracking</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="megamenu-lvl col-12 col-sm-12 col-lg-4">
                                                        <h3>Blog Pages</h3>
                                                        <ul>
                                                            <li><a class="item" href="blog.html">Blog Grid </a></li>
                                                            <li><a class="item" href="blog-list-sidebar.html">Blog List</a></li>
                                                            <li><a class="item" href="blog-grid-sidebar.html">Blog Sidebar</a></li>
                                                            <li><a class="item" href="single-post-image.html">Blog Details</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="megamenu-lvl col-12 col-sm-12 col-lg-4">
                                                        <h3>Other Pages</h3>
                                                        <ul>
                                                            <li><a class="item" href="about-us.html">About Us</a></li>
                                                            <li><a class="item" href="faqs.html">FAQ's</a></li>
                                                            <li><a class="item" href="contact-us.html">Contact Us</a></li>
                                                            <li><a class="item" href="coming-soon.html">Coming Soon</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="megamenu-lvl product-col col-12 col-sm-12 col-lg-3">
                                                <h3>Featured Product</h3>
                                                <div class="product">
                                                    <a class="pro-img" href="product-details.html"><img class="img-fluid blur-up lazyload" src="assets/images/megamenu/product-1.jpg" data-src="assets/images/megamenu/product-1.jpg" alt="image" title="Naminos elementum disus tincidunts cosmo de cosmopolis" /></a>
                                                    <div class="pro-details">
                                                        <h4><a href="product-details.html">Naminos elementum disus tincidunts cosmo de cosmopolis</a></h4>
                                                        <p class="star-rating">
                                                            <i class="spr-icon fa fa-star"></i>
                                                            <i class="spr-icon fa fa-star"></i>
                                                            <i class="spr-icon fa fa-star"></i>
                                                            <i class="spr-icon fa fa-star-o"></i>
                                                            <i class="spr-icon fa fa-star-o"></i>
                                                        </p>
                                                        <p><span class="compare">$600.00</span> <span>$550.00</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="megamenu-lvl banner-col col-12 col-sm-12 col-lg-3">
                                                <a href="collections.html"><img class="img-fluid blur-up lazyload" src="assets/images/megamenu/image-1.jpg" data-src="assets/images/megamenu/image-1.jpg" alt="image" title="image" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Megamenu Style 1 -->
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">{{__('app.shop')}}
                                    <span class="arw plush" title="Click to show/hide"></span>
                                </a>
                                <!-- Start Megamenu Style 2 -->
                                <div class="megamenu submenu style2">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-lg-6">
                                                <div class="row">
                                                    <div class="megamenu-lvl col-12 col-sm-12 col-lg-4">
                                                        <h3>Categories Pages</h3>
                                                        <ul>
                                                            <li><a class="item" href="collections.html">Collections Version 1</a></li>
                                                            <li><a class="item" href="collections-v2.html">Collections Version 2</a></li>
                                                            <li><a class="item" href="shop-grid-fullwidth.html">Grid Full width</a></li>
                                                            <li><a class="item" href="shop-grid-left-sidebar.html">Grid Left Sidebar</a></li>
                                                            <li><a class="item" href="shop-grid-right-sidebar.html">Grid Right sidebar</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="megamenu-lvl col-12 col-sm-12 col-lg-4">
                                                        <h3>Categories Pages</h3>
                                                        <ul>

                                                            <li><a class="item" href="shop-list-fullwidth.html">List Full width</a></li>
                                                            <li><a class="item" href="shop-list-left-sidebar.html">List Left Sidebar</a></li>
                                                            <li><a class="item" href="shop-list-right-sidebar.html">List Right sidebar</a></li>
                                                            <li><a class="item" href="search-results.html">Search Results</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="megamenu-lvl col-12 col-sm-12 col-lg-4">
                                                        <h3>Product pages</h3>
                                                        <ul>
                                                            <li><a class="item" href="product-details.html">Product Full width</a></li>
                                                            <li><a class="item" href="product-details-classic.html">Product Classic</a></li>
                                                            <li><a class="item" href="product-details-sidebar.html">Product Sidebar</a></li>
                                                            <li><a class="item" href="product-details-group.html">Product Group</a></li>
                                                            <li><a class="item" href="product-details-sticky.html">Product Sticky</a></li>

                                                        </ul>
                                                    </div>
                                                    <div class="megamenu-lvl col-12 col-sm-12 col-lg-4">
                                                        <h3>Shop pages</h3>
                                                        <ul>
                                                            <li><a class="item" href="cart.html">Cart</a></li>
                                                            <li><a class="item" href="checkout.html">Checkout</a></li>
                                                            <li><a class="item" href="wishlist.html">Wishlist</a></li>
                                                            <li><a class="item" href="order-tracking.html">Order Tracking</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="megamenu-lvl col-12 col-sm-12 col-lg-4">
                                                        <h3>Blog Pages</h3>
                                                        <ul>
                                                            <li><a class="item" href="blog.html">Blog Grid </a></li>
                                                            <li><a class="item" href="blog-list-sidebar.html">Blog List</a></li>
                                                            <li><a class="item" href="blog-grid-sidebar.html">Blog Sidebar</a></li>
                                                            <li><a class="item" href="single-post-image.html">Blog Details</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="megamenu-lvl col-12 col-sm-12 col-lg-4">
                                                        <h3>Other Pages</h3>
                                                        <ul>
                                                            <li><a class="item" href="about-us.html">About Us</a></li>
                                                            <li><a class="item" href="faqs.html">FAQ's</a></li>
                                                            <li><a class="item" href="contact-us.html">Contact Us</a></li>
                                                            <li><a class="item" href="coming-soon.html">Coming Soon</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="megamenu-lvl banner-col col-12 col-sm-12 col-lg-3">
                                                <div class="row">
                                                    <div class="col-sm-12 img1">
                                                        <a href="collections.html"><img class="img-fluid blur-up lazyload" src="assets/images/megamenu/image-2.jpg" data-src="assets/images/megamenu/image-2.jpg" alt="image" title="image" /></a>
                                                    </div>
                                                    <div class="col-sm-12 img2">
                                                        <a href="collections.html"><img class="img-fluid blur-up lazyload" src="assets/images/megamenu/image-2.jpg" data-src="assets/images/megamenu/image-2.jpg" alt="image" title="image" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="megamenu-lvl banner-col col-12 col-sm-12 col-lg-3">
                                                <a href="collections.html"><img class="img-fluid blur-up lazyload" src="assets/images/megamenu/image-1.jpg" data-src="assets/images/megamenu/image-1.jpg" alt="image" title="image" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Megamenu Style 2 -->
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">{{__('app.products')}}
                                    <span class="arw plush" title="Click to show/hide"></span>
                                    <span class="lbl new">New</span>
                                </a>
                                <!-- Start Megamenu Style 3 -->
                                <div class="megamenu submenu style3">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="megamenu-lvl col-12 col-sm-12 col-lg-3">
                                                        <h3>New Arrival</h3>
                                                        <ul>
                                                            <li class="item-img"><a href="collections.html" class="img"><img class="img-fluid blur-up lazyload" src="assets/images/megamenu/image-3.jpg" data-src="assets/images/megamenu/image-3.jpg" alt="image" title="image" /></a></li>
                                                            <li><a class="item" href="collections.html">Collections Pages</a></li>
                                                            <li><a class="item" href="shop-grid-fullwidth.html">Shop pages</a></li>
                                                            <li><a class="item" href="product-details.html">Product pages</a></li>
                                                            <li><a class="item" href="blog.html">Blog Pages</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="megamenu-lvl col-12 col-sm-12 col-lg-3">
                                                        <h3>Tires Manufacturing</h3>
                                                        <ul>
                                                            <li class="item-img"><a href="collections.html" class="img"><img class="img-fluid blur-up lazyload" src="assets/images/megamenu/image-3.jpg" data-src="assets/images/megamenu/image-3.jpg" alt="image" title="image" /></a></li>
                                                            <li><a class="item" href="login.html">Login</a></li>
                                                            <li><a class="item" href="register.html">Register</a></li>
                                                            <li><a class="item" href="wishlist.html">My Wishlist</a></li>
                                                            <li><a class="item" href="cart.html">Shopping Cart</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="megamenu-lvl col-12 col-sm-12 col-lg-3">
                                                        <h3>Electrical system</h3>
                                                        <ul>
                                                            <li class="item-img"><a href="collections.html" class="img"><img class="img-fluid blur-up lazyload" src="assets/images/megamenu/image-3.jpg" data-src="assets/images/megamenu/image-3.jpg" alt="image" title="image" /></a></li>
                                                            <li><a class="item" href="#">Our Store</a></li>
                                                            <li><a class="item" href="about-us.html">Company Info</a></li>
                                                            <li><a class="item" href="#">Favorites</a></li>
                                                            <li><a class="item" href="#">Private Policy</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="megamenu-lvl col-12 col-sm-12 col-lg-3">
                                                        <h3>Other components</h3>
                                                        <ul>
                                                            <li class="item-img"><a href="collections.html" class="img"><img class="img-fluid blur-up lazyload" src="assets/images/megamenu/image-3.jpg" data-src="assets/images/megamenu/image-3.jpg" alt="image" title="image" /></a></li>
                                                            <li><a class="item" href="#">Order Status</a></li>
                                                            <li><a class="item" href="#">Shipping & Returns</a></li>
                                                            <li><a class="item" href="#">Shipping & Deliveries</a></li>
                                                            <li><a class="item" href="terms-and-conditions.html">Terms & Conditions</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Megamenu Style 3 -->
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#">{{__('app.pages')}}<span class="arw plush" title="Click to show/hide"></span></a>
                                <!-- Start Megamenu Dropdown -->
                                <div class="megamenu submenu dropdown">
                                    <ul>
                                        <li><a class="item" href="about-us.html">About Us</a></li>
                                        <li><a class="item" href="faqs.html">FAQ's</a></li>
                                        <li><a class="item" href="contact-us.html">Contact Us</a></li>
                                        <li><a class="item" href="coming-soon.html">Coming Soon</a></li>
                                        <li><a class="item" href="order-tracking.html">Order Tracking</a></li>
                                        <li><a class="item" href="compare.html">Compare</a></li>
                                        <li class="dropmenu">
                                            <a class="item" href="#">My Account <span class="arw plush" title="Click to show/hide"></span></a>
                                            <ul class="droplink submenu1">
                                                <li><a class="item" href="my-account.html">My Account</a></li>
                                                <li><a class="item" href="login.html">Login</a></li>
                                                <li><a class="item" href="register.html">Register</a></li>
                                                <li><a class="item" href="forgot-password.html">Forgot Password</a></li>
                                                <li><a class="item" href="change-password.html">Change Password</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropmenu">
                                            <a class="item" href="#">Wishlist <span class="arw plush" title="Click to show/hide"></span></a>
                                            <ul class="droplink submenu1">
                                                <li><a class="item" href="wishlist-login.html">Wishlist Login</a></li>
                                                <li><a class="item" href="wishlist.html">Wishlist</a></li>
                                                <li><a class="item" href="empty-wishlist.html">Empty Wishlist</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropmenu">
                                            <a class="item" href="#">Cart <span class="arw plush" title="Click to show/hide"></span></a>
                                            <ul class="droplink submenu1">
                                                <li><a class="item" href="cart.html">Cart Version 1</a></li>
                                                <li><a class="item" href="cart-v2.html">Cart Version 2</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropmenu">
                                            <a class="item" href="#">Checkout <span class="arw plush" title="Click to show/hide"></span></a>
                                            <ul class="droplink submenu1">
                                                <li><a class="item" href="checkout.html">Checkout Version 1</a></li>
                                                <li><a class="item" href="checkout-v2.html">Checkout Version 2</a></li>
                                                <li><a class="item" href="checkout-success.html">Checkout Success</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropmenu">
                                            <a class="item" href="#">Empty Pages <span class="arw plush" title="Click to show/hide"></span></a>
                                            <ul class="droplink submenu1">
                                                <li><a class="item" href="empty-cart.html">Empty Cart</a></li>
                                                <li><a class="item" href="empty-category.html">Empty Category</a></li>
                                                <li><a class="item" href="empty-compare.html">Empty Compare</a></li>
                                                <li><a class="item" href="empty-search.html">Empty Search</a></li>
                                                <li><a class="item" href="empty-wishlist.html">Empty Wishlist</a></li>
                                                <li><a class="item" href="404.html">404 Page</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Megamenu Dropdown -->
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#">{{__('app.blog')}}<span class="arw plush" title="Click to show/hide"></span></a>
                                <!-- Start Megamenu Dropdown -->
                                <div class="megamenu submenu dropdown">
                                    <ul>
                                        <li><a class="item" href="blog.html">Blog Grid</a></li>
                                        <li><a class="item" href="blog-list-sidebar.html">Blog List</a></li>
                                        <li><a class="item" href="blog-grid-sidebar.html">Blog Sidebar</a></li>
                                        <li><a class="item" href="blog-masonry.html">Blog Masonry</a></li>
                                        <li class="dropmenu">
                                            <a class="item" href="#">Blog Details <span class="arw plush" title="Click to show/hide"></span></a>
                                            <ul class="droplink submenu1">
                                                <li><a class="item" href="single-post-image.html">Standard Post</a></li>
                                                <li><a class="item" href="single-post-gallery.html">Gallery Post</a></li>
                                                <li><a class="item" href="single-post-video.html">Video Post</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Megamenu Dropdown -->
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- Start Navigation -->
                <!-- Start Logo -->
                <div class="navbar-brand logo mx-auto p-0 text-center">
                    <a href="/" class="logo-img"><img class="img-fluid" src="{{asset('assets/images/logo/logo.png')}}" alt="logo" title="Auto Parts" /></a>
                </div>
                <!-- End Logo -->
                <!-- Start Right Menu -->
                <div class="w-50 right-side">
                    <!-- Start Minicart -->
                    <div class="minicart float-right">
                        <a href="#" class="cart-btn" title="Cart" data-toggle="modal" data-target="#mycartdrawer">
                            <i class="icon ti-shopping-cart"></i>
                            <div class="cart-count">
                                <span id="count">4</span>
                            </div>
                        </a>
                    </div>
                    <!-- End Minicart -->
                    <!-- Start Setting Menu -->
                    <div class="setting-menu float-right">
                        <a href="#" class="setting-toggle" title="My Account">
                            <i class="icon ti-settings"></i>
                        </a>
                        <div class="settinglinks" style="display:none">
                            <!-- Menu Links -->
                            <div class="my-links">
                                <h4>{{__('app.myaccount')}}</h4>
                                <ul class="p-0 m-0">
                                    @guest
                                    <li><a href="/login">{{__('app.login')}}</a></li>
                                    <li><a href="/register">{{__('app.register')}}</a></li>
                                    @endguest
                                    @auth
                                    <li><a href="/account">{{__('app.myaccount')}}</a></li>
                                    @endauth
                                    <li><a href="/wishlist">{{__('app.wishlist')}}</a></li>
                                    <li><a href="/compare">{{__('app.compare')}}</a></li>
                                </ul>
                            </div>
                            <!-- Emd Menu Links -->
                            <!-- Start Currency Picker -->
                            <div class="my-currency">
                                <h4>{{__('app.currency')}}</h4>
                                <ul class="currency-picker">
                                    <li class="item"><a href="#"><i class="fa fa-bgn"></i> BGN</a></li>
                                    <li class="item"><a href="#"><i class="fa fa-usd"></i> USD</a></li>
                                    <li class="item"><a href="#"><i class="fa fa-eur"></i> EUR</a></li>
                                    <li class="item"><a href="#"><i class="fa fa-gbp"></i> GBP</a></li>
                                    <li class="item"><a href="#"><i class="fa fa-inr"></i> INR</a></li>
                                </ul>
                            </div>
                            <!-- End Currency Picker -->
                            <!-- Start Languages -->
                            <div class="my-languages">
                                <h4>Languages</h4>
                                <ul class="languages-picker">
                                    <li class="item bulgaria"><a href="#">{{__('app.bulgaria')}}</a></li>
                                    <li class="item english"><a href="#">{{__('app.english')}}</a></li>
                                    <li class="item french"><a href="#">{{__('app.french')}}</a></li>
                                    <li class="item spanish"><a href="#">{{__('app.spanish')}}</a></li>
                                </ul>
                            </div>
                            <!-- End Languages -->
                        </div>
                    </div>
                    <!-- End Setting Menu -->
                    <!-- Start Search Box -->
                    <div class="search-box float-right">
                        <a href="#" title="Search" class="search-open search-toggle" data-toggle="modal" data-target="#searchform">
                            <i class="icon ti-search"></i>
                        </a>
                    </div>
                    <!-- End Search Show -->
                </div>
                <!-- End Right Menu -->
            </div>
        </div>
    </header>
    <!-- End Header Section -->

    <!-- Start Main Content -->
    @yield('content')
    <!-- End Main Content -->


    <!-- Start Footer Section -->
    <footer class="footer">
        <div class="footer-top clearfix">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-3 logo-wellcome">
                        <div class="ftr-logo">
                            <a href="/"><img class="img-fluid" src="{{asset('assets/images/logo/gray-logo.png')}}" alt="Auto Parts" title="Auto Parts" /></a>
                        </div>
                        <div class="welcome-text">
                            <p class="m-0">{{__('app.footer')}}</p>
                        </div>
                        <div class="social-icons">
                            <ul class="d-flex flex-row align-items-center text-center">
                                <li><a href="#" title="Facebook"><i class="icon ti-facebook"></i></a></li>
                                <li><a href="#" title="Twitter"><i class="icon ti-twitter"></i></a></li>
                                <li><a href="#" title="Instagram"><i class="icon ti-instagram"></i></a></li>
                                <li><a href="#" title="Google Plus"><i class="icon ti-google"></i></a></li>
                                <li><a href="#" title="Youtube"><i class="icon ti-youtube"></i></a></li>
                                <li><a href="#" title="Vimeo"><i class="icon ti-vimeo"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-9 newsletter-menulinks">
                        <div class="row no-gutters footer-links">
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 menu-items">
                                <h4>{{__('app.links')}}</h4>
                                <ul class="linklist">
                                    <li><a href="/">{{__('app.home')}}</a></li>
                                    <li><a href="/blog">{{__('app.blog')}}</a></li>
                                    <li><a href="/about-us">{{__('app.about')}}</a></li>
                                    <li><a href="/faq">{{__('app.faq')}}</a></li>
                                    <li><a href="/contact-us">{{__('app.contact')}}</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 menu-items">
                                <h4>{{__('app.helplinks')}}</h4>
                                <ul class="linklist">
                                    <li><a href="/login">{{__('app.login')}}</a></li>
                                    <li><a href="/wishlist">{{__('app.mywishlist')}}</a></li>
                                    <li><a href="/order-traking">{{__('app.ordertraking')}}</a></li>
                                    <li><a href="#">{{__('app.returns')}}</a></li>
                                    <li><a href="/terms">{{__('app.terms')}}</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 menu-items">
                                <h4>{{__('app.customlinks')}}</h4>
                                <ul class="linklist">
                                    <li><a href="#">{{__('app.partsshop')}}</a></li>
                                    <li><a href="#">{{__('app.delivery')}}</a></li>
                                    <li><a href="#">{{__('app.refunds')}}</a></li>
                                    <li><a href="#">{{__('app.support')}}</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 contact">
                                <h4>{{__('app.contact-information')}}</h4>
                                <ul class="linklist contact-info d-flex flex-column">
                                    <li><i class="icon ti-location-pin"></i><span>No 40 Baria Street 133/2, <br/>NewYork, USA</span></li>
                                    <li><i class="icon fa fa-phone"></i><a href="tel:+011234567890">(+01) 123 456 7890</a></li>
                                    <li><i class="icon ti-email"></i><a href="mailto:info@example.com">info@example.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom clearfix">
            <div class="container">
                <div class="payment-icons pull-right">
                    <i class="fa fa-cc-visa" aria-hidden="true"></i>
                    <i class="fa fa-cc-amex" aria-hidden="true"></i>
                    <i class="fa fa-cc-mastercard" aria-hidden="true"></i>
                    <i class="fa fa-cc-discover" aria-hidden="true"></i>
                    <i class="fa fa-cc-paypal" aria-hidden="true"></i>
                </div>
                <div class="copyright-content pt-md-1 pull-left">
                    <span class="content"> Copyright &copy; {{date('Y')}} Auto Parts. All Rights Reserved.</span>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer Section -->

    <!-- Start Scroll Top -->
    <div id="scrollTop"><i class="ti-arrow-up"></i></div>
    <!-- End Scroll Top -->

    <!-- Start Search Drawer -->
    <div class="search-area modal fade top" id="searchform" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="true">
        <div class="modal-dialog modal-frame modal-top modal-notify modal-info" role="document">
            <div class="container">
                <div class="modal-content search-inline align-content-center">
                    <div class="search-head position-relative">
                        <h3>{{__('app.what-search')}}</h3>
                        <a class="search-close" data-dismiss="modal" aria-label="Close">
                            <i class="ti-close" aria-hidden="true"></i>
                        </a>
                    </div>
                    <form action="#" class="position-relative">
                        <input type="text" class="form-control" placeholder="{{__('app.search-product')}}" required />
                        <button class="search-btn" type="submit"><i class="ti-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Search Drawer -->

    <!-- Start Cart Drawer -->
    <div class="minicart-wrapper">
        <div class="cart-drawer model fade right show cart-drawer-right">
            <div class="minicart-head">
                <h3>{{__('app.shopping-card')}}</h3>
                <a class="close-btn active">
                    <i class="ti-close"></i>
                </a>
            </div>
            <div class="minicart-details">
                <div class="empty-cart">
                    <p>{{__('app.empty-card')}}</p>
                </div>
                <ul class="cart-lists clearfix">
                    <li class="cart-item d-table">
                        <div class="pro-img d-table-cell align-middle">
                            <a href="product-details.html">
                                <img class="img-fluid blur-up lazyload" src="assets/images/products/cart-pro-76x76.jpg" data-src="assets/images/products/cart-pro-76x76.jpg" alt="image" title="Donec pede justo fringilla" />
                            </a>
                        </div>
                        <div class="item-info pl-4 text-left d-table-cell align-top">
                            <a href="product-details.html">Donec pede justo fringilla</a>
                            <p class="size-color">Sliver Black/XXL</p>
                            <p class="price">1 x $699.00</p>
                        </div>
                        <div class="item-right cart-remove d-table-cell align-middle">
                            <a class="edit mr-2" href="#"><i class="ti-pencil-alt"></i></a>
                            <a class="remove" href="#"><i class="ti-close"></i></a>
                        </div>
                    </li>
                    <li class="cart-item d-table">
                        <div class="pro-img d-table-cell align-middle">
                            <a href="product-details.html">
                                <img class="img-fluid blur-up lazyload" src="assets/images/products/cart-pro-76x76.jpg" data-src="assets/images/products/cart-pro-76x76.jpg" alt="image" title="Sociosqu facilisi senectus nisi etiam" />
                            </a>
                        </div>
                        <div class="item-info pl-4 text-left float-left d-table-cell align-top">
                            <a href="#">Sociosqu facilisi senectus nisi</a>
                            <p class="size-color">Red/XL</p>
                            <p class="price">1 x $299.00</p>
                        </div>
                        <div class="item-right cart-remove d-table-cell align-middle">
                            <a class="edit mr-2" href="#"><i class="ti-pencil-alt"></i></a>
                            <a class="remove" href="#"><i class="ti-close"></i></a>
                        </div>
                    </li>
                    <li class="cart-item d-table">
                        <div class="pro-img d-table-cell align-middle">
                            <a href="product-details.html">
                                <img class="img-fluid blur-up lazyload" src="assets/images/products/cart-pro-76x76.jpg" data-src="assets/images/products/cart-pro-76x76.jpg" alt="image" title="Nullam scelerisque suscipit sociis" />
                            </a>
                        </div>
                        <div class="item-info pl-4 text-left d-table-cell align-top">
                            <a href="product-details.html">Nullam scelerisque suscipit</a>
                            <p class="size-color">Silver/L</p>
                            <p class="price">1 x $239.00</p>
                        </div>
                        <div class="item-right cart-remove d-table-cell align-middle">
                            <a class="edit mr-2" href="#"><i class="ti-pencil-alt"></i></a>
                            <a class="remove" href="#"><i class="ti-close"></i></a>
                        </div>
                    </li>
                    <li class="cart-item d-table">
                        <div class="pro-img d-table-cell align-middle">
                            <a href="product-details.html">
                                <img class="img-fluid blur-up lazyload" src="assets/images/products/cart-pro-76x76.jpg" data-src="assets/images/products/cart-pro-76x76.jpg" alt="image" title="Pellentesque habitant morbi" />
                            </a>
                        </div>
                        <div class="item-info pl-4 text-left d-table-cell align-top">
                            <a href="product-details.html">Pellentesque habitant morbi</a>
                            <p class="size-color">Black/M</p>
                            <p class="price">1 x $119.00</p>
                        </div>
                        <div class="item-right cart-remove d-table-cell align-middle">
                            <a class="edit mr-2" href="#"><i class="ti-pencil-alt"></i></a>
                            <a class="remove" href="#"><i class="ti-close"></i></a>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="minicart-bottom-actions">
                <div class="pro-totals d-inline-block w-100">
                    <div class="items mb-1 clearfix">
                        <span class="item subtotal float-left">{{__('app.subtotal')}}:</span>
                        <span class="price-total float-right"><span class="price">$1356.00</span></span>
                    </div>
                    <div class="items mb-1 clearfix">
                        <span class="item shipping float-left">{{__('app.shipping')}}:</span>
                        <span class="price-total float-right"><span class="price">$10.00</span></span>
                    </div>
                    <div class="items mb-1 clearfix">
                        <span class="item tax float-left">{{__('app.tax')}}:</span>
                        <span class="price-total float-right"><span class="price">$0.00</span></span>
                    </div>
                    <div class="items clearfix">
                        <span class="item total float-left">{{__('app.total')}}:</span>
                        <span class="price-total float-right"><span class="price">$1366.00</span></span>
                    </div>
                </div>
                <div class="actions d-inline-block w-100 text-center">
                    <a class="btn btn-primary d-block mb-4 font-sm-14" href="cart.html">{{__('app.view-card')}}</a>
                    <a class="btn btn-secondary d-block font-sm-14" href="checkout.html">{{__('app.proceed-checkout')}}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Cart Drawer -->

    <!-- Start Product Cart Added Popup -->
    <div id="open-addtocart-popup" class="addtocart-popup magnific-popup mfp-hide">
        <div class="addtocart-inner-content text-center">
            <h4>Added to Cart Successfully</h4>
            <p class="pro-img"><img class="img-fluid blur-up lazyload" src="assets/images/products/addtocart-popup.jpg" data-src="assets/images/products/addtocart-popup.jpg" alt="image" title="image" /></p>
            <p class="modal-prod-name mb-1 font-15">Carb Fits Cigarette tiyer</p>
            <p class="mb-1 font-13">Color: Black</p>
            <p class="font-13">Quantity: 1</p>
            <div class="addcart-total">
                There are <b>1</b> items in your cart
                <div class="cart-total mt-2">
                    Total: <b class="price">$113.88</b>
                </div>
            </div>
            <div class="button-action">
                <button class="btn btn-secondary btn-block mb-3 continue-shopping close-popup">Continue Shopping</button>
                <a href="cart.html" class="btn btn-primary btn-block view-cart">View Cart</a>
            </div>
        </div>
    </div>
    <!-- End Product Cart Added Popup -->

    <!-- Start Product Quick View Popup -->
    <div id="open-quickview-popup" class="quickview-popup magnific-popup mfp-hide">
        <div class="quickview-content">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6">
                    <div class="product-single-photo slider thumbnails-single">
                        <div class="single-item"><img class="img-fluid blur-up lazyload" src="assets/images/products/quick-view-1.jpg" data-src="assets/images/products/quick-view-1.jpg" alt="image" title="image" /></div>
                        <div class="single-item"><img class="img-fluid blur-up lazyload" src="assets/images/products/quick-view-1.jpg" data-src="assets/images/products/quick-view-1.jpg" alt="image" title="image" /></div>
                        <div class="single-item"><img class="img-fluid blur-up lazyload" src="assets/images/products/quick-view-1.jpg" data-src="assets/images/products/quick-view-1.jpg" alt="image" title="image" /></div>
                        <div class="single-item"><img class="img-fluid blur-up lazyload" src="assets/images/products/quick-view-1.jpg" data-src="assets/images/products/quick-view-1.jpg" alt="image" title="image" /></div>
                        <div class="single-item"><img class="img-fluid blur-up lazyload" src="assets/images/products/quick-view-1.jpg" data-src="assets/images/products/quick-view-1.jpg" alt="image" title="image" /></div>
                    </div>
                    <div class="product-thumb slider thumbnail-items">
                        <div class="thumb-item"><img class="img-fluid blur-up lazyload" src="assets/images/products/quick-view-1-item.jpg" data-src="assets/images/products/quick-view-1-item.jpg" alt="image" title="image" /></div>
                        <div class="thumb-item"><img class="img-fluid blur-up lazyload" src="assets/images/products/quick-view-1-item.jpg" data-src="assets/images/products/quick-view-1-item.jpg" alt="image" title="image" /></div>
                        <div class="thumb-item"><img class="img-fluid blur-up lazyload" src="assets/images/products/quick-view-1-item.jpg" data-src="assets/images/products/quick-view-1-item.jpg" alt="image" title="image" /></div>
                        <div class="thumb-item"><img class="img-fluid blur-up lazyload" src="assets/images/products/quick-view-1-item.jpg" data-src="assets/images/products/quick-view-1-item.jpg" alt="image" title="image" /></div>
                        <div class="thumb-item"><img class="img-fluid blur-up lazyload" src="assets/images/products/quick-view-1-item.jpg" data-src="assets/images/products/quick-view-1-item.jpg" alt="image" title="image" /></div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6">
                    <div class="profuct-info">
                        <h3 class="product-title">Quick View Popup Product</h3>
                        <div class="pro-revi-arrow clearfix">
                            <div class="product-starrating pull-left">
                                <i class="spr-icon fa fa-star"></i>
                                <i class="spr-icon fa fa-star"></i>
                                <i class="spr-icon fa fa-star"></i>
                                <i class="spr-icon fa fa-star-o"></i>
                                <i class="spr-icon fa fa-star-o"></i>
                                <span>5 Reviews</span>
                            </div>
                            <div class="pro-arrow pull-right">
                                <a class="pro-next" href="product-details.html"><i class="ti-angle-left"></i></a>
                                <a class="pro-prev" href="product-details-classic.html"><i class="ti-angle-right"></i></a>
                            </div>
                        </div>
                        <ul class="row pro-info-list">
                            <li class="col-12 col-md-4 col-sm-4 instock text-sm-left">In Stock</li>
                            <li class="col-12 col-md-4 col-sm-4 vendor text-sm-center"><b>Vendor:</b> Autoparts</li>
                            <li class="col-12 col-md-4 col-sm-4 sku text-sm-right"><b>SKU:</b> 19115-rdxs</li>
                        </ul>
                    </div>
                    <ul class="d-sm-flex flex-sm-row align-items-sm-center product-price-info">
                        <li class="product-price m-0"><span class="compare-price">$499.00</span><span class="sale-price">$399.00</span></li>
                        <li class="save-price">You Save <span class="save-count">$100.00 (10%)</span></li>
                    </ul>
                    <p class="sold-in-last"><span class="align-middle">10 sold in last 20 hours</span></p>
                    <ul class="d-flex flex-column pro-details">
                        <li><i class="fa fa-check mr-2" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetur elit.</li>
                        <li><i class="fa fa-check mr-2" aria-hidden="true"></i>Maecenas vehicula lorem et facilisis eleifend.</li>
                        <li><i class="fa fa-check mr-2" aria-hidden="true"></i>Quisque mattis augue quis risus euismod pharetra.</li>
                        <li><i class="fa fa-check mr-2" aria-hidden="true"></i>Curabitur bibendum massa vitae risus lacinia rutrum.</li>
                    </ul>
                    <div class="product-color">
                        <p>Color: <b>RED</b></p>
                        <ul class="d-flex flex-row align-items-center color-item" data-toggle="buttons">
                            <li class="btn red active" data-toggle="tooltip" data-placement="top" title="red"><span></span></li>
                            <li class="btn navy" data-toggle="tooltip" data-placement="top" title="navy"><span></span></li>
                            <li class="btn light-blue" data-toggle="tooltip" data-placement="top" title="light-blue"><span></span></li>
                            <li class="btn green" data-toggle="tooltip" data-placement="top" title="green"><span></span></li>
                            <li class="btn yellow" data-toggle="tooltip" data-placement="top" title="yellow"><span></span></li>
                        </ul>
                    </div>
                    <div class="product-size">
                        <p>Color: <b>XL</b></p>
                        <ul class="d-flex flex-row align-items-center color-item" data-toggle="buttons">
                            <li class="btn x active" data-toggle="tooltip" data-placement="top" title="x"><span>X</span></li>
                            <li class="btn xl" data-toggle="tooltip" data-placement="top" title="xl"><span>XL</span></li>
                            <li class="btn m" data-toggle="tooltip" data-placement="top" title="m"><span>M</span></li>
                            <li class="btn s" data-toggle="tooltip" data-placement="top" title="s"><span>S</span></li>
                            <li class="btn xxl" data-toggle="tooltip" data-placement="top" title="xxl"><span>XXL</span></li>
                        </ul>
                    </div>
                    <div class="addToBox d-sm-flex flex-sm-row">
                        <div class="product-form-item product-quantity">
                            <div class="qty-box">
                                <button type="button" class="qtyminus button" value=""><i class="fa fa-minus"></i></button>
                                <input type="text" name='quantity' value='1' class="qty-input" />
                                <button type="button" class="qtyplus button" value=""><i class="fa fa-plus"></i></button>
                            </div>
                        </div>
                        <div class="product-form-item product-submit btn-block">
                            <a href="#open-addtocart-popup" class="btn btn-primary btn-block product-btn-cart open-addtocart-popup">Add to Cart</a>
                        </div>
                    </div>
                    <div class="wishlistOuter">
                        <a href="#open-wishlist-popup" class="open-wishlist-popup"><i class="ti-heart mr-2"></i> Add To Wishlist</a>
                    </div>
                    <div class="social-media">
                        <ul class="d-flex flex-row">
                            <li><span>Share:</span></li>
                            <li><a href="#" title="Facebook"><i class="ti-facebook"></i></a></li>
                            <li><a href="#" title="Twitter"><i class="ti-twitter"></i></a></li>
                            <li><a href="#" title="Google Plus"><i class="ti-google"></i></a></li>
                            <li><a href="#" title="Pinterest"><i class="ti-pinterest"></i></a></li>
                            <li><a href="#" title="Email"><i class="ti-email"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product Quick View Popup -->

    <!-- Start Product Wishlist Added Popup -->
    <div id="open-wishlist-popup" class="wishlist-popup magnific-popup mfp-hide">
        <div class="wishlist-inner-content text-center">
            <h4>Successfully added in wishlist</h4>
            <p class="pro-img"><img class="img-fluid blur-up lazyload" src="assets/images/products/addwishlist-popup.jpg" data-src="assets/images/products/addwishlist-popup.jpg" alt="image" title="image" /></p>
            <p class="modal-prod-name mb-4 font-15">Carb Fits Cigarette tiyer</p>
            <div class="button-action">
                <button class="btn btn-secondary btn-block mb-3 continue-shopping close-popup">Continue Shopping</button>
                <a href="wishlist.html" class="btn btn-primary btn-block view-wishlist">View Wishlist</a>
            </div>
        </div>
    </div>
    <!-- End Product Wishlist Added Popup -->

    <!-- Start Cookie Message -->
    <div id="cookie-message" class="alert fade show" role="alert">
        <p>{{__('app.cookie')}}</p>
        <div class="cookie-action">
            <a class="cookie-more-info" href="#"> {{__('app.privacy')}} </a>
            <a class="cookie-accept" href="#" data-dismiss="alert" aria-label="Close">{{__('app.accept')}} <i class="ti-check"></i></a>
        </div>
    </div>
    <!-- End Cookie Message -->


    <!-- Overlay -->
    <div class="overlay"></div>

</div>
<!--  End Main Wrapper -->

<!-- ******** JS Files ******** -->
<!-- Plugin JS -->
<script src="{{asset('assets/js/plugins.js')}}"></script>

<!-- Main JS -->
<script src="{{asset('assets/js/main.js')}}"></script>

</body>
</html>

