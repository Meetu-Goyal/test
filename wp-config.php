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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'meetug' );

/** MySQL database username */
define( 'DB_USER', 'meetu' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Rai@101001' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
set_time_limit(900);

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
define( 'AUTH_KEY',         'i7!]qRjOqC^h_A,EnG?D1fBf7(,4UP:UC/8<Dgq$kBnNTfmZZUDE%IIoDNG2H|Bl' );
define( 'SECURE_AUTH_KEY',  '{/*%6w/E@<fyB=N>vIipM1M%1SW^B~Srh*#F=pq~A;gH<.o]<D)WxJ--e.WPq8U9' );
define( 'LOGGED_IN_KEY',    '+Ol_Oc<%!hZS7Ln:&SWr6K+=1@C!^$!i_,=8W|8O1q}Uv,Wb/!_L;Q?|_uhqUGol' );
define( 'NONCE_KEY',        '.IC#3I$s&dz!wJ$%qz/Zq8PoR|v^j38S#P7(MGODi4xR=@3Syo?I:*]j!~-1%s*%' );
define( 'AUTH_SALT',        '`7&9uAp49 ,c52s`m&XB?KNfLC qk@K4>>rn6lI^%bXQyvJ1Un4Fd73{l/LmuJws' );
define( 'SECURE_AUTH_SALT', 'D+cXp>jOt]H-<@_E*4n6: 5K:K&ByWEd}sZAh9:MFvd;^|qEqlIN_<9YU,QwL5em' );
define( 'LOGGED_IN_SALT',   'P[6G~IiL,uP2h:~T|6pLH6,zz$65,l4pGE=8UcX+V|wk0J4I4FM1$S?]*Qk9GwSD' );
define( 'NONCE_SALT',       '@qOPKDaITW^?)^W7Zmq8*X~^+,nfAq)egMayYVKeipK~U/0?z;Apq[/zFN~yjcE(' );

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
define('ALLOW_UNFILTERED_UPLOADS', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
