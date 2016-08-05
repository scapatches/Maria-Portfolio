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
define('DB_NAME', 'Maria-Portfoilo');

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
define('AUTH_KEY',         '200,}vw=eekmW5R*TJ2fmp{Bj9({kRPh{$F$eEmUXU{_ob[NM!e!i0-1}04^kbM0');
define('SECURE_AUTH_KEY',  'Q4u_!iF,40?MU=`8k_H0CcUzUxBx<{T7jUX[hb2WC-){{gi*O2+o] WG.Ryr{>7~');
define('LOGGED_IN_KEY',    '8$!qG@(H[5u]~:UX@08sS=fw. # UT4J?]4hC:G)!VrBUUIg`961J<K<hy40QLN%');
define('NONCE_KEY',        '$byIp-HD@ppbW$BLTmc7+Tn$nY DWcGhy+e9Wv7=+3oA)do56Z2ki26=vIS)4]^t');
define('AUTH_SALT',        'Uj[+5$IOOl&Dr_S7i2eJhd$yn>N4M!A)Uz>wu0Y0PnMe_GlIJGmnE*CFV4 Z*~Po');
define('SECURE_AUTH_SALT', '4C*RYJ^1YXNnIc^q5eG(%O~b)K{L:4N>8jj(;VFZ_BhQ@5_HO.-*5o[`svry(2H%');
define('LOGGED_IN_SALT',   'wrD[^hmZ1 Ly8kAGp5/p/+JleQI#{V}rPDzgW%$fi, GRw~}pT9lE  Jyfa1aFFT');
define('NONCE_SALT',       ';>Y/r|QYRh6kO,kIvI!(v0Q<dVL|2;i82EbjX`5WgPj?iYhZ?`tt|*{H{KO/ua}G');

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
