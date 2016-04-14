<?php
	require_once '../controller/start.php';
?>
<!DOCTYPE html>
<html>

<!-- Mirrored from kutethemes.com/html/kuteshop/html/index5.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Dec 2015 03:26:42 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../public/lib/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../public/lib/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="../public/lib/select2/css/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="../public/lib/jquery.bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" type="text/css" href="../public/lib/owl.carousel/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="../public/lib/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="../public/lib/fancyBox/jquery.fancybox.css" />
    <link rel="stylesheet" type="text/css" href="../public/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="../public/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="../public/css/style.css" />
    <link rel="stylesheet" type="text/css" href="../public/css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="../public/css/option5.css" />
    <title>Kute shop Option 5</title>
</head>
<body class="option5">
<!-- HEADER -->
<div id="header" class="header">
    <div class="top-header">
        <div class="container">
            <div class="currency ">
                <div class="dropdown">
                      <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">USD</a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Dollar</a></li>
                        <li><a href="#">Euro</a></li>
                      </ul>
                </div>
            </div>
            <div class="language ">
                <div class="dropdown">
                      <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                      <img alt="email" src="../public/images/fr.jpg" />French
                      
                      </a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#"><img alt="email" src="../public/images/en.jpg" />English</a></li>
                        <li><a href="#"><img alt="email" src="../public/images/fr.jpg" />French</a></li>
                    </ul>
                </div>
            </div>
            <div class="top-bar-social">
                <a href="#"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-pinterest"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
            </div>
            <div class="support-link">
                <a href="#">Abount Us</a>
                <a href="#">Support</a>
            </div>

            <div id="user-info-top" class="user-info pull-right">
                <div class="dropdown">
                	<?php
                		if (!isset($_SESSION['facebook'])):
                	?>
	                    <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><span>My Account</span></a>
	                    <ul class="dropdown-menu mega_dropdown" role="menu">
	                        <li><a href="login.php">Login</a></li>
	                        <li><a href="#">Compare</a></li>
	                        <li><a href="#">Wishlists</a></li>
	                    </ul>
					<?php else: ?>
						<a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><span><?php echo $facebook_user['name']; ?></span></a>
	                    <ul class="dropdown-menu mega_dropdown" role="menu">
	                        <li><a href="../controller/logout.php">Logout</a></li>
	                        <li><a href="#">Compare</a></li>
	                        <li><a href="#">Wishlists</a></li>
					<?php endif; ?>


                </div>
            </div>
        </div>
    </div>
    <!--/.top-header -->
    <!-- MAIN HEADER -->
    <div class="container main-header">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 logo">
                <a href="index.html"><img alt="Kute Shop" src="../public/data/option5/logo.png" /></a>
            </div>
            <div class="col-xs-5 col-sm-12 col-md-6 col-lg-5 header-search-box">
                <form class="form-inline">
                      <div class="form-group form-category">
                        <select class="select-category">
                            <option value="2">All Categories</option>
                            <option value="1">Men</option>
                            <option value="2">Women</option>
                        </select>
                      </div>
                      <div class="form-group input-serach">
                        <input type="text"  placeholder="Keyword here...">
                      </div>
                      <button type="submit" class="pull-right btn-search"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 group-button-header">
                <a title="Compare" href="#" class="btn-compare">compare</a>
                <a title="My wishlist" href="#" class="btn-heart">wishlist</a>
                <div class="btn-cart" id="cart-block">
                    <a title="My cart" href="cart.html">Cart</a>
                    <span class="notify notify-right">2</span>
                    <div class="cart-block">
                        <div class="cart-block-content">
                            <h5 class="cart-title">2 Items in my cart</h5>
                            <div class="cart-block-list">
                                <ul>
                                <li class="product-info">
                                    <div class="p-left">
                                        <a href="#" class="remove_link"></a>
                                        <a href="#">
                                        <img class="img-responsive" src="../public/data/product-100x122.jpg" alt="p10">
                                        </a>
                                    </div>
                                    <div class="p-right">
                                        <p class="p-name">Donec Ac Tempus</p>
                                        <p class="p-rice">61,19 €</p>
                                        <p>Qty: 1</p>
                                    </div>
                                </li>
                                <li class="product-info">
                                    <div class="p-left">
                                        <a href="#" class="remove_link"></a>
                                        <a href="#">
                                        <img class="img-responsive" src="../public/data/product-s5-100x122.jpg" alt="p10">
                                        </a>
                                    </div>
                                    <div class="p-right">
                                        <p class="p-name">Donec Ac Tempus</p>
                                        <p class="p-rice">61,19 €</p>
                                        <p>Qty: 1</p>
                                    </div>
                                </li>
                            </ul>
                            </div>
                            <div class="toal-cart">
                                <span>Total</span>
                                <span class="toal-price pull-right">122.38 €</span>
                            </div>
                            <div class="cart-buttons">
                                <a href="order.html" class="btn-check-out">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MANIN HEADER -->
    <?php
    include "../model/menu.php";
    include "../includes/config.php";
    include "/viewMenu.php";
    ?>
</div>
<!-- end header -->
<!-- Home slideder-->
<div id="home-slider">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 header-top-right">
                <div class="homeslider">
                    <ul id="contenhomeslider">
                      <li><img alt="Funky roots" src="../public/data/option5/slide1.jpg" title="Funky roots" /></li>
                      <li><img alt="Funky roots" src="../public/data/option5/slide1.jpg" title="Funky roots" /></li>
                      <li><img  alt="Funky roots" src="../public/data/option5/slide1.jpg" title="Funky roots" /></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Home slideder-->
