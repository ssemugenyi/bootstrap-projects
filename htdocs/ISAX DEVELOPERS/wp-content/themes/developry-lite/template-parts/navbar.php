<?php
/**
 * Template (part) displaying navbar with logo, menu and search on header.
 *
 * @package Developry
 * @subpackage Developry_Lite
 * @since 1.0
 * @version 1.0
 */

defined( 'ABSPATH' ) || exit;
?>

<nav class="navbar navbar-dark bg-primary navbar-expand-lg">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'description' ); ?>" class="navbar-brand">
		<?php if ( function_exists( 'the_custom_logo' ) && the_custom_logo() ) : ?>
			<?php the_custom_logo(); ?>
		<?php elseif ( true === display_header_text() ) : ?>
			<?php bloginfo( 'name' ); ?>
		<?php else : ?>
			<!-- do nothing -->
		<?php endif; ?>
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="toggle navigation">
		<i class="oi oi-menu"></i>
	</button>
	<div id="navbar-collapse" class="collapse navbar-collapse d-xl-flex d-lg-flex">
		<?php
		if ( has_nav_menu( 'Main Nav' ) ) {

			wp_nav_menu(
				array(
					'menu'           => 'Main Nav',
					'theme_location' => 'main-nav',
					'menu_class'     => 'main-nav-menu',
					'fallback_cb'    => false,
				)
			);
		} else {

			wp_nav_menu(
				array(
					'theme_location' => 'main-nav',
					'menu_class'     => 'main-nav-menu',
				)
			);
		}

		get_template_part( 'template-parts/searchform' );
		?>
	</div>
</nav><!-- /navbar -->
