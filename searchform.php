<form action="<?php echo home_url() ?>" method="get">
    <input class="span2" type="text" name="s" value="<?php the_search_query(); ?>">
    <button type="submit" class="btn">Go!</button>
</form>
