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
define( 'DB_NAME', 'wordtreco' );

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
define( 'AUTH_KEY',         '1WsYAPB7P[#ytC~YNG*,,%&Pp@M_5[RgsyOu?]IOR5LJ^T#oxq=hJ,UK4q[Q>*Z:' );
define( 'SECURE_AUTH_KEY',  ';my1qpvmx~anwPi[m Vd|Ty>+lSBv-V:6VLxQ:9ciE<r.kCsUd$k0~{vW*!G?LXY' );
define( 'LOGGED_IN_KEY',    '!x2/=O}r*BK)[gxGq0Rql]fTS(#tKT1Sm4)G!^w@z`$of^uGM~|{@`J%37I[x4.H' );
define( 'NONCE_KEY',        'b1T$XISjhlwW,UjjY zId/_BnVw_3uJ-.#/foCjG{g[^eD:>Dz`xGJuOkX774];D' );
define( 'AUTH_SALT',        '#`lM{End}8-@+-0e-;t6%-g0Z_y|URM@qee5I_ghl|7z@LfZ]~l[akQi/AUTlxr ' );
define( 'SECURE_AUTH_SALT', 'sy 1*%z7}9u(7M,qBD_;Ne( |~(0VTTxi?2.M{S/}a:LKfE`3:Zq^}~({<B`~SRG' );
define( 'LOGGED_IN_SALT',   '6Q7l-thREoe $:a*FhuWxkndLnL]dzxKan24*<$5mrkde%03OBm}w0<HWnN>@!jI' );
define( 'NONCE_SALT',       'CV8wN?}Z4ZSUdj& *gdWwadt#Fw>5}hY%N^n@WD&G8ldX(I?hIKS%Gn58>Dk*:z:' );

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
