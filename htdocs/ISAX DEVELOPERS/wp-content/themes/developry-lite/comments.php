<?php
/**
 * Template (part) displaying posts/pages comments with form.
 *
 * @package Developry
 * @subpackage Developry_Lite
 * @since 1.0
 * @version 1.0
 */

defined( 'ABSPATH' ) || exit;

if ( post_password_required() ) {

	return;
}
?>

<?php if ( have_comments() ) : ?>
	<header class="comment-header">
		<?php if ( '0' === get_comments_number() ) : ?>
			<h2 class="comment-title">
				<?php printf( esc_html( 'No thoughts yet. Be the first to leave a comment and start a discussion.', 'developry-lite' ) ); ?>
			</h2>
		<?php elseif ( '1' === get_comments_number() ) : ?>
			<h2 class="comment-title">
				<?php

					printf( esc_html( 'One thought on &ldquo;', 'developry-lite' ) );
					echo esc_html( get_the_title() ) . '&rdquo;';
				?>
			</h2>
		<?php else : ?>
			<h2 class="comment-title">
				<?php

					echo esc_html( get_comments_number() );
					printf( esc_html( ' thoughts on &ldquo;', 'developry-lite' ) );
					echo esc_html( get_the_title() ) . '&rdquo;';
				?>
			</h2>
		<?php endif; ?>
	</header><!-- /comment header -->

	<main class="comment-main">
		<ol class="comment-list">
			<?php

				wp_list_comments(
					array(
						'style'      => 'ol',
						'short_ping' => true,
						'reply_text' => esc_html( 'REPLY...', 'developry-lite' ),
					)
				);
			?>
		</ol><!-- /comment-list -->
		<?php

			the_comments_pagination(
				array(
					'prev_text' => '<i class="oi oi-chevron-left"></i> &nbsp; ' . sprintf( esc_html( 'Previous Comments', 'developry-lite' ) ),
					'next_text' => sprintf( esc_html( 'Next Comments', 'developry-lite' ) ) . ' &nbsp; <i class="oi oi-chevron-right"></i>',
				)
			);
		?>
	</main><!-- /comment main -->

	<?php if ( ! comments_open() ) : ?>
		<section class="comment-more">
			<p class="lead">
				<?php printf( esc_html( 'Comments are closed.', 'developry-lite' ) ); ?>
			</p>
		</section><!-- /comment more -->
	<?php endif; ?>
<?php endif; ?>
<?php comment_form(); ?>
