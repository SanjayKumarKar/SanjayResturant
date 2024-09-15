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
define( 'DB_NAME', 'wpress1' );

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
define( 'AUTH_KEY',         '3! CKbS/ HagJ/`_E;<R]Y|}J)oHvLYIgjkBh^gS0_f@,C&R`1!tcO:.=hyqd*Lh' );
define( 'SECURE_AUTH_KEY',  '86whJ]=QJ`s+jl[;J^9xD&Sv,,@Ep+oGpYcDo3d#Qc`pSV7;#P Ibef1KlhbJ$D:' );
define( 'LOGGED_IN_KEY',    '!Nb-vd?A.cG=kxb!~<o,^=&PAt]996-8NB4G7crj|.89Fs1F7I9][9VA_)sx<ECk' );
define( 'NONCE_KEY',        'B9g|2-HhLNgO%`jA3Vh2L|?N=^.!YzEbWE/@$R2Xsv%eN*-KEQ!ZgY&M+pXl-c*c' );
define( 'AUTH_SALT',        'G4j3rX/}SkX-f`6aNd-sU[<!=gr7mx[A%*r.i<?heuK;k4U)r0Weu$]P]OM?l:za' );
define( 'SECURE_AUTH_SALT', 'g5|*wv9ihBZ$6};&/ekG!lKEO{3Yc/Fo[b!!5,HW@(rfHKK`-<5(N_Bx7NSUFbVs' );
define( 'LOGGED_IN_SALT',   'K)Pb8k#?YCqQcF]Ow],9-<C}:&DuzBdnkOe%Ugyn2`{.Kjr85wh.x_icxTu~-8J;' );
define( 'NONCE_SALT',       'HN!r}/LcN9p7j G]c#pIlT#BA,z0c}dJ^crP6E2UK?AFF^J{EV/l)uY_YDVdGR( ' );

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
