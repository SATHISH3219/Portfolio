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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'if0_35051758_wp16' );

/** Database username */
define( 'DB_USER', '35051758_1' );

/** Database password */
define( 'DB_PASSWORD', 'Q.S4p@kr49' );

/** Database hostname */
define( 'DB_HOST', 'sql207.byetcluster.com' );

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
define( 'AUTH_KEY',         'yhfoeryagbqfiu8cpyidyfdnhgbqnm4wvcixax6lyeoijxnlbewq2nn5myxs1ml0' );
define( 'SECURE_AUTH_KEY',  'dkb70wciilpqldpx99kb9xyl4ve3gykrwta8aa24i92l8gqafx0yuveuxuwls1za' );
define( 'LOGGED_IN_KEY',    '3wtoimweaiusqls5tosgxt2swn5s1ecg1o3xdhet2qwfsiroqa74docmfybpuvqq' );
define( 'NONCE_KEY',        'span1krmoa7qqdf22wlm5aj194r3za8rw0iszqearedvdha3gvkezgc5eacekoki' );
define( 'AUTH_SALT',        '6untusus934knqqzksf6ywqmymanh2zasdrrh3eu9polawhpndrcgxrov94nzast' );
define( 'SECURE_AUTH_SALT', 'hlwk4svh0q46kwa07tepxgr7rgih94hzjr68uuzbwnxcdek5sd0zwup2dj2hstrj' );
define( 'LOGGED_IN_SALT',   'srgpetzxv7adxhrfvoviodwizox9bhr2phov8hpiv7kckz3bcguycmnjyqhey0ux' );
define( 'NONCE_SALT',       'abpg3pp1jmav8jjlu0pgncldhnhyqjg9fpi9dhsffep55pt3kvt9npsadoozhllq' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpgh_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
