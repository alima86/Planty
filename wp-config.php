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
define( 'AUTH_KEY',          'Tk7R1KCGY.*uWJD64|zoyvt*Y*QN=c2)/{sPftvmr;SMA1D#<7MXDZh!r5lp3N^A' );
define( 'SECURE_AUTH_KEY',   'eZJ3KA2x>{PqXd_f(2Q<#BX,W-Mp7uS/=j7#~Sn&>3]*;REWt&m)>W3d/!+%kW!E' );
define( 'LOGGED_IN_KEY',     'Amfak#AaLzgr!1y8UE-I)Ho]3B*Z13EQ IE93V`X5@Qk:&v /Bi&jpdaW ,n.9b/' );
define( 'NONCE_KEY',         '`o BF-Xz:4CATEKul/_Gxd3k(KYvPyZ|Kp<Y@B^)9peKuh`8/oA1aeW1%8no!ZS}' );
define( 'AUTH_SALT',         'H{vfJ$g5{jZoUE1Wjr_.: Ef>}m7EtGVFk8Un3wB~nnlj3~o9o/T#i*3?/qr4f8C' );
define( 'SECURE_AUTH_SALT',  '>@|v^ja{MfktbI,np6zh,%AtX7;G-XD-!a&n$7[bwGIBF|Bb.9-sh`/AwUQ|MPl%' );
define( 'LOGGED_IN_SALT',    'G8*SK?B%$0F|@*AI9peL{r7!?Aq-C(O2]TDG-YkB(h0Gur7&R3ub~4,3~,Bkd|7<' );
define( 'NONCE_SALT',        ',g=g,G_fd3!?99raV%C#+)wjsNo]x M? DmL?{N5.S?O67qcxx)CY;V&qV[,q41.' );
define( 'WP_CACHE_KEY_SALT', '[=(/m-V!rUWL]j[K<kN|=g n.+_y ^76kbA%S0}=-A/|F=1s(E_=:&nmN^5o8fc!' );


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
