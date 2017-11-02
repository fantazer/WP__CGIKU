<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" class="serchform" >
	<input type="text" value="<?php echo get_search_query() ?>" name="s" id="s"  placeholder="введите запрос" class="serchform-line" />
	<input type="submit" id="searchsubmit" value="найти" class="serchform-button" />
</form>