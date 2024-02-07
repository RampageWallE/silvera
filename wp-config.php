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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'Kk8x4C9y+/Q|:vPufeU;>yW$e~9;sxmm@_4b2GRO;D?Pd,v@7lrYFuzqoIiS wA%' );
define( 'SECURE_AUTH_KEY',  '3Y7Rt*f_%[U>ngD^8ixR--R __aCn>02=oS31tx]4r|!IFxxqgGw-{oX#ohqk_ZO' );
define( 'LOGGED_IN_KEY',    'Sz(6aINlUq,WB7U&QURWzuIL0j!~#E@VE@#M(acX:vd}PMs4DQ<y,BtD>,}]7oO%' );
define( 'NONCE_KEY',        'auz{Zx;Gc8;qV!7-_E;`+ *~tcv*0GAu(;tzh*o|/!XmdI,NK|g;V~MbjR-%:cj{' );
define( 'AUTH_SALT',        'D(%?@CH`1B2uZ/GJdP,xN[5o%!i?.r#HK8|D!$(tgetc+6 AvDwca<FnPNf9E)K=' );
define( 'SECURE_AUTH_SALT', 'e~h6mODN_#g*}~Q6BS0/8gxXk?p[[MqY]H*6(|v]V~ZFq3Uy4T+oks3]fD8<N07#' );
define( 'LOGGED_IN_SALT',   'spGVvz&1kCJzk*+ISiPn[?wjg%7~q(VDTuJg/33*Y.6;|XJHE-T[>[)nAW#f]R*l' );
define( 'NONCE_SALT',       'TGUTteD,!g:!s|-&[yEnQqdN1IT1B+6sbf7gB^Ho{foz-{`?e,r+5R_dbg;a;@i`' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
