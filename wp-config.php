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
define('DB_NAME', 'samadlazaar');

/** MySQL database username */
define('DB_USER', 'samadlazaar');

/** MySQL database password */
define('DB_PASSWORD', 'U7ng4C9rQpCtJQnb');

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
define('AUTH_KEY',         'zk^IHb7i-rZ+5C%<qJyn4h)X|ZE*Wtu.psxT%M-$*dKRHn*3Orq!=rrj,~NguF0]');
define('SECURE_AUTH_KEY',  'PR~Br!BMQ<5i0AgHs!|uOb28*kF:hwO-tn.s+L(neX]monu]*dqRe1L?Lmif}Fn^');
define('LOGGED_IN_KEY',    'hvQ`Q4[?aIkT&.)Ydu)VFBDJ#v8n^|Kpo[z9u-/QF&&|n|#4^^4Ka1ae(6X;kg;9');
define('NONCE_KEY',        'Iko+k66OM$Pn3MQ<S:yW#zsoJ7]>~ZlQJmUa*m{Y+wpP@srNwS:G5!8qzW];FeGC');
define('AUTH_SALT',        'ddA2r.`Je4pX%{uM{UM^.+ zsqpc&>mK(hs9yqylxVD(s(P)@!SM?[&{5=C`j*&h');
define('SECURE_AUTH_SALT', ',;${$,n{ ]s)+ -3] &K=ZJYsQkCdyRsM@9jk[!(&X@tst7&7VuI7j}8Q)]!l6NC');
define('LOGGED_IN_SALT',   'z^f62}PJ%4q|_,C!o/Ya8<yBFbUGfAUY O2z(17!i[%:pTC2FlC(rk|:f<eOvcG0');
define('NONCE_SALT',       '>[X9a.(ZCZ>~Oc,6&Dv2)w!-|Ljs7~()t,@sJ,}ANQ*r6TNC&)w$l9cG!V::#kYd');

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
