<?php
get_header();
?>


    <div class="callout large primary">
        <div class="row column text-center">
            <h1>Our Blog</h1>
        </div>
    </div>

    <div class="row">
        
        <div class="medium-8 columns">


            <section>
				<?php

				if ( have_posts() ):
					while ( have_posts() ) : the_post();
						?>
                        <article class="blog-post">
                            <header>
                                <h3><?php echo get_the_title(); ?>
                                    <small>Meta</small>
                                </h3>
								<?php if ( has_post_thumbnail() ) { ?>
                                    <a href="<?php the_permalink(); ?>">
										<?php echo the_post_thumbnail( 'large', [
											'class' => 'thumbnail',
											'title' => 'Feature image'
										] ); ?>
                                    </a>
								<?php } ?>
                            </header>

							<?php the_excerpt(); ?>

                            <footer class="callout">
                                <ul class="menu simple">
                                    <li><?php echo '<a  href="' . get_the_permalink() . '">' . get_the_title() . '</a>'; ?></li>
                                </ul>
                            </footer>

                        </article>
						<?php


					endwhile;

				else :
					_e( 'Sorry, no posts were found.', 'wpt' );
				endif;

				?>
            </section>
        </div>

        <div class="medium-3 columns">
            <aside>
				<?php get_sidebar(); ?>
            </aside>
        </div>

    </div>

<?php
get_footer();
?>