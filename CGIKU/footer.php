<?php wp_footer(); ?>
<!--section-contact-->
<div class="section section-contact" id="contact">
	<div class="main-cont">
		<div class="section-title">Наши контакты</div>
		<div class="contact">
			<div class="contact-form contact-form--footer">
				<div class="main-form">
					<div class="form-title">Оставьте вашу заявку</div>
					<div class="form-title-sub">Мы свяжемся с вам в кратчайшее время</div>
					<form class="validate-form form--footer" action="javascript:void(null);">
						<div class="input-row">
							<input class="input" type="text" name="name" placeholder="Ваше имя"/>
						</div>
						<div class="input-row">
							<input class="input" type="text" name="phone" placeholder="Ваш телефон"/>
						</div>
						<div class="input-row">
							<textarea class="input" name="info" cols="30" rows="5" placeholder="Сообщение"></textarea>
						</div>
						<div class="agree-row">
							<div class="check-el">
								<label class="style-label style-label--checkbox">
									<input class="sytle-input" type="checkbox" name="agree"/>
									<div class="sytle-input-element">
										<svg class="icon-check">
											<use xlink:href="#checked"></use>
										</svg>
									</div>
									<div class="sytle-input-text"></div>
								</label>
							</div>
							<div class="agree-row__text">Согласен с
								<a href="#">условиями обработки персональных данных</a>
							</div>
						</div>
						<input class="form-footer-send" type="submit" value="Отправить заявку"/>
					</form>
				</div>
				<div class="contact-info">
					<div class="map">
						<script text/javascript="text/javascript" charset="utf-8" async="async" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A104108c83896b1a6c1b544e50f3d690ee4df2f43b13730f0b9a6f0d5ead96cae&amp;amp;width=100%&amp;amp;height=400&amp;amp;lang=ru_RU&amp;amp;scroll=false"></script>
					</div>
					<div class="contact-row-wrap">
						<div class="contact-row">
							<div class="contact-icon">
								<svg class="icon">
									<use xlink:href="#placeholder"></use>
								</svg>
							</div>
							<div class="contact-text">Москва, 1-ый Варшавский проезд, д.1А, строен.9, офис 2.6</div>
						</div>
						<div class="contact-row">
							<div class="contact-icon">
								<svg class="icon">
									<use xlink:href="#phone-call"></use>
								</svg>
							</div>
							<div class="contact-text">+7 (495) 514-84-13</div>
						</div>
						<div class="contact-row">
							<div class="contact-icon">
								<svg class="icon">
									<use xlink:href="#mail"></use>
								</svg>
							</div>
							<div class="contact-text">info@cgiku.ru</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="footer-menu">
	<div class="main-cont">
		<?
			$args = array(
				'menu' => 'Главное меню',
				'menu_class'=> '',
				'container'=> 'div',
				'container_class' => 'menu-wrap', // css-класс блока
				'items_wrap'       => '<ul class="menu">%3$s</ul>',
				'depth' => 0,
				//'walker' => new Description_Walker
			);
			wp_nav_menu($args);
		?>
	</div>
</div>
<div class="footer-info">
	<div class="main-cont">
		<div class="footer-info-wrap">
			<div class="footer-info__logo">
				<img class="logo--full" src="<?php echo get_template_directory_uri(); ?>/img/logo-dark.png" alt=""/>
			</div>
			<div class="footer-info__phone">
				<a class="footer-info__phone" href="tel:+7 (495) 514-84-13">+7 (495) 514-84-13</a>
				<a class="footer-info__phone" href="tel:+7 (495) 514-84-13">+7 (495) 283-96-83</a>
			</div>
		</div>
	</div>
</div>
</div>

<!--section-contact-end-->
<div class="scroll-up">
	<svg class="icon">
		<use xlink:href="#arrow-up"></use>
	</svg>
