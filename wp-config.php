<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '10231514_blog' );

/** Database username */
define( 'DB_USER', 'wpabuitrago' );

/** Database password */
define( 'DB_PASSWORD', 'talquistina$1981' );

/** Database hostname */
define( 'DB_HOST', 'PMYSQL107.dns-servicio.com:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'Cn[-(]eVcE9]U]8n8UhG78:vwA0ha&N+N8-5bWq42K2MZ@#mh8ZzBj&51PCQ#zS7');
define('SECURE_AUTH_KEY', '2lu9#0Q7O8Q5N]gUiS_@r9O%S88Ey)3s)4S81_kS|72wvb4i4y]L13jZDNf316p3');
define('LOGGED_IN_KEY', 'pev;E9_#U6c6la4023Jtg@W/j#f485+/fpV:&2687n!75-L4j(x2tE6%;5Ki+6&q');
define('NONCE_KEY', '-i733#x%9C|Z3ADhE|tuqXbU~(o;!9X&1AQ3LxFer6Cfo6y#S3|pX*+86-#e110q');
define('AUTH_SALT', 'AhmMg:0Qj3/CQHE~z@gr&6j8u6_Gr(f[8b-V#_R2Gkru@HXTv-M4*QX3AU[ks5%-');
define('SECURE_AUTH_SALT', 'T&ITmi7Gq6z5QW6_Nd9~9W0iBEH3BfoA&Cthb22v[2|Y6D)ce8ml&x89DW!0Ytz%');
define('LOGGED_IN_SALT', 'R)868k0[YD8bm#xaat0_J6f8270H6-@6mH-6|xjLT*[N06|FF]32z1n#;&3llai)');
define('NONCE_SALT', 'kP76%iThM4c:]tJ22)WOuT%:|0~[qt65FBoK9w&y|!0%D~NtK0F1L2HsPQs2R(;#');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'blog_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
