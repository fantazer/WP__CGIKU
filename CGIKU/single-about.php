<?
/*
 * Template Name: about
 * Template Post Type: post, page, product
 */
?>

<? get_header(); ?>
<? include('module/bread.php'); ?>

<div class="section section--about" >
	<div class="section-title">О нашей компании</div>
	<div class="main-cont">
		<div class="about-content">
			<div class="about-text">
				<? while (have_posts()) : the_post(); ?>
					<? the_content();?>
				 <? endwhile; ?>
			</div>
			<div class="about-img">
				<img src="<?php echo get_template_directory_uri(); ?>/img/about.jpg" alt="">
			</div>
		</div>
	</div>
</div>

<div class="section section--certificate wow fadeIn" data-wow-duration="2s" data-wow-delay=".75s">
	<div class="filter"></div>
	<div class="section-title">Отзывы о нас</div>
	<div class="main-cont">
		<div class="slider-certificate owl-carousel">
			<? $imgJub = get_field('review', 'option'); ?>
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

<? include('module/contact-form.php'); ?>

<div class="section section--towns" >
	<div class="section-title">Услуги в других городах</div>
	<div class="main-cont">
		<div class="towns-list">
				 <?
				 	$args = array(
					  'cat'=> 11,
					  'order' => 'ASC'
				 	);
				 ?>
				 <? query_posts($args);?>
				 <? while (have_posts()) : the_post(); ?>
					 <a href="<?=get_permalink()?>" class="towns-list__el">
						 <?=CFS()->get('namecity') ?>
					 </a>
				 <? endwhile; ?>
				 <? wp_reset_query();?>

		</div>
	</div>
</div>

<? get_footer(); ?>