<div class="page-top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <h2 class="page-heading">
                    <span class="page-heading-title">LATEST DEALS</span>
                </h2>
                <div class="latest-deals-product">
                    <span class="count-down-time2">
                        <span class="icon-clock"></span>
                        <span>end in</span>
                        <span class="countdown-lastest" data-y="2016" data-m="7" data-d="1" data-h="00" data-i="00" data-s="00"></span>
                    </span>
                    <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "10" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":5}}'>
                        <li>
                            <div class="left-block">
                                <a href="detail3.html"><img class="img-responsive" alt="product" src="../public/data/ld9.jpg" /></a>
                                <div class="quick-view">
                                        <a title="Share on Facebook" class="facebook" href="javascript: void(0);" onclick="window.open('http://www.facebook.com/sharer.php?u=http://compradetodoperu.com/detail3.html','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');"></a>
                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                        <a title="Add to compare" class="compare" href="#"></a>
                                        <a title="Quick view" class="search" href="#"></a>
                                </div>
                                <div class="add-to-cart">
                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                </div>
                                <div class="price-percent-reduction2">
                                    -30% OFF
                                </div>
                            </div>
                            <div class="right-block">
                                <h5 class="product-name"><a href="detail3.html">Luxury Perfume</a></h5>
                                <div class="content_price">
                                    <span class="price product-price">$38,95</span>
                                    <span class="price old-price">$52,00</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="left-block">
                                <a href="detail3.html"><img class="img-responsive" alt="product" src="../public/data/p44.jpg" /></a>
                                <div class="quick-view">
                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                        <a title="Add to compare" class="compare" href="#"></a>
                                        <a title="Quick view" class="search" href="#"></a>
                                </div>
                                <div class="add-to-cart">
                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                </div>
                            </div>
                            <div class="right-block">
                                <h5 class="product-name"><a href="detail3.html">Blue Diamond Ring</a></h5>
                                <div class="content_price">
                                    <span class="price product-price">$38,95</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="left-block">
                                <a href="#detail3.html"><img class="img-responsive" alt="product" src="../public/data/ld8.jpg" /></a>
                                <div class="quick-view">
                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                        <a title="Add to compare" class="compare" href="#"></a>
                                        <a title="Quick view" class="search" href="#"></a>
                                </div>
                                <div class="add-to-cart">
                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                </div>
                            </div>
                            <div class="right-block">
                                <h5 class="product-name"><a href="detail3.html">Superior Bag</a></h5>
                                <div class="content_price">
                                    <span class="price product-price">$38,95</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="left-block">
                                <a href="detail3.html"><img class="img-responsive" alt="product" src="../public/data/ld6.jpg" /></a>
                                <div class="quick-view">
                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                        <a title="Add to compare" class="compare" href="#"></a>
                                        <a title="Quick view" class="search" href="#"></a>
                                </div>
                                <div class="add-to-cart">
                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                </div>
                            </div>
                            <div class="right-block">
                                <h5 class="product-name"><a href="detail3.html">Luxury Lady</a></h5>
                                <div class="content_price">
                                    <span class="price product-price">$38,95</span>
                                    <span class="price old-price">$52,00</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="left-block">
                                <a href="detail3.html"><img class="img-responsive" alt="product" src="../public/data/ld4.jpg" /></a>
                                <div class="quick-view">
                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                        <a title="Add to compare" class="compare" href="#"></a>
                                        <a title="Quick view" class="search" href="#"></a>
                                </div>
                                <div class="add-to-cart">
                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                </div>
                            </div>
                            <div class="right-block">
                                <h5 class="product-name"><a href="detail3.html">Smart Phone</a></h5>
                                <div class="content_price">
                                    <span class="price product-price">$38,95</span>
                                    <span class="price old-price">$52,00</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="left-block">
                                <a href="detail3.html"><img class="img-responsive" alt="product" src="../public/data/p48.jpg" /></a>
                                <div class="quick-view">
                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                        <a title="Add to compare" class="compare" href="#"></a>
                                        <a title="Quick view" class="search" href="#"></a>
                                </div>
                                <div class="add-to-cart">
                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                </div>
                            </div>
                            <div class="right-block">
                                <h5 class="product-name"><a href="detail3.html">Red Dress</a></h5>
                                <div class="content_price">
                                    <span class="price product-price">$38,95</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Baner bottom -->
        <div class="row banner-bottom">
            <div class="col-sm-6 item-left">
                <div class="banner-boder-zoom">
                    <a href="#"><img alt="ads" class="img-responsive" src="../public/data/option5/banner1.jpg" /></a>
                </div>
            </div>
            <div class="col-sm-6 item-right">
                <div class="banner-boder-zoom">
                    <a href="#"><img alt="ads" class="img-responsive" src="../public/data/option5/banner2.jpg" /></a>
                </div>
            </div>
        </div>
        <!-- end banner bottom -->
    </div>
