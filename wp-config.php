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
define('DB_NAME', 'whc-moving');

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
define('AUTH_KEY',         'AsG?P@h@a|)LaC0Z$DrWwlN?_;/F|<}jw*krij8!GALu}HW62oyW!kmW1.kU*ZQ4');
define('SECURE_AUTH_KEY',  '@O^(z+I7_l#3x:ArnaGpcH5bs0,}^1AbdP {cI|~z1yZai.90wcLujRM,KL!O3_X');
define('LOGGED_IN_KEY',    '|ET]/ !,DMBo+-zBAyDyI)p>hitk(KYuLTDTQfF*n?pw%KJEl^:1$([OQTmuC<~j');
define('NONCE_KEY',        ':Yb11IjWJ2]G-!Ox?1,^h0&XCda_Ue8,UJQ=gOB+V&5N1i6nK]L5Z<VnUEq&1&xj');
define('AUTH_SALT',        '3X_vzY8k6~>WDoDC<P)<~{Bbp.(A{Dp7!!9s5s;sB }$O</Vx1A>)5{JxSEUz6/c');
define('SECURE_AUTH_SALT', 'kqZgJW).Jn5aJ,)$cfZ<)gLIaT`v&6,.k+:Vtcqjk2Jg/4(5pFf2~)8pnrSpFxj_');
define('LOGGED_IN_SALT',   'L^Lz}/Y7C957ot?_$V)|*,8Yo%gAv3Dbr?!|G`z[/Ix/}Kg|y:u=Caxjt@/)->qR');
define('NONCE_SALT',       'ikld_K9{)g$pg: mH4EbYdY}S?wDA?gMHymHz9Ps{}Y[]46fFO:E9QY]uTj}:ZCW');

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
