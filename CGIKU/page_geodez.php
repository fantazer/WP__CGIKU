<? 
/*
Template Name: geodez
*/
?>

<? get_header(); ?>

<?
	include('module/bread.php');
?>

<div class="main-cont">
	<div class="content">
    <? include('module/toolbar.php'); ?>
		<div class="content__info">
			<?the_title('<h1>', '</h1>');?>
			<ul class="services_list">
				 	<?
						$args = array( 'cat'=> 7,
						'order' => 'ASC'
						);
						query_posts($args);
						while (have_posts()) : the_post();
						printf('<li><a href="%s">%s</a></li>',get_permalink(),get_the_title());
						endwhile;
						wp_reset_query();
					?>
				</ul>
		</div>
	</div>
</div>
<? get_footer(); ?>




