<?
/*
Template Name: kadastr
*/
?>

<? get_header(); ?>

<?
	include('module/bread.php');
?>

<div class="main-cont">
	<div class="content">
      <? include('module/toolbar.php'); ?>
		<div class="content__info">
        <? the_title('<h1>', '</h1>'); ?>
<!--
				 	--><?/*
			      $args = array('cat' => 6,
			       'order' => 'ASC'
			      );
			      query_posts($args);
			      while (have_posts()) : the_post();
			          printf('<li><a href="%s">%s</a></li>', get_permalink(), get_the_title());
			      endwhile;
			      wp_reset_query();
		      */?>

				<?/*
		      if ($menu_items = wp_get_nav_menu_items('КАДАСТРОВЫЕ РАБОТЫ')) { // "Меню для шапки" - это название моего меню. Вы можете также использовать ID или ярлык
		          $menu_list = '';
		          foreach ((array)$menu_items as $key => $menu_item) {
		              $title = $menu_item->title; // заголовок элемента меню (анкор ссылки)
		              $url = $menu_item->url; // URL ссылки
		              $menu_list .= '<li><a href="' . $url . '">' . $title . '</a></li>';
		          }
		          echo $menu_list;
		      }
      */?>



				<?
					$args = array(
						'menu' => 'КАДАСТРОВЫЕ РАБОТЫ',
						'menu_class'=> 'menu__list',
					);
					wp_nav_menu($args);
				?>

			<p>Дополнительные услуги</p>
			<ul>
				<?
					$args = array('cat' => 16,
					    'order' => 'ASC'
					);
					query_posts($args);
					while (have_posts()) : the_post();
					    printf('<li><a href="%s">%s</a></li>', get_permalink(), get_the_title());
					endwhile;
					wp_reset_query();
				?>
			</ul>
			<div class="seo_text">
          <?the_content();?>
			</div>
		</div>
	</div>
</div>

<?include('module/sertificate.php');?>
<?include('module/customers.php');?>
<? get_footer(); ?>

