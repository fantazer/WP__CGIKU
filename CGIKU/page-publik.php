<? 
/*
Template Name: publick
*/
?>

<?get_header();?>
<div class="container ">
	<div class="row">
		<div class="col-md-12 main-content">
			<? include('left_part.php'); ?>
			<!-- center-part -->
			<div class="col-md-7 col-sm-8 col-xs-8 midle-mainpart content">
				
				<h1>Статьи</h1>
				 <?
					$args = array(
					'cat'=> 14
					);
					query_posts($args);
					while (have_posts()) : the_post(); 
					printf('
					<a href="%s">%s</a> <br>
					',get_permalink()
					 ,get_the_title()
					);
					 endwhile; 
					 wp_reset_query();
				 ?>
				  
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
		        <div class="seo_text">
		       	 <? 
					the_content();
			 	?>
		        </div> 
			</div>
			<!-- center-part -->
			<? include('right_part.php'); ?>
			<div class="clear"></div>

		</div>

	</div>

</div>

<?get_footer();?>

