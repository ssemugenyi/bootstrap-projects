<?php
/**
 * Template displaying single post content.
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
if ( ! empty( $theme_options['featured_image'] )
	&& 'show' === $theme_options['featured_image'] ) {
	get_template_part( 'template-parts/featured', 'image-header' );
}
?>
</div>

<div id="body" class="body <?php echo ( ! empty( $theme_options['featured_image'] ) && 'show' === $theme_options['featured_image'] ) ? 'm:180' : ''; ?>">
	<div class="container<?php if ( ! empty( $theme_options['container'] ) ) { echo esc_html( $theme_options['container'] ); } ?>">
		<div class="row bg-white">
			<div class="col-12 <?php echo ( 'no-sidebar' !== $theme_options['sidebar'] ) ? 'col-md-8' : ''; ?>">
				<main class="page-content">
					<?php get_template_part( 'template-parts/content', 'post' ); ?>
				</main><!-- /page-content -->
			</div><!-- /col-12 -->
			<div class="col-12 col-md-4 bg-light <?php echo ( 'no-sidebar' !== $theme_options['sidebar'] ) ?  esc_html( $theme_options['sidebar'] ) : 'd-none'; ?>">
				<?php get_sidebar(); ?>
			</div><!-- /col-12 -->
		</div><!-- /row -->
	</div><!-- /container -->
</div><!-- /body -->

<?php
get_footer();
?>
