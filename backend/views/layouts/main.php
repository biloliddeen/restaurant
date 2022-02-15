<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="d-flex flex-column">
    <?php $this->beginBody() ?>


    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?php echo Yii::$app->homeUrl?>" class="nav-link">Home</a>
                </li>

            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-method="post" data-widget="logout" href="<?php echo yii\helpers\Url::to(['/site/logout'])?>" role="button">
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?php echo Yii::$app->homeUrl?>" class="brand-link">
                <span class="brand-text font-weight-light">Delicious</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <a href="#" class="d-block"><i class="fas fa-user fa-lg"> </i> <?php echo strtoupper(Yii::$app->user->identity->username) ?></a>
                    </div>
                </div>


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="<?php echo \yii\helpers\Url::to(['order/'])?>" class="nav-link">
                                <i class="fas fa-cart"></i>
                                <p>
                                    <h5>ORDER TABLE</h5>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo \yii\helpers\Url::to(['food/'])?>" class="nav-link">
                                <i class="fas fa-hamburger"></i>
                                <p>
                                    FOODS
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo \yii\helpers\Url::to(['about/'])?>" class="nav-link">
                                <i class="fas fa-book"></i>
                                <p>
                                    ABOUT
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo \yii\helpers\Url::to(['carousel/'])?>" class="nav-link">
                                <i class="fas fa-sliders-h"></i>
                                <p>
                                    CAROUSEL
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo \yii\helpers\Url::to(['specials/'])?>" class="nav-link">
                                <i class="fas fa-box-open"></i>
                                <p>
                                   SPECIALS
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo \yii\helpers\Url::to(['shef/'])?>" class="nav-link">
                                <i class="fas fa-user-check"></i>
                                <p>
                                    CHEFS
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo \yii\helpers\Url::to(['contact/'])?>" class="nav-link">
                                <i class="fas fa-id-card"></i>
                                <p>
                                  OUR CONTACT
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo \yii\helpers\Url::to(['packages/'])?>" class="nav-link">
                                <i class="fas fa-calendar-week"></i>
                                <p>
                                    EVENTS
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo \yii\helpers\Url::to(['restaurant/'])?>" class="nav-link">
                                <i class="fas fa-images"></i>
                                <p>
                                    OUR RESTAURANT
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo \yii\helpers\Url::to(['testimonial/'])?>" class="nav-link">
                                <i class="fas fa-comment-dots"></i>
                                <p>
                                    TESTIMONIALS
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo \yii\helpers\Url::to(['message/'])?>" class="nav-link">
                                <i class="fas fa-comment-dots"></i>
                                <p>
                                    CLIENT MESSAGE
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo \yii\helpers\Url::to(['choose/'])?>" class="nav-link">
                                <i class="fas fa-images"></i>
                                <p>
                                    Why choose our restaurant
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper p-3">
            <?=$content?>
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Created by <a href="https://t.me/biloliddeen/">Abdullaev Group</a>.</strong>
        </footer>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
