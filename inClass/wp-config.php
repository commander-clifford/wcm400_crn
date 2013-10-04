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
define('DB_NAME', 'cliffords_wcm_database');

/** MySQL database username */
define('DB_USER', 'clifford');

/** MySQL database password */
define('DB_PASSWORD', 'LSQJzFPm2mSzbzA2');

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
define('AUTH_KEY',         '~HlZ`8#i:oo`f[Pq]boY+|H+7nV&cG|LF5Iy^u(>oe++>2x3m#DB(F@Rz(*[$-p$');
define('SECURE_AUTH_KEY',  'P:;3q+]2VRw[H.<=.94:RB,dK`zVNT28vlL:=vmEe/v-[nJK+<AB*#2gA .a9|gl');
define('LOGGED_IN_KEY',    '+Y}6uw1iAx~]cf0c3|Xc6S?.sn<%)f~6O%;NbA+[piTyGqKyY]~Vq:5ZIy&e IXe');
define('NONCE_KEY',        '*nvyJM!KfcJ)&6H*!zVYpb3)K:q/]sx|56)+[#%[>&4/;Ohu>XB`MM%M]{u0jZYC');
define('AUTH_SALT',        '![S9~rtHM1*a`f,j?l2/H2Bh=O0A@skQUUWXvePfb] *-wL2+g!pOvxfe1A])Bl=');
define('SECURE_AUTH_SALT', 'Ot;U2+KrP&Q1@X+>rc%u.MaG[TB^va@!D79j6F:Yy8vdD}|hq+!b,o)0d?`A4L5M');
define('LOGGED_IN_SALT',   'I,bR|^2/=GO!;6wegL`eEKl,p:PRCm2`4m Ppr+k^zJ%DCoZ8lw@wnx%IkZe=j%J');
define('NONCE_SALT',       'Ea58 iwe86.swv7jktvj=)do|=m/xemWP:_O-7SJc$!t5-AHs(R,_BMLR^te:_T|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'crnwp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
