<? get_header(); ?>

<?
include('module/bread.php');
?>

<div class="main-cont">
	<div class="content">
      <? include('module/toolbar.php'); ?>
		<div class="content__info">
			<h1>Страница не найдена</h1>
			<p>К сожалению страница не найдена</p>
			<a href="">Перейти на главную</a>
			<img class="bxsh0" src="<?php echo get_template_directory_uri(); ?>/img/404.gif">
		</div>
	</div>
</div>

<? include('module/sertificate.php'); ?>
<? include('module/customers.php'); ?>
<? get_footer(); ?>




