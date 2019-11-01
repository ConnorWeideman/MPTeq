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
define( 'DB_NAME', 'mpteq' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'x8n*//RUbvQP!b2U$d5,8qnhF<(W~v01(BE24aDlw#Rp=lsJ~+1Vu@uCE{3FClaE' );
define( 'SECURE_AUTH_KEY',  'L*#xY7[$?Nd@aAL>+?0s [)1y9-xzY88J.qlwI|z)Ln3D-`b~kRppd7:l{cnLTg5' );
define( 'LOGGED_IN_KEY',    'r*H5hZkkO1$&V,<!HfmuFw^5t>njbq)|8##qVKQi=P>2_{4OoIe&9k6T]7KpzIBG' );
define( 'NONCE_KEY',        'x5~HJz58$h=`iq]YqjzTL7K!nP)IyQE-R1mL:yIQK{-jfeUL D]`(0=^R(y9;~?l' );
define( 'AUTH_SALT',        '8D I)!k.VZ63$DoE=Y&1K3X%G||XU1M(WzmXC&)DcRE]W.5 14 aIZ`yBWp`1)gk' );
define( 'SECURE_AUTH_SALT', 'RciG9L7w(JIS.V@}a4Z(f=DrjlXq(S&C.H/G5Wn:K+e2WdRm$epzM!uCE*u5&0ka' );
define( 'LOGGED_IN_SALT',   '84{pr8enJAp/V~GjitXD= Ac?xNf.pFgD!Z{dFk;xK/`D%EtGq5@7=?B&;?=aa[d' );
define( 'NONCE_SALT',       'zcAs;mX>^+%6mv]JgWXkB}>D51;0X-pf5wHGtGHj-J]]Gp7#K/i1W$VOCe5Imyha' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );