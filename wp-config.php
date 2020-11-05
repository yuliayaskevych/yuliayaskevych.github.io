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
define( 'DB_NAME', 'autonomy' );

/** MySQL database username */
define( 'DB_USER', 'autonomyAdmin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'HDEh98wQv7wv' );

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
define( 'AUTH_KEY',         '_S19h0yCX_iE_i|~X0>?Kl/@lBV;BRPww&{ZLEmQ{aK+5W`6oHX5u.8sDMYU29l)' );
define( 'SECURE_AUTH_KEY',  'id<c[^iZRd?nBkgu{d/pW`=0C<w`$m8NGV3<g6q&pU49$5[Q0}URS(o10lUJ-U21' );
define( 'LOGGED_IN_KEY',    ',k_$L?k+sZX,H}g8/}+}X`}Az;BM=S&7`^_2_|RWyqe90litHaP5!GO6Gm]S`BQL' );
define( 'NONCE_KEY',        '>H>8J@4cTu]MT9v1>u6M~8HUp{@05?,h[6&(p&&uz=]_s)j>5Cp3|WKpB/zB78KR' );
define( 'AUTH_SALT',        'YhuvL@%V*chwu+sbpPs@r6>[>5qJPM9?Xz&vgvL)S~uVu&R9cy{;?KAyeW5?hGsR' );
define( 'SECURE_AUTH_SALT', 'MvI9[xII++D,_RQh*HT,/EVG[E0;>M7aY)_+]7Mrnb<5U-.8yBAG(WTd*j,u#kO ' );
define( 'LOGGED_IN_SALT',   '<TX_Gsyx7yJH+Yr~T8nzto<E33 3jadAUto/@zs(Z-BH^/j2TFL;Z%[7>6fIHJ=;' );
define( 'NONCE_SALT',       '>DM<h]{xiz%I-~PhR;UbPwr&2Pam_xY,/ ^G8?8B1nGVE4o6}4Mir`ny? GE3|Ob' );

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
