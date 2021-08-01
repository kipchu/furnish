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
define( 'DB_NAME', 'furnish' );

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
define( 'AUTH_KEY',         '%2&(AdrR1If1c6a~uwZ &|uji<TEYpq.pW}^0C![.?-ZsF]|S@WAV`YUm`u]Kf-i' );
define( 'SECURE_AUTH_KEY',  '$nD*+?HAe)}<X4l;0;XW/{0EbC4+$qg^,&Oo;KEh6,_KM[:!#.`MN#(Al+=`/C?s' );
define( 'LOGGED_IN_KEY',    'Nem }U Y~;fI0Yq*!4#:)C^=5ts2/kqEe:JwE:Ud{R;34zuD<nS-.i+HYEAV]]!T' );
define( 'NONCE_KEY',        '@41HB}jl24^Gw6ywZo]Zfm%nv<8_%QfpT3e-g371t-:!(/qwoATO97IQpv];9zt[' );
define( 'AUTH_SALT',        'rhV/5WJ=J*D)hR1[{FFnk)]=S@S|9y)H-!l#kx24~Y)rHEn`Jn`OKyN9)7PA.Akw' );
define( 'SECURE_AUTH_SALT', '/eN%ag]FpKe_ZE>,}%vp!w0I/U0YP.qWHui9xK~<#:LNjlr1#!tjqd.@_>b_U`is' );
define( 'LOGGED_IN_SALT',   '@u%#H{Cb]pTF%WLx4fW)IX`*K^+[UOtJtTt,1eyX4}vTQ~+ {*_|<m^ALqN@>+/?' );
define( 'NONCE_SALT',       'Ie3!kUk,v&FcqadhDedku!)N==UH:7JtMje+}9n?Sw$Mwln1sb4mS1Z6LN~)6.a^' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fun_';

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