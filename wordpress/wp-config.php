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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'azhar' );

/** MySQL database password */
define( 'DB_PASSWORD', 'torabikA1#' );

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
define( 'AUTH_KEY',         '+HL=/uZMTuW`/[B;1J<5gvGiSU;7d@uy?-`-_DMC_8awT*Vi?_(Tsxb+%$8dIKJ^' );
define( 'SECURE_AUTH_KEY',  '?i%6Z8uRLOB`0to7j*MDxPFA;5(1EMm<]A}3+,u2{,z}L_(}4u/4e_-x]`-V0?_ ' );
define( 'LOGGED_IN_KEY',    'bdq7,VzrrZW_q:Z#q0`D#]p_(Z,Wno<2T}tYXG]e4fSGu4(#5m@/v^,;f/Lw}@E6' );
define( 'NONCE_KEY',        'InAa~QCHCAn>FsUAiGYDJZH/uH6E[FCGS%<RU%nD] L2S?u[VvQj4&iV8)YJQtdq' );
define( 'AUTH_SALT',        'O:8sWV9*6Y)7D{6;X@K`Ir8T 3qMY&BfBlX6!KxW~TrQPN&qi7v*y!^ElE5t#mG=' );
define( 'SECURE_AUTH_SALT', '9 P5S.JO7lNPhDQh<}S^gH;! En>A5~^O[4*,SKWpmr0u@`xzY7W|a>Y4p}`V*SA' );
define( 'LOGGED_IN_SALT',   'ODD#!{|:y xTx;O%0:8_h)Q4zDdQl>t rZcgZg//:WbmF!i(aMf_Py`aS~(G# LI' );
define( 'NONCE_SALT',       'AU;7kj8b1`*=%Lo^@x/>Qj0w4AKsjV-d^Ld;UTg f$3iXEASixH`n$KKFL>/>q;F' );

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
