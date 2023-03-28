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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress4' );

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
define( 'AUTH_KEY',         '<v.e<eC7 wJ1x{:cK?vgY;Hv*b-BsWR 7$o2pg3e}P)]cT9b<y=h*.gJu#H$<.B*' );
define( 'SECURE_AUTH_KEY',  'eco6~nYg[W+>C:mcMB.]}jM~UmYo6Ui?DlbXd/VP(RQIo^&SvgU-~@WSeN][|1$&' );
define( 'LOGGED_IN_KEY',    'nc6_.L=x,C7H]&G9LXA,c_w&}MkZlP,dP,h,bG_Fv8?JLcC0BY!((pHcH,xlAQ l' );
define( 'NONCE_KEY',        'Tg`h-_*hp[P=/duh5Y E;=jh5J$r(#-.|i$o@?+_Mc{Y_M;Tr4ObCP0j2Bb<Sx1p' );
define( 'AUTH_SALT',        'GCf8PFv$-BDy*3?/WS68xGxJOa5;l<TI1;~7o^4FjDN5]yub:w~Hld;NTQVN%Qh?' );
define( 'SECURE_AUTH_SALT', '~s9>RS:GQ_2952Ni$F,Ip)wjZ;g=7S`{^Hh*3{Gi&%}~B9v8i%+5B]sURy; uT3K' );
define( 'LOGGED_IN_SALT',   '&@Yr(1&Bl]NxuB?1ZOMA|M-@puKM%e;y!{6X,O5~+(X@dTL~GZCLS^Dtyis`^ep%' );
define( 'NONCE_SALT',       'jH3mS/_O7/ZS2/s+B)bWilFvz,4CR}aD61>GW|#7(cj{TT$h%VO*#`Vlu4Od:IGB' );

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
