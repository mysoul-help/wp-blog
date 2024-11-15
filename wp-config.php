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
define( 'DB_NAME', 'em386214_razom' );

/** Database username */
define( 'DB_USER', 'em386214_razom' );

/** Database password */
define( 'DB_PASSWORD', '*h86B-ve3V' );

/** Database hostname */
define( 'DB_HOST', 'em386214.mysql.tools' );

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
define( 'AUTH_KEY',         'PxvBWN[|X_yQ9pufQX;`h4QBUZ0!bvCCk.NQ515Sa06+b(,R(w:;4D=BIi(dX_]h' );
define( 'SECURE_AUTH_KEY',  'aO&YqeC] 6V7lg<t]>Aql#(R/:uA?Fr[SQ*1Z/u7gf)O&t;C/8NwVFUw:8(zQN=o' );
define( 'LOGGED_IN_KEY',    '6{lq]bV&*h.tx-aSw*O$eE&WVKn&i.GHc;gN3qeK@8x3&b5aXHX]S]Xh7nWBbqB@' );
define( 'NONCE_KEY',        '.>;*-h) rG,cBxK_:t*ML/uedNkZ7Gy!e,GTV~pY+_5hXo64S&BU<f/Z<e<7Nh>2' );
define( 'AUTH_SALT',        '3{Z>|$Oai.uk;&Y6b&Z.OidUuX:wmM|/tC:K}I-+1PlM<i1bPL,6h|YwYBUx|5I(' );
define( 'SECURE_AUTH_SALT', 'hWB[kj>>{(aJnoIEH@rH1&Z8FRfh{C)ew`TntBoS7PgxUf(MwD$DQ xeH[|80iFN' );
define( 'LOGGED_IN_SALT',   ')a(kL.Q^xS4/W:<p{,.<hySeqR)<bAl/Mf+FtXn%$t*J~;UfV3=03ikg,femzT=M' );
define( 'NONCE_SALT',       'TB+1|`<3ZkGvy>6sP`2@kPziIk#8&r-Qj=-Zn)dJ|uI$2Ox.&HKqJYoYF>D1PzV8' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'razom_';

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
