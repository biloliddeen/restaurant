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
$this->title = 'My Yii Application';
?>
<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
            <div class="carousel-inner" role="listbox">
                <?
                echo \yii\bootstrap4\Carousel::widget([
                    'items' => [
                        [
                            'content' => \yii\helpers\Html::img("{$carousel[0]['image']}"),
                            'caption' => '<h2 class="animate__animated animate__fadeInDown">'.$carousel[0]["name"].'</h2>
                                            <p class="animate__animated animate__fadeInUp">'.$carousel[0]["description"].'</p>
                                            <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                                            <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto mb-5">Book a Table</a>',
                            'options' => [
                                'class' => 'carousel-item active'
                            ]
                        ],
                        [
                            'content' => \yii\helpers\Html::img("{$carousel[1]['image']}"),
                            'caption' => '<h2 class="animate__animated animate__fadeInDown">'.$carousel[1]["name"].'</h2>
                                            <p class="animate__animated animate__fadeInUp">'.$carousel[1]["description"].'</p>
                                            <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                                            <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto mb-5">Book a Table</a>',
                            'options' => [
                                'class' => 'carousel-item'
                            ]
                        ],
                        [
                            'content' => \yii\helpers\Html::img("{$carousel[2]['image']}"),
                            'caption' => '<h2 class="animate__animated animate__fadeInDown">'.$carousel[2]["name"].'</h2>
                                            <p class="animate__animated animate__fadeInUp">'.$carousel[2]["description"].'</p>
                                            <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                                            <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto mb-5">Book a Table</a>',
                            'options' => [
                                'class' => 'carousel-item'
                            ]
                        ],
                    ],
                    'controls' => [
                        ' <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                                  </a>',
                        ' <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                                        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                                  </a>'
                    ]

                ]);
                ?>
            </div>
        </div>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container-fluid">
            <?php
           echo  $this->render('about', [
             'about' => $about
            ]);
            ?>
        </div>
    </section><!-- End About Section -->

    <!-- ======= Whu Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container">

            <div class="section-title">
                <h2>Why choose <span>Our Restaurant</span></h2>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
            </div>

            <div class="row">
                <?php
               for ($i=0; $i<count($choose); $i++){
                   ?>
                   <div class="col-lg-4 mt-4 mt-lg-0">
                       <div class="box">
                           <span>0<?=$i+1?></span>
                           <h4><?=$choose[$i]['name']?></h4>
                           <p><?=$choose[$i]['content']?></p>
                       </div>
                   </div>
            <?php
               }
            ?>
           </div>

        </div>
    </section><!-- End Whu Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
        <div class="container">

            <div class="section-title">
                <h2>Check our tasty <span>Menu</span></h2>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="menu-flters">
                        <li data-filter="*" class="filter-active">Show All</li>
                        <li data-filter=".filter-starters">Starters</li>
                        <li data-filter=".filter-salads">Salads</li>
                        <li data-filter=".filter-specialty">Specialty</li>
                    </ul>
                </div>
            </div>

            <div class="row menu-container">

                <?php
                for ($i=0; $i<count($food); $i++){

                    ?>
                    <div class="col-lg-6 menu-item filter-<?=$food[$i]['type']?>">
                        <div class="menu-content">
                            <a href="#"><?=$food[$i]['name']?></a>
                            <span>
                                <?php
                                    echo \Yii::$app->formatter->asCurrency($food[$i]['price']);
                                ?>
                            </span>
                        </div>
                        <div class="menu-ingredients">
                            <?=$food[$i]['description']?>
                        </div>
                    </div>
                    <?php
                }
                ?>

            </div>

        </div>
    </section><!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
       <?php
            echo $this->render('specials',[
                    'specials' => $specials
            ])
       ?>
    </section><!-- End Specials Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
        <div class="container">
            <?php
            echo  $this->render('events', [
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

            <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form">
                <div class="row">
                    <div class="col-lg-4 col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group mt-3">
                        <input type="text" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group mt-3">
                        <input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group mt-3">
                        <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                        <div class="validate"></div>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                    <div class="validate"></div>
                </div>
                <div class="mb-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

        </div>
    </section><!-- End Book A Table Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
        <div class="container-fluid">

            <div class="section-title">
                <h2>Some photos from <span>Our Restaurant</span></h2>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
            </div>

            <div class="row no-gutters">
                <?php
                foreach ($restaurant as $restaurant){
                  ?>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="<?=$restaurant['image']?>" class="gallery-lightbox">
                                <img src="<?=$restaurant['image']?>" alt="<?=$restaurant['name']?>" class="img-fluid">
                            </a>
                        </div>
                    </div>
                  <?
                }
                ?>
            </div>

        </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
        <div class="container">

            <div class="section-title">
                <h2>Our Proffesional <span>Chefs</span></h2>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
            </div>

            <div class="row">

                <?php foreach ($chef as $chef) : ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="member">
                            <div class="pic">
                                <img src="<?=$chef['image']?>" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>
                                    <?=$chef['name']?>
                                </h4>
                                <span>
                                    <?=$chef['profession']?>
                                </span>
                                <div class="social">
                                    <a href="<?=$chef['link1']?>"><i class="bi bi-twitter"></i></a>
                                    <a href="<?=$chef['link2']?>"><i class="bi bi-facebook"></i></a>
                                    <a href="<?=$chef['link3']?>"><i class="bi bi-instagram"></i></a>
                                    <a href="<?=$chef['link4']?>"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>

            </div>

        </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container position-relative">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    <?php foreach ($comment as $comment):?>
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="<?=$comment['image']?>" class="testimonial-img" alt="">
                                <h3>
                                    <?=$comment['name']?>
                                </h3>
                                <h4>
                                    <?=$comment['profession']?>
                                </h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    <?=$comment['description']?>
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->
                    <?php endforeach;?>

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
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
                        <p>Monday-Saturday:<br><?=$contact[0]['days_hours']?></p>
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
            \yii\widgets\Pjax::begin([
                    'enablePushState' => false
            ]);
                echo $this->render('contact',[
                        'message' => $message
                ]);
                \yii\widgets\Pjax::end();

            ?>
  </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->
