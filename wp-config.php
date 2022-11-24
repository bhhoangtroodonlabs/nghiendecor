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
define( 'DB_NAME', 'magiamgia' );

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
define( 'AUTH_KEY',         '-KnKPK^-aKo<|%;aDR;[!9a#py>3z,~Sqs+u:x>z{1c86!;j R!v$~`1x:@mr:(;' );
define( 'SECURE_AUTH_KEY',  'n%#=gZj*|Xv`A_|.PMQjiTE?@G?IaJ*>u3?2E)}aM]~X`*%,8ovy1d0X+z1&_;A.' );
define( 'LOGGED_IN_KEY',    'xx`Xpn_>p#aQ>/g01/Cr3dSNz-Gk`sUh {Q2%PH{<TW+^/_6QywqbGMrPYR]F}mG' );
define( 'NONCE_KEY',        'W~y;l!M_l>@t&4+$N|A7gew+.=mPonOqd9.Y.L[%XV|Zw@th3(O0,nG:uiOQZ|KY' );
define( 'AUTH_SALT',        '9G:>,8Cu^q_[yX2%=g06g>*f95lIs>0k<i(^F0^dQ3hUi5Wk2uK-wS< >c_I>sXs' );
define( 'SECURE_AUTH_SALT', 'r8RC$dn^%WT_H<Bka>bAHmwo/K])65UezVW{{#Grn|[<$[]i$q .qW} VQ0G%)kB' );
define( 'LOGGED_IN_SALT',   'k77W5t%A(W $1Zu#@<H4VLr8:Q:M.;,`vD:td 9a$4{Ir^;wL]q<[;E^IalP}p%Z' );
define( 'NONCE_SALT',       '6V*}@:T8-{;2>$0~nnJuda_i,Od(F9&XAPK`RlG?tnN`*k{gfzw(kj]%YQf_.IaT' );

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
