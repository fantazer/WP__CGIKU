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
			<?
				the_content();
			?>
		</div>
	</div>
</div>

<!--remove for some page-->
<? if(!is_page(array(2133,2133,2125))){ ?>

<? include('module/sertificate.php'); ?>
<? include('module/customers.php'); ?>
<? get_footer(); ?>

<? } else {?>
	<? get_footer('small'); ?>
<? } ?>




