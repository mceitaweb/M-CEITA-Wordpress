<form method="get" action="<?php echo home_url(); ?>/" class="searchForm">
<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" class="field" />
<input type="submit" value="Search" class="submit" />
</form>
