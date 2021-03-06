<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link href="../../css/bootstrap.css" rel="stylesheet">
    <link href="../../css/mdb.css" rel="stylesheet">
    <?php $this->head() ?>
</head>


<body>
<?php $this->beginBody() ?>
    <!-- Navigation -->
    <header>

    <!-- Sidebar navigation -->
    <ul id="slide-out" class="side-nav custom-scrollbar">

        <!-- Logo -->
        <li>

            <div class="logo-wrapper waves-light">

                <a href="#"><img src="https://mdbootstrap.com/img/logo/mdb-transparent.png" class="img-fluid flex-center"></a>

            </div>

        </li>
        <!-- Logo -->

        <!-- Social -->
        <li>

            <ul class="social">

                <li><a class="fb-ic"><i class="fab fa-facebook-f"> </i></a></li>

                <li><a class="pin-ic"><i class="fab fa-pinterest"> </i></a></li>

                <li><a class="gplus-ic"><i class="fab fa-google-plus-g"> </i></a></li>

                <li><a class="tw-ic"><i class="fab fa-twitter"> </i></a></li>

            </ul>

        </li>
        <!-- Social -->

        <!-- Search Form -->
        <li>

            <form class="search-form" role="search">

                <div class="form-group md-form mt-0 pt-1 waves-light">

                    <input type="text" class="form-control" placeholder="Search">

                </div>

            </form>

        </li>
        <!-- Search Form -->

        <!-- Side navigation links -->
        <li>

            <ul class="collapsible collapsible-accordion">

                <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-shopping-cart"></i> Cart page<i
                                class="fas fa-angle-down rotate-icon"></i></a>

                    <div class="collapsible-body">

                        <ul>

                            <li><a href="../cart/cart-v1.html" class="waves-effect">Cart V.1</a>

                            </li>

                            <li><a href="../cart/cart-v2.html" class="waves-effect">Cart V.2</a>

                            </li>

                        </ul>

                    </div>

                </li>

                <li><a class="collapsible-header waves-effect arrow-r"><i class="far fa-hand-pointer"></i> Category page<i
                                class="fas fa-angle-down rotate-icon"></i></a>

                    <div class="collapsible-body">

                        <ul>

                            <li><a href="../category/category-v1.html" class="waves-effect">Category V.1</a>

                            </li>

                            <li><a href="../category/category-v2.html" class="waves-effect">Category V.2</a>

                            </li>

                            <li><a href="../category/category-v3.html" class="waves-effect">Category V.3</a>

                            </li>

                            <li><a href="../category/category-v4.html" class="waves-effect">Category V.4</a>

                            </li>

                        </ul>

                    </div>

                </li>

                <li><a class="collapsible-header waves-effect arrow-r"><i class="far fa-bookmark"></i> Homepage<i
                                class="fas fa-angle-down rotate-icon"></i></a>

                    <div class="collapsible-body">

                        <ul>

                            <li><a href="../homepage/homepage-v1.html" class="waves-effect">Homepage V.1</a>

                            </li>

                            <li><a href="../homepage/homepage-v2.html" class="waves-effect">Homepage V.2</a>

                            </li>

                            <li><a href="../homepage/homepage-v3.html" class="waves-effect">Homepage V.3</a>

                            </li>

                        </ul>

                    </div>

                </li>

                <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-camera-retro"></i> Product page<i
                                class="fas fa-angle-down rotate-icon"></i></a>

                    <div class="collapsible-body">

                        <ul>

                            <li><a href="../product/product-v1.html" class="waves-effect">Product V.1</a>

                            </li>

                            <li><a href="../product/product-v2.html" class="waves-effect">Product V.2</a>

                            </li>

                        </ul>

                    </div>

                </li>

                <li><a href="../contact/contact.html" class="collapsible-header waves-effect"><i class="fas fa-envelope"></i>
                        Contact</a></li>

            </ul>

        </li>

        <!-- Side navigation links -->
        <div class="sidenav-bg mask-strong"></div>

    </ul>
    <!-- Sidebar navigation -->

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg  navbar-light scrolling-navbar white">

        <div class="container">

            <!-- SideNav slide-out button -->
            <div class="float-left mr-2">

                <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>

            </div>

            <a class="navbar-brand font-weight-bold" href="#"><strong>SHOP</strong></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
                    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">

                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">

                        <a class="nav-link dark-grey-text font-weight-bold" href="#"><i class="fas fa-envelope blue-text"></i>
                            Contact <span class="sr-only">(current)</span></a>

                    </li>

                    <li class="nav-item ml-3">

                        <a class="nav-link dark-grey-text font-weight-bold" href="#"><i class="fas fa-cog blue-text"></i>
                            Settings</a>

                    </li>

                    <li class="nav-item dropdown ml-3">

                        <a class="nav-link dropdown-toggle dark-grey-text font-weight-bold" id="navbarDropdownMenuLink-4"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user blue-text"></i>
                            Profile </a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">

                            <a class="dropdown-item waves-effect waves-light" href="#">My account</a>

                            <a class="dropdown-item waves-effect waves-light" href="#">Log out</a>

                        </div>

                    </li>

                </ul>

            </div>

        </div>

    </nav>
    <!-- Navbar -->

