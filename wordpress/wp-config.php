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
define( 'DB_NAME', 'wpdatabase' );

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
define( 'AUTH_KEY',         '6`|whC[Uqm.szg4$pc.9jCco&9?e<g=;=cNhH5@ev2W.H88XlD~X;BD)2@guv0l}' );
define( 'SECURE_AUTH_KEY',  'YJ$|+.G-s1LG:dK^Z>O8`5).qY?nPzED0`T!0[t5NY>HmgjKH;IY@I|XbvpYS,=+' );
define( 'LOGGED_IN_KEY',    '@A`%! c|wul!(~b5?YXGB+xF. l#Mg=.)|zl),})TY URg{+%klw>;]MUTW*FyI{' );
define( 'NONCE_KEY',        'xv.8/P$+jA=7a)Fzh5ssiOnlbo`8&iCXTr*xUi(_Jz*$5jPwe5L4J:$ULi!S<.Z(' );
define( 'AUTH_SALT',        'Yi.~!e#&h[?F#XSh)Aqa~#|GH9)&6F%zA)aE[ts~@}yuZe&YniEhjIA:EatB|_Ml' );
define( 'SECURE_AUTH_SALT', '#%.h!$]LP%-Hl}%D^(K`~gnk]t=tQpWQO}e5W+he(RdF`00y>Kw[NF|PbNo@8(BZ' );
define( 'LOGGED_IN_SALT',   '(hQceIzX,EW;EV)E~ D+iep;v$jZD{HM+${)[Va>*K9!X*v+{mCYjssy^MUUxC&J' );
define( 'NONCE_SALT',       'NISBqOb,EVvs,Ntg+p3?[gpmt4i2436&Z-wRC|g6+SW^I7qP/IfNvTE]yVXtT[:o' );

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
