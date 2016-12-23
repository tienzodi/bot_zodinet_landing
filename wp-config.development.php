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
define('DB_NAME', 'botlanding');

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

define('WP_HOME','http://botlanding.local:88/');
define('WP_SITEURL','http://botlanding.local:88/');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ']Es{`D[6VUNuv.e.*%>ahLb_epJMQ!r6oh3?Oj$)e.r4{XV!z,./;5ObVDdSxjCc');
define('SECURE_AUTH_KEY',  'XIaE,Lf.^VMl@9%(n`y~`?]n7A[HjpgW~cz nQ,7 rsge[ BUzQsEu)?ZVLzPM(?');
define('LOGGED_IN_KEY',    '=T7AYexkO/zc+BW*Eif<.87Ll/o~s]mR&4[nlp?RF%48B,d/o2X8K#7/`blwQS2m');
define('NONCE_KEY',        'g%os|Vs=<a;<mK|16}Jm[oTgaN#.V@w}vrNN|D@-ER`}(-.3Ih<tn;1^qQ-}FpH?');
define('AUTH_SALT',        'hSaF9L<p+Bra%bg//!$p@liWD):G:9VNWyJxKZA^32jtv<+O1X4!S]GTr7Fvr@C_');
define('SECURE_AUTH_SALT', 'v<wz(_JGiwe0N5FmyFeN_NV7p>:6o<=ZE?,U[P<|X6y1WI1/U2b|ZT4#Wm?r$Ln&');
define('LOGGED_IN_SALT',   'ylz$?^?Okm!3)yuhrQ _D[$=O-)m,c@?}PZ(^n,YXehB=Z;TI-NnF~axfWlu%)&D');
define('NONCE_SALT',       '.~k2K@@A+Vs+y:/oZ?R=^f1~5HC;=Q2Q#Zn.UE9gd=IP|O5,}{j!OZ F2R},9`?X');

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