</div>
<!---->
<div class="content-page">
    <div class="container">
        <!-- featured category fashion -->
        <div class="category-featured fashion">
            <nav class="navbar nav-menu show-brand">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-brand"><a href="#"><img alt="fashion" src="../public/data/icon-fashion.png" />fashion</a></div>
                  <span class="toggle-menu"></span>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">           
                  <ul class="nav navbar-nav">
                    <li class="active"><a data-toggle="tab" href="#tab-4">Best salers</a></li>
                    <li><a data-toggle="tab" href="#tab-5">Specials</a></li>
                    <li><a data-toggle="tab" href="#tab-4">New Arrivals</a></li>
                    <li><a data-toggle="tab" href="#tab-5">Most Reviews</a></li>
                    <li><a data-toggle="tab" href="#tab-4">On Sales</a></li>
                    <li><a data-toggle="tab" href="#tab-5">Trending</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
              <div id="elevator-1" class="floor-elevator">
                    <a href="#" class="btn-elevator up disabled fa fa-angle-up"></a>
                    <a href="#elevator-2" class="btn-elevator down fa fa-angle-down"></a>
              </div>
            </nav>
           <div class="product-featured clearfix">
                <div class="row">
                    <div class="col-sm-2 sub-category-wapper">
                        <ul class="sub-category-list">
                            <li><a href="#">Summer Dresses</a></li>
                            <li><a href="#">Casual Dresses</a></li>
                            <li><a href="#">Blouses</a></li>
                            <li><a href="#">Skirts</a></li>
                            <li><a href="#">Jumpsuits</a></li>
                            <li><a href="#">T-Shirts</a></li>
                            <li><a href="#">Jackets</a></li>
                            <li><a href="#">Bikinis</a></li>
                            <li><a href="#">Sunglasses</a></li>
                            <li><a href="#">Scarves</a></li>
                            <li><a href="#">Hair Accessories</a></li>

                        </ul>
                    </div>
                    <div class="col-sm-10 col-right-tab">
                        <div class="product-featured-tab-content">
                            <div class="tab-container">
                                <div class="tab-panel active" id="tab-4">
                                   <div class="box-left">
                                       <div class="banner-img">
                                            <a href="#"><img src="../public/data/option5/banner3.jpg" alt="Banner Product"></a>
                                        </div>
                                   </div>
                                   <div class="box-right">
                                       <ul class="product-list row">
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="detail3.html">Sexy Red Dress</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$138,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="detail3.html"><img class="img-responsive" alt="product" src="../public/data/p48.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="detail3.html">Mesh Dress Taupe</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$99,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="detail3.html"><img class="img-responsive" alt="product" src="../public/data/p49.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="detail3.html">Sexy Summer Dress</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$89,99</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="detail3.html"><img class="img-responsive" alt="product" src="../public/data/p50.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="detail3.html">Comfor & Pretty Dress</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$238,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="detail3.html"><img class="img-responsive" alt="product" src="../public/data/p51.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="detail3.html">Sexy Perfect Light</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$399,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="detail3.html"><img class="img-responsive" alt="product" src="../public/data/p52.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="detail3.html">New Style & Fresh</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$138,95</span>
                                                            <span class="price old-price">$152,00</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="detail3.html"><img class="img-responsive" alt="product" src="../public/data/p53.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                       </ul>
                                   </div>
                                </div>
                                <div class="tab-panel" id="tab-5">
                                    <div class="box-left">
                                       <div class="banner-img">
                                            <a href="#"><img src="../public/data/option5/banner3.jpg" alt="Banner Product"></a>
                                        </div>
                                   </div>
                                   <div class="box-right">
                                       <ul class="product-list row">
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="detail3.html">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="detail3.html">
                                                        <img class="img-responsive" alt="product" src="../public/data/p53.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="detail3.html">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="detail3.html#">
                                                        <img class="img-responsive" alt="product" src="../public/data/p52.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="detail3.html">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="detail3.html">
                                                        <img class="img-responsive" alt="product" src="../public/data/p51.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="detail3.html">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="detail3.html">
                                                        <img class="img-responsive" alt="product" src="../public/data/p50.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="detail3.html">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="detail3.html">
                                                        <img class="img-responsive" alt="product" src="../public/data/p49.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="detail3.html">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="detail3.html">
                                                        <img class="img-responsive" alt="product" src="../public/data/p48.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                       </ul>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
        <!-- end featured category fashion -->
        <!-- featured category sports -->
        <div class="category-featured sports">
            <nav class="navbar nav-menu show-brand">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-brand"><a href="#"><img alt="fashion" src="../public/data/icon-sports.png" />SPORTS</a></div>
                  <span class="toggle-menu"></span>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">           
                  <ul class="nav navbar-nav">
                    <li class="active"><a data-toggle="tab" href="#tab-6">Best salers</a></li>
                    <li><a data-toggle="tab" href="#tab-7">Specials</a></li>
                    <li><a data-toggle="tab" href="#tab-6">New Arrivals</a></li>
                    <li><a data-toggle="tab" href="#tab-7">Most Reviews</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
              <div id="elevator-2" class="floor-elevator">
                    <a href="#elevator-1" class="btn-elevator up fa fa-angle-up"></a>
                    <a href="#elevator-3" class="btn-elevator down fa fa-angle-down"></a>
              </div>
            </nav>
           <div class="product-featured clearfix">
                <div class="row">
                    <div class="col-sm-2 sub-category-wapper">
                        <div class="owl-carousel-vertical" data-items="1" data-nav="true" data-dots="false" data-loop="true">
                            <div class="item">
                                <ul class="sub-category-list">
                                    <li><a href="#">Tent</a></li>
                                    <li><a href="#">Hiking Shoes</a></li>
                                    <li><a href="#">Cycling Jerseys</a></li>
                                    <li><a href="#">Boxing</a></li>
                                    <li><a href="#">Fitness</a></li>
                                    <li><a href="#">Basketball Shoes</a></li>
                                    <li><a href="#">Carp Fishing</a></li>
                                    <li><a href="#">Bike Light</a></li>
                                    <li><a href="#">Sunglasses</a></li>
                                    <li><a href="#">Fishing Tackle Bags</a></li>
                                    <li><a href="#">Camping Stoves</a></li>
                                    <li><a href="#">Cycling Jerseys</a></li>
                                    <li><a href="#">Cycling Jerseys</a></li>
                                    <li><a href="#">Basketball Shoes</a></li>
                                </ul>
                            </div>
                            <div class="item">
                                <ul class="sub-category-list">
                                    <li><a href="#" >Shoes</a></li>
                                    <li><a href="#" >Casual Shoes</a></li>
                                    <li><a href="#" >Sports Shoes</a></li>
                                    <li><a href="#" >Adidas Shoes</a></li>
                                    <li><a href="#" >Gas Shoes</a></li>
                                    <li><a href="#" >Puma Shoes</a></li>
                                    <li><a href="#" >Reebok Shoes</a></li>
                                    <li><a href="#" >Woodland Shoes</a></li>
                                    <li><a href="#" >Red tape Shoes</a></li>
                                    <li><a href="#" >Nike Shoes</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10 col-right-tab">
                        <div class="product-featured-tab-content">
                            <div class="tab-container">
                                <div class="tab-panel active" id="tab-6">
                                    <div class="box-left">
                                        <div class="banner-img">
                                            <a href="#"><img src="../public/data/option5/banner4.jpg" alt="Banner Product"></a>
                                        </div>
                                    </div>
                                    <div class="box-right">
                                        <ul class="product-list row">
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Sexy Sport Shoes</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/p55.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Tennis Blue Hat</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/p56.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                                
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Blue T-Shirt</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/p57.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="detail3.html">Tennis Racquet</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="detail3.html">
                                                        <img class="img-responsive" alt="product" src="../public/data/p58.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="detail3.html">Fashion & Sport</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="detail3.html">
                                                        <img class="img-responsive" alt="product" src="../public/data/p59.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                    
                                                </li>
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="detail3.html">Versatile Package</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="detail3.html">
                                                        <img class="img-responsive" alt="product" src="../public/data/p60.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-panel" id="tab-7">
                                    <div class="box-left">
                                        <div class="banner-img">
                                            <a href="#"><img src="../public/data/option5/banner4.jpg" alt="Banner Product"></a>
                                        </div>
                                    </div>
                                    <div class="box-right">
                                        <ul class="product-list row">
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/p60.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/p59.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                                
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/p58.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="detail3.html">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="detail3.html">
                                                        <img class="img-responsive" alt="product" src="../public/data/p57.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="detail3.html">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="detail3.html">
                                                        <img class="img-responsive" alt="product" src="../public/data/p56.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                    
                                                </li>
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="detail3.html">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="detail3.html">
                                                        <img class="img-responsive" alt="product" src="../public/data/p55.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
        <!-- end featured category sports-->
        
        <!-- featured category electronic -->
        <div class="category-featured electronic">
            <nav class="navbar nav-menu show-brand">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-brand"><a href="#"><img alt="fashion" src="../public/data/icon-electronic.png" />ELECTRONICS</a></div>
                  <span class="toggle-menu"></span>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">           
                  <ul class="nav navbar-nav">
                    <li class="active"><a data-toggle="tab" href="#tab-8">Best salers</a></li>
                    <li><a data-toggle="tab" href="#tab-9">Specials</a></li>
                    <li><a data-toggle="tab" href="#tab-8">New Arrivals</a></li>
                    <li><a data-toggle="tab" href="#tab-9">Most Reviews</a></li>
                    <li><a data-toggle="tab" href="#tab-8">On Sales</a></li>
                    <li><a data-toggle="tab" href="#tab-9">Trending</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
              <div id="elevator-3" class="floor-elevator">
                    <a href="#elevator-2" class="btn-elevator up fa fa-angle-up"></a>
                    <a href="#elevator-4" class="btn-elevator down fa fa-angle-down"></a>
              </div>
            </nav>
           <div class="product-featured clearfix">
                <div class="row">
                    <div class="col-sm-2 sub-category-wapper">
                        <ul class="sub-category-list">
                            <li><a href="#">SOOCOO S60</a></li>
                            <li><a href="#">Xiaomi Sports Camera</a></li>
                            <li><a href="#">Monopod</a></li>
                            <li><a href="#">MP3 Player</a></li>
                            <li><a href="#">Speaker</a></li>
                            <li><a href="#">Micro SD Card</a></li>
                            <li><a href="#">Smart Watches</a></li>
                            <li><a href="#">Smart Wristbands</a></li>
                            <li><a href="#">TV</a></li>
                            <li><a href="#">Projector</a></li>
                            <li><a href="#">Gaming</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-10 col-right-tab">
                        <div class="product-featured-tab-content">
                            <div class="tab-container">
                                <div class="tab-panel active" id="tab-8">
                                    <div class="box-left">
                                        <div class="banner-img">
                                            <a href="#"><img src="../public/data/option5/banner5.jpg" alt="Banner Product"></a>
                                        </div>
                                    </div>
                                    <div class="box-right">
                                        <ul class="product-list row">
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Cookoo Cooker</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/p61.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Green Cooker</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/p62.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Modern Liquidizer</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/p63.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Serial Nice Cookers</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/p64.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Tilor Washing Machine</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/p65.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Nano Washing Machine</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/p66.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-panel" id="tab-9">
                                    <div class="box-left">
                                        <div class="banner-img">
                                            <a href="#"><img src="../public/data/option5/banner5.jpg" alt="Banner Product"></a>
                                        </div>
                                    </div>
                                    <div class="box-right">
                                        <ul class="product-list row">
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/p66.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/p65.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/p64.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/p63.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/p62.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/p61.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
        <!-- end featured category electronic-->
        <!-- featured category Digital -->
        <div class="category-featured digital">
            <nav class="navbar nav-menu show-brand">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-brand"><a href="#"><img alt="fashion" src="../public/data/icon-digital.png" />DIGITAL</a></div>
                  <span class="toggle-menu"></span>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">           
                  <ul class="nav navbar-nav">
                    <li class="active"><a data-toggle="tab" href="#tab-10">Best salers</a></li>
                    <li><a data-toggle="tab" href="#tab-11">Specials</a></li>
                    <li><a data-toggle="tab" href="#tab-10">New Arrivals</a></li>
                    <li><a data-toggle="tab" href="#tab-11">Most Reviews</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
              <div id="elevator-4" class="floor-elevator">
                    <a href="#elevator-3" class="btn-elevator up fa fa-angle-up"></a>
                    <a href="#elevator-5" class="btn-elevator down fa fa-angle-down"></a>
              </div>
            </nav>
           <div class="product-featured clearfix">
                <div class="row">
                    <div class="col-sm-2 sub-category-wapper">
                        <ul class="sub-category-list">
                            <li><a href="#">Tablet selfie</a></li>
                            <li><a href="#">Laptop Batteries</a></li>
                            <li><a href="#">OTG flash drives</a></li>
                            <li><a href="#">Mouse</a></li>
                            <li><a href="#">Keyboard</a></li>
                            <li><a href="#">SSD</a></li>
                            <li><a href="#">Tenda router</a></li>
                            <li><a href="#">3D printer</a></li>
                            <li><a href="#">Laser Pens</a></li>
                            <li><a href="#">Printer Supplies</a></li>
                            <li><a href="#">Gaming</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-10 col-right-tab">
                        <div class="product-featured-tab-content">
                            <div class="tab-container">
                                <div class="tab-panel active" id="tab-10">
                                    <div class="box-left">
                                        <div class="banner-img">
                                            <a href="#"><img src="../public/data/option5/banner6.jpg" alt="Banner Product"></a>
                                        </div>
                                    </div>
                                    <div class="box-right">
                                        <ul class="product-list row">
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Ipad</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/option5/p5.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Sonic Camera</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/option5/p70.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Blue Nano Projector</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/option5/p71.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Smartphone Battery</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/option5/p10.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="../public/data/option5/p6.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">SamSing Gallaxy S5</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/option5/p11.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-panel" id="tab-11">
                                    <div class="box-left">
                                        <div class="banner-img">
                                            <a href="#"><img src="../public/data/option5/banner6.jpg" alt="Banner Product"></a>
                                        </div>
                                    </div>
                                    <div class="box-right">
                                        <ul class="product-list row">
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/p73.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/p72.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/p71.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/p70.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/p69.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/p68.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
        <!-- end featured category Digital-->
        <!-- featured category furniture -->
       <div class="category-featured furniture">
            <nav class="navbar nav-menu show-brand">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-brand"><a href="#"><img alt="fashion" src="../public/data/icon-furniture.png" />furniture</a></div>
                  <span class="toggle-menu"></span>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">           
                  <ul class="nav navbar-nav">
                    <li class="active"><a data-toggle="tab" href="#tab-12">Best salers</a></li>
                    <li><a data-toggle="tab" href="#tab-13">Specials</a></li>
                    <li><a data-toggle="tab" href="#tab-12">New Arrivals</a></li>
                    <li><a data-toggle="tab" href="#tab-13">Most Reviews</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
              <div id="elevator-5" class="floor-elevator">
                    <a href="#elevator-4" class="btn-elevator up fa fa-angle-up"></a>
                    <a href="#elevator-6" class="btn-elevator down fa fa-angle-down"></a>
              </div>
            </nav>
           <div class="product-featured clearfix">
                <div class="row">
                    <div class="col-sm-2 sub-category-wapper">
                        <ul class="sub-category-list">
                            <li><a href="#">Cross Stitch</a></li>
                            <li><a href="#">Diamond Painting</a></li>
                            <li><a href="#">Cake Tools</a></li>
                            <li><a href="#">Cooking Tools</a></li>
                            <li><a href="#">Curtain</a></li>
                            <li><a href="#">Bedding</a></li>
                            <li><a href="#">Wall Décor</a></li>
                            <li><a href="#">Decorative Flowers</a></li>
                            <li><a href="#">Home Storage</a></li>
                            <li><a href="#">Pest Control</a></li>
                            <li><a href="#">Pet Products</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-10 col-right-tab">
                        <div class="product-featured-tab-content">
                            <div class="tab-container">
                                <div class="tab-panel active" id="tab-12">
                                    <div class="box-left">
                                        <div class="banner-img">
                                            <a href="#"><img src="../public/data/option5/banner7.jpg" alt="Banner Product"></a>
                                        </div>
                                    </div>
                                    <div class="box-right">
                                        <ul class="product-list row">
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Interesting Chair</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/option5/p8.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Relaxed Chair</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/option5/p9.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Innovative Red Chair</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/option5/p7.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">White Stack Chair</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/option5/p14.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Kute Innovative Chair</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/option5/p12.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Pretty Green & Inox</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/option5/p13.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-panel" id="tab-13">
                                    <div class="box-left">
                                        <div class="banner-img">
                                            <a href="#"><img src="../public/data/banner-product3.jpg" alt="Banner Product"></a>
                                        </div>
                                    </div>
                                    <div class="box-right">
                                        <ul class="product-list row">
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/p78.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/p77.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/p78.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/p76.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/p75.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/p74.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
       </div>
        <!-- end featured category furniture-->
        <!-- featured category jewelry -->
        <div class="category-featured jewelry">
            <nav class="navbar nav-menu show-brand">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-brand"><a href="#"><img alt="fashion" src="../public/data/icon-jewelry.png" />jewelry</a></div>
                  <span class="toggle-menu"></span>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">           
                  <ul class="nav navbar-nav">
                    <li class="active"><a data-toggle="tab" href="#tab-14">Best salers</a></li>
                    <li><a data-toggle="tab" href="#tab-15">Specials</a></li>
                    <li><a data-toggle="tab" href="#tab-14">New Arrivals</a></li>
                    <li><a data-toggle="tab" href="#tab-15">Most Reviews</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
              <div id="elevator-6" class="floor-elevator">
                    <a href="#elevator-5" class="btn-elevator up fa fa-angle-up"></a>
                    <a href="#" class="btn-elevator disabled down fa fa-angle-down"></a>
              </div>
            </nav>
           <div class="product-featured clearfix">
                <div class="row">
                    <div class="col-sm-2 sub-category-wapper">
                        <ul class="sub-category-list">
                            <li><a href="#">Multi-Layer Necklaces</a></li>
                            <li><a href="#">925 Silver</a></li>
                            <li><a href="#">Pearl Jewelry</a></li>
                            <li><a href="#">Friendship Bracelets</a></li>
                            <li><a href="#">Brinco</a></li>
                            <li><a href="#">Body Chains</a></li>
                            <li><a href="#">Carp Fishing</a></li>
                            <li><a href="#">DIY Beads</a></li>
                            <li><a href="#">Digital Watches</a></li>
                            <li><a href="#">Dress Watches</a></li>
                            <li><a href="#">Men's Watches</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-10 col-right-tab">
                        <div class="product-featured-tab-content">
                            <div class="tab-container">
                                <div class="tab-panel active" id="tab-12">
                                    <div class="box-left">
                                        <div class="banner-img">
                                            <a href="#"><img src="../public/data/option5/banner8.jpg" alt="Banner Product"></a>
                                        </div>
                                    </div>
                                    <div class="box-right">
                                        <ul class="product-list row">
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Interesting Chair</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/p81.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Relaxed Chair</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/p82.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Innovative Red Chair</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/p83.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">White Stack Chair</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/p84.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Kute Innovative Chair</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/p85.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Pretty Green & Inox</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/p86.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-panel" id="tab-13">
                                    <div class="box-left">
                                        <div class="banner-img">
                                            <a href="#"><img src="../public/data/option5/banner8.jpg" alt="Banner Product"></a>
                                        </div>
                                    </div>
                                    <div class="box-right">
                                        <ul class="product-list row">
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/p86.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/p85.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/p84.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/p83.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/p82.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="detail3.html">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="detail3.html">
                                                    <img class="img-responsive" alt="product" src="../public/data/p81.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
        <!-- end featured category jewelry-->
    </div>
