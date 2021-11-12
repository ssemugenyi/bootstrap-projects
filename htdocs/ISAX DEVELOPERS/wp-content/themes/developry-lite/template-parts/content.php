<?php
/**
 * Template (part) displaying content on index / blog.
 *
 * @package Developry
 * @subpackage Developry_Lite
 * @since 1.0
 * @version 1.0
 */

defined( 'ABSPATH' ) || exit;
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php $theme_options = get_theme_mod( 'developry_theme_options' ); ?>

<article id="post-<?php the_ID(); ?>" class="content <?php echo esc_html( implode( ' ', get_post_class() ) ); ?>">
	<header class="content-header">
		<h2 class="content-title">
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
			<br />
			<span class="lead">
				in <?php the_category( ', ' ); ?>
			</span>
		</h2>
		<?php if ( has_post_thumbnail() ) : ?>
			<p>
				<a href="<?php the_permalink(); ?>">
					<img src="<?php echo esc_url( get_the_post_thumbnail_url() ); ?>" class="img-fluid mx-auto d-block" />
				</a>
			</p>
		<?php endif;?>
	</header><!-- /content-header -->

	<main class="content-main">
		<p class="lead">
			<?php if ( '' !== get_the_excerpt() ) : ?>
				<?php echo esc_html( get_the_excerpt() ); ?>
				<br />
			<?php endif; ?>
			<a href="<?php the_permalink(); ?>" class="mt-3 d-block">
				<?php printf( esc_html( 'Continue reading', 'developry-lite' ) ); ?>
			</a>
		</p>
		<?php // the_content(); // Uncomment this line and remove the class='lead' above if you need full content showing in /blog. ?>
	</main><!-- /content-main -->

	<?php if ( is_archive() ) : ?>
		<aside class="content-aside">
			<p class="text-center w-100 mb-0">
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
				<!-- categories -->
				<?php printf( esc_html( 'Posted in', 'developry-lite' ) ); ?>
				<?php the_category( ', ' ); ?>.
				<!-- tags -->
				<?php $tags = get_the_tags(); ?>
				<?php if ( ! empty( $tags ) ) : ?>
					<?php printf( esc_html( ' Tagged with', 'developry-lite' ) ); ?>
					<?php the_tags( '', ', ' ); ?>.
				<?php endif; ?>
			</p>
		</aside><!-- content-aside -->
	<?php else : ?>
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
		</aside><!-- content-aside -->
	<?php endif; ?>
</article><!-- /post -->
<?php endwhile; ?>
<?php endif; ?>
