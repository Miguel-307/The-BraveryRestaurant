<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'PatioAntiguo' );

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
define( 'AUTH_KEY',         '3%9HXZ{$glj~u,6-&Xx==Wg.tYvYKs>}6i-,[Y+R|%ul4TOF12=v!oK[`9,TqCJ+' );
define( 'SECURE_AUTH_KEY',  '<T;|>H;Loc~xUL]Gh,}]_H^9#Md;9R&hsE`BaJHUKnRYm;-l*Zu&TA|SyGJ-+BMe' );
define( 'LOGGED_IN_KEY',    'zH<Lz)C?pes|Iqi=D7-p~ |D:SY.@CA[(jb3*.7X#X[lI-U3}ANB:fV4:k+4ii%;' );
define( 'NONCE_KEY',        '.Xk$pCw&6dLu0DTEj1hB)kU`4vAK@^9T.U_x1Xouasf4:;>ja>Rpw>;iRE*PxnH.' );
define( 'AUTH_SALT',        '`6,EMc&BvF(qYb.CM;?HssfPIh[LG$ SCy_6C8T^7T#OL8N}Z|[P.ClN~iBrz;[H' );
define( 'SECURE_AUTH_SALT', '.gi.1<nlMG}KXkaIpa@l?QQeP2!,JPy`sOs1hYv&(6M?C4F*=g}TL[J25;BBf*Fo' );
define( 'LOGGED_IN_SALT',   ')QLgYw<TQ+VHrRdi[~b3FCEHDTv>ys,T1#><alcIv>:Z,r3o3j9w|X<>Ls<R:^GF' );
define( 'NONCE_SALT',       'ak 8G3B?}Gk-^U $h=Gkq?t{D|CY,AgkX]lU;;?L53}uYgJqSL)+`:>O&+pbw,5R' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
