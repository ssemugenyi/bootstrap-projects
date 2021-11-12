<?php
/**
 * Template (part) displaying cover component on posts and pages.
 *
 * @package Developry
 * @subpackage Developry_Lite
 * @since 1.0
 * @version 1.0
 */

defined( 'ABSPATH' ) || exit;
?>

<?php if ( has_post_thumbnail() ) : ?>
<section class="cover" style="background-image: url(<?php echo esc_url( get_the_post_thumbnail_url() ); ?>);">
<?php else : ?>
<section class="cover" style="background-image: url(<?php echo esc_url( get_header_image() ); ?>);">
<?php endif; ?>
	<div class="cover-overlay"></div>
	<?php if ( is_page_template( 'templates/fullwidth.php' ) || is_front_page() ) : ?>
		<a href="#scrolldown" class="scrollbody">
			<i class="oi oi-chevron-bottom"></i>
		</a>
		<div class="cover-body">
			<h1><?php the_title(); ?></h1>
			<h4><?php echo esc_html( the_excerpt() ); ?></h4>
		</div><!-- /cover-body -->
	<?php endif; ?>
</section><!-- /cover -->
