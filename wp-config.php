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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hyderwordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'K;`?m4O>-5 }C=h!m@pr{Qpwjj4yRC{MHB?lH <J$LwTO_*Z6$QYLdpou<Lfxs#*' );
define( 'SECURE_AUTH_KEY',  't?v_jy.3}.nD~}pUA4I-GG,w`z|V]&V??1cKVT&a,E^$[D=(c/KL4^Rg:+D@ziZ-' );
define( 'LOGGED_IN_KEY',    ')2!AzBD*4>ABY+E5Ruy7>}>Ld@F`$yr<Cq[riq~sGy%M2k.jpShV+ot)fm2cWW8T' );
define( 'NONCE_KEY',        '}@pAkRLm=e# ^[Ix!}2}:|@*XvB@4=ESu][TEkHk~=gAgpfJHt3{_v*e-]K^Y#sH' );
define( 'AUTH_SALT',        '9uf1&U_F>gM5<${k?&~:E=Au)HdKZen>GAZybWMCC%|2?_x8ja1AxO%(Fr^V^n$@' );
define( 'SECURE_AUTH_SALT', 'L-5:o^=SP2_P}H{%88dz-.iURLDbq~G gHq)Bi1;AF>GagX*F2z?;/cx73pveVkz' );
define( 'LOGGED_IN_SALT',   '<76{eL{.M$g@K&B~wb>rPNUk$K1nDCLfgIcI^d]7Cj2I,rrh7WW91*6ht%g)_U<)' );
define( 'NONCE_SALT',       'h{V(?*Pum*N;[CzU9&6--T G^38SmCn/XnKuH*YOb8sU}$dF.0-D/UKwrR1ps[9l' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
