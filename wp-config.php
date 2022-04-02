<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );
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
define( 'AUTH_KEY',         'N5dVZgqoz`#]ar3{>%{>|=zTg:T<CN!:@S7I`>_5ZT[!c/[G/0y/`$Oe:4;zgyKz' );
define( 'SECURE_AUTH_KEY',  '8v=]vL(SB;q@9e:s9(H+GMSlEBK1`e<`y,Qm}Bu*@^c3MX1[-ov}~2RvvECu:3a8' );
define( 'LOGGED_IN_KEY',    '1}uQab/xm1=4}t OD55{={H&f:G*8L4wT30VeP0~(qb!3aA<3p&z mzX4oc0RPRP' );
define( 'NONCE_KEY',        ']lnZ01?Ex*q?hzz8&uI=lSE0N3p[Y8T@89yo@g8thr:CjOk#DxB-9$`&Kjk<cXRG' );
define( 'AUTH_SALT',        '^a 0t0.&uH2}MWmTznI]9}cW%).&=7KDm+i3;CP5_d{Lcq7Os<d[*Xy@/JW-wuEx' );
define( 'SECURE_AUTH_SALT', '/=>:.uqa!c~x)R1&9fdK-(8?~;UrLBS]}Cq5YIj4/UYjfv.8l/2KK*<33aNlm#J#' );
define( 'LOGGED_IN_SALT',   'e.P5z)A%>J[<.wn[}l~B;f_d7]6B$h400z.&eWA}AYzyTIg[DEB4Ufb(H0l:(_e0' );
define( 'NONCE_SALT',       ',QGN^;92XTo}j*iD22APRdzxy O@Z;t}U]TYs>pJO^On85fID#d#z1vKrAEYxL+*' );
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