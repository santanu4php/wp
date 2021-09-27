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
define( 'DB_NAME', 'variabletechs_wptest' );

/** MySQL database username */
define( 'DB_USER', 'variabletechs_wptestu' );

/** MySQL database password */
define( 'DB_PASSWORD', 'xZBFx&O61oKT' );

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
define( 'AUTH_KEY',         'L*R4]a8A;;zR@U+fN_p/oN5{@>QF3Z]Wd%AkpLpj|Lx?U49lws-^j&/EzsbpK0%H' );
define( 'SECURE_AUTH_KEY',  '4d?q9T !`E0[E$`<8X,)}DMgnWOC8BtU9C YJ46Xa)r$[zz=$ONr5Sk(w9NpDFt}' );
define( 'LOGGED_IN_KEY',    'gvA ,`(d&:YurlHc~wNWL@Sb]pa7i={[apSV.$9St2)0,f$$9umOD`u[KTlRyH P' );
define( 'NONCE_KEY',        'Mr$:lxFZ5|jkc(` ?<yl ?`:@0B$R2O`D[s#X!3DX?sHA^%;VSWUGVh)rY^!tf-^' );
define( 'AUTH_SALT',        'j5n;Nj2Nsf4]}&I+2I(mlNuYp_kLO;)a7f_]Tu5@Aq%^)EOZ;WrKi^4WcNC.Y_Gn' );
define( 'SECURE_AUTH_SALT', '-TNku/SIOQD|*>L2mYR czx(InoF@b>gK=F_(PDR3ue=<r(QI5AP<{.XL!aODzd9' );
define( 'LOGGED_IN_SALT',   'X(?5`79?(##NKKVH$202Lj0x-Pzy-QRwY +lhbz~p&KarIaz.Ztv7Kpqtb(jqpl?' );
define( 'NONCE_SALT',       '**+q}+[!9KO1}SJe{u[#R~I0K`LP6pYko2S;^faM#g9]E%y}%u6-_T[pwPz!.>uI' );

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
