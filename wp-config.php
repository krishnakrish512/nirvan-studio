<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'nirvan-studio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'mFlCO4^Zly`^Gnc+,st/.9^VQ|z(,>t+DGo8JXI96 hL Kh WE7DE.ff!61/CN*S' );
define( 'SECURE_AUTH_KEY',  's$1;NJkEsim{qbmNp+Sg;`}[:<Yr0J?wq.,36#T=:Ck|ve.}G*yW$Sb0{Ev;KFq.' );
define( 'LOGGED_IN_KEY',    '7q=m8`{t,oaSBLNj$Pxeik*~yk!&~kh5hj.Lx.5m##4P[Rj8SbELe,yAc@R=+5XB' );
define( 'NONCE_KEY',        '9{p8!:$^&)#q6i,jl1Hd_>nBB@u)G[3IE%X}?mbDR$P7_H6kuNK1y|d)^DuKx7qW' );
define( 'AUTH_SALT',        'h`(eD+2{j`_zO%za;CGuXuv5GA=}@G_Ms:){Wmtfe`qiOTw.c$<d~mex9c[wa(K!' );
define( 'SECURE_AUTH_SALT', '_WshDGh@ll66i}0sC3*OoCA{?j3#e3rh,taK^<U+B;s_CMz1qR4&}m%[ZvZ1LQQn' );
define( 'LOGGED_IN_SALT',   'R|pB=|9>[o6n0>B~=`5T$.TI7r!Fs1J7.E/.?Ju:_^qcH*D zY?TSK){/4j9XC 4' );
define( 'NONCE_SALT',       ' )NPOV$]$MOK[!Z8b{2hxe)P*v`sY(D=J,f[;`3m+dKJ>MW:UuS_W8#7*<d&2hP)' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
