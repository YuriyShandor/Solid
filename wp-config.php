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
define('DB_NAME', 'solid');

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
define('AUTH_KEY',         '~w>bT`;SmJ#KO$>`W7WZuCT`l^5ZfX  !Z#&xes8n7C*p?Lhx(HIJ~ggyKDtAsR/');
define('SECURE_AUTH_KEY',  'KEQEL4hVD8`q?od?-81.)&OP,>6P/#UydR80EMCbN3iC[tp>P4FD&j+@4>D `9pZ');
define('LOGGED_IN_KEY',    'E]pJL.lhqf)>k/l)e>:!ZSfW9Zdqg+c6kvyKrmsBjmf)]%W&S3SS-I&t15+gb_Lz');
define('NONCE_KEY',        ',xr70$qUH3F^%#a/Y;Z5xA:aL+~Grz,WOCx/Gs Ewfm5-J+,CQ8PKHihJLgz6zD2');
define('AUTH_SALT',        'm=[?6;QyYpDcklRJNU?7C44r`[m]0UN0H9gS:!S.gA7WW1OW.GI8v0}5gIU$KIqc');
define('SECURE_AUTH_SALT', '/+9G/|zxPvs}8V(5e{gY}|MvO`ixMA%}E9=(u]?0H[+EK=q<,<JMdRtFu+c.*Kkp');
define('LOGGED_IN_SALT',   'Bw+rkq uAp#|?7}<9(MJo@$*zn[TT$N!3tsTTTk#&xGxeQ=XBaK&xxYEAGiLk#jl');
define('NONCE_SALT',       'gN 2Ij7E9b2Y]K1:oeoynZMY<(n.eQg%TQCEXz0i$&%%9Be?=6{#F.~m:VwvNsGr');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
