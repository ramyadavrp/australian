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
define( 'DB_NAME', 'austral' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '0]!2Pkcw(uL;SG^KFAk<w]|-(A4D{z%d#Q4LU.]SfCO<J~sjS0G(w3c+`!E:ok a' );
define( 'SECURE_AUTH_KEY',  'VLc[~aR<#b9^?YiNrX;3)/^ha2wRUU=[va+(;1NaWl_.9em`5-N4mMx(*:{D.rPE' );
define( 'LOGGED_IN_KEY',    'Yyev0kPlK%R+U~Ww/HSTm[_yn2db,/HrcJ510fROJi=crNk4*GZ4eF(VJ^Liz*~L' );
define( 'NONCE_KEY',        'W![b2%Jk?H,<kAT:?Q/<M(37I/X.XeARt(%Xxy<*CiZ}{P#LxDHCM]`sVIbW>jNf' );
define( 'AUTH_SALT',        ':`y08vQ(%+PRP[}6rn3eSd6VKH6+2#Qv4:7Sfj`)0(=oPgFXe-D#E<@mK`g?zri=' );
define( 'SECURE_AUTH_SALT', '`|^IzsX,EF$&]BoIy]&*Q+ h3.A;S%ZR)PD$5&S[hb#?oy[*af`<nW #KIq*.nPX' );
define( 'LOGGED_IN_SALT',   'w@83jIt1--^v|P3dB.*X>+#fNu8$gi6[~a.RW]UJ3ZS}=5.&dx$rFj]9/4ZJHRxM' );
define( 'NONCE_SALT',       'IOgpPdL1MEVB$^2s?p~ft&A^ m=AX4Pi>0O||j!MfL&jq7q+J}%a;,CO9{QoTO/ ' );

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
