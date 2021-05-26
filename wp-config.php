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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'himanshu' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Oo}ykq`UxHy}95C2Sa3TgyVK##6~_hwLMKSr0zcF;>czNq|E0S,cU=e)K#Y_cW#O' );
define( 'SECURE_AUTH_KEY',  '1*aT|r5[YlCeLSv<FTw92tZ&HryvTl!Ouy$E05$q+2RZBdzT.c>>EF^=[Lu4_]fW' );
define( 'LOGGED_IN_KEY',    'b>]Ush{>T/z)^fBN$3dA~r}1j^ `(]!|n!yAr{2v=^=Y!^QQm/Q*D3u?p?BF(rEY' );
define( 'NONCE_KEY',        '5R@Sg/SZAi07t5b9ac8ae%v&0H ~xG93:.<ZBRD*GG|5[6O_xQBF7T|.m^ {vjQ|' );
define( 'AUTH_SALT',        'sQ8mTi sy[#1_BR@)%EKF7_>[*>:ZY/e3CL@ezD ge%OJu?(~~pMs9tZdzhy;CyO' );
define( 'SECURE_AUTH_SALT', 'E{1sh!*)c|ZDJ<f(Eg<-c@VAdi/Z%Z0g|JCmGdoB{(-~)Q|<X$c>k`0|J!(?tTC1' );
define( 'LOGGED_IN_SALT',   '&UfX_/kM$n:W{Ul)X fmZx5pJ$o?@KIcALCe.F6aAAMh5{C4q)8#Gi3tDMmFc1X:' );
define( 'NONCE_SALT',       ' Y;#|I~;c]UV%l4,~h(&l}??^pr-5`wN;?OsU$<pf|%u$A04T7?+sD7,W-NTh4ah' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
