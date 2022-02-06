<?php
/* @var \frontend\controllers\SiteController $about */
?>
<div class="row">

    <div class="col-lg-5 align-items-stretch video-box" style='background-image: url(<?=$about[0]['image']?>);'>
        <a href="<?=$about[0]['link']?>" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
    </div>

    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

        <div class="content">
            <h3>
                <strong>
                    <?=$about[0]['title']?>
                </strong>
            </h3>
            <p class="fst-italic">
                <?=$about[0]['description']?>
            </p>

        </div>

    </div>

</div>

