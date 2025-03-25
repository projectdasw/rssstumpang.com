<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'rsssweb' );

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
define( 'AUTH_KEY',         'Ue}M%?s=cq:`+^N:0?Km]<^b0-A96cf%occ3O5YC>_.}3<jr`.<5p@FEb+N=&?K2' );
define( 'SECURE_AUTH_KEY',  'Zt},t*?}nO x_`5)pfZe30,4q-;mwl=WVB7w=&-,&EY[%6xQ1}}IbmA5.]ppbW3f' );
define( 'LOGGED_IN_KEY',    'P`;NApMW,~;|B:4wuAt7{XEVsgj95B638UrQg_giE|L[Y*E7q%6R^k2B.,&^3IG}' );
define( 'NONCE_KEY',        'lf5y37.yR&We+Fb|C8yA.Z~wE000PC+s96Iw(E>~p{1i.1/xgm9&j?=f|rO3Dd6&' );
define( 'AUTH_SALT',        '83]z/O+-@HmBzo(mw^2=iA$Xo_!%fFMUZO3U/UWjTsiH*m*^W3o/)[fmMT%Q|y?]' );
define( 'SECURE_AUTH_SALT', '4OZZu)tW{S>@t</`p?V|sm)[N?#u$du7O=1@2U(F7M%(T4k+< *n&wAx,N`$0]Lb' );
define( 'LOGGED_IN_SALT',   'd#0-Q/%^C!b#Mkmh^AVaZ)B_ScQ#~_,tKN>Cc*PWrXMu.FA6097an6ZL>1]J^ +?' );
define( 'NONCE_SALT',       '&9z|>>*w?ReG+vKhK37uZ%vKJPy9hi~(n{zAnDK%Wb;2d_lIw#}G$xvkqg4upFB7' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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


/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'localhost' );
define( 'PATH_CURRENT_SITE', '/rssstumpang.com/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
