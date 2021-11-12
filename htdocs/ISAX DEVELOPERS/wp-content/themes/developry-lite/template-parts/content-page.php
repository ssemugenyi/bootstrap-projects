<?php
/**
 * Template (part) displaying content on pages.
 *
 * @package Developry
 * @subpackage Developry_Lite
 * @since 1.0
 * @version 1.0
 */

defined( 'ABSPATH' ) || exit;
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article>
	<?php if ( ! is_page_template( 'templates/fullwidth.php' ) && ! is_front_page() ) : ?>
		<header class="content-header">
			<h1 class="content-title">
				<?php the_title(); ?>
			</h1>
		</header><!-- /content-header -->
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
<?php endwhile; ?>
<?php endif; ?>