</div>
<div class="modal-layer">
	<div class="modal-cont">
		<div class="modal-filter"></div>
		<div class="modal-wrap">
			<div class="modal" data-modal="order">
				<div class="modal-content modal-content--fogot">
					<div class="modal-close">
						<svg class="icon">
							<use xlink:href="#close"></use>
						</svg>
					</div>
					<div class="modal-title">Бесплатная консультация</div>
					<div class="modal-text">Обращаетесь к нам впервые?
						<br> Оформите обращение с помощью этой формы, мы перезвоним Вам и проконсультируем по любому Вашему вопросу
						совершенно бесплатно!
					</div>
					<form class="validate-form" action="javascript:void(null);">
						<div class="input-row">
							<input class="input" type="text" name="name" placeholder="Ваше имя"/>
						</div>
						<div class="input-row">
							<input class="input" type="text" name="phone" placeholder="Ваш телефон"/>
						</div>
						<div class="input-row">
							<textarea class="input" name="info" cols="30" rows="5" placeholder="Сообщение"></textarea>
						</div>
						<div class="agree-row">
							<div class="check-el">
								<label class="style-label style-label--checkbox">
									<input class="sytle-input" type="checkbox" name="agree"/>
									<div class="sytle-input-element">
										<svg class="icon-check">
											<use xlink:href="#checked"></use>
										</svg>
									</div>
									<div class="sytle-input-text"></div>
								</label>
							</div>
							<div class="agree-row__text">Согласен с
								<a href="#">условиями обработки персональных данных</a>
							</div>
						</div>
						<input class="modal-send" type="submit" value="Отправить заявку"/>
					</form>
				</div>
			</div>
			<div class="modal" data-modal="true">
				<div class="modal-content modal-content--true">
					<svg class="icon">
						<use xlink:href="#interface"></use>
					</svg>
					<div class="modal-text-true">Ваша заявка принята</div>
				</div>
			</div>
			<div class="modal" data-modal="next">
				<div class="modal-content modal-content--truesend">
					<svg class="icon">
						<use xlink:href="#interface"></use>
					</svg>
					<div class="modal-text-truesend">Ваша заявка принята!</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--block footer end-->
<script src="<?php echo get_template_directory_uri(); ?>/js/combined.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<!-- Yandex.Metrika counter -->
<!--<script type="text/javascript">
                    (function (d, w, c) {
                        (w[c] = w[c] || []).push(function () {
                            try {
                                w.yaCounter32012941 = new Ya.Metrika({
                                    id: 32012941,
                                    clickmap: true,
                                    trackLinks: true,
                                    accurateTrackBounce: true
                                });
                            } catch (e) {
                            }
                        });

                        var n = d.getElementsByTagName("script")[0],
                            s = d.createElement("script"),
                            f = function () {
                                n.parentNode.insertBefore(s, n);
                            };
                        s.type = "text/javascript";
                        s.async = true;
                        s.src = "https://mc.yandex.ru/metrika/watch.js";

                        if (w.opera == "[object Opera]") {
                            d.addEventListener("DOMContentLoaded", f, false);
                        } else {
                            f();
                        }
                    })(document, window, "yandex_metrika_callbacks");
                </script>
                <noscript>
                    <div><img src="https://mc.yandex.ru/watch/32012941" style="position:absolute; left:-9999px;" alt=""/>
                    </div>
                </noscript>-->
<!-- /Yandex.Metrika counter -->


<!-- Bitrix24 -->
<!--<script data-skip-moving="true">
                    (function (w, d, u, b) {
                        s = d.createElement('script');
                        r = (Date.now() / 1000 | 0);
                        s.async = 1;
                        s.src = u + '?' + r;
                        h = d.getElementsByTagName('script')[0];
                        h.parentNode.insertBefore(s, h);
                    })(window, document, 'https://cdn.bitrix24.ru/b4671061/crm/site_button/loader_2_335640.js');
                </script>-->
<!--/ Bitrix24 -->

</body>
</html>