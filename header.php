<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

	<?php wp_head(); ?>

</head>
<body <?php body_class( 'c-text' ); ?> data-feedly-mini="yes">


<header class="header">

    <nav class="top-bar">
        <div class="top-bar-title">
			<?php echo '<a class="pure-menu-heading pure-menu-link" href="' . get_home_url() . '">' . get_bloginfo( 'name' ) . '</a>'; ?>
        </div>

        <div class="top-bar-right">
		<?php if ( has_nav_menu( 'primary' ) ) :
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'menu_class'     => 'menu',
				'container'      => false
			) );
		endif; ?>
        </div>
    </nav>

</header>



