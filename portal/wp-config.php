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
define('DB_NAME', 'glaucoma_acgwp');

/** MySQL database username */
define('DB_USER', 'glaucoma_acgwp');

/** MySQL database password */
define('DB_PASSWORD', 'M-mP7S2Q!4');

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
define('AUTH_KEY',         '2p4z5nihn06gyawxy12rytu2ykiybanuqsys21cgn2rjenhdtyzgeunas2jtzwni');
define('SECURE_AUTH_KEY',  'y6w7h6fr9egimp7kjqrx3p5chluyhinicmalj2zeyyhkmbqziuuscf1ve5vioak7');
define('LOGGED_IN_KEY',    'zfyl7ffdd6kpgj0xidbzptqjuskkyuuzxzc3k64qvmonyb5wqoxp2qzaidln7oyu');
define('NONCE_KEY',        '7g2ftoo5zpi28ukriccb8mohgxwld19ij1pfx5jgnwi5li92h7eaxya3esywyquv');
define('AUTH_SALT',        '74yqws4luapygatlhtdl7fofso0sxsk0etugchjthytpwp2doeaphsh4neurispr');
define('SECURE_AUTH_SALT', 'v2mv0kbnve32q2jc4tdsypsee0tn4lvxe6wnw0rj04cktpz0mxg1d87dx28yypfl');
define('LOGGED_IN_SALT',   'd2x5uz2kktpsgvpigxjivb3zxuovazgfhl28xusepibddmb0zi7z0agflqk8wvrm');
define('NONCE_SALT',       'jgrgktja5mkxfv475ijyhoon3hbzztgiipsnbnlam7njjmboc5l94uuqee9kkx5g');

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
define('WPLANG', 'es_ES');

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
