<?get_header();?>

<?
	include('module/bread.php');
?>

<div class="main-cont">
			<div class="content">

				<? include('module/toolbar.php');?>

				<div class="content__info">
					<?
						the_title('<h1>', '</h1>');
						if(in_category(12) ){
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
						porstAfter(14,true);
						porstAfter(15,true);
				?>

				<!-- for page service city list -->
        <?php if (is_single( '193' ) ): ?>
          <div class="city-title">Услуги в других городах</div>
             <div class="city-wrap">
             <?
                $args = array(
                'cat'=> 11,
                'order' => 'ASC'
                );
                query_posts($args);
                while (have_posts()) : the_post();
                printf('
                        <div class="city-el">
                            <a href="%s">%s</a>
                        </div>
                ',get_permalink(),CFS()->get('namecity'));
                 endwhile;
                 wp_reset_query();
             ?>
             </div>
        <?php endif ?>
        <!-- for page service city list -->

        <?php if (is_single( '11' ) ): ?>
          <div class="city-title">Популярные населенные пункты:</div>
             <div class="city-wrap">
             <?
                $args = array(
                'cat'=> 15,
                'order' => 'ASC'
                );
                query_posts($args);
                while (have_posts()) : the_post();
                printf('
                        <div class="city-el">
                            <a href="%s">%s</a>
                        </div>
                ',get_permalink(),CFS()->get('namecity'));
                 endwhile;
                 wp_reset_query();
             ?>
             </div>
        <?php endif ?>

        <!-- for page about -->
	        <?php if (is_single('9') ): ?>
	          <div class="city-title">Услуги в других городах</div>
               <div class="city-wrap">
                 <?
                    $args = array(
                    'cat'=> 19,
                    'order' => 'ASC'
                    );
                    query_posts($args);
                    while (have_posts()) : the_post();
                    printf('
                          <div class="city-el">
                              <a href="%s">%s</a>
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
			       porstAfter(6,true);
					//for cat geodez
			       porstAfter(7,true);
					//for Megavanie
			       porstAfter(8,true);
					//for razdel-pereraspredelenie
			       porstAfter(9,true);
					//for kadastrovy-e-raboty
			       porstAfter(16,true);
					//for kadastrovy-e-raboty town
			       porstAfter(19,true);
				?>
			</div>
		</div>
</div>

<? include('module/sertificate.php');?>
<? include('module/customers.php');?>


<?get_footer();?>

