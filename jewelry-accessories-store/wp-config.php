<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

define( 'WP_CACHE', true );
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jewelry-accessories-store' );

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
define( 'AUTH_KEY',         '[gkbU_[6gv&ISmlv5;L6JT25pe@#eU)|sJ)bt|GIZpxkHo|w&&a ^?-_.,VFGcKn' );
define( 'SECURE_AUTH_KEY',  't837UHS;?L%4LIghk/=_L@L53^!/4KBnbsKouh@I~tqgwkN B+IoIo7e7-4W)/nR' );
define( 'LOGGED_IN_KEY',    ']yr~zqZ66 Yb*,iQ-}+_9>p`v7){P$$vP@T|3U6b}2:r{imVI5~Rwi2|1c} ?IRB' );
define( 'NONCE_KEY',        '=Rl9H@17vi}qP`~&Ud$$Ht$z8M{s)bOoX@oNCd]{Fw7k8gvu`tpSIUp=Kdbvm<g)' );
define( 'AUTH_SALT',        'dgU0&Z<{zv0O2MW4k{1UZxIaa?U<kAULQ~f]0^#t01z{>]s)n&romYy7_x/p3Cep' );
define( 'SECURE_AUTH_SALT', '.#Kw5I7p1bIUF^>O`hb+UdQlb}<FlA?c1IH+P_ 2Pqhkov]W}j~?QP12k2ZiXJ_$' );
define( 'LOGGED_IN_SALT',   '9X)DU],SX&QeNQ/zfda5@jLqz8e/@PY`<>LTD`IQ>9K^*458wX/[%+kzo%>D$0d1' );
define( 'NONCE_SALT',       't=w7noxf]kWi}LixiST(i{Yc<]d[2cDl0X).97`pdK,MrEZ5+I~p,1}PilMX%F=_' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
