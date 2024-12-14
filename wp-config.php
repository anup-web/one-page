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
define('DB_NAME', 'onepagetemplates');

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
define('AUTH_KEY',         ',xLt[+DZg-zbu1Y7*i#fpE]S{ub-?r^$(.Gk5tCBrX&4w+LYmU4_YnajGKCt5_o@');
define('SECURE_AUTH_KEY',  '?Ln)+q1V?uAEfoT@MA5ke@qqIvd<xnoE;uSBggD>_w1)~|yZzI*jW!t!XK~-G_<]');
define('LOGGED_IN_KEY',    '[?w!wm(UhPz<kE[kcheAi6S$`-9%05mc|$_}v22sfVA~cC|ySFl%(vUkoPc%m#W[');
define('NONCE_KEY',        '3_8gk_d6rU1bw-xK{]ttI:U-:c5ZvT^b!]NUal<JjTt>rNTL)16f&rJVy.vdIru5');
define('AUTH_SALT',        'vg!Oi|8UzP3.?%U jl9A8Hu,(5GDv=l:pc>kIJiXuu1akYP-vV,1oLE)~Mo(5>=$');
define('SECURE_AUTH_SALT', 'j)A4(/[HF(Ed>F!r]:O$luv?c$ZKPyFOy9~1t}H tm;uz0BfHtLoV|q:QQRTEtQJ');
define('LOGGED_IN_SALT',   'a`t[~.VTI{QT86Lm=jaOB^w9E@LzT7zfA}x,%7#:Tlj6XBzW{N/P-&uy1BudaJ/X');
define('NONCE_SALT',       'k<zn):iI;R|,td4;O]D+7FNviW_#M7*q%P0zY hd [mE#~RAqR{PKr_|w(iBNOUn');

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
