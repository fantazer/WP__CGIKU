<? 
/*
Template Name: main
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

				the_title('<h1>', '</h1>
			'); 

				the_content(); 

				?>
			
			<!-- Форма регистрации -->

			<div class="form-block">

				<div class="titlebg">

					<div class="title">Задайте вопрос нам прямо сейчас</div>

				</div>

				<div class="form-content">

					<?php echo do_shortcode('[contact-form-7 id="5" title="Контактная форма 1"]'); ?></div>

				<div class="bottom">

					<div class="text">
						В соответствии с Федеральным законом Российской Федерации  от 27 июля 2006 г. N 152 "О персональных данных" - мы гарантируем полную анонимность всех консультаций
					</div>

				</div>

				<div class="seo_text">
					<?php echo CFS()->get('seo_text'); ?>
				</div>


			</div>

			<!-- Форма регистрации -->

		</div>

		<!-- center-part -->

		<? include('right_part.php'); ?>
		<div class="clear"></div>

	</div>

</div>

</div>

<?get_footer();?>