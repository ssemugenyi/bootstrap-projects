<?php
/**
 * Template displaying 404 page not found with links and search form.
 *
 * @package Developry
 * @subpackage Developry_Lite
 * @since 1.0
 * @version 1.0
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>

<div id="body" class="body bg-white pt-5">
	<div class="pt-5 container<?php if ( ! empty( $theme_options['container'] ) ) { echo esc_html( $theme_options['container'] ); } ?>">
		<div class="row">
			<div class="col-12">
				<header class="page-header text-center">
					<h1 class="page-title">
						<?php printf( esc_html( 'Oops! That page can&rsquo;t be found.', 'developry-lite' ) ); ?>
						<hr />
					</h1>
					<p class="lead">
						<?php printf( esc_html( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'developry-lite' ) ); ?>
					</p>
				</header><!-- /page-header -->

				<main class="page-content">
					<?php get_template_part( 'template-parts/content', 'none' ); ?>
				</main><!-- /page-content -->
			</div><!-- /col-12 -->
		</div><!-- /row -->
	</div><!-- /container -->
</div><!-- /body -->

<?php
get_footer();
?>
