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
define( 'DB_NAME', 'paktolus' );

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
define( 'AUTH_KEY',         'bd,X*hbs%58JWPmw0AufEvuC;uoFelr6L4DtZ7<~xqD_P&0Ng$)yC7ZUh1WY+.(]' );
define( 'SECURE_AUTH_KEY',  'z* {`rip64+/v$P7W9WUXB|[y}Be-.z8t#KPRAz$UyM;G.$JRmyK) uJ*%}k#]0c' );
define( 'LOGGED_IN_KEY',    '$#w6u4?VPg|Kd)b$}micZo5#R))l~^.ufMxDJ?!]f~gZH;|U-]n:(xeQ#P;,Qk;.' );
define( 'NONCE_KEY',        '^l[/+N&xM{:>svS](^E(4#K d)&,BZ/^i{+,.r[n}yX7Tc])7}Ua=c&GDALj~UAO' );
define( 'AUTH_SALT',        'a},M+5O9.A9.^R7Se[BN[|2?.d#YUwg-uA&3b*+r(979cC.pq2D2Kd`WX}Kt~E)x' );
define( 'SECURE_AUTH_SALT', '3XID3Iuw1OO&nzrN5)3>:kjg4#9Nw@[jSj~tgbl^Q/#93 LM[*uVeX*>yW`al;X*' );
define( 'LOGGED_IN_SALT',   '};rdS4nvMgfL$HlyO]8G8:E=?t@YO-0a`eBfG!v<a:60w$w2<b]s62y9clL& <6B' );
define( 'NONCE_SALT',       'X_=MM7%y;8+)vX{W,0@K+4B^D30x/G=D%^jn%l!{M!(R=8mluOQAMlE$btY*]j0P' );

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
