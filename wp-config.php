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
define( 'DB_NAME', 'cric2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define('AUTH_KEY',         './AB 6SVUba:x`iG;O: k({3V0a1,:E+>+m{bY?Q_vv~l9G~fKV8!|X9b}?+cbb{');
define('SECURE_AUTH_KEY',  'On4oji]]jy0~$l-p-Nl&g5jtr8?I&2Naf Fs+ =iP{p8|*$d~ZK+LRPvJ-]6i&i3');
define('LOGGED_IN_KEY',    'H {n.M9]zhiq8e2;Ll.&&hOM4Tw6+C5[C|BrOR;(8Rsa6Fx9,:q#*%h5:7C5H??9');
define('NONCE_KEY',        'fv:I<~WCvB]PdzJL%;QY8BvS6yr}I~2MKnEttL(BLbDX1%|+,gB`4(pTI]tTjHIG');
define('AUTH_SALT',        '%TrOk+@2W!d^@;IW#:By&m7sNmA1<d_R%Qr@^fi3w;&6)L|mBFc)EOD! :=,:W_[');
define('SECURE_AUTH_SALT', ':_U(I$s+[9eyrYW5[- szhvHi:[a76@#o^+;ks!?TSsS-Iec@5`9?%HFaB(|n+zr');
define('LOGGED_IN_SALT',   '>y/|-C1J++i|-cpt9d{+iF|b3,D,B4v?8,73J{EZ#)+:AGbK{-MNUc,(4PjJ#%5_');
define('NONCE_SALT',       'D7vQB6`FiY-+j/-12R/:a{Ec>J)[m-e4@WN-|F|C+{W=S4w2YAF+VK/RUw|>+Y35');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'CRIC2_WP_';

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
