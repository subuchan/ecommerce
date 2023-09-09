<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>E-Commerce</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?=base_url('assets/images/icons/apple-touch-icon.png')?>">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/icons/site.html">
    <link rel="mask-icon" href="assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/plugins/owl-carousel/owl.carousel.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/plugins/magnific-popup/magnific-popup.css')?>">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/skins/skin-demo-4.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/demos/demo-4.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/plugins/nouislider/nouislider.css')?>">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="page-wrapper">
        <header class="header">
            <div class="header-top">
                <div class="container-fluid">
                    <div class="header-left">
                        <div class="header-dropdown">
                            <a href="#">Language</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#">Eur</a></li>
                                    <li><a href="#">Usd</a></li>
                                </ul>
                            </div><!-- End .header-menu -->
                        </div><!-- End .header-dropdown -->

                        <div class="header-dropdown">
                            <a href="#">Eng</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">Spanish</a></li>
                                </ul>
                            </div><!-- End .header-menu -->
                        </div><!-- End .header-dropdown -->
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <ul class="top-menu">
                            <li>
                                <a href="#">Links</a>
                                <ul>
                                    <!-- <li><a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a></li> -->
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <!-- <li><a href="#signin-modal" data-toggle="modal"><i class="icon-user"></i>Login</a></li> -->
                                </ul>
                            </li>
                        </ul><!-- End .top-menu -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-top -->

            <div class="header-middle sticky-header">
                <div class="container-fluid">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only"></span>
                            <i class="icon-bars"></i>
                        </button>

                        <a href="<?=base_url('main/index');?>" class="logo">
                            <!-- <img src="" alt="" width="105" height="25"> -->
                            E-Commerce
                        </a>

                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <!-- <li class="megamenu-container active">
                                    <a href="index.html" class="sf-with-ul">Home</a>
                                </li> -->
                                <li>
                                    <a href="#" class="sf-with-ul">Mens</a>
                                    <ul>
                                        <li><a href="<?=base_url('main/men_jeans/');?>">Jeans</a></li>
                                        <li><a href="<?=base_url('main/men_trousers/');?>">Trousers</a></li>
                                        <li><a href="<?=base_url('main/men_trackphant/');?>">Track Phants</a></li>
                                        <li><a href="<?=base_url('main/men_tshirts/');?>">T-Shirts</a></li>
                                        <li><a href="<?=base_url('main/men_shirts/');?>">Shirts</a></li>
                                        <li>
                                            <a href="" class="sf-with-ul">All Top Wear</a>

                                            <ul>
                                                <li><a href="<?=base_url('main/men_kurtas/');?>">Men Kurtas</a></li>
                                                <li><a href="<?=base_url('main/men_jackets/');?>">Ethnics Jackets</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="" class="sf-with-ul">All Men Accessories</a>

                                            <ul>
                                                <li><a href="">Watches</a></li>
                                                <li><a href="">Belts</a></li>
                                                <li><a href="">Sun Glasses</a></li>
                                                <li><a href="">Bags</a></li>
                                                <li><a href="">Wallets</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="" class="sf-with-ul">All Foot Wear</a>

                                            <ul>
                                                <li><a href="">Sport Shoes</a></li>
                                                <li><a href="">Casual Shoes</a></li>
                                                <li><a href="">Formal Shoes</a></li>
                                                <li><a href="">Sandals</a></li>
                                            </ul>
                                        </li>
                                        
                                    </ul>
                                </li>
                                <li>
                                    <a href="" class="sf-with-ul">Women</a>

                                    <div class="megamenu megamenu-md">
                                        <div class="row no-gutters">
                                            <div class="col-md-8">
                                                <div class="menu-col">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="menu-title">All Women Sarees</div><!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="">Silk Sarees</a></li>
                                                                <li><a href="">Cotton Silk Sarees</a></li>
                                                                <li><a href="">Cotton Sarees</a></li>
                                                                <li><a href="">Satin Sarees</a></li>
                                                                <li><a href="">All Sarees<a></li>
                                                            </ul>

                                                            <div class="menu-title">Kurtis</div><!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="">All Kurtis</a></li>
                                                                <li><a href="">All Kurta Set</a></li>
                                                            </ul>
                                                        </div><!-- End .col-md-6 -->

                                                        <div class="col-md-6">
                                                            <div class="menu-title">Bottom Wear</div><!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="">Jeans</a></li>
                                                                <li><a href="">Leggins</a></li>
                                                                <li><a href="">Skirts</a></li>
                                                                <li><a href="">Shorts</a></li>
                                                            </ul>
                                                            <div class="menu-title">Inner Wear</div><!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="">Bra</a></li>
                                                                <li><a href="">Briefs</a></li>
                                                            </ul>
                                                        </div><!-- End .col-md-6 -->
                                                    </div><!-- End .row -->
                                                </div><!-- End .menu-col -->
                                            </div><!-- End .col-md-8 -->

                                         
                                        </div><!-- End .row -->
                                    </div><!-- End .megamenu megamenu-md -->
                                </li>
                                <li>
                                    <a href="" class="sf-with-ul">Kids</a>

                                    <div class="megamenu megamenu-sm">
                                        <div class="row no-gutters">
                                            <div class="col-md-4">
                                                <div class="menu-col">
                                                    <div class="menu-title">Boys & Girls 2+years</div><!-- End .menu-title -->
                                                    <ul>
                                                        <li><a href="">All Dresses</a></li>
                                                    </ul>
                                                </div><!-- End .menu-col -->
                                            </div><!-- End .col-md-6 -->

                                            <div class="col-md-4">
                                                <div class="menu-col">
                                                    <div class="menu-title">Toys & Accessories</div><!-- End .menu-title -->
                                                    <ul>
                                                        <li><a href="">Soft Toys</a></li>
                                                        <li><a href="">Bag & Backpacks</a></li>
                                                        <li><a href="">Stationary</a></li>
                                                        <li><a href="">Watches</a></li>
                                                        <li><a href="">Foot Wears</a></li>
                                                    </ul>
                                                </div><!-- End .menu-col -->
                                            </div><!-- End .col-md-6 -->
                                            <div class="col-md-4">
                                                <div class="menu-col">
                                                    <div class="menu-title">Baby Care</div><!-- End .menu-title -->
                                                    <ul>
                                                        <li><a href="">All Baby Care</a></li>
                                                    </ul>
                                                </div><!-- End .menu-col -->
                                            </div><!-- End .col-md-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .megamenu megamenu-sm -->
                                </li>
                                <li>
                                    <a href="#" class="sf-with-ul">Electronics</a>

                                    <ul>
                                        <li>
                                            <a href="" class="sf-with-ul">Mobile & Accessories</a>

                                            <ul>
                                                <li><a href="">All Mobile Accessories</a></li>
                                                <li><a href="">Smart Watches</a></li>
                                                <li><a href="">Mobile Holders</a></li>
                                                <li><a href="">Mobile Back Covers</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="" class="sf-with-ul">Appliances</a>
                                            <ul>
                                                <li><a href="">All Appliances</a></li>
                                                <li><a href="">Home Appliances</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="" class="sf-with-ul">Home&Kitchen</a>

                                    <ul>
                                        <li>
                                            <a href="#">Home Furnishing</a>
                                            <ul>
                                                <li><a href="">Bedsheets</a></li>
                                                <li><a href="">Dorrmats</a></li>
                                                <li><a href="">Mattress</a></li>
                                                <li><a href="">Cushions</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Home Decor</a>
                                            <ul>
                                                <li><a href="">All Home Decor</a></li>
                                                <li><a href="">Stickers</a></li>
                                                <li><a href="">Clock</a></li>
                                                <li><a href="">ShowPiece</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Kitchen & Dinning</a>
                                            <ul>
                                                <li><a href="">Kitchen Storage</a></li>
                                                <li><a href="">Cookware & Bakeware</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="" class="sf-with-ul">Beauty&Health</a>

                                    <ul>
                                        <li><a href="">MakeUp Kits</a></li>
                                        <li><a href="">Skin Care</a></li>      
                                    </ul>
                                </li>
                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <div class="header-search">
                            <a href="#" class="search-toggle" role="button" title="Search"><i class="icon-search"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper">
                                    <label for="q" class="sr-only">Search</label>
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Search in..." required>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->
                        <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle" >
                              <i class="icon-user"></i><p>Profile</p>
                              <div class="profile_toggle">
                                <li><a href="<?=base_url('main/login');?>">Login</a></li>
                                <li><a href="<?=base_url('main/user_logout');?>">Logout</a></li>
                              </div>
                            </a>
                        </div><!-- End .compare-dropdown -->

                        <div class="dropdown cart-dropdown">
                            <a href="<?=base_url('main/addtocart');?>" class="dropdown-toggle">
                                <i class="icon-shopping-cart"></i>
                                <?php
                                if($this->session->userdata('user')){
                                    
                                
                                
                                if( $count= $this->cart->total_items()){ ?>
                                    <span class="cart-count">
                                    <?php echo $count ?>
                                    </span>
                               <?php
                                }
                               }
                               ?>
                              
                            </a>
                        </div><!-- End .cart-dropdown -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->
        </header><!-- End .header -->