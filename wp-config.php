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
define( 'DB_NAME', 'plcserver' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'plcpassword' );

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
define( 'AUTH_KEY',         'baTtJMXmnUmvQ&T63pQEn1nB*G[7)[#;X6*n9~GMqDNv^B5nA}`-f}vB!!Q}-Xur' );
define( 'SECURE_AUTH_KEY',  'x@UPFK/=w@U?NZ;iXe$C36GZxC#<&g3uOSw&Te,Y*Kih36~wHzmq@aMhtZNqsb%U' );
define( 'LOGGED_IN_KEY',    'T0qK64vb9I|2v@~o$C^;_Y4[S8JyT^/$M$/8$B{<#7[b`|nR0$6z{O[S/<En!tlb' );
define( 'NONCE_KEY',        'plm0XQ.kN(&.elHdI?(:0Q{SQM:q`>:v%$Etu`_lv#Rz]QTM2mU)Xj~tTGx#pc7=' );
define( 'AUTH_SALT',        '1LOk<P,Vt_e#,GP=JKv|SZs:%gHZ)>CdBdF#aI1]r79p](VxW[$2g_HW-eX&Y, k' );
define( 'SECURE_AUTH_SALT', '<OGE;<Kp4=RGXb;EM#nO}%7&T9xv)F2B<M+RH`a5i/zO.LF_~#yj{/: >9mUcX46' );
define( 'LOGGED_IN_SALT',   '?$yuh E`i$j3qOa[|sgLW7G#fXL2&!DVxx#5#wWr/?9l+}rnOX>GiFNpx:Xg/YX@' );
define( 'NONCE_SALT',       'nV,Uy,lcLt66@PC)p/16rp`;C;+sUF&SU;Gc:(rH^46^mA_SevxrUi*F=rIiYyik' );

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
