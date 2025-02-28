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
define( 'DB_NAME', 'royalagar' );

/** Database username */
define( 'DB_USER', 'royalagar' );

/** Database password */
define( 'DB_PASSWORD', 'rry8BptXrD8inCdn' );

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
define( 'AUTH_KEY',         'U^AIZI&;zS%0/L_`0NH_:bFnPAuP!a5^Wm9;$ z;[rf>lfF*7c:f<=Qn2*8zhQsE' );
define( 'SECURE_AUTH_KEY',  ']vEX{t?a~J3p-5}VSU8Q_qDczf E.~i1`~ck(5ZPiTj!oWA{1.;VV:LtTs-]g7&y' );
define( 'LOGGED_IN_KEY',    '(?aWv)6h=NuohBmT|e[O<{cf@~j+[K!O-],JeUIM qlv?NiQ(lTEk{+QLrz o|qW' );
define( 'NONCE_KEY',        'Y8,<{8:ZO<<rl(FwLP,,(^XM h&kGeh49,;LBF iDFjp$1E@wT6eu}cuH=eH|bZ#' );
define( 'AUTH_SALT',        'I>!iSO-)gvU%l~.[u]>+=n=SWeeJl3MffA8R&~:so4hSK_3`>sn?d$o*NFZo_TCD' );
define( 'SECURE_AUTH_SALT', 'Zb#e2Oow1Y(_TGH^dR%6$)<XNK: } KyVEvDJ*%k+C|bCklJCB ;r;(18ZR<:dOl' );
define( 'LOGGED_IN_SALT',   '3G{-]42~GBbDr:>/{7|:r`^Q)D+ga:Rhp|J3N-16YQ`|7{bC%$4QT;KeXl[=Q#Lm' );
define( 'NONCE_SALT',       '!#/+}6N,S7U4>p`9yizsHi,cYF|8:6R0lU-WV:&fMy;!9-`v~~.T5H5r~JiZ+)ZW' );

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
