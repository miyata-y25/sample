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
define( 'AUTH_KEY',          '@:]LHb3OcN.@P6_Zq~LcCA7N0WG.b zRuAA-:bbjEI5$`#-%[>GN$dPcSS.c%u?q' );
define( 'SECURE_AUTH_KEY',   'vEsjp:%z*OieJpXuS5+Lk*6NQc<o+/Q.{i]tJ#[o4+rZ]noMM**(*AKwT m:R7?t' );
define( 'LOGGED_IN_KEY',     '4Q.QROIW~uy}W<;YeVN?&BfOz9YC<rwf/BM,G<~LhYb@yGP<-SlnRt@T&6:19)Sw' );
define( 'NONCE_KEY',         'E81lQX-et`=X9},t` 1zu0hu&xoN/O;]5knEeP+2/vOR2O8EQp1HqmeNf`-iaZ6]' );
define( 'AUTH_SALT',         '/IjfhQ)Dd`u*;]^sV5j1J%uG(5X}O,S7s`zbqgNfz}LX$.%/d$nKwpgUGTi*]=7Y' );
define( 'SECURE_AUTH_SALT',  '{4j`~%i#n8~n1]p)*4G_;xX`2#@ZNn!89u)l_sE1y@SDEa|qLP202v,=uCY4[I0x' );
define( 'LOGGED_IN_SALT',    'n%%&g>k+8o>EGKeh[yn3<jS>/_x<<MXr5JwTM|S!%uSEV/p>41v&#{|Mlx0{7O<5' );
define( 'NONCE_SALT',        '2g@]r722`Ny:qhu,GOu`K{1;3#pX6 TaesIs4nc+(eSYG*?t`R`Pra`!N9!A.qaW' );
define( 'WP_CACHE_KEY_SALT', 'j==?KtS-E7Bce#Je.l,Q(UwS *cH+0b6ZVNg6D7tY/R%?T:Bh$X4u~/}-]GFU(Pt' );


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
