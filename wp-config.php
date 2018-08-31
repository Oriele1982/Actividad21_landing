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
define('DB_NAME', 'actividad21_wp');

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
define('AUTH_KEY',         '62OPC$LQM{Fm!446/$aV.L9G#3JLj&s!!h=l?S5m#*eYVx;u!RY6:4<uN1P4|yW,');
define('SECURE_AUTH_KEY',  'r:Pk8Ya7^!0iPVvj}@Q8)s/sT(u2|9Ogxo}lP!z!e6`]yY)c/90wR#c5zz%f:(]o');
define('LOGGED_IN_KEY',    '&LJ^o0Fy/r3]zj?0VO1WYVRF;xvEI)2M ,~PvH++G:=!|(=ZSvncY?p;pdBiYr9f');
define('NONCE_KEY',        'iCX_qh5J)YS_Tsqwook,ga%vX)w5e7TGAG]iNno^<hi]lG5GWGCEIKqpy)UgFpv4');
define('AUTH_SALT',        '-6Vcpa;PR8/Ro5q^h:I^p<XRS4c!X|..=:QWH4yi[6Do{zq5@-llAL?P)LP?PjIW');
define('SECURE_AUTH_SALT', 'cR=efvQjVR-> )arjI5i@Z4IiE,(@|3T>a7KUWNEC!mUg=WAl=TnA^y;G,;XP^8v');
define('LOGGED_IN_SALT',   '/ dEQX?iY<=4};?[)p>KsE.`9nNr7#*<^FivS;uHE^I5NI|JK-(duL=@4z)}z73+');
define('NONCE_SALT',       'bCu!:OK3/DM[0{@em[,43M$(>X#}$Y&d$]pVL6;uK<~*{;RkQddfjf:`nk R]w|w');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl_';

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
