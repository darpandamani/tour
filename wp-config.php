<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tour' );

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
define( 'AUTH_KEY',         'B3=}.D Q3#3E@{@c2Clfr=^E^obcq!b#&U-8C<#<Y0a@u&`G795B!!&(.(xb^k5k' );
define( 'SECURE_AUTH_KEY',  '?D5U~H[}2&l;Y=?xim$Kv8~M._LbAiw*h968Q9^TdqAsl#eK2$&.8LUM9lb9,}C,' );
define( 'LOGGED_IN_KEY',    'yMokM{qSP2?h>C|-{aB6$eK4Loiumu${55XR%~yzKL/a4L6A<IqjF)2vQ!.-/*Nn' );
define( 'NONCE_KEY',        '~JLt$;T0@SFOQkAjOho|KZ9 ;tI+cFO0{|{M~#XdlZ+y^ 7al?+=0^<B^6rl#X|Z' );
define( 'AUTH_SALT',        '/Ey!)8^CT9;dU,KS.+tpp$oOfHhlYDX*AT%MTDW@;FXM6(lGlTUxDl~zF9(c9QF(' );
define( 'SECURE_AUTH_SALT', 'Pi~&nr7.%}n.58Fn}a#^1$;NC,9b02Wg?Ptyl sG)A9o~BU1lYc*1}8_ $~N_x~3' );
define( 'LOGGED_IN_SALT',   'k<sp+0X{[g4 EO01g6I?#-m)}n:cKNVj4`:RlTyJk2(lm{MD=C$1aJogPBiH~~d(' );
define( 'NONCE_SALT',       'D#m{|bd0miv,,c}d6#`Ih7Br4q;Wi*TX$2t}6FAXSRX4l~kh8-uTlWY1M+:nsi7*' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
