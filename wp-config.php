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
define( 'AUTH_KEY',         'pOMQ<c$epx%aW3g[+c6&k.{uf!J^gcR9B`P(gm5C0zHClM][D=CCpzqL2# zI0D;' );
define( 'SECURE_AUTH_KEY',  '2xjU^U4_79khF],jzC,a[M^ea+vOkT9U3X5y)]}1}~ye,}@4V)@VuXP6+#zt//#.' );
define( 'LOGGED_IN_KEY',    '/o7VF>~J|(K 5w9IL,S:q8=G3/b>r@Z:HcE66ulCf<U,.bA(zWzV8OA0,x6S1N.Z' );
define( 'NONCE_KEY',        'Bo e_ t =mbwqy z~xy5UT~:5/~JZLgR:PE:ot{D.WCrJ QGM7ad&J4k.+eRH]dv' );
define( 'AUTH_SALT',        'glq *1>H.G2);MdS;pXJL|loP@0X7 pTTtH>FBqPS%%&3lbc[r81/k0FH) !K>O[' );
define( 'SECURE_AUTH_SALT', '^Z_/O=mqcxv(eY1`8h?%[6y!1So]8cdXY,W1tIu;<_!kr~X79;vO{T51z0GazU)9' );
define( 'LOGGED_IN_SALT',   'Zt3;4))=9WBjS[L#DD>3@bg:5[7u:?]0b<2)YMeGVm),N?VG7~-eqp0HsV/*e-/Q' );
define( 'NONCE_SALT',       'ns5w`F0){D2kOb[3EMMh=|IHl=eB#vU~RbHVqM^uJ0YhjA1RyrAa>gIYYDH#Q~K%' );

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
