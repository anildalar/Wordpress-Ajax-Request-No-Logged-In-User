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
define( 'DB_NAME', 'wp1_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ',9K1HJ/)2ombj/J 3i!jH7HOg[8X(7WIVnb PMgt;Z XN&bwcUo7OY+khZjLBE~H' );
define( 'SECURE_AUTH_KEY',  ')ZT8&j@upC;[[d<,=g.u5e3KokTC<<P0SLkNQ5RmpxML8m&Si(u4Kk^a&E|)q9+o' );
define( 'LOGGED_IN_KEY',    '|4dP!#%yv{4(q2W#{ZG^>@.sA< >on]IN42^k]9A<X bR5pmPvbE72gn7Y7?S2mG' );
define( 'NONCE_KEY',        'FXM|Zb!sZRP/lc86G*$/o-CU7b}|Mp+R  t? p0T+/Exxg9qaHW!@E+#Y-F$r8Ia' );
define( 'AUTH_SALT',        'C,z$FW4Hns%%;1K2o=#FzDllt.yvOI-L|[Q*zxL`f?|*45xZf],O];3m=sBi9;fI' );
define( 'SECURE_AUTH_SALT', 'ZC:OkVYm&C0J@n3a;x#Z}<js?K8ap=5)kZo^|p3>zphbFE5kZMg%ga8CxmTF3RZn' );
define( 'LOGGED_IN_SALT',   '~@%}G5,N5Ciq;|xeQ(M&^WYNw?$zJiSvW^4(d{&Lg7FJ5Nu.{7%(kWmu*X[)kQN_' );
define( 'NONCE_SALT',       '_QgXhYHtow`*9Je;1%X#;W356;w^V6rz!J`da`P./=vr3FM1X*R@@Js>:RtJr~<2' );

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
