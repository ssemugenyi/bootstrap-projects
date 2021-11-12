<?php
/**
 * ** WORK IN PROGRESS **
 *
 * Basic rough draft of the custom theme features.
 * Most features are included to the WP Customizer area under Theme Options panel.
 *
 * @package Developry
 * @subpackage Developry_Lite
 * @since 1.0
 * @version 1.0
 */

defined( 'ABSPATH' ) || exit;

define( 'DEVELOPRY_DOCUMENTATION_URL', 'https://developry.com/developry' );

/**
 * Attach WP admin notice with link to the theme documentation page.
 *
 * @since 1.0.0
 * @return void
 */
function developry_theme_documentation() {

	$user_id = get_current_user_id();

	if ( ! get_user_meta( $user_id, 'developry_theme_documentation_panel_dismissed' ) ) {

		echo sprintf(
			'<div class="notice notice-info is-dismissible"><p><strong><big>%s</big></strong><br />%s<a href="' . esc_url( DEVELOPRY_DOCUMENTATION_URL ) . '" target="_blank" class="button button-primary button-large">%s</a><br /><a href="?dismiss-documentation-notice"><strong>Dismiss this notice</strong></a></p></div>',
			esc_html( 'Thank you for choosing Developry! ' , 'developry-lite' ),
			esc_html( 'For additonal information, usage, features and demos take a look at the ' , 'developry-lite' ),
			esc_html( 'Documentation' , 'developry-lite' )
		);
	}
}

add_action( 'admin_notices', 'developry_theme_documentation' );

/**
 * Allow the user to able to dismiss the notice panel.
 *
 * @since 1.0.0
 * @return void
 */
function developry_theme_documentation_dismissed() {

	$user_id = get_current_user_id();

	if ( isset( $_GET['dismiss-documentation-notice'] ) ) {

		add_user_meta( $user_id, 'developry_theme_documentation_panel_dismissed', 'true', true );
	}
}

add_action( 'admin_init', 'developry_theme_documentation_dismissed' );

/**
 * Attach/configure the main Theme Option panel in WP Customizer.
 *
 * @since 1.0.0
 * @param object $wp_customize WP Customizer.
 * @return void
 */
function developry_theme_options( $wp_customize ) {

	$wp_customize->add_section( 'developry_theme_options',
		array(
			'priority' 	  => 181,
			'title'    	  => sprintf( esc_html( 'Theme Options', 'developry-lite' ) ),
			'description' => sprintf(
				'<strong>%s</strong><br />%s',
				esc_html( 'Customize your Developry theme', 'developry-lite' ),
				esc_html( 'By changing the default options below you will see the results in the preview window.', 'developry-lite' )
			),
			'description_hidden' => true,
		)
	);
}

add_action( 'customize_register', 'developry_theme_options' );


/**
 * Attach/configure Bootswatch stylesheets option in WP Customizer > Theme Options.
 *
 * @since 1.0.0
 * @param object $wp_customize WP Customizer.
 * @return void
 */
