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
define('DB_NAME', 'wordpress_data');

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
define('AUTH_KEY',         '8&bJ+)7KxyqZHHO}@9,t3S-DQ]oL/*?DSemY5I?wT}rvuhTkY8J(JT%/S`/V&Su8');
define('SECURE_AUTH_KEY',  'A7V?)m^i[dht%ZhSf}WC6~X9$E}-fRD`a5X&.kZfsnDHg`Hf)*/WL!(v2&I0f-2$');
define('LOGGED_IN_KEY',    'kx5m92,h6::;4o.T)@(_lGsi7*(!]Jy^.h,]Z7{YKY q7G-&uRWil&9aa[d,ql]K');
define('NONCE_KEY',        's=(/]<:M9-T4f#FrNqVJ.LqYuwCyIeEbJox7A*T__5l{31bj(:DuuJPu#5h8$qiK');
define('AUTH_SALT',        '?(Znu[guCIH^0x1Wvn4V%w7zUG*y&nmxR*b`SR|iUIiS<g9]d}([/N01%{$q!|7Z');
define('SECURE_AUTH_SALT', '^BM;dB5Bi[/UKQ(,~CH?0#*iuptD2U oz>U~`B$^ov?}Opi(/(]30S]SGdfy3PZf');
define('LOGGED_IN_SALT',   '^)tt0[hc.wO9m/>k:1[!}z<i(eQ2vec#8He=ql!FDiU)clSQ[xPi>`VD:KrrR]w:');
define('NONCE_SALT',       'qt^|fbm:tq[6_!GxowRg-9EKl9C)WO7?:u%HK~jQf3A~o -vcCypdipngFL0pO+<');

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
