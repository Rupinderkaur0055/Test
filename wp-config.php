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
define('AUTH_KEY',         'Cxkp&0]@hxc5j8lCf}09MA6p+H13,YkCEc7m3D:349L>A%BYh=Ud6}Z.FNdf=?T:');
define('SECURE_AUTH_KEY',  'RpJR|sGf(|2c&(6cOV*&:ShVfwzD8k{@kC-g&HYMKBwxjJDS_Rx!n$K;ye=W4ZN$');
define('LOGGED_IN_KEY',    '}}9a4h0$5iAJ TQOvQ5&PT$,,XYCS#V9KzZJ;4c<{]VLe/l:R`^A4JgiKg;> z>N');
define('NONCE_KEY',        '_&g.VJ24..F_>J4wEkX0BZXSzX||NWy%}@>]dm6Ph=oeJG.u!T,#@a0RK2}+CF/@');
define('AUTH_SALT',        '=mxJ]HL0^V2U6{nAk[~QQ;Oc{2sY3?,G Cq:r&,WgZ,!b0AHcHC/5vBqPQ7Cw^Y(');
define('SECURE_AUTH_SALT', 'cFaP``JYy_V$T*Uq3UeeP:pxT_iWoC0=V!m?|iie @<Tdl2t Bl?~IhKT}eQ!sut');
define('LOGGED_IN_SALT',   'HOfU jQrPF:s _{r!H)9?vWZ7t~6;/Ro8>&]?/6zprH6RZTHbp[d,S}<v6S} cYn');
define('NONCE_SALT',       'n<mntbWtbbV<xi11InD_rrk=5Fi9T/Gh~;mL7c!J5&b%E/FQZ@4,R#I%TjsGVT]5');

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
