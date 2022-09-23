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
define( 'DB_NAME', 'enfold-database' );

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
define( 'AUTH_KEY',         'gVbTV.d/I04~~=*!%_kOQ]p5U-ZX.5(dQ?YJD5UXwN)Ko`[dpuKd<;RVi4n/IYCY' );
define( 'SECURE_AUTH_KEY',  '>(f0PZPt^X9=OUgYO^$S/i+cL<@*B3!f;7eAuqE[mBPv5%YYX:2eh?b0D#!N1`$B' );
define( 'LOGGED_IN_KEY',    '(q,V0x8e%~Mw,!Nk#+Tye`PBfFN?IWJO$kTIM[0oQeUq#B[4iE(CQG^3B/jpku:^' );
define( 'NONCE_KEY',        '[6Xm`~~.ppe[eP,l1Y$4 ]5,49V8X`?faZFGJq0%%8cu$S2Mzs2dl_S|2 fu8]Us' );
define( 'AUTH_SALT',        'f kbkbt0,QJ5mw9U/.Bo-[vrPP`:d]nR4yp8a<1,vPmr?pxQ4ZRy,qAuN.Z7-{:M' );
define( 'SECURE_AUTH_SALT', ';$YxDvf#j?`E]RI)]y3AAYK:15S*Y8]zzv<o<Ll4l@[!dqwc5%0TJ?0K?Kls[Q~.' );
define( 'LOGGED_IN_SALT',   'o!d?@h a0 p;[m ?_wenADkM}@COyWE>?,jov[6D{UEoOmgL{!w#oNAOOVP$%s]~' );
define( 'NONCE_SALT',       'C[ 8& %gY=ne440}cswUM(w!V*R2VeQ{3+m?W=Q3p:rDNb&~ Cn-gO2oL&Oim>/v' );

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
