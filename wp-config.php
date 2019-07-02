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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/mnt/data/vhosts/casite-1113450.cloudaccess.net/httpdocs/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'fveqlbmx');

/** MySQL database username */
define('DB_USER', 'fveqlbmx');

/** MySQL database password */
define('DB_PASSWORD', 'mz7j7@9LCSxU#7');

/** MySQL hostname */
define('DB_HOST', 'db');

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
define('AUTH_KEY', 'TY:]7]GB/IxfV+J1O%[81sz?WnFv,Chf');
define('SECURE_AUTH_KEY', 'B~hV5RHz*n0A:I)kt3$nkt!4L^6ZS]0W');
define('LOGGED_IN_KEY', '=}KDe3r823y]KY->N+N*gxcEYn7>&9z ');
define('NONCE_KEY', '5lJQr-Z4;Ag&_A8kp2W40H2shNB}00;a');
define('AUTH_SALT', '{$v).r1* K*z~~Y!Hd< Zd*N`G|k?!`d');
define('SECURE_AUTH_SALT', 'sBV%:!0v>3HI#ucP5FrUTK8-1R*rX{9q');
define('LOGGED_IN_SALT', ';l`NlzkB0|9y/G0R<yQ9JVc^C1hP)B(<');
define('NONCE_SALT', 'g&wwh6Z{clH`@zQXS`6B{6&;^78Yx8x ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gol_';

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
