<?get_header();?>

<div class="container ">
	<div class="row">
		<div class="col-md-12 main-content">
			<? include('left_part.php'); ?>
			<!-- center-part -->
			<div class="col-md-7 col-sm-8 col-xs-8 midle-mainpart content">
				<? 
				the_title('<h1>', '</h1>'); 
				if( in_category(12) ){
					the_date();
				}
				the_content(); 

					function porstAfter($a,$order){
					if( in_category($a) ){
		  				  global $post;
		  					$idPost = get_the_id();
		  					$PostArray = array();
		  					if($order){
		  						$args = array(
				  					'cat'=> $a,
				  					//'orderby'=> 'title',
				  					'order' => 'ASC'
		  						);
		  					} else {
		  						$args = array(
				  					'cat'=> $a,
		  						);
		  					}
		  					query_posts($args);
		  					while (have_posts()) : the_post(); 
		  						$name = get_the_id();
		  						array_push($PostArray, $name);
		  				  endwhile; 
		  				  wp_reset_query();
		  				  $key = array_search($idPost, $PostArray);
		  				  $output = array_slice($PostArray, $key+1,3 );
		  				  $LastPost = array_pop($PostArray);
		  				  $postEl = array( 'include' =>$output,'post__not_in'=>$LastPost ,'order' => 'ASC');
		  					$myposts = get_posts($postEl);
		  					foreach( $myposts as $post ){ 
		  						setup_postdata($post);
		  						?>
		  						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		  						<?
		  					}
		  					wp_reset_postdata();
		  					$needPost =  3 - (count($PostArray) - $key);
		  					//echo $needPost;
		  					if ($needPost < 4 && $needPost > 0 ) {
		  						$postEl = array( 'cat'=> $a,'order' => 'ASC','posts_per_page' => $needPost);
		  						$myposts = get_posts($postEl);
		  						foreach( $myposts as $post ){ 
		  							setup_postdata($post);
		  							?>
		  							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		  							<?
		  						}
		  					}
		  					
						}
				}

				porstAfter(11,true);
				porstAfter(14);
				porstAfter(15,true);

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
						
		

		        <!-- for page service city list -->
		        <?php if (is_single( '193' ) ): ?>
		        	<h4>Услуги в других городах</h4>
                 <div class="row city">
                 <?
                    $args = array(
                    'cat'=> 11,
                    'order' => 'ASC'
                    );
                    query_posts($args);
                    while (have_posts()) : the_post(); 
                    printf('
                            <div class="col-md-4">
                                <li><a href="%s">%s</a></li>
                            </div>
                    
                    ',get_permalink(),CFS()->get('namecity'));
                     endwhile; 
                     wp_reset_query();
                 ?>
                 </div>
		        <?php endif ?>
		        <!-- for page service city list -->
		        <?php if (is_single( '11' ) ): ?>
		        	<h4>Популярные населенные пункты:</h4>
                 <div class="row city">
                 <?
                    $args = array(
                    'cat'=> 15,
                    'order' => 'ASC'
                    );
                    query_posts($args);
                    while (have_posts()) : the_post(); 
                    printf('
                            <div class="col-md-4">
                                <li><a href="%s">%s</a></li>
                            </div>
                    
                    ',get_permalink(),CFS()->get('namecity'));
                     endwhile; 
                     wp_reset_query();
                 ?>
                 </div>
		        <?php endif ?>

		        
		        <!-- for page about -->
			        <?php if (is_single( '9' ) ): ?>
			        	<h4>Услуги в других городах</h4>
	                 <div class="row city">
	                 <?
	                    $args = array(
	                    'cat'=> 19,
	                    'order' => 'ASC'
	                    );
	                    query_posts($args);
	                    while (have_posts()) : the_post(); 
	                    printf('
	                            <div class="col-md-4">
	                                <li><a href="%s">%s</a></li>
	                            </div>
	                    
	                    ',get_permalink(),CFS()->get('namecity'));
	                     endwhile; 
	                     wp_reset_query();
	                 ?>
	                 </div>
			        <?php endif ?>
		        <!-- for page about -->

		        <div class="seo_text">
		       	 <?php echo CFS()->get('seo_text'); ?>

		        </div> 
		       <?
					//for cat cadastr
			       porstAfter(6);
					//for cat geodez
			       porstAfter(7);
					//for Megavanie
			       porstAfter(8);
					//for razdel-pereraspredelenie
			       porstAfter(9);
					//for kadastrovy-e-raboty
			       porstAfter(16);
					//for kadastrovy-e-raboty town
			       porstAfter(19,true);
				?>

			</div>
			<!-- center-part -->
			<? include('right_part.php'); ?>
			<div class="clear"></div>

		</div>

	</div>

</div>

<?get_footer();?>

