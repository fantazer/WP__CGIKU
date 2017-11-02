<div class="search">
		<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>">
			<input class="input input--search" type="text" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="Ваш запрос"/>
			<button class="button--search" type="submit">
				<svg class="icon">
					<use xlink:href="#magnifying-glass"></use>
				</svg>
			</button>
		</form>
	</div>