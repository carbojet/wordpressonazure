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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'CY)MG@Ab+s`Kb;j{SK(,Ubh4KAoZ]|>./Kd,+!kLX@X)Y?,%d%5Y93~QCtrj({>&' );
define( 'SECURE_AUTH_KEY',  'UuVtF]Zi(]0qy$9^ypG%Rn6Odix0#6r6m4DTP#?*9SID]yzYOmY)w>7.cq{M3Veg' );
define( 'LOGGED_IN_KEY',    'o+,QnEo(Ex*y9:?=>s9_(]BYz<?0,_G[vSHB60LO.qh,MR,9u2Lk<45YFg<g2KKX' );
define( 'NONCE_KEY',        '{9(j.,Lm;BbO@ucSf:yyECG#y_huG=k*4H#==lu+wkqPWu/9Q$fo?ZWmr9 g5dGS' );
define( 'AUTH_SALT',        'UQlZ6(@;#4&nNsG~=yio|lt c|#SPFvt%O0rIJg-?DDk*mK{f*)0eOFuqKx@S,%+' );
define( 'SECURE_AUTH_SALT', '>vX<;x!?&:69Z;?Kwk&E7`sfw-32^%s3noRC+X)ShhAFas b3W!Yc.{%x%M.(^s~' );
define( 'LOGGED_IN_SALT',   'n75(m ]}bw.@jFeL4=*~U4VAw;v{ 3!KOWeizPa}yrQ(`iQ[Ae.!]j~<69h@aVuB' );
define( 'NONCE_SALT',       'N}0Y?!n1eXE:Tg{X}w<$~C$ZnR9#,D$P0L.8SsaluhB>0Pe::]h|MpL}hG~>KQ G' );

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