</header>

    <div class="container mt-5 pt-3">

      <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark primary-color mt-5">

            <!-- Navbar brand -->
            <a class="font-weight-bold white-text mr-4" href="#">Categories</a>

            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
                    aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent1">

                <!-- Links -->
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item dropdown mega-dropdown active">

                        <a class="nav-link dropdown-toggle  no-caret" id="navbarDropdownMenuLink1" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Laptop</a>

                        <div class="dropdown-menu mega-menu v-2 row z-depth-1 white" aria-labelledby="navbarDropdownMenuLink1">

                            <div class="row mx-md-4 mx-1">

                                <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-5 mb-4">

                                    <h6 class="sub-title text-uppercase font-weight-bold blue-text">Brand</h6>

                                    <ul class="caret-style pl-0">

                                        <li class=""><a class="menu-item mb-0" href="">Sony</a></li>

                                        <li class=""><a class="menu-item" href="">Lenovo</a></li>

                                        <li class=""><a class="menu-item" href="">Apple</a></li>

                                        <li class=""><a class="menu-item" href="">Dell</a></li>

                                        <li class=""><a class="menu-item" href="">Asus</a></li>

                                    </ul>

                                </div>

                                <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-md-5 mt-4 mb-4">

                                    <h6 class="sub-title text-uppercase font-weight-bold blue-text">Sales</h6>

                                    <ul class="caret-style pl-0">

                                        <li class=""><a class="menu-item" href="">Laptops Up to 50% Off </a></li>

                                        <li class=""><a class="menu-item" href="">Laptops under $399</a></li>

                                        <li class=""><a class="menu-item" href="">Laptops Up to 50% Off</a></li>

                                        <li class=""><a class="menu-item" href="">Laptops for designers</a></li>

                                        <li class=""><a class="menu-item" href="">Laptops for developers</a></li>

                                    </ul>

                                </div>

                                <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-4 mb-4">

                                    <h6 class="sub-title text-uppercase font-weight-bold blue-text">Processor Type</h6>

                                    <ul class="caret-style pl-0">

                                        <li class=""><a class="menu-item" href="">Intel Core i5 4th Gen.</a></li>

                                        <li class=""><a class="menu-item" href="">Intel Core i5 5th Gen.</a></li>

                                        <li class=""><a class="menu-item" href="">Intel Core i5 3th Gen.</a></li>

                                        <li class=""><a class="menu-item" href="">Intel Core i5 6th Gen.</a></li>

                                        <li class=""><a class="menu-item" href="">Intel Core i5 7th Gen.</a></li>

                                    </ul>

                                </div>

                                <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-4 mb-5">

                                    <h6 class="sub-title text-uppercase font-weight-bold blue-text">Customers opinions</h6>

                                    <ul class="caret-style pl-0">

                                        <li class=""><a class="menu-item" href="">Totam rem aperiam eaque</a></li>

                                        <li class=""><a class="menu-item" href="">Beatae vitae dicta sun</a></li>

                                        <li class=""><a class="menu-item" href="">Quae ab illo inventore</a></li>

                                        <li class=""><a class="menu-item" href="">Nemo enim ipsam</a></li>

                                        <li class=""><a class="menu-item" href="">Neque porro quisquam est</a></li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                    </li>

                    <li class="nav-item dropdown mega-dropdown">

                        <a class="nav-link dropdown-toggle no-caret" id="navbarDropdownMenuLink1" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Cameras</a>

                        <div class="dropdown-menu mega-menu v-2 row z-depth-1 white" aria-labelledby="navbarDropdownMenuLink1">

                            <div class="row mx-md-4 mx-1">

                                <div class="col-md-12 col-lg-4 sub-menu my-lg-5 mt-5 mb-4">

                                    <h6 class="sub-title text-uppercase font-weight-bold blue-text">Featured</h6>

                                    <!-- Featured image -->
                                    <div class="view overlay mb-3 z-depth-1">

                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/9.jpg" class="img-fluid"
                                             alt="First sample image">

                                        <div class="mask flex-center rgba-white-slight">

                                            <p></p>

                                        </div>

                                    </div>

                                    <h4 class="mb-2"><a class="news-title-2 pl-0" href="">Lorem ipsum dolor sit</a></h4>

                                </div>

                                <div class="col-md-6 col-lg-4 sub-menu my-lg-5 my-4">

                                    <h6 class="sub-title text-uppercase font-weight-bold blue-text">Brands</h6>

                                    <ul class="caret-style pl-0">

                                        <li class=""><a class="menu-item" href="">Canon</a></li>

                                        <li class=""><a class="menu-item" href="">Nikon</a></li>

                                        <li class=""><a class="menu-item" href="">Sony</a></li>

                                        <li class=""><a class="menu-item" href="">GoPro</a></li>

                                        <li class=""><a class="menu-item" href="">Samsung</a></li>

                                    </ul>

                                </div>

                                <div class="col-md-6 col-lg-4 sub-menu my-lg-5 my-4">

                                    <h6 class="sub-title text-uppercase font-weight-bold blue-text">Accesories</h6>

                                    <ul class="caret-style pl-0">

                                        <li class=""><a class="menu-item" href="">Excepteur sint</a></li>

                                        <li class=""><a class="menu-item" href="">Sunt in culpa</a></li>

                                        <li class=""><a class="menu-item" href="">Sed ut perspiciatis</a></li>

                                        <li class=""><a class="menu-item" href="">Mollit anim id est</a></li>

                                        <li class=""><a class="menu-item" href="">Accusantium doloremque</a></li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                    </li>

                    <li class="nav-item dropdown mega-dropdown">

                        <a class="nav-link dropdown-toggle no-caret" id="navbarDropdownMenuLink1" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Accesories</a>

                        <div class="dropdown-menu mega-menu v-2 row z-depth-1 white" aria-labelledby="navbarDropdownMenuLink1">

                            <div class="row mx-md-4 mx-1">

                                <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-5 mb-4">

                                    <h6 class="sub-title text-uppercase font-weight-bold blue-text">Featured</h6>

                                    <ul class="caret-style pl-0">

                                        <li class=""><a class="menu-item mb-0" href="">Mouse</a></li>

                                        <li class=""><a class="menu-item" href="">Printer</a></li>

                                        <li class=""><a class="menu-item" href="">Laptop bags</a></li>

                                        <li class=""><a class="menu-item" href="">Software</a></li>

                                        <li class=""><a class="menu-item" href="">Headphones</a></li>

                                    </ul>

                                </div>

                                <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-md-5 mt-4 mb-4">

                                    <h6 class="sub-title text-uppercase font-weight-bold blue-text">Related</h6>

                                    <!-- Featured image -->
                                    <div class="view overlay mb-3 z-depth-1">

                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/6-col/img%20(43).jpg" class="img-fluid"
                                             alt="First sample image">

                                        <div class="mask flex-center rgba-white-slight">

                                            <p></p>

                                        </div>

                                    </div>

                                    <h4 class="mb-2"><a class="news-title-2 pl-0" href="">Lorem ipsum dolor sit</a></h4>

                                    <p class="font-small text-uppercase dark-grey-text"><i class="far fa-clock-o pr-2"
                                                                                           aria-hidden="true"></i>July 17, 2017 / <i class="far fa-comments px-1" aria-hidden="true"></i> 20
                                    </p>

                                </div>

                                <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-4 mb-4">

                                    <h6 class="sub-title text-uppercase font-weight-bold blue-text">Bestseller</h6>

                                    <!-- Featured image -->
                                    <div class="view overlay mb-3 z-depth-1">

                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/6.jpg" class="img-fluid"
                                             alt="First sample image">

                                        <div class="mask flex-center rgba-white-slight">

                                            <p></p>

                                        </div>

                                    </div>

                                    <h4 class="mb-2"><a class="news-title-2 pl-0" href="">Ut labore et dolore magna</a></h4>

                                    <p class="font-small text-uppercase dark-grey-text"><i class="far fa-clock-o pr-2"
                                                                                           aria-hidden="true"></i>July 16, 2017 / <i class="far fa-comments px-1" aria-hidden="true"></i> 25
                                    </p>

                                </div>

                                <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-4 mb-5">

                                    <h6 class="sub-title text-uppercase font-weight-bold blue-text">

                                        Customers opinion</h6>

                                    <ul class="caret-style pl-0">

                                        <li class=""><a class="menu-item" href="">Totam rem aperiam eaque</a></li>

                                        <li class=""><a class="menu-item" href="">Beatae vitae dicta sun</a></li>

                                        <li class=""><a class="menu-item" href="">Quae ab illo inventore</a></li>

                                        <li class=""><a class="menu-item" href="">Nemo enim ipsam</a></li>

                                        <li class=""><a class="menu-item" href="">Neque porro quisquam est</a></li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                    </li>

                </ul>
                <!-- Links -->

                <!-- Search form -->
                <form class="search-form" role="search">

                    <div class="form-group md-form my-0 waves-light">

                        <input type="text" class="form-control" placeholder="Search">

                    </div>

                </form>

            </div>
            <!-- Collapsible content -->

        </nav>
        <!-- Navbar -->

    </div>
    <!-- Navigation -->
    <div class="container">
        <?= $content ?>
    </div>
    <!-- Footer -->
    <footer class="page-footer text-center text-md-left stylish-color-dark pt-0">

        <div style="background-color: #4285f4;">

            <div class="container">

                <!-- Grid row -->
                <div class="row py-4 d-flex align-items-center">

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">

                        <h6 class="mb-0 white-text">Get connected with us on social networks!</h6>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-7 text-center text-md-right">

                        <!-- Facebook -->
                        <a class="fb-ic ml-0 px-2"><i class="fab fa-facebook-f white-text"> </i></a>

                        <!-- Twitter -->
                        <a class="tw-ic px-2"><i class="fab fa-twitter white-text"> </i></a>

                        <!-- Google + -->
                        <a class="gplus-ic px-2"><i class="fab fa-google-plus-g white-text"> </i></a>

                        <!-- Linkedin -->
                        <a class="li-ic px-2"><i class="fab fa-linkedin-in white-text"> </i></a>

                        <!-- Instagram -->
                        <a class="ins-ic px-2"><i class="fab fa-instagram white-text"> </i></a>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>

        </div>

        <!-- Footer Links -->
        <div class="container mt-5 mb-4 text-center text-md-left">

            <div class="row mt-3">

                <!-- First column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

                    <h6 class="text-uppercase font-weight-bold"><strong>Company name</strong></h6>

                    <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">

                    <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet,
                        consectetur

                        adipisicing elit.</p>

                </div>
                <!-- First column -->

                <!-- Second column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                    <h6 class="text-uppercase font-weight-bold"><strong>Products</strong></h6>

                    <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">

                    <p><a href="#!">MDBootstrap</a></p>

                    <p><a href="#!">MDWordPress</a></p>

                    <p><a href="#!">BrandFlow</a></p>

                    <p><a href="#!">Bootstrap Angular</a></p>

                </div>
                <!-- Second column -->

                <!-- Third column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                    <h6 class="text-uppercase font-weight-bold"><strong>Useful links</strong></h6>

                    <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">

                    <p><a href="#!">Your Account</a></p>

                    <p><a href="#!">Become an Affiliate</a></p>

                    <p><a href="#!">Shipping Rates</a></p>

                    <p><a href="#!">Help</a></p>

                </div>
                <!-- Third column -->

                <!-- Fourth column -->
                <div class="col-md-4 col-lg-3 col-xl-3">

                    <h6 class="text-uppercase font-weight-bold"><strong>Contact</strong></h6>

                    <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">

                    <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>

                    <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>

                    <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>

                    <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

                </div>
                <!-- Fourth column -->

            </div>

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright py-3 text-center">

            <div class="container-fluid">

                © 2019 Copyright: <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MDBootstrap.com </a>

            </div>

        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
