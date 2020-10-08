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
define( 'AUTH_KEY',         'jgCs)(d:5C`0)gFtWY[z3Yl>-p&>+|!enxr%W|<2-Ni{.5e7FE_$rk3cu-4RI._e' );
define( 'SECURE_AUTH_KEY',  ' Us-r-<.Qzb9c0?;D5[Vmr{aiTA*`-V{q-fG13dk,POB+%`JdD$$kLqdrr-J D#c' );
define( 'LOGGED_IN_KEY',    'k?m@b+%#[_j8^4pf=WrE{]7u>U{v]hiQ%s[~C5#;*yCkM]Db+VEQ|1%w2%7{js) ' );
define( 'NONCE_KEY',        'kd:b+P0}<+emb2lum1)x(+G;M68j16fhgK=2RHSC/RV*7E/5r1J0C*d1`5oW,[Sj' );
define( 'AUTH_SALT',        'S_)/CeYe<X~;t5ATqT@ZN*_I,Rg`wK(98gVb.G3OJ9;&nkV]LxW*<Gmj/=yQJGEn' );
define( 'SECURE_AUTH_SALT', 'm2~}H;]-niTM;XAtjgF!6f;-!BtR-%pB3tgQ.U_*c:HW^YNn&[`K!)1@eIUMkh]k' );
define( 'LOGGED_IN_SALT',   '7!dlqx2k<8)|fr$~~Z8`N))M{cG!B:Kw9`|GK&{@;E~eoY14?4^6`pq^`I!y5:fa' );
define( 'NONCE_SALT',       'nSBptzj!|>1BxGjNFB!D;_&<*vig#Y.RCr`zZ+KbyB-UOd&AO<r(aar;N:^KYZ` ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'axiswp_';

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
