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
define( 'DB_NAME', 'mydatabaseserver' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'u.K BGmxp-o2NXi=;;I)[V;L1Nt{P]]sE~;.3[0.bfiu?K`p#B+R)_3~HKRb*Y{S' );
define( 'SECURE_AUTH_KEY',  'Z@o)?dood&CkrZ3D=4,v&TXvS`3LdSnpWjS##]->Y$u-,,LvzJm32?irq)*Z?d!}' );
define( 'LOGGED_IN_KEY',    'Od]];cYTgk1<M2j?]7}kMW#&q$<&p<<I]LlgyoTOCCoa5aOd3iZSM3b)9}#(pDgF' );
define( 'NONCE_KEY',        'C==#[f7-u1QrM3ni*~*m4Y|Q,vx{)Yn!uhuOY6< M!nD|x3/#]{U hL8^G$!KbHn' );
define( 'AUTH_SALT',        'U|jy<`%El~^9_d~<K5?R=JwQHITkNUnO8;4V?gK]W4@rUZ+kS|{{0> ^)VWgZ,#7' );
define( 'SECURE_AUTH_SALT', 'VdNWJmm#vne1S.o&vsVcMKfgqnDugj^|5; 6yG1=8WD0xkQ%`z w3s&|R2S+J)a!' );
define( 'LOGGED_IN_SALT',   'Oc9x/g,gMY%R|%ycxa~nN47qM;A6NL;#J:$ILx^.cZ<:9##Z[|qyO#T(DPS+{*F@' );
define( 'NONCE_SALT',       '/&}On8^3RXbcE0%Tr%5q3A2-vOJ5.s;bB (1z886MlG2S-#.sF[9VZ~ZgpG<20t;' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_wamp';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
