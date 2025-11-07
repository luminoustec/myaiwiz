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
define( 'DB_NAME', 'myaiwiz');

/** Database username */
define( 'DB_USER', 'myaiwiz');

/** Database password */
define( 'DB_PASSWORD', 'Wlb0A6JkM60zPS5nTkfDZiRP' );

/** Database hostname */
define( 'DB_HOST', 'localhost');

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
define( 'AUTH_KEY',          'TvFM+1[F^]U3>C75OF[[mNBd$7m%%yLN1]x&{hg#[5$r Mso@wG>KDC} L0cU|qb' );
define( 'SECURE_AUTH_KEY',   't7yF]r_J5~n 7m2>}z!!7aUUnY}!;3ODcr!ny<7q|YMO2,o1+-7qTTXVIe)}>(Pm' );
define( 'LOGGED_IN_KEY',     'M+Lfbu2&k+=kws))h7+TF-P.Wd#e#w}<!Ir6?^Ufcv:!PO9@ylS%NtU&vE9+i7>Z' );
define( 'NONCE_KEY',         ' z:3,NK9/#S85R&S!Hw6+pe%b<i-TPvl<Eeix]j]Gx|et^+}U_4NUNv9aSewlFz)' );
define( 'AUTH_SALT',         ',zNuEcKi!Q*/LR(uMHRb0N<pR,q0y!3CVdfGAUokla})!gCBpUk8]-`&%o  2#@.' );
define( 'SECURE_AUTH_SALT',  '7W}2_of1S`Y&!w8#e`G9$)Ux]Cr:.INyil@4Phb5nroAZ9]{QiM!p%34]y85+pIm' );
define( 'LOGGED_IN_SALT',    '.MiLNMs`-S!!mpi4bJTZ,i^u13:]:He%!X=DOCFeMF#{<WFv$(%Y)>H;A4bBdeq-' );
define( 'NONCE_SALT',        '0=#3m.6i0TE(cM#8V+Ys/byd1grDG?Juu8H{YXZ#Q,|P.ynlE(?Hb*f!*q-:ONBO' );
define( 'WP_CACHE_KEY_SALT', 'IZt_+O|mP5Sq|jBz~fQqoEUPv;Sn^sRL8]|O)lctdNm=Z%pl.-jKYdQw^U8v6xAC' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '1ge_';


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

	define( 'WP_DEBUG', true );


define( 'WP_DEBUG_DISPLAY', true );
define( 'WP_DEBUG_LOG', true );
define( 'DISALLOW_FILE_EDIT', true );
define( 'DISABLE_WP_CRON', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
