<?php

/* @var $this \yii\web\View */
/* @var $content string */
/* @var \frontend\controllers\SiteController $contact*/

use yii\bootstrap4\Nav;
use yii\bootstrap4\Html;
use common\models\Contact;
use yii\bootstrap4\NavBar;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?php echo Yii::$app->language?>">

    <head>
        <meta charset="<?php echo Yii::$app->charset?>">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title><?php echo " Delicious "?></title>
        <meta content="" name="description">
        <meta content="" name="keywords">
    </head>
    <?php echo $this->head();?>
    <body>
    <?php $this->beginBody() ?>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
            <i class="bi bi-phone d-flex align-items-center mr-3"><span><?=Contact::getContact()[0]['call1']?></span></i>
            <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span> Mon-Sat: <?=Contact::getContact()[0]['from_hour']?> - <?=Contact::getContact()[0]['to_hour']?></span></i>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <div class="logo me-auto">
                <h1><a href="<?=\Yii::$app->homeUrl?>">Delicious</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
                    <li><a class="nav-link scrollto" href="#specials">Specials</a></li>
                    <li><a class="nav-link scrollto" href="#events">Events</a></li>
                    <li><a class="nav-link scrollto" href="#chefs">Chefs</a></li>
                    <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <a href="#book-a-table" class="book-a-table-btn scrollto">Book a table</a>

        </div>
    </header><!-- End Header -->

    <?=$content?>

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>Delicious</h3>
            <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
          
            <div class="social-links">
                <a href="<?=Contact::getContact()[0]['link1']?>" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="<?=Contact::getContact()[0]['link2']?>" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="<?=Contact::getContact()[0]['link3']?>" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="<?=Contact::getContact()[0]['link4']?>" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>Delicious</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Created by <a href="https://t.me/abdullaev_571/">Abdullaev Group</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
