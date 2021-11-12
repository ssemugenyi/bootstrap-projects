<?php
/**
 * Template displaying media attchments (image only) with some additional meta.
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

<div id="body" class="body bg-white <?php echo ( ! empty( $theme_options['featured_image'] ) && 'show' === $theme_options['featured_image'] ) ? 'm:360' : ''; ?>">
	<div class="container<?php if ( ! empty( $theme_options['container'] ) ) { echo esc_html( $theme_options['container'] ); } ?>">
		<div class="row">
			<div class="col-12 <?php echo ( 'no-sidebar' !== $theme_options['sidebar'] ) ? 'col-md-8' : ''; ?>">
				<main class="page-content">
					<?php get_template_part( 'template-parts/content', 'attachment' ); ?>
				</main><!-- /main-content -->
			</div><!-- /col-12 -->
			<div class="col-12 col-md-4 bg-light <?php echo ( 'no-sidebar' !== $theme_options['sidebar'] ) ?  esc_html( $theme_options['sidebar'] ) : 'd-none'; ?>">
				<?php get_sidebar(); ?>
			</div><!-- /col-12 -->
		</div><!-- /row -->
	</div><!-- container -->
</div><!-- /body -->

<?php
get_footer();
?>
