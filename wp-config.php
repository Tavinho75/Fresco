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
define( 'DB_NAME', 'curso-wp' );

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
define( 'AUTH_KEY',         'JxDP<OZNBOvp0iC!|TEXX.p`pdC$^@|g__qpq>+^:*%F[bUYHhMH<zi,d38VR@x$' );
define( 'SECURE_AUTH_KEY',  'LPlze:~a*&IutSX[4Sg0EY[:(JVY_,I3aE&s5mPz^$sZD.@k%f4YoZT-1 WpUFye' );
define( 'LOGGED_IN_KEY',    'au?m! hx5Sw=ibqZklr-z_sA0__pzs<F!U~NKV43~?);=],Z,m}R~N>7WlSdhzA:' );
define( 'NONCE_KEY',        'D*5@w>[/%/va4p|802M:.(Jq?#nI<#M6}f|R0T,lzF0F-?Z}Iqt7UMZQoDY}j^6K' );
define( 'AUTH_SALT',        'Pm0^htj#QVM}lRU^~8~FnDGRi)tmdc5mViXq-|qzZU>D%dl+!~2,ZWJb=uiG22gs' );
define( 'SECURE_AUTH_SALT', 'HZF_E-6|TP?(?2#AP@d,r{X}e_N}K)KMSJ}_o!g_jf#Z8ZvD96hZm^sJ@20*>sk0' );
define( 'LOGGED_IN_SALT',   '8lV}I5LO4:`2<ih5R0uPRhEgJks=[YF| )tyHp+yROjRSLfjwv~zq`CQxbMt=7JV' );
define( 'NONCE_SALT',       'C[e s.!}mLN;<VIXA65rYndk~D.(L@BB8K+~6Y@O+!Kan6be_urvOaQnwW;=a4I#' );

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
