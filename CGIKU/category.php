<? get_header(); ?>

<?
	include('module/bread.php');
?>

<div class="main-cont">
	<div class="content">
    <? include('module/toolbar.php'); ?>
		<div class="content__info">
		    <h1>Категория</h1>
			 <?
			    $categories = get_the_category();
                $category_id = $categories[0]->cat_ID;
			 	$args = array(
			 	'cat'=> $category_id,
			 	'order' => 'DESC',
			 	'posts_per_page' => 100,
			 	);
			 ?>
			 <ul>
                 <? query_posts($args);?>
                 <? while (have_posts()) : the_post(); ?>
                        <!-- can write -->
                     <a href="<?=get_permalink(); ?>">
                        <li><?=get_the_title(); ?></li>
                    </a>
                 <? endwhile; ?>
                 <? wp_reset_query();?>
			 </ul>
		</div>
	</div>
</div>

<?
	//echo get_the_ID();
?>
<? if(!is_page(array(2133,2125,2131))){ ?>
	<? include('module/sertificate.php'); ?>
	<? include('module/customers.php'); ?>
	<? include('module/contact-form.php'); ?>
<? } ?>
<? get_footer()?>




