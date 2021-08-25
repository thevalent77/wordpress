<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '@ifqlO+a0dWtZYWhKHg3vdi9Z=/Y1SFV#h5{yf#y]P[2X#t*9`F<kk:nC%=wjp;?');
define('SECURE_AUTH_KEY',  'xgBS6V91O^EFUGC690:w:#lq4!N%l~t;s,tp~6z(L-w,>vpLXj41?}$K]*A3bKfo');
define('LOGGED_IN_KEY',    '7?n]0XwgK+V*R.{8|T,Qnyim|1_i8^n%@2DyH//eoO38&PGp)Z`q0?TG7NOFD!05');
define('NONCE_KEY',        'p9>]E@y/VXXj!2vJhkEPXN:h~e[`=;`IAY3AFr?=~*KV~K/rB|yKD5F5]h<]J.p4');
define('AUTH_SALT',        'puWLb<a}~r)}CUWJrK|kq_hOaP`eOZv}fLOg/igBgq^8o5%~2&^h m>pg,}|#Zr0');
define('SECURE_AUTH_SALT', '}|t_h>) V0%L `uq]gN$Wt`s+2`q}5jhp@d4a50JaL]+X@04Fc^@)xfqkiy.&=?>');
define('LOGGED_IN_SALT',   'ZP~};p$2[;7!WygCFh/BReu,/[@E8l;=/&,y6&B<6B[goT&./5P6dRVE^)w>RuSu');
define('NONCE_SALT',       'PSN_mCdcvl,,%4C7<?!@AyYG^+ibQLldK2OPP[srZm<.b@wSo52X*YzhazpAj19m');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
