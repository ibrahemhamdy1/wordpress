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
define('AUTH_KEY',         'NI*atdTX a%HqK%kw<VH@:gJH)U *}5PR+DuOo?eJ;dq1^yU5LdB2N^/_F ]~iei');
define('SECURE_AUTH_KEY',  '[2BJ./t@DF*tKL[nE%aUas/6ms+u7bv24r u7~q~<tlZLD~$gTS[!7&&14OnjeAv');
define('LOGGED_IN_KEY',    '}8q6{6>*LlLA 6NX.5cL|W@2Yz5.ZhdDi#x;`zYf% K1dvXD0{$r_+=rE+7I0NAd');
define('NONCE_KEY',        ' uRG1iZ[RX+3~geABXIxoJnJ&!mCAhC;VfmA+V>m-%7)VY-}hmiNK~]Iy@y~~BRu');
define('AUTH_SALT',        's&ZB!8s49>sI@lF{RJ>|Gr#eBvXJ}6gX{0&J8eCK(.,PGV6IPw<u{]ay=Ey_-.~*');
define('SECURE_AUTH_SALT', '!m2AY{4evFh_ dw3=N#s57KhzV3)~HbsPyT}*4UP*V4HzT5GK5$DyzU?Kh/.paUj');
define('LOGGED_IN_SALT',   'QkYM879W#OejN,YE{{@fYJCQxZHL>I4j$04/gj%=XHAd&bN)Az;2!MipWGK3p M6');
define('NONCE_SALT',       '~{CP%(pn9T5hANCalN#0SOZhmx++ys@e&tNv@m^>ximHACHfSEOtJ2##.[.3mPJT');

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
