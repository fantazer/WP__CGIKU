<?
/*
Template Name: questions
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
       <?
       	$args = array(
       	'cat'=> 5,
       	'posts_per_page' => 10,
       	'orderby' => 'date',
       	'order' => 'DESC',
       	'paged' => $paged
       	);
       ?>
       <?
	       $argsPag = array(
				    'end_size'     => 1,     // количество страниц на концах
				    'mid_size'     => 1,     // количество страниц вокруг текущей
				    'prev_next'    => True,  // выводить ли боковые ссылки "предыдущая/следующая страница".
				    'prev_text'    => __('Назад'),
				    'next_text'    => __('Вперед'),
				    'add_args'     => False,
				    'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
				    'screen_reader_text' => ( '' ),
				  );
				?>
       <? query_posts($args);?>
       <? while (have_posts()) : the_post(); ?>
       		<!-- can write -->
       		<div class="questions-items">
						<a href="<?=get_permalink(); ?>" class="questions__el">
							<div class="questions-items__name"><?=CFS()->get('name'); ?></div>
							<div class="questions-items__title"><?=CFS()->get('vopros'); ?></div>
							<div class="questions-items__text"><?=wp_trim_words( get_the_content(), 40, ' ...' );?></div>
						</a>
					</div>
       		<!-- can write -->
       <? endwhile; ?>
       <?php the_posts_pagination($argsPag); ?>
       <? wp_reset_query();?>
	</div>
	</div>
</div>

<? include('module/sertificate.php'); ?>
<? include('module/customers.php'); ?>
<? include('module/contact-form.php'); ?>
<? get_footer(); ?>




