<?php
/**
 * Template Name: Full Width (no sidebar)
 *
 * Template (custom) displaying full width page without sidebar.
 *
 * @package Developry
 * @subpackage Developry_Lite
 * @since 1.0
 * @version 1.0
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>

<div id="cover-selector">
<?php
if ( ! empty( $theme_options['featured_image'] ) && 'show' === $theme_options['featured_image'] ) {
	get_template_part( 'template-parts/featured', 'image-header' );
}
?>
</div>

<div id="body" class="body <?php echo ( ! empty( $theme_options['featured_image'] ) && 'show' === $theme_options['featured_image'] ) ? 'm:screen' : ''; ?>">
	<div class="container<?php if ( ! empty( $theme_options['container'] ) ) { echo esc_html( $theme_options['container'] ); } ?>">
		<div class="row bg-white">
			<div class="col-12">
				<main class="page-content">
					<?php
					get_template_part( 'template-parts/content', 'page' );
					?>
				</main><!-- /page-content -->
			</div><!-- /col-12 -->
		</div><!-- /row -->
	</div><!-- /container -->
</div><!-- /body -->

<?php
get_footer();
?>
