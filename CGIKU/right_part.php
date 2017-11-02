<!-- right-part -->
			<div class="col-md-2  hidden-xs hidden-sm right-main-part">
				<?php get_search_form(); ?>
				<!-- Отзывы -->
				<div class="otzyv">
					<div class="block-titlebg">
	                    <div class="title ">Благодарственные письма</div>
	                </div>
	                
	                   
	                      <?
	                     	$args = array(
	                     	'cat'=> 4,
	                     	'posts_per_page' =>5
	                     	);
	                     	query_posts($args);
	                     	while (have_posts()) : the_post(); 
	                     	printf('
	                     	 <a href="%s">
	                    		<img src="%s" alt="">
	                  		  </a>
	                     	'
	                       ,get_permalink()
	                       ,CFS()->get('img')
	                     	 );
	                     	 endwhile; 
	                     	 wp_reset_query();
	                      ?>
	                
                 </div>
                 <!-- Отзывы -->

                 <!-- сертификаты -->
                 <div class="clear"></div>

											<div class="sertif">

												<a href="/nashi-litsenzii/"><img src="<?php echo get_template_directory_uri();?>/img/1_small.jpg"  alt=""></a>

												<a href="/nashi-litsenzii/"><img src="<?php echo get_template_directory_uri();?>/img/2_small.jpg"  alt=""></a>

											</div>
                 <!-- сертификаты -->

								<? if (is_home()) {?>
               

                 <!-- Сатьи -->
										<div class="otzyv news-leftblock">
												<div class="block-titlebg">
				                    <div class="title">Статьи</div>
				                </div>
				                <ul class="left-navigation">
				                     <?
				                    	$args = array(
				                    	'cat'=> 14,
				                    	'posts_per_page' => 3
				                    	);
				                    	query_posts($args);
				                    	while (have_posts()) : the_post(); 
				                    	printf('
				                    	<a href="/stati/">
					                    	<li>
					                    		<i class="fa fa-bookmark"></i><span class="otz-name">%s</span>
					                    		<span class="otz-text">%s</span>
					                    	</li>
					                    </a>
				                    	'
				                    	 ,get_the_title()
				                    	 ,wp_trim_words( get_the_content(), 8, ' ...' )
				                    	 );
				                    	 endwhile; 
				                    	 wp_reset_query();
				                     ?>
				                </ul>
						          </div>
                 <!-- Сатьи -->
                 <? } ?>
         
			</div>
			<!-- right-part -->

			