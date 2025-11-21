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
define( 'DB_NAME', 'webappblog' );

/** Database username */
define( 'DB_USER', 'webappblog' );

/** Database password */
define( 'DB_PASSWORD', 'webappblog' );

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
define( 'AUTH_KEY',         'r4us]_a:`LyCjiF[Y?]T@TTG8-f*8-/Lql9LG}F]$vRK/OF}Or<w{H^A%I[ hx[7' );
define( 'SECURE_AUTH_KEY',  '8>*2ta%6K,}RM(*zqg>Clm$2L$G&TSbAa|gJO%7?LN6*y^/C  ]oa?`TwJ8ID%3o' );
define( 'LOGGED_IN_KEY',    'kC6:]^$yf0b:]y%q.`A>WTD>QzHLPB$Y,6CHWFFf.-ZqRA*AMY-]O-lGaz{/HH g' );
define( 'NONCE_KEY',        '-)P<NiSmao7z}-LOtPR?aLNtEZ;r?[o^&9cz_TXI5&vWO8bh1@3G=Gh+{ey/+mjW' );
define( 'AUTH_SALT',        '7*CW&C1Jt%O^n$q&7O#(:9R_[m;bZ[7rwo70)o3P I,atXA$jd!SeO]GPHIpOsKO' );
define( 'SECURE_AUTH_SALT', 'sw*H=bXRA,kF`VtI=(}_Bz|$S*;Dji,A.g+x;UL/si^2QdI#cn:@M-@e!#$+PtX@' );
define( 'LOGGED_IN_SALT',   '8UmZf+rAkAn;0 #`%A@:J{i)sEm*DLT&` !H3l+%pU2R9jQ@.g>xS:(j.;R$@:sx' );
define( 'NONCE_SALT',       'aGx|x<dGz~GB]#!$!J0?k.w53kd+.+@/TRE+7g2A`tk))S8k(&R(&[wo.S6v[ZwC' );

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
