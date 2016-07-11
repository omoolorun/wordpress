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
define('DB_NAME', 'giftedhandsdb');

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
define('AUTH_KEY',         '#(f`x/.P?{D`E-j$:r0nB@a~$` `N2JY12E9[{=&1?V6]UL,5/Gxc~{O6/lvs`/O');
define('SECURE_AUTH_KEY',  'gb[i/1gM/V4CM&BqA7=`)cyT?BON~It79!%VvJnANfk6#/=dK%7HY8-&)v$VOF/m');
define('LOGGED_IN_KEY',    '%9+:h.}_SaFz.L1:Qt nca$/!K eT2 k@pDffH-y1lCc[6@Er;7*rxqsVQ%1}Oxo');
define('NONCE_KEY',        'qz;w3m8}U3>yYXc/?E3$Z298X4n+RPzPPQGf[zx:JYrn:7oD3{H9Szy-cLziTAz8');
define('AUTH_SALT',        '+K* Ipg.?(^Ov;)_!zM!@h;2j.Q&NaVQo,<m#f 2;4u0)m9?NmuRw,Q H3me4]6}');
define('SECURE_AUTH_SALT', 'j-*dPn]+DwTpEkItb4fsJ<Cq7C&S5A./n2:1GyNzWjURzho@-68P&i{^3;xfA?PM');
define('LOGGED_IN_SALT',   '`Ql D;nZ8`$kvl>O`l+(mL,&(#^A:h:bHNdB*]3qz(gJ<6$-Ww5v~/cD!bz=a=r<');
define('NONCE_SALT',       'Dh<aXe@b@~M,B M%S4nX`{4AuG LH[Dkp{hWA4QBK8J!IB1&,D. r`wARJZ4S(o9');

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
