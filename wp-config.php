<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lava' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'v/}~z4 P@U.oiA5&rg[HKUX#.._Qk$&}UCxp,^!n1r[w_?u[sE5%?nqb$X|9Jn[b' );
define( 'SECURE_AUTH_KEY',  '>uLZ1gc.ce4jFdYTmB[g2e!lxBYk4T0FA>IC]t?LOzY_({o*&EG2;8+)r8#qP{:o' );
define( 'LOGGED_IN_KEY',    '6M~c?3}.Y=K$W`XoFAh$._K9GsczU:Ok5o]~QX]]u}Po0x<iY<vxcMv80QgN4_aL' );
define( 'NONCE_KEY',        '(L[84PGpD9T*)3$=W=[e_y@0UKa%CHvY01]AlIU=@HC{4j1<%puBq~<g(4XQ !(s' );
define( 'AUTH_SALT',        '4n$T1hfGC#2[xdd<vW5B3=dAT~Aauqg}Q6=xR5 ;LG{7!~Bbp&(A1pC{`Z%<adBm' );
define( 'SECURE_AUTH_SALT', '<xoE>d4qkH,]s;^c<tl!}{Y>VL(J3R[KE3^qSlg?g{UJWNBPE<@~pxyM@lr0E}s#' );
define( 'LOGGED_IN_SALT',   'hOCSWn@s7v;!K&pS34};ZlAW$r2w}g2&ho]:Uf/$,BE,:@qYaOXOm>qZ%kK(DLii' );
define( 'NONCE_SALT',       'Neq/4$ QjJaN>kW9F7)3VQ;Q=u:Qk/f$h84{uS!puNW-yNL =5(A:v;=U2=S @OV' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
