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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '^PS-4<ml}WDurV5-JL^dD3XJVlC  amH?8xhqp,*JONfh-l.H&^srmYQ%uA]D/=,' );
define( 'SECURE_AUTH_KEY',   'o2HX:iqnN*UBtAa?K~0StscDI`tG,+B1VFFgM_3m.r??%A]TB80X|HKGs&@Bo3}j' );
define( 'LOGGED_IN_KEY',     'JO?D3wyK$Kz=PWs[2SI6j8Jc>rk0y;rrT_7c5.i-Fhg59@x+<ML~D_fws<yV[e5:' );
define( 'NONCE_KEY',         '.)du[l2]N$k&C6@[^a?0s{GklGOBz;F=pn&$`Qh/Oy;xp1d}QscPuM3)hryR3|cv' );
define( 'AUTH_SALT',         '`8H4M5Ap|;RfR>FmubZYm?.ns))+J(E6y)=l:9+%}M3jFqH9zv@dWlWW[_z{Ie3<' );
define( 'SECURE_AUTH_SALT',  '#9uF6V&= b!F;HeZTbFE;WbyV&:AJW8)-f<J5hOS?:qYzzHQ+^:kg5}85oTTxD-,' );
define( 'LOGGED_IN_SALT',    '1D7/Y-_iH.f%ofg]{0*|JG5`c^s!fM_:!Y<%dCoA9Eh6%Z2nfWMDbg$`]$^h]9[9' );
define( 'NONCE_SALT',        '<&TVx!rq`5i=7t5M?|i>^qtNhBbCyBt[Ri_il`mQ6J7-9KFjMNIJTv;6hdr;-Rn0' );
define( 'WP_CACHE_KEY_SALT', 'D|M~#aXX>5icw8FMFE=F;-?:l?JW0KhQ!xi.zgNg#x5lwA;a#)0x:y<ixy{hbK1q' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
