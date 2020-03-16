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
define('DB_NAME', 'wp_03/07/2020');

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

/** The Database Collate type. Don't change this if in doubt. */
define('GMAIL_PASS', 'Beat5Aud10');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ';n{1B%OX^1l~GJ4sfWby/<bf`LO5Iug!8?Hrb|~&D` CQUx%Z|*rsDCGMy8.x5e2');
	define('SECURE_AUTH_KEY',  'Rlj3}( SO{OgbL&AAsWq!265N:s04c/WrucLX{7}Y;|a+~+],v%=^47B,.a,ee)u');
	define('LOGGED_IN_KEY',    'jPh:G|ciBptwbi6Od9b+-v1G|C<!E;k.HQ+1zvne(v5bt<ro3F1I,?(a4_.E{<c[');
	define('NONCE_KEY',        '+<-Mj_@5$S:fk<w$bY-9JY[-U!.}Mz @Hp>J$V]PfIp#=2{>216nvEo4?K%*-A>}');
	define('AUTH_SALT',        'T/h.rVpho`?+N[svXxe%v1H8^Smth<<+#CG(.o9t)!2%QK+6igF&-Fl1kTI9bb)J');
	define('SECURE_AUTH_SALT', 'h+GjJI7UhY[2>C1(FOdPX1Hk89,<I2Z_$AVNev!PZRO&:;D|G`uzx?Q/vP9ZgMH!');
	define('LOGGED_IN_SALT',   'I_Vo<q(}QiY}>^nITeX@4+jO_.m3Q?L)2W|n*2T*2(ipud[ Z1y>a0-,C<1|`K-[');
	define('NONCE_SALT',       'RL2oY|b2@a+6e1x@jAI8fX,DI-)N .5ku}{<L]-i/ij-CjXXg&PHV@y(f^5F+pdJ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '123_';

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

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
?>
