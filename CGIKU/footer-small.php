<?php wp_footer(); ?>
<!--section-contact-->


<div class="footer-menu">
	<div class="main-cont">
      <?
      $args = array(
          'menu' => 'Главное меню',
          'menu_class' => '',
          'container' => 'div',
          'container_class' => 'menu-wrap', // css-класс блока
          'items_wrap' => '<ul class="menu">%3$s</ul>',
          'depth' => 0,
          //'walker' => new Description_Walker
      );
      wp_nav_menu($args);
      ?>
	</div>
</div>
<div class="footer-info">
	<div class="main-cont">
		<div class="footer-info-wrap">
			<div class="footer-info__logo">
				<img class="logo--full" src="<?php echo get_template_directory_uri(); ?>/img/logo-dark.png" alt=""/>
			</div>
			<div class="footer-info__phone">
				<a class="footer-info__phone" href="tel:+7 (495) 514-84-13">+7 (495) 514-84-13</a>
				<a class="footer-info__phone" href="tel:+7 (495) 514-84-13">+7 (495) 283-96-83</a>
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

<?include('module/modal.php');?>
<!--block footer end-->
<script src="<?php echo get_template_directory_uri(); ?>/js/combined.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

</body>
</html>