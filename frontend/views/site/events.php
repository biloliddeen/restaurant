<?php
/* @var \frontend\controllers\SiteController $events */
?>
<div class="section-title">
    <h2>Organize Your <span>Events</span> in our Restaurant</h2>
</div>

<div class="events-slider swiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="row event-item">
                <div class="col-lg-6">
                    <img src="<?=$events[0]['image']?>" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <h3><?=$events[0]['name']?></h3>
                    <div class="price">
                        <p><span><?=Yii::$app->formatter->asCurrency($events[0]['price'])?></span></p>
                    </div>
                    <p class="fst-italic">
                        <?=$events[0]['description']?>
                    </p>
                </div>
            </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
            <div class="row event-item">
                <div class="col-lg-6">
                    <img src="<?=$events[1]['image']?>" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <h3><?=$events[1]['name']?></h3>
                    <div class="price">
                        <p><span><?=Yii::$app->formatter->asCurrency($events[1]['price'])?></span></p>
                    </div>
                    <p class="fst-italic">
                        <?=$events[1]['description']?>
                    </p>
                </div>
            </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
            <div class="row event-item">
                <div class="col-lg-6">
                    <img src="<?=$events[2]['image']?>" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <h3><?=$events[2]['name']?></h3>
                    <div class="price">
                        <p><span><?=Yii::$app->formatter->asCurrency($events[2]['price'])?></span></p>
                    </div>
                    <p class="fst-italic">
                        <?=$events[2]['description']?>
                    </p>
                </div>
            </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
            <div class="row event-item">
                <div class="col-lg-6">
                    <img src="<?=$events[3]['image']?>" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <h3><?=$events[3]['name']?></h3>
                    <div class="price">
                        <p><span><?=Yii::$app->formatter->asCurrency($events[3]['price'])?></span></p>
                    </div>
                    <p class="fst-italic">
                        <?=$events[3]['description']?>
                    </p>
                </div>
            </div>
        </div><!-- End testimonial item -->
    </div>
    <div class="swiper-pagination"></div>

</div>
