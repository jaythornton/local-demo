<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'local_demo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'g:d_w[O:%AL=]|7EkljuBQ0m<0S|Go&{R bi>9!]^6n<8JXJ@rY9MWk%K[4Y`Py$');
define('SECURE_AUTH_KEY',  '#Br/5T4J7|]?-+zrp3eBOjqP13b]ZOUOGj-x<AZV| upjy +91kO>K<9aoyN!/tc');
define('LOGGED_IN_KEY',    '$~Uyuqys?s; rebH+dGDUP8(U+l&M$#U()Mr/6{K~tle;TBy2|*sUPHxhn191++5');
define('NONCE_KEY',        'J?yD{_<r;159>N1F+^o+Tzzg?|/Nb[-i=9|IUx<F8?}A<WDdJniWtduFS~RO2tB>');
define('AUTH_SALT',        'S+K[Y0^`U)/N}V$S&Xxf+Wae-`|:y;?Hv$ZY^9G P9,1idkgY7gB#o/!aett|0[e');
define('SECURE_AUTH_SALT', 'j=.c}7d#J|w $`-9B3f0,gGzNMVT!ySEp<fe7H%+UT`H8=PC@8E|L~ap(-$!;6#p');
define('LOGGED_IN_SALT',   ']b]+H|y+iHijY*%bd%(l{Alezn|<(+>OgCcOmJ+jIFT@&}7j.b}ReN&(T(O6l8dK');
define('NONCE_SALT',       '}S$&MU,kQ[JnF!j2m0 Wg&gWy)Xy)F4Df6G.#7{)&e_h@Lr)@|t9f!FZ0hHmRqx<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
