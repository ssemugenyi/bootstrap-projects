<?php
/**
 * Add theme support for starter content for freshly installed WP.
 *
 * @package Developry
 * @subpackage Developry_Lite
 * @since 1.0
 * @version 1.0
 */

defined( 'ABSPATH' ) || exit;

	add_action(
		'after_setup_theme',
		'developry_theme_starter'
	);

	/**
	 * Attacha and populate starter pages, posts, images, widgets etc. with some default content
	 *
	 * @since 1.0.0
	 */
	function developry_theme_starter() {

		$lorem_ipsum = '<p>This is lead paragraph lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p><h2>This is a H2 Headline</h2><figure class="wp-caption alignleft"><img src="http://via.placeholder.com/300x300" alt="Placeholder" class="img-fluid" /><figcaption class="wp-caption-text">This is floating left image with caption</figcaption></figure><p>This is regular paragraph at vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p><h3>This is a H3 Headline</h3><p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><p><blockquote>This is a blockquote ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</blockquote></p><h5>This is a H5 Headline</h5><p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p><p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. <a href="/">Link at vero eos et accusam et justo</a> duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur.</p><p><a href="/" class="btn btn-primary">Primary Button...</a></p>';

		$starter_content = array(
			'widgets' => array(
				'sidebar-1' => array(
					'search',
					'text_about',
					'meta',
				),
				'footer-1' => array(
					'calendar',
				),
				'footer-2' => array(
					'archives',
					'categories',
				),
				'footer-3' => array(
					'recent-posts',
					'recent-comments',
				),
			),
			'posts' => array(
				'home' => array(
					'menu_order'   => 1,
					'post_name'    => 'home',
					'post_title'   => esc_html__( 'Hello, Developry World!', 'developry-lite' ),
					'post_content' => $lorem_ipsum,
					'post_excerpt' => esc_html__( 'Welcome to your site! This is your homepage, which is what most visitors will see when they come to your site for the first time.', 'developry-lite' ),
					'thumbnail'    => '{{image-home}}',
					'template'     => 'templates/fullwidth.php',
				),
				'about' => array(
					'menu_order'   => 2,
					'post_name'    => 'about',
					'post_title'   => esc_html__( 'About', 'developry-lite' ),
					'post_content' => 'The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn\'t listen. She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then...',
					'thumbnail'    => '{{image-home}}',
				),
				'blog' => array(
					'menu_order'    => 3,
					'post_name'     => 'blog',
					'post_title' 	=> esc_html__( 'Blog', 'developry-lite' ),
					'post_content'  => 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.',
					'thumbnail'     => '{{image-home}}',
				),
				'contact' => array(
					'menu_order'    => 4,
					'post_name'     => 'contact',
					'post_title' 	=> esc_html__( 'Contact', 'developry-lite' ),
					'post_content'  => 'Two driven jocks help fax my big quiz. Quick, Baz, get my woven flax jodhpurs! "Now fax quiz Jack! " my brave ghost pled. Five quacking zephyrs jolt my wax bed. Flummoxed by job, kvetching W. zaps Iraq. Cozy sphinx waves quart jug of bad milk. [contact-form-7 title="Contact form 1"]',
					'thumbnail'     => '{{image-home}}',
				),
				'archives' => array(
					'menu_order'   => 5,
					'post_name'    => 'archives',
					'post_type'    => 'page',
					'post_title'   => esc_html__( 'Archives', 'developry-lite' ),
					'post_content' => 'The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz.',
					'thumbnail'    => '{{image-home}}',
					'template'     => 'templates/archives.php',
				),
			),
			'attachments' => array(
				'image-home' => array(
					'post_name'    => 'home-featured-image',
					'post_title'   => esc_html__( 'Home', 'developry-lite' ),
					'post_content' => esc_html__( 'Home featured image.', 'developry-lite' ),
					'post_excerpt' => esc_html__( 'Home featured image.', 'developry-lite' ),
					'file'         => 'assets/img/placeholder.jpg',
				),
			),
			'options' => array(
				'show_on_front'  => 'page',
				'page_on_front'  => '{{home}}',
				'page_for_posts' => '{{blog}}',
			),
			'theme_mods' => array(),
			'nav_menus' => array(
				'header' => array(
					'name'  => esc_html__( 'Main Nav', 'developry-lite' ),
					'items' => array(
						'link_home',
						'page_about' => array(
							'type'      => 'post_type',
							'object'    => 'page',
							'object_id' => '{{about}}',
						),
						'page_blog'  => array(
							'type'      => 'post_type',
							'object'    => 'page',
							'object_id' => '{{blog}}',
						),
						'page_contact' => array(
							'type'      => 'post_type',
							'object'    => 'page',
							'object_id' => '{{contact}}',
						),
						'page_archives' => array(
							'type'      => 'post_type',
							'object'    => 'page',
							'object_id' => '{{archives}}',
						),
					),
				),
				'social' => array(
					'name'  => esc_html__( 'Social Nav', 'developry-lite' ),
					'items' => array(
						'link_facebook' => array(
							'title'     => esc_html__( 'Facebook', 'developry-lite' ),
							'url'       => 'https://facebook.com',
							'classes'   => 'icon icon-facebook',
						),
						'link_twitter' => array(
							'title'    => esc_html__( 'Twitter', 'developry-lite' ),
							'url'      => 'https://twitter.com',
							'classes'  => 'icon icon-twitter',
						),
						'link_youtube' => array(
							'title'    => esc_html__( 'YouTube', 'developry-lite' ),
							'url'      => 'https://youtube.com',
							'classes'  => 'icon icon-youtube',
						),
						'link_instagram' => array(
							'title'      => esc_html__( 'Instagram', 'developry-lite' ),
							'url'        => 'https://instagram.com',
							'classes'    => 'icon icon-instagram',
						),
						'link_github' => array(
							'title'   => esc_html__( 'Github', 'developry-lite' ),
							'url'     => 'https://github.com/krasenslavov/developry',
							'classes' => 'icon icon-github',
						),
						'link_linkedin' => array(
							'title'      => esc_html__( 'Linkedin', 'developry-lite' ),
							'url'        => 'https://linkedin.com',
							'classes'    => 'icon icon-linkedin',
						),
						'link_email' => array(
							'title'   => esc_html__( 'Email', 'developry-lite' ),
							'url'     => 'mailto:hello@me.com',
							'classes' => 'icon icon-email',
						),
					),
				),
			),
		);

		$starter_content = apply_filters(
			'developry_starter_content',
			$starter_content
		);

		add_theme_support(
			'starter-content',
			$starter_content
		);
	}
