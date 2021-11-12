<?php
/**
 * Template (part) displaying image-only on attachments page.
 *
 * @package Developry
 * @subpackage Developry_Lite
 * @since 1.0
 * @version 1.0
 */

defined( 'ABSPATH' ) || exit;
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php $meta = wp_get_attachment_metadata(); ?>
<?php if ( ! empty( $meta['file'] ) ) : ?>
<article>
	<header class="content-header">
		<h1 class="content-title">
			<?php printf( esc_html__( 'Attachment : ', 'developry-lite' ) ); ?>
			<?php the_title(); ?>
			<hr />
			<small>
				<span class="font-weight-light">Uploaded to</span>
				<a href="<?php echo get_attachment_link( $post->post_parent ); ?>">
					<?php echo esc_html( get_the_title( $post->post_parent ) ); ?>
				</a>
			</small>
		</h1>
	</header><!-- /content-header -->

	<main class="content-main">
		<?php if ( ! empty( $post->post_excerpt ) ) : ?>
			<?php the_excerpt(); ?>
		<?php endif; ?>
		<p>
			<a href="<?php echo esc_url( wp_get_attachment_url() ); ?>" title="<?php the_title_attribute(); ?>" rel="attachment">
				<img src="<?php echo esc_url( wp_get_attachment_url( get_the_ID() ) );?>" alt="" class="img-fluid mx-auto d-block" />
			</a>
		</p>
	</main><!-- /content-main -->

	<aside class="content-aside">
		<p class="text-center w-100 mb-0">
			<?php printf( esc_html( 'This attchament was uploaded by', 'developry-lite' ) ); ?>
			<!-- post/page -->
			<!-- author -->
			by <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ) ); ?>">
				<?php echo esc_html( get_the_author_meta( 'display_name', get_the_author_meta( 'ID' ) ) ); ?>
			</a>
			<!-- date -->
			<?php printf( esc_html( 'on', 'developry-lite' ) ); ?>
			<a href="<?php echo esc_url( home_url( '/' ) ) . esc_html( get_the_time( 'Y/m' ) ); ?>">
				<?php the_time( 'F j, Y' ); ?>
			</a>
			<!-- time -->
			<?php printf( esc_html( 'at', 'developry-lite' ) ); ?>
			<?php the_time( 'h:m a' ); ?>
		</p>
	</aside><!-- content-aside -->

	<section id="comments" class="content-comments">
		<?php if ( comments_open() || get_comments_number() ) : ?>
			<?php comments_template(); ?>
		<?php else : ?>
			<p class="lead">
				<!-- Comments are disabled. -->
			</p>
		<?php endif; ?>
	</section><!-- /content-comments -->
</article>
<?php endif; ?>
<!-- TODO : show empty page if attachment media isn't an image (e.g. audio or video) -->
<?php endwhile; ?>
<?php endif; ?>
