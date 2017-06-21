<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

	<?php wp_head(); ?>

</head>
<body <?php body_class( 'c-text' ); ?> data-feedly-mini="yes">


<header class="container">


    <nav class="nav">
        <div class="nav-left">
			<?php echo '<a class="nav-item" href="' . get_home_url() . '">' . get_bloginfo( 'name' ) . '</a>'; ?>
        </div>

		<?php if ( has_nav_menu( 'primary' ) ) :
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'menu_class'     => 'nav-right',
				'container'      => false,
				'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>'
			) );
		endif; ?>
    </nav>

</header>

