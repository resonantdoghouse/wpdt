<?php
get_header();
?>


<?php

if ( have_posts() ):
	while ( have_posts() ) : the_post();

		echo '<h1>' . get_the_title() . '</h1>';

		the_content();


	endwhile;

else :
	_e( 'Sorry, no posts were found.', 'wpt' );
endif;

?>

    <aside>
		<?php get_sidebar(); ?>
    </aside>


<?php
get_footer();
?>