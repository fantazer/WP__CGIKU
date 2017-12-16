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
							<?php
								$the_query = new WP_Query(array(
									'meta_key'			=> 'order',
									'orderby'			=> 'meta_value',
									'tag'=> 'main-service--kadastr',
									'order'				=> 'ASC'
								));
							?>
							<?php if( $the_query->have_posts() ): ?>
								<?php while( $the_query->have_posts() ) : $the_query->the_post();
									$class = get_field('order') ? 'class="order"' : '';
									?>
									<div class="main-service__el">
									<div class="main-service__cont">
										<div class="main-service__el-title"><?=get_field('second-title');?></div>
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
								<?php endwhile; ?>
							<?php endif; ?>

						<a class="main-service__el-get" href="kadastrovy-e-raboty/">Eще услуги</a>
					</div>

					<div class="main-service__col">
						<div class="main-service__title">Геодезические работы</div>
						<?php
								$the_query = new WP_Query(array(
									'tag'=> 'main-service--geo',
									'meta_key'			=> 'order',
									'orderby'			=> 'meta_value',
									'order'				=> 'ASC'
								));
							?>
							<?php if( $the_query->have_posts() ): ?>
								<?php while( $the_query->have_posts() ) : $the_query->the_post();
									$class = get_field('order') ? 'class="order"' : '';
									?>
									<div class="main-service__el">
									<div class="main-service__cont">
										<div class="main-service__el-title"><?=get_field('second-title');?></div>
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
								<?php endwhile; ?>
							<?php endif; ?>
						<a class="main-service__el-get" href="geodezicheskie-raboty/">Eще услуги</a>
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