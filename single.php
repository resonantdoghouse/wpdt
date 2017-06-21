<?php
get_header();
?>

    <div class="medium-8 columns">

        <h1><?php echo get_the_title(); ?></h1>


        <section>
			<?php

			if ( have_posts() ):
				while ( have_posts() ) : the_post();
					?>
                    <article>
						<?php the_content(); ?>
                    </article>
					<?php
				endwhile;

			else :
				_e( 'Sorry, no posts were found.', 'wpt' );
			endif;

			?>
        </section>

    </div>

    <div class="medium-3 columns" data-sticky-container>
        <aside class="sticky" data-sticky data-margin-top="8">
			<?php get_sidebar(); ?>
        </aside>
    </div>


<?php
get_footer();
?>