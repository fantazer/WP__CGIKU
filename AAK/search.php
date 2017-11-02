<?get_header();?>

<div class="container ">

	<div class="row">

		<div class="col-md-12 main-content">
			
			<? include('left_part.php'); ?>
			<!-- center-part -->
			<div class="col-md-7 col-sm-8 col-xs-8 midle-mainpart content">
					
			<div class="findme">
			<? if ( have_posts() ) : ?>
			<p><? printf( __( 'Результаты поиска: %s'), '<span>' . get_search_query() . '</span>' ); ?></p>
			<ol class="find">            
			<? while ( have_posts() ) : the_post(); ?>
			<li><a href="<? the_permalink() ?>" rel="bookmark" title="<? the_title_attribute() ?>"><? the_title() ?></a>  
			<p><? echo(get_the_excerpt()) ?></p></li>
			<? endwhile; ?>
			</ol>
			<? else : ?>
			<h1>Ничего не найдено</h1>
			<p>Ничего не найдено, попробуйте еще раз.</p>
			<br />
			<? get_search_form(); ?>
			<? endif; ?>
			</div>


			</div>

			<!-- center-part -->



			<? include('right_part.php'); ?>



			<div class="clear"></div>

		</div>

	</div>

</div>



<?get_footer();?>