function developry_theme_options_bootstrap_theme( $wp_customize ) {

	/**
	 * Theme Bootswatch option added to WP Customizer > Theme Options
	 *
	 * @since 1.0.0
	 * @access public
	 */
	class Developry_Theme_Bootswatch extends WP_Customize_Control {

		/**
		 * WP Customizer field type.
		 *
		 * @since  1.0.0
		 * @access public
		 * @var string $type WP Customizer field type.
		 */
		public $type = 'select';

		/**
		 * Print out the custom option HTML structure.
		 *
		 * @since 1.0.0
		 * @access public
		 * @return void
		 */
		public function render_content() {

			$option = $this->value();
		?>
			<label class="customize-control-title">
				<?php echo esc_html( $this->label ); ?>
			</label>
			<select class="customize-control" <?php $this->link(); ?>>
				<option value="skeleton" <?php if ( 'skeleton' === $option ) : ?>selected<?php endif; ?>>
					<?php printf( esc_html( 'Skeleton (default)', 'developry-lite' ) ); ?>
				</option>
				<option value="cerulean" <?php if ( 'cerulean' === $option ) : ?>selected<?php endif; ?>>
					Cerulean
				</option>
				<option value="cosmo" <?php if ( 'cosmo' === $option ) : ?>selected<?php endif; ?>>
					Cosmo
				</option>
				<option value="cyborg" <?php if ( 'cyborg' === $option ) : ?>selected<?php endif; ?>>
					Cyborg
				</option>
				<option value="darkly" <?php if ( 'darkly' === $option ) : ?>selected<?php endif; ?>>
					Darkly
				</option>
				<option value="flatly" <?php if ( 'flatly' === $option ) : ?>selected<?php endif; ?>>
					Flatly
				</option>
				<option value="journal" <?php if ( 'journal' === $option ) : ?>selected<?php endif; ?>>
					Journal
				</option>
				<option value="litera" <?php if ( 'litera' === $option ) : ?>selected<?php endif; ?>>
					Litera
				</option>
				<option value="lumen" <?php if ( 'lumen' === $option ) : ?>selected<?php endif; ?>>
					Lumen
				</option>
				<option value="lux" <?php if ( 'lux' === $option ) : ?>selected<?php endif; ?>>
					Lux
				</option>
				<option value="materia" <?php if ( 'materia' === $option ) : ?>selected<?php endif; ?>>
					Materia
				</option>
				<option value="minty" <?php if ( 'minty' === $option ) : ?>selected<?php endif; ?>>
					Minty
				</option>
				<option value="pulse" <?php if ( 'pulse' === $option ) : ?>selected<?php endif; ?>>
					Pulse
				</option>
				<option value="sandstone" <?php if ( 'sandstone' === $option ) : ?>selected<?php endif; ?>>
					Sandstone
				</option>
				<option value="simplex" <?php if ( 'simplex' === $option ) : ?>selected<?php endif; ?>>
					Simplex
				</option>
				<option value="sketchy" <?php if ( 'sketchy' === $option ) : ?>selected<?php endif; ?>>
					Sketchy
				</option>
				<option value="slate" <?php if ( 'slate' === $option ) : ?>selected<?php endif; ?>>
					Slate
				</option>
				<option value="solar" <?php if ( 'solar' === $option ) : ?>selected<?php endif; ?>>
					Solar
				</option>
				<option value="spacelab" <?php if ( 'spacelab' === $option ) : ?>selected<?php endif; ?>>
					Spacelab
				</option>
				<option value="superhero" <?php if ( 'superhero' === $option ) : ?>selected<?php endif; ?>>
					Superhero
				</option>
				<option value="united" <?php if ( 'united' === $option ) : ?>selected<?php endif; ?>>
					United
				</option>
				<option value="yeti" <?php if ( 'yeti' === $option ) : ?>selected<?php endif; ?>>
					Yeti
				</option>
			</select>
			<p class="customize-control-description">
				<?php echo esc_html( $this->description ); ?>
			</p>
		<?php
		}
	}

	$wp_customize->selective_refresh->add_partial( 'developry_theme_options_bootstrap_theme' );

	$wp_customize->add_setting(
		'developry_theme_options[bootstrap_theme]',
		array(
			'default' 			 => 'skeleton',
			'sanitize_callback'  => 'esc_attr',
			'transport'          => 'refresh',
			'capability' 	     => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new Developry_Theme_Bootswatch($wp_customize,
			'developry_theme[bootstrap_theme]',
			array(
				'label'    	  => sprintf( esc_html( 'Themes', 'developry-lite' ) ),
				'description' => sprintf( esc_html( 'Hint: Change the look of your website by selecting one of the themes below. (special thanks to Bootswatch).', 'developry-lite' ) ),
				'section'  	  => 'developry_theme_options',
				'settings' 	  => 'developry_theme_options[bootstrap_theme]',
			)
		)
	);
}

add_action( 'customize_register', 'developry_theme_options_bootstrap_theme' );

/**
 * Attach/configure container width option in WP Customizer > Theme Options.
 *
 * @since 1.0.0
 * @param object $wp_customize WP Customizer.
 * @return void
 */
function developry_theme_options_container( $wp_customize ) {

	/**
	 * Theme container option added to WP Customizer > Theme Options
	 *
	 * @since 1.0.0
	 * @access public
	 */
	class Developry_Theme_Container extends WP_Customize_Control {

		/**
		 * WP Customizer field type.
		 *
		 * @since  1.0.0
		 * @access public
		 * @var string $type WP Customizer field type.
		 */
		public $type = 'select';

		/**
		 * Print out the custom option HTML structure.
		 *
		 * @since 1.0.0
		 * @access public
		 * @return void
		 */
		public function render_content() {

			$option = $this->value();
		?>
		<label class="customize-control-title">
			<?php echo esc_html( $this->label ); ?>
		</label>
		<select class="customize-control" <?php $this->link(); ?>>
			<option value="" <?php if ( '' === $option ) : ?>selected<?php endif; ?>>
				<?php printf( esc_html( 'Fixed (default)', 'developry-lite' ) ); ?>
			</option>
			<option value="-fluid" <?php if ( '-fluid' === $option ) : ?>selected<?php endif; ?>>
				<?php printf( esc_html( 'Fluid', 'developry-lite' ) ); ?>
			</option>
		</select>
		<p class="customize-control-description">
			<?php echo esc_html( $this->description ); ?>
		</p>
		<?php
		}
	}

	$wp_customize->selective_refresh->add_partial( 'developry_theme_options_container' );

	$wp_customize->add_setting( 'developry_theme_options[container]',
		array(
			'default' 		    => '',
			'sanitize_callback' => 'esc_attr',
			'transport'         => 'postMessage',
			'capability' 	    => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new Developry_Theme_Container($wp_customize,
			'developry_theme[container]',
			array(
				'label'    	  => sprintf( esc_html( 'Container Width', 'developry-lite' ) ),
				'description' => sprintf( esc_html( 'Hint: Switch the content body container width to fixed or fluid.', 'developry-lite' ) ),
				'section'  	  => 'developry_theme_options',
				'settings' 	  => 'developry_theme_options[container]',
			)
		)
	);
}

add_action( 'customize_register', 'developry_theme_options_container' );

/**
 * Attach/configure sidebar visibility option in WP Customizer > Theme Options.
 *
 * @since 1.0.0
 * @param object $wp_customize WP Customizer.
 * @return void
 */
function developry_theme_options_sidebar( $wp_customize ) {

	/**
	 * Theme sidebar option added to WP Customizer > Theme Options
	 *
	 * @since 1.0.0
	 * @access public
	 */
	class Developry_Theme_Sidebar extends WP_Customize_Control {

		/**
		 * WP Customizer field type.
		 *
		 * @since  1.0.0
		 * @access public
		 * @var string $type WP Customizer field type.
		 */
		public $type = 'select';

		/**
		 * Print out the custom option HTML structure.
		 *
		 * @since 1.0.0
		 * @access public
		 * @return void
		 */
		public function render_content() {

			$option = $this->value();
		?>
			<label class="customize-control-title">
				<?php echo esc_html( $this->label ); ?>
			</label>
			<select class="customize-control" <?php $this->link(); ?>>
				<option value="order-last" <?php if ( 'order-last' === $option ) : ?>selected<?php endif; ?>>
					<?php printf( esc_html( 'Sidebar Right (default)', 'developry-lite' ) ); ?>
				</option>
				<option value="order-first" <?php if ( 'order-first' === $option ) : ?>selected<?php endif; ?>>
					<?php printf( esc_html( 'Left Sidebar', 'developry-lite' ) ); ?>
				</option>
				<option value="no-sidebar" <?php if ( 'no-sidebar' === $option ) : ?>selected<?php endif; ?>>
					<?php printf( esc_html( 'No Sidebar', 'developry-lite' ) ); ?>
				</option>
			</select>
			<p class="customize-control-description">
				<?php echo esc_html( $this->description ); ?>
			</p>
		<?php
		}
	}

	$wp_customize->selective_refresh->add_partial( 'developry_theme_options_sidebar' );

	$wp_customize->add_setting( 'developry_theme_options[sidebar]',
		array(
			'default' 			=> 'order-last',
			'sanitize_callback' => 'esc_attr',
			'transport'         => 'postMessage',
			'capability' 	    => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new Developry_Theme_Sidebar($wp_customize,
			'developry_theme[sidebar]',
			array(
				'label'    	  => sprintf( esc_html( 'Sidebar', 'developry-lite' ) ),
				'description' => sprintf( esc_html( 'Hint: Change the placement and visibility of your posts and static pages (if applicable) sidebar with widgets.', 'developry-lite' ) ),
				'section'  	  => 'developry_theme_options',
				'settings' 	  => 'developry_theme_options[sidebar]',
			)
		)
	);
}

add_action( 'customize_register', 'developry_theme_options_sidebar' );

/**
 * Attach/configure cover image visibility option in WP Customizer > Theme Options.
 *
 * @since 1.0.0
 * @param object $wp_customize WP Customizer.
 * @return object
 */
function developry_theme_options_featured_image( $wp_customize ) {

	/**
	 * Theme featured image option added to WP Customizer > Theme Options
	 *
	 * @since 1.0.0
	 * @access public
	 */
	class Developry_Theme_Featured_Image extends WP_Customize_Control {

		/**
		 * WP Customizer field type.
		 *
		 * @since  1.0.0
		 * @access public
		 * @var string $type WP Customizer field type.
		 */
		public $type = 'select';

		/**
		 * Print out the custom option HTML structure.
		 *
		 * @since 1.0.0
		 * @access public
		 * @return void
		 */
		public function render_content() {

			$option = $this->value();
		?>
			<label class="customize-control-title">
				<?php echo esc_html( $this->label ); ?>
			</label>
			<select class="customize-control" <?php $this->link(); ?>>
				<option value="hide" <?php if ( 'hide' === $option ) : ?>selected<?php endif; ?>>
					<?php echo( esc_html( 'Hide (default)', 'developry-lite' ) ); ?>
				</option>
				<option value="show" <?php if ( 'show' === $option ) : ?>selected<?php endif; ?>>
					<?php echo( esc_html( 'Show', 'developry-lite' ) ); ?>
				</option>
			</select>
			<p class="customize-control-description">
				<?php echo esc_html( $this->description ); ?>
			</p>
		<?php
		}
	}

	$wp_customize->selective_refresh->add_partial( 'developry_theme_options_featured_image',
		array(
			'settings'            => 'developry_theme_options[featured_image]',
			'selector'            => '#cover-selector',
			'render_callback'     => 'get_featured_image_header',
			'fallback_refresh'    => false,
			'container_inclusive' => false,
			'active_callback'     => 'is_front_page',
		)
	);

	$wp_customize->add_setting(
		'developry_theme_options[featured_image]',
		array(
			'default'           => 'hide',
			'sanitize_callback' => 'esc_attr',
			'transport'         => 'postMessage',
			'capability' 	    => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new Developry_Theme_Featured_Image($wp_customize,
			'developry_theme[featured_image]',
			array(
				'label'    	  => sprintf( esc_html( 'Featured Image', 'developry-lite' ) ),
				'description' => sprintf( esc_html( 'Hint: Show/hide featured image as a cover at top of posts and static pages (a placeholder image will be displayed in case of missing featured image)', 'developry-lite' ) ),
				'section'  	  => 'developry_theme_options',
				'settings' 	  => 'developry_theme_options[featured_image]',
			)
		)
	);

	/**
	 * Callback function used for the partial above
	 * to get the tempalte part file for featured image.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return html template
	 */
	function get_featured_image_header() {
		return get_template_part( 'template-parts/featured', 'image-header' );
	}
}

add_action( 'customize_register', 'developry_theme_options_featured_image' );

/**
 * Attach WP Customizer live preview JS script.
 *
 * @since 1.0.0
 * @return void
 */
function developry_enqueue_preview_scripts() {

	wp_enqueue_script(
		'developry-customize-preview',
		get_template_directory_uri() . '/assets/js/customize-preview.js',
		array( 'jquery', 'customize-preview' ),
		null,
		true
	);
}

add_action( 'customize_preview_init', 'developry_enqueue_preview_scripts' );

if ( class_exists( 'WP_Customize_Section' ) ) {

	/**
	 * Customizer Developry documentation link.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	class Developry_Documentation_Section extends WP_Customize_Section {

		/**
		 * The type of customize section being rendered.
		 *
		 * @since  1.0.0
		 * @access public
		 * @var    string
		 */
		public $type = 'developry_docs'; // Cannot use '-' for spacing.

		/**
		 * Custom button text to output.
		 *
		 * @since  1.0.0
		 * @access public
		 * @var    string
		 */
		public $text = '';

		/**
		 * Custom pro button URL.
		 *
		 * @since  1.0.0
		 * @access public
		 * @var    string
		 */
		public $url  = '';

		/**
		 * Add custom parameters to pass to the JS via JSON.
		 *
		 * @since  1.0.0
		 * @access public
		 * @return array $json JSON array with parms.
		 */
		public function json() {

			$json         = parent::json();

			$json['text'] = $this->text;
			$json['url']  = esc_url( $this->url );

			return $json;
		}

		/**
		 * Outputs the Underscore.js template.
		 *
		 * @since  1.0.0
		 * @access public
		 * @return void
		 */
		protected function render_template() {
			?>
			<li id="accordion-section-{{ data.id }}" class="accordion-section control-section control-section-{{ data.type }} cannot-expand">
				<h3 class="accordion-section-title">
					{{ data.title }}
					<# if ( data.text && data.url ) { #>
						<a href="{{ data.url }}" class="button button-primary button-large alignright" target="_blank">{{ data.text }}</a>
					<# } #>
				</h3>
			</li>
			<?php
		}
	}
} // End if().

/**
 * Singleton class for handling the theme's customizer integration for our Documentaion panel link.
 *
 * @since 1.0.0
 * @access public
 */
final class Developry_Documentation_Customize {

	/**
	 * Singleton class instance.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return object $instance New type WP Customizer instance.
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {

			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor.
	 *
	 * @since 1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Attach JS control scripts and stylsheeets for our Documentaion panel link.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return void
	 */
	private function setup_actions() {

		add_action(
			'customize_register',
			array(
				$this,
				'sections',
			)
		);

		add_action(
			'customize_controls_enqueue_scripts',
			array(
				$this,
				'enqueue_control_scripts',
			)
		);
	}

	/**
	 * Configure WP Customizer for our Documentaion panel link.
	 *
	 * @since 1.0.0
	 * @access public
	 * @param object $wp_customize WP Customizer.
	 * @return void
	 */
	public function sections( $wp_customize ) {

		$wp_customize->register_section_type( 'Developry_Documentation_Section' );

		$wp_customize->add_section(
			new Developry_Documentation_Section(
				$wp_customize,
				'developry_docs', // Cannot use '-' for spacing.
				array(
					'title' => esc_html__( 'Developry', 'developry-lite' ),
					'text'  => esc_html__( 'Documentation', 'developry-lite' ),
					'url'   => esc_url( DEVELOPRY_DOCUMENTATION_URL ),
					'priority' => 182,
				)
			)
		);
	}

	/**
	 * Load WP Customizer JS scripts and stylesheets for our Documentaion panel link.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script(
			'developry-customize-controls',
			get_template_directory_uri() . '/assets/js/customize-controls.min.js',
			array( 'jquery','customize-controls' ),
			null,
			true
		);

		wp_enqueue_style(
			'developry-customize-controls',
			get_template_directory_uri() . '/assets/css/customize.min.css'
		);
	}
}

// Execute.
Developry_Documentation_Customize::get_instance();
