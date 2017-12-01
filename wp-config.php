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
define('DB_NAME', 'db_train_wp');

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
define('AUTH_KEY',         '~7L:]loPWLeKO8{7,@b O+x|ZW{lz>]5R%RL:F1?7JIN&ViLO%}EqY(|qiYxJ!h=');
define('SECURE_AUTH_KEY',  'VSMBAxdj;.#],r;i7mE7kbD]M5U,%rGHTBv42p;fmk,DNg):,rL*,nU0 2mRIiYr');
define('LOGGED_IN_KEY',    'k]7#XYHd-L#!;V|p/TK6jI??2kl1yQLIg3q8(yu[w5]y0u~q8I@*7=x{ReAmLT9+');
define('NONCE_KEY',        'X61}!T*(4L2vZTae$_/E`-fqq]jR)m)8m7&CX-@XjyhwZal8/_JT9sUf Q(uY|J-');
define('AUTH_SALT',        'X>LwSG`CX[}MGuTH}*MVR,8&LxLEcM+^M{r|3iw1;^Ie3AiZ!t5E[dB]8!w%HK ~');
define('SECURE_AUTH_SALT', '^.v<2zTcm+>?,Td:7y9:{noLkR~sW~k&U.Gtjbup5k=W5k(hT6jdoro*W@)G|U$K');
define('LOGGED_IN_SALT',   '2<n~@}rF3,WW~u 7l`5$yf?W8I1zjq#k&L/p;D%~[^?99tz[T|yQFes:GlEn-5-k');
define('NONCE_SALT',       'IC+#M6wk38;puX+)x5>_U``S[yVK#&4n!UwtKhCe@ o_~Mjz?Ac=+.[VL>b5&;N=');

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
