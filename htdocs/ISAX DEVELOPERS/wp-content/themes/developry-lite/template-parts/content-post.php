<?php
/**
 * Template (part) displaying content on singles.
 *
 * @package Developry
 * @subpackage Developry_Lite
 * @since 1.0
 * @version 1.0
 */

defined( 'ABSPATH' ) || exit;
?>

<?php $theme_options = get_theme_mod( 'developry_theme_options' ); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article>
	<header class="content-header">
		<h1 class="content-title">
			<?php the_title(); ?>
			<small class="text-muted">
				<?php the_time( 'F j, Y' ); ?> by
				<?php echo esc_html( get_the_author_meta( 'display_name', get_the_author_meta( 'ID' ) ) ); ?>
			</small>
		</h1>
	</header><!-- /content-header -->

	<?php if ( 'show' !== $theme_options['featured_image'] && has_post_thumbnail() ) : ?>
		<p>
			<img src="<?php echo esc_url( get_the_post_thumbnail_url() ); ?>" class="img-fluid mx-auto d-block" />
		</p>
	<?php endif; ?>

	<main class="content-main">
		<?php

			the_content();

			wp_link_pages(
				array(
					'before' => '<nav class="lead my-3 p-3 bg-light text-center">Pages &mdash; ',
					'after'  => '</nav>',
				)
			);
		?>
	</main><!-- /content-main -->

	<aside class="content-aside">
		<!-- gravatar -->
		<img src="<?php echo esc_url( get_avatar_url( get_the_author_meta( 'ID' ) ) ); ?>" alt="" class="" />
		<p>
			<?php printf( esc_html( 'This post was published by', 'developry-lite' ) ); ?>
			<!-- author -->
			<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ) ); ?>">
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
			<br />
			<!-- categories -->
			<?php printf( esc_html( 'Posted in', 'developry-lite' ) ); ?>
			<?php the_category( ', ' ); ?>.
			<!-- tags -->
			<?php $tags = get_the_tags(); ?>
			<?php if ( ! empty( $tags ) ) : ?>
				<?php printf( esc_html( ' Tagged with', 'developry-lite' ) ); ?>
				<?php the_tags( '', ', ' ); ?>.
				<br />
			<?php endif; ?>
			<!-- comments -->
			<?php printf( esc_html( 'There\'s', 'developry-lite' ) ); ?>
			<a href="<?php the_permalink(); ?>#comments">
				<?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
			</a>
			posted.
			<?php edit_post_link( 'Edit...', '<button type="button" class="btn btn-sm btn-outline-primary bg-light text-dark post-edit-link"><i class="oi oi-pencil"></i> ', '</button>	' ); ?>
		</p>
	</aside><!-- /content-aside -->

	<section id="comments" class="content-comments">
		<?php if ( comments_open() || get_comments_number() ) : ?>
			<?php comments_template(); ?>
		<?php else : ?>
			<p class="lead">
				<!-- Comments are disabled. -->
			</p>
		<?php endif; ?>
	</section><!-- /content-comments -->

	<footer class="content-navigtion">
		<?php get_template_part( 'template-parts/pagination', 'post' ); ?>
	</footer><!-- /content-navigation -->
</article>
<?php endwhile; ?>
<?php endif; ?>
