<!--service-->
<div class="section section--service wow fadeIn" data-wow-duration="2s" data-wow-delay=".75s">
	<div class="main-cont">
		<div class="section-title">Популярные услуги</div>
		<div class="section-title-sub">уточнение, исправление реестровой ошибки, объединение, раздел, перераспределение,
			образование земельных участков
		</div>
		<div class="service">
			 <?
			 	$args = array(
			 	'cat'=> 2,
			 	'post__not_in'=> array(227),
			 	//'posts_per_page' => 3,
			 	'order' => 'ASC'
			 	);
			 ?>
			 <? query_posts($args);?>
			 <? while (have_posts()) : the_post(); ?>
			 		<!-- can write -->
			 		<div class="service__el">
						<div class="service__title"><?=get_the_title(); ?></div>
						<div class="service__text"><?=wp_trim_words( get_the_content(), 24, ' ...' );?>
						</div>
						<div class="service__price">18 000 руб.</div>
						<div class="service__get">
							<a  href="<?=get_permalink(); ?>" class="service__btn service__btn-more">Подробнее</a>
							<div class="service__btn service__btn-get modal-get" data-modal="order">Заказать</div>
						</div>
					</div>
			 		<!-- can write -->
			 <? endwhile; ?>
			 <? wp_reset_query();?>
		</div>
	</div>
</div>
<!--service-->