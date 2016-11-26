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
define('DB_NAME', 'a_anhdan');

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
define('AUTH_KEY',         '27sU.D1J4wZ,/Q?i??V]zu>Kkpc=btDg/fP7l]uC!^Un7jR_nPE=;O3uBwxzD&z(');
define('SECURE_AUTH_KEY',  '^2mS~7@q%x 6O[*oL;K[meH2.Nz Z@e.7$::SjyAjF6O&.~86$$74PxZQO,^aHiz');
define('LOGGED_IN_KEY',    '[wjci_Q{#dnNfW#P&,Ll/6]b5V,tE2=5}@VLA,C[xxY1,|P)CXOSY{,hPsh7fwW/');
define('NONCE_KEY',        '{:p6KarBbJ_I:X+/MtW]#uo_8C#P9XpeW|L=[]<S$NeJdg*g@^{XF::/]orl&55s');
define('AUTH_SALT',        'X4>GnK248Nv`h%J}3^RZGsX)JKw|dS*^.<$UT,841SOo8RHa:NOO:+<[8[7yQgh>');
define('SECURE_AUTH_SALT', 'gF[lCR--[hvz%rQ>,?1A{$Czz1rQ^uL`8FGyk,Q:Plk$Hn8DXG`m{Ds6 /C2XJg:');
define('LOGGED_IN_SALT',   'cgF:E/kLp&9j-q(];jNT-0}Fk`[],%AglHr<U)@6~`1~)8~`7(^w8~*NQv_5[ow+');
define('NONCE_SALT',       '@YqF!s!bm<P:DsA2>8AnJ`viKG5Ali2~1zO``vf0t]8h;fB`|sp78XKH#aK;U {o');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ad_';

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
