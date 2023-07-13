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
define( 'DB_NAME', 'etwordpress' );

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
define( 'AUTH_KEY',         'eZzucjS5nR>kgK;4|Te;NJh8$Q)c)r7}d%8%.QJk68U$c/eNqRWZ6&$~G4q`W95[' );
define( 'SECURE_AUTH_KEY',  'Khho4KCmO>B_}-,L/9}Y&(s8,G!dxxNw*~C)C[f2GX9viQp:%vl;(2T7_`$G`aE4' );
define( 'LOGGED_IN_KEY',    ':M])R3@+m0}3MgR^63^xqm]<xYb!sqw4{)?FyYS/+[uf,n2H`3}337Ez`#SIj-9B' );
define( 'NONCE_KEY',        '5~2j+J}<ue5<_WbnbjiShUY~cr,f-ZvoPlEx.gXD<:azfHmDRTlwRG#9eg<H|l*Z' );
define( 'AUTH_SALT',        '*22I:CyYlcI>cJ<webP <!9JK#Q!B8uE+sR=6/(PYKpMTVm@vo7zqPdEs4|Kh#ta' );
define( 'SECURE_AUTH_SALT', 'NF#<6m=nQ(?5h0,0$$/<#%Thor(U=Xx<@!&y9-zx)klK&Z%ng??Woy$#m$(TP_);' );
define( 'LOGGED_IN_SALT',   'Utso%=fA]#<4 aYr;#@, a7mi?z*maQIkwzkd},SnhO`j?8! ]#|XC.rmjX^k%;}' );
define( 'NONCE_SALT',       'x9vcePzt0~rwAMg-QuJSZSLLcC-vcN(i)2K{x4Q55qJw52PC68(7p<5=Nu#3gR/v' );

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
