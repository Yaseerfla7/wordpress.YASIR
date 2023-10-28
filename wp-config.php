<?php
define( 'WP_CACHE', true );
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'word' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'dL/q e_-KU^CPw1tY9E;<%d-t~]pC#)Y{lO2u~!=**HTyc^mf^n2yPV|T+0u)+_W' );
define( 'SECURE_AUTH_KEY',  'j86Zs^IUQ5kYm^(PYH1/3Dmad:r=`8eGCCwowwKC`Er2Zw-$IIACqF<1+XsQt;rm' );
define( 'LOGGED_IN_KEY',    'DX%wMnlch!t(6Tw7$iN/K4/`iB?5~)IKT@N>2G:XV^~m`U5/6nHz0%TQV.uk^.={' );
define( 'NONCE_KEY',        '+zIen+=Z`~_Lpcf:QE3:I~rwh)l_?a#RgnZoS`C8j>46IBn.Jub?C?IK#r8h&rfm' );
define( 'AUTH_SALT',        'k^ 53RpDg|E|s;zSw^Zuo0>E`K-LVRYgONM)&xUCHF,1(5U*oLWV+gDt+/N%kX76' );
define( 'SECURE_AUTH_SALT', 'Kl!a&c]DaA99>OhgA*uPuAy#MB<nQ0|O7<E`[48W`b-&@-17$/;9|1R&2p3X2YI3' );
define( 'LOGGED_IN_SALT',   'T`S<cy6rypmx/f4 2zS4}cB0?SnoK6M{g8&kO:Bm5K A/Zf,gl@F8(,ns:d-F!G0' );
define( 'NONCE_SALT',       'C9i6V_3-,(2G>>C-&iQMa%[^%0F!AIkghW.^G;^:),R30J:!D@KopGK$O:SphD[F' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
