<div class="container position-relative">

<div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
	<div class="swiper-wrapper">
		<?php foreach ($comment as $comment):?>
			<div class="swiper-slide">
				<div class="testimonial-item">
					<img src="<?=\Yii::getAlias('@testimonialsImgUrl'.'/'.$comment['image'])?>" class="testimonial-img" alt="">
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