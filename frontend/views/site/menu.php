<?php
/* @var $food \frontend\controllers\SiteController */
?>
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
