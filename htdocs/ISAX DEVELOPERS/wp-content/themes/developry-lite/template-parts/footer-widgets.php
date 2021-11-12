<?php
/**
 * Template (part) displaying top area widgets on footer.
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
			<?php

			if ( is_active_sidebar( 'footer-1' )
				|| is_active_sidebar( 'footer-2' )
				|| is_active_sidebar( 'footer-3' ) ) :
			?>
				<div class="col-12 col-md-4">
					<?php dynamic_sidebar( 'footer-1' ); ?>
				</div>
				<div class="col-12 col-md-4">
					<?php dynamic_sidebar( 'footer-2' ); ?>
				</div>
				<div class="col-12 col-md-4">
					<?php dynamic_sidebar( 'footer-3' ); ?>
				</div>
			<?php else : ?>
				<div class="col-12 col-md-4">
					<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
				</div>
				<div class="col-12 col-md-4">
					<?php the_widget( 'WP_Widget_Recent_Comments' ); ?>
				</div>
				<div class="col-12 col-md-4">
					<?php the_widget( 'WP_Widget_Meta' ); ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section><!-- /footer-widgets -->
