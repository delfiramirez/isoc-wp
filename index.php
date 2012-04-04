<?php

/**
 * Internet Society WordPress Template 
 *
 * The main template file.
 *
 */

get_header(); ?>

       <!-- blog is reading from this page! --> 

	<?php query_posts('cat=-1'); ?>

	<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <h2><span class=""><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></span></h2>

        <article id="post-<?php the_ID(); ?>" class="post post-page clearfix">

            <div class="content clearfix">

   				<?php include (TEMPLATEPATH . '/meta.php' ); ?>

				<?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) { the_post_thumbnail(array(200,160), array("class" => "alignright post_thumbnail")); } ?>
                   <?php the_excerpt(); ?><br clear="all">

			</div>

  		</article>

	<?php endwhile; ?>

    <div class="navigation"> <?php previous_posts_link('&laquo; Previous Page ') ?> | <?php next_posts_link(' Next Page &raquo;') ?></div>
    
    <?php endif; ?>

<?php get_footer(); ?>