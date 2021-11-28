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
define( 'DB_NAME', 'wp_topichouses' );

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
define( 'AUTH_KEY',         'v&B9X@oBMP+IX+MtlO%qix&u/A2H}%X3/^=_I~ U<T!Wl=Vv!X 5 n0. 5No&vg(' );
define( 'SECURE_AUTH_KEY',  'xtO0z[C-JnSbHoru*}hIBQ>q#A*QyJ(J2e@cSH>B_,4uR?Am_0<^I^_@2sSh!S|+' );
define( 'LOGGED_IN_KEY',    'ZMBp>XrB<-Do/wtBd%*vke~=l7Ta`ZHRN0YNVb)KpK)^CL4&8I<~G4*G?xVC-Y&F' );
define( 'NONCE_KEY',        'CgJ1Ar_;p_@qx|K(i6J@.~S$bmT1ZyOD3%U/D=)nTe8U*C77tj4|b-h[.ADC(SsW' );
define( 'AUTH_SALT',        'c`_@L~XY1r}@+Lk49[(fJ,m+d@1sa+EoEb[ySY;E[~D]rZ@H#>!#cA56pXVlBVn~' );
define( 'SECURE_AUTH_SALT', 'l&#Ij[0<VpKTHB M41+kDBTlyMAIF?&*Yb3GhNSe)/#hOE/(1AA78.mnEE;KQC+L' );
define( 'LOGGED_IN_SALT',   'gav=+Tnjl/9dcJ;Wl8-$%mJXnHTsI1iqX%t)sDYF;0l9utjfyy{JHj4+!L,m}>m+' );
define( 'NONCE_SALT',       'z`r[{Vv6$H|b=:vHaWdUK}%H(7Ni?;Xxg+IcZzo&-iA K;_0qgK+|0]4e,Z>pq8t' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tp_';

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

define('FS_METHOD','direct');
