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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '~RS%dzajVqz.X1sl$gw`rN*?B?$p|(Dhx5bm~`SdpPb%g({2c3@R.[7A~JI04t>G' );
define( 'SECURE_AUTH_KEY',   'R&wcHC-j}]mj4xdD(7{ITK~|~tT.<2|iT&_fc2b6C$#Y<y7 V?d`LPZ&yh>aFxtm' );
define( 'LOGGED_IN_KEY',     '$CiDx}cII6+p[jk+`Y!$@)u IYk3tSWi6GrqVHxLgLlx3C?(dg{o4/N@E42:$Me~' );
define( 'NONCE_KEY',         '1M$G*9ta}6]J~yc[YMXm$#qIQSSb14Ps>5?dUY@}q6G7`_SN;PGa,[[$&4O:h.>/' );
define( 'AUTH_SALT',         'VhwjDxuL<#oCF&zH*U/aJ2bp)bFa%l0:@PkZ/zc->,1=G_ ]T)YDJ/nxKGv]v5~B' );
define( 'SECURE_AUTH_SALT',  'gKT5)9OsE~7<|-8]@_`HRQhsvEZ>idybt0TE]5i.68,1iINd? C7`>l-LBuz3=!Y' );
define( 'LOGGED_IN_SALT',    'gq16/dY`2abc=+3xvh.&D^i<zZ;s~]zb!286z90ohrn],=N O=$.irSdkcG]@+?|' );
define( 'NONCE_SALT',        'LKzjV:Mp6j2F,VS.1l@WQU,9mT$RxLYjih0Ett=]*X?#QP8,lPV;f49/:VZ,&iae' );
define( 'WP_CACHE_KEY_SALT', '}V$o5Yiu_m?NC~;`:y`5K6?ZzGIRLe(i`$tnF~)+R?z!x>0]Ix)HXRW;t`7H)I,I' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
