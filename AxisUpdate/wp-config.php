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
define( 'DB_NAME', 'AxisUpdate' );

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
define( 'AUTH_KEY',         'tNfFaMT>5>cv`G,I}oOC6&ESeV<zh2<OT?L[9|?qTvui[>80 bx/ulCYl^r!{(yC' );
define( 'SECURE_AUTH_KEY',  'F/[SXA[PR.=T1aw72w:sIU+#1$S W>c*{0Ojqb`=o?gpF6Md )VG.|*yweOuL}_N' );
define( 'LOGGED_IN_KEY',    '0(^-z>+qW`+)h=yl!8Ck-`^(~|(xJlkLU~_E3}auL0Qia/@29Ch:(3-+?@,2.!`<' );
define( 'NONCE_KEY',        '(S4[eS>#lPeQzXxhl=@jA+4sE3nn;4gy6svfa69j~-{Sma]dYcS7yyypop5y}@&<' );
define( 'AUTH_SALT',        '7^2 H%Ds0o_}?Jg?)g1$5C5r?-w$r + Z8!/TEj|ap<?3Q{0F-3r RRebL#y4@v>' );
define( 'SECURE_AUTH_SALT', 'Ho1&,g`k+<,^<8;C^RuCFenxNPPWS?!z`h6*S]]2Fg9SbP=A;^cmLhC561 0z.uz' );
define( 'LOGGED_IN_SALT',   'b+v3))V?$9s?P)D<UbaMq_,k b$u?@c`rpsEsGONGTJJU(<GMea~becQEf!A%SHV' );
define( 'NONCE_SALT',       '];pmX(Oka_Ek)(/3)Bo_z%siq- PCH&;3[<A3,I3&w,EYY=-$}8>$fEAdn.]fQ9N' );

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
