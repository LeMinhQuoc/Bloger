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
define( 'DB_NAME', 'ddqf98dmdmptgk' );

/** Database username */
define( 'DB_USER', 'sjcsgsprirhsun' );

/** Database password */
define( 'DB_PASSWORD', '7342ea5ffdf8e2d4b200723d473a16e7086f29a5afdbb4406399d5956882e68b' );

/** Database hostname */
define( 'DB_HOST', 'ec2-54-91-223-99.compute-1.amazonaws.com:5432' );

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
define('AUTH_KEY',         '1jv$HVx.s=I5hEl(E~Zov-d&=[X2&>CsJl0(*.Os^w_0]eRGvwuJpR5!cy]Ep_%?');
define('SECURE_AUTH_KEY',  'L,L+ihfZ1|}G_Y)8cn1+BTTX++o5cu80r{PTq+S7d;XI*h*E[ep/x`0J5{{s x<o');
define('LOGGED_IN_KEY',    'HBl{xW^AS-9~*|RjEM)|i:sHS?,C$BBahU;IMV2X5%|OtgmGm#?.:-a-N0aLq3py');
define('NONCE_KEY',        'cYx+|xtXd_<YW$g|6h<.tQ)]x$Z2Em2RaZz*F5I,x1?C%DGrL[~muU{^E%%OH0WQ');
define('AUTH_SALT',        'ZEm;)4u>b@|a)+j<V7K>o;zGPD#R@>yThVoP=9#{]Fjo><y`<6_37t9]tq0b+t+k');
define('SECURE_AUTH_SALT', 'TinW-#]o5ZW6pkxM)LqVzIe(#WF~ao*he~BX*_g)=lHi(5t1u{SR# 0Y_>;WZ2Rn');
define('LOGGED_IN_SALT',   ')WO=c6{8|[Iyd[2e,K|kkVM-*x4hq+(ggVmSxiW4!PAGQ7gmEP3e<a<g:vO?qH2O');
define('NONCE_SALT',       'ax Mpm|^2.1Q@rj-U`f4!W5F&W 1O@aO7kbx 0_Z{*1+bQE-;{ZZ/qi#:+5d3AX?');

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
