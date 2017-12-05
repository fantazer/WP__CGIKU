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
								<a href="<?php echo get_template_directory_uri(); ?>/docs/agreement.pdf">условиями обработки персональных данных</a>
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