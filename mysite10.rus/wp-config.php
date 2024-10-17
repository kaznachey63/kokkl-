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
define( 'DB_NAME', 'examKaz' );

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
define( 'AUTH_KEY',         '?3_)NGdHc~;lx/3jCHZ+VzJSw3A}8gAZ5kpL7`r.`e 4O(;u^(2NDjyncI#RF 7N' );
define( 'SECURE_AUTH_KEY',  'EZ[C^:N8|!8M!Z;cV$DyDJRJW=j^Vl7Pttq7 +mj-GVJG]M:+;b2t}=8;)e>? 8_' );
define( 'LOGGED_IN_KEY',    '}7{qX&pSLe-QXDVIz4Qa.j@3K}Kg+Z+]qZ0G@6Oj`+{0qj-?MIhzFipp>R[(OePM' );
define( 'NONCE_KEY',        'J9|$%0g0)K}NQs:qT4{gDl)?[ZaM}aFki,BjtsLCrm1Zv7#(M~@-_]bn~E>DHRh>' );
define( 'AUTH_SALT',        '%&1)6SGigZgg~+HYy29X&vV;HrdWUZbZoA-=#}~]uEs{B`D>=auFsHQ(BeJ.zkIC' );
define( 'SECURE_AUTH_SALT', 'IrIiw&uV~*QGz_t`+!W_y?PoB/A3x9yXe|Tvtyswep@]F$]&S_3:9p@*>ZWTj]8(' );
define( 'LOGGED_IN_SALT',   '25tT]E+Bwzj,7T|s2LOPL~e$H[sY2wmE~>8lZ#>qsvSO*jV4Q-j?j5)(=PASBnIp' );
define( 'NONCE_SALT',       'PGsWCC@]11QJ8S 31t[!5$Pnq6~%{rR)3lsy-2%u-NK:C[y* P&-hcq/GmQcIv8!' );

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
