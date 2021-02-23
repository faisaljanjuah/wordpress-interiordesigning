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
define('DB_NAME', 'okasha_db');

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

define('WP_ALLOW_REPAIR', true);
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@MO8]^wEpV&195Nq<{tDb7^lP;Yd<E1mN`Xn?|6XhQb!(FJHi6C @m>B],%UD&b1');
define('SECURE_AUTH_KEY',  'ihhvS#eY##vq9DZ&O=M_HMhe0:v8:/F[vYM||A.6tTiM{d9EF!x;tu`XYSG32aj^');
define('LOGGED_IN_KEY',    '}BA<x{N{/K@n{g+bDZ9K:=}u5hrk>jRp#vYo+c[?s7Yq5G4vU^[1~b/<98BQPu,]');
define('NONCE_KEY',        '`n!o@|:*=#Ml&2ZQB3=/o})2CaWaB&l*VzCN{a&6phg.S8&d:I^MJ{t`0(rpb)p{');
define('AUTH_SALT',        'XVGIv3s][OwT)x>s6=H8`-pcij|%^@F[vL#zHV@)OcVP9li:(X]^[) XDkV=0!p%');
define('SECURE_AUTH_SALT', '(0@uiu7b`5]cqrJ+pf;7$/U4F_x<`NEty44-#W)UiZ+uiL$>$[~.s;|@*?U[X;<T');
define('LOGGED_IN_SALT',   'q>m7%*V8Ba|JCuWK7weRHCyE,}Goi5MU;ALs3N]yF7HqE[WkLDRZpu$d(g$235t2');
define('NONCE_SALT',       '<aI~K|d/Rr=kA?Q=-hD{h|X4;hsAq]PgVN$_M Cl4~ F_BiGM&VLd8cS9eT@G:L-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'oi_';

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