</div>

<div id="content-wrap">
    <div class="container">
        <!-- service 2 -->
        <div class="services2">
            <ul>
                <li class="col-xs-12 col-sm-6 col-md-4 services2-item">
                    <div class="service-wapper">
                        <div class="row">
                            <div class="col-sm-6 image">
                                <div class="icon">
                                    <img src="../public/data/icon-s1.png" alt="service">
                                </div>
                                <h3 class="title"><a href="#">Great Value</a></h3>
                            </div>
                            <div class="col-sm-6 text">
                                We offer competitive prices on our 100 million plus product range.
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-xs-12 col-sm-6 col-md-4 services2-item">
                    <div class="service-wapper">
                        <div class="row">
                            <div class="col-sm-6 image">
                                <div class="icon">
                                    <img src="../public/data/icon-s2.png" alt="service">
                                </div>
                                <h3 class="title"><a href="#">Worldwide Delivery</a></h3>
                            </div>
                            <div class="col-sm-6 text">
                                With sites in 5 languages, we ship to over 200 countries & regions.
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-xs-12 col-sm-6 col-md-4 services2-item">
                    <div class="service-wapper">
                        <div class="row">
                            <div class="col-sm-6 image">
                                <div class="icon">
                                    <img src="../public/data/icon-s3.png" alt="service">
                                </div>
                                <h3 class="title"><a href="#">Safe Payment</a></h3>
                            </div>
                            <div class="col-sm-6 text">
                                Pay with the world’s most popular and secure payment methods.
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-xs-12 col-sm-6 col-md-4 services2-item">
                    <div class="service-wapper">
                        <div class="row">
                            <div class="col-sm-6 image">
                                <div class="icon">
                                    <img src="../public/data/icon-s4.png" alt="service">
                                </div>
                                <h3 class="title"><a href="#">Shop with Confidence</a></h3>
                            </div>
                            <div class="col-sm-6 text">
                                Our Buyer Protection covers your purchase from click to delivery.
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-xs-12 col-sm-6 col-md-4 services2-item">
                    <div class="service-wapper">
                        <div class="row">
                            <div class="col-sm-6 image">
                                <div class="icon">
                                    <img src="../public/data/icon-s5.png" alt="service">
                                </div>
                                <h3 class="title"><a href="#">24/7 Help Center</a></h3>
                            </div>
                            <div class="col-sm-6 text">
                                Round-the-clock assistance for a smooth shopping experience.
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-xs-12 col-sm-6 col-md-4 services2-item">
                    <div class="service-wapper">
                        <div class="row">
                            <div class="col-sm-6 image">
                                <div class="icon">
                                    <img src="../public/data/icon-s6.png" alt="service">
                                </div>
                                <h3 class="title"><a href="#">Shop On-The-Go</a></h3>
                            </div>
                            <div class="col-sm-6 text">
                                Download the app and get the world of KuteShop at your fingertips.
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
        <!-- ./service 2 -->
    </div> <!-- /.container -->
