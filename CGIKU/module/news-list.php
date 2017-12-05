<!--news-->
<div class="section section--news wow fadeIn" data-wow-duration="2s" data-wow-delay=".75s">
	<div class="section-title">Новости</div>
	<div class="main-cont">
		<div class="news">
		 <?
		 	$args = array(
			  'cat'=> 12,
			  'posts_per_page' => 6,
			  'orderby' => 'date',
			  'order' => 'DESC'
		 	);
		 ?>
		 <? query_posts($args);?>
		 <? while (have_posts()) : the_post(); ?>
		    <a href="<?=get_permalink(); ?>" class="news__el">
					<div class="news__el-date"><?=get_the_date('j F Y'); ?></div>
					<div class="news__el-title"><?=get_the_title(); ?></div>
					<div class="news__el-text"><?=wp_trim_words(get_the_content(), 12, ' ...' );?>
					</div>
				</a>
		 <? endwhile; ?>
		 <? wp_reset_query();?>
		</div>
	</div>
</div>
<!--news-->