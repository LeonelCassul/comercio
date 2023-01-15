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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'comercio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'x a,#u]SEb]/cdAm+MX30lnwALDE8$zAbA@57J)^Qp?`.3j]Qhi+HCsB&X)}*kZK' );
define( 'SECURE_AUTH_KEY',  'O//m_&(uZ3;8SqJKh#mp_H$+54{G5-I(2G|$IX*D;eZY-<j_I&{#B1Ay5DZ|~Y5d' );
define( 'LOGGED_IN_KEY',    'ekD<W~obI)gAymm#?gT8RM3/kjSAEek$tm6qKVJRx&apvmA`0Y`-jreltNa*Z&W{' );
define( 'NONCE_KEY',        '%]60QjEta+[et;:e8:9%wk3@cpQ`6!UN1G&PKr9,a/Jj[iCEENmwyZ2,pEl>6lL3' );
define( 'AUTH_SALT',        'cxy8(n)1RR`}%/{kIY|~1QH?S4g}sV;+ g!bm?B03Z9:q@sdv.)0{Haj=DY8/ZE`' );
define( 'SECURE_AUTH_SALT', 'F$1j|p1X.,Ab#^3g(cr[+fxV$# eEdLxdsoZ(OqHXHj=`#N`=H5E4VCt5uqrm=5:' );
define( 'LOGGED_IN_SALT',   'R#lub!ES6{Z-@TMhBnd`cx[0YYXz>haz^nS321w<Y`X(@0ZOc#dya+c,32kCI#X}' );
define( 'NONCE_SALT',       'u=t*]:xem~[S/ChFDkjGF}3c?fL3k<=#;Vn-X]G(a}I0D2[l_tx&E+{&FvknW/fi' );

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
