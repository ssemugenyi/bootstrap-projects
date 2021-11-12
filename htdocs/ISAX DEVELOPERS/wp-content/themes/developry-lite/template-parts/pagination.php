<?php
/**
 * Template (part) displaying pagination on posts and pages.
 *
 * @package Developry
 * @subpackage Developry_Lite
 * @since 1.0
 * @version 1.0
 */

defined( 'ABSPATH' ) || exit;
?>

<?php if ( is_single() ) : ?>
	<?php
	$prev = get_previous_post( false, '', 'category' );
	$next = get_next_post( false, '', 'category' );
	?>
	<nav class="pagination">
		<?php if ( is_a( $prev, 'WP_Post' ) ) : ?>
			<a href="<?php echo esc_url( get_permalink( $prev->ID ) ); ?>" class="previous-link">
				<i class="oi oi-chevron-left"></i>
				<?php

				$post_title = esc_html( get_the_title( $prev->ID ) );

				if ( ! empty( $post_title ) ) {
					echo esc_html( get_the_title( $prev->ID ) );
				} else {
					printf( esc_html( 'Previous Post', 'developry-lite' ) );
				}
				?>
			</a>
		<?php endif; ?>
		<?php if ( is_a( $next, 'WP_Post' ) ) : ?>
			<a href="<?php echo esc_url( get_permalink( $next->ID ) ); ?>" class="next-link">
				<?php

				$post_title = esc_html( get_the_title( $next->ID ) );

				if ( ! empty( $post_title ) ) {
					echo esc_html( get_the_title( $next->ID ) );
				} else {
					printf( esc_html( 'Next Post', 'developry-lite' ) );
				}
				?>
				<i class="oi oi-chevron-right"></i>
			</a>
		<?php endif; ?>
	</nav><!-- /pagination -->
<?php else : ?>
	<nav class="pagination">
		<?php

		posts_nav_link(
			' ',
			'<i class="oi oi-chevron-left"></i> &nbsp; ' . sprintf( esc_html( 'Newer Posts', 'developry-lite' ) ),
			sprintf( esc_html( 'Older Posts', 'developry-lite' ) ) . ' &nbsp; <i class="oi oi-chevron-right"></i>'
		);
		?>
	</nav><!-- /pagination -->
<?php endif; ?>
