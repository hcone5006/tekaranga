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
define( 'WPCACHEHOME', '/home2/scoobybu/public_html/tekaranga/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('WP_CACHE', true); //Added by WP-Cache Manager
define('DB_NAME', 'scoobybu_wrdp5');

/** MySQL database username */
define('DB_USER', 'scoobybu_wrdp5');

/** MySQL database password */
define('DB_PASSWORD', 'SZS9cRSxe6GqIS');

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
define('AUTH_KEY',         'kQgZ|bV33gRyYoNmnDTX0RHBKh<@JOMKoPqyU@Y00H!f#)W7M3f!pY#Dm-aH<mD-c1M/CmJ');
define('SECURE_AUTH_KEY',  'f:T^k\`*?0\`QF29Y>~pP(ryLcYjGlUUa7Ji5C0dwt7!/Vk$d-t>Pd)dtAYc!E0hlYV2P5y;');
define('LOGGED_IN_KEY',    'W_KtK~s>M8S1lvlo)amf67s1HqTVUTq)/GgQMfW=hA\`8@/AK>V~CyyX\`O>(B<bhRZK\`-S');
define('NONCE_KEY',        'qZOSys(APrG|IC!L)Kyy\`lgC9v>;mzz2gxC>#qatH\`xfOo?-DMNdR~3f/JP5b=uH@j_nREub');
define('AUTH_SALT',        'qjQ\`X39C8mqU(L)Fv>2GiGFJgs>)5qLMP!cdx9wX>j(vumn<Z7-D3wIFvOrdG/7B2y3#mFge!pI');
define('SECURE_AUTH_SALT', 'c>##7x@v\`C\`Ikx9997Bpdfl@R;NF5D*T:p*SNK2hukHv47c^Wfp7rh$U?rfEqTQ?3R');
define('LOGGED_IN_SALT',   'F?WV/j(9#kKmF2Vxq3ZYaUANZLLXEyIw^uRe^fftC-uESp)d(Uip)f*6p|?cF<R@CV-R@*fEi=?s_*aE');
define('NONCE_SALT',       'v>r2ReHJh=dqL0ry$KWAhlaitA91TqOczmbQroW^eMX6nBjqRU=~sDpG0xdg13We~!:');

/**#@-*/
define('AUTOSAVE_INTERVAL', 600 );
define('WP_POST_REVISIONS', 1);
define( 'WP_CRON_LOCK_TIMEOUT', 120 );
define( 'WP_AUTO_UPDATE_CORE', true );
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
//add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'auto_update_theme', '__return_true' );
