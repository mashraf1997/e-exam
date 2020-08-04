<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL

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
define( 'DB_NAME', 'adnanco_brandmakers' );

/** MySQL database username */
define( 'DB_USER', 'adnanco_looka' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Looka2010' );

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
define( 'AUTH_KEY',         'I&VP /IB%]$,<4XMJ,t:tB[u.>L=sYTnv)h5l1kKzpq{P]Y7YYee^bd|b yVV^iP' );
define( 'SECURE_AUTH_KEY',  'h 9.Nd&s|cg1r&J[j? `QBV]g024MZb{EXR&+)__e<d;m^xhK{[3T|v#a`P)yq10' );
define( 'LOGGED_IN_KEY',    '[;lui3fVI*q@T%5mI+[LVed97VAPCP3*_oKxXZMsM &OzA29X^&_N0k|!;]jymSx' );
define( 'NONCE_KEY',        '|Yzun8O#n6Qu*dxFO@mb[wNd$~=B_;$b]]>|(HV6)io1S!9,*oU8S7 67[~I>WPy' );
define( 'AUTH_SALT',        '1s@l:nEzW-D6@&~$E*i~b$cH$Q w<>fb@y+Kw!5HrR+K$3y+3bVX)h?!?L.Aj2fk' );
define( 'SECURE_AUTH_SALT', 'qRSASoZq~a!B74D L/3FCD1g*Z>C+cV[@]?,Kkl$Q9W+39x*4/qtV`n$8E1^wy0^' );
define( 'LOGGED_IN_SALT',   'vQ3;+gi7ZO#x/LJJE@F*D<eei_{uFXXuntNg)i|iApZ%L^v<6Rs,ozO<G`&5+xsJ' );
define( 'NONCE_SALT',       'YN!8h}E~^Sn=)>X|4wLGl5^#3~M4aO>%sDR;4[c<:nS^cvmx:RUrx)6#EOkhAIlC' );

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
