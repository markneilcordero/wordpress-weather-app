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
define( 'DB_NAME', 'wordpress_weather_app' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         ']mX.W*>Kux;[e{e95W2*ti*7Gm/J0/L$GN#=#=Yn|KKXB)aM1t!TVRc?1d@T&JqD' );
define( 'SECURE_AUTH_KEY',  '7)eX}k#Lud_:J=3{=2IG|$$R>:AZ{x(Yn~3!/F9QnPF=#n2}2qpg,-VWiS^25!u*' );
define( 'LOGGED_IN_KEY',    '|yzofP>;T^4evlMdm?F4~=^6[AoV^?(kq|68A,OG~6kFx<+fhv19p[a7yxX#zgT(' );
define( 'NONCE_KEY',        'G0:GFm*H%aL)eAsi3[.O,O(S2)Bx,A<[Gu%LU%ZX#%Ma/3N*.fAm%7jRIuNE8F6$' );
define( 'AUTH_SALT',        ',TSe[OV=P{b!;SYqzX{=yBnwE4ZPpK<q}g<4b(9K=x1%&Nt&v.R$(b!dO?,-!*s<' );
define( 'SECURE_AUTH_SALT', 'j^lBt#1`kfeJ~2Z%hv@iJ5_FOj){-[^0nhCN7&5=4a:[&{/OmPOlVWyOp6nwv$BP' );
define( 'LOGGED_IN_SALT',   'gxb:ENyfKCyuU?tUg)Mz7B0hv!I|gaf!54{}gv:,4{ocst01n<W#9(FwJ|D{&tJ*' );
define( 'NONCE_SALT',       '*pVwm/o:Dx`M#XC_[10~k7*$p(~^g2[%*P;K U:%E<d>Muf^pr,WC~lb4nzS*%R3' );

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
