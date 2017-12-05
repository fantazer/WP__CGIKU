<?php wp_footer(); ?>


<div class="footer-info">
	<div class="main-cont">
		<div class="footer-container">
			<?
					$args = array(
						'menu' => 'footer',
						'menu_class'=> '',
						'container'=> 'div',
						'container_class' => 'footer-list', // css-класс блока
						'items_wrap'       => '<ul class="footer-list__menu">%3$s</ul>',
						'depth' => 0,
						//'walker' => new Description_Walker
					);
					wp_nav_menu($args);

			?>

			<div class="footer-info-wrap">
				<a class="footer-info__logo" href="/">
					<img class="logo--full" src="<?php echo get_template_directory_uri(); ?>/img/logo-dark.png" alt=""/>
				</a>
				<div class="footer-info__phone">
					<a class="footer-info__phone" href="tel:<?=get_field('phone-1', 'option');?>"><?=get_field('phone-1', 'option');?></a>
					<a class="footer-info__phone" href="tel:<?=get_field('phone-2', 'option');?>"><?=get_field('phone-2', 'option');?></a>
				</div>
			</div>
		</div>
	</div>
</div>


<!--section-contact-end-->
<div class="scroll-up">
	<svg class="icon">
		<use xlink:href="#arrow-up"></use>
	</svg>
</div>


<? include('module/modal.php'); ?>

<!--block footer end-->
<script src="<?php echo get_template_directory_uri(); ?>/js/combined.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>


</body>
</html>