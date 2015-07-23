<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp-bootstrap-sidebar');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'JB>`u+&amV@*M/BVhJ3tX0W0l_{izMM1X<S4](,-bp~f_R9xf}s{]6lNNwe.[=@/');
define('SECURE_AUTH_KEY',  'eK<J8DMna|`3)u$W8*D6Pr&ilRqt4NAL WHjCTpBICP%MNeqBoI,$&!WSu|q#n5`');
define('LOGGED_IN_KEY',    '+*b8E-A4QYIz}:EA yEbrU|}lRPS<<llwz{0m^DP**t3-Mlx cIgI8|nC+y><GL+');
define('NONCE_KEY',        'L+kKNVa_WJ#aZ[ST,v;15pp[J|TWrn T`:3hn55f$ew#U=/+C{-E<y09rfQ;)bmU');
define('AUTH_SALT',        '-TC{Cb,11_)sau:4@Y+]z1fgS@oTHAa3M|I#m2p|r5qKVM1W}46Bhfpt^+X4o5!S');
define('SECURE_AUTH_SALT', 's3j>lWlfqkdz]:J,@$4bz ~wwy}.A>oD=!Jb1tx6:e97KO/(A2:nijjd0O|3(*8/');
define('LOGGED_IN_SALT',   'JBL}nBr6tPM3_};9pl_OgBF*%&f}v8609>X,+8KkvAs30uv=%m~}mTGXSP$-5K/O');
define('NONCE_SALT',       'Z%4kW)nE5UPh{N{;`u JBZm`|}c;fS[tD^w8bdc+HTbQ{:Qj8J[unUfzBg8Ruapy');

/**#@-*/

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
