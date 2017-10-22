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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'G{F|SH[tYa~)CN1(>2o(ZJzD!(d.#y,&gL Qg,|x+x+HAt%2Dy3c-2^L3;<)^Zwv');
define('SECURE_AUTH_KEY',  '/kI[3bmcEuO=S6x|ub03DQ$JpWSd$>^Dv=z5{uX!RjG*}K(}ZodP;t_ODW+ltPeh');
define('LOGGED_IN_KEY',    'XC=&j@*>`%n?6Ne4/O4{=RZfM^i?b0pgN*G,7%<#qZ5U`I.{Fej.[n2ulJe[D}U*');
define('NONCE_KEY',        'XdQ0P{vyPbv?EwyBs;~YU2voIR{3(~e5K8v4fsh-yLAGa2LR`,S.IJL.T43t!)bE');
define('AUTH_SALT',        'z8!qDRh@=ce$~Jf=!lS.YJ[szRep0I+co{Q@|WR}DH8(ZaRD4[ID{2pK?91LW$2`');
define('SECURE_AUTH_SALT', 'Kd 1kC90PvCYCQNnYgY!kQ!jgYc[|}w7vOXuux/o5]Wx`(9`!EvdgrV%)jc=d0f;');
define('LOGGED_IN_SALT',   '*] Aq*R}K~ge -+`QN$#NEk4kq`*(XKfnCKA4QrIpIM>>hB|ltIAX+&.U%V?QkM{');
define('NONCE_SALT',       '#i{6pyfuj_Rt1Ql<} Mzf$##T.Gj-7: vBKCK_kPA%w}raf`=B;>pzADDnqO&M`U');

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
