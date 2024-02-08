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
define( 'DB_NAME', 'pruebasolucionada' );

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
define( 'AUTH_KEY',         '+B)r2V,VDAt](ei*I@G@oj0qV5WhENpi gu@XlY|,4/9Ek/Y5ILh[rO9/gh{9~A]' );
define( 'SECURE_AUTH_KEY',  ']~i,IeZWUV.`Nal!M>ExbcJ2d<H),6p?Pj+o;:/8kGO2j-+X$OarIo_:cU.KAMU:' );
define( 'LOGGED_IN_KEY',    'Ni7fY;!<AZ| x=Q{{*;IaFGBW]5GxN(r)W:KRYIwkgYK+{Ke_Hj)U&9Oe5zjNgQY' );
define( 'NONCE_KEY',        '^`#>Pa=_Pv#MTC;P&cP2G8kMxH!ql7n!;T5Nvr }@}9~(>]o,+qyOoOzc][h:p`$' );
define( 'AUTH_SALT',        '+ts3~1W~)MRYLZ8~gf]h+W$Nk]4|>tpZ:L*imK|q^$X UPGU/nON+^9j/k1bSp_6' );
define( 'SECURE_AUTH_SALT', 'L;w._5SDDu.,w>:+Tx`HFhnDJ?I5tO@rN,S[*_vA{#t6H.04cvhzAIu<WL(iUrNE' );
define( 'LOGGED_IN_SALT',   'nH+ 5*LM,%aPa|eOtT|X];-!FeOnV>u&(hf@_u.|Mt` 4:;z46h!]5R#B{~<g7Xx' );
define( 'NONCE_SALT',       '5sbLh4y`jz&$jI{zJ&/GKk.g-SvsY+|>+8oq=$PoQ8y)qnFgUE#,GIkzn#3F7|rP' );

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
