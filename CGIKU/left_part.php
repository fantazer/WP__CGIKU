<!-- left-part -->
			<div class="col-md-3 col-sm-4 col-xs-12 left-mainpart">
				<div class="block-titlebg">
                    <div class="title">Популярные услуги</div>
                </div>
                <ul class="left-navigation">
                	<?
                      $args = array(
                      'cat'=> 2,
                      'order' => 'DESC'
                      );
                      query_posts($args);
                      while (have_posts()) : the_post(); 
                      printf('
                      <li><a href="%s">%s</a></li>
                      ',get_permalink(),get_the_title());
                       endwhile; 
                       wp_reset_query();
                   ?>
                 </ul>
				<div class="clear"></div>
				<div class="space20"></div>
				<div class="block-titlebg">
                    <div class="title">Нормативная документация</div>
                </div>
                <ul class="left-navigation">
                	<?
                      $args = array(
                      'cat'=> 10,
                      'order' => 'ASC'
                      );
                      query_posts($args);
                      while (have_posts()) : the_post(); 
                      printf('
                      <li><a href="%s">%s</a></li>
                      ',get_permalink(),get_the_title());
                       endwhile; 
                       wp_reset_query();
                   ?>
                 </ul>
				<div class="clear"></div>

				  <!-- Новости -->
                    <div class="otzyv news-leftblock">
                        <div class="block-titlebg">
                            <div class="title">Новости</div>
                        </div>
                        <ul class="left-navigation">
                             <?
                              $args = array(
                              'cat'=> 12,
                              'posts_per_page' => 5
                              );
                              query_posts($args);
                              while (have_posts()) : the_post(); 
                              printf('
                              <a href="%s">
                                <li>
                                  <i class="fa fa-newspaper-o"></i><span class="otz-name">%s</span>
                                  <span class="otz-text">%s</span>
                                  <span class="otz-text">%s</span>
                                </li>
                              </a>
                              ',get_permalink()
                               ,get_the_title()
                               ,wp_trim_words( get_the_content(), 8, ' ...' )
                                ,get_the_date()
                               );
                               endwhile; 
                               wp_reset_query();
                             ?>
                        </ul>
                      </div>
                 <!-- Новости -->

                 				<!-- Частые вопросы -->
				<div class="otzyv mt20">
					<div class="block-titlebg">
	                    <div class="title">Частые вопросы</div>
	                </div>
	                <ul class="left-navigation questions-block">
	                	<?
	                      $args = array(
	                      'cat'=> 5,
	                      );
	                      query_posts($args);
	                      while (have_posts()) : the_post(); 
	                      printf('
	                      <a href="/vopros-otvet/">
	                    	<li>
	                    		<i class="fa fa-envelope-o"></i><span class="otz-name">%s</span>
	                    		<span class="otz-text">%s</span>
	                    	</li>
	                    </a>
	                      '
	                      ,CFS()->get('name')
	                      ,wp_trim_words( CFS()->get('vopros'), 15, ' ...' ));
	                       endwhile; 
	                       wp_reset_query();
                   		?>
	                </ul>
                 </div>
                 <!-- Частые вопросы -->
			</div>
			<!-- left-part -->