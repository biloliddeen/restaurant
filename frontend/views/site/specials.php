<?php /* @var \frontend\controllers\SiteController $specials */?>
<div class="container">

    <div class="section-title">
        <h2>Check our <span>Specials</span></h2>
        <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
                <li class="nav-item">
                    <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
                        <?=$specials[0]['name']?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
                        <?=$specials[1]['name']?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
                        <?=$specials[2]['name']?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
                        <?=$specials[3]['name']?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab-5">
                        <?=$specials[4]['name']?>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
                <div class="tab-pane active show" id="tab-1">
                    <div class="row">
                        <div class="col-lg-8 details order-2 order-lg-1">
                            <p class="fst-italic"><?=$specials[0]['content']?></p>
                        </div>
                        <div class="col-lg-4 text-center order-1 order-lg-2">
                            <img src="<?=\Yii::getAlias('@specialsImgUrl').'/'.$specials[0]['image']?>" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-2">
                    <div class="row">
                        <div class="col-lg-8 details order-2 order-lg-1">
                            <p class="fst-italic"><?=$specials[1]['content']?></p>
                        </div>
                        <div class="col-lg-4 text-center order-1 order-lg-2">
                            <img src="<?=\Yii::getAlias('@specialsImgUrl').'/'.$specials[1]['image']?>" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-3">
                    <div class="row">
                        <div class="col-lg-8 details order-2 order-lg-1">
                            <p class="fst-italic"><?=$specials[2]['content']?></p>
                        </div>
                        <div class="col-lg-4 text-center order-1 order-lg-2">
                            <img src="<?=\Yii::getAlias('@specialsImgUrl').'/'.$specials[2]['image']?>" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-4">
                    <div class="row">
                        <div class="col-lg-8 details order-2 order-lg-1">
                            <p class="fst-italic"><?=$specials[3]['content']?></p>
                        </div>
                        <div class="col-lg-4 text-center order-1 order-lg-2">
                            <img src="<?=\Yii::getAlias('@specialsImgUrl').'/'.$specials[3]['image']?>" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-5">
                    <div class="row">
                        <div class="col-lg-8 details order-2 order-lg-1">
                            <p class="fst-italic"><?=$specials[4]['content']?></p>
                        </div>
                        <div class="col-lg-4 text-center order-1 order-lg-2">
                            <img src="<?=\Yii::getAlias('@specialsImgUrl').'/'.$specials[4]['image']?>" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>