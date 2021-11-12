<?php
/**
 * Template (part) displaying widget on archives and 404s pages.
 *
 * @package Developry
 * @subpackage Developry_Lite
 * @since 1.0
 * @version 1.0
 */

defined( 'ABSPATH' ) || exit;
?>

<?php if ( is_page_template( 'template/archives.php' ) ) : ?>
	<section>

		<div class="row">
			<div class="col-12">
				<p>
					<?php the_widget( 'WP_Widget_Search' ); ?>
				</p>
				<br />
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-md-4">
				<?php the_widget( 'WP_Widget_Calendar' ); ?>
			</div>
			<div class="col-12 col-md-8">
				<div class="row">
					<div class="col-12 col-md-6">
						<?php the_widget( 'WP_Widget_Archives' ); ?>
					</div>
					<div class="col-12 col-md-6">
						<?php the_widget( 'WP_Widget_Categories' ); ?>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>
					</div>
				</div>
			</div>
		</div>
	</section><!-- /content-none-archive-wdigets -->
<?php else : ?>
	<section>
		<div class="row">
			<div class="col-12">
				<p>
					<?php the_widget( 'WP_Widget_Search' ); ?>
				</p>
				<br />
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-md-4">
				<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
			</div>
			<div class="col-12 col-md-4">
				<?php the_widget( 'WP_Widget_Recent_Comments' ); ?>
			</div>
			<div class="col-12 col-md-4">
				<?php the_widget( 'WP_Widget_Pages' ); ?>
			</div>
		</div>
	</section><!-- /content-none-post-widgets -->
<?php endif; ?>
