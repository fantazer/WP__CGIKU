<?

if (function_exists('add_theme_support')) { //Включаем меню

add_theme_support('menus');

}

add_theme_support( 'post-thumbnails', array( 'post' ) ); // Включаем миниатюры
if(!is_admin()){
  remove_action('wp_head', 'wp_print_scripts');
  remove_action('wp_head', 'wp_print_head_scripts', 9);
  remove_action('wp_head', 'wp_enqueue_scripts', 1);
  
  add_action('wp_footer', 'wp_print_scripts', 5);
  add_action('wp_footer', 'wp_enqueue_scripts', 5);
  add_action('wp_footer', 'wp_print_head_scripts', 5);
  wp_deregister_script('jquery');
  wp_register_script('jquery', false, '1.11.1', true);
  wp_enqueue_script('jquery');
}

function getLastInfo(){
			if( in_category(6) ){
							$idPost = get_the_id();
							$PostArray = array();
							$args = array(
							'cat'=> 6,
							);
							query_posts($args);
							while (have_posts()) : the_post(); 
								$name = get_the_id();
								array_push($PostArray, $name);
						  endwhile; 
						  wp_reset_query();
						  
						  $key = array_search($idPost, $PostArray);
						  $output = array_slice($PostArray, $key+1,3 );
						  $LastPost = array_pop($PostArray);

						  $arg = array( 'include' =>$output,'post__not_in'=>$LastPost ,'order' => 'DESC');

							$myposts = get_posts( $arg );
							foreach( $myposts as $post ){ 
								setup_postdata($post);
								?>
								<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
								<?
							}
							wp_reset_postdata();

						}
}

function search_only_title_toster_q411859($search, &$wp_query) {
  global $wpdb;
  if (empty($search)) {
    return $search;
  }

  $q = $wp_query->query_vars;
  $n = !empty($q['exact']) ? '' : '%';
  $search =
  $searchand = '';
  foreach ((array) $q['search_terms'] as $term) {
    $term = esc_sql(like_escape($term));
    $search .= "{$searchand}($wpdb->posts.post_title LIKE '{$n}{$term}{$n}')";
    $searchand = ' AND ';
  }
  if (!empty($search)) {
    $search = " AND ({$search}) ";
    if (!is_user_logged_in()) {
      $search .= " AND ($wpdb->posts.post_password = '') ";
    }

  }
  return $search;
}
add_filter('posts_search', 'search_only_title_toster_q411859', 500, 2);

?>