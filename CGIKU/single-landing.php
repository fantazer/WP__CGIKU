<?
/*
 * Template Name: landing
 * Template Post Type: post, page, product
 */
?>

<? get_header(); ?>

		<!--block header end-->
		<div class="lp-baner">
			<div class="lp-baner__img" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/lp-2.jpg');"></div>
			<div class="lp-baner-filter lp-baner-filter--light"></div>
			<div class="main-cont">
				<div class="lp-baner__content">
					<div class="lp-baner__title">Оформление
						<br> технического плана дома</div>
					<div class="lp-baner__title-sub">Закажите технический план и забудьте о проблемах связанных с незарегистрированной постройкой!</div>
					<div class="header__get">
						<a class="header__btn header__btn-more" href="#why">Подробнее</a>
						<div class="header__btn header__btn-get modal-get" data-modal="order">Заказать</div>
					</div>
				</div>
			</div>
		</div>

		<!--why you need this-->
		<div class="section section--why" id="why">
			<div class="main-cont">
				<div class="section-wrap">
					<div class="section-call">
						<div class="section-title section-title--left">Что это такое ?</div>
						<div class="box">
							<p>Технический план дома – это подготовленный кадастровым инженером документ, на основании, которого сведения о Вашей постройке вносятся в Единый государственный реестр недвижимости (ЕГРН).</p>
							<p>До 2017 года все постройки на садовых и дачных участках (в СНТ и ДНТ) можно было зарегистрировать по декларации. С 2017 для их регистрации в Ростреестре необходим технический план.</p>
							<p>Технический план подается в Росреестр (можно через МФЦ). По итогам проверки Росреестром технического плана собственнику выдаётся выписка ЕГРН на здание, подтверждающая право собственности на постройку. С этого момента постройка считается официально
								зарегистрированной.</p>
						</div>
					</div>
					<div class="section-call section-call--img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/lp-4.jpg" alt="" />
					</div>
				</div>
			</div>
		</div>

		<!--from begin-->
		<div class="section section--start" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/lp-5.jpg');">
			<div class="main-cont">
				<div class="section-wrap">
					<div class="section-call section-call--img"></div>
					<div class="section-call">
						<div class="section-title section-title--left">Это нужно знать!</div>
						<div class="box">
							<p>С 01.01.2017 г. владельцу земельного участка с незарегистрированной постройкой грозят штрафы в размере 20% от неуплаченной налоговой суммы. То есть, если в 2017 году инспекторы Федеральной налоговой службы обнаружат у Вас на участке незарегистрированные
								постройки (в т.ч. бани, гаражи, хозяйственные строения площадью свыше 50 кв.м), за которые не платятся налоги, то они вправе взыскать с Вас долги сразу за три последних года, дополнительно выписав штраф в размере 20% от неоплаченной суммы.</p>
							<p>Также с 01.07.2017 года любая незарегистрированная постройка властями признается самовольной постройкой – «самострой» - и требует сноса.</p>
							<p class="attanintion">
								<b>ВАЖНО:</b> с 01.01.2018 г. невозможно будет провести регистрационные действия по купле-продаже, наследованию, дарению и т.д. в отношении неоформленных и незарегистрированных домов.</p>
							<p>Если Вы решили построить жилой дом на земельном участке с видом разрешенного использования ИЖС (индивидуальное жилищное строительство) или ЛПХ (личное подсобное хозяйство), то предварительно Вам необходимо получить разрешение на строительство.</p>
							<p class="attanintion">
								<b>ВАЖНО:</b> В связи с продлением дачной амнистии до 01.03.2018 г. получение разрешения на ввод постройки ИЖС и ЛПХ в эксплуатацию не требуется. Также не требуется получения разрешения на строительство на дома, расположенные на землях под дачное
								строительство, садоводство и огородничество.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

			<!--price-->
		<div class="section section--price wow fadeIn" data-wow-duration="2s" data-wow-delay=".75s">
			<div class="main-cont">
				<div class="section-title">Стоимость наших работ</div>
				<div class="section-title-sub">Подача в Росреестр – плюс 3 000 руб. к стоимости работ </div>
				<div class="cost">
					<div class="cost__el">
						<div class="cost__el-img" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/house-size-1.png');"></div>
						<div class="cost__el-title">Площадь дома
							<span>до 50 кв.м</span>
						</div>
						<div class="cost__el-text">(садовый дом, баня, гараж)</div>
						<div class="cost__el-price">10 000 руб.</div>
						<div class="service__btn service__btn-get modal-get" data-modal="order">Заказать</div>
					</div>
					<div class="cost__el">
						<div class="cost__el-img" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/house-size-2.png');"></div>
						<div class="cost__el-title">Площадь дома
							<span>от 51 до 100 кв.м</span>
						</div>
						<div class="cost__el-text">(дачный дом , жилое строение)</div>
						<div class="cost__el-price">14 000 руб.</div>
						<div class="service__btn service__btn-get modal-get" data-modal="order">Заказать</div>
					</div>
					<div class="cost__el">
						<div class="cost__el-img" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/house-size-3.png');"></div>
						<div class="cost__el-title">Площадь дома
							<span>от 101 до 200 кв.м</span>
						</div>
						<div class="cost__el-text">(индивидуальный жилой дом)</div>
						<div class="cost__el-price">20 000 руб.</div>
						<div class="service__btn service__btn-get modal-get" data-modal="order">Заказать</div>
					</div>
					<div class="cost__el">
						<div class="cost__el-img" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/house-size-4.png');"></div>
						<div class="cost__el-title">Площадь дома
							<span>от 201 кв.м</span>
						</div>
						<div class="cost__el-text">(загородный дом, коттедж)</div>
						<div class="cost__el-price">25 000 руб.</div>
						<div class="service__btn service__btn-get modal-get" data-modal="order">Заказать</div>
					</div>
				</div>
				<div class="cost-inform">
				Указанные здесь цены являются окончательными и зависят только от площади объекта. Единственный платёж, который Вам придётся уплатить, это гос. пошлина в размере 350 руб., взимаемая Росреестром при подаче технического плана.
				</div>
			</div>
		</div>

		<!--need doc-->
		<div class="section section--doc">
			<div class="main-cont">
				<div class="section-title">Что войдет в стоимость работ ?</div>
				<div class="section-title-sub">Все выполняемые нами работы.</div>
				<div class="doc">
					<div class="doc__el">
						<div class="doc__icon">
							<svg class="icon">
								<use xlink:href="#house-plan-scale"></use>
							</svg>
						</div>
						<div class="doc__title">Обмеры внешнего контура здания</div>
						<div class="doc__text">Позволяют определить фактические габариты зданий и сооружений</div>
					</div>
					<div class="doc__el">
						<div class="doc__icon">
							<svg class="icon">
								<use xlink:href="#protractor"></use>
							</svg>
						</div>
						<div class="doc__title">Внутренние обмеры
							<br> здания</div>
						<div class="doc__text">Необходимы для создания планов помещений.</div>
					</div>
					<div class="doc__el">
						<div class="doc__icon">
							<svg class="icon">
								<use xlink:href="#house-plans"></use>
							</svg>
						</div>
						<div class="doc__title">Формирование поэтажных планов</div>
						<div class="doc__text">Документ который отображает основные элементы конструкций одного уровня здания.</div>
					</div>
					<div class="doc__el">
						<div class="doc__icon">
							<svg class="icon">
								<use xlink:href="#planning"></use>
							</svg>
						</div>
						<div class="doc__title">Формирование технического плана</div>
						<div class="doc__text">Необходим для государственного кадастрового учета здания.</div>
					</div>
				</div>
			</div>
		</div>

		<!--need doc-->
		<div class="section section--doc">
			<div class="main-cont">
				<div class="section-title">Какие нужны документы?</div>
				<div class="section-title-sub">Максимальный перечень необходимых документов</div>
				<div class="doc">
					<div class="doc__el">
						<div class="doc__icon">
							<svg class="icon">
								<use xlink:href="#attest"></use>
							</svg>
						</div>
						<div class="doc__title">Свидетельство о праве собственности на земельный участок</div>
						<div class="doc__text">Необходимо для подтверждения права собственности на земельный участок</div>
					</div>
					<div class="doc__el">
						<div class="doc__icon">
							<svg class="icon">
								<use xlink:href="#doc"></use>
							</svg>
						</div>
						<div class="doc__title">Разрешение на строительство</div>
						<div class="doc__text">Необходимо для подтверждения соответствия проектной документации для домов на землях ИЖС, ЛПХ, а также для жилых домов на дачных участках</div>
					</div>
					<div class="doc__el">
						<div class="doc__icon">
							<svg class="icon">
								<use xlink:href="#plan"></use>
							</svg>
						</div>
						<div class="doc__title">Проектная документация на дом</div>
						<div class="doc__text">Содержит текстовые и графические материалы и определяет архитектурные, функционально-технологические, конструктивные и инженерно-технические решения.</div>
					</div>
					<div class="doc__el">
						<div class="doc__icon">
							<svg class="icon">
								<use xlink:href="#case"></use>
							</svg>
						</div>
						<div class="doc__title">Паспортные данные собственника земельного участка</div>
						<div class="doc__text">Пакет документов который необходим для подтверждения Вашей личности.</div>
					</div>
				</div>
			</div>
		</div>

		<?include('module/step.php');?>

		<?include('module/advant.php');?>

		<!--customers-->
		<?include('module/customers.php');?>

		<!--slider certificate-->
		<?include('module/sertificate.php');?>

		<?include('module/contact-form.php');?>

		<!--questions-->
		<div class="section section--news wow fadeIn" data-wow-duration="2s" data-wow-delay=".75s">
			<div class="section-title">Часто задаваемые вопросы</div>
			<div class="section-title-sub">Просто о сложном</div>
			<div class="main-cont">
				<div class="questions">
					<div class="questions-slider owl-carousel">
		          <? while( have_rows('questions') ): the_row(); ?>
								<div class="questions__el">
									<div class="questions__el-wrap">
										<div class="questions__name"><? the_sub_field('name_questions'); ?></div>
										<div class="questions__text">
						            <? the_sub_field('text_questions'); ?>
										</div>
									</div>
								</div>
						  <? endwhile; ?>
					</div>
				</div>
			</div>
		</div>


<?get_footer();?>




