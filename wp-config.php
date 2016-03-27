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
define('DB_NAME', 'aesteticalfilm');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '/DFuO&!IZ;5b%TC:kk)+hG6FC9kY{vfvWU`lpc_zkh-NHDk;w0L*;1D+%$rvg!7<');
define('SECURE_AUTH_KEY',  ';+|2Wi0EL?!dJeOe6}7/E+V+Io,=rqnS_NpqT4EtlK1`c1dlN`e]PKw?#1Ho=TbP');
define('LOGGED_IN_KEY',    '0ehv:5Z5u5!62p}4xn8~9#DsdA|NhY*u:}GRg %E8BQzFr1q#V;[y;kj-YFHXoR6');
define('NONCE_KEY',        'sso~|&S}evK(-d(Yn|%KmF1{B_  5hqgZ$c=pn<tuB61tM9TSBW5wcY9Np4WGgXy');
define('AUTH_SALT',        'uRKOGpAKVN+U19Wl($$)G*xqrvHS[Rx(Nw+`S#P<#WNbV<A%W22f!ju{W-gVi0z:');
define('SECURE_AUTH_SALT', 'e6Op5(zSzr#pm?@^~,5Ay:G-pHAwj(X,(92-9k-n-DVVlJM%}y4=j+6ZPO6R_W-%');
define('LOGGED_IN_SALT',   'r<l6R)A)-M[0-0F#}o>-42zCzan;7h(;#Bj~<Wkt]ua!#:q=s>R{.{Fk#zM}eG=-');
define('NONCE_SALT',       'O%i;xMSnNC8@^kf,gU/I+oqf|8*mvd8rSz#g@i<b=2}gP1I+&KPzX3>:67LUx2.q');

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
