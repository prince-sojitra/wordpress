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
define( 'DB_NAME', 'demo2' );

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
define( 'AUTH_KEY',         '#&Vwe>hZ?K|.,##w`pD(tYWcTN|t^;n2bGX|});IsJwD,yXfnIghCFf=/tA!3I+W' );
define( 'SECURE_AUTH_KEY',  '^Mu{u6{ N] McKps0!I#W&a,$a}|y-bz=n/]MU<]cwzj1S-8{LQFnw57K5`rrk8}' );
define( 'LOGGED_IN_KEY',    'Xy9T,]CLIqMVzk;RH9,i~/)<H1<Jh$l<%s`aIvL/ irnYd}sMna2f46xTt4p65Nl' );
define( 'NONCE_KEY',        '@d?A~j;0=bcJv/QXUCb&uy8(#]*O~r)?UYIy},&*I9S#HNJH{xlS%# ^ltZzOK)0' );
define( 'AUTH_SALT',        '_ZY{p.;@>eVhOlPo+UN.h$!OA(c|@L]Br`Y,:4Kj>FelAK2a-$v+wK/vxHD+>* t' );
define( 'SECURE_AUTH_SALT', '~ZgpD!=syMp5n]i_W^Htmm7+epo^,cp:Q42fmFy/8+s]HMN]vus0;W)j,(,Yc1:`' );
define( 'LOGGED_IN_SALT',   '7fB% PAs{hbch2t|^?9gUy,n@X04L(wI#$9W_ORJ[C@^-IAhK~8:(akL!06B`|:/' );
define( 'NONCE_SALT',       '%?:kq-|7:VD_ $*mcn.6?f_>nalHY-t{o7X6B2hCs7Jjd+C&M4@7mdQ~vH@k][(V' );

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
