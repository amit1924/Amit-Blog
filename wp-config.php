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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'amit blog' );

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
define( 'AUTH_KEY',         'L]kt,2mMD%,#Uu.#C)guF0Y<laXe(Y[ N!~[k[H=4U4(35jk|.EJ_HInO-<jiOEm' );
define( 'SECURE_AUTH_KEY',  'xYu7bJo1CHm$18X@I#~1,Nw} GFD7txEMm?]<S0*Mfp~kLC~)mLIkhbQ6PSTf(($' );
define( 'LOGGED_IN_KEY',    'Z!Pa,x40Rc}/(QtVC**]*J8(:rPpt)m!D^y=M <V<?$VrV9<Q3&l1F*0faiq[YXT' );
define( 'NONCE_KEY',        '<|y@tEf^1h,[>wE~>m<E.#vb=xiNAI5 Jg~Fw&_`wp32>nZuPt4I(R6td%Uz}q$b' );
define( 'AUTH_SALT',        '/W,]St&`^o0 >&Q(9/4I>4P71radIbhrdXm?vxQQ6V)li$L?$rzYOiG~nMqECe,Q' );
define( 'SECURE_AUTH_SALT', 'J`=8SiH]Kz,b2<Ffv]*NzAV=M8w%w jD=m183ANay5RVMnw>&-^)5:1C c({PK<h' );
define( 'LOGGED_IN_SALT',   'X);]rgxb-ko(+CMXMxMMEj^4+7m!,M:WoG@?l.5;9#x}!|.g`X9W?oA>BUq}rp[V' );
define( 'NONCE_SALT',       'ks02(d+-[OUs}J}oy}J4CcC@sv?#3_jJ}-U#W.cuvl_0>z,; uFqN6CcD*UK:!`+' );

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
