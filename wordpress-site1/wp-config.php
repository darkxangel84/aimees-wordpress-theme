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
define('DB_NAME', 'aimee1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'icTX31lT9V7#6Cj(*H649Wa8Av2sh){+zN}fR5#-veS`5:FxWhPQ$ +CCC]c+0/i');
define('SECURE_AUTH_KEY',  'RDz2 p.*-BW#xUA{Y1V|R!>9,07^V*%_AOH^.Q;IhMoSx2tJj.67>+sjRK~?VlLS');
define('LOGGED_IN_KEY',    'l pct>h2c#vq2r`@UTmxD4`)94p2u/V-p!txC0U7VHyN60cn4+(JXRir{ISLMTaT');
define('NONCE_KEY',        ')vf*^Bp~M{<@mfowk<jbRHaoOzV Pe2d$; ns0gHZ :$);$dN)?M4Pom}j[}F2SE');
define('AUTH_SALT',        '?N%!fd1&&<E]Wfh6H>!ph.CVvp2!%`P<<h=pH*bTj`H$dRq#$c#ZShB:3nj!#v9:');
define('SECURE_AUTH_SALT', '8_?RD/riDdN[56C&iGq<UBBkFk#>XTu3#Y4[Q<&D!k~]w#> E.97+IPKf^49[<%%');
define('LOGGED_IN_SALT',   'yGaa!JXNw#TxxP<1,_RwcFQ3oo8x==>l %>a(c7Gv%^b0]ad!]aK>!@39TU&DiI>');
define('NONCE_SALT',       'mI/c,Wld&$SyP.zQ9Lido<oKD(HOz7wTmYDk/0F}Aqk]g,N($aHA.g)._4zE@l#I');

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
