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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'c?Vy{+E7,)v5>J3CV9lp|cC>Nf2$))l&9hXeYhiRUW0}Xv-L7?(t3!lG66`H=*q[' );
define( 'SECURE_AUTH_KEY',  '!^Er!v:U3F!K|BFVST7)Z-} 1dawEmmD`<::<)+ny@*#:0 .l(xK!C|M@(q[&:q8' );
define( 'LOGGED_IN_KEY',    '5 t&S`6e#p-miy6&YRI~8>j@Rq.PAx&P)RZZ3)BMKh-.T{gReE-U^b#RGC!^}= R' );
define( 'NONCE_KEY',        '@hbs3(}kSMgH@c1LS>CL_Y}TIi@@+0j`87h#|A9c+fH*1+DNe9ACfH}!4b=~!<>1' );
define( 'AUTH_SALT',        '@6m3#oVUNZ =)Ia@})5tqGh.B,_&r<*G?j~p)>>@>rNv$;Kmn[A&{|Bs?gqTD(QC' );
define( 'SECURE_AUTH_SALT', '~$|8Ygp}CC)M#5;xJ`&),&G..{:u`w1{GkSp|2N}ksm%iiIO,ZI JF@zCr!^3[gu' );
define( 'LOGGED_IN_SALT',   'j`6%o2wek#TS<>lGMQ|aQqnPxx64#3^zbp&G*[Gb2=wVUU2[xVkr+gOjCZ#&_x$[' );
define( 'NONCE_SALT',       'F$i7fHkS5jHO T*U io%4@W]=7,J@BOVeF@qs$KmeS,@-DAJROQ0dOfUwc$Y.CZ=' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
