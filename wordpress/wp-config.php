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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '7L1VE,|i*K*?b[(.QRC3K||aByn+R:BQGqpm1N+~.#pa6<@&v5!/f&Jr%Uc%s|9D');
define('SECURE_AUTH_KEY',  '*v%(u-Swjt:3B6*k(bj{!KIXux._%glLrNm`!!>dNLIxTjH,xi.tIW{jz]OSfkK3');
define('LOGGED_IN_KEY',    ':4VItw7:Ca%=vDKn0wPq[<u<9CV#lOFr6w-O,bk1g}v1|iw}goN<e$;K*tL(kCK%');
define('NONCE_KEY',        ':CZZ,De&QH=M.)>5DlTI|FwMQ!}?Y^`WXKy7tO~lFWn|hqa^-q_Pbfr<a[ex6d?o');
define('AUTH_SALT',        'ymdj&SL5<*7zWsD[O_e!tH/F^?e5tt{2Y>p_IbnwGAEM>!|;eEHh+A2a}+*1l]]3');
define('SECURE_AUTH_SALT', 'UVqxj]*{h%<Zx_I~>9|=]#/d[ZJFhc~Fjspv% :ftXSB&W,]<Q^~XcH0H7PcRJV[');
define('LOGGED_IN_SALT',   '!)0Zb*DOZ T|4XdcpAH)h]+N7?|Eo{JV#TDkGn%3 ]Du_6U]omNtLkp7NDD{7~;@');
define('NONCE_SALT',       'B:Q 3/E5ur~.$2~g[tZc2Ye /n/3fwDFt>[Hs0.$29!?_Fv@9k(e,/ ? |7/&/uT');

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
