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
define('DB_NAME', 'wp_vergerfred');

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
define('AUTH_KEY',         '(,>8,.dBd9Q92G})K*b}YIJhlDG^-$<{OWv?2jFf],/],&}qA|T%Y9-XH6:iDbs/');
define('SECURE_AUTH_KEY',  '>k MtrRT0BJ&%]A2:~R# ,tGec]_httj@P@a*Y2!J,`u K4}!4$g`%2yUFSXdP#f');
define('LOGGED_IN_KEY',    ']8a!lC|Ctiq:l8F@YcQ9q,2a5v8yAI=*I mwOu{5ewp-!bL0Z(GP3 B+?,h1q)fo');
define('NONCE_KEY',        'va<Paaye8JY&:cV&_Vm*]BuS?!LyKjj7xB!dvj|}|*O<2HY<59 f6D#qQ0+bsKcV');
define('AUTH_SALT',        '(~ |T&*:;mUz}>pY47viKV`2a,7a8PtM<~-dW m}:GH$H8@k/7ZbsP1wm)iw+5OG');
define('SECURE_AUTH_SALT', 'idsSVmoVl<gluubg9EjP&K+g618Y>H*1]A?pYbYX+9<X6#V2V@.I#nt|`07G?z |');
define('LOGGED_IN_SALT',   '~tcLTjojED$HZ6~d1`#fldhiNyQ}7Jz#{o@5+m*bSv5[ MR+PM5DF o0u?BWvxhN');
define('NONCE_SALT',       ']9A2 g|Gh(!1t}DN lcMzBvVuhg(?x>58%tI+zEcR]*{jX0a^E|-anCOm%[alI;2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'vgf_';

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
