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
define('DB_NAME', 'wp_syst_2013');

/** MySQL database username */
define('DB_USER', 'syst_usr_wp');

/** MySQL database password */
define('DB_PASSWORD', '5ruGaswePr');

/** MySQL hostname */
define('DB_HOST', '81.27.106.131');

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
define('AUTH_KEY',         ';_Zp1dfDXFQHy*}.ajIK13m$+c)<}/:{N@C`8V})iW$1e().3H#T_OT;h~H;c[]:');
define('SECURE_AUTH_KEY',  'L2aN;Jz0xdeSUt )8t`OC]D}vu5Zt]N79><@C3yy:&u)7:Ti|p)&CF;0P9hASH=Y');
define('LOGGED_IN_KEY',    ',Ws=7?C{op1n4xBDa}ZOx[h!uF0C[Y4eToE)xn8pr@?&.fzL;z{6oQ9z*y>P.:7)');
define('NONCE_KEY',        ']^`|@*7.ba!LFxwx!fEHUS86}!b +WU2-qe?d&x$1:!KB.rS)6dYn.4OVT,<bU<:');
define('AUTH_SALT',        's3sQq{Bdvu.RCoP^no2|&3`$I9#QHnHgl~`?+b%C|kxD9]2U6<c&cUp0TdycR1`+');
define('SECURE_AUTH_SALT', '21C:1YB[5cxEzSH}`g&qx9,<7jk)30xDG]=NNy4wu}2yM.u2NCLx5ktJkn_oV#uH');
define('LOGGED_IN_SALT',   'mo)wy#d_e)v0%dj.n*GlC_=mzbfUh|&iwr:IvmQy@ywj5xvj(rX=6T_;X_D:|RX0');
define('NONCE_SALT',       '-F7yN8u%.HNw7w5Gp]c)-%l(~4zJ;QO_I-v?J|gl!2u>3G;Ybca)+/jQ5~i0@g7p');

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