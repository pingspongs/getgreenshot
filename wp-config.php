<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'getgreenshot' );

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
define( 'AUTH_KEY',         '.~:Bycc(21ri&I$=J#VGL@xky.ot}Bn!^jw*x?Z!w[mC|;P5y=UYR!;Pn)x/OG(@' );
define( 'SECURE_AUTH_KEY',  'zpHC:p2?_dv%G5iWFd2g,q$_M#2j0h2m;wn5rnu{L=jHokoDDNN@p^x`9f1qu5`A' );
define( 'LOGGED_IN_KEY',    'dZbp2A}.w.=8I;- h+AH6Kr&>P*H<IA2bKQcdwQ=,2!7S/!wmP(Cd<*!D/2]_C`f' );
define( 'NONCE_KEY',        'K1V/KGl6G,}6eH4,kpoD0pqa|o{L<Li(>V!6,c|a} H)6/1B@KhtNUm0%{^+qBmh' );
define( 'AUTH_SALT',        'hr  #NU|kx}re?lNfpphJi>|k2.g|7? weDqo/Bl-1*(De1~(%A>6 LS^F9`:^?E' );
define( 'SECURE_AUTH_SALT', 'qpkHs.kk`c[@I<?iz%k7)|^S3pV3V=`xbd1cy3<bWP6}ia@9>L:XB6OU6lSDyaSD' );
define( 'LOGGED_IN_SALT',   'WC{}*5o2,,?lx?1jRG`|RJkx~V/K4nYus;kn]GC%MLw)Lm,aAonHtSj}.3Z4umOU' );
define( 'NONCE_SALT',       'u))jw`7Ggi<nV.ED<|Mn&;qhn5S!SKSL-q$gmwcxIBC_~EtNO^L;)$qE]x(3,|OT' );

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
