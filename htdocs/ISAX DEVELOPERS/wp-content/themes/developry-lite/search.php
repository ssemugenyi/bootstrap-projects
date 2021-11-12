<?php
/**
 * Template displaying search results content with pagination.
 *
 * @package Developry
 * @subpackage Developry_Lite
 * @since 1.0
 * @version 1.0
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>

<div id="body" class="body bg-white">
	<div class="container<?php if ( ! empty( $theme_options['container'] ) ) { echo esc_html( $theme_options['container'] ); } ?>">
		<div class="row">
			<div class="col-12">
				<main class="page-content">
					<header class="page-header">
						<h1 class="page-title">
							<?php printf( esc_html( 'Search Results', 'developry-lite' ) ); ?>
						</h1>
						<p class="lead">
							<?php printf( esc_html( 'Search Results for', 'developry-lite' ) ); ?>
							:
							<em>
								<?php echo get_search_query(); ?>
							</em>
						</p>
					</header><!-- /page-header -->
					<?php
					get_template_part( 'template-parts/content' );
					get_template_part( 'template-parts/pagination' );
					?>
				</main><!-- /page-content -->
			</div><!-- /col-12 -->
		</div><!-- /row -->
	</div><!-- /container -->
</div><!-- /body -->

<?php
get_footer();
?>
