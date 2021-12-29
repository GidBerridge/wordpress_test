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
define( 'DB_NAME', 'testdb' );

/** MySQL database username */
define( 'DB_USER', 'testuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 't3st-d@t@1' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'G|s_T4rm#!n+4N;2XS@d!uN%$G(=ru9TY`O*.2HKieM%G0aWTS+`_%X1to[.&nRr' );
define( 'SECURE_AUTH_KEY',  'T.#a-i^8%L5WWyW~u<M+2TUa4iJR`vF=rjc(TA6E#YM,bxDx{g-`b904&-KZvgQn' );
define( 'LOGGED_IN_KEY',    ',lt0M_ 5@22BU2F6_{<zh0.!Valy|P$`?!?J`-eQ7[-[vR{Y40J+au^N=_#=+B)h' );
define( 'NONCE_KEY',        'zCc%kPks,T?qabM^kK}q,sx1ArWCfS@(2m:Re)uzx>kq[L);cd@_Ev/83t4{l31b' );
define( 'AUTH_SALT',        'q9~3zMmhB7Z}@1#4) WrV#oDVzx=G2+D}PmeD?RfPP,aqSEe0g%PU8e(*RY_el?;' );
define( 'SECURE_AUTH_SALT', '9|SLuu;>ilK?NZL(,pE/bx>wA96U.Kso4<cqvzu]abt]92z4cvdg#B@zUH5rRd,]' );
define( 'LOGGED_IN_SALT',   'z4F<`wy-L2HL`P:PD43}`s|keD3s5;vq*1&Bp23-)v1A;f#`)yS+^-jU1-.}dCXJ' );
define( 'NONCE_SALT',       'Bs@Y!,v(0zbDg@=*L)o/-9<c`,OJIWg7O3b6YR|e^#nVNJ[:KF&MjSUh_[!v@#L%' );

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
