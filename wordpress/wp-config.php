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
define('DB_NAME', 'test_database');

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
define('AUTH_KEY',         '`yM}8KH.~L:2ueWSQLK<:uDecl@v&i2G3#4KO_n4Pto}!ZufvVCW`&]!{$!V#-~z');
define('SECURE_AUTH_KEY',  'CJ@?9u:puOMa@hZvhGi4qb&V6QF|*R@l+38nZ0uM4pDcHqlhEBr)G{96/.Zp-Oi6');
define('LOGGED_IN_KEY',    'o{;?bNu}Tu3a]$kq71nHwFeyBS.LgQ;oTAx8p1;<l8)u5]tE33,])b3+Z7 _}Dls');
define('NONCE_KEY',        ')l#SMd;+g#GG%mX=-5c%yk~ell`ISRBFtqh{B1VBK=KpTcpZ |F>@B-(q+r-!XX>');
define('AUTH_SALT',        ']Jg5FI<QG~3:`pp_2)P6/,,$f$PJB|Uze;:uU;8&N=6x ;f!8*?r*=i|ED=%_r|C');
define('SECURE_AUTH_SALT', 'JTLB?z{kn8{zI:<dkvlG.* QF0A&E>FrN^#W4v`8gkQ&kBrfXWQ7cPh(K9bfc]j+');
define('LOGGED_IN_SALT',   '.jjoi8b1LRJ]>r(-6V4z}!t7>caM NOm(_Pt#pO4,.PNJ/8SwA<F3t_SXV)YmtgK');
define('NONCE_SALT',       'Op&Mbd,YzH=LbHT%`0X)T;z9d}FHIqkk9K9-@;<&86Zig4mu`A1aJRje$WZvvuUh');

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
