<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'arr_com_wp' );

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
define( 'AUTH_KEY',         'MhamUZgNAX2EGKaGEkl$^D@j3Cy0[uA,_n{W$oa0BTT(-vp]g/q.*zt@2@l[uDde' );
define( 'SECURE_AUTH_KEY',  '|=_*HawPfO]^DV`,~j(N{w 6Ru~9vD$@!?Mf-I=FE&%Oaj<#*JtH/~VG;=ON:oa]' );
define( 'LOGGED_IN_KEY',    'Tm|IpNM[x-W]|GF_1:bTvG|!L`Va3+9a<#!56)2eiUxBnDRc]:>V}OY|7RLXE0{1' );
define( 'NONCE_KEY',        'i4z>4QtL)^P-tk0?L!XYy6~njy<mly%I3-GHC.v+l4$bgwvYwtg`zMb(jg~R7_;O' );
define( 'AUTH_SALT',        'Ws- `(c)}DPo@Q7W2y[ix=py)H,!}U42oW@.~2!ZEGn6H;%YfMd/Z4whAX^rRoy-' );
define( 'SECURE_AUTH_SALT', '[rQv^LA5{+NqI26uxeviju-c]+X!5&Bpej94Z.x1(}eb5[VO(XR8<BaC|HBQ]+qb' );
define( 'LOGGED_IN_SALT',   ')SaY>~?BIMFtw}-`^v9zh`NRS_!snX3Hm&lD:,=%Yyc*YcgpFyDWK#W=8GkoX%s9' );
define( 'NONCE_SALT',       'UF<O I@wp}^N&rM0R[3vk|S*gT)TQ=@8dc`.NEK=I$40KB1&J3*;tgX?(BZ3|5[0' );

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
