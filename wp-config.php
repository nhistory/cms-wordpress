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
define( 'DB_NAME', 'portfolio' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', '1234qwer' );

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
define('AUTH_KEY',         '6rgo?u{-P)P^6lNjwUJ<#v3zIU`;bBm|8W+g{aL@Ho2XG|Ppq|,pxd]oN5+6LR`w');
define('SECURE_AUTH_KEY',  'Fb7J[0FQ%mart57AYJvZ|nt}UCfN(AqlE(ck14PW-jX.Hd={P,g0N6&_3~M65wD)');
define('LOGGED_IN_KEY',    't,jL[YdI6Z0YrC5!c ps[lXXv!ce+{#Q}9RdeDl+v1qX)1,zH@w :i`P.qI|gazX');
define('NONCE_KEY',        '-.aT(yCixXJgl6N]fY*6h|U-3v]knK*zb$9E*fpbtL|KMEGF/O;}_XPBM1+5 I|d');
define('AUTH_SALT',        ' MsKa- gfD5AuW=K{zPf^=[*NpS~f703]D&tY?6mxGU>u@Q#_bVBBb~@r-eg}QF{');
define('SECURE_AUTH_SALT', '7ZZ2ZIV}f/BK3*@wm?~fu_u,NiHdS#6[z1!t^Ds![$kfQ0_X+ZEbS v8Ot=^WH3b');
define('LOGGED_IN_SALT',   '-+`749(X r!|tTYd42dBq590zkZ.;B<Da_+Z_rG=7N,Dq30s&3VWM/Si=>(67}|L');
define('NONCE_SALT',       'qnB?)+d1;kwh[B(<mSM^,$SyPsumbb+0D5Q-4Z+!Ach9S^P,7eWpF@[:KRnf}qeC');

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