</div>

<!-- Footer -->
<footer id="footer">
     <div class="container">
            <!-- introduce-box -->
            <div id="introduce-box" class="row">
                <div class="col-md-3">
                    <div id="address-box">
                        <a href="#"><img src="../public/data/option5/logo.png" alt="logo" /></a>
                        <div id="address-list">
                            <div class="tit-name">Address:</div>
                            <div class="tit-contain">Example Street 68, Mahattan, New York, USA.</div>
                            <div class="tit-name">Phone:</div>
                            <div class="tit-contain">+00 123 456 789</div>
                            <div class="tit-name">Email:</div>
                            <div class="tit-contain">support@business.com</div>
                        </div>
                    </div> 
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="introduce-title">Company</div>
                            <ul id="introduce-company"  class="introduce-list">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Affiliate Program</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <div class="introduce-title">My Account</div>
                            <ul id = "introduce-Account" class="introduce-list">
                                <li><a href="#">My Order</a></li>
                                <li><a href="#">My Wishlist</a></li>
                                <li><a href="#">My Credit Slip</a></li>
                                <li><a href="#">My Addresses</a></li>
                                <li><a href="#">My Personal In</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <div class="introduce-title">Support</div>
                            <ul id = "introduce-support"  class="introduce-list">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Affiliate Program</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div id="contact-box">
                        <div class="introduce-title">Newsletter</div>
                        <div class="input-group" id="mail-box">
                          <input type="text" placeholder="Your Email Address"/>
                          <span class="input-group-btn">
                            <button class="btn btn-default" type="button">OK</button>
                          </span>
                        </div><!-- /input-group -->
                        <div class="introduce-title">Let's Socialize</div>
                        <div class="social-link">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            <a href="#"><i class="fa fa-vk"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                    
                </div>
            </div><!-- /#introduce-box -->
        
            <!-- #trademark-box -->
            <div id="trademark-box" class="row">
                <div class="col-sm-12">
                    <ul id="trademark-list">
                        <li id="payment-methods">Accepted Payment Methods</li>
                        <li>
                            <a href="#"><img src="../public/data/trademark-ups.jpg"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="../public/data/trademark-qiwi.jpg"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="../public/data/trademark-wu.jpg"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="../public/data/trademark-cn.jpg"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="../public/data/trademark-visa.jpg"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="../public/data/trademark-mc.jpg"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="../public/data/trademark-ems.jpg"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="../public/data/trademark-dhl.jpg"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="../public/data/trademark-fe.jpg"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="../public/data/trademark-wm.jpg"  alt="ups"/></a>
                        </li>
                    </ul> 
                </div>
            </div> <!-- /#trademark-box -->
            
            <!-- #trademark-text-box -->
            <div id="trademark-text-box" class="row">
                <div class="col-sm-12">
                    <ul id="trademark-search-list" class="trademark-list">
                        <li class="trademark-text-tit">HOT SEARCHED KEYWORDS:</li>
                        <li><a href="#" >Xiaomo Mi3</a></li>
                        <li><a href="#" >Digifli Pro XT 712 Tablet</a></li>
                        <li><a href="#" >Mi 3 Phones</a></li>
                        <li><a href="#" >Iphoneo 6 Plus</a></li>
                        <li><a href="#" >Women's Messenger Bags</a></li>
                        <li><a href="#" >Wallets</a></li>
                        <li><a href="#" >Women's Clutches</a></li>
                        <li><a href="#" >Backpacks Totes</a></li>
                    </ul>
                </div>
                <div class="col-sm-12">
                    <ul id="trademark-tv-list" class="trademark-list">
                        <li class="trademark-text-tit">TVS:</li>
                        <li><a href="#" >Sonyo TV</a></li>
                        <li><a href="#" >Samsing TV</a></li>
                        <li><a href="#" >LGG TV</a></li>
                        <li><a href="#" >Onidai TV</a></li>
                        <li><a href="#" >Toshibao TV</a></li>
                        <li><a href="#" >Philipsi TV</a></li>
                        <li><a href="#" >Micromax TV</a></li>
                        <li><a href="#" >LED TV</a></li>
                        <li><a href="#" >LCD TV</a></li>
                        <li><a href="#" >Plasma TV</a></li>
                        <li><a href="#" >3D TV</a></li>
                        <li><a href="#" >Smart TV</a></li>
                    </ul>
                </div>
                <div class="col-sm-12">
                    <ul id="trademark-mobile-list" class="trademark-list">
                        <li class="trademark-text-tit">MOBILES:</li>  
                        <li><a href="#" >Moto E</a></li>
                        <li><a href="#" >Samsing Mobile</a></li>
                        <li><a href="#" >Micromaxi Mobile</a></li>
                        <li><a href="#" >Nokian Mobile</a></li>
                        <li><a href="#" >HTCK Mobile</a></li>
                        <li><a href="#" >Sonyo Mobile</a></li>
                        <li><a href="#" >Appleo Mobile</a></li>
                        <li><a href="#" >LGG Mobile</a></li>
                        <li><a href="#" >Karbonno Mobile</a></li>
                    </ul>
                </div>
                <div class="col-sm-12">
                    <ul id="trademark-laptop-list" class="trademark-list">
                        <li class="trademark-text-tit">LAPTOPS::</li> 
                        <li><a href="#" >Appleo Laptop</a></li>
                        <li><a href="#" >Acero Laptop</a></li>
                        <li><a href="#" >Samsing Laptop</a></li>
                        <li><a href="#" >Lenov Laptop</a></li>
                        <li><a href="#" >Sonyo Laptop</a></li>
                        <li><a href="#" >Dello Laptop</a></li>
                        <li><a href="#" >Asuso Laptop</a></li>
                        <li><a href="#" >Toshibao Laptop</a></li>
                        <li><a href="#" >LGG Laptop</a></li>
                        <li><a href="#" >HPO Laptop</a></li>
                        <li><a href="#" >Notebook</a></li>
                    </ul>
                </div>
                <div class="col-sm-12">
                    <ul id="trademark-watches-list" class="trademark-list">
                        <li class="trademark-text-tit">WATCHES:</li>  
                        <li><a href="#" >FCUKJ Watches</a></li>
                        <li><a href="#" >Titan Watches</a></li>
                        <li><a href="#" >Casioo Watches</a></li>
                        <li><a href="#" >Fastracki Watches</a></li>
                        <li><a href="#" >Timexe Watches</a></li>
                        <li><a href="#" >Fossill Watches</a></li>
                        <li><a href="#" >Diesel Watches</a></li>
                        <li><a href="#" >Toshibao Laptop</a></li>
                        <li><a href="#" >Luxury Watches</a></li>
                    </ul>
                </div>
                <div class="col-sm-12">
                    <ul id="trademark-shoes-list" class="trademark-list">
                        <li class="trademark-text-tit">FOOTWEAR:</li>  
                        <li><a href="#" >Shoes</a></li>
                        <li><a href="#" >Casual Shoes</a></li>
                        <li><a href="#" >Sports Shoes</a></li>
                        <li><a href="#" >Adidas Shoes</a></li>
                        <li><a href="#" >Gas Shoes</a></li>
                        <li><a href="#" >Puma Shoes</a></li>
                        <li><a href="#" >Reebok Shoes</a></li>
                        <li><a href="#" >Woodland Shoes</a></li>
                        <li><a href="#" >Red tape Shoes</a></li>
                        <li><a href="#" >Nike Shoes</a></li>
                    </ul>
                </div>
            </div><!-- /#trademark-text-box -->
            <div id="footer-menu-box">
                <div class="col-sm-12">
                    <ul class="footer-menu-list">
                        <li><a href="#" >Company Info - Partnerships</a></li>
                    </ul>
                </div>
                <div class="col-sm-12">
                    <ul class="footer-menu-list">
                        <li><a href="#" >Online Shopping</a></li>
                        <li><a href="#" >Promotions</a></li>
                        <li><a href="#" >My Orders</a></li>
                        <li><a href="#" >Help</a></li>
                        <li><a href="#" >Site Map</a></li>
                        <li><a href="#" >Customer Service</a></li>
                        <li><a href="#" >Support</a></li>
                    </ul>
                </div>
                <div class="col-sm-12">
                    <ul class="footer-menu-list">
                        <li><a href="#" >Most Populars</a></li>
                        <li><a href="#" >Best Sellers</a></li>
                        <li><a href="#" >New Arrivals</a></li>
                        <li><a href="#" >Special Products</a></li>
                        <li><a href="#" >Manufacturers</a></li>
                        <li><a href="#" >Our Stores</a></li>
                        <li><a href="#" >Shipping</a></li>
                        <li><a href="#" >Payments</a></li>
                        <li><a href="#" >Warantee</a></li>
                        <li><a href="#" >Refunds</a></li>
                        <li><a href="#" >Checkout</a></li>
                        <li><a href="#" >Discount</a></li>
                    </ul>
                </div>
                <div class="col-sm-12">
                    <ul class="footer-menu-list">
                        <li><a href="#" >Terms & Conditions</a></li>
                        <li><a href="#" >Policy</a></li>
                        <li><a href="#" >Shipping</a></li>
                        <li><a href="#" >Payments</a></li>
                        <li><a href="#" >Returns</a></li>
                        <li><a href="#" >Refunds</a></li>
                        <li><a href="#" >Warrantee</a></li>
                        <li><a href="#" >FAQ</a></li>
                        <li><a href="#" >Contact</a></li>
                    </ul>
                </div>
                <p class="text-center">Copyrights &#169; 2015 KuteShop. All Rights Reserved. Designed by KuteThemes.com</p>
            </div><!-- /#footer-menu-box -->
        </div> 
</footer>

<a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>
<!-- Script-->
<script type="text/javascript" src="../public/lib/jquery/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="../public/lib/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../public/lib/select2/js/select2.min.js"></script>
<script type="text/javascript" src="../public/lib/jquery.bxslider/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="../public/lib/owl.carousel/owl.carousel.min.js"></script>
<!--<script type="text/javascript" src="../public/lib/jquery.countdown/jquery.countdown.min.js"></script>-->
<!-- COUNTDOWN -->
<script type="text/javascript" src="../public/lib/countdown/jquery.plugin.js"></script>
<script type="text/javascript" src="../public/lib/countdown/jquery.countdown.js"></script>
<!-- ./COUNTDOWN -->
<script type="text/javascript" src="../public/lib/fancyBox/jquery.fancybox.js"></script>
<script type="text/javascript" src="../public/js/jquery.actual.min.js"></script>
<script type="text/javascript" src="../public/js/theme-script.js"></script>

</body>

<!-- Mirrored from kutethemes.com/html/kuteshop/html/index5.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Dec 2015 03:30:20 GMT -->
</html>