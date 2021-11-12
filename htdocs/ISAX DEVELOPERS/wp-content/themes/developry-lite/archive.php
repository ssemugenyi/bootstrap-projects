<?php
/**
 * Template displaying archive posts/pages for author, category, tag & date.
 *
 * @package Developry
 * @subpackage Developry_Lite
 * @since 1.0
 * @version 1.0
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>

<div id="body" class="body bg-white mt-5">
	<div class="container pt-5 <?php if ( ! empty( $theme_options['container'] ) ) { echo esc_html( $theme_options['container'] ); } ?>">
		<div class="row">
			<div class="col-12">
				<header class="page-header text-center">
					<!-- author -->
					<?php if ( is_author() ) : ?>
						<aside class="content-aside">
							<img src="<?php echo esc_url( get_avatar_url( get_the_author_meta( 'ID' ) ) ); ?>" alt="<?php echo esc_html( get_the_author_meta( 'display_name' ) ); ?>" class="img-fluid" />
							<div class="content-author">
								<h3 class="page-title">
									<?php
									printf( esc_html( 'Author', 'developry-lite' ) );
									echo ' : ' . esc_html( get_the_author_meta( 'display_name' ) );
									?>
								</h3>
								<p class="lead">
									<?php echo esc_html( get_the_author_meta( 'description' ) ); ?>
								</p>
							</div>
						</aside>
					<!-- tag -->
					<!-- category -->
					<?php elseif ( is_category() ) : ?>
						<h1 class="page-title">
							<?php echo esc_html( get_the_archive_title() ); ?>
							<hr />
						</h1>
						<?php $description = term_description(); ?>
						<?php if ( ! empty( $description ) ) : ?>
							<p class="lead">
								<?php echo esc_html( term_description() ); ?>
							</p>
						<?php endif; ?>
					<?php elseif ( is_tag() ) : ?>
						<h1 class="page-title">
							<?php echo esc_html( get_the_archive_title() ); ?>
							<hr />
						</h1>
						<?php $description = term_description(); ?>
						<?php if ( ! empty( $description ) ) : ?>
							<p class="lead">
								<?php echo esc_html( term_description() ); ?>
							</p>
						<?php endif; ?>
					<!-- calendar day -->
					<?php elseif ( is_day() ) : ?>
						<h1 class="page-title">
							<?php echo esc_html( get_the_archive_title() ); ?>
							<hr />
						</h1>
						<p class="lead">
							<?php printf( esc_html( 'Below are all the posts archived for the day.', 'developry-lite' ) ); ?>
						</p>
					<!-- calendar month -->
					<?php elseif ( is_month() ) : ?>
						<h1 class="page-title">
							<?php echo esc_html( get_the_archive_title() ); ?>
							<hr />
						</h1>
						<p class="lead">
							<?php printf( esc_html( 'Below are all the posts archived for the month.', 'developry-lite' ) ); ?>
						</p>
					<!-- calendar year -->
					<?php elseif ( is_year() ) : ?>
						<h1 class="page-title">
							<?php echo esc_html( get_the_archive_title() ); ?>
							<hr />
						</h1>
						<p class="lead">
							<?php printf( esc_html( 'Below are all the posts archived for the year.', 'developry-lite' ) ); ?>
						</p>
					<?php endif; ?>
				</header><!-- /page-header -->

				<main class="page-content">
					<div class="text-center">
						<?php get_template_part( 'template-parts/content' ); ?>
					</div>
					<?php get_template_part( 'template-parts/pagination' ); ?>
				</main><!-- /page-content -->
			</div><!-- /col-12 -->
		</div><!-- /row -->
	</div><!-- /container -->
</div><!-- /body -->

<?php
get_footer();
?>
