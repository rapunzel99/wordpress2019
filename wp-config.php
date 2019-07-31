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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress2019' );

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
define( 'AUTH_KEY',         '}@Q+JJ MkqEIRLlOx8}kE>X^v /nLZ~s9P/_QvnNSvdf&MU>(z)2ksFl4G[vr8R|' );
define( 'SECURE_AUTH_KEY',  'hjfEvw1RTZ^rVFmxp^jHGjD[8B|T&DsB$7Svs*9uvHXPKHP1(<%U`Y|zk(&2Mv:e' );
define( 'LOGGED_IN_KEY',    'i0)!f{:iy,hb1E5mH_>3!~}8^^(B=f=Oj7q+hw!LF7Ae3v?(Yw&AzlT,t){b8}yD' );
define( 'NONCE_KEY',        '(h7YS:`mRl,OLyIKw]E.rp]0=BLl@Qc)}JNpY>@KZ33?S)uPN]K7RxG5#j>S~)p4' );
define( 'AUTH_SALT',        'r#[B9p~14TP@4lw1G{Wibq0jF-;(dk`)I.mQs&@I%V{CUW#;Eoh:3_c7!iQe>iFq' );
define( 'SECURE_AUTH_SALT', '(^aY`)XpY$%EucY!,$m hwsy@[]29WPaA3QD&,F6GaH+]k@Z>UX:DgmnJ`l`LGX.' );
define( 'LOGGED_IN_SALT',   'o^^.yk.p*H-5a,cbk-CbA2sHZng]L2(TM=#/PuF3$,>+NB$np47phdiVy_LcaKDx' );
define( 'NONCE_SALT',       'O4DlRrg=kV/OG`htBOqxY*R-GP1s*kBiSJ;>I`!d|X(5l~JY7$(SA)M~*p^dAE+z' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
define( 'WP_MEMORY_LIMIT', '256M' );
@ini_set('upload_max_size' , '100M' );
@ini_set('memory_limit' , '256' );
@ini_set('upload_max_filesize' , '100M' );
@ini_set('post_max_size' , '100M' );
@ini_set('max_execution_time' , '300' );
@ini_set('max_input_time' , '1000' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
