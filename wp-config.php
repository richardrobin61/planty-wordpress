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
define( 'AUTH_KEY',          'ak<H4s&#x|VId-SZqQ[x7do4G6s)!&w7(~BSQQSk*VDXXc/?+Y?#6.giiF_hvKGk' );
define( 'SECURE_AUTH_KEY',   'FJBLPSY%Ri(v<VQV1>hP 3NEr` _Ct:z4j^M<X@+(XyY!f.#/C@52Gh.O9=5d47d' );
define( 'LOGGED_IN_KEY',     '#2oY]Z7,3g/e-T=qq.>1*3D$==p9VC3m5 jY1jWM(5D(oqK9$<C3n#l{M~<syn!&' );
define( 'NONCE_KEY',         'CM{*g/N>r:LC;D/B`pC/PIT(CjT$G(i~[dl;Yu%dlC.YMBfWLv)ySNBk$$74x?Mf' );
define( 'AUTH_SALT',         '5LNS?KjZ>cOG|,Oj6|C`x`$o?y|pI2DC#8*-[W;B?RoQOqcUD2=]S#zLzzUg;?;q' );
define( 'SECURE_AUTH_SALT',  'HsH4+FQb40HcX%x7(ck^#9h&E66R(UPc$KV4vrnq:+*(7%0#pXBg!_j0[F(l]P];' );
define( 'LOGGED_IN_SALT',    'erQs*1-gJcBKMTe$11%UNTo&cr*L?;R7*,%&(v2{=,9CS~.x!sRZ,:uO/;(,~XRt' );
define( 'NONCE_SALT',        'j@kv,N02yP$36M{z$%|@P/-bN/4(T*4r_BlwItgZUH%vtS%.+$NrVU`Byy*(Yh[%' );
define( 'WP_CACHE_KEY_SALT', 'UUp#F,);7@(J#dA:afwuIt6jB74x{m+@m!Y)R+q cLh>Y[{+n7F%.xM:N~D/$t+w' );


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
