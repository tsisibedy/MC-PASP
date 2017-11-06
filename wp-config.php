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
define('DB_NAME', 'mcpasp');

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
define('AUTH_KEY',         ']-#d-8/p~|ny BJjR}&:BzG,jIR2Jxhn1d|^#X]j|v8OV0[lHr6luHxQC!lzqW.D');
define('SECURE_AUTH_KEY',  '19E6,SLz-qG5akXl/0`lWbSWz5Z> GXsCz2k|w0XHrIbJ-kkuiX!pe8*r(zMgsFg');
define('LOGGED_IN_KEY',    '.aTW1_$w}diDQnM^PMCHImZS>Nyx6,%Meb?0w[f86/Z~s>.K*)Gt3C`~+L5i341R');
define('NONCE_KEY',        '`5#d4C6a8TzmM0ht}o/V}Xb2-|*jC]1+vs*B9jjm}^#sH?o(xqBV!YZwrwbao|7!');
define('AUTH_SALT',        'Rw{n= Aq{rwodP%S4t{{_rvKO#dhrbDs5#,0V6bXIv6inh!eE2.:m_HN`FbX>V]#');
define('SECURE_AUTH_SALT', 'Efm)GCD+spvPkVbD8K@YT,YXZnrXc:Y,/%D;ko7d(>}Z4ccmh]-L)P*N)#,,vv/V');
define('LOGGED_IN_SALT',   'Mc(WICwmSf]swm`dg@SOegjXqw*KH3G(T~M4,/)@I9Pg@Y,<jw!7^*q}A~uJ6(fF');
define('NONCE_SALT',       'OcNrJvoe=#> _k*Vck8PNJ5|0Y1CyuI#!{WbrQJI%-*<`CFaKIH%iYN]B1w7-EQ7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mc_';

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
