<?php
get_header();
?>

    <section class="hero is-primary">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
					<?php echo get_the_title(); ?>
                </h1>

            </div>
        </div>
    </section>


    <section class="section">
        <div class="container">
			<?php

			if ( have_posts() ):
				while ( have_posts() ) : the_post();


					the_content();

				endwhile;

			else :
				_e( 'Sorry, no posts were found.', 'wpt' );
			endif;

			?>

            <aside>
				<?php get_sidebar(); ?>
            </aside>
        </div>
    </section>


<?php
get_footer();
?>