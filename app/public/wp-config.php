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
define( 'AUTH_KEY',          ' .L+@?L4+Q?EF|4>[.sa*^r33d!A*>ef/hJQrD9(iiH)U^$59ca2e~&Ta>%S;{JJ' );
define( 'SECURE_AUTH_KEY',   'mHRD=x2y@;`*.mNiSy `wI]*{>yVT8x[G4,[cw9l@i,~46|f|5[W9V%X!GW.v2;[' );
define( 'LOGGED_IN_KEY',     'zTu7q0R#hm#;eV{+):cm!+bVS[-loz!R[ghjD=jOA+hR#QCv+M|}4(#;7}5U?%/B' );
define( 'NONCE_KEY',         '}$^fJNcq~fS8I8|%5SKOIMbDs$Kafu5^E;^~MC6nj-g.<8}SF]B} l( eGf%6}Jo' );
define( 'AUTH_SALT',         ':bMV8baL/vL7jyuN@%FFRy~Jtc!IHH-,b<DAZ%V$JU~CY4=(xSAa[z3bmC wN{w%' );
define( 'SECURE_AUTH_SALT',  '}B@(2JfoNU<6m3kY~ooc;fRsXA^OBTu;)47(pBE.JcQH4d63=dG<(`PCy[@|+>d%' );
define( 'LOGGED_IN_SALT',    'zo*ihQ@t~<RMYRa[Q$/.KHG!dy-@{qT,o!Tt&P>},wE62#re*OKrDtL!TDfxVImA' );
define( 'NONCE_SALT',        'mHK1 d5pb8uiqacs&onhWJVE)LE@@9MR= |w=?4FKy=+sc6[blga+nx:>qhD3R[6' );
define( 'WP_CACHE_KEY_SALT', 'gSG:U$,mG$ZHJoY2)6NQ&J<*!fRG?Noc=dgrZehk#FB|157%]-hlb{%?/{*hvBqB' );


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
