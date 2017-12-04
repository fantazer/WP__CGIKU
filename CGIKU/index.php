<?get_header();?>

		<!--main-service-->
		<div class="section section--main-service">
			<div class="main-cont">
				<div class="section-title">Наши самые популярные услуги</div>
				<div class="section-title-sub">Сравните
					<span class="text--green">наши цены &nbsp;</span>c&nbsp;
					<span class="text--red">ценами конкурентов</span>
				</div>
				<div class="main-service">
					<div class="main-service__col">
						<div class="main-service__title">Кадастровые работы</div>
						 <?
						 	$args = array(
						 	'cat'=> 23,
						 	);
						 ?>
						 <? query_posts($args);?>
						 <? while (have_posts()) : the_post(); ?>
						 		<!-- can write -->
						 		<div class="main-service__el">
								<div class="main-service__cont">
									<div class="main-service__el-title"><?=get_the_title(); ?></div>
									<div class="main-service__title-sub"><?=get_field('description');?></div>
									<div class="main-service__price-row">
										<div class="main-service__price main-service__price--true"><?=get_field('price-true');?> руб.</div>
										<div class="main-service__price main-service__price--false"><?=get_field('price-false');?> руб.</div>
									</div>
									<div class="main-service__get">
										<a class="main-service__btn main-service__btn-more" href="<?=get_permalink();?>">Подробнее</a>
										<div class="main-service__btn main-service__btn-get modal-get" data-modal="order">Заказать</div>
									</div>
								</div>
								<div class="main-service__img">
									<div class="main-service__img-el" style="background-image:url('<?=get_field('image');?>');"></div>
								</div>
							</div>
						 		<!-- can write -->
						 <? endwhile; ?>
						 <? wp_reset_query();?>
						<div class="main-service__el">
							<div class="main-service__cont">

								<div class="main-service__el-title">Технический план дома</div>
								<div class="main-service__title-sub">площадь дома до 100 кв. м</div>
								<div class="main-service__price-row">
									<div class="main-service__price main-service__price--true">14 000 руб.</div>
									<div class="main-service__price main-service__price--false">15 000 руб.</div>
								</div>
								<div class="main-service__get">
									<a class="main-service__btn main-service__btn-more" href="#">Подробнее</a>
									<div class="main-service__btn main-service__btn-get modal-get" data-modal="order">Заказать</div>
								</div>
							</div>
							<div class="main-service__img">
								<div class="main-service__img-el" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/service-el-1.jpg');"></div>
							</div>
						</div>
						<div class="main-service__el">
							<div class="main-service__cont">
								<div class="main-service__el-title">Межевание (уточнение границ) земельного участка</div>
								<div class="main-service__title-sub">размер участка до 8 соток</div>
								<div class="main-service__price-row">
									<div class="main-service__price main-service__price--true">14 000 руб.</div>
									<div class="main-service__price main-service__price--false">15 000 руб.</div>
								</div>
								<div class="main-service__get">
									<a class="main-service__btn main-service__btn-more" href="#">Подробнее</a>
									<div class="main-service__btn main-service__btn-get modal-get" data-modal="order">Заказать</div>
								</div>
							</div>
							<div class="main-service__img">
								<div class="main-service__img-el" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/service-el-3.jpg');"></div>
							</div>
						</div>
						<div class="main-service__el">
							<div class="main-service__cont">
								<div class="main-service__el-title">Исправление кадастровой (реестровой) ошибки</div>
								<div class="main-service__title-sub">размер участка до 8 соток</div>
								<div class="main-service__price-row">
									<div class="main-service__price main-service__price--true">14 000 руб.</div>
									<div class="main-service__price main-service__price--false">15 000 руб.</div>
								</div>
								<div class="main-service__get">
									<a class="main-service__btn main-service__btn-more" href="#">Подробнее</a>
									<div class="main-service__btn main-service__btn-get modal-get" data-modal="order">Заказать</div>
								</div>
							</div>
							<div class="main-service__img">
								<div class="main-service__img-el" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/service-el-5.jpg');"></div>
							</div>
						</div>
						<div class="main-service__el">
							<div class="main-service__cont">
								<div class="main-service__el-title">Межевой план</div>
								<div class="main-service__title-sub">на раздел, объединение и т.п.</div>
								<div class="main-service__price-row">
									<div class="main-service__price main-service__price--true">10 000 руб.</div>
									<div class="main-service__price main-service__price--false">15 000 руб.</div>
								</div>
								<div class="main-service__get">
									<a class="main-service__btn main-service__btn-more" href="#">Подробнее</a>
									<div class="main-service__btn main-service__btn-get modal-get" data-modal="order">Заказать</div>
								</div>
							</div>
							<div class="main-service__img">
								<div class="main-service__img-el" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/service-el-7.jpg');"></div>
							</div>
						</div>
						<a class="main-service__el-get" href="#">Eще услуги</a>
					</div>
					<div class="main-service__col">
						<div class="main-service__title">Геодезические работы</div>
						<div class="main-service__el">
							<div class="main-service__cont">
								<div class="main-service__el-title">Топографическая съемка</div>
								<div class="main-service__title-sub">размер участка до 10 соток, 5 точек</div>
								<div class="main-service__price-row">
									<div class="main-service__price main-service__price--true">10 000 руб.</div>
									<div class="main-service__price main-service__price--false">12 000 руб.</div>
								</div>
								<div class="main-service__get">
									<a class="main-service__btn main-service__btn-more" href="#">Подробнее</a>
									<div class="main-service__btn main-service__btn-get modal-get" data-modal="order">Заказать</div>
								</div>
							</div>
							<div class="main-service__img">
								<div class="main-service__img-el" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/service-el-2.jpg');"></div>
							</div>
						</div>
						<div class="main-service__el">
							<div class="main-service__cont">
								<div class="main-service__el-title">Кадастровая съемка</div>
								<div class="main-service__title-sub">площадь участка до 8 соток</div>
								<div class="main-service__price-row">
									<div class="main-service__price main-service__price--true">14 000 руб.</div>
									<div class="main-service__price main-service__price--false">15 000 руб.</div>
								</div>
								<div class="main-service__get">
									<a class="main-service__btn main-service__btn-more" href="#">Подробнее</a>
									<div class="main-service__btn main-service__btn-get modal-get" data-modal="order">Заказать</div>
								</div>
							</div>
							<div class="main-service__img">
								<div class="main-service__img-el" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/service-el-4.jpg');"></div>
							</div>
						</div>
						<div class="main-service__el">
							<div class="main-service__cont">
								<div class="main-service__el-title">Вынос границ в натуру</div>
								<div class="main-service__title-sub">размер участка до 8 соток</div>
								<div class="main-service__price-row">
									<div class="main-service__price main-service__price--true">10 000 руб.</div>
									<div class="main-service__price main-service__price--false">12 000 руб.</div>
								</div>
								<div class="main-service__get">
									<a class="main-service__btn main-service__btn-more" href="#">Подробнее</a>
									<div class="main-service__btn main-service__btn-get modal-get" data-modal="order">Заказать</div>
								</div>
							</div>
							<div class="main-service__img">
								<div class="main-service__img-el" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/service-el-6.jpg');"></div>
							</div>
						</div>
						<div class="main-service__el">
							<div class="main-service__cont">
								<div class="main-service__el-title">Геодезическое сопровождение строительства</div>
								<div class="main-service__title-sub">день работы бригады геодезистов</div>
								<div class="main-service__price-row">
									<div class="main-service__price main-service__price--true">10 000 руб.</div>
									<div class="main-service__price main-service__price--false">15 000 руб.</div>
								</div>
								<div class="main-service__get">
									<a class="main-service__btn main-service__btn-more" href="#">Подробнее</a>
									<div class="main-service__btn main-service__btn-get modal-get" data-modal="order">Заказать</div>
								</div>
							</div>
							<div class="main-service__img">
								<div class="main-service__img-el" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/service-el-8.jpg');"></div>
							</div>
						</div>
						<a class="main-service__el-get" href="#">Eще услуги</a>
					</div>
				</div>
			</div>
		</div>

		<?include('module/advant.php');?>

		<?include('module/customers.php');?>

		<?include('module/sertificate.php');?>

		<?include('module/contact-form.php');?>

		<?include('module/news-list.php');?>

		<?include('module/questions.php');?>

<?get_footer();?>