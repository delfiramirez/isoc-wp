<?php
/*
 * Internet Society WordPress Template 
 *
 * A fragment that displays a search form.
 *
 */
 ?>

<form method="get" id="searchform" action="<?php echo home_url(); ?>/">
	<label for="s">Search</label>
	<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />

	<input type="submit" id="searchsubmit" value="GO" />

</form>