<?
/*
Template Name: service
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
			<?the_title('<h1>', '</h1>');?>
				<ul class="services_list">
					 <?
					 	$args = array(
					 	'category__in'=> array(6,7),
					 	'order' => 'ASC'
					 	);
					 ?>
					 <? query_posts($args);?>
					 <? while (have_posts()) : the_post(); ?>
					 		<li><a href="<?=get_permalink(); ?>"><?=get_the_title(); ?></a></li>
					 <? endwhile; ?>
					 <? wp_reset_query();?>
				</ul>

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
			</div>
	</div>
</div>

<?include('module/sertificate.php');?>
<?include('module/customers.php');?>
<? get_footer(); ?>




