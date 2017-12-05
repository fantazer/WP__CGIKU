<!--slider certificate-->
<div class="section section--certificate wow fadeIn" data-wow-duration="2s" data-wow-delay=".75s">
	<div class="filter"></div>
	<div class="section-title">Наши сертификаты</div>
	<div class="main-cont">
		<div class="slider-certificate owl-carousel">
			<? $imgJub = get_field('gallary', 'option'); ?>
			<?php foreach( $imgJub as $image ): ?>
				<div class="slider__el">
					<a class="fancybox" href="<?php echo $image['url']; ?>" rel="group-elemen">
						<img src="<?php echo $image['url']; ?>" alt=""/>
					</a>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>