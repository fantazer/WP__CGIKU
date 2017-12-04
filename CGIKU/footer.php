<?php wp_footer(); ?>


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
		<div class="footer-container">
			<div class="footer-list">
				<div class="footer-list__el">пункт меню 0</div>
				<div class="footer-list__el">пункт меню 1</div>
				<div class="footer-list__el">пункт меню 2</div>
				<div class="footer-list__el">пункт меню 3</div>
				<div class="footer-list__el">пункт меню 4</div>
				<div class="footer-list__el">пункт меню 5</div>
				<div class="footer-list__el">пункт меню 6</div>
				<div class="footer-list__el">пункт меню 7</div>
				<div class="footer-list__el">пункт меню 8</div>
				<div class="footer-list__el">пункт меню 9</div>
				<div class="footer-list__el">пункт меню 10</div>
				<div class="footer-list__el">пункт меню 11</div>
				<div class="footer-list__el">пункт меню 12</div>
				<div class="footer-list__el">пункт меню 13</div>
				<div class="footer-list__el">пункт меню 14</div>
			</div>
			<div class="footer-info-wrap">
				<a class="footer-info__logo" href="/">
					<img class="logo--full" src="img/logo-dark.png" alt=""/>
				</a>
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


<? include('module/modal.php'); ?>

<!--block footer end-->
<script src="<?php echo get_template_directory_uri(); ?>/js/combined.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>


</body>
</html>