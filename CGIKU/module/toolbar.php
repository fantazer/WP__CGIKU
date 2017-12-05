<div class="content__toolbar">
	<?php get_search_form(); ?>

	<div class="toolbar">
		<div class="toolbar__title">Популярные услуги</div>
    <?
    	$args = array(
      'order' => 'DESC',
      'tag'=> 'main-service',
    	);
    ?>
    <? query_posts($args);?>
    <? while (have_posts()) : the_post(); ?>
    		<!-- can write -->
    		<a class="toolbar__el" href="<?=get_permalink(); ?>"><?=get_the_title(); ?></a>
    		<!-- can write -->
    <? endwhile; ?>
    <? wp_reset_query();?>

	</div>
	<div class="toolbar">
		<div class="toolbar__title">Нормативная документация</div>
		<?
    	$args = array(
    	'cat'=> 10,
      'order' => 'DESC'
    	);
    ?>
    <? query_posts($args);?>
    <? while (have_posts()) : the_post(); ?>
    		<!-- can write -->
    		<a class="toolbar__el" href="<?=get_permalink(); ?>"><?=get_the_title(); ?></a>
    		<!-- can write -->
    <? endwhile; ?>
    <? wp_reset_query();?>
	</div>
</div>