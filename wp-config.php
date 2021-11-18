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
define( 'DB_NAME', 'devmedic' );

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
define( 'AUTH_KEY',         'sCTwdctIBU6Q-^)FY;x;6oC(A?YS$r#k)[oL~&D*87Ivk.2N,J9w#T~_rH]3FFS^' );
define( 'SECURE_AUTH_KEY',  '^+%V.3Z k&=B|1*_bRgxeV.4C%Z4OFOaD`(0K4sa85<VDAt?Be^*2@u?GqMd@[F$' );
define( 'LOGGED_IN_KEY',    '9p:n+Ax|B[%^lHLwl)]dHVz2}`[6w~Rj(]?r|q TL)o?h;u#QwfO^w)#6v|U[O}-' );
define( 'NONCE_KEY',        'z?KYrQ)~F-k>g5~m:mIU$)jx)}{ny?cK]u!Xr*#l^P3hkk(-j_+7FNTs6%S&1,s0' );
define( 'AUTH_SALT',        '3Xc&8sDvEe{BC3t}8FomrbKLU;}I#*KLwL@!d9D!AKMzN6 H<H>q[F9j]IHy f|A' );
define( 'SECURE_AUTH_SALT', '-1QB<aT&{(D044A^rI#/YPJ:8ocst|wxA24hDAN-&_G`%d|8QIKx^!2j@&.PDe.Q' );
define( 'LOGGED_IN_SALT',   'pVccF=P3GRkV1}Db|f50]@vQ`.8`CxU:nF{p.YXR  C-9Ntzq* aPkmyo(7M~Ozo' );
define( 'NONCE_SALT',       '<|<)t?[8;0<[p}P6Eg:g:RD4@yM;4w-SVF~YA4b3<B7U#?5A]2MsU=KS@yuHsj)0' );

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
