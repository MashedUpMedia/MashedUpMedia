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
define('DB_NAME', 'pwmcr982_mashedwp');

/** MySQL database username */
define('DB_USER', 'pwmcr982_mashed');

/** MySQL database password */
define('DB_PASSWORD', 'Bonnyrigg89');

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
define('AUTH_KEY',         '(:SCZXwL!Mo*6V6*RH?17$L0<Ni3_c[5Of?1YMV<wf%OOK8o?4(B[:v_dgmW+6|$');
define('SECURE_AUTH_KEY',  '}!=`HtvnWDJM(DWxpv74kV4FfEpkBBP@%z,yC5x85TU||@<DFd#|&KH-7B23(MoF');
define('LOGGED_IN_KEY',    'j*^[auWcp#7/M$;ooRPM1Dz|f~cq/z!uX&:h]Qio|_C;lJ^zFPmL1jR[etac@2p7');
define('NONCE_KEY',        'hl6`5hP_p}zcC,|,OQ|rcrt~d(tH|QPkkEW[}:ij(Hd4v9vB)uuRc+.H|Jr8Em=m');
define('AUTH_SALT',        'Y6+,&YfEg9g}>yEb~jlk$aCJ;M&0|BJV)86|Bu+Ab.8<a)U7$v6D=hb$:DVdWF[@');
define('SECURE_AUTH_SALT', 'Sc|]|A+kOY13p5.|tViU9/X?14yVQ`{Syb#k=#u8.iV4%x-5H=bF.<EyGIqrriv2');
define('LOGGED_IN_SALT',   '9B3-NpxDY>BM?FjzF-6xP}#6 qNv<Wg8g*t)m/wldG(-Px%!a^|!YJWQf5~}.j|-');
define('NONCE_SALT',       '8~SIR_KLIU12s~Zn!WQ8)dba{n=]#a+|`It/Y_|$x*fF:Tf-g5f|d&f(DT(GZC>9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
