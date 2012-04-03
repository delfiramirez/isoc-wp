<?php

/*
 * Internet Society WordPress Template 
 *
 * The template for displaying Category Archive pages.
 *
 */

get_header(); ?>

<?php get_sidebar(); ?>

<div id="content">

				<?php

					$category_description = category_description();

					if ( ! empty( $category_description ) )

						echo '<div class="archive-meta">' . $category_description . '</div>';

				?>

			<h1 class="page-title"><?php
					printf( '%s', '<span>' . single_cat_title( '', false ) . '</span>' );
				?></h1>

				<?php
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo '<div class="archive-meta">' . $category_description . '</div>';
				?>

				<!-- Start the Loop. -->
				 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                 <div class="post">
                
                 <!-- Display the Title as a link to the Post's permalink. -->
                 <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        
                 <!-- Display the Post's Excerpt in a div box. -->
                 <div class="entry">
             <?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) { the_post_thumbnail(array(200,160), array("class" => "alignright post_thumbnail")); } ?>
                   <?php the_excerpt(); ?><br clear="all">
                          
                <div class="postmetadata">
                    Posted on <?php the_date('F j, Y'); ?> by <?php the_author(); ?><br>
                    Categories: <?php the_category(', ') ?><br>
                    <?php the_tags('Tags: ', ', ', '<br />'); ?>
                    <!-- | 
                    <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>-->
                </div>
				</div>
                 </div> <!-- closes the first div box -->
                
                 <!-- Stop The Loop (but note the "else:" - see next line). -->
                 <?php endwhile; else: ?>
                
                 <!-- The very first "if" tested to see if there were any Posts to -->
                 <!-- display.  This "else" part tells what do if there weren't any. -->
                 <p>Sorry, no posts matched your criteria.</p>
                 <div class="navigation"> <?php posts_nav_link('','','&laquo; Previous Page ') ?> | <?php posts_nav_link('',' Next Page &raquo;','') ?></div>
                 <!-- REALLY stop The Loop. -->
                 <?php endif; ?>

			</div><!-- #content -->

<?php get_footer(); ?>

