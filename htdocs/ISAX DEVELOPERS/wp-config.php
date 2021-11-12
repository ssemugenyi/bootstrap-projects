<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbdevelopers' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '--XA6_U&7,(aI4P?}1Z7?f5Mu2#K?Ax11q9#/J]/@Ck/{Jd*b|j-s![l}3iqtt(<' );
define( 'SECURE_AUTH_KEY',  'v$za*[*(TW*%uqO3Bt@ X~u3M%RwV#~R?WI-7Xl+e/_n4Ry/Kmnwy8[?^35%ACn[' );
define( 'LOGGED_IN_KEY',    'A4_M u;Jsq(^8))?HLw`p*z] `]!=M34!&b6C)TO:Q9p+TA,bI[vJe4]:fcR,IQ/' );
define( 'NONCE_KEY',        'Wf|6~mWk rt],+5PT]qV__HW(;=#Q{17{;;9($=AK._-9pJB&rUruoX4K~,aa,Wt' );
define( 'AUTH_SALT',        '@J &z4Biio^:#xlPW}F3D@+Fa4*.)}+Xv|ARi1rE6Q%y@pQR}4(g6B![*+f>@h!n' );
define( 'SECURE_AUTH_SALT', ',5KFbFZF@>n3_hH&&R6Qi(0hXbXF>E(`fGdty&Ysx]WV8:R-jpTWn!sdcC<N0+?1' );
define( 'LOGGED_IN_SALT',   ')eCE;HJ=,1F?j`q<9k5+b`#X%EWd4_QK40Kl7-u,6oUE@;4?{}T8X@1?DAL~hWbX' );
define( 'NONCE_SALT',       'Oc]OLe+LjCu 4mW16y8T!1HD<~O#n~(f xdzB{U{}fw^Bu),uV-ofqYiVkJsXdYl' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
