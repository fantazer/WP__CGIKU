<? get_header(); ?>

<?
	include('module/bread.php');
?>

<div class="main-cont">
	<div class="content">
    <? include('module/toolbar.php'); ?>
		<div class="content__info">
			<div class="findme">
          <? if (have_posts()) : ?>
						<p><? printf(__('Результаты поиска: %s'), '<span>' . get_search_query() . '</span>'); ?></p>
						<ol class="find">
                <? while (have_posts()) : the_post(); ?>
									<li><a href="<? the_permalink() ?>" rel="bookmark"
									       title="<? the_title_attribute() ?>"><? the_title() ?></a>
										<p><? echo(get_the_excerpt()) ?></p></li>
                <? endwhile; ?>
						</ol>
          <? else : ?>
						<h1>Ничего не найдено</h1>
						<p>Ничего не найдено, попробуйте еще раз.</p>
						<br/>
              <? get_search_form(); ?>
          <? endif; ?>
			</div>
		</div>
	</div>
</div>
<? get_footer(); ?>

