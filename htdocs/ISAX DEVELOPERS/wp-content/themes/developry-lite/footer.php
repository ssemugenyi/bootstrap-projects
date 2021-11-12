<?php
/**
 * Template (part) displaying common footer area.
 *
 * @package Developry
 * @subpackage Developry_Lite
 * @since 1.0
 * @version 1.0
 */

defined( 'ABSPATH' ) || exit;

?>
	<footer class="footer bg-light">
		<?php if ( ! is_page_template( 'templates/fullwidth.php' ) || ! is_front_page() ) : ?>
			<?php get_template_part( 'template-parts/footer', 'widgets' ); ?>
		<?php endif; ?>
		<?php get_template_part( 'template-parts/footer', 'copyright' ); ?>
		<section class="text-center">
			<?php

				wp_nav_menu(
					array(
						'menu'           => sprintf( esc_html__( 'Social Nav', 'developry-lite' ) ),
						'theme_location' => 'social-nav',
						'menu_class'     => 'social-nav-menu mt-5',
						'fallback_cb'    => false,
					)
				);
			?>
		</section>
		
	</footer><!-- /footer -->
	<a href="#scrolltop" class="scrolltop">
		<i class="oi oi-chevron-top"></i>
	</a>
	<?php wp_footer();  ?>
</body>
</html>
