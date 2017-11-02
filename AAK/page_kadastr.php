<? 
/*
Template Name: kadastr
*/
?>

<?get_header();?>
<div class="container ">
	<div class="row">
		<div class="col-md-12 main-content">
			<? include('left_part.php'); ?>
			<!-- center-part -->
			<div class="col-md-7 col-sm-8 col-xs-8 midle-mainpart content">
				<? 
					the_title('<h1>', '</h1>');
			 	?>
				
				<!-- <ul class="services_list">
				 	<?
						$args = array( 'cat'=> 6,
						'order' => 'ASC'
						);
						query_posts($args);
						while (have_posts()) : the_post();
						printf('<li><a href="%s">%s</a></li>',get_permalink(),get_the_title());
						endwhile;
						wp_reset_query();
					?>
				</ul> -->
				<!-- <ul class="services_list">
				<? 
				if( $menu_items = wp_get_nav_menu_items('КАДАСТРОВЫЕ РАБОТЫ') ) { // "Меню для шапки" - это название моего меню. Вы можете также использовать ID или ярлык
					$menu_list = '';
					foreach ( (array) $menu_items as $key => $menu_item ) {
						$title = $menu_item->title; // заголовок элемента меню (анкор ссылки)
						$url = $menu_item->url; // URL ссылки
						$menu_list .= '<li><a href="' . $url . '">' . $title . '</a></li>';
					}
					echo $menu_list;
				} 
				?>
							</ul> -->
				<ul class="services_list">
				<? 
				$args = array(
					'menu'            => 'КАДАСТРОВЫЕ РАБОТЫ', 
				);
				wp_nav_menu($args); 
				?>
			</ul>
				<!-- Форма регистрации -->
				<div class="form-block">
			            <div class="titlebg">
			                <div class="title">Задайте вопрос нам прямо сейчас</div>
			            </div>
		            	<div class="form-content">
		            		<?php echo do_shortcode('[contact-form-7 id="5" title="Контактная форма 1"]'); ?>
		                </div>
		                <div class="bottom">
		                    <div class="text">
		                        В соответствии с Федеральным законом Российской Федерации  от 27 июля 2006 г. N 152 "О персональных данных" - мы гарантируем полную анонимность всех консультаций
		                    </div>
		                </div>
		        </div>
		        <!-- Форма регистрации -->
		        <p>Дополнительные услуги</p>
		        <ul >
				 	<?
						$args = array( 'cat'=> 16,
						'order' => 'ASC'
						);
						query_posts($args);
						while (have_posts()) : the_post();
						printf('<li><a href="%s">%s</a></li>',get_permalink(),get_the_title());
						endwhile;
						wp_reset_query();
					?>
				</ul>
		        <div class="seo_text">
		       	 <? 
					the_content();
			 	?>
			 		
		        </div> 

				</ul>
			</div>
			<!-- center-part -->
			<? include('right_part.php'); ?>
			<div class="clear"></div>

		</div>

	</div>

</div>

<?get_footer();?>

