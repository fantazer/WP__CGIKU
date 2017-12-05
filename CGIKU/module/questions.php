<div class="section section--news wow fadeIn" data-wow-duration="2s" data-wow-delay=".75s">
	<div class="section-title">Часто задаваемые вопросы</div>
	<div class="section-title-sub">Просто о сложном</div>
	<div class="main-cont">
		<div class="questions">
			<div class="questions-slider owl-carousel">
				 <?
				 	$args = array(
				 	'cat'=> 5,
				 	'orderby' => 'date',
				 	'order' => 'DESC'
				 	);
				 ?>
				 <? query_posts($args);?>
				 <? while (have_posts()) : the_post(); ?>
				    <div class="questions__el">
						<div class="questions__el-wrap">
							<div class="questions__name"><?=CFS()->get('name'); ?></div>
							<div class="questions__title"><?=CFS()->get('Vopros'); ?>
							</div>
							<div class="questions__text">
								<?=wp_trim_words( the_content(), 60, ' ...' );?>
							</div>
							<div class="row-btn--center">
								<a class="questions__el-get" href="<?=get_permalink(); ?>">Подробнее</a>
							</div>
						</div>
					</div>
				 <? endwhile; ?>
				 <? wp_reset_query();?>
			</div>
			<div class="questions-more">
				<div class="questions-title-sub">Чтобы получить ответы на другие Ваши вопросы, читайте наши статьи:</div>
				<div class="questions-list">
					 <?
					 	$args = array(
					 	'cat'=> 14,
					 	'posts_per_page' => 3,
					 	'orderby' => 'date',
					 	'order' => 'DESC'
					 	);
					 ?>
					 <? query_posts($args);?>
					 <? while (have_posts()) : the_post(); ?>
					    <a class="questions-list__el" href="<?=get_permalink(); ?>"><?=get_the_title(); ?></a>
					 <? endwhile; ?>
					 <? wp_reset_query();?>
				</div>
				<a class="questions-list__get" href="#">Все статьи</a>
			</div>
		</div>
	</div>
</div>