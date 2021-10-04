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
define( 'DB_NAME', 'farimand' );

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
define( 'AUTH_KEY',         'X:N0wk;N2-Z<SQaE~Y 8*l%}jw>K&.C$%oc1]ZQa+UCvsC<+P4tV#K(-4;7JWmD8' );
define( 'SECURE_AUTH_KEY',  'bWX*nr(Vf>}^<j9-McyV}$K04NN>b{-+xJSxrKAaIS%ApXd28niCAnAJX(X7dL^q' );
define( 'LOGGED_IN_KEY',    '8J&iI$Z=(;gHy DF4f2yOM/2Di:Ca~k}9R%%NN8/4{!Gglab?Z.4ZCCe7]`>`gzL' );
define( 'NONCE_KEY',        'hz;FEoT:15G._vwbL!D;._?q5?dfHp8^mZ3aZn!C2e7AWYnt/j=!mxl=)beH7=Ms' );
define( 'AUTH_SALT',        'w{vV9U0AYYI6Sw8a[xe1y5##SQ2{6)GlHr,Zo.4bBx/22ubOcI%#:JIasL@;;?KD' );
define( 'SECURE_AUTH_SALT', 'arBRy=[?z;JryT(<+Fd3v&Z:?~m|~]iuo|R|1w{T]&8I<7=snCf6Y{ GAFvaxQ}*' );
define( 'LOGGED_IN_SALT',   'LaiW8X~66gl@V12C{N;oFO`Xi9CDra_:qE.|}=#s%<i2($M`YWJ>w6pJDCc#M4}#' );
define( 'NONCE_SALT',       '1ud8H+9hDSJJjqCVF(Z?kp3_:9upBUp,Vmt6v4eaIvtOh[p.WsCN]N@v^t]ca]C[' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'Par_';

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
