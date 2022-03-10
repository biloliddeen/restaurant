<?php

/* @var $choose \frontend\controllers\SiteController */

?>
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
