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
define( 'DB_NAME', 'localsite' );

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
define( 'AUTH_KEY',         '3xce8!*HoU0Nh!@W%&jgbFg){`O)!1t32u1UNYD.3[:ZDM>vr4 9SZ<7p5#@NWL~' );
define( 'SECURE_AUTH_KEY',  'c;2bm,]o|0;qMiQ_QoZ0)}$|&_KqR4,VZIT:@s)ePTK@mKckQ=^8FBbf#kllX8:E' );
define( 'LOGGED_IN_KEY',    'q|KsiRgl!KFm3LVL/+6{D)G4SjRlz 1_`<04yZXZ XRWhDP?H4;kx$:^e{W}3W$b' );
define( 'NONCE_KEY',        'k:08*`(0#2V(/7M-02df/jpbe!zL3ZTm$G^uY3,H63`<(E#vUJ`rA+~;k xqZ,BD' );
define( 'AUTH_SALT',        '{X7Xso=bT(S;5,ce cFL88f7z8)_@m9-lDUa}a7vf8q7]2gW]T-4BmgosC%i{PCg' );
define( 'SECURE_AUTH_SALT', '?y>fSzF<<sdF=pxeqB|%.-Ej2`Ah3mB.l(dZy{gN,AmcM$Q}j|[Kyu2T-s|y+TQV' );
define( 'LOGGED_IN_SALT',   'Jiz6ZZ:oY^Z0B3[bJB$x],_r|8GKD+NL:[Fa9vcgPb&?[y(ESs:*,8HI[MR?Xn/A' );
define( 'NONCE_SALT',       '8ZMceB}NXV!ZZWP5j0KB>#Q ljj{oTI6fTECWzj(l#sXX^Kde9c>QWF2gtc$ [qm' );

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
