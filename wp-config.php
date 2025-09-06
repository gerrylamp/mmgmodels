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
define( 'AUTH_KEY',          '<5}Qsm``BG^ZYPJP`.|C,/0{5>AhHVwnHaO7F/Pif6luGu$mjVv`NGhf$^hBYp3*' );
define( 'SECURE_AUTH_KEY',   '@yb:f~te?zuB6Yygu&^KcLS1>)<6_XClilm+v4};ES,FJk5O[ S=%r^rd]&GaoH7' );
define( 'LOGGED_IN_KEY',     '`SiAR!&w&MOR9Cejm;e0Z|z%SX-&j0;VBeN,Xes]7{u.Pm.O,.Olt98i=Ad5AwlP' );
define( 'NONCE_KEY',         ':QMqCTtTXUp^6Vt_=hzooBn8R41pOyFw|YD0zkzMP}=m:F(7i*K9E}=*NRa{tGc{' );
define( 'AUTH_SALT',         ']^Ie$njOf6kV*l%C4>2JS_%u]a7H^f~oN@XTzRb}`C:ikHa%04)Cva4AAZgR4|Uq' );
define( 'SECURE_AUTH_SALT',  'h5zFm&q6gfX0gXY,J<%%AuG4(]Lkz.`v8zuJ$sRao*q:BasTf02b*1B4t[AO1BcZ' );
define( 'LOGGED_IN_SALT',    '9T g6CIeT5Y_)zR%KugIG1|Bq6lf6e4^N:deW-PmfW?^63#0+36*|AYF5:qNlt@n' );
define( 'NONCE_SALT',        'DbO1+*Y<t7S5lBP~,N25xIQ]BFfgyCmz%65(84rtH-EIIdH=aGH7{.(PEU){qdCs' );
define( 'WP_CACHE_KEY_SALT', '9fv}aT2SWZ]c8S-nz_NH#qkN6X(OfE+9ue@+u@~h>gQ+UY$Cd>`y+.q1QrUy&{Ts' );


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
