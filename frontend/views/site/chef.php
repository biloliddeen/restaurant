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
					<img src="<?=\Yii::getAlias('@chefsImgUrl'.'/'.$chef['image'])?>" class="img-fluid" alt="">
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