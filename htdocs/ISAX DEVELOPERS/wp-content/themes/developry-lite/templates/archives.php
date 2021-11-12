<?php
/**
 * Template Name: Archives
 *
 * Template (custom) displaying custom archives page with links and search form.
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

<div id="body" class="body <?php echo ( ! empty( $theme_options['featured_image'] ) && 'show' === $theme_options['featured_image'] ) ? 'm:360' : ''; ?>">
	<div class="container<?php if ( ! empty( $theme_options['container'] ) ) { echo esc_html( $theme_options['container'] ); } ?>">
		<div class="row bg-white">
			<div class="col-12">
				<main class="page-content">
					<header class="page-header">
						<h1 class="content-title">
							<?php printf( esc_html__( 'Archives', 'developry-lite' ) ); ?>
							<hr />
						</h1>
						<p class="lead">
							<?php printf( esc_html__( 'Categorized daily, monthy and yearly archives.', 'developry-lite' ) ); ?>
						</p>
					</header><!-- /page-header -->
					<?php
					get_template_part( 'template-parts/content', 'none' );
					?>
				</main><!-- /page-content -->
			</div><!-- /col-12 -->
		</div><!-- /row -->
	</div><!-- /container -->
</div><!-- /body -->

<?php
get_footer();
?>
