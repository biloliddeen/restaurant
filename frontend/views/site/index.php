<?php

/* @var $this yii\web\View */
/* @var \frontend\controllers\SiteController $carousel */
/* @var \frontend\controllers\SiteController $about */
/* @var \frontend\controllers\SiteController $choose */
/* @var \frontend\controllers\SiteController $food */
/* @var \frontend\controllers\SiteController $specials */
/* @var \frontend\controllers\SiteController $events */
/* @var \frontend\controllers\SiteController $restaurant */
/* @var \frontend\controllers\SiteController $chef */
/* @var \frontend\controllers\SiteController $comment */
/* @var \frontend\controllers\SiteController $contact */
/* @var \frontend\controllers\SiteController $message */
/* @var \frontend\controllers\SiteController $success */
/* @var \frontend\controllers\SiteController $order */
$this->title = 'My Yii Application';
?>
<!-- ======= Hero Section ======= -->
<section id="hero">
     <?php
        echo $this->render('carousel', 
        [
            'carousel' => $carousel
        ])
     ?>
</section>
<!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <?php
            echo  $this->render('about', 
            [
                'about' => $about
            ]);
        ?>
    </section><!-- End About Section -->

    <!-- ======= Whu Us Section ======= -->
    <section id="why-us" class="why-us">
        <?php
            echo $this->render('why', 
            [
                'choose' => $choose
            ])
        ?>
    </section><!-- End Whu Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
        <?php
            echo $this->render('menu', 
            [
                'food' => $food
            ])
        ?>
    </section><!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
       <?php
            echo $this->render('specials',
            [
                'specials' => $specials
            ])
       ?>
    </section><!-- End Specials Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
        <div class="container">
            <?php
                echo  $this->render('events', 
                [
                    'events' => $events
                ])
            ?>
        </div>
    </section><!-- End Events Section -->

    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
        <div class="container">
            <div class="section-title">
                <h2>Book a <span>Table</span></h2>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
            </div>
            <?php
                \yii\widgets\Pjax::begin();
                echo $this->render('order', 
                [
                    'order' => $order
                ]);

                \yii\widgets\Pjax::end();
            ?>
        </div>

    </section><!-- End Book A Table Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
        <?php
            echo $this->render('gallery', 
            [
                'restaurant' => $restaurant
            ])
        ?>
    </section><!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
        <?php
            echo $this->render('chef', 
            [
                'chef' => $chef
            ])
        ?>
    </section><!-- End Chefs Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <?php
            echo $this->render('comment',
            [
                'comment' => $comment
            ])
        ?>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title">
                <h2><span>Contact</span> Us</h2>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
            </div>
        </div>
        <div class="map">
            <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="container mt-5">

            <div class="info-wrap">
                <div class="row">
                    <div class="col-lg-3 col-md-6 info">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location:</h4>
                        <p><?=$contact[0]['location']?></p>
                    </div>

                    <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                        <i class="bi bi-clock"></i>
                        <h4>Open Hours:</h4>
                        <p>Monday-Saturday:<br><?=$contact[0]['from_hour']?> - <?=$contact[0]['to_hour']?></p>
                    </div>

                    <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p><?=$contact[0]['email1']?><br><?=$contact[0]['email2']?></p>
                    </div>

                    <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                        <i class="bi bi-phone"></i>
                        <h4>Call:</h4>
                        <p><?=$contact[0]['call1']?><br><?=$contact[0]['call2']?></p>
                    </div>
                </div>
            </div>
            <?php
            \yii\widgets\Pjax::begin(
                [
                    'enablePushState' => false
                ]);
                echo $this->render('contact', [
                    'message' => $message
                ]);
            \yii\widgets\Pjax::end();

            ?>
         </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->
