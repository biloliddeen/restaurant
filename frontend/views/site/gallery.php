<?php
/* @var $restaurant \frontend\controllers\SiteController  */
?>
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
                    <a href="<?=\Yii::getAlias('@restaurantImgUrl').'/'.$restaurant['image']?>" class="gallery-lightbox">
                        <img src="<?=\Yii::getAlias('@restaurantImgUrl').'/'.$restaurant['image']?>" alt="<?=$restaurant['name']?>" class="img-fluid">
                    </a>
                </div>
            </div>
            <?
        }
        ?>
    </div>
</div>
