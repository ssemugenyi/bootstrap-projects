<?php
/**
 * Template (part) displaying bottom area on footer.
 *
 * @package Developry
 * @subpackage Developry_Lite
 * @since 1.0
 * @version 1.0
 */

defined( 'ABSPATH' ) || exit;
?>

<section>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php if ( is_active_sidebar( 'copyright-1' ) ) : ?>
					<div class="row">
						<div class="col-12 col-md-6">
							<div class="text-xl-left text-lg-left text-md-left text-sm-center text-center">
								<?php dynamic_sidebar( 'copyright-1' ); ?>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<p class="text-xl-right text-lg-right text-md-right text-sm-center text-center">
							<?php printf( esc_html__( 'Proudly powered by', 'developry-lite' ) ); ?> <a href="https://wordpress.org"><?php printf( esc_html__( 'WordPress', 'developry-lite' ) ); ?></a>.
							<?php printf( esc_html__( 'Built with', 'developry-lite' ) ); ?> <a href="<?php echo esc_url( DOCUMENTATION_URL ); ?>"><?php printf( esc_html__( 'Developry', 'developry-lite' ) ); ?></a> theme.
							</p>
						</div>
					</div>
				<?php else : ?>
					<p class="text-center">
						&copy; <?php echo esc_html( date( 'Y' ) ); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>. <?php printf( esc_html__( 'All rights reserved.', 'developry-lite' ) ); ?>
						<br />
						<?php printf( esc_html__( 'Powered by', 'developry-lite' ) ); ?> <a href="https://wordpress.org"><?php printf( esc_html__( 'WordPress', 'developry-lite' ) ); ?></a>.
						<br />
						<?php printf( esc_html__( 'Built with', 'developry-lite' ) ); ?> <a href="<?php echo esc_url( DOCUMENTATION_URL );?>"><?php printf( esc_html__( 'Developry Lite', 'developry-lite' ) ); ?></a> theme.
					</p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section><!-- /footer-copyright -->
