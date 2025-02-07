<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url(home_url('/')) ?>">
	<div>
		<label class="screen-reader-text" for="s">Search for:</label>
		<input type="text" value="<?php echo esc_html(get_search_query()); ?>" name="s" id="s">
		<input type="submit" id="searchsubmit" value="Search">
		<input type="hidden" value="post" name="post_type" id="post_type" />
	</div>
</form